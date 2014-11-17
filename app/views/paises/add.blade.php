@extends('layouts.maestro')
 
@section('sidebar')
     @parent
     Formulario de Paises
@stop
 
@section('content')
        {{ HTML::link('paises', 'volver'); }}
        <h1>
 Agregar Paises
      

</h1>
<div>
            {{ Form::open(array('url' => 'paises/add')) }}
            <p>
            {{Form::label('pais', 'Pais')}}
            {{Form::text('pais', '')}}
            </p>
            <p>
            {{Form::label('alpha2', 'Alpha2')}}
            {{Form::text('alpha2', '')}}
            </p>
            <p>
            {{Form::label('alpha3', 'Alpha3')}}
            {{Form::text('alpha3', '')}}
            </p>
            {{Form::submit('Guardar')}}
            {{ Form::close() }}

            </div>
@stop