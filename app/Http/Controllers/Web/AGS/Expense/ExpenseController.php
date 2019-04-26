<?php

namespace App\Http\Controllers\Web\AGS\Expense;

use Session;
use App\Models\AGS\Expense;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.expense.index')
            ->with('expenses', Expense::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.expense.create');
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
            'reason' => 'required|max:255',
            'amount' => 'required',
        ]);

        $expense = new Expense;

        $expense->fill($request->only(['reason', 'amount']));

        $expense->user_id = Auth()->user()->id;
        
        $expense->save();
        Session::flash('success', 'The expense was sucessfully saved');
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
        $expense = Expense::find($id);

        return view('admin.expense.show')
                ->with('expense', $expense);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expense = Expense::find($id);

        return view('admin.expense.edit')
                ->with('expense', $expense);
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
            'reason' => 'required|max:255',
            'amount' => 'required',
        ]);

        $expense = Expense::find($id);

        $expense->fill($request->only(['reason', 'amount']));

        $expense->user_id = Auth()->user()->id;
        
        $expense->save();
        Session::flash('success', 'The expense was Sucessfully updated');
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
        $expense = Expense::find($id);

        $expense->delete();
        Session::flash('success', 'You successfully deleted the expense');
        return redirect()->route('expenses.index');
    }
}
