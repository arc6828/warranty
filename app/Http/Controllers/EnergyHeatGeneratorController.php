<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\EnergyReport;

use App\EnergyHeatGenerator;
use Illuminate\Http\Request;

class EnergyHeatGeneratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $energyreport = EnergyReport::findOrFail($request->get('energy_report_id'));

        $keyword = $request->get('search');
        $perPage = 25;

        $energyheatgenerator = EnergyHeatGenerator::where('energy_report_id',$energyreport->id)->latest()->paginate($perPage);

        return view('energy-heat-generator.index', compact('energyheatgenerator','energyreport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('energy-heat-generator.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        $energyheatgenerator = EnergyHeatGenerator::create($requestData);

        return redirect('energy-heat-generator?energy_report_id='.$energyheatgenerator->energy_report_id)->with('flash_message', 'EnergyHeatGenerator added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $energyheatgenerator = EnergyHeatGenerator::findOrFail($id);

        return view('energy-heat-generator.show', compact('energyheatgenerator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $energyheatgenerator = EnergyHeatGenerator::findOrFail($id);

        return view('energy-heat-generator.edit', compact('energyheatgenerator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $energyheatgenerator = EnergyHeatGenerator::findOrFail($id);
        $energyheatgenerator->update($requestData);

        return redirect('energy-heat-generator?energy_report_id='.$energyheatgenerator->energy_report_id)->with('flash_message', 'EnergyHeatGenerator updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        
        $energyheatgenerator = EnergyHeatGenerator::findOrFail($id);
        EnergyHeatGenerator::destroy($id);

        return redirect('energy-heat-generator?energy_report_id='.$energyheatgenerator->energy_report_id)->with('flash_message', 'EnergyHeatGenerator deleted!');
    }
}
