<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\TodoList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class TodoController extends Controller
{
    public function index()
    {
        $datas = TodoList::where('status', '1')->orderBy('updated_at', 'desc')->get();
        // $dones = TodoList::where('status', '0')->orderBy('updated_at', 'asc')->get();
        // dd($data->judul);
        return view('pages.todo.index', compact('datas'));
    }

    public function create()
    {
        return view('pages.todo.create');
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $data = $request->all();
        $data['users_id'] = $user->id;
        // dd($data);
        TodoList::create($data);
        return redirect()->route('todolist.index');
    }

    public function update(Request $request, $id)
    {
        $todo = TodoList::findOrFail($id);
        $data = $request->all();
        $todo['users_id'] = 1;
        $todo->update($data);

        return redirect()->route('todolist.index');
    }

    public function updateId(Request $request, $id)
    {
        $todo = TodoList::findOrFail($id);
        $todo->update(['status' => 0]);

        return redirect()->back();
    }

    public function restoreStatus(Request $request, $id)
    {
        $todo = TodoList::findOrFail($id);
        $status = $request->input('status', 0); // Default status

        if ($status == 0) {
            $todo->update(['status' => 1]);
        }

        return redirect()->route('todolist.history');
    }

    public function destroy(Request $request, $id)
    {
        $todo = TodoList::findOrFail($id);
        $todo->delete();

        return redirect()->route('todolist.index');
    }

    public function show($id)
    {
        $todo = TodoList::findOrFail($id);

        return view('pages.todo.show', compact('todo'));
    }

    public function history()
    {
        $dones = TodoList::where('status', '0')->orderBy('updated_at', 'asc')->get();
        // dd($data->judul);
        return view('pages.todo.history', compact('dones'));
    }
}
