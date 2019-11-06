<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hw extends Model
{
    public $primaryKey="sid";

    /**
     * 关联到模型的数据表 @var string
     */
    protected $table = 'hw';

    /**
     * 可以被批量赋值的属性. @var array
     */
    protected $fillable = ['sname','simg','sum','add_time'];
    

    /**
     * 表明模型是否应该被打上时间戳, @var bool
     */
    public $timestamps = false;
}
