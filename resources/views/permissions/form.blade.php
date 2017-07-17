<?php
if ($permission->id) {
    $options = ['method' => 'put', 'url' => action('PermissionsController@update', $permission)];
} else {
    $options = ['method' => 'permissions', 'url' => action('PermissionsController@store')];
}
?>
@include('errors')
{!! Form::model($permission,$options) !!}
<div class="form-group">
    {!! Form::label('name', 'Nom') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
</div>
<button class="btn btn-primary">Envoyer</button>
{!! Form::close() !!}
