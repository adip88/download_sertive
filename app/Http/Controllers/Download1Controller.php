<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\ParticipantCertificate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Download1Controller extends Controller
{
    public function index()
    {
        $user = User::where('level', 'peserta')->get();
        $certificate = Certificate::get();
        $list = ParticipantCertificate::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();
        return view('download.index', [
            'certificate' => $certificate,
            'user' => $user,
            'list' => $list
        ]);
    }
}
