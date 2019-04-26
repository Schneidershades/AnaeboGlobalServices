<?php

namespace App\Http\Controllers\Web\AGS\Purchase;

use App\Models\AGS\Purchase;
use App\Models\AGS\Supplier;
use App\Models\AGS\Branch;
use App\Models\AGS\Stock;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchases = Purchase::all();

        return view('admin.purchase.index')
            ->with('purchases', $purchases);
    }

    protected function createAndReturnSkeletonfile()
    {
        return auth()->user()->purchases()->create([
            'user_id' => Auth()->user()->id,
            'status' => 'cancelled',
            'finished' => 0,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Purchase $purchase)
    {
        if(!$purchase->exists){
            $purchase = $this->createAndReturnSkeletonfile();

            return view('admin.purchase.create')
                ->with('purchase', $purchase)
                ->with('suppliers', Supplier::all())
                ->with('branches', Branch::all())
                ->with('stocks', Stock::all());
        }
        return view('admin.purchase.create')
            ->with('purchase', $purchase)
            ->with('suppliers', Supplier::all())
            ->with('stocks', Stock::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'stock_id' => 'required|integer',
            'supplier_id' => 'required|integer',
            'quantity' => 'required|integer',
        ]);

        $purchase = new Purchase;

        $purchase->stock_id = $request->stock_id;
        $purchase->supplier_id = $request->supplier_id;
        $purchase->quantity = $request->quantity;

        $purchase->cost = $request->cost;

        $purchase->user_id = Auth()->user()->id;

        $purchase->valuation = $request->cost * $request->quantity;

        if($request->branch_id != ''){
            $purchase->branch_id = $request->branch_id;
        }else{
            $purchase->branch_id = Auth()->user()->branch_id;
        }
        

        $purchase->save();

        Session::flash('success', 'The Stock was Sucessfully saved');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $purchase = Purchase::find($id);

        return view('admin.purchase.show')
            ->with('purchase', $purchase);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $purchase = Purchase::find($id);
        
        return view('admin.purchase.edit')
            ->with('suppliers', Supplier::all())
            ->with('stock', $purchase)
            ->with('brands', Stock::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'stock_id' => 'required|integer',
            'supplier_id' => 'required|integer',
            'quantity' => 'required|integer',
            'branch_id' =>'required|integer',
        ]);

        $purchase = Purchase::find($id);

        $approvalProperties = $request->only(Purchase::APPROVAL_PRROPERTIES);

        if($purchase->needsApproval($approvalProperties)){
            $purchase->createApproval($approvalProperties);
            Session::flash('success', 'Thanks! We will review your changes soon');
            return redirect()->back();
        }

        Session::flash('success', 'File updated!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function approve($id)
    {
        Purchase::where('id', $id)
                ->update(['approve'=>DB::raw('count+1'), 'updated_at' => Carbon::now()]);

        Session::flash('success', 'You have approved the stock supplied.');
        return redirect()->back();
    }

    public function disapprove($id)
    {
        Purchase::where('id', $id)
                ->update(['approve'=>DB::raw('count-1'), 'updated_at' => Carbon::now()]);

        Session::flash('success', 'You have disapproved the stock supplied.');
        return redirect()->back();
    }
}
