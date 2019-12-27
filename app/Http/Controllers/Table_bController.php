<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Table_b;
use Illuminate\Http\Request;

class Table_bController extends Controller
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
            $table_b = Table_b::where('base_year', 'LIKE', "%$keyword%")
                ->orWhere('products_baseyear', 'LIKE', "%$keyword%")
                ->orWhere('capacity_baseyear', 'LIKE', "%$keyword%")
                ->orWhere('working_Hourday_byear', 'LIKE', "%$keyword%")
                ->orWhere('working_dayyear_byear', 'LIKE', "%$keyword%")
                ->orWhere('evaluation_year', 'LIKE', "%$keyword%")
                ->orWhere('products_eyear', 'LIKE', "%$keyword%")
                ->orWhere('capacity_eyear', 'LIKE', "%$keyword%")
                ->orWhere('working_Hourday_eyear', 'LIKE', "%$keyword%")
                ->orWhere('working_dayyear_eyear', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $table_b = Table_b::latest()->paginate($perPage);
        }

        return view('table_b.index', compact('table_b'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('table_b.create');
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
        
        Table_b::create($requestData);

        return redirect('table_b')->with('flash_message', 'Table_b added!');
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
        $table_b = Table_b::findOrFail($id);

        return view('table_b.show', compact('table_b'));
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
        $table_b = Table_b::findOrFail($id);

        return view('table_b.edit', compact('table_b'));
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
        
        $table_b = Table_b::findOrFail($id);
        $table_b->update($requestData);

        return redirect('table_b')->with('flash_message', 'Table_b updated!');
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
        Table_b::destroy($id);

        return redirect('table_b')->with('flash_message', 'Table_b deleted!');
    }
}
