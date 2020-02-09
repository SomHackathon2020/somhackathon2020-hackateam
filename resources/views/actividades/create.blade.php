@extends('layouts.app')
@section('content')
<form action="{{ route('actividades.store') }}" method="post">
    <div class="form-group">{{ csrf_field() }}
        <p>
            <label for="nombre" class="nombre">Nombre de la actividad: </label>
            <input type="text" name="nombre" id="nombre" required="required" placeholder="nombre de la actividad" />
        </p>
        <p>
            <label for="descripcion" class="descipcion">Descripcion: </label>
            <input type="text" name="descripcion" id="descripcion" required="required"
                placeholder="Descripcion de la actividad" />
        </p>
        <div class="input-group date" id="inicio" data-target-input="nearest">
            <label for="inicio" class="inicio">Inicio de la actividad: </label>
            <input type="text" name="inicio" id="inicio" class="form-control datetimepicker-input">
            <div class="input-group-append" data-target="#inicio" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
        <div class="input-group date" id="fin" data-target-input="nearest">
            <label for="fin" class="fin">Final de la actividad: </label>
            <input type="text" name="fin" id="fin" class="form-control datetimepicker-input">
            <div class="input-group-append" data-target="#fin" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
        <input type="submit" value="Registrar actividad" />
        <input type="reset">
    </div>
</form>
@endsection
