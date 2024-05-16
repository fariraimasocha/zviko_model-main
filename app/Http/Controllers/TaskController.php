<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use ProtoneMedia\Splade\Facades\Toast;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view('task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        $validated = $request->validated();

        Task::create([
            'name'=> $validated['name'],
            'one' => $validated['one'],
            'two' => $validated['two'],
            'three' => $validated['three'],
            'four' => $validated['four'],
            'five' => $validated['five'],
        ]);

        return redirect()->route('link.index');
    }

    public function edit(Task $task)
    {
        return view('task.edit', compact('task'));
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
        $updated = $request->validated();

        $task->update($updated);

        Toast::title('Success!')
            ->message('Task Updated Successfully!');
        return redirect()->route('link.index');
    }
}
