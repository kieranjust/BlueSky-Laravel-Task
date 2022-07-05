<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use App\Http\Resources\TodosResource;
use App\Models\Todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Todo::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTodoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTodoRequest $request)
    {
        request()->validate([
            'name' => 'required'
        ]);
    
        return Todo::create([
            'name' => request('name'),
            'description' => request('description'),
            'due_date' => request('due_date'),
            'is_complete' => request('is_complete'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {

        // $todo = Todo::find($id);    
        // debug_to_console($todo);
        $todo_id_exist = $todo::where('id', $todo->id)->first();
        if(!$todo) {
            return response()->json(
                [
                    'success' => false,
                    'error' => 'ID not found',
                ]);
        }

        return [
            'todo' => [
                'id' => $todo->id,
                'name' => $todo->name,
                'description' => $todo->description,
                'due_date' => $todo->due_date,
                'is_complete' => $todo->is_complete,
            ],
            'success' => true,
            'error' => null,
        ];   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTodoRequest  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTodoRequest $request, Todo $todo)
    {
        request()->validate([
            'name' => 'required'
        ]);

        $success = $todo->update([
            'name' => request('name'),
            'description' => request('description'),
            'due_date' => request('due_date'),
            'is_complete' => request('is_complete'),
        ]);

        return [
            'success' => $success
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        $success = $todo->delete();

        return [
            'success' => $success
        ];
    }
}
