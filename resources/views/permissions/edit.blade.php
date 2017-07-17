@extends('default')

@section('title', "Edit permission")

@section('content')

<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-7 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"> Editer permission  </div>
                    <div class="panel-body">
                        @include('permissions.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

