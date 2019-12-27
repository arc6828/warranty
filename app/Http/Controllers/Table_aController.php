<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Table_a;
use Illuminate\Http\Request;

class Table_aController extends Controller
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
            $table_a = Table_a::where('request_number', 'LIKE', "%$keyword%")
                ->orWhere('registration_date', 'LIKE', "%$keyword%")
                ->orWhere('fullname', 'LIKE', "%$keyword%")
                ->orWhere('company', 'LIKE', "%$keyword%")
                ->orWhere('production', 'LIKE', "%$keyword%")
                ->orWhere('promotion_certificate_number', 'LIKE', "%$keyword%")
                ->orWhere('promotion_date', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $table_a = Table_a::latest()->paginate($perPage);
        }

        return view('table_a.index', compact('table_a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('table_a.create');
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
        
        Table_a::create($requestData);

        return redirect('table_a')->with('flash_message', 'Table_a added!');
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
        $table_a = Table_a::findOrFail($id);

        return view('table_a.show', compact('table_a'));
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
        $table_a = Table_a::findOrFail($id);

        return view('table_a.edit', compact('table_a'));
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
        
        $table_a = Table_a::findOrFail($id);
        $table_a->update($requestData);

        return redirect('table_a')->with('flash_message', 'Table_a updated!');
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
        Table_a::destroy($id);

        return redirect('table_a')->with('flash_message', 'Table_a deleted!');
    }
}
