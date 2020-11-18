<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $val1 = DB::raw('select * from users');  //类型是Expression
        $val2 = DB::table('users');              //类型是Builder
        $val3 = DB::table(DB::raw('select * from users'));   //Builder
        $val4 = DB::table('users')->limit(10);   //类型是Builder         

        $val5 = DB::table('users')->limit(10)->get()->all();   //类型是数组，数组中每个元素是对象 
        $val6 = DB::select('select * from users');  //类型是数组，数组中每个元素是对象 
        $val7 = DB::select(DB::raw('select * from users'));  //类型是数组，数组中每个元素是对象
        $val8 = DB::table('users')->limit(5)->get(); //类型是Collection  位于vendor/laravel/framework/src/Illuminate/Support/Collection.php
        //结构如下
        // Collection {#1238 ▼
        //     #items: array:5 [▶]
        //   }
        $val9 = DB::table('users')->limit(10)->pluck('email'); //类型是Collection 返回指定名称为email的字段列
        /**
         Collection类的常用方法有
         all() 返回所有集合数据，返回类型是数组，数组的值为对象类型
         mode('name') 类似于array_column()返回输入数组中某个单一列的值,是个一维数组

         contains('name','=','admin') 返回bool,检测集合中是否包含name=admin的项目 
         
         map() 遍历
         $val8->map(function($value,$key){
            $value->email=$value->email.'(email)';
            return $value;
         });

         each() 和map()遍历类似
         $val8->each(function($value,$key){
            $value->email=$value->email.'(email)';
        });

         pluck(键名称)
         $val8->pluck('email')　返回结构如下，其实功能和mode类似，返回的结构不一样罢了
         Collection {#1232 ▼
            #items: array:5 [▼
                0 => "JuVmgh91qQ@gmail.com"
                1 => "HiK5xzyxes@gmail.com"
                2 => "SxJ5CxBdcm@gmail.com"
                3 => "BddGZt67vj@gmail.com"
                4 => "s5SukKmflg@gmail.com"
            ]
            }
         
         forget(键名称) 删掉指定键名的项
         val4->forget('0')->all()　　//这个集合是０开头的，现在键为０的删掉了　返回
         array:4 [▼
            1 => {#1341 ▶}
            2 => {#1342 ▶}
            3 => {#1343 ▶}
            4 => {#1344 ▶}
        ]
                    
         has(键名称)　　是否含有指定的键　　

         chunck(数字)　　将集合分成给定大小的更小的集合
         $val8->chunk(2) 返回
         Collection {#1460 ▼
            #items: array:3 [▼
                0 => Collection {#1232 ▼
                #items: array:2 [▶]
                }
                1 => Collection {#1462 ▼
                #items: array:2 [▶]
                }
                2 => Collection {#1461 ▼
                #items: array:1 [▶]
                }
            ]
            }
         
         filter() 按条件过滤  
         $val8->filter(function($value,$key){
            if($value->id>4)
            return true;
        });  返回如下
         Collection {#1462 ▼
            #items: array:1 [▼
                4 => {#1344 ▼
                +"id": 5
                +"name": "VcwPuPZPXD"
                +"email": "s5SukKmflg@gmail.com"
                +"password": "$2y$10$lGGW/NWTSH11V12n6BTTNuos2gzri.Cek3QZsHaq6qEoQ.94D9Fvq"
                +"remember_token": null
                +"created_at": null
                +"updated_at": null
                }
            ]

         */

        $val10 = DB::table('users')->limit(20)->paginate(10);   //类型是LengthAwarePaginator 位于vendor/laravel/framework/src/Illuminate/Pagination/LengthAwarePaginator
        //结构如下
        // LengthAwarePaginator {#1463 ▼
        //     #total: 100
        //     #lastPage: 10
        //     #items: Collection {#1448 ▶}
        //     #perPage: 10
        //     #currentPage: 1
        //     #path: "http://local.laravel5.com/test"
        //     #query: []
        //     #fragment: null
        //     #pageName: "page"
        //   }
        /**
         LengthAwarePaginator类的常用方法有total()   links()   toArray()
         */
        for ($i = 1; $i <= 10; $i++) {
            $val_temp = 'val' . $i;
            echo $val_temp . PHP_EOL;
            \call_user_func('dump', $$val_temp);
        }
    }
}
