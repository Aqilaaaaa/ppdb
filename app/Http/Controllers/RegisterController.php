<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\School;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

use PDF;

//use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function showStudentRegisterForm()
    {
        $smp = School::all();

        return view('register',compact('smp'));
    }

    /**
     * Handle account registration request
     * 
     * @return \Illuminate\Http\Response
     */
    public function saveStudent(Request $request) 
    {
        // $request->validate([
        //     'full_name' => 'required',
        //     'nisn' => 'required',
        //     'email' => 'required',
        //     //'school_id' => 'required',
        //     'phone_no' => 'required',
        //     'father_phone_no' => 'required',
        //     'mother_phone_no' => 'required',
        //     //'register_date' => 'required',
        //     //'end_date' => 'required',
        //     'reference_type' => 'required',
        //     'reference_value' => 'required'
        // ]);

        if($request->asal_sekolah == 'others'){
            $school = School::create([
                'name' => $request->asal_sekolah_text
            ]);

            $request->asal_sekolah = $school->id;
        }

        $student = Student::create([
            'full_name' => $request->nama,
            'nisn' => $request->nisn,
            'email' => $request->email,
            'school_id' => $request->asal_sekolah,
            'phone_no' => $request->no_hp,
            'father_phone_no' => $request->no_hp_ayah,
            'mother_phone_no' => $request->no_hp_ibu,
            'register_date' => date('Y-m-d H:i:s'),
            'end_date' => date('Y-m-d H:i:s'),
            'reference_type' => $request->pilih_referensi,
            'reference_value' => $request->nama_pegawai_wikrama
        ]);



        $user = User::create([
            'email' => $request->email,
            'name'=> $request->nama,
            'password' => Hash::make($request->nisn),
            'type'=>'student'
        ]);

        auth()->login($user);

        return view('student/student-print',['student'=>$student,'user'=>$user]);

        //return redirect('/')->with('success', "Account successfully registered.");
    }

    public function studentPrintPdf()
    {
        return view('student.student-print');
    }
}
