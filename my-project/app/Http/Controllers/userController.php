<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index(Request $request)
    {
        $user = $this->model
            ->getUsers(
                search: $request->search ?? ''
            );
            return view('users.index', compact('users'));
    }
}
