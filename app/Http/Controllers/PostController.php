<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;//利用するモデルをインポート

class PostController extends Controller//クラスの継承（Controller→PostController）
{
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('posts.index')->with(['posts' => $post->get()]);  
        //取得したデータ$post->get()を'posts'という変数名でViewに渡す
    }
}