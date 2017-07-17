@extends('default')

@section('title', "Liste des permissions")

@section('content')

<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-9 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"> 
                        Liste des permissions  
                        <a href="{{ route('permissions.create')}}" class="btn btn-default btn-sm" style='float: right;margin-top: -5px;'>
                            <i class="fa fa-plus"></i> Créer 
                        </a>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-hover" id="FamilleList">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Description</th>
                                    <th>Date de création</th>
                                    <th>Date de modification</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $permission)
                                <tr>
                                    <td>{{ $permission->name }}</td>
                                    <td>{{ $permission->description }}</td>
                                    <td>{{ $permission->created_at }}</td>
                                    <td>{{ $permission->updated_at }}</td>
                                    <td>
                                        <a class="btn btn-success btn-sm" href="{{ route('permissions.edit', $permission) }}">Editer</a>
                                        <a class="btn btn-sm btn-primary" href="{{ route('permissions.show', $permission) }}">Voir</a>
                                        <a class="btn btn-sm btn-danger" href="{{ route('permissions.delete', ['id'=>$permission->id]) }}">Supprimer</a>
                                    </td>
                                </tr>    
                                @endforeach
                            </tbody>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

