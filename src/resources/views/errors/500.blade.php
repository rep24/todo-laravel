@extends('layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col col-md-offset-3 col-md-6">
      <div class="text-center">
        <p>処理が正常に行われませんでした。</p>
        <a href="{{ route('home') }}" class="btn">
          ホームへ戻る
        </a>
      </div>
    </div>
  </div>
</div>
@endsection