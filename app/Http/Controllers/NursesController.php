<?php

namespace App\Http\Controllers;

use App\Models\nurse;
use Illuminate\Http\Request;

class NursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nurses = Nurse::orderBy('id', 'asc')->paginate(10);
        return view('backend.nurses.index')->with('nurses', $nurses);
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.nurses.create');
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
            'phone' => 'required|string|max:255',
            'gender' => 'required|string',
            'dateofbirth' => 'required|date',
            'address' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'period' => 'required|string'
        ]);

        
        $nurse = new Nurse;

        $nurse->name = $request->input('name');
        $nurse->phone = $request->input('phone');
        $nurse->gender = $request->input('gender');
        $nurse->dateofbirth = $request->input('dateofbirth');
        $nurse->salary = $request->input('salary');
        $nurse->address = $request->input('address');
        $nurse->period = $request->input('period');

        $nurse->save();
        
        return redirect('/nurses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nurse = Nurse::find($id);
        return view('backend.nurses.show')->with('nurse', $nurse);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nurse = Nurse::find($id);
        return view('backend.nurses.edit')->with('nurse', $nurse);
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
            'phone' => 'required|string|max:255',
            'gender' => 'required|string',
            'dateofbirth' => 'required|date',
            'address' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'period' => 'required|string'
        ]);

        
        $nurse = Nurse::find($id);

        $nurse->name = $request->input('name');
        $nurse->phone = $request->input('phone');
        $nurse->gender = $request->input('gender');
        $nurse->dateofbirth = $request->input('dateofbirth');
        $nurse->salary = $request->input('salary');
        $nurse->address = $request->input('address');
        $nurse->period = $request->input('period');

        $nurse->save();
        
        return redirect('/nurses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nurse = Nurse::find($id);
        $nurse->delete();

        return redirect('/nurses');
    }
}