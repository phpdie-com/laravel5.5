<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
class FormController extends Controller
{
    public function index()
    {
        $model = new Form();
        $row = $model->find(1)->toArray();
        echo '更新前';
        dump($row);

        $row = $model::find(1);
        $row->name = 'susan';
        $row->save();//存到数据库里变成了大写的SUSAN了
        //如果是用$model->where('id',1)->update(['name'=>'abc']);则达不到修改器的效果
        $data = $model::find(1)->toArray();//find方法用->或者::都一样
        echo '更新后';
        dump($data);
    }
}
/*结果如下
        更新前
array:7 [▼
  "id" => 1
  "name" => "abc"
  "is_admin" => 0
  "data" => array:2 [▼
    "zhangsan" => "张三"
    "lisi" => "李四"
  ]
  "status" => "禁用状态"
  "created_at" => "2020-11-27 22:17:00"
  "updated_at" => "2020-11-27 14:17:00"
]
更新后
array:7 [▼
  "id" => 1
  "name" => "SUSAN"
  "is_admin" => 0
  "data" => array:2 [▼
    "zhangsan" => "张三"
    "lisi" => "李四"
  ]
  "status" => "禁用状态"
  "created_at" => "2020-11-27 22:19:51"
  "updated_at" => "2020-11-27 14:19:51"
]
*/
