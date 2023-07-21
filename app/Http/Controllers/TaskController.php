<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Task;
use Illuminate\Http\Request;
use App\DataTables\TaskDatatable;
use App\Http\Response\ApiResponse;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Interfaces\TaskServiceInterface;

class TaskController extends Controller
{
    protected $taskService;

    public function __construct(TaskServiceInterface $taskService)
    {
        $this->taskService = $taskService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(TaskDatatable $dataTable)
    {
        return $dataTable->render('task.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('task.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        $task = $this->taskService->store($request->validated());
        return back()->with('success', 'Task created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $users = User::all();
        return view('task.edit', compact('task', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task = $this->taskService->update($request->validated(), $task);
        return back()->with('success', 'Task updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task = $this->taskService->delete($task);
        return response()->json('Task deleted successfully!');
    }

    public function statusActive($id)
    {
        $task = Task::find($id);
        if ($task->status == 1) {
            $task->status = 2;
        }
        $task->save();
        return back()->with('success', 'Status change successfully!');
    }

    public function statusInactive($id)
    {
        $task = Task::find($id);
        if ($task->status == 2) {
            $task->status = 1;
        }
        $task->save();
        return back()->with('success', 'Status change successfully!');
    }
}
