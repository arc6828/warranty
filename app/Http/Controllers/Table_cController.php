<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Table_c;
use Illuminate\Http\Request;

class Table_cController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $table_a = Table_c::where('peetharn', 'LIKE', "%$keyword%")
                ->orWhere('cost', 'LIKE', "%$keyword%")
                ->orWhere('yield', 'LIKE', "%$keyword%")
                ->orWhere('amount', 'LIKE', "%$keyword%")
                ->orWhere('efficiency', 'LIKE', "%$keyword%")
                ->orWhere('overall', 'LIKE', "%$keyword%")
                ->orWhere('equipment', 'LIKE', "%$keyword%")
                ->orWhere('mean', 'LIKE', "%$keyword%")
                ->orWhere('actual', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $table_c = Table_c::latest()->paginate($perPage);
        }

        return view('table_c.index', compact('table_c'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('table_c.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        
        Table_c::create($requestData);

        return redirect('table_c')->with('flash_message', 'Table_c added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $table_c = Table_c::findOrFail($id);

        return view('table_c.show', compact('table_c'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $table_c = Table_c::findOrFail($id);

        return view('table_c.edit', compact('table_c'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        
        $table_c = Table_c::findOrFail($id);
        $table_c->update($requestData);

        return redirect('table_c')->with('flash_message', 'Table_c updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Table_c::destroy($id);

        return redirect('table_c')->with('flash_message', 'Table_c deleted!');
    }
}
