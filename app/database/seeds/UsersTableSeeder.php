<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();

        $param = [
            'user_mail' => 'yamada@gmail.com',
            'user_pass' => 'tomo0408',
            'user_familyname' => '山田',
            'user_firstname' => '太郎',
            'user_kana_familyname' => 'ヤマダ',
            'user_kana_firstname' => 'タロウ',
            'user_sex' => '男性',
            'user_tel' => '09022223333',
            'user_address' => '東京都千代田区九段下1-1-1',
            'user_birthday_year' => '1990',
            'user_birthday_month' => '12',
            'user_birthday_day' => '12',
            'user_newsletter' => 'yes',
            'user_comment' => 'これはテストです。これはテストです。これはテストです。',
        ];
        DB::table('users')->insert($param);

        $param = [
            'user_mail' => 'sato@gmail.com',
            'user_pass' => 'tomo0408',
            'user_familyname' => '佐藤',
            'user_firstname' => '花子',
            'user_kana_familyname' => 'サトウ',
            'user_kana_firstname' => 'ハナコ',
            'user_sex' => '女性',
            'user_tel' => '09011112222',
            'user_address' => '東京都中野区中野1-1-1',
            'user_birthday_year' => '1990',
            'user_birthday_month' => '12',
            'user_birthday_day' => '12',
            'user_newsletter' => 'no',
            'user_comment' => 'これはテストです。これはテストです。これはテストです。',
        ];
        DB::table('users')->insert($param);

        $param = [
            'user_mail' => 'suzuki@gmail.com',
            'user_pass' => 'tomo0408',
            'user_familyname' => '鈴木',
            'user_firstname' => '一郎',
            'user_kana_familyname' => 'スズキ',
            'user_kana_firstname' => 'イチロウ',
            'user_sex' => '男性',
            'user_tel' => '09022223333',
            'user_address' => '東京都港区六本木1-1-1',
            'user_birthday_year' => '1990',
            'user_birthday_month' => '12',
            'user_birthday_day' => '12',
            'user_newsletter' => 'yes',
            'user_comment' => 'これはテストです。これはテストです。これはテストです。',
        ];
        DB::table('users')->insert($param);






    }
}
