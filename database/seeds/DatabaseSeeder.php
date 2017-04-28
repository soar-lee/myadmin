<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker\Factory::create('zh_cn');

        DB::delete('delete from menu');
        DB::insert('insert into 
                 menu(`name`, pid,link,icon)         
                 values (?, ?,?,?)',
            ["建筑管理",
                0
                ,"http://wwwbaiducom"
                ,""]
        );
        DB::insert('insert into 
                 menu(`name`, pid,link,icon)         
                 values (?, ?,?,?)',
            ["资讯管理",
                0
                ,"http://wwwbaiducom"
                ,""]
        );
        DB::insert('insert into 
                 menu(`name`, pid,link,icon)         
                 values (?, ?,?,?)',
            ["建筑列表",
                1
                ,"http://wwwbaiducom"
                ,""]
        );
        DB::insert('insert into 
                 menu(`name`, pid,link,icon)         
                 values (?, ?,?,?)',
            ["设计分类",
                1
                ,"http://wwwbaiducom"
                ,""]
        );
        DB::insert('insert into 
                 menu(`name`, pid,link,icon)         
                 values (?, ?,?,?)',
            ["资讯列表",
                2
                ,"http://wwwbaiducom"
                ,""]
        );

//        DB::delete('delete from users');
//        for ($i =0 ;$i<100; $i++){
//            DB::insert('insert into
//                 users(`name`, username,password,created_at,updated_at)
//                 values (?, ?,?,?,?)',
//                [$faker->name,
//                    $faker->userName
//                    ,$faker->password,
//                    \Carbon\Carbon::now(),\Carbon\Carbon::now()]
//            );
//        }


        DB::delete('delete from news');
        for ($i =0 ;$i<100; $i++) {
            DB::insert('insert into 
                 news(title, content,`type`,status,page_view
                 ,created_at,updated_at)         
                 values (?, ?,?,?,?,?,?)',
                [  $faker->realText(80)  ,
                      $faker->realText(8200)  ,
                    $faker->numberBetween(1, 10),
                    $faker->numberBetween(1, 3),
                    $faker->numberBetween(1, 10000),
                    \Carbon\Carbon::now(), \Carbon\Carbon::now()]
            );
        }
    }
}
