<?php 
namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public static function index ()
    {
        return view('contents.users', [
            "title" => "Users",
            "users" => User::all(),
            "posts" => Post::all(),
        ]);
    }

    public static function edit ()
    {
        return view('contents.edit', [
            "title" => "Users",
            "users" => User::all(),
            "posts" => Post::all(),
        ]);
    }
}