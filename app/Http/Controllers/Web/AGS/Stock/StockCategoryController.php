<?php

namespace App\Http\Controllers\Web\AGS\Stock;

use App\Models\AGS\StockCategory;
use App\Models\AGS\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Auth;

class StockCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = StockCategory::all();

        return view('admin.stockCategory.index')
            ->with('categories', $category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.stockCategory.create');
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
            'offloading_boys_pay' => 'required',
        ]);

        $category = new StockCategory;

        $category->name = $request->name;
        $category->user_id = Auth()->user()->id;
        $category->offloading_boys_pay = $request->offloading_boys_pay;

        // every new stock is zero
        $category->save();

        Session::flash('success', 'The Stock Category was Sucessfully saved');
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
        $category = StockCategory::find($id);

        return view('admin.stockCategory.show')
            ->with('category', $category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = StockCategory::find($id);

        return view('admin.stockCategory.edit')
             ->with('category', $category);
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
            'name' => 'required',
            'offloading_boys_pay' => 'required',
        ]);

        $category = StockCategory::find($id);

        $category->name = $request->name;
        $category->offloading_boys_pay = $request->offloading_boys_pay;

        // every new stock is zero
        $category->save();

        Session::flash('success', 'The Stock Category was Sucessfully saved');
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
        $category = StockCategory::find($id);
        $category->delete();
        Session::flash('success', 'You successfully deleted the Stock Category');
        return redirect()->route('stocks.index');
    }
}
