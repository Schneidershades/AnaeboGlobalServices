<?php

namespace App\Http\Controllers\Web\AGS\Receipt;
use Session;

use Auth;
use App\Models\AGS\Receipt;
use App\Models\AGS\Transaction;
use App\Models\AGS\Customer;
use App\Models\AGS\Stock;
use App\Models\AGS\StockApproval;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receipts = Receipt::all();

        return view('admin.receipt.index')->with('receipts', $receipts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Receipt $receipt)
    {
        if(!$receipt->exists){
            $receipt = $this->createAndReturnSkeletonfile();
            $customers = Customer::all();

            // foreach ($customers as $customer) {
            //     return $customer_list = "<option value='$customer->id'>$customer->name</option>";
            // }

            return view('admin.receipt.create')
                ->with('receipt', $receipt)
                ->with('customers', $customers)
                ->with('stocks', Stock::all());
        }
        return view('admin.receipt.create')
            ->with('receipt', $receipt)
            ->with('stocks', Stock::all());
    }

    public function ajaxStock(Receipt $receipt)
    {
        $receipts = Stock::all();
        return $receipt;
    }



    protected function createAndReturnSkeletonfile()
    {
        return auth()->user()->receipts()->create([
            'status' => 'cancelled',
            'paymentType' => 'none',
            'customer_id' => 1,
            'paid' => 0,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $receipt = Receipt::find($id);

        $reciept->customer_id = $request->customer_id;
        $receipt->user->id = Auth()->user()->id;
        $receipt->discount = $request->discount;
        $receipt->grandTotal = $request->grandTotal;
        $receipt->paid = $request->paid;
        $receipt->due = $request->due;
        $receipt->paymentType = $request->paymentType;
        $receipt->paymentStatus = $request->paymentStatus;
        $receipt->finished = true;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AGS\Receipt  $receipt
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $receipt = Receipt::find($id);
        return view('admin.receipt.show')
            ->with('receipt', $receipt);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AGS\Receipt  $receipt
     * @return \Illuminate\Http\Response
     */
    public function edit(Receipt $receipt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AGS\Receipt  $receipt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receipt $receipt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AGS\Receipt  $receipt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receipt $receipt)
    {
        //
    }
}
