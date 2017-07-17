@extends('default')

@section('title', "Liste des roles")

@section('content')

<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-9 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"> 
                        Liste des roles  
                        <a href="{{ route('roles.create')}}" class="btn btn-default btn-sm" style='float: right;margin-top: -5px;'>
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
                                @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->name}}</td>
                                    <td>{{ $role->description}}</td>
                                    <td>{{ $role->created_at}}</td>
                                    <td>{{ $role->updated_at}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-info btn-sm" href="{{ route('roles.show', $role)}}">
                                                <i class="fa fa-eye"></i> Voir
                                            </a>
                                            <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-left: solid 1px #ddd;">
                                                <span class="caret"></span>
                                                <span class="sr-only">Listes actions</span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div>
                                                        <a class="btn btn-default btn-sm"  style="border: none;color: #5cb85c; font-size: 13px; font-weight: bold;"  href="{{ route('roles.edit', $role)}}">
                                                            Editer
                                                        </a>
                                                    </div>                                        
                                                </li>
                                                <li>
                                                    <div>
                                                        <a class="btn btn-default btn-sm" style="border: none;color: #673ab7; font-size: 13px; font-weight: bold;" href="{{ route('roles.attach', $role->id)}}">Attach user</a>
                                                    </div>                                        
                                                </li>
                                                <li>
                                                    <div style="padding-top: 5px;">
                                                        <a class="btn btn-default btn-sm" style="border: none;color: #36c6d3; font-size: 13px; font-weight: bold;" href="{{ route('roles.attachpermission', $role->id)}}">Attach permission</a>
                                                    </div>                                        
                                                </li>
                                                <li>
                                                    <div>
                                                        <a class="btn btn-default btn-sm" style="border: none;color: #673ab7; font-size: 13px; font-weight: bold;" href="{{ route('roles.detach', $role->id)}}">Detach user</a>
                                                    </div>                                        
                                                </li>
                                                <li>
                                                    <div style="padding-top: 5px;">
                                                        <a class="btn btn-default btn-sm" style="border: none;color: #36c6d3; font-size: 13px; font-weight: bold;" href="{{ route('roles.detachpermission', $role->id)}}">Detach permission</a>
                                                    </div>                                        
                                                </li>
                                                <li>
                                                    <div style="padding-top: 5px;">
                                                        <a class="btn btn-sm btn-default btn-sm" style="border: none;color: #c9302c; font-size: 13px; font-weight: bold;" href="{{ route('roles.delete', ['id' => $role->id])}}">Supprimer</a>
                                                    </div>                                        
                                                </li>
                                            </ul>
                                        </div>


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

