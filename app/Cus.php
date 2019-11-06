<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cus extends Model
{
    public $primaryKey="sid";

    /**
     * 关联到模型的数据表 @var string
     */
    protected $table = 'cus';

    /**
     * 可以被批量赋值的属性. @var array
     */
    protected $fillable = ['sreg','scha','sname','ser','snames','stel','sfax','slog','semail','shod','spos','site','scust','scul','sales','busin','bush','busz','sdesc','ses'];
    

    /**
     * 表明模型是否应该被打上时间戳, @var bool
     */
    public $timestamps = false;
}
