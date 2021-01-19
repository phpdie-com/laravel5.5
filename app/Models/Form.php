<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'form';
//测试属性转换，数据库里存的is_admin字段是数字类型的，读取的时候转成了bool类型
//    protected $casts = [
//        'is_admin' => 'boolean',
//    ];

    //数据库里存的data字段是json，读取的时候自动转为数组了
    protected $casts = [
        'data' => 'array',
    ];
    //修改器使用例子
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
    }
    //访问器使用例子 数据库里存的status字段是0和1 读取的时候自动转为数组里对应键的值了
    //0变成了'禁用状态',1变成了'启用状态'
    public function getStatusAttribute($value)
    {
        $status=['禁用状态','启用状态'];
        return $status[$value];
    }
    public static function showMsg(){
        echo 'Hello Everyone!';
    }
}
