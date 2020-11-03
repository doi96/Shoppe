<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
        	['id'=>1,'name'=>'admin','type'=>'admin','mobile'=>'0357173786','email'=>'thanhdoi.it96@hotmail.com','password'=>'$2y$10$UYB.p9Je32sqJunhtOKacu6AacPEtNQlHjIhhC4VZ9w7kcqbV.LB.','image'=>'','status'=>1
        	],
        ];
        DB::table('admins')->insert($adminRecords);
        // foreach ($adminRecords as $key => $record) {
        // 	\App\Admin::create($record);
        // }
    }
}
