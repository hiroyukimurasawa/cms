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
            'display_img'  => 'required|file|image|mimes:jpeg,jpg',
            'kinds_item'   => 'nullable',
            'items_amount' => 'nullable',
        ]);
    
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        //以下に登録処理を記述（Eloquentモデル)
            # データ登録処理の上に記述しておくこと
        // Eloquentモデル
        $displays = new Display;
        $displays->display_name = $request->display_name;
        $displays->display_img;
        $displays->kinds_item   = $request->kinds_item;
        $displays->items_amount = $request->items_amount;
        $displays->save();
        //ファイルアップロード
        $request->file('display_img')->storeAs('public', $displays->id.'.'.$request->display_img->extension());
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
                'display_img'  => 'required|file|image|mimes:jpg,jpeg',
                'kinds_item'   => 'nullable',
                'items_amount' => 'nullable',
        ]);
        //バリデーション:エラー
            if ($validator->fails()) {
                return redirect('/')
                    ->withInput()
                    ->withErrors($validator);
        }
        //データ更新
        $displays = display::find($request->id);
        $displays->display_name = $request->display_name;
        $displays->display_img;
        $displays->kinds_item   = $request->kinds_item;
        $displays->items_amount = $request->items_amount;
        $displays->touch();
        $displays->save();
        //ファイルアップロード
        $request->file('display_img')->storeAs('public', $displays->id.'.'.$request->display_img->extension());
        if($request->file('display_img')){
            $files = Storage::allfiles($displays->id);
            Storage::delete($files);
            $path=$request->file('display_img')->storePublicly($displays->id);
            $displays->display_img=asset('storage').'/'.$path;
        }
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