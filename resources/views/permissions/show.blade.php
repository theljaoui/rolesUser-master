@extends('default')

@section('title', 'Voir permission')

@section('content')

<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-7 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"> Voir permission   </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">Nom : {{ $permission->name }}</li>
                            <li class="list-group-item">Description : {{ $permission->description }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

