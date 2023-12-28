<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;//利用するモデル

class PostController extends Controller//クラスの継承（Controller→PostController）
{
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return $post->get();//$postの中身を戻り値にする。
    }
}