<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EnergyProductionOperation;
use Illuminate\Http\Request;

class EnergyProductionOperationController extends Controller
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
            $energyproductionoperation = EnergyProductionOperation::where('energy_production_id', 'LIKE', "%$keyword%")
                ->orWhere('raw_material', 'LIKE', "%$keyword%")
                ->orWhere('month', 'LIKE', "%$keyword%")
                ->orWhere('working_hours', 'LIKE', "%$keyword%")
                ->orWhere('production_unit', 'LIKE', "%$keyword%")
                ->orWhere('yield', 'LIKE', "%$keyword%")
                ->orWhere('capacity', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('energy_report_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $energyproductionoperation = EnergyProductionOperation::latest()->paginate($perPage);
        }

        return view('energy-production-operation.index', compact('energyproductionoperation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('energy-production-operation.create');
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
        
        EnergyProductionOperation::create($requestData);

        return redirect('energy-production-operation')->with('flash_message', 'EnergyProductionOperation added!');
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
        $energyproductionoperation = EnergyProductionOperation::findOrFail($id);

        return view('energy-production-operation.show', compact('energyproductionoperation'));
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
        $energyproductionoperation = EnergyProductionOperation::findOrFail($id);

        return view('energy-production-operation.edit', compact('energyproductionoperation'));
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
        
        $energyproductionoperation = EnergyProductionOperation::findOrFail($id);
        $energyproductionoperation->update($requestData);

        return redirect('energy-production-operation')->with('flash_message', 'EnergyProductionOperation updated!');
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
        EnergyProductionOperation::destroy($id);

        return redirect('energy-production-operation')->with('flash_message', 'EnergyProductionOperation deleted!');
    }
}
