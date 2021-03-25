<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Display;
use Illuminate\Http\Request;

/***棚のダッシュボード表示(displays.blade.php)*/
Route::get('/', function () {
    $displays = Display::orderBy('created_at', 'asc')->get();
    return view('displays', [
        'displays' => $displays
    ]);
    //return view('displays',compact('displays')); //も同じ意味
});

/*** 新「棚」を追加 */
Route::post('/displays', function (Request $request) {

    //バリデーション
    $validator = Validator::make($request->all(), [
        'display_name' => 'required|max:255',
        
    ]);

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    //以下に登録処理を記述（Eloquentモデル）
    // Eloquentモデル
    $displays = new Display;
    $displays->display_name = $request->display_name;
    
    $displays->save(); 
    return redirect('/');
});

//更新画面
Route::post('/displaysedit/{displays}', function(Display $displays) {
    //{displays}id 値を取得 => Display $displays id 値の1レコード取得
    return view('displaysedit', ['display' => $displays]);
});

//更新処理
Route::post('/displays/update', function(Request $request){
    //バリデーション
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'display_name' => 'required|min:3|max:255',

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

    $displays->save();
    return redirect('/');
});
/*** 棚を削除 */
Route::delete('/display/{display}', function (Display $display) {
    $display->delete();     //追加
    return redirect('/');   //追加
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
