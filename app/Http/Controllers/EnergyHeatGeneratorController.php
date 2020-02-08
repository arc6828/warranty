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

        if (!empty($keyword)) {
            $energyheatgenerator = EnergyHeatGenerator::where('month', 'LIKE', "%$keyword%")
                ->orWhere('capacity', 'LIKE', "%$keyword%")
                ->orWhere('primary_fuel_consumption_type', 'LIKE', "%$keyword%")
                ->orWhere('primary_fuel_consumption_volume', 'LIKE', "%$keyword%")
                ->orWhere('primary_fuel_consumption_unit', 'LIKE', "%$keyword%")
                ->orWhere('operating_hours', 'LIKE', "%$keyword%")
                ->orWhere('electricity_use', 'LIKE', "%$keyword%")
                ->orWhere('electricity_sale', 'LIKE', "%$keyword%")
                ->orWhere('steam_use', 'LIKE', "%$keyword%")
                ->orWhere('steam_sale', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('energy_report_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $energyheatgenerator = EnergyHeatGenerator::latest()->paginate($perPage);
        }

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
        
        EnergyHeatGenerator::create($requestData);

        return redirect('energy-heat-generator')->with('flash_message', 'EnergyHeatGenerator added!');
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

        return redirect('energy-heat-generator')->with('flash_message', 'EnergyHeatGenerator updated!');
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
        EnergyHeatGenerator::destroy($id);

        return redirect('energy-heat-generator')->with('flash_message', 'EnergyHeatGenerator deleted!');
    }
}
