<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EneryFactoryInformation;
use Illuminate\Http\Request;

class EneryFactoryInformationController extends Controller
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
            $eneryfactoryinformation = EneryFactoryInformation::where('factory_size', 'LIKE', "%$keyword%")
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
            $eneryfactoryinformation = EneryFactoryInformation::latest()->paginate($perPage);
        }

        return view('enery-factory-information.index', compact('eneryfactoryinformation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('enery-factory-information.create');
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
        
        EneryFactoryInformation::create($requestData);

        return redirect('enery-factory-information')->with('flash_message', 'EneryFactoryInformation added!');
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
        $eneryfactoryinformation = EneryFactoryInformation::findOrFail($id);

        return view('enery-factory-information.show', compact('eneryfactoryinformation'));
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
        $eneryfactoryinformation = EneryFactoryInformation::findOrFail($id);

        return view('enery-factory-information.edit', compact('eneryfactoryinformation'));
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
        
        $eneryfactoryinformation = EneryFactoryInformation::findOrFail($id);
        $eneryfactoryinformation->update($requestData);

        return redirect('enery-factory-information')->with('flash_message', 'EneryFactoryInformation updated!');
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
        EneryFactoryInformation::destroy($id);

        return redirect('enery-factory-information')->with('flash_message', 'EneryFactoryInformation deleted!');
    }
}
