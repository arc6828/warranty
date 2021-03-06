<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\EnergyReport;

use App\EnergyPortionHeat;
use Illuminate\Http\Request;

class EnergyPortionHeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $energyreport = EnergyReport::findOrFail($request->get('energy_report_id','energyreport'));

        $keyword = $request->get('search');
        $perPage = 25;

        $energyportionheat = EnergyPortionHeat::where('energy_report_id',$energyreport->id)->latest()->paginate($perPage);

        return view('energy-portion-heat.index', compact('energyportionheat','energyreport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('energy-portion-heat.create');
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
        
        $energyportionheat = EnergyPortionHeat::create($requestData);

        return redirect('energy-portion-heat?energy_report_id='.$energyportionheat->energy_report_id)->with('flash_message', 'EnergyPortionHeat added!');
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
        $energyportionheat = EnergyPortionHeat::findOrFail($id);

        return view('energy-portion-heat.show', compact('energyportionheat'));
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
        $energyportionheat = EnergyPortionHeat::findOrFail($id);

        return view('energy-portion-heat.edit', compact('energyportionheat'));
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
        
        $energyportionheat = EnergyPortionHeat::findOrFail($id);
        $energyportionheat->update($requestData);

        return redirect('energy-portion-heat?energy_report_id='.$energyportionheat->energy_report_id)->with('flash_message', 'EnergyPortionHeat updated!');
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
        
        $energyportionheat = EnergyPortionHeat::findOrFail($id);
        EnergyPortionHeat::destroy($id);

        return redirect('energy-portion-heat?energy_report_id='.$energyportionheat->energy_report_id)->with('flash_message', 'EnergyPortionHeat deleted!');
    }
}
