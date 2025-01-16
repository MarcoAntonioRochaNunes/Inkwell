<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


class HomeController extends Controller
{

    public function index()
    {


        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    }

    public function createPost(Request $request)
    {
        try{

            // dd(Auth::user()->id);

            Post::create([
                'title' => $request->titulo_home,
                'content'=> $request->capitulo_home,
                'user_id' => Auth::user()->id
            ]);

            // dd($request->all());
        }catch(Exception $e){
            return $e;
        }
    }
}
