<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\CompactDetails;

use Session;

use Illuminate\Support\Facades\DB;

class CompactController extends Controller
{
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
    public function create()
    {
        return view('compact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateLDPE=0;$validateLLDPE=0;$validateHDPE=0;$validateReUse=0;$validateCa=0;
        if($request->useLDPE==null ){$validateLDPE=1;}
        else{
            if(is_numeric($request->useLDPE)){
                $validateLDPE=1;
            }
        }
        if($request->useLLDPE==null ){$validateLLDPE=1;}
        else{
            if(is_numeric($request->useLLDPE)){
                $validateLLDPE=1;
            }
        }
        if($request->useHDPE==null ){$validateHDPE=1;}
        else{
            if(is_numeric($request->useHDPE)){
                $validateHDPE=1;
            }
        }
        if($request->useReuse==null ){$validateReUse=1;}
        else{
            if(is_numeric($request->useReuse)){
                $validateReUse=1;
            }
        }
        if(is_numeric($request->Ca)){
            $validateCa=1;
        }

        if($validateCa==1 and $validateLDPE==1 and $validateLLDPE==1 and $validateHDPE==1 and $validateReUse==1){
            $compact=new CompactDetails;

            $oldcompacts=CompactDetails::all();

            $lotnumber=0;

            foreach ($oldcompacts as $oldcompact) {
                $lotnumber=$oldcompact->id;
            }

            $total=$request->useLDPE+$request->useLLDPE+$request->useHDPE+$request->useReuse+$request->Ca;

            $compact->lotnumber=$lotnumber+1;   
            $compact->useLDPE=$request->useLDPE;
            $compact->useLLDPE=$request->useLLDPE;
            $compact->useHDPE=$request->useHDPE;
            $compact->useReuse=$request->useReuse;
            $compact->Ca=$request->Ca;
            $compact->total=$total;
            $compact->date=date("Y/m/d");
            $compact->comment=$request->comment;

            $compact->save();

            Session::put('success','Successfully Saved!');

            return redirect()->route('pc.CompactDetails');
        }else{
            Session::put('failer','Enter Data Correctly!');

            return redirect()->route('compact.create');
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
        $compact=CompactDetails::find($id);
        
        return view('compact.show')->withCompact($compact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compact=CompactDetails::find($id);
        
        return view('compact.edit')->withCompact($compact);
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
        $validateLDPE=0;$validateLLDPE=0;$validateHDPE=0;$validateReUse=0;$validateCa=0;
        if($request->input('useLDPE')==null ){$validateLDPE=1;}
        else{
            if(is_numeric($request->input('useLDPE'))){
                $validateLDPE=1;
            }
        }
        if($request->input('useLLDPE')==null ){$validateLLDPE=1;}
        else{
            if(is_numeric($request->input('useLLDPE'))){
                $validateLLDPE=1;
            }
        }
        if($request->input('useHDPE')==null ){$validateHDPE=1;}
        else{
            if(is_numeric($request->input('useHDPE'))){
                $validateHDPE=1;
            }
        }
        if($request->input('useReuse')==null ){$validateReUse=1;}
        else{
            if(is_numeric($request->input('useReuse'))){
                $validateReUse=1;
            }
        }
        if(is_numeric($request->input('Ca'))){
            $validateCa=1;
        }

        if($validateCa==1 and $validateLDPE==1 and $validateLLDPE==1 and $validateHDPE==1 and $validateReUse==1){
            $compact = CompactDetails::find($id);
            
            $compact->useLDPE = $request->input('useLDPE');

            $compact->useLLDPE = $request->input('useLLDPE');

            $compact->useHDPE = $request->input('useHDPE');

            $compact->useReuse = $request->input('useReuse');

            $compact->Ca = $request->input('Ca');

            $compact->total = $request->input('useLDPE')+$request->input('useLLDPE')+$request->input('useHDPE')+
                                $request->input('useReuse')+$request->input('Ca');

            $compact->comment = $request->input('comment');

            $compact->save();

            Session::put('success','Compact Successfully Updated!');

            return redirect()->route('compact.show',$compact->id);
        }else{
            Session::put('failer','Enter Data Correctly!');

            return redirect()->route('compact.show',$compact->id);
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
        $compact = CompactDetails::find($id);

        $compact -> delete();

        Session::put('success','Compact Details Successfully Deleted!');

        return redirect()->route('pc.CompactDetails');
    }
}
