<?php

namespace App\Http\Controllers\Web\AGS\Stock;

use Session;
use App\Models\AGS\StockApproval;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StockApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $approvals = StockApproval::all();

        return view('admin.stockEditedApproval.index')
            ->with('stocks', $approvals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AGS\StockApproval  $stockApproval
     * @return \Illuminate\Http\Response
     */
    public function show(StockApproval $stockApproval)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AGS\StockApproval  $stockApproval
     * @return \Illuminate\Http\Response
     */
    public function edit(StockApproval $stockApproval)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AGS\StockApproval  $stockApproval
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StockApproval $stockApproval)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AGS\StockApproval  $stockApproval
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockApproval $stockApproval)
    {
        //
    }
}
