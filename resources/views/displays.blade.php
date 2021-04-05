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
	@can('webmastar')
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
<table>
	<tbody>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td><button id="dsp14" class="dspbtn" onclick="display14Click();">014</button></td>
			<td><button id="dsp13" class="dspbtn" onclick="display13Click();">013</button></td>
			<td><button id="dsp12" class="dspbtn" onclick="display12Click();">012</button></td>
			<td><button id="dsp11" class="dspbtn" onclick="display11Click();">011</button></td>
			<td><button id="dsp10" class="dspbtn" onclick="display10Click();">010</button></td>
			<td><button id="dsp9" class="dspbtn" onclick="display9Click();">009</button></td>
			<td><button id="dsp8" class="dspbtn" onclick="display8Click();">008</button></td>
			<td><button id="dsp7" class="dspbtn" onclick="display7Click();">007</button></td>
			<td><button id="dsp6" class="dspbtn" onclick="display6Click();">006</button></td>
			<td><button id="dsp5" class="dspbtn" onclick="display5Click();">005</button></td>
			<td><button id="dsp4" class="dspbtn" onclick="display4Click();">004</button></td>
			<td><button id="dsp3" class="dspbtn" onclick="display3Click();">003</button></td>
			<td><button id="dsp2" class="dspbtn" onclick="display2Click();">002</button></td>
			<td><button id="dsp1" class="dspbtn" onclick="display1Click();">001</button></td>
			<td></td>
		</tr>
		<tr>
			<td></td></td>
			<td rowspan="10"></td>
			<td><button id="dsp898" class="dspbtn" onclick="display898Click();">898</button></td>
			<td colspan="4"></td>
			<td><button id="dsp894" class="dspbtn" onclick="display894Click();">894</button></td>
			<td colspan="2" rowspan="10"></td>
			<td><button id="dsp890" class="dspbtn" onclick="display890Click();">890</button></td>
			<td colspan="4"></td>
			<td><button id="dsp888" class="dspbtn" onclick="display888Click();">888</button></td>
			<td rowspan="11"></td>
			<td><button id="dsp80" class="dspbtn" onclick="display80Click();">080</button></td>
		</tr>
		<tr>
			<td></td>
			<td colspan="3" rowspan="3"><button id="dsp33" class="dspbtn" onclick="display33Click();">033</button></td>
			<td><button id="dsp32" class="dspbtn" onclick="display32Click();">032</button></td>
			<td><button id="dsp31" class="dspbtn" onclick="display31Click();">031</button></td>
			<td rowspan="3"><button id="dsp30" class="dspbtn" onclick="display30Click();">030</button></td>
			<td rowspan="3"><button id="dsp25" class="dspbtn" onclick="display25Click();">025</button></td>
			<td><button id="dsp24" class="dspbtn" onclick="display24Click();">024</button></td>
			<td><button id="dsp23" class="dspbtn" onclick="display23Click();">023</button></td>
			<td><button id="dsp22" class="dspbtn" onclick="display22Click();">022</button></td>
			<td><button id="dsp21" class="dspbtn" onclick="display21Click();">021</button></td>
			<td rowspan="3"><button id="dsp20" class="dspbtn" onclick="display20Click();">020</button></td>
			<td><button id="dsp81" class="dspbtn" onclick="display81Click();">081</button></td>
		</tr>
		<tr>
			<td><button id="dsp60" class="dspbtn" onclick="display60Click();">060</button></td>
			<td colspan="2"></td>
			<td colspan="4"></td>
			<td><button id="dsp82" class="dspbtn" onclick="display82Click();">082</button></td>
		</tr>
		<tr>
			<td><button id="dsp61" class="dspbtn" onclick="display61Click();">061</button></td>
			<td><button id="dsp34" class="dspbtn" onclick="display34Click();">034</button></td>
			<td><button id="dsp35" class="dspbtn" onclick="display35Click();">035</button></td>
			<td><button id="dsp26" class="dspbtn" onclick="display26Click();">026</button></td>
			<td><button id="dsp27" class="dspbtn" onclick="display27Click();">027</button></td>
			<td><button id="dsp28" class="dspbtn" onclick="display28Click();">028</button></td>
			<td><button id="dsp29" class="dspbtn" onclick="display29Click();">029</button></td>
			<td><button id="dsp83" class="dspbtn" onclick="display83Click();">083</button></td>
		</tr>
		<tr>
			<td><button id="dsp62" class="dspbtn" onclick="display62Click();">062</button></td>
			<td><button id="dsp899" class="dspbtn" onclick="display899Click();">899</button></td>
			<td colspan="4" rowspan="2"></td>
			<td><button id="dsp895" class="dspbtn" onclick="display895Click();">895</button></td>
			<td><button id="dsp891" class="dspbtn" onclick="display891Click();">891</button></td>
			<td colspan="5" rowspan="2"></td>
			<td><button id="dsp84" class="dspbtn" onclick="display84Click();">084</button></td>
		</tr>
		<tr>
			<td><button id="dsp63" class="dspbtn" onclick="display63Click();">063</button></td>
			<td><button id="dsp900" class="dspbtn" onclick="display900Click();">900</button></td>
			<td><button id="dsp896" class="dspbtn" onclick="display896Click();">896</button></td>
			<td><button id="dsp892" class="dspbtn" onclick="display892Click();">892</button></td>
			<td><button id="dsp85" class="dspbtn" onclick="display85Click();">085</button></td>
		</tr>
		<tr>
			<td><button id="dsp64" class="dspbtn" onclick="display64Click();">064</button></td>
			<td rowspan="3"><button id="dsp55" class="dspbtn" onclick="display55Click();">055</button></td>
			<td><button id="dsp54" class="dspbtn" onclick="display54Click();">054</button></td>
			<td><button id="dsp53" class="dspbtn" onclick="display53Click();">053</button></td>
			<td><button id="dsp52" class="dspbtn" onclick="display52Click();">052</button></td>
			<td><button id="dsp51" class="dspbtn" onclick="display51Click();">051</button></td>
			<td rowspan="3"><button id="dsp50" class="dspbtn" onclick="display50Click();">050</button></td>
			<td rowspan="3"><button id="dsp45" class="dspbtn" onclick="display45Click();">045</button></td>
			<td><button id="dsp44" class="dspbtn" onclick="display44Click();">044</button></td>
			<td><button id="dsp43" class="dspbtn" onclick="display43Click();">043</button></td>
			<td><button id="dsp42" class="dspbtn" onclick="display42Click();">042</button></td>
			<td><button id="dsp41" class="dspbtn" onclick="display41Click();">041</button></td>
			<td rowspan="3"><button id="dsp40" class="dspbtn" onclick="display40Click();">040</button></td>
			<td><button id="dsp86" class="dspbtn" onclick="display86Click();">086</button></td>
		</tr>
		<tr>
			<td><button id="dsp65" class="dspbtn" onclick="display65Click();">065</button></td>
			<td colspan="4"></td>
			<td colspan="4"></td>
			<td><button id="dsp87" class="dspbtn" onclick="display87Click();">087</button></td>
		</tr>
		<tr>
			<td></td>
			<td><button id="dsp56" class="dspbtn" onclick="display56Click();">056</button></td>
			<td><button id="dsp57" class="dspbtn" onclick="display57Click();">057</button></td>
			<td><button id="dsp58" class="dspbtn" onclick="display58Click();">058</button></td>
			<td><button id="dsp59" class="dspbtn" onclick="display59Click();">059</button></td>
			<td><button id="dsp46" class="dspbtn" onclick="display46Click();">046</button></td>
			<td><button id="dsp47" class="dspbtn" onclick="display47Click();">047</button></td>
			<td><button id="dsp48" class="dspbtn" onclick="display48Click();">048</button></td>
			<td><button id="dsp49" class="dspbtn" onclick="display49Click();">049</button></td>
			<td><button id="dsp88" class="dspbtn" onclick="display88Click();">088</button></td>
		</tr>
		<tr>
			<td></td>
			<td><button id="dsp901" class="dspbtn" onclick="display901Click();">901</button></td>
			<td colspan="4"></td>
			<td><button id="dsp897" class="dspbtn" onclick="display897Click();">897</button></td>
			<td><button id="dsp893" class="dspbtn" onclick="display893Click();">893</button></td>
			<td colspan="4"></td>
			<td><button id="dsp889" class="dspbtn" onclick="display889Click();">889</button></td>
			<td><button id="dsp89" class="dspbtn" onclick="display89Click();">089</button></td>
		</tr>
		<tr>
			<td></td>
			<td><button id="dsp18" class="dspbtn" onclick="display18Click();">018</button></td>
			<td><button id="dsp17" class="dspbtn" onclick="display17Click();">017</button></td>
			<td><button id="dsp16" class="dspbtn" onclick="display16Click();">016</button></td>
			<td><button id="dsp15" class="dspbtn" onclick="display15Click();">015</button></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><button id="dsp72" class="dspbtn" onclick="display72Click();">072</button></td>
			<td><button id="dsp71" class="dspbtn" onclick="display71Click();">071</button></td>
			<td><button id="dsp70" class="dspbtn" onclick="display70Click();">070</button></td>
			<td><button id="dsp90" class="dspbtn" onclick="display90Click();">090</button></td>
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
                                        <button type="submit" id="display{{$key+1}}" class="btn btn-primary">
                                            <i class="glyphicon glyphicon-pencil"></i> 閲覧、更新
                                        </button>
                                    </form>
                                </td>
                                <!-- 棚: 削除ボタン -->
        				@can('webmastar')
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

    <!-- display: 既に登録されてる棚のリスト -->

@endsection