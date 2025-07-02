<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//追記
use App\Todo;

class TodoController extends Controller
{
    // <ここから>
    public function index()
    {
        // 追加
        $todo = new Todo();
        $todos = $todo->all();
        //dd($todos);　＜var_dumpみたいな感じ
        return view('todo.index',['todos' => $todos]); //[blade内での変数名 => 代入したい値] 修正
        //dd('Hello World!');
    }
    // <ここまで>
}
