@extends('layouts.app')

@section('content')
<h2>掲示板作成</h2>
<form action="{{ route('boards.create') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label for="name" class="form-label">名前</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label for="title" class="form-label">タイトル</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="mb-3">
    <label for="title" class="form-label">本文</label>
    <textarea class="form-control" name="body" rows="6"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">保存</button>
  <button class="btn btn-primary">もどる</button>
</form>
@endsection