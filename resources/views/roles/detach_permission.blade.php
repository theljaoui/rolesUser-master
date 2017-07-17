@extends('default')

@section('title', "Detach role to a user")

@section('content')

<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-7 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"> Detach role to a user  </div>
                    <div class="panel-body">
                        {!! Form::model($role,['method' => 'posts', 'url' => action('RolesController@detachrolepermission', $role)]) !!}
                        <div class="form-group">
                            {!! Form::label('permissions_list[]', 'Permissions') !!}
                            {!! Form::select('permissions_list[]', App\Permission::lists('name','id'), null, ['class'=>'form-control']) !!}
                        </div>
                        <button class="btn btn-primary">Envoyer</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

