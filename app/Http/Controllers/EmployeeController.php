<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Http\Requests\EmployeeUpdateRequest;
use App\Models\Certificate;
use App\Models\ParticipantCertificate;
use App\Models\User;
use App\Traits\UserLogTrait;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeeController extends Controller
{
    use UserLogTrait;
    public function index()
    {
        $user = User::where('level', 'admin')->orderBy('id', 'DESC')->get();
        return view('employee.index', ['user' => $user]);
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(EmployeeRequest $request)
    {
        User::create($request->validatedLevelAdmin());
        Alert::alert('Add Data Success');
        return redirect()->route('employee.index');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('employee.edit', ['user' => $user]);
    }

    public function update(EmployeeUpdateRequest $request, $id)
    {
        $data = $request->all();

        $item = User::findOrFail($id);
        $item->update($data);
        Alert::alert('Edit Data Success');
        return redirect()->route('employee.index');
    }

    public function destroy($id)
    {
        $item = User::findOrFail($id);
        $item->delete($id);
        Alert::alert('Delete Data Success');
        return redirect()->back();
    }

    public function list1()
    {
        $user = User::where('level', 'peserta')->get();
        $certificate = Certificate::get();
        $list = ParticipantCertificate::orderBy('id', 'DESC')->get();
        return view('employee.list', [
            'certificate' => $certificate,
            'user' => $user,
            'list' => $list
        ]);
    }
}
