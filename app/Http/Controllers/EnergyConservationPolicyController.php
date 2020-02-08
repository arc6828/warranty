<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EnergyConservationPolicy;
use Illuminate\Http\Request;

class EnergyConservationPolicyController extends Controller
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
            $energyconservationpolicy = EnergyConservationPolicy::where('policy', 'LIKE', "%$keyword%")
                ->orWhere('notice_number', 'LIKE', "%$keyword%")
                ->orWhere('notice', 'LIKE', "%$keyword%")
                ->orWhere('poster_number', 'LIKE', "%$keyword%")
                ->orWhere('publication_number', 'LIKE', "%$keyword%")
                ->orWhere('publication', 'LIKE', "%$keyword%")
                ->orWhere('voice_number', 'LIKE', "%$keyword%")
                ->orWhere('voice', 'LIKE', "%$keyword%")
                ->orWhere('email_number', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('meeting_number', 'LIKE', "%$keyword%")
                ->orWhere('meeting', 'LIKE', "%$keyword%")
                ->orWhere('others_number', 'LIKE', "%$keyword%")
                ->orWhere('others', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('energy_report_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $energyconservationpolicy = EnergyConservationPolicy::latest()->paginate($perPage);
        }

        return view('energy-conservation-policy.index', compact('energyconservationpolicy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('energy-conservation-policy.create');
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
                if ($request->hasFile('policy')) {
            $requestData['policy'] = $request->file('policy')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('notice')) {
            $requestData['notice'] = $request->file('notice')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('poster_number')) {
            $requestData['poster_number'] = $request->file('poster_number')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('publication')) {
            $requestData['publication'] = $request->file('publication')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('voice')) {
            $requestData['voice'] = $request->file('voice')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('email')) {
            $requestData['email'] = $request->file('email')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('meeting')) {
            $requestData['meeting'] = $request->file('meeting')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('others')) {
            $requestData['others'] = $request->file('others')
                ->store('uploads', 'public');
        }

        EnergyConservationPolicy::create($requestData);

        return redirect('energy-conservation-policy')->with('flash_message', 'EnergyConservationPolicy added!');
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
        $energyconservationpolicy = EnergyConservationPolicy::findOrFail($id);

        return view('energy-conservation-policy.show', compact('energyconservationpolicy'));
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
        $energyconservationpolicy = EnergyConservationPolicy::findOrFail($id);

        return view('energy-conservation-policy.edit', compact('energyconservationpolicy'));
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
                if ($request->hasFile('policy')) {
            $requestData['policy'] = $request->file('policy')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('notice')) {
            $requestData['notice'] = $request->file('notice')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('poster_number')) {
            $requestData['poster_number'] = $request->file('poster_number')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('publication')) {
            $requestData['publication'] = $request->file('publication')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('voice')) {
            $requestData['voice'] = $request->file('voice')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('email')) {
            $requestData['email'] = $request->file('email')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('meeting')) {
            $requestData['meeting'] = $request->file('meeting')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('others')) {
            $requestData['others'] = $request->file('others')
                ->store('uploads', 'public');
        }

        $energyconservationpolicy = EnergyConservationPolicy::findOrFail($id);
        $energyconservationpolicy->update($requestData);

        return redirect('energy-conservation-policy')->with('flash_message', 'EnergyConservationPolicy updated!');
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
        EnergyConservationPolicy::destroy($id);

        return redirect('energy-conservation-policy')->with('flash_message', 'EnergyConservationPolicy deleted!');
    }
}
