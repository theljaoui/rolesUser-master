<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Role;
use App\Http\Requests\ValidateRoleRequest;

class RolesController extends Controller {

    // list roles
    public function index() {
        $roles = Role::get();
        return view('roles.index', compact('roles'));
    }

    // view create role
    public function create() {
        $role = new Role();
        return view('roles.create', compact('role'));
    }

    // method create role
    public function store(ValidateRoleRequest $request) {
        $notification = array(
            'message' => 'Role ajouté avec succès',
            'alert-type' => 'success'
        );
        if (Role::create($request->all())) {
            return redirect(route('roles.index'))->with($notification);
        }
    }

    // view edit role
    public function edit($id) {
        $role = Role::findOrFail($id);
        return view('roles.edit', compact('role'));
    }

    // method update role
    public function update($id, ValidateRoleRequest $request) {
//        dd($request->all());
        $role = Role::findOrFail($id);
        $notification = array(
            'message' => 'Role modifié avec succès',
            'alert-type' => 'success'
        );
        if ($role->update($request->all())) {
            return redirect(route('roles.index'))->with($notification);
        }
    }

    // method show role
    public function show($id) {
        $role = Role::findOrFail($id);
        return view('roles.show', compact('role'));
    }

    // method delete role
    public function delete($id) {
        $role = Role::findOrFail($id);
        $notification = array(
            'message' => 'Role supprimé avec succès',
            'alert-type' => 'success'
        );
        if ($role->delete()) {
            return redirect(route('roles.index'))->with($notification);
        }
    }

    // attach role for user (view)
    public function attach($id) {
        $role = Role::findOrFail($id);
        return view('roles.attach', compact('role'));
    }

    // attach role to user (method)
    public function attacherole($id, Request $request) {
        $role = Role::findOrFail($id);
        $role->users()->attach($request->get('users_list'));
        return redirect(route('roles.index'));
    }

    // attach role to permission (view)
    public function attach_permission($id) {
        $role = Role::findOrFail($id);
//        dd($role);
        return view('roles.attach_permission', compact('role'));
    }

    // attach role to permission (method)
    public function attachrole_permission($id, Request $request) {
        $role = Role::findOrFail($id);
        $role->permissions()->attach($request->get('permissions_list'));
        return redirect(route('roles.index'));
    }

    // detach role for user (view)
    public function detach($id) {
        $role = Role::findOrFail($id);
//        dd($role);
        return view('roles.detach', compact('role'));
    }

    // detach role to user (method)
    public function detachrole($id, Request $request) {
        $role = Role::findOrFail($id);
        $role->users()->detach($request->get('users_list'));
        return redirect(route('roles.index'));
    }

    // detach role to permission (view)
    public function detachpermission($id) {
        $role = Role::findOrFail($id);
//        dd($role);
        return view('roles.detach_permission', compact('role'));
    }

    // detach role to permission (method)
    public function detachrolepermission($id, Request $request) {
        $role = Role::findOrFail($id);
        $role->permissions()->detach($request->get('permissions_list'));
        return redirect(route('roles.index'));
    }

}
