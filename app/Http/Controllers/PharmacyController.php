<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = DB::table('pharmacies')->join('medicines', 'pharmacies.medicine_id', '=', 'medicines.id')->paginate(10);
        return view('backend.pharmacy.index')->with('medicines', $medicines);
    }

    public function addToPharmacy() {
        
        $medicines = Medicine::all();

        if ($medicines->isEmpty()) {
            return redirect('/pharmacy/medicines/create');
        }

        return view('backend.pharmacy.add')->with('medicines', $medicines);
    }

    public function storeToPharmacy(Request $request) {

        $this->validate($request, [
            'medicine_id' => 'required|numeric',
            'quantity' => 'required|numeric'
        ]);

        $pharmacy = new Pharmacy;

        $pharmacy->medicine_id = $request->input('medicine_id');
        $pharmacy->quantity = $request->input('quantity');

        $pharmacy->save();

        return redirect('/pharmacy');
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
            'name' => 'required|string|max:255',
            'manufacturar' => 'required|string|max:255',
            'price' => 'required|numeric'
        ]);
       
        $medicine  = new Medicine();

        $medicine->name = $request->input('name');
        $medicine->manufacturar = $request->input('manufacturar');
        $medicine->price = $request->input('price');

        $medicine->save();
       
        return redirect('/pharmacy/add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicine = Medicine::find($id);
        return view('backend.medicines.show')->with('medicine', $medicine);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicine = Medicine::find($id);
        return view('backend.medicines.edit')->with('medicine', $medicine);
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
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'manufacturar' => 'required|string|max:255',
            'price' => 'required|numeric'
        ]);
       
        $medicine  = Medicine::find($id);

        $medicine->name = $request->input('name');
        $medicine->manufacturar = $request->input('manufacturar');
        $medicine->price = $request->input('price');

        $medicine->save(); 
       
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
        $medicine = Medicine::find($id);
        
        $medicine->delete();

        return redirect('/pharmacy');
    }
}
