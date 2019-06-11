@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Licencia</div>

                <div class="card-body">
                         <br>
                        <input type="hidden" name="student" value="{{$id}}" disabled>
                        <input type="date" name="fecha_emision" value="" >
                        @foreach($horarios as $schedule)
                        <div class="checkbox">
                            <input type="checkbox" name="schedule" value="{{$schedule->id}}">{{$schedule->hora_inicio}}  {{$schedule->hora_fin}} {{$schedule->matter->name}}<br>
                        </div>
                        @endforeach
                        <textarea name="observation" id="observation" cols="30" rows="10"></textarea>
                        <button type="button" id="save" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
@section('scripts')
<script type="text/javascript">
$( document ).ready(function() {
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });

    $('#save').click(function(e){
        e.preventDefault();
        var id = $("input[name=student]").val();
        var date = $("input[name=fecha_emision]").val();
        var description = $("textarea[name=observation]").val();
        var horario = [];
            $.each($("input[name='schedule']:checked"), function(){            
                horario.push($(this).val());
            });
        var data = JSON.stringify({
                "_token": "{{ csrf_token() }}",
                student_id: id,
                fecha_emision: date,
                description: description,
                horario: horario
            });
        console.log(data);
        $.ajax({
            dataType : 'json',
            type:'GET',
            url: "{{url('guardar_asistencia')}}",
            data: {asistencia: data},
            contentType: false,
            processData: false,
            success:function(response) {
                console.log(response);
            }
        });
    })
});
    
</script>
@endsection