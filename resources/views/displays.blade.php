<!-- resources/views/displays.blade.php -->
@extends('layouts.app')
@section('content')
<script src="{{ asset('js/display.js') }}"></script>
    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            棚の名前
        </div>
        
        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->
<div class="display_wrapper">
	@can('webmaster')
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
    @endcan
<div class="container">
	<div class="table-responsive">
		<table class=”table”>
		<tbody>
		<tr>
			<td><button id="dsp46" class="dspbtn btn btn-link">###</button></td>
			<td><button id="dsp16" class="dspbtn btn btn-link">016</button></td>
			<td><button id="dsp15" class="dspbtn btn btn-link">015</button></td>
			<td><button id="dsp14" class="dspbtn btn btn-link">014</button></td>
			<td><button id="dsp13" class="dspbtn btn btn-link">013</button></td>
			<td><button id="dsp12" class="dspbtn btn btn-link">012</button></td>
			<td><button id="dsp11" class="dspbtn btn btn-link">011</button></td>
			<td><button id="dsp10" class="dspbtn btn btn-link">010</button></td>
			<td><button id="dsp9" class="dspbtn btn btn-link">009</button></td>
			<td><button id="dsp8" class="dspbtn btn btn-link">008</button></td>
			<td><button id="dsp7" class="dspbtn btn btn-link">007</button></td>
			<td><button id="dsp6" class="dspbtn btn btn-link">006</button></td>
			<td><button id="dsp5" class="dspbtn btn btn-link">005</button></td>
			<td><button id="dsp4" class="dspbtn btn btn-link">004</button></td>
			<td><button id="dsp3" class="dspbtn btn btn-link">003</button></td>
			<td><button id="dsp2" class="dspbtn btn btn-link">002</button></td>
			<td><button id="dsp1" class="dspbtn btn btn-link">001</button></td>
			<td></td>
		</tr>
		<tr>
			<td><button id="dsp47" class="dspbtn btn btn-link">###</button></td></td>
			<td rowspan="10"></td>
			<td><button id="dsp84" class="dspbtn btn btn-link">084</button></td>
			<td colspan="4"></td>
			<td><button id="dsp83" class="dspbtn btn btn-link">083</button></td>
			<td colspan="2" rowspan="10"></td>
			<td><button id="dsp82" class="dspbtn btn btn-link">082</button></td>
			<td colspan="4"></td>
			<td><button id="dsp81" class="dspbtn btn btn-link">081</button></td>
			<td rowspan="11"></td>
			<td><button id="dsp70" class="dspbtn btn btn-link">070</button></td>
		</tr>
		<tr>
			<td><button id="dsp48" class="dspbtn btn btn-link">###</button></td>
			<td colspan="3" rowspan="3"><button id="dsp43" class="dspbtn btn btn-link">043</button></td>
			<td><button id="dsp42" class="dspbtn btn btn-link">042</button></td>
			<td><button id="dsp41" class="dspbtn btn btn-link">041</button></td>
			<td rowspan="3"><button id="dsp40" class="dspbtn btn btn-link">040</button></td>
			<td rowspan="3"><button id="dsp35" class="dspbtn btn btn-link">035</button></td>
			<td><button id="dsp34" class="dspbtn btn btn-link">034</button></td>
			<td><button id="dsp33" class="dspbtn btn btn-link">033</button></td>
			<td><button id="dsp32" class="dspbtn btn btn-link">032</button></td>
			<td><button id="dsp31" class="dspbtn btn btn-link">031</button></td>
			<td rowspan="3"><button id="dsp30" class="dspbtn btn btn-link">030</button></td>
			<td><button id="dsp71" class="dspbtn btn btn-link">071</button></td>
		</tr>
		<tr>
			<td><button id="dsp49" class="dspbtn btn btn-link">###</button></td>
			<td colspan="2"></td>
			<td colspan="4"></td>
			<td><button id="dsp72" class="dspbtn btn btn-link">072</button></td>
		</tr>
		<tr>
			<td><button id="dsp95" class="dspbtn btn btn-link">095</button></td>
			<td><button id="dsp44" class="dspbtn btn btn-link">044</button></td>
			<td><button id="dsp45" class="dspbtn btn btn-link">045</button></td>
			<td><button id="dsp36" class="dspbtn btn btn-link">036</button></td>
			<td><button id="dsp37" class="dspbtn btn btn-link">037</button></td>
			<td><button id="dsp38" class="dspbtn btn btn-link">038</button></td>
			<td><button id="dsp39" class="dspbtn btn btn-link">039</button></td>
			<td><button id="dsp73" class="dspbtn btn btn-link">073</button></td>
		</tr>
		<tr>
			<td><button id="dsp96" class="dspbtn btn btn-link">096</button></td>
			<td><button id="dsp87" class="dspbtn btn btn-link">087</button></td>
			<td colspan="4" rowspan="2"></td>
			<td><button id="dsp86" class="dspbtn btn btn-link">086</button></td>
			<td><button id="dsp85" class="dspbtn btn btn-link">085</button></td>
			<td colspan="5" rowspan="2"></td>
			<td><button id="dsp74" class="dspbtn btn btn-link">074</button></td>
		</tr>
		<tr>
			<td><button id="dsp97" class="dspbtn btn btn-link">097</button></td>
			<td><button id="dsp90" class="dspbtn btn btn-link">090</button></td>
			<td><button id="dsp89" class="dspbtn btn btn-link">089</button></td>
			<td><button id="dsp88" class="dspbtn btn btn-link">088</button></td>
			<td><button id="dsp75" class="dspbtn btn btn-link">075</button></td>
		</tr>
		<tr>
			<td><button id="dsp98" class="dspbtn btn btn-link">098</button></td>
			<td rowspan="3"><button id="dsp55" class="dspbtn btn btn-link">055</button></td>
			<td><button id="dsp54" class="dspbtn btn btn-link">054</button></td>
			<td><button id="dsp53" class="dspbtn btn btn-link">053</button></td>
			<td><button id="dsp52" class="dspbtn btn btn-link">052</button></td>
			<td><button id="dsp51" class="dspbtn btn btn-link">051</button></td>
			<td rowspan="3"><button id="dsp50" class="dspbtn btn btn-link">050</button></td>
			<td rowspan="3"><button id="dsp65" class="dspbtn btn btn-link">065</button></td>
			<td><button id="dsp64" class="dspbtn btn btn-link">064</button></td>
			<td><button id="dsp63" class="dspbtn btn btn-link">063</button></td>
			<td><button id="dsp62" class="dspbtn btn btn-link">062</button></td>
			<td><button id="dsp61" class="dspbtn btn btn-link">061</button></td>
			<td rowspan="3"><button id="dsp60" class="dspbtn btn btn-link">060</button></td>
			<td><button id="dsp76" class="dspbtn btn btn-link">076</button></td>
		</tr>
		<tr>
			<td><button id="dsp99" class="dspbtn btn btn-link">099</button></td>
			<td colspan="4"></td>
			<td colspan="4"></td>
			<td><button id="dsp77" class="dspbtn btn btn-link">077</button></td>
		</tr>
		<tr>
			<td><button id="dsp100" class="dspbtn btn btn-link">100</button></td>
			<td><button id="dsp56" class="dspbtn btn btn-link">056</button></td>
			<td><button id="dsp57" class="dspbtn btn btn-link">057</button></td>
			<td><button id="dsp58" class="dspbtn btn btn-link">058</button></td>
			<td><button id="dsp59" class="dspbtn btn btn-link">059</button></td>
			<td><button id="dsp66" class="dspbtn btn btn-link">066</button></td>
			<td><button id="dsp67" class="dspbtn btn btn-link">067</button></td>
			<td><button id="dsp68" class="dspbtn btn btn-link">068</button></td>
			<td><button id="dsp69" class="dspbtn btn btn-link">069</button></td>
			<td><button id="dsp78" class="dspbtn btn btn-link">078</button></td>
		</tr>
		<tr>
			<td></td>
			<td><button id="dsp94" class="dspbtn btn btn-link">094</button></td>
			<td colspan="4"></td>
			<td><button id="dsp93" class="dspbtn btn btn-link">093</button></td>
			<td><button id="dsp92" class="dspbtn btn btn-link">092</button></td>
			<td colspan="4"></td>
			<td><button id="dsp91" class="dspbtn btn btn-link">091</button></td>
			<td><button id="dsp79" class="dspbtn btn btn-link">079</button></td>
		</tr>
		<tr>
			<td></td>
			<td><button id="dsp29" class="dspbtn btn btn-link">029</button></td>
			<td><button id="dsp28" class="dspbtn btn btn-link">028</button></td>
			<td><button id="dsp27" class="dspbtn btn btn-link">027</button></td>
			<td><button id="dsp26" class="dspbtn btn btn-link">026</button></td>
			<td><button id="dsp25" class="dspbtn btn btn-link">025</button></td>
			<td><button id="dsp24" class="dspbtn btn btn-link">024</button></td>
			<td><button id="dsp23" class="dspbtn btn btn-link">023</button></td>
			<td></td>
			<td></td>
			<td><button id="dsp22" class="dspbtn btn btn-link">022</button></td>
			<td><button id="dsp21" class="dspbtn btn btn-link">021</button></td>
			<td><button id="dsp20" class="dspbtn btn btn-link">020</button></td>
			<td><button id="dsp19" class="dspbtn btn btn-link">019</button></td>
			<td><button id="dsp18" class="dspbtn btn btn-link">018</button></td>
			<td><button id="dsp17" class="dspbtn btn btn-link">017</button></td>
			<td><button id="dsp80" class="dspbtn btn btn-link">080</button></td>
		</tr>
		</tbody>
		</table>
	</div>
</div>
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
                            	<div>{{ $display->display_name }}</div>
                                <div><img src="/storage/{{$display->id}}.jpg?<?php echo date("YmdHis");?>" width="100" /></div>

                                </td>
				                <!-- 商品タイトル -->
				                <td><div>{{ $display->kinds_item }}</div></td>
								<td>updated:{{ $display->updated_at}}</td>
                                <!-- 棚: 更新ボタン -->
                                <td>
                                    <form action="{{ url('displaysedit/'.$display->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <button type="submit" id="display{{$key+1}}" class="btn btn-primary">
                                            <i class="glyphicon glyphicon-pencil"></i> {{$key+1}} 確認 更新
                                        </button>
                                    </form>
                                </td>
                                <!-- 棚: 削除ボタン -->
        				@can('webmaster')
                                <td>
                                <form action="{{ url('display/'.$display->id) }}" method="POST">
                                     {{ csrf_field() }}
                                     {{ method_field('delete') }}
                                    <button type="submit" class="btn btn-danger">
                                        削除
                                    </button>
                                </form>
                                </td>
                        @endcan
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    </div>
<p class="page-top"><a href="#wrap">TOPに戻る</a></p>
    <!-- display: 既に登録されてる棚のリスト -->

@endsection