<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use App\Models\ward_discharge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class WardDischargeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discharge = ward_discharge::all();      
        return response()->json($discharge);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $discharge = ward_discharge::all();      
        return response()->json($discharge);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $discharge = new ward_discharge;
        $discharge->kp_passport = $request ->  kp_passport;
        $discharge->reg_number = $request ->  reg_number;
        $discharge->date_dc = $request    ->  date_dc;
        $discharge->duration = $request    ->  duration;
        $discharge->diagnosis = $request    ->  diagnosis;
        $discharge->type_dc = $request    ->  type_dc;
        $discharge->notes = $request    ->  notes;    
        $discharge->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ward_discharge  $ward_discharge
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $discharge = DB::table('ward_discharges')->where('id',$id)->first();
        return response()->json($discharge);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ward_discharge  $ward_discharge
     * @return \Illuminate\Http\Response
     */
    public function edit(ward_discharge $ward_discharge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ward_discharge  $ward_discharge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array();
        $data['kp_passport']= $request->   kp_passport;
        $data['reg_number']= $request->   reg_number;
        
        $data['date_dc'] = $request -> date_dc;
        $data['duration'] = $request -> duration;
        $data['diagnosis'] = $request -> diagnosis;
        $data['type_dc'] = $request -> type_dc;
        $data['notes'] = $request ->   notes;
        DB::table('ward_discharges')->where('reg_number',$id)->update($data);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ward_discharge  $ward_discharge
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('ward_discharges')->where('id',$id)->delete();
    }
}
