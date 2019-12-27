<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EnergyElectricityTransformer;
use Illuminate\Http\Request;

class EnergyElectricityTransformerController extends Controller
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
            $energyelectricitytransformer = EnergyElectricityTransformer::where('user_serial', 'LIKE', "%$keyword%")
                ->orWhere('transformer_serial', 'LIKE', "%$keyword%")
                ->orWhere('user_type', 'LIKE', "%$keyword%")
                ->orWhere('usage_rate', 'LIKE', "%$keyword%")
                ->orWhere('transformer_size', 'LIKE', "%$keyword%")
                ->orWhere('transformer_quantity', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('enery_report_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $energyelectricitytransformer = EnergyElectricityTransformer::latest()->paginate($perPage);
        }

        return view('energy-electricity-transformer.index', compact('energyelectricitytransformer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('energy-electricity-transformer.create');
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
        
        EnergyElectricityTransformer::create($requestData);

        return redirect('energy-electricity-transformer')->with('flash_message', 'EnergyElectricityTransformer added!');
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
        $energyelectricitytransformer = EnergyElectricityTransformer::findOrFail($id);

        return view('energy-electricity-transformer.show', compact('energyelectricitytransformer'));
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
        $energyelectricitytransformer = EnergyElectricityTransformer::findOrFail($id);

        return view('energy-electricity-transformer.edit', compact('energyelectricitytransformer'));
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
        
        $energyelectricitytransformer = EnergyElectricityTransformer::findOrFail($id);
        $energyelectricitytransformer->update($requestData);

        return redirect('energy-electricity-transformer')->with('flash_message', 'EnergyElectricityTransformer updated!');
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
        EnergyElectricityTransformer::destroy($id);

        return redirect('energy-electricity-transformer')->with('flash_message', 'EnergyElectricityTransformer deleted!');
    }
}
