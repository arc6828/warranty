<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Sumpdf;
use Illuminate\Http\Request;
use PDF;

class SumpdfController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->input('search');
        $perPage = 25;
        if (!empty($keyword)) {
            $sumpdf = Sumpdf::search($keyword);
        } else {
            $sumpdf = Sumpdf::latest()->paginate($perPage);
        }
        $data = [
          "$perPage = 25;s" => $sumpdf,
        ];
        return view('sumpdf.index', compact('sumpdf'));
        
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sumpdf.create');
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
        
        Sumpdf::create($requestData);

        return redirect('sumpdf')->with('flash_message', 'sumpdf added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sumpdf = Sumpdf::findOrFail($id);

        return view('sumpdf.show', compact('sumpdf'));
    }

    public function pdf($id)
    {
        $sumpdf = Sumpdf::findOrFail($id);
        
        //return view('sumpdf.pdf', compact('sumpdf'));
        $pdf = PDF::loadView('pdf', compact('sumpdf'));
        return $pdf->stream('test.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sumpdf = Sumpdf::findOrFail($id);

        return view('sumpdf.edit', compact('sumpdf'));
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
        
        $sumpdf = Sumpdf::findOrFail($id);
        $sumpdf->update($requestData);

        return redirect('sumpdf')->with('flash_message', 'sumpdf updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sumpdf::destroy($id);
        return redirect('sumpdf')->with('flash_message', 'sumpdf deleted!');
    }
}
