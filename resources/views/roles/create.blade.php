@extends('default')

@section('title', "Ajouter role")

@section('content')

<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-7 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"> Ajouter role  </div>
                    <div class="panel-body">
                        @include('roles.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

