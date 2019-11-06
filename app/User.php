<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $primaryKey="uid";

    /**
     * 关联到模型的数据表 @var string
     */
    protected $table = 'user';

    /**
     * 可以被批量赋值的属性. @var array
     */
    protected $fillable = ['uname','upwd','ushod','uku'];
    

    /**
     * 表明模型是否应该被打上时间戳, @var bool
     */
    public $timestamps = false;
}
