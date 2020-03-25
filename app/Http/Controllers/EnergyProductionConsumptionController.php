<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EnergyProductionConsumption;
use App\EnergyReport;
use Illuminate\Http\Request;

class EnergyProductionConsumptionController extends Controller
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
        
        $energyproductionconsumption = EnergyProductionConsumption::where('energy_report_id', $energyreport->id)->latest()->paginate($perPage);
        

        return view('energy-production-consumption.index', compact('energyproductionconsumption','energyreport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('energy-production-consumption.create');
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
        
        $energyproductionconsumption = EnergyProductionConsumption::create($requestData);

        return redirect('energy-production/'.$energyproductionconsumption->energy_production_id)->with('flash_message', 'EnergyProductionConsumption added!');
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
        $energyproductionconsumption = EnergyProductionConsumption::findOrFail($id);

        return view('energy-production-consumption.show', compact('energyproductionconsumption'));
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
        $energyproductionconsumption = EnergyProductionConsumption::findOrFail($id);

        return view('energy-production-consumption.edit', compact('energyproductionconsumption'));
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
        
        $energyproductionconsumption = EnergyProductionConsumption::findOrFail($id);
        $energyproductionconsumption->update($requestData);

        return redirect('energy-production/'.$energyproductionconsumption->energy_production_id)->with('flash_message', 'EnergyProductionConsumption updated!');
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
        $energyproductionconsumption = EnergyProductionConsumption::findOrFail($id);
        EnergyProductionConsumption::destroy($id);

        return redirect('energy-production/'.$energyproductionconsumption->energy_production_id)->with('flash_message', 'EnergyProductionConsumption deleted!');
    }
}
