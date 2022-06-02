<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pharmacy;
use App\Models\Medicine;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicine = Pharmacy::orderBy('id', 'asc')->paginate(10);
        return view('backend.pharmacy.index')->with('pharmacy', $medicine);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.medicines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            
            'medicine_id' => 'required|numeric',
            'quantity' => 'required|numeric'
            
        ]);
       
       
        $medicine  = new Medicine();
        $medicine ->name = $request->input('name');
        $medicine ->manufacturar = $request->input('manufacturar');
        $medicine ->price = $request->input('price');
        $medicine ->quantity = $request->input('quantity');

        $medicine ->save();
        
       
        return redirect('/pharmacy');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pharmacy = Pharmacy::find($id);

        return view('backend.medicines.edit')->with('pharmacy', $pharmacy);
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

        $pharmacy = Pharmacy::find($id);
        $this->validate($request, [
            'medicine_id' => 'required|numeric',
            'quantity' => 'required|numeric'
            
        ]);
      
       
        $medicine  = new Medicine();
        $medicine ->name = $request->input('name');
        $medicine ->manufacturar = $request->input('manufacturar');
        $medicine ->price = $request->input('price');
        $medicine ->quantity = $request->input('quantity');

        $medicine ->save();
        

        
       
        return redirect('/pharmacy');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pharmacy = Pharmacy::find($id);
        

        $pharmacy()->delete();

        return redirect('/pharmacy');
    
    }
}
