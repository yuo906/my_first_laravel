<?php

namespace App\Models;

//創資料用的
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    /**
     * The table associated with the model.
     * 指定哪一張表
     * @var string
     */
    protected $table = 'news';

    /**
     * The primary key associated with the table.
     * 主鍵是哪個欄位
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     * 白名單
     * @var array
     */
    protected $fillable = ['img_path', 'title', 'content'];
}
