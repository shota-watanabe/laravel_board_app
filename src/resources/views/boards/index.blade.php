@extends('layouts.app')

@section('content')
<x-flash-message status="session('status')" />
<div class="d-flex align-items-center mb-3">
  <h2>掲示板一覧</h2>
  <div class="ms-auto">
    <a href="/boards/new" class="btn btn-outline-dark">新規作成</a>
  </div>
</div>
<table class="table table-hover">
  <thead class="table-dark">
    <tr>
      <th>ID</th>
      <th>タイトル</th>
      <th>作成者</th>
      <th>作成日時</th>
      <th>更新日時</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>1</th>
      <td>雑談掲示板</td>
      <td>Taro</td>
      <td>2018年4月1日</td>
      <td>2018年4月15日</td>
    </tr>
    <tr>
      <th>2</th>
      <td>雑談掲示板2</td>
      <td>Ken</td>
      <td>2018年4月1日</td>
      <td>2018年4月15日</td>
    </tr>
  </tbody>
</table>
@endsection