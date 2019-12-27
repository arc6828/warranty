<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EnergyProductionConsumption;
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
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $energyproductionconsumption = EnergyProductionConsumption::where('month', 'LIKE', "%$keyword%")
                ->orWhere('yield', 'LIKE', "%$keyword%")
                ->orWhere('consumption_electricity', 'LIKE', "%$keyword%")
                ->orWhere('consumption_heat', 'LIKE', "%$keyword%")
                ->orWhere('energy_production_id', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('enery_report_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $energyproductionconsumption = EnergyProductionConsumption::latest()->paginate($perPage);
        }

        return view('energy-production-consumption.index', compact('energyproductionconsumption'));
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
        
        EnergyProductionConsumption::create($requestData);

        return redirect('energy-production-consumption')->with('flash_message', 'EnergyProductionConsumption added!');
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

        return redirect('energy-production-consumption')->with('flash_message', 'EnergyProductionConsumption updated!');
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
        EnergyProductionConsumption::destroy($id);

        return redirect('energy-production-consumption')->with('flash_message', 'EnergyProductionConsumption deleted!');
    }
}
