@extends('layouts.admin')

@section('title', 'ホーム')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ホーム</h2>
            </div>
        </div>
        <div class="row mt-3">
            <div class="profile col-md-4 mx-auto">
                プロフィール
            </div>
        </div>
        <div class="row mt-3">
            <div class="create col-md-8 mx-auto">
                新規作成
            </div>
        </div>
        <div class="row mt-3">
            <div class="index col-md-8 mx-auto">
                一覧
            </div>
        </div>
    </div>
@endsection