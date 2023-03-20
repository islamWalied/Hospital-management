<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        Doctors::create([
//            'name' => $request->name,
//            'phone' => $request->phone,
//            'room' => $request->room,
//            'speciality' => $request->speciality,
//
//        ]);
        if(Auth::id()){
            if(Auth::user()->status == '1'){
            $doctor = new Doctors();
            $doctor->name = $request->name;
            $doctor->phone = $request->phone;
            $doctor->room = $request->room;
            $doctor->speciality = $request->speciality;
            $image = $request->file;
            if($image) {
                $imagename = time() . "." . $image->getClientOriginalExtension();
                $request->file->move('doctorimage', $imagename);
                $doctor->image = $imagename;
            }
            $doctor->save();
            return redirect()->back()->with('add','the doctor is added successfully');
            }
            else{
                return redirect()->back();
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        if(Auth::id()){
            if(Auth::user()->status == '1'){
                $doctors = Doctors::all();
                return view('admin.view_doctors',compact('doctors'));

            }
            else{
                return redirect()->back();
            }
            }
        else
        {
        return redirect()->back();
        }

    }
    public function show_add_doctor()
    {
        if(Auth::id()){
                if(Auth::user()->status == '1'){
                    return view('admin.add_doctors');
                }
                else{
                    return redirect()->back();
                }
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctors $doctors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctors $doctors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctors $doctors)
    {
        //
    }
}
