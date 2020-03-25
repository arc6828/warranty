<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EnergyMachine;
use App\EnergyReport;
use Illuminate\Http\Request;

class EnergyMachineController extends Controller
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

        $energymachine = EnergyMachine::where('energy_report_id', $energyreport->id)->latest()->paginate($perPage);
        

        return view('energy-machine.index', compact('energymachine','energyreport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('energy-machine.create');
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
        
        $energymachine = EnergyMachine::create($requestData);

        return redirect('energy-machine?energy_report_id='.$energymachine->energy_report_id)->with('flash_message', 'EnergyMachine added!');
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
        $energymachine = EnergyMachine::findOrFail($id);

        return view('energy-machine.show', compact('energymachine'));
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
        $energymachine = EnergyMachine::findOrFail($id);

        return view('energy-machine.edit', compact('energymachine'));
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
        
        $energymachine = EnergyMachine::findOrFail($id);
        $energymachine->update($requestData);

        return redirect('energy-machine?energy_report_id='.$energymachine->energy_report_id)->with('flash_message', 'EnergyMachine updated!');
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
        
        $energymachine = EnergyMachine::findOrFail($id);
        EnergyMachine::destroy($id);

        return redirect('energy-machine?energy_report_id='.$energymachine->energy_report_id)->with('flash_message', 'EnergyMachine deleted!');
    }
}
