<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Sumpdf;
use App\Table_a;
use App\Table_b;
use App\Table_c;
use App\Duration;
use App\Schedule;
use App\Table_f;
use Illuminate\Http\Request;
use PDF;

use App\EnergyReport;
use Illuminate\Support\Facades\Auth;

class BoiReportController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $energyreport = EnergyReport::where('legal_name', 'LIKE', "%$keyword%")
                ->orWhere('factory_name', 'LIKE', "%$keyword%")
                ->orWhere('tsic_id', 'LIKE', "%$keyword%")
                ->orWhere('year', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $energyreport = EnergyReport::latest()->paginate($perPage);
        }
        $energyreports = $energyreport;

        return view('boi-report.index', compact('energyreports'));
        
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('boi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        
        $sumpdf = EnergyReport::create($requestData);

        /*
        //CREATE TABLE A
        Table_a::create(["sumpdf_id" => $sumpdf->id]);
        //CREATE TABLE B
        Table_b::create(["sumpdf_id" => $sumpdf->id]);
        //CREATE TABLE C
        Table_c::create(["sumpdf_id" => $sumpdf->id]);
        //CREATE TABLE Duration
        Duration::create(["sumpdf_id" => $sumpdf->id]);
        //CREATE TABLE Schedule
        Schedule::create(["sumpdf_id" => $sumpdf->id]);
        //CREATE TABLE F
        Table_f::create(["sumpdf_id" => $sumpdf->id]);
        */
        return redirect('boi-report')->with('flash_message', 'sumpdf added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $energyreport = EnergyReport::findOrFail($id);
        
        $sumpdf = $energyreport;
        //CREATE TABLE A
        Table_a::firstOrCreate(["sumpdf_id" => $sumpdf->id]); 
        //CREATE TABLE B
        Table_b::firstOrCreate(["sumpdf_id" => $sumpdf->id]);
        //CREATE TABLE C
        Table_c::firstOrCreate(["sumpdf_id" => $sumpdf->id]);
        //CREATE TABLE Duration
        Duration::firstOrCreate(["sumpdf_id" => $sumpdf->id]);
        //CREATE TABLE Schedule
        Schedule::firstOrCreate(["sumpdf_id" => $sumpdf->id]);
        //CREATE TABLE F
        //Table_f::create(["sumpdf_id" => $sumpdf->id]);

        return view('boi-report.show', compact('energyreport'));
    }

    public function pdf($id)
    {
        $sumpdf = Sumpdf::findOrFail($id);
        
        //return view('sumpdf.pdf', compact('sumpdf'));
        $pdf = PDF::loadView('pdf', compact('sumpdf'));
        return $pdf->stream('test.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sumpdf = Sumpdf::findOrFail($id);

        return view('sumpdf.edit', compact('sumpdf'));
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
        $requestData = $request->all();
        
        $sumpdf = Sumpdf::findOrFail($id);
        $sumpdf->update($requestData);

        return redirect('sumpdf')->with('flash_message', 'sumpdf updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sumpdf::destroy($id);
        return redirect('sumpdf')->with('flash_message', 'sumpdf deleted!');
    }
}
