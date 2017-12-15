<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Support\Facades\Input;
class UsersController extends Controller
{
    /**
     * アプリケーションの全ユーザー表示
     *
     * @return Response
     */
    public function index()
    {
        $tasks = DB::table('tasks')->paginate(10);

        return view('users.index', ['tasks' => $tasks]);
    }
}