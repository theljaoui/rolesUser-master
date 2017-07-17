<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Permission;
use App\Http\Requests\ValidatePermissionRequest;

class PermissionsController extends Controller {

    // list permissions
    public function index() {
        $permissions = Permission::get();
        return view('permissions.index', compact('permissions'));
    }

    // view create permission
    public function create() {
        $permission = new Permission();
        return view('permissions.create', compact('permission'));
    }

    // method create permission
    public function store(ValidatePermissionRequest $request) {
        $notification = array(
            'message' => 'Permission crée avec succès',
            'alert-type' => 'success'
        );
        if (Permission::create($request->all())) {
            return redirect(route('permissions.index'))->with($notification);
        }
    }

    // view edit permission
    public function edit($id) {
        $permission = Permission::findOrFail($id);
        return view('permissions.edit', compact('permission'));
    }

    // method update permission
    public function update($id, ValidatePermissionRequest $request) {
        $permission = Permission::findOrFail($id);
        $notification = array(
            'message' => 'Permission modifiée avec succès',
            'alert-type' => 'success'
        );
        if ($permission->update($request->all())) {
            return redirect(route('permissions.index'))->with($notification);
        }
    }

    // method show permission
    public function show($id) {
        $permission = Permission::findOrFail($id);
        return view('permissions.show', compact('permission'));
    }

    // method delete permission
    public function delete($id) {
        $permission = Permission::findOrFail($id);
        $notification = array(
            'message' => 'Permission supprimés avec succès',
            'alert-type' => 'success'
        );
        if ($permission->delete()) {
            return redirect(route('permissions.index'))->with($notification);
        }
    }

}
