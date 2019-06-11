<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Parents;
use App\Models\Student;
use App\Services\NotificationService;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id =  Auth::user()->id;
        $parent = Parents::where('user', $user_id )->first();
        return view('courses.index', ['students' => $parent->students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function licencia($id)
    {
        $student = Student::where('id',$id)->first();
        return view('courses.licencia', ['horarios' => $student->course->schedules,'id'=>$id]);
    }
  

    public function guardar_asistencia(Request $request)
    {
        $padre = Parents::first();
        eval(\Psy\sh());
        NotificationService::send($padre->tocken_fcm,array(
            'body' => 'asasas asjasjasjajs Correctamente ',
            'title' => 'Colegio'
            ));
        return response()->json(['status' => true, 'tocken' => $padre->token_fcm , 'data' => $result ]);
       
    }
}
