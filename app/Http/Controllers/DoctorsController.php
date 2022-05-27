<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // use DB;
        // $doctors = DB::select('SELECT * FROM docotrs');

        //$doctors = Doctor::all();
        

        $doctors = Doctor::orderBy('id', 'asc')->paginate(10);
        return view('backend.doctors.index')->with('doctors', $doctors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.doctors.create');
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
            'email' => 'required|email|string|max:255|unique:users',
            'password' => 'required|string|min:8',
            'phone' => 'required|string|max:255',
            'gender' => 'required|string',
            'dateofbirth' => 'required|date',
            'address' => 'required|string|max:255',
            'salary' => 'required',
            'period' => 'required|string',
        ]);

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        if($request->hasFile('profile_picture')){
            $profile = Str::slug($request->name) . '-' . $user->id . '.'.$request->profile_picture->getClientOriginalExtension();
            $request->profile_picture->move(public_path('images/profile'), $profile);
        }
        else {
            $profile = 'avatar.png';
        }

        $user->update([
            'profile_picture' => $profile
        ]);


        $user->doctor()->create([
            'name' => $request->name,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'dateofbirht' => $request->dateofbirth,
            'address' => $request->address,
            'salary' => $request->salary,
            'period' => $request->period
        ]);

        $user->assignRole('Doctor');
        
        return redirect('/doctors')->with('success', 'Doctor Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor =  Doctor::find($id);
        return view('backend.doctors.show')->with('doctor', $doctor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('backend.doctors.edit')->with('doctor', $doctor);
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
            'name' => 'required',
            'email' => 'required'
        ]);

        $doctor = Doctor::find($id);
        $doctor->name = $request->input('name');

        $doctor->save();

        return redirect('/doctors')->with('success', 'Doctor Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect('/doctors')->with('success', 'Doctor Deleted');
    }
}
