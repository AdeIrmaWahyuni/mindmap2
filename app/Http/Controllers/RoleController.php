<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\RoleRepository;
use Illuminate\Http\Request;
use Flash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use DB;


class RoleController extends AppBaseController
{
    /** @var RoleRepository $roleRepository*/
    private $roleRepository;

    public function __construct(RoleRepository $roleRepo)
    {
        $this->roleRepository = $roleRepo;
    }

    /**
     * Display a listing of the Role.
     */
    public function index(Request $request)
    {
        $roles = $this->roleRepository->paginate(10);

        return view('roles.index')->with('roles', $roles);
    }

    /**
     * Show the form for creating a new Role.
     */
    public function create()
    {
        $sPermissions=Permission::orderBy('name')->get();
        $permissions=[];
        return view('roles.create',compact('sPermissions','permissions'));
    }

    /**
     * Store a newly created Role in storage.
     */
    public function store(CreateRoleRequest $request)
    {
        // $input = $request->all();

        // $role = $this->roleRepository->create($input);

        // Flash::success('Role saved successfully.');

        // return redirect(route('roles.index'));

        $input = $request->all();

        try{
            DB::beginTransaction();

            $role = Role::create(['name'=>$input['name'],'guard_name'=>$input['guard_name']]);

            if($request->has('permission_id')) {
                $permissions=Permission::whereIn('id',$input['permission_id'])->get();
                $role->syncPermissions($permissions);
            }

            DB::commit();
            Flash::success('Role updated successfully.');
        }catch (Exception $e){
            DB::rollBack();
            Flash::error('Role updated not save.');
        }

        return redirect(route('roles.index'));
    }

    /**
     * Display the specified Role.
     */
    public function show($id)
    {
        $role = $this->roleRepository->find($id);

        if (empty($role)) {
            Flash::error('Role not found');

            return redirect(route('roles.index'));
        }

        return view('roles.show')->with('role', $role);
    }

    /**
     * Show the form for editing the specified Role.
     */
    public function edit($id)
    {
        // $role = $this->roleRepository->find($id);

        // if (empty($role)) {
        //     Flash::error('Role not found');

        //     return redirect(route('roles.index'));
        // }

        // return view('roles.edit')->with('role', $role);


        $roles = $this->roleRepository->find($id);

        if (empty($roles)) {
            Flash::error('Roles not found');

            return redirect(route('roles.index'));
        }

        $sPermissions=Permission::orderBy('name')->get();
        $permissions=$roles->permissions->pluck('id')->toArray();

        return view('roles.edit',compact('sPermissions', 'permissions'))->with('roles', $roles);
    }

    /**
     * Update the specified Role in storage.
     */
    public function update($id, UpdateRoleRequest $request)
    {
        // $role = $this->roleRepository->find($id);

        // if (empty($role)) {
        //     Flash::error('Role not found');

        //     return redirect(route('roles.index'));
        // }

        // $role = $this->roleRepository->update($request->all(), $id);

        // Flash::success('Role updated successfully.');

        // return redirect(route('roles.index'));

        $roles = $this->roleRepository->find($id);

        if (empty($roles)) {
            Flash::error('Roles not found');

            return redirect(route('roles.index'));
        }

        $input=$request->all();

        try{
            DB::beginTransaction();
            $roles->update(['name'=>$input['name'],'guard_name'=>$input['guard_name']]);

            if($request->has('permission_id')){
                $permissions=Permission::whereIn('id',$input['permission_id'])->get();
                $roles->syncPermissions($permissions);
            }

            DB::commit();
            Flash::success('Role updated successfully.');
        }catch (Exception $e){
            DB::rollBack();
            Flash::error('Role updated not save.');
        }

        return redirect(route('roles.index'));
    }

    /**
     * Remove the specified Role from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $role = $this->roleRepository->find($id);

        if (empty($role)) {
            Flash::error('Role not found');

            return redirect(route('roles.index'));
        }

        $this->roleRepository->delete($id);

        Flash::success('Role deleted successfully.');

        return redirect(route('roles.index'));
    }
}
