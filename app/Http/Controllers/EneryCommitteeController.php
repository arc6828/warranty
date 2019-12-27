<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EneryCommittee;
use Illuminate\Http\Request;

class EneryCommitteeController extends Controller
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
            $enerycommittee = EneryCommittee::where('president', 'LIKE', "%$keyword%")
                ->orWhere('common_responsible_person', 'LIKE', "%$keyword%")
                ->orWhere('common_responsible_person_code', 'LIKE', "%$keyword%")
                ->orWhere('senior_responsible_person', 'LIKE', "%$keyword%")
                ->orWhere('senior_responsible_person_code', 'LIKE', "%$keyword%")
                ->orWhere('factory_owner', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('enery_report_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $enerycommittee = EneryCommittee::latest()->paginate($perPage);
        }

        return view('enery-committee.index', compact('enerycommittee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('enery-committee.create');
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
        
        EneryCommittee::create($requestData);

        return redirect('enery-committee')->with('flash_message', 'EneryCommittee added!');
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
        $enerycommittee = EneryCommittee::findOrFail($id);

        return view('enery-committee.show', compact('enerycommittee'));
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
        $enerycommittee = EneryCommittee::findOrFail($id);

        return view('enery-committee.edit', compact('enerycommittee'));
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
        
        $enerycommittee = EneryCommittee::findOrFail($id);
        $enerycommittee->update($requestData);

        return redirect('enery-committee')->with('flash_message', 'EneryCommittee updated!');
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
        EneryCommittee::destroy($id);

        return redirect('enery-committee')->with('flash_message', 'EneryCommittee deleted!');
    }
}
