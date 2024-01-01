<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function getByLimit(int $limit_count = 2)//最大2件まで表示
    {
    // updated_atで降順に並べたあと、limitで件数制限をかける
    //thisという自身のインスタンスを利用することで、Modelクラスの各メソッド（orderby/limit/get）にアクセス
    //orderBy(参照する項目,昇順or降順)
    return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    
    public function getPaginateByLimit(int $limit_count = 1)//1件ごとにペジネート
    {
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}