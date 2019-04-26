<?php

namespace App\Http\Controllers\Web\AGS\Stock;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\AGS\Purchase;
use App\Models\AGS\Branch;
use App\Models\AGS\Stock;
use App\Models\AGS\StockTransfer;
use App\Models\AGS\StockTransferTransaction;
use Session;
use DB;

class StockTransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transfer = StockTransfer::all();

        return view('admin.stockTransfers.index')
            ->with('transfer', $transfer);
    }

    protected function createAndReturnSkeletonfile()
    {
        return auth()->user()->stockTransfers()->create([
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
    public function create(StockTransfer $transfer)
    {
        if(!$transfer->exists){
            $transfer = $this->createAndReturnSkeletonfile();

            return view('admin.stockTransfers.create')
                ->with('transfer', $transfer)
                ->with('branches', Branch::all())
                ->with('stocks', Stock::all());
        }
        return view('admin.stockTransfers.create')
            ->with('transfer', $transfer)
            ->with('stocks', Stock::all());
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $data = $request->all();
 
        $productName = count($data['productName']);

    //     $stock = $request->productName;

    //     foreach($stock as $stock_id){
    //         $stock_bid = $stock_id * 2;
    //     }

    //     dd($stock);


        // foreach ($data['productName'] as $key => $productName) {
        //     $stock = Stock::where('id', $data['productName'])->get();
        //     echo $stock;

        //     if ($stock->quantity > $data['quantity'][$key]) {
        //         Session::flash('error', 'The Stock was Sucessfully saved');
        //     }

        //     $stock -= $data['quantity'][$key];

        //     $stt = new StockTransferTransaction;

        //     $stt->stock_id = $data['productName'][$key];
        //     $stt->rate = $data['rate'][$key];


        //     $stt->quantity = $data['quantity'][$key];
        //     $stt->valuation = $data['totalValue'][$key];
        //     $stt->stock_transfer_id = $id;
        //     $stt->save();
        // }


        // for($i=0; $i < $productName; $i++){

        //     // $stock = Stock::select('quantity')->whereIn('id', $data['productName'])->get();
        //     $stock = Stock::find($data['productName']);
        //     // dd($stock);
            

        //     // go to stock

        //     // $stock = Stock::where('id', $productName)->get();
        // }

        for($x = 0; $x < $productName; $x++) {           

            $q = DB::select("SELECT quantity FROM stocks WHERE id = ".$_POST['productName'][$x]."");
            foreach($q as $row) {
                if ($row->quantity > $_POST['quantity'][$x]){
                    dd($_POST['quantity'][$x]);
                }else{
                    dd('bad');
                }
            }
            
            // while ($updateProductQuantityResult = $updateProductQuantityData->fetch_row()) {
            //     $updateQuantity[$x] = $updateProductQuantityResult[0] - $_POST['quantity'][$x];                         
            //         // update product table
            //         $updateProductTable = "UPDATE product SET quantity = '".$updateQuantity[$x]."' WHERE product_id = ".$_POST['productName'][$x]."";
            //         $connect->query($updateProductTable);

            //         // add into order_item
            //         $orderItemSql = "INSERT INTO order_item (order_id, product_id, quantity, rate, total, order_item_status) 
            //         VALUES ('$order_id', '".$_POST['productName'][$x]."', '".$_POST['quantity'][$x]."', '".$_POST['rateValue'][$x]."', '".$_POST['totalValue'][$x]."', 1)";

            //         $connect->query($orderItemSql);     

            //         if($x == count($_POST['productName'])) {
            //             $orderItemStatus = true;
            //         }       
            // } // while  
        } // /for quantity

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transfer = StockTransfer::find($id);

        return view('admin.stockTransfers.show')
            ->with('transfer', $transfer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transfer = StockTransfer::find($id);
        
        return view('admin.stockTransfer.edit')
            ->with('transfer', $transfer)
            ->with('stock', Stock::all());
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
        //
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
}
