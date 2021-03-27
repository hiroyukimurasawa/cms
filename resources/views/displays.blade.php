<!-- resources/views/displays.blade.php -->
@extends('layouts.app')
@section('content')
    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            棚の名前
        </div>
        
        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->
<div class="display_wrapper">  
        <!-- 棚登録フォーム -->
        <form enctype="multipart/form-data" action="{{ url('displays') }}"method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- 棚のタイトル -->
            <div class="form-group">
                <div class="col-sm-6">
                    <input type="text" name="display_name" class="form-control">
                </div>
            </div>
            <!-- 商品のタイトル -->

            <!-- 棚 登録ボタン -->
            <div class="form-group">
            <!--file 追加-->
        	<div class="col-sm-6">
                <label>画像</label>
                <input type="file" name="display_img">
            </div>
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        登録
                    </button>
                </div>
            </div>
        </form>
<table>
	<tbody>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td>014</td>
			<td>013</td>
			<td>012</td>
			<td>011</td>
			<td>010</td>
			<td>009</td>
			<td>008</td>
			<td>007</td>
			<td>006</td>
			<td>005</td>
			<td>004</td>
			<td>003</td>
			<td><button id="btn2" onclick="btn2Click();">002</button></td>
			<td><button id="btn1" onclick="btn1Click();">001</button></td>
			<td></td>
		</tr>
		<tr>
			<td>060</td>
			<td rowspan="10"></td>
			<td>898</td>
			<td colspan="4"></td>
			<td>894</td>
			<td colspan="2" rowspan="10"></td>
			<td>890</td>
			<td colspan="4"></td>
			<td>888</td>
			<td rowspan="11"></td>
			<td>080</td>
		</tr>
		<tr>
			<td>061</td>
			<td colspan="3" rowspan="3">035</td>
			<td>032</td>
			<td>031</td>
			<td rowspan="3">030</td>
			<td rowspan="3">026</td>
			<td>025</td>
			<td>024</td>
			<td>023</td>
			<td>021</td>
			<td rowspan="3">020</td>
			<td>081</td>
		</tr>
		<tr>
			<td>062</td>
			<td colspan="2"></td>
			<td colspan="4"></td>
			<td>082</td>
		</tr>
		<tr>
			<td>063</td>
			<td>033</td>
			<td>034</td>
			<td>027</td>
			<td>028</td>
			<td>029</td>
			<td>022</td>
			<td>083</td>
		</tr>
		<tr>
			<td>064</td>
			<td>899</td>
			<td colspan="4" rowspan="2"></td>
			<td>895</td>
			<td>891</td>
			<td colspan="5" rowspan="2"></td>
			<td>084</td>
		</tr>
		<tr>
			<td>065</td>
			<td>900</td>
			<td>896</td>
			<td>892</td>
			<td>085</td>
		</tr>
		<tr>
			<td></td>
			<td rowspan="3">055</td>
			<td>054</td>
			<td>053</td>
			<td>052</td>
			<td>051</td>
			<td rowspan="3">050</td>
			<td rowspan="3">045</td>
			<td>044</td>
			<td>043</td>
			<td>042</td>
			<td>041</td>
			<td rowspan="3">040</td>
			<td>086</td>
		</tr>
		<tr>
			<td></td>
			<td colspan="4"></td>
			<td colspan="4"></td>
			<td>087</td>
		</tr>
		<tr>
			<td></td>
			<td>056</td>
			<td>057</td>
			<td>058</td>
			<td>059</td>
			<td>046</td>
			<td>047</td>
			<td>048</td>
			<td>049</td>
			<td>088</td>
		</tr>
		<tr>
			<td></td>
			<td>901</td>
			<td colspan="4"></td>
			<td>897</td>
			<td>893</td>
			<td colspan="4"></td>
			<td>889</td>
			<td>089</td>
		</tr>
		<tr>
			<td></td>
			<td>018</td>
			<td>017</td>
			<td>016</td>
			<td>015</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>072</td>
			<td>071</td>
			<td>070</td>
			<td>090</td>
		</tr>
	</tbody>
</table>
</div>
     <!-- 現在の棚 -->
    @if (count($displays) > 0)
        <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>棚一覧</th>
                        <th>&nbsp;</th>
                    </thead>
                    <!-- テーブル本体 -->

                    <tbody>
                        @foreach ($displays as $key=>$display)
                        
                            <tr>
                                <!-- 棚タイトル -->
                                <td class="table-text">
                                <div><img src="upload/{{$display->display_img}}" width="100"></div>
                                    <div>{{ $display->display_name }}</div>
                                </td>
				                <!-- 商品タイトル -->

                                <!-- 棚: 更新ボタン -->
                                <td>
                                
                                    <form action="{{ url('displaysedit/'.$display->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <button type="submit" id="{{$key+1}}" class="btn btn-primary">
                                            <i class="glyphicon glyphicon-pencil">{{$key+1}}</i> 更新
                                        </button>
                                    </form>
                                </td>
                                <!-- 棚: 削除ボタン -->
                                <td>
                                <form action="{{ url('display/'.$display->id) }}" method="POST">
                                     {{ csrf_field() }}
                                     {{ method_field('delete') }}
                                    <button type="submit" class="btn btn-danger">
                                        削除
                                    </button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    </div>

    <!-- display: 既に登録されてる棚のリスト -->

@endsection