<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EnergyProduction;
use Illuminate\Http\Request;

class EnergyProductionController extends Controller
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
            $energyproduction = EnergyProduction::where('code', 'LIKE', "%$keyword%")
                ->orWhere('product_name', 'LIKE', "%$keyword%")
                ->orWhere('capacity', 'LIKE', "%$keyword%")
                ->orWhere('yield', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('energy_report_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $energyproduction = EnergyProduction::latest()->paginate($perPage);
        }

        return view('energy-production.index', compact('energyproduction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('energy-production.create');
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
        
        EnergyProduction::create($requestData);

        return redirect('energy-production')->with('flash_message', 'EnergyProduction added!');
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
        $energyproduction = EnergyProduction::findOrFail($id);

        return view('energy-production.show', compact('energyproduction'));
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
        $energyproduction = EnergyProduction::findOrFail($id);

        return view('energy-production.edit', compact('energyproduction'));
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
        
        $energyproduction = EnergyProduction::findOrFail($id);
        $energyproduction->update($requestData);

        return redirect('energy-production')->with('flash_message', 'EnergyProduction updated!');
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
        EnergyProduction::destroy($id);

        return redirect('energy-production')->with('flash_message', 'EnergyProduction deleted!');
    }
}
