@extends('layouts.admin')

@section('title', 'イベント作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>イベント作成</h2>
            </div>
        </div>
        <div class="row mt-3">
            <div class="title col-md-8 mx-auto">
                タイトル
            </div>
        </div>
        <div class="row mt-3">
            <div class="date col-md-8 mx-auto">
                日付
            </div>
        </div>
        <div class="row mt-3">
            <div class="content col-md-8 mx-auto">
                内容
            </div>
        </div>
    </div>
@endsection