<?php

namespace App\Http\Controllers\Expense;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;
use DB;
use App\Models\AddServicenter;



class ExpenseHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function expensehistory()
    {
        $addservicenter  = Addservicenter::all();
        $expense = null;  
    
        return view('LTS.Expense.expensehistory', compact('expense','addservicenter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getdatasearchdd(Request $request)
    {
        // $year = $request->created_at->year;
        // $month = $request->created_at->month;


        $addservicenter  = Addservicenter::all();
        $expense = DB::table('expense')->whereBetween('expesce_date',[$request->dateForm,$request->dateTo])->get();
         return view('LTS.Expense.expensehistory', ['expense'=> $expense, 'addservicenter'=>$addservicenter]);

        // $expense = Expense::all();
       
        // $expense = DB::table('expense')->whereBetween('created_at',[$request->dateForm,$request->dateTo])->get();
        //  return view('LTS.Expense.expensehistory', ['expense'=> $expense]);
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
