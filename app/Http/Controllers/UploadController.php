<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use App\Http\Requests\StoreUploadRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateUploadRequest;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $songs = Upload::all();
        return view('audio_upload.index', compact('songs'));
    }

    public function create(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('audio_upload.upload');
    }


    public function store(StoreUploadRequest $request): \Illuminate\Http\RedirectResponse
    {
        $validatedData = $request->validated();
        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = Storage::putFileAs('public/uploads', $file, $fileName);

        $upload = new Upload();
        $upload->title = $validatedData['title'];
        $upload->description = $validatedData['description'];
        $upload->file = str_replace('public/', '', $filePath); // Adjust the file path
        $upload->save();

        return redirect()->route('upload.index')->with('success', 'File uploaded successfully.');
    }
}
