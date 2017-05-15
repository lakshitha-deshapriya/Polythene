<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\DailyProduction;

use Session;

use Illuminate\Support\Facades\DB;


class DailyProductionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(is_numeric($request->weight) and is_numeric($request->size) and is_numeric($request->gauge)){
            $productions=new DailyProduction;

            $oldproductions=DailyProduction::all();

            $rollnum=0;

            foreach ($oldproductions as $oldproduction) {
                $rollnum=$oldproduction->id;
            }

            if(strlen($request->starttime1)<2)
                $request->starttime1='0'.$request->starttime1;
            if(strlen($request->starttime2)<2)
                $request->starttime2='0'.$request->starttime2;
            if(strlen($request->endtime1)<2)
                $request->endtime1='0'.$request->endtime1;
            if(strlen($request->endtime2)<2)
                $request->endtime2='0'.$request->endtime2;

            if($request->starttime3=='0'){
                $request->starttime3='am';
            }
            if($request->starttime3=='1'){
                $request->starttime3='pm';
            }
            if($request->endtime3=='0'){
                $request->endtime3='am';
            }
            if($request->endtime3=='1'){
                 $request->endtime3='pm';
            }

            $productions->rollnumber=$rollnum+1;   
            $productions->size=$request->size;
            $productions->gauge=$request->gauge;
            $productions->weight=$request->weight;
            $productions->finishingtype=$request->finishingtype;
            $productions->starttime=$request->starttime1.':'.$request->starttime2.$request->starttime3;
            $productions->endtime=$request->endtime1.':'.$request->endtime2.$request->endtime3;
            $productions->date=date("Y/m/d");
            $productions->comment=$request->comment;

            $productions->save();

            Session::put('success','Successfully Saved!');

            return redirect()->route('pc.DailyProduction');
        }else{
            Session::put('failer','Enter Data Correctly!');

            return redirect()->route('dailyproductions.create');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $production=DailyProduction::find($id);
        
        return view('dp.show')->withProduction($production);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $production=DailyProduction::find($id);

        return view('dp.edit')->withProduction($production);
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
        if(is_numeric($request->input('weight')) and is_numeric($request->input('size')) and is_numeric($request->input('gauge'))){
            $production = DailyProduction::find($id);
            
            $production->size = $request->input('size');

            $production->gauge = $request->input('gauge');

            $production->weight = $request->input('weight');

            $production->finishingtype = $request->input('finishingtype');

            $production->starttime = $request->input('starttime');

            $production->endtime = $request->input('endtime');

            $production->comment = $request->input('comment');

            $production->save();

            Session::put('success','Product Successfully Updated!');

            return redirect()->route('dailyproductions.show',$production->id);
        }else{
            Session::put('failer','Enter Data Correctly!');

            return redirect()->route('dailyproductions.show',$production->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $production = DailyProduction::find($id);

        $production -> delete();

        Session::put('success','Product Successfully  Deleted!');

        return redirect()->route('pc.DailyProduction');
    }
}
