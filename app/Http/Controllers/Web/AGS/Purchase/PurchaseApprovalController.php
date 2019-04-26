<?php

namespace App\Http\Controllers\Web\AGS\Purchase;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PurchaseApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function approve($id)
    {
        $quantityApproval = StockQuantity::find($id);

        // approve now
        $quantityApproval->approved = true;

        // go to stock
        $stock = Stock::where('id', $quantityApproval->stock_id)->first();

        // if you have found the id just add the quantity
        $stock->quantity += $quantityApproval->quantity;

        // save all
        $quantityApproval->save();
        $stock->save();

        Session::flash('success', 'You have approved the stock.');

        return redirect()->back();
    }
}
