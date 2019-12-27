<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EnergyOrganizationChart;
use Illuminate\Http\Request;

class EnergyOrganizationChartController extends Controller
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
            $energyorganizationchart = EnergyOrganizationChart::where('organization_chart', 'LIKE', "%$keyword%")
                ->orWhere('organization_chart_promotion', 'LIKE', "%$keyword%")
                ->orWhere('notice_number', 'LIKE', "%$keyword%")
                ->orWhere('notice', 'LIKE', "%$keyword%")
                ->orWhere('poster_number', 'LIKE', "%$keyword%")
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
                ->orWhere('enery_report_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $energyorganizationchart = EnergyOrganizationChart::latest()->paginate($perPage);
        }

        return view('energy-organization-chart.index', compact('energyorganizationchart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('energy-organization-chart.create');
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
                if ($request->hasFile('organization_chart')) {
            $requestData['organization_chart'] = $request->file('organization_chart')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('organization_chart_promotion')) {
            $requestData['organization_chart_promotion'] = $request->file('organization_chart_promotion')
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

        EnergyOrganizationChart::create($requestData);

        return redirect('energy-organization-chart')->with('flash_message', 'EnergyOrganizationChart added!');
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
        $energyorganizationchart = EnergyOrganizationChart::findOrFail($id);

        return view('energy-organization-chart.show', compact('energyorganizationchart'));
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
        $energyorganizationchart = EnergyOrganizationChart::findOrFail($id);

        return view('energy-organization-chart.edit', compact('energyorganizationchart'));
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
                if ($request->hasFile('organization_chart')) {
            $requestData['organization_chart'] = $request->file('organization_chart')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('organization_chart_promotion')) {
            $requestData['organization_chart_promotion'] = $request->file('organization_chart_promotion')
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

        $energyorganizationchart = EnergyOrganizationChart::findOrFail($id);
        $energyorganizationchart->update($requestData);

        return redirect('energy-organization-chart')->with('flash_message', 'EnergyOrganizationChart updated!');
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
        EnergyOrganizationChart::destroy($id);

        return redirect('energy-organization-chart')->with('flash_message', 'EnergyOrganizationChart deleted!');
    }
}
