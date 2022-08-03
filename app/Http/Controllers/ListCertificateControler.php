<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\ParticipantCertificate;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ListCertificateControler extends Controller
{
    public function index()
    {
        $user = User::where('level', 'peserta')->get();
        $certificate = Certificate::get();
        $list = ParticipantCertificate::orderBy('id', 'DESC')->get();
        return view('list.index', [
            'certificate' => $certificate,
            'user' => $user,
            'list' => $list
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'certificate' => 'required'
        ]);

        $media = new ParticipantCertificate;
        $media->user_id = $request->user;
        $media->certificate_id = $request->certificate;
        $media->save();

        Alert::alert('Add Data Success');
        return redirect()->route('list.index');
    }



    public function destroy($id)
    {
        $item = ParticipantCertificate::findOrFail($id);
        $item->delete($id);
        Alert::alert('Delete Data Success');
        return redirect()->back();
    }
}
