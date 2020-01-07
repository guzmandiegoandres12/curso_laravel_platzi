<?php

namespace App\Http\Controllers;

use App\ExpenseReport;
use App\Expense;
use Illuminate\Http\Request;

class ExpenseControler extends Controller
{
    public function __construct(){
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ExpenseReport $expenseReport)
    {
        return view('expense.create',[
            'report'=>$expenseReport
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  ExpenseReport  $expenseReport
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,ExpenseReport $expenseReport)
    {

        $request->validate([
        "descripsion"=>"required|min:5",
        "amount"=>"required|Numeric"
        ]);
        $newexpense=new Expense();
        $newexpense->description=$request->get("descripsion");
        $newexpense->amount=$request->get('amount');
        $newexpense->expense_report_id=$expenseReport->id;
        $newexpense->save();
        return redirect("/expense_reports/".$expenseReport->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
