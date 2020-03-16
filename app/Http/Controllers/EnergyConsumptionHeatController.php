<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\EnergyReport;

use App\EnergyConsumptionHeat;
use Illuminate\Http\Request;

class EnergyConsumptionHeatController extends Controller
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

        $energyconsumptionheat = EnergyConsumptionHeat::where('energy_report_id',$energyreport->id)->latest()->paginate($perPage);

        return view('energy-consumption-heat.index', compact('energyconsumptionheat','energyreport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('energy-consumption-heat.create');
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
        
        $energyconsumptionheat = EnergyConsumptionHeat::create($requestData);

        return redirect('energy-consumption-heat?energy_report_id='.$energyconsumptionheat->energy_report_id)->with('flash_message', 'EnergyConsumptionHeat added!');
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
        $energyconsumptionheat = EnergyConsumptionHeat::findOrFail($id);

        return view('energy-consumption-heat.show', compact('energyconsumptionheat'));
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
        $energyconsumptionheat = EnergyConsumptionHeat::findOrFail($id);

        return view('energy-consumption-heat.edit', compact('energyconsumptionheat'));
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
        
        $energyconsumptionheat = EnergyConsumptionHeat::findOrFail($id);
        $energyconsumptionheat->update($requestData);

        return redirect('energy-consumption-heat?energy_report_id='.$energyconsumptionheat->energy_report_id)->with('flash_message', 'EnergyConsumptionHeat updated!');
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
        
        $energyconsumptionheat = EnergyConsumptionHeat::findOrFail($id);
        EnergyConsumptionHeat::destroy($id);

        return redirect('energy-consumption-?energy_report_id='.$energyconsumptionheat->energy_report_id)->with('flash_message', 'EnergyConsumptionHeat deleted!');
    }
}
