@extends('default')

@section('title', 'Voir role')

@section('content')

<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-7 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"> Voir Role   </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">Nom : {{ $role->name }}</li>
                            <li class="list-group-item">Display Nom : {{ $role->display_name }}</li>
                            <li class="list-group-item">Description : {{ $role->description }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

