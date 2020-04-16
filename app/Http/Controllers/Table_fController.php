<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Table_f;
use App\EnergyReport;
use Illuminate\Http\Request;

class Table_fController extends Controller
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
        
        $energyreport = EnergyReport::findOrFail($request->get('energy_report_id'));

        $table_f = Table_f::where('sumpdf_id', $energyreport->id)->latest()->paginate($perPage);
                
        return view('table_f.index', compact('table_f','energyreport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('table_f.create');
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
        
        Table_f::create($requestData);

        return redirect('table_f')->with('flash_message', 'Table_f added!');
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
        $table_f = Table_f::findOrFail($id);

        return view('table_f.show', compact('table_f'));
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
        $table_f = Table_f::findOrFail($id);

        return view('table_f.edit', compact('table_f'));
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
        
        $table_f = Table_f::findOrFail($id);
        $table_f->update($requestData);

        return redirect('table_f')->with('flash_message', 'Table_f updated!');
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
        Table_f::destroy($id);

        return redirect('table_f')->with('flash_message', 'Table_f deleted!');
    }
}
