<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//追加
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Http\Requests\CreateAdminRequest;

class AdminController extends Controller
{
     //admin登録画面
     public function add(Request $request){

        return view('admin.add');
    }

    //admin登録のデータ取得
     public function create(CreateAdminRequest $request){

        $input = $request->all();

        //セッションに書き込む
        $request->session()->put("form_input", $input);

        return redirect()->action("AdminController@confirm");
     }

     //admin登録のデータを表示
      public function confirm(Request $request){

        //セッションから値を取り出す
        $input = $request->session()->get("form_input");

        //セッションに値が無い時はフォームに戻る
		if(!$input){
			return redirect()->action("AdminController@add");
		}
        return view("admin.confirm",["input" => $input]);
    }

    //admin登録のデータを保存
    function send(Request $request){

		//セッションから値を取り出す
        $input = $request->session()->get("form_input");

        //戻るボタンが押された時
        if($request->has("back")){
            return redirect()->action("AdminController@add")->withInput($input);
        }

		//セッションに値が無い時はフォームに戻る
		if(!$input){
			return redirect()->action("AdminController@add");
        }

        //ここでメールを送信するなどを行う


        //DBへ保存
        $param = [
            'admin_familyname' =>$input['admin_familyname'],
            'admin_firstname' =>$input['admin_firstname'],
            'admin_kana_familyname' =>$input['admin_kana_familyname'],
            'admin_kana_firstname' =>$input['admin_kana_firstname'],
            'admin_mail' =>$input['admin_mail'],
            'admin_pass' =>$input['admin_pass'],
            'admin_birthday_year' =>$input['admin_birthday_year'],
            'admin_birthday_month' =>$input['admin_birthday_month'],
            'admin_birthday_day' =>$input['admin_birthday_day'],
        ];

        DB::insert('insert into admins (
            admin_familyname,
            admin_firstname,
            admin_kana_familyname,
            admin_kana_firstname,
            admin_mail,
            admin_pass,
            admin_birthday_year,
            admin_birthday_month,
            admin_birthday_day
            ) values (
                :admin_familyname,
                :admin_firstname,
                :admin_kana_familyname,
                :admin_kana_firstname,
                :admin_mail,
                :admin_pass,
                :admin_birthday_year,
                :admin_birthday_month,
                :admin_birthday_day
                )',$param);

		//セッションを空にする
		$request->session()->forget("form_input");

		return redirect()->action("AdminController@complete");
    }

    function complete(){
		return view("admin.complete");
	}

}
