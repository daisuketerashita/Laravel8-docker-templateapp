<?php

namespace App\Http\Controllers;

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
}
