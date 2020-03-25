<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EnergyMachineEvaluation;
use App\EnergyReport;
use Illuminate\Http\Request;

class EnergyMachineEvaluationController extends Controller
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

        $energymachineevaluation = EnergyMachineEvaluation::where('energy_report_id', $energyreport->id)->latest()->paginate($perPage);

        return view('energy-machine-evaluation.index', compact('energymachineevaluation','energyreport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('energy-machine-evaluation.create');
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
        
        $energymachineevaluation = EnergyMachineEvaluation::create($requestData);

        return redirect('energy-machine/'.$energymachineevaluation->energy_machine_id)->with('flash_message', 'EnergyMachineEvaluation added!');
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
        $energymachineevaluation = EnergyMachineEvaluation::findOrFail($id);

        return view('energy-machine-evaluation.show', compact('energymachineevaluation'));
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
        $energymachineevaluation = EnergyMachineEvaluation::findOrFail($id);

        return view('energy-machine-evaluation.edit', compact('energymachineevaluation'));
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
        
        $energymachineevaluation = EnergyMachineEvaluation::findOrFail($id);
        $energymachineevaluation->update($requestData);

        return redirect('energy-machine/'.$energymachineevaluation->energy_machine_id)->with('flash_message', 'EnergyMachineEvaluation updated!');
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
        
        $energymachineevaluation = EnergyMachineEvaluation::findOrFail($id);
        EnergyMachineEvaluation::destroy($id);

        return redirect('energy-machine/'.$energymachineevaluation->energy_machine_id)->with('flash_message', 'EnergyMachineEvaluation deleted!');
    }
}
