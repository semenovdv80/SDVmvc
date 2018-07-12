@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <div class="jumbotron">
            <h3>
                SemenovDV80/MVC framework
                <span class="text-center">Wellcome!</span>
             </h3>
        </div>
    </div>
    <div class="col-sm-2">
        @include('index.menu')
    </div>
</div>
@endsection