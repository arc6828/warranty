<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EnergyCommittee;
use Illuminate\Http\Request;

class EnergyCommitteeController extends Controller
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
            $energycommittee = EnergyCommittee::where('president', 'LIKE', "%$keyword%")
                ->orWhere('common_responsible_person', 'LIKE', "%$keyword%")
                ->orWhere('common_responsible_person_code', 'LIKE', "%$keyword%")
                ->orWhere('senior_responsible_person', 'LIKE', "%$keyword%")
                ->orWhere('senior_responsible_person_code', 'LIKE', "%$keyword%")
                ->orWhere('factory_owner', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('energy_report_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $energycommittee = EnergyCommittee::latest()->paginate($perPage);
        }

        return view('energy-committee.index', compact('energycommittee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('energy-committee.create');
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
        
        EnergyCommittee::create($requestData);

        return redirect('energy-committee')->with('flash_message', 'EnergyCommittee added!');
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
        $energycommittee = EnergyCommittee::findOrFail($id);

        return view('energy-committee.show', compact('energycommittee'));
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
        $energycommittee = EnergyCommittee::findOrFail($id);

        return view('energy-committee.edit', compact('energycommittee'));
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
        
        $energycommittee = EnergyCommittee::findOrFail($id);
        $energycommittee->update($requestData);

        return redirect('energy-committee/'.$id.'/edit')->with('flash_message', 'EnergyCommittee updated!');
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
        EnergyCommittee::destroy($id);

        return redirect('energy-committee')->with('flash_message', 'EnergyCommittee deleted!');
    }
}
