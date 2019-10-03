<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EnergyUsage;
use App\Hardware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EnergyUsageController extends Controller
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
            $energyusage = EnergyUsage::where('hardware_id', 'LIKE', "%$keyword%")
                ->orWhere('place_type', 'LIKE', "%$keyword%")
                ->orWhere('category', 'LIKE', "%$keyword%")
                ->orWhere('date_begin', 'LIKE', "%$keyword%")
                ->orWhere('date_end', 'LIKE', "%$keyword%")
                ->orWhere('quantity', 'LIKE', "%$keyword%")
                ->orWhere('watts', 'LIKE', "%$keyword%")
                ->orWhere('joules', 'LIKE', "%$keyword%")
                ->orWhere('hours_per_day', 'LIKE', "%$keyword%")
                ->orWhere('day_per_week', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('photo', 'LIKE', "%$keyword%")
                ->where('user_id', Auth::id())
                ->latest()->paginate($perPage);
        } else {
            $energyusage = EnergyUsage::where('user_id', Auth::id())->latest()->paginate($perPage);
        }

        return view('energy-usage.index', compact('energyusage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $hardware = Hardware::getAll();
        $data = [
            "hardware" => $hardware 
            ];          
        return view('energy-usage.create',$data);
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
        if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
                ->store('uploads', 'public');
        }

        EnergyUsage::create($requestData);

        return redirect('energy-usage')->with('flash_message', 'EnergyUsage added!');
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
        $energyusage = EnergyUsage::findOrFail($id);

        return view('energy-usage.show', compact('energyusage'));
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
        $hardware = Hardware::getAll();
        $data = [
            "hardware" => $hardware 
            ];
        $energyusage = EnergyUsage::findOrFail($id);

        return view('energy-usage.edit', compact('energyusage'),$data);
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
                if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
                ->store('uploads', 'public');
        }

        $energyusage = EnergyUsage::findOrFail($id);
        $energyusage->update($requestData);

        return redirect('energy-usage')->with('flash_message', 'EnergyUsage updated!');
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
        EnergyUsage::destroy($id);

        return redirect('energy-usage')->with('flash_message', 'EnergyUsage deleted!');
    }
}
