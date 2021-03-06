@extends('layouts.app')

@section('content')
<script src="{{ asset('js/display.js') }}"></script>
<div class="row">
    <div class="col-md-12">
    @include('common.errors')
    <form enctype="multipart/form-data" action="{{ url('displays/update') }}" method="POST">

        <!-- display_name -->
        @can('editor')
        <div class="form-group">
           <label for="display_name">棚の名前</label>
           <input type="text" id="display_name" name="display_name" class="form-control" value="{{$display->display_name}}">
        </div>
        @endcan
        <div class="form-group">
            <label for="display_img"><img src="/storage/{{$display->id}}.jpg?<?php echo date("YmdHis");?>" width="320" height="480" />
            </label>
        @can('editor')
            <input type="file" id="display_img" name="display_img" class="form-control " value="{{$display->display_img}}">
        @endcan
        </div>
        <div class="form-group">
           <label for="kinds_item">棚にある商品種等</label>
           <input type="text" id="kinds_item" name="kinds_item" class="form-control" value="{{$display->kinds_item}}">
        </div>
        <div class="form-group">
           <label for="items_amount">商品の数量目安</label>
           <input type="text" id="items_amount" name="items_amount" class="form-control" value="{{$display->items_amount}}">
        </div>
        <td>updated:{{ $display->updated_at}}</td>
        <!-- Saveボタン/Backボタン -->
        @can('editor')
        <div class="well well-sm">

            <button type="submit" class="btn btn-primary">更新</button>
        @endcan
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