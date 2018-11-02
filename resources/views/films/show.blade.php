@extends('adminlte::page')

@section('title', 'Codeline LaravelFilms - Film')

@section('content_header')
    <h1>
        Film
    </h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-body">
            <div class="row" style="padding-left: 20px">
                @include('films.show_fields')
                <a href="{!! route('films.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
    </div>
@endsection
