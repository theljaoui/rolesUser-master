<?php
if ($role->id) {
//    die('1');
    $options = ['method' => 'put', 'url' => action('RolesController@update', $role)];
} else {
    $options = ['method' => 'roles', 'url' => action('RolesController@store')];
}
?>
@include('errors')
{!! Form::model($role,$options) !!}
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
