<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EnergyFactoryInformation;
use Illuminate\Http\Request;

class EnergyFactoryInformationController extends Controller
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
            $energyfactoryinformation = EnergyFactoryInformation::where('factory_size', 'LIKE', "%$keyword%")
                ->orWhere('factory_address', 'LIKE', "%$keyword%")
                ->orWhere('factory_tel', 'LIKE', "%$keyword%")
                ->orWhere('factory_fax', 'LIKE', "%$keyword%")
                ->orWhere('factory_email', 'LIKE', "%$keyword%")
                ->orWhere('office_address', 'LIKE', "%$keyword%")
                ->orWhere('office_tel', 'LIKE', "%$keyword%")
                ->orWhere('office_fax', 'LIKE', "%$keyword%")
                ->orWhere('office_email', 'LIKE', "%$keyword%")
                ->orWhere('factory_type', 'LIKE', "%$keyword%")
                ->orWhere('factory_employee', 'LIKE', "%$keyword%")
                ->orWhere('factory_operation_time', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('enery_report_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $energyfactoryinformation = EnergyFactoryInformation::latest()->paginate($perPage);
        }

        return view('energy-factory-information.index', compact('energyfactoryinformation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('energy-factory-information.create');
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
        
        EnergyFactoryInformation::create($requestData);

        return redirect('energy-factory-information')->with('flash_message', 'EnergyFactoryInformation added!');
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
        $energyfactoryinformation = EnergyFactoryInformation::findOrFail($id);

        return view('energy-factory-information.show', compact('energyfactoryinformation'));
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
        $energyfactoryinformation = EnergyFactoryInformation::findOrFail($id);

        return view('energy-factory-information.edit', compact('energyfactoryinformation'));
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
        
        $energyfactoryinformation = EnergyFactoryInformation::findOrFail($id);
        $energyfactoryinformation->update($requestData);

        return redirect('energy-factory-information')->with('flash_message', 'EnergyFactoryInformation updated!');
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
        EnergyFactoryInformation::destroy($id);

        return redirect('energy-factory-information')->with('flash_message', 'EnergyFactoryInformation deleted!');
    }
}
