<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;
use Illuminate\Support\Facades\Auth;

class BoardsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('boards.index');
    }

    public function create(Request $request)
    {
        $posts = $request->all();
        $request->validate([
          'name' => 'required|max:255',
          'title' => 'required|max:30',
          'body' => 'required',
      ]);

        Board::insert(['user_id' => \Auth::id(), 'name' => $posts['name'], 'title' => $posts['title'], 'body' => $posts['body']]);

        return redirect()
        ->route('boards.index')
        ->with(['message' => '保存に成功しました', 'status' => 'info']);
    }
}
