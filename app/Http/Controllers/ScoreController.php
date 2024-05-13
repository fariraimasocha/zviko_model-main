<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreScoreRequest;
use App\Http\Requests\UpdateScoreRequest;
use App\Models\Score;
use ProtoneMedia\Splade\Facades\Toast;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scores = Score::all();

        return view('scores.index', compact('scores'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('scores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScoreRequest $request)
    {
        Score::create($request->validated());

        Toast::success('Score created successfully!');

        return redirect()->route('score.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Score $score)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Score $score)
    {
        return view('scores.edit', compact('score'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScoreRequest $request, Score $score)
    {
        $score->update($request->validated());

        Toast::success('Score updated successfully!');

        return redirect()->route('score.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Score $score)
    {
        $score->delete();

        Toast::success('Score deleted successfully!');

        return redirect()->route('score.index');
    }
}
