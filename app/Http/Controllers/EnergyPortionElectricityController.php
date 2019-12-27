<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EnergyPortionElectricity;
use Illuminate\Http\Request;

class EnergyPortionElectricityController extends Controller
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
            $energyportionelectricity = EnergyPortionElectricity::where('system', 'LIKE', "%$keyword%")
                ->orWhere('electric_power_consumption', 'LIKE', "%$keyword%")
                ->orWhere('method_assessment', 'LIKE', "%$keyword%")
                ->orWhere('method_check', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('enery_report_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $energyportionelectricity = EnergyPortionElectricity::latest()->paginate($perPage);
        }

        return view('energy-portion-electricity.index', compact('energyportionelectricity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('energy-portion-electricity.create');
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
        
        EnergyPortionElectricity::create($requestData);

        return redirect('energy-portion-electricity')->with('flash_message', 'EnergyPortionElectricity added!');
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
        $energyportionelectricity = EnergyPortionElectricity::findOrFail($id);

        return view('energy-portion-electricity.show', compact('energyportionelectricity'));
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
        $energyportionelectricity = EnergyPortionElectricity::findOrFail($id);

        return view('energy-portion-electricity.edit', compact('energyportionelectricity'));
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
        
        $energyportionelectricity = EnergyPortionElectricity::findOrFail($id);
        $energyportionelectricity->update($requestData);

        return redirect('energy-portion-electricity')->with('flash_message', 'EnergyPortionElectricity updated!');
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
        EnergyPortionElectricity::destroy($id);

        return redirect('energy-portion-electricity')->with('flash_message', 'EnergyPortionElectricity deleted!');
    }
}
