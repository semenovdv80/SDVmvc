@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <div class="jumbotron">
            <h3 class="text-center">
                SemenovDV80/MVC Framework
             </h3>
            <div class="text-center">This is simple engine for MVC solutions. Wellcome!</div>
        </div>
    </div>
    <div class="col-sm-2">
        @include('index.menu')
    </div>
</div>
@endsection