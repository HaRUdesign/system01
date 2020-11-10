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
        //
        DB::table('admins')->delete();

        $param = [
            'admin_mail' => 'yamada@gmail.com',
            'admin_pass' => 'tomo0408',
            'admin_familyname' => '山田',
            'admin_firstname' => '太郎',
            'admin_kana_familyname' => 'ヤマダ',
            'admin_kana_firstname' => 'タロウ',
            'admin_birthday_year' => '1990',
            'admin_birthday_month' => '12',
            'admin_birthday_day' => '12',
        ];
        DB::table('admins')->insert($param);
    }
}
