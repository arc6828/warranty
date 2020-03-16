<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\EnergyReport;

use App\EnergyConsumptionElectricity;
use Illuminate\Http\Request;

class EnergyConsumptionElectricityController extends Controller
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

        $energyconsumptionelectricity = EnergyConsumptionElectricity::where('energy_report_id',$energyreport->id)->latest()->paginate($perPage);

        return view('energy-consumption-electricity.index', compact('energyconsumptionelectricity','energyreport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('energy-consumption-electricity.create');
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
        
        $energyconsumptionelectricity = EnergyConsumptionElectricity::create($requestData);

        return redirect('energy-consumption-electricity?energy_report_id='.$energyconsumptionelectricity->energy_report_id)->with('flash_message', 'EnergyConsumptionElectricity added!');
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
        $energyconsumptionelectricity = EnergyConsumptionElectricity::findOrFail($id);

        return view('energy-consumption-electricity.show', compact('energyconsumptionelectricity'));
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
        $energyconsumptionelectricity = EnergyConsumptionElectricity::findOrFail($id);

        return view('energy-consumption-electricity.edit', compact('energyconsumptionelectricity'));
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
        
        $energyconsumptionelectricity = EnergyConsumptionElectricity::findOrFail($id);
        $energyconsumptionelectricity->update($requestData);

        return redirect('energy-consumption-electricity?energy_report_id='.$energyconsumptionelectricity->energy_report_id)->with('flash_message', 'EnergyConsumptionElectricity updated!');
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
        
        $energyconsumptionelectricity = EnergyConsumptionElectricity::findOrFail($id);
        EnergyConsumptionElectricity::destroy($id);

        return redirect('energy-consumption-electricity?energy_report_id='.$energyconsumptionelectricity->energy_report_id)->with('flash_message', 'EnergyConsumptionElectricity deleted!');
    }
}
