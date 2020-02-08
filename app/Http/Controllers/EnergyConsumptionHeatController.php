<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $energyconsumptionheat = EnergyConsumptionHeat::where('month', 'LIKE', "%$keyword%")
                ->orWhere('fuel_oil_liter', 'LIKE', "%$keyword%")
                ->orWhere('fuel_oil_baht', 'LIKE', "%$keyword%")
                ->orWhere('diesel_oil_liter', 'LIKE', "%$keyword%")
                ->orWhere('diesel_oil_baht', 'LIKE', "%$keyword%")
                ->orWhere('lpg_kg', 'LIKE', "%$keyword%")
                ->orWhere('lpg_baht', 'LIKE', "%$keyword%")
                ->orWhere('natural_gas_millionbtu', 'LIKE', "%$keyword%")
                ->orWhere('natural_gas_baht', 'LIKE', "%$keyword%")
                ->orWhere('coal_ton', 'LIKE', "%$keyword%")
                ->orWhere('coal_baht', 'LIKE', "%$keyword%")
                ->orWhere('steam_purchased_ton', 'LIKE', "%$keyword%")
                ->orWhere('steam_purchased_baht', 'LIKE', "%$keyword%")
                ->orWhere('other_unit', 'LIKE', "%$keyword%")
                ->orWhere('other_baht', 'LIKE', "%$keyword%")
                ->orWhere('renewable_energy_unit', 'LIKE', "%$keyword%")
                ->orWhere('renewable_energy_baht', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('energy_report_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $energyconsumptionheat = EnergyConsumptionHeat::latest()->paginate($perPage);
        }

        return view('energy-consumption-heat.index', compact('energyconsumptionheat'));
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
        
        EnergyConsumptionHeat::create($requestData);

        return redirect('energy-consumption-heat')->with('flash_message', 'EnergyConsumptionHeat added!');
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

        return redirect('energy-consumption-heat')->with('flash_message', 'EnergyConsumptionHeat updated!');
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
        EnergyConsumptionHeat::destroy($id);

        return redirect('energy-consumption-heat')->with('flash_message', 'EnergyConsumptionHeat deleted!');
    }
}
