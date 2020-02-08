<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EnergyProductionDiagram;
use Illuminate\Http\Request;

class EnergyProductionDiagramController extends Controller
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
            $energyproductiondiagram = EnergyProductionDiagram::where('photo_diagram', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('energy_production_id', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('energy_report_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $energyproductiondiagram = EnergyProductionDiagram::latest()->paginate($perPage);
        }

        return view('energy-production-diagram.index', compact('energyproductiondiagram'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('energy-production-diagram.create');
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
                if ($request->hasFile('photo_diagram')) {
            $requestData['photo_diagram'] = $request->file('photo_diagram')
                ->store('uploads', 'public');
        }

        EnergyProductionDiagram::create($requestData);

        return redirect('energy-production-diagram')->with('flash_message', 'EnergyProductionDiagram added!');
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
        $energyproductiondiagram = EnergyProductionDiagram::findOrFail($id);

        return view('energy-production-diagram.show', compact('energyproductiondiagram'));
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
        $energyproductiondiagram = EnergyProductionDiagram::findOrFail($id);

        return view('energy-production-diagram.edit', compact('energyproductiondiagram'));
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
                if ($request->hasFile('photo_diagram')) {
            $requestData['photo_diagram'] = $request->file('photo_diagram')
                ->store('uploads', 'public');
        }

        $energyproductiondiagram = EnergyProductionDiagram::findOrFail($id);
        $energyproductiondiagram->update($requestData);

        return redirect('energy-production-diagram')->with('flash_message', 'EnergyProductionDiagram updated!');
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
        EnergyProductionDiagram::destroy($id);

        return redirect('energy-production-diagram')->with('flash_message', 'EnergyProductionDiagram deleted!');
    }
}
