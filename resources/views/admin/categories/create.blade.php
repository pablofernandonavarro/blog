@extends('adminlte::page')

@section('title', 'StockInteligente')

@section('content_header')
    <h1>Crear nueva categoria:</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {{ html()->form('POST', route('admin.categories.store'))->class('form-horizontal')->open() }}

            <div class="mb-3">
                {{ html()->label('Nombre de la categoría', 'category_name')->class('form-label') }}
                {{ html()->text('name')->class('form-control')->placeholder('Ingrese el nombre de la categoría') }}
            @error('name')
            <span class= 'text-danger'>{{$message}}</span>
            @enderror


            </div>

            <div class="mb-3">
                {{ html()->submit('Crear Categoria')->class('btn btn-success') }}
            </div>

            {{ html()->form()->close() }}
        </div>
    @stop
