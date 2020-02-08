<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EnergyReport;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

//CREATE FORM-1
use App\EnergyCommittee;
use App\EnergyFactoryInformation;
use App\EnergyOrganizationChart;
use App\EnergyEvaluation;
use App\EnergyConservationPolicy;
//CREATE FORM-2
use App\EnergyProduction;
use App\EnergyElectricityTransformer;
use App\EnergyConsumptionElectricity;
use App\EnergyConsumptionHeat;
use App\EnergyHeatGenerator;
use App\EnergyPortionHeat;
use App\EnergyPortionElectricity;

//CREATE FORM-3
use App\EnergyMachine;
        


class EnergyReportController extends Controller
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
            $energyreport = EnergyReport::where('legal_name', 'LIKE', "%$keyword%")
                ->orWhere('factory_name', 'LIKE', "%$keyword%")
                ->orWhere('tsic_id', 'LIKE', "%$keyword%")
                ->orWhere('year', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $energyreport = EnergyReport::latest()->paginate($perPage);
        }

        return view('energy-report.index', compact('energyreport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('energy-report.create');
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
        
        $energy_report = EnergyReport::create($requestData);
        //CREATE FORM-1
        EnergyCommittee::create(["user_id" => Auth::id() ,  "energy_report_id" => $energy_report->id ]);
        EnergyFactoryInformation::create(["user_id" => Auth::id() ,  "energy_report_id" => $energy_report->id ]);
        EnergyOrganizationChart::create(["user_id" => Auth::id() ,  "energy_report_id" => $energy_report->id ]);
        EnergyEvaluation::create(["user_id" => Auth::id() ,  "energy_report_id" => $energy_report->id ]);
        EnergyConservationPolicy::create(["user_id" => Auth::id() ,  "energy_report_id" => $energy_report->id ]);
        //CREATE FORM-2
        EnergyProduction::create(["user_id" => Auth::id() ,  "energy_report_id" => $energy_report->id ]);
        EnergyElectricityTransformer::create(["user_id" => Auth::id() ,  "energy_report_id" => $energy_report->id ]);
        EnergyConsumptionElectricity::create(["user_id" => Auth::id() ,  "energy_report_id" => $energy_report->id ]);
        EnergyConsumptionHeat::create(["user_id" => Auth::id() ,  "energy_report_id" => $energy_report->id ]);
        EnergyHeatGenerator::create(["user_id" => Auth::id() ,  "energy_report_id" => $energy_report->id ]);
        EnergyPortionHeat::create(["user_id" => Auth::id() ,  "energy_report_id" => $energy_report->id ]);
        EnergyPortionElectricity::create(["user_id" => Auth::id() ,  "energy_report_id" => $energy_report->id ]);
        
        //CREATE FORM-3
        EnergyMachine::create(["user_id" => Auth::id() ,  "energy_report_id" => $energy_report->id]);
        

        return redirect('energy-report')->with('flash_message', 'EnergyReport added!');
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
        $energyreport = EnergyReport::findOrFail($id);

        return view('energy-report.show', compact('energyreport'));
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
        $energyreport = EnergyReport::findOrFail($id);

        return view('energy-report.edit', compact('energyreport'));
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
        
        $energyreport = EnergyReport::findOrFail($id);
        $energyreport->update($requestData);

        return redirect('energy-report')->with('flash_message', 'EnergyReport updated!');
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
        EnergyReport::destroy($id);

        return redirect('energy-report')->with('flash_message', 'EnergyReport deleted!');
    }

    public function redirect(Request $request, $page)
    {
        /*
        switch($page){
            case():
            return redirect('energy-report')->with('flash_message', 'EnergyReport updated!');

        }

        $requestData = $request->all();
        
        $energyreport = EnergyReport::findOrFail($id);
        $energyreport->update($requestData);

        return redirect('energy-report')->with('flash_message', 'EnergyReport updated!');
        */
    }
}
