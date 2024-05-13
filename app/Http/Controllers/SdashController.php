<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSdashRequest;
use App\Http\Requests\UpdateSdashRequest;
use App\Models\Comment;
use App\Models\Score;
use App\Models\Sdash;
use App\Models\Task;
use App\Models\Upload;

class SdashController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $tasks = Task::all();
        $score = Score::all();
        $comments = Comment::all();
        $uploads = Upload::all();


        return view('sdash.index', compact('tasks', 'score', 'comments', 'uploads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSdashRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sdash $sdash)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sdash $sdash)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSdashRequest $request, Sdash $sdash)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sdash $sdash)
    {
        //
    }
}
