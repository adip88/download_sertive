<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use File;

class CertificateController extends Controller
{
    public function index()
    {
        $certificate = Certificate::get();
        return view('certificate.index', ['certificate' => $certificate]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf'
        ]);

        if ($request->hasFile('file')) {
            $uploadPath = public_path('uploads');

            if (!File::isDirectory($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true, true);
            }

            $file = $request->file('file');
            $explode = explode('.', $file->getClientOriginalName());
            $originalName = $explode[0];
            $extension = $file->getClientOriginalExtension();
            $rename = 'file_' . date('YmdHis') . '.' . $extension;
            $mime = $file->getClientMimeType();
            $filesize = $file->getSize();

            if ($file->move($uploadPath, $rename)) {
                $media = new certificate;
                $media->name = $originalName;
                $media->file = $rename;
                $media->extension = $extension;
                $media->size = $filesize;
                $media->mime = $mime;
                $media->save();

                return redirect()->back()->with('message', 'Berhasil, file telah di upload');
            }

            return redirect()->back()->with('message', 'Error, file tidak dapat di upload');
        }

        return redirect()->back()->with('message', 'Error, tidak ada file ditemukan');
    }



    public function destroy($id)
    {
        $media = Certificate::find($id);

        if ($media) {
            $file = public_path('uploads/' . $media->file);

            if (File::exists($file)) {
                File::delete($file);
            }

            $media->delete();

            return redirect()->back()->with('message', 'Berhasil, file berhasil dihapus');
        }

        return redirect()->back()->with('message', 'Error, tidak ada file ditemukan');
    }
}
