@extends('adminlte::layouts.app')


@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Area</li>
              </ol>
            </nav>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">{{ __('Tambah Area') }}</h2></div>
                    <div class="panel-body">
                        {!! Form::open(['url' => route('area.store'),
                        'method' => 'post', 'files'=>'true',  'class'=>'form-horizontal']) !!}
                            @include('area._form')                 
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
