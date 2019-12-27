<?php

namespace App\Http\Controllers;


use App\Duration;
use Illuminate\Http\Request;



class DurationController extends Controller
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
            $duration = Duration::where('duration', 'LIKE', "%$keyword%")
                ->orWhere('order_m', 'LIKE', "%$keyword%")
                ->orWhere('install_m', 'LIKE', "%$keyword%")
                ->orWhere('generate', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $duration = Duration::latest()->paginate($perPage);
        }

        return view('duration.index', compact('duration'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('duration.create');
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
        
        Duration::create($requestData);

        return redirect('duration')->with('flash_message', 'Duration added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $duration = Duration::findOrFail($id);

        return view('duration.show', compact('duration'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $duration = Duration::findOrFail($id);

        return view('duration.edit', compact('duration'));
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
        
        $duration = Duration::findOrFail($id);
        $duration->update($requestData);

        return redirect('duration')->with('flash_message', 'Duration updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Duration::destroy($id);

        return redirect('duration')->with('flash_message', 'Duration deleted!');
    }
}
