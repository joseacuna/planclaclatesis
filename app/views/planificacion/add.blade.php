@extends('layouts.maestro')
 
@section('sidebar')
     @parent
     Formulario de Planificacion
@stop
 
@section('content')
        {{ HTML::link('planificacion', 'volver'); }}
        <h1>
 Agregar Planificacion
      

</h1>
<div>
            {{ Form::open(array('url' => 'planificacion/add')) }}
            <p>
            {{Form::label('facultad', 'Facultad')}}
            {{Form::text('facultad', '')}}
            </p>
            <p>
            {{Form::label('escuela', 'Escuela')}}
            {{Form::text('escuela', '')}}
            </p>
            <p>
            {{Form::label('carrera', 'Carrera')}}
            {{Form::text('carrera', '')}}
            </p>
             <p>
                        {{Form::label('asignatura', 'Asignatura')}}
                        {{Form::text('asignatura', '')}}
                        </p>
               <p>
                          {{Form::label('profesor', 'Profesor Resposable')}}
                          {{Form::text('profesor', '')}}
                          </p>

                          <p>
                                     {{Form::label('semestre', 'Semestre De Dictacion')}}
                                     {{Form::text('semestre', '')}}
                                     </p>
            {{Form::submit('Guardar')}}
            {{ Form::close() }}

            </div>
@stop