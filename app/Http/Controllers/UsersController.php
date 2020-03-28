<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Auth;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $user = User::find($id);
        $tasks = $user->tasks()->paginate(5);
        
        $data = [
                'user' => $user,
                'tasks' => $tasks,
        ];
        
        $data += $this->counts($user);
        
        return view('users.show', $data);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
