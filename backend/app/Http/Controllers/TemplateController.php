<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTemplate;
use Illuminate\Http\Request;
use App\Models\Template;
use Illuminate\Support\Facades\Auth;

class TemplateController extends Controller
{
    
    //一覧ページ表示(削除後)
    public function index(){
        //ユーザーに紐付いた定型文を取得
        $templates = Auth::user()->templates()->get();
    
        return view('index',[
            'templates' => $templates, 
        ]);
    }

    //定型文制作ページ表示
    public function create(){
        return view('create');
    }

    //定型文登録処理
    public function store(CreateTemplate $request){
        $template = new Template();

        //代入
        $template->user_id = \Auth::id();
        $template->title = $request->title;
        $template->content = $request->content;

        //ユーザーに紐付けて保存
        Auth::user()->templates()->save($template);

        //リダイレクト
        return redirect()->route('index');
    }
}
