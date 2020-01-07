<?php

namespace App\Http\Controllers;
use App\ExpenseReport;
use App\Mail\summaryReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ExpenseReporrtControler extends Controller
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
      return view('ExpenceReport.index',[
          'ExpenceReports'=>ExpenseReport::all()
      ]);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ExpenceReport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $request->validate([
        "title"=>"required||min:6"
        ]);
        $report=new ExpenseReport();
        $report->title=$request->get("title");
        $report->save();
        return redirect('expense_reports');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataExpense=ExpenseReport::findOrFail($id);
        return view('ExpenceReport.show',[
           'reportData'=>$dataExpense,
           'reportDetails'=>$dataExpense->expenses
       ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report=ExpenseReport::findOrFail($id);
        return view('ExpenceReport.edit',[
            'report'=>$report
        ]);
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
        $report=ExpenseReport::find($id);
        $report->title=$request->get("title");
        $report->save();
        return redirect('expense_reports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report=ExpenseReport::find($id);
        $report->delete();
        return redirect('expense_reports');
    }
    public function confirmDelete($id)
    {
        $report=ExpenseReport::findOrFail($id);
      return view('ExpenceReport.confirmDelete',[
            "report"=>$report
        ]);
    }
    public function confirmSendEmail($id_report){
        $report=ExpenseReport::findOrFail($id_report);
        return view('ExpenceReport.confirmSendEmail',[
            "report"=>$report
        ]);
    }
    public function sendEmail($id,Request $sendEmail){
        $report=ExpenseReport::findOrFail($id);
        Mail::to($sendEmail->get("email"))->send(new summaryReport($report));
        return redirect("/expense_reports/".$id);
    }

}
