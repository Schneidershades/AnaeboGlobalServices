<?php

namespace App\Http\Controllers\Web\AGS\Stock;

use Session;
use App\Models\AGS\Stock;
use App\Models\AGS\Supplier;
use App\Models\AGS\Branch;
use App\Models\AGS\StockCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::all();

        return view('admin.stock.index')
            ->with('stocks', $stocks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.stock.create')
            ->with('categories', StockCategory::all())
            ->with('branches', Branch::all());
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
            'name' => 'required',
            'stock_category_id' => 'required',
            'abbr' => 'required',
            'bulkbreaker' => 'required',
            'field_retail' =>'required',
            'retail_vsm' => 'required',
            'special_price' => 'required',
        ]);

        $stock = new Stock;

        $stock->fill($request->only(['name', 'stock_category_id', 'abbr', 'bulkbreaker' ,'field_retail','retail_vsm','special_price', 'quantity']));

        $stock->user_id = Auth()->user()->id;

        if($request->branch_id != ''){
            $stock->branch_id = $request->branch_id;
        }else{
            $stock->branch_id = Auth()->user()->branch_id;
        }

        // every new stock is zero
        $stock->quantity = 0;
        
        $stock->save();

        Session::flash('success', 'The Stock was Sucessfully saved');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AGS\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stock = Stock::find($id);

        return view('admin.stock.show')
                ->with('categories', StockCategory::all())
                ->with('stock', $stock);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AGS\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stock = Stock::find($id);

        return view('admin.stock.edit')
                ->with('stock', $stock)
                ->with('branches', Branch::all())
                ->with('categories', StockCategory::all())
                ->with('suppliers', Supplier::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AGS\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'user_id' => 'required',
            'name' => 'required',
            'stock_category_id' => 'required',
            'abbr' => 'required',
            'bulkbreaker' => 'required',
            'field_retail' =>'required',
            'retail_vsm' => 'required',
            'special_price' => 'required',
        ]);

        $stock = Stock::find($id);


        $stock->fill($request->only(['name', 'stock_category_id', 'abbr', 'bulkbreaker' ,'field_retail','retail_vsm','special_price', 'quantity']));

        $stock->user_id = Auth()->user()->id;

        if($request->branch_id != ''){
            $stock->branch_id = $request->branch_id;
        }else{
            $stock->branch_id = Auth()->user()->branch_id;
        }

        $stock->save();

        Session::flash('success', 'The Stock was Sucessfully saved');
        return redirect()->back();

        // $approvalProperties = $request->only(Stock::APPROVAL_PRROPERTIES);

        // if($stock->needsApproval($approvalProperties)){
        //     $stock->createApproval($approvalProperties);
        //     Session::flash('success', 'Thanks! We will review your changes soon');
        //     return redirect()->back();
        // }

        // Session::flash('success', 'File updated!');
        // return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AGS\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stock = Stock::find($id);
        $stock->delete();
        Session::flash('success', 'You successfully deleted the Stock');
        return redirect()->route('stocks.index');
    }

    public function fetchStock()
    {
        $stocks = Stock::all();

        return $stocks;
    }

    public function fetchStockid($id)
    {
        return $stock = Stock::find($id);
    }
}
