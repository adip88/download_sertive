<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Http\Requests\EmployeeUpdateRequest;
use App\Models\User;
use App\Traits\UserLogTrait;
use RealRashid\SweetAlert\Facades\Alert;

class ParticipantController extends Controller
{
    use UserLogTrait;
    public function index()
    {
        $user = User::where('level', 'peserta')->orderBy('id', 'DESC')->get();
        return view('participant.index', ['user' => $user]);
    }

    public function create()
    {
        return view('participant.create');
    }

    public function store(EmployeeRequest $request)
    {
        User::create($request->validatedLevelPeserta());
        Alert::alert('Add Data Success');
        return redirect()->route('participant.index');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('participant.edit', ['user' => $user]);
    }

    public function update(EmployeeUpdateRequest $request, $id)
    {
        $data = $request->all();

        $item = User::findOrFail($id);
        $item->update($data);
        Alert::alert('Edit Data Success');
        return redirect()->route('participant.index');
    }

    public function destroy($id)
    {
        $item = User::findOrFail($id);
        $item->delete($id);
        Alert::alert('Delete Data Success');
        return redirect()->back();
    }
}
