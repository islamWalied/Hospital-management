<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctors;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::id()){
            if(Auth::user()->status == '1') {

                $appointments = Appointment::all();
                return view('admin.my-appointment', compact('appointments'));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect()->back();
        }
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id,Request $request)
    {
        if(Auth::id()){
            if(Auth::user()->status == '1'){
        $doctor = Doctors::find($id);
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
        return redirect()->back()->with('edit','the doctor is Updated successfully');
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
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
        if(Auth::id()) {
            if (Auth::user()->status == '1') {
                $doctors = Doctors::find($id);
                return view('admin.update_doctor', compact('doctors'));
            } else {
                return redirect()->back();
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(Auth::id()) {
            if (Auth::user()->status == '1') {
        $data = Appointment::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('delete1','Appointment Has Deleted Successfully');
            } else {
                return redirect()->back();
            }
        }
        else
        {
            return redirect()->back();
        }

    }
    public function approve(string $id)
    {
        if(Auth::id()) {
            if (Auth::user()->status == '1') {
        $data = Appointment::findOrFail($id);
        $data->status='Approved';
        $data->save();
        return redirect()->back()->with('approved','Appointment Has Approved Successfully');
            } else {
                return redirect()->back();
            }
        }
        else
        {
            return redirect()->back();
        }

    }
    public function delete(string $id)
    {
        if(Auth::id()) {
            if (Auth::user()->status == '1') {
        $data = Doctors::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('delete2','Doctor Has Deleted Successfully');

            } else {
        return redirect()->back();
        }
        }
        else
        {
            return redirect()->back();
        }

}
}
