@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hijos</div>

                <div class="card-body">
                    @foreach($students as $student)
                    <a href="{{ url('licencia/'.$student->id) }}" class="btn btn-danger licencia">{{ $student->name }}    {{ $student->course->name }}    {{ $student->course->parallel }}    {{ $student->course->section }}</a><br>
                    <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection