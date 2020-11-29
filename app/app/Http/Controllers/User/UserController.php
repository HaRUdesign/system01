<?php

namespace App\Http\Controllers\User;
use Illuminate\Http\Request;

//追加
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller
{
    //ユーザー一覧
    public function index(Request $request){
        $items = User::all();
        return view('user.index',['user_data' =>$items]);
    }

    /////////////////////////////ユーザー登録 /////////////////////////////
    //ユーザー登録画面
     public function add(Request $request){
        return view('user.add');
    }

    //ユーザー登録のデータ取得
     public function create(CreateUserRequest $request){
        $input = $request->all();
        //セッションに書き込む
        $request->session()->put("form_input", $input);
        return redirect()->action("UserController@confirm");
    }

     public function confirm(Request $request){
        //セッションから値を取り出す
        $input = $request->session()->get("form_input");
        //セッションに値が無い時はフォームに戻る
		if(!$input){
			return redirect()->action("UserController@add");
		}
        return view("user.confirm",["input" => $input]);
    }

    function send(Request $request){
		//セッションから値を取り出す
        $input = $request->session()->get("form_input");
        //戻るボタンが押された時
        if($request->has("back")){
            return redirect()->action("UserController@add")->withInput($input);
        }
		//セッションに値が無い時はフォームに戻る
		if(!$input){
			return redirect()->action("UserController@add");
		}
        //ここでメールを送信するなどを行う

        //DBへ保存
        $param = [
            'user_familyname' =>$input['user_familyname'],
            'user_firstname' =>$input['user_firstname'],
            'user_kana_familyname' =>$input['user_kana_familyname'],
            'user_kana_firstname' =>$input['user_kana_firstname'],
            'user_sex' =>$input['user_sex'],
            'user_mail' =>$input['user_mail'],
            'user_pass' =>$input['user_pass'],
            'user_tel' =>$input['user_tel'],
            'user_address' =>$input['user_address'],
            'user_birthday_year' =>$input['user_birthday_year'],
            'user_birthday_month' =>$input['user_birthday_month'],
            'user_birthday_day' =>$input['user_birthday_day'],
            'user_newsletter' =>$input['user_newsletter'],
            'user_comment' =>$input['user_comment'],
        ];
        DB::insert('insert into users (
            user_familyname,
            user_firstname,
            user_kana_familyname,
            user_kana_firstname,
            user_sex,
            user_mail,
            user_pass,
            user_tel,
            user_address,
            user_birthday_year,
            user_birthday_month,
            user_birthday_day,
            user_newsletter,
            user_comment
            ) values (
                :user_familyname,
                :user_firstname,
                :user_kana_familyname,
                :user_kana_firstname,
                :user_sex,
                :user_mail,
                :user_pass,
                :user_tel,
                :user_address,
                :user_birthday_year,
                :user_birthday_month,
                :user_birthday_day,
                :user_newsletter,
                :user_comment
                )',$param);
		//セッションを空にする
		$request->session()->forget("form_input");
		return redirect()->action("UserController@complete");
    }
    function complete(){
		return view("user.complete");
    }

    //////////////////////////////ユーザーログイン//////////////////////////////
     function login(Request $request){
		return view("user.login");
    }

    public function postSignin(Request $request){

        if(Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
            ])){

        return redirect()->route('user.profile');
    }
    return redirect()->back();

    }











}
