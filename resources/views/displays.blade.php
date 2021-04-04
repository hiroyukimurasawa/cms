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
			<td><button id="dsp1" class="dspbtn" onclick="display1Click();">014</button></td>
			<td><button id="dsp2" class="dspbtn" onclick="display2Click();">013</button></td>
			<td><button id="dsp3" class="dspbtn" onclick="display3Click();">012</button></td>
			<td><button id="dsp4" class="dspbtn" onclick="display4Click();">011</button></td>
			<td><button id="dsp5" class="dspbtn" onclick="display5Click();">010</button></td>
			<td><button id="dsp6" class="dspbtn" onclick="display6Click();">009</button></td>
			<td><button id="dsp7" class="dspbtn" onclick="display7Click();">008</button></td>
			<td><button id="dsp8" class="dspbtn" onclick="display8Click();">007</button></td>
			<td><button id="dsp9" class="dspbtn" onclick="display9Click();">006</button></td>
			<td><button id="dsp10" class="dspbtn" onclick="display10Click();">005</button></td>
			<td><button id="dsp11" class="dspbtn" onclick="display11Click();">004</button></td>
			<td><button id="dsp12" class="dspbtn" onclick="display12Click();">003</button></td>
			<td><button id="dsp13" class="dspbtn" onclick="display13Click();">002</button></td>
			<td><button id="dsp14" class="dspbtn" onclick="display14Click();">001</button></td>
			<td></td>
		</tr>
		<tr>
			<td></td></td>
			<td rowspan="10"></td>
			<td><button id="dsp15" class="dspbtn" onclick="display15Click();">898</button></td>
			<td colspan="4"></td>
			<td><button id="dsp16" class="dspbtn" onclick="display16Click();">894</button></td>
			<td colspan="2" rowspan="10"></td>
			<td><button id="dsp17" class="dspbtn" onclick="display17Click();">890</button></td>
			<td colspan="4"></td>
			<td><button id="dsp18" class="dspbtn" onclick="display18Click();">888</button></td>
			<td rowspan="11"></td>
			<td><button id="dsp19" class="dspbtn" onclick="display19Click();">080</button></td>
		</tr>
		<tr>
			<td></td>
			<td colspan="3" rowspan="3"><button id="dsp20" class="dspbtn" onclick="display20Click();">035</button></td>
			<td><button id="dsp21" class="dspbtn" onclick="display21Click();">032</button></td>
			<td><button id="dsp22" class="dspbtn" onclick="display22Click();">031</button></td>
			<td rowspan="3"><button id="dsp23" class="dspbtn" onclick="display23Click();">030</button></td>
			<td rowspan="3"><button id="dsp24" class="dspbtn" onclick="display24Click();">026</button></td>
			<td><button id="dsp25" class="dspbtn" onclick="display25Click();">025</button></td>
			<td><button id="dsp26" class="dspbtn" onclick="display26Click();">024</button></td>
			<td><button id="dsp27" class="dspbtn" onclick="display27Click();">023</button></td>
			<td><button id="dsp28" class="dspbtn" onclick="display28Click();">021</button></td>
			<td rowspan="3"><button id="dsp29" class="dspbtn" onclick="display29Click();">020</button></td>
			<td><button id="dsp30" class="dspbtn" onclick="display30Click();">081</button></td>
		</tr>
		<tr>
			<td><button id="dsp31" class="dspbtn" onclick="display31Click();">060</button></td>
			<td colspan="2"></td>
			<td colspan="4"></td>
			<td><button id="dsp32" class="dspbtn" onclick="display32Click();">082</button></td>
		</tr>
		<tr>
			<td><button id="dsp33" class="dspbtn" onclick="display33Click();">061</button></td>
			<td><button id="dsp34" class="dspbtn" onclick="display34Click();">033</button></td>
			<td><button id="dsp35" class="dspbtn" onclick="display35Click();">034</button></td>
			<td><button id="dsp36" class="dspbtn" onclick="display36Click();">027</button></td>
			<td><button id="dsp37" class="dspbtn" onclick="display37Click();">028</button></td>
			<td><button id="dsp38" class="dspbtn" onclick="display38Click();">029</button></td>
			<td><button id="dsp39" class="dspbtn" onclick="display39Click();">022</button></td>
			<td><button id="dsp40" class="dspbtn" onclick="display40Click();">083</button></td>
		</tr>
		<tr>
			<td><button id="dsp41" class="dspbtn" onclick="display41Click();">062</button></td>
			<td><button id="dsp42" class="dspbtn" onclick="display42Click();">899</button></td>
			<td colspan="4" rowspan="2"></td>
			<td><button id="dsp43" class="dspbtn" onclick="display43Click();">895</button></td>
			<td><button id="dsp44" class="dspbtn" onclick="display44Click();">891</button></td>
			<td colspan="5" rowspan="2"></td>
			<td><button id="dsp45" class="dspbtn" onclick="display45Click();">084</button></td>
		</tr>
		<tr>
			<td><button id="dsp46" class="dspbtn" onclick="display46Click();">063</button></td>
			<td><button id="dsp47" class="dspbtn" onclick="display47Click();">900</button></td>
			<td><button id="dsp48" class="dspbtn" onclick="display48Click();">896</button></td>
			<td><button id="dsp49" class="dspbtn" onclick="display49Click();">892</button></td>
			<td><button id="dsp50" class="dspbtn" onclick="display50Click();">085</button></td>
		</tr>
		<tr>
			<td><button id="dsp51" class="dspbtn" onclick="display51Click();">064</button></td>
			<td rowspan="3"><button id="dsp52" class="dspbtn" onclick="display52Click();">055</button></td>
			<td><button id="dsp53" class="dspbtn" onclick="display53Click();">054</button></td>
			<td><button id="dsp54" class="dspbtn" onclick="display54Click();">053</button></td>
			<td><button id="dsp55" class="dspbtn" onclick="display55Click();">052</button></td>
			<td><button id="dsp56" class="dspbtn" onclick="display56Click();">051</button></td>
			<td rowspan="3"><button id="dsp57" class="dspbtn" onclick="display57Click();">050</button></td>
			<td rowspan="3"><button id="dsp58" class="dspbtn" onclick="display58Click();">045</button></td>
			<td><button id="dsp59" class="dspbtn" onclick="display59Click();">044</button></td>
			<td><button id="dsp60" class="dspbtn" onclick="display60Click();">043</button></td>
			<td><button id="dsp61" class="dspbtn" onclick="display61Click();">042</button></td>
			<td><button id="dsp62" class="dspbtn" onclick="display62Click();">041</button></td>
			<td rowspan="3"><button id="dsp63" class="dspbtn" onclick="display63Click();">040</button></td>
			<td><button id="dsp64" class="dspbtn" onclick="display64Click();">086</button></td>
		</tr>
		<tr>
			<td><button id="dsp65" class="dspbtn" onclick="display65Click();">065</button></td>
			<td colspan="4"></td>
			<td colspan="4"></td>
			<td><button id="dsp66" class="dspbtn" onclick="display66Click();">087</button></td>
		</tr>
		<tr>
			<td></td>
			<td><button id="dsp67" class="dspbtn" onclick="display67Click();">056</button></td>
			<td><button id="dsp68" class="dspbtn" onclick="display68Click();">057</button></td>
			<td><button id="dsp69" class="dspbtn" onclick="display69Click();">058</button></td>
			<td><button id="dsp70" class="dspbtn" onclick="display70Click();">059</button></td>
			<td><button id="dsp71" class="dspbtn" onclick="display71Click();">046</button></td>
			<td><button id="dsp72" class="dspbtn" onclick="display72Click();">047</button></td>
			<td><button id="dsp73" class="dspbtn" onclick="display73Click();">048</button></td>
			<td><button id="dsp74" class="dspbtn" onclick="display74Click();">049</button></td>
			<td><button id="dsp75" class="dspbtn" onclick="display75Click();">088</button></td>
		</tr>
		<tr>
			<td></td>
			<td><button id="dsp76" class="dspbtn" onclick="display76Click();">901</button></td>
			<td colspan="4"></td>
			<td><button id="dsp77" class="dspbtn" onclick="display77Click();">897</button></td>
			<td><button id="dsp78" class="dspbtn" onclick="display78Click();">893</button></td>
			<td colspan="4"></td>
			<td><button id="dsp79" class="dspbtn" onclick="display79Click();">889</button></td>
			<td><button id="dsp80" class="dspbtn" onclick="display80Click();">089</button></td>
		</tr>
		<tr>
			<td></td>
			<td><button id="dsp81" class="dspbtn" onclick="display81Click();">018</button></td>
			<td><button id="dsp82" class="dspbtn" onclick="display82Click();">017</button></td>
			<td><button id="dsp83" class="dspbtn" onclick="display83Click();">016</button></td>
			<td><button id="dsp84" class="dspbtn" onclick="display84Click();">015</button></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><button id="dsp85" class="dspbtn" onclick="display85Click();">072</button></td>
			<td><button id="dsp86" class="dspbtn" onclick="display86Click();">071</button></td>
			<td><button id="dsp87" class="dspbtn" onclick="display87Click();">070</button></td>
			<td><button id="dsp90" class="dspbtn" onclick="display88Click();">090</button></td>
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
                                            <i class="glyphicon glyphicon-pencil"></i> 更新
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