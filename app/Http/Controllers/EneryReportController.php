<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EneryReport;
use Illuminate\Http\Request;

class EneryReportController extends Controller
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
            $eneryreport = EneryReport::where('legal_name', 'LIKE', "%$keyword%")
                ->orWhere('factory_name', 'LIKE', "%$keyword%")
                ->orWhere('tsic_id', 'LIKE', "%$keyword%")
                ->orWhere('year', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $eneryreport = EneryReport::latest()->paginate($perPage);
        }

        return view('enery-report.index', compact('eneryreport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('enery-report.create');
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
        
        EneryReport::create($requestData);

        return redirect('enery-report')->with('flash_message', 'EneryReport added!');
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
        $eneryreport = EneryReport::findOrFail($id);

        return view('enery-report.show', compact('eneryreport'));
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
        $eneryreport = EneryReport::findOrFail($id);

        return view('enery-report.edit', compact('eneryreport'));
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
        
        $eneryreport = EneryReport::findOrFail($id);
        $eneryreport->update($requestData);

        return redirect('enery-report')->with('flash_message', 'EneryReport updated!');
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
        EneryReport::destroy($id);

        return redirect('enery-report')->with('flash_message', 'EneryReport deleted!');
    }
}
