@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
    @include('common.errors')
    <form enctype="multipart/form-data" action="{{ url('displays/update') }}" method="POST">

        <!-- display_name -->
        <div class="form-group">
           <label for="display_name">棚の名前</label>
           <input type="text" id="display_name" name="display_name" class="form-control" value="{{$display->display_name}}">
        </div>
        <!-- Saveボタン/Backボタン -->
        <div class="well well-sm">
            <!--file 追加-->
        	<div class="col-sm-6">
                <label>画像</label>
                <input type="file" name="display_img">
            </div>
            <div><img src="upload/{{$display->display_img}}" width="100"></div>
            <button type="submit" class="btn btn-primary">更新</button>
            <a class="btn btn-link pull-right" href="{{ url('/') }}">
                <i class="glyphicon glyphicon-backward"></i>  戻る
            </a>
        </div>
        <!--/ Saveボタン/Backボタン -->
         
         <!-- id値を送信 -->
         <input type="hidden" name="id" value="{{$display->id}}" />
         <!--/ id値を送信 -->
         
         <!-- CSRF -->
         {{ csrf_field() }}
         <!--/ CSRF -->
         
    </form>
    </div>
</div>
@endsection