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

        if (!empty($keyword)) {
            $energymachine = EnergyMachine::where('energy_report_id', $energyreport->id)
            ->where(function ($query){
                $query->where('system', 'LIKE', "%$keyword%")
                ->orWhere('machine_name', 'LIKE', "%$keyword%")
                ->orWhere('power_type', 'LIKE', "%$keyword%")
                ->orWhere('spec', 'LIKE', "%$keyword%")
                ->orWhere('spec_unit', 'LIKE', "%$keyword%")
                ->orWhere('quantity', 'LIKE', "%$keyword%")
                ->orWhere('lifetime', 'LIKE', "%$keyword%")
                ->orWhere('average_active_hours', 'LIKE', "%$keyword%")
                ->orWhere('electric_power', 'LIKE', "%$keyword%")
                ->orWhere('heat_power', 'LIKE', "%$keyword%")
                ->orWhere('fuel_type', 'LIKE', "%$keyword%")
                ->orWhere('fuel_unit', 'LIKE', "%$keyword%")
                ->orWhere('performance_spec', 'LIKE', "%$keyword%")
                ->orWhere('performance_unit', 'LIKE', "%$keyword%")
                ->orWhere('performance_actual', 'LIKE', "%$keyword%")
                ->orWhere('performance_actual_unit', 'LIKE', "%$keyword%")
                ->orWhere('remark', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('energy_report_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
            });
        } else {
            $energymachine = EnergyMachine::where('energy_report_id', $energyreport->id)->latest()->paginate($perPage);
        }

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
        
        EnergyMachine::create($requestData);

        return redirect('energy-machine')->with('flash_message', 'EnergyMachine added!');
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

        return redirect('energy-machine')->with('flash_message', 'EnergyMachine updated!');
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
        EnergyMachine::destroy($id);

        return redirect('energy-machine')->with('flash_message', 'EnergyMachine deleted!');
    }
}
