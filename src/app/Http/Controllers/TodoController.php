<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    // <ここから>
    public function index()
    {
        // 追加
        $todo = new Todo();
        $todos = $todo->all();
        //dd($todos);//var_dumpみたいな感じ
        return view('todo.index', ['todos' => $todos]); //[blade内での変数名 => 代入したい値] 修正
        //dd('Hello World!');
    }
    // <ここまで>

    public function create()
    {
        // TODO: 第1引数を指定
        return view('todo.create'); // 追記
        //dd('新規作成画面のルート実行！');
    }

    public function store(Request $request) //左にクラス名書くと右のインスタンス化したやつ入れれる
    {
        $inputs = $request->all(); // 変更
        //dd($inputs); // 追記
        //$content = $request->input('content'); // 追記
        //$title    = $request->input('title');
        //$location = $request->input('location');
        //$deadline = $request->input('deadline');
        //$category = $request->input('category');


        // 1. todosテーブルの1レコードを表すTodoクラスをインスタンス化
        $todo = new Todo();
        // 2. Todoインスタンスのカラム名のプロパティに保存したい値を代入
        //$todo->content = $inputs['content']; // 変更
        $todo->fill($inputs); // 変更
        //$todo->content = $content;
        //$todo->title    = $title;
        //$todo->location = $location;
        //$todo->deadline = $deadline;
        //$todo->category = $category;
        // 3. Todoインスタンスの`->save()`を実行してオブジェクトの状態をDBに保存するINSERT文を実行
        $todo->save();

        return redirect()->route('todo.index'); // 追記

        //dd($content); // 追記dd('新規作成のルート実行！');
    }
}
