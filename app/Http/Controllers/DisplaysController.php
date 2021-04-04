<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Display; //モデルを使えるようにする
use Storage;
use Aws\S3\S3Client;
use Validator;   //バリデーションを使えるようにする
use Auth;        //認証モデルを使用する

class DisplaysController extends Controller
{
    //表示
    public function index(){
        $displays = Display::orderBy('created_at', 'asc')->get();
            return view('displays', ['displays' => $displays]);
        //return view('displays',compact('displays')); //も同じ意味
    }
    
    //登録
    public function store(Request $request){
        //バリデーション
        $validator = Validator::make($request->all(), [
            'display_name' => 'required|max:255',
            'display_img'  => 'file|image|mimes:jpeg,png,jpg',
        ]);
    
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        //以下に登録処理を記述（Eloquentモデル)
            # データ登録処理の上に記述しておくこと
    //ファイルアップロード
    $file = $request->file('display_img'); //file取得
    if( !empty($file) ){                //fileが空かチェック
        $filename = $file->getClientOriginalName();   //ファイル名を取得
        $move = $file->move('./upload/',$filename);  //ファイルを移動：パスが“./upload/”の場合もあるCloud9
    }else{
        $filename = "";
    }  
        // Eloquentモデル
        $displays = new Display;
        $displays->display_name = $request->display_name;
        $displays->display_img  = $filename;
        $displays->save(); 
        // ”msg_success”に名前を変える
        session()->flash('msg_success', '登録が完了しました');
        return redirect('/');
    }
    
    //更新
    public function update(Request $request){
        //バリデーション
            $validator = Validator::make($request->all(), [
                'id' => 'required',
                'display_name' => 'required|min:3|max:255',
                'display_img'  => 'file|image|mimes:jpeg,png,jpg',    
        ]);
        //バリデーション:エラー
            if ($validator->fails()) {
                return redirect('/')
                    ->withInput()
                    ->withErrors($validator);
        }
    //ファイルアップロード
    $file = $request->file('display_img'); //file取得
    if( !empty($file) ){                   //fileが空かチェック
        $filename = $file->getClientOriginalName(); //ファイル名を取得
        $move = $file->move('./upload/',$filename); //ファイルを移動：パスが“./upload/”の場合もあるCloud9
    }else{
        $filename = "";
    } 
        //データ更新
        $displays = display::find($request->id);
        $displays->display_name = $request->display_name;
        $displays->display_img  = $filename;
        $displays->save();
    // ”msg_success”に名前を変える
    session()->flash('msg_success', '更新が完了しました');
    return redirect('/');
    }

    //更新画面
    public function edit(Display $displays){
        //{displays}id 値を取得 => Display $displays id 値の1レコード取得
        return view('displaysedit', ['display' => $displays]);
    }
    
    //削除処理
    public function destroy(Display $display){
        $display->delete();
        return redirect('/');
    }
}
