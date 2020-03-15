<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EnergyEvaluation;
use Illuminate\Http\Request;

class EnergyEvaluationController extends Controller
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
            $energyevaluation = EnergyEvaluation::where('policy_score', 'LIKE', "%$keyword%")
                ->orWhere('organization_score', 'LIKE', "%$keyword%")
                ->orWhere('motivation_score', 'LIKE', "%$keyword%")
                ->orWhere('information_score', 'LIKE', "%$keyword%")
                ->orWhere('public_relation_score', 'LIKE', "%$keyword%")
                ->orWhere('investment_score', 'LIKE', "%$keyword%")
                ->orWhere('remark', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('energy_report_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $energyevaluation = EnergyEvaluation::latest()->paginate($perPage);
        }

        return view('energy-evaluation.index', compact('energyevaluation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('energy-evaluation.create');
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
        
        EnergyEvaluation::create($requestData);

        return redirect('energy-evaluation')->with('flash_message', 'EnergyEvaluation added!');
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
        $energyevaluation = EnergyEvaluation::findOrFail($id);

        return view('energy-evaluation.show', compact('energyevaluation'));
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
        $energyevaluation = EnergyEvaluation::findOrFail($id);

        return view('energy-evaluation.edit', compact('energyevaluation'));
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
        
        $energyevaluation = EnergyEvaluation::findOrFail($id);
        $energyevaluation->update($requestData);

        return redirect('energy-evaluation/'.$id.'/edit')->with('flash_message', 'EnergyEvaluation updated!');
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
        EnergyEvaluation::destroy($id);

        return redirect('energy-evaluation')->with('flash_message', 'EnergyEvaluation deleted!');
    }
}
