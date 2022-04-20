@extends('layouts.admin')
@section('content-dashboard')
<div class="container">
  <p style="margin-top: 10px; font-size: 18px" >カテゴリー新規追加</p>
  <form method="post" action="<?php echo route('category.store') ?>">
    {{ csrf_field() }}
    <div class="form-group" style="width: 40%">
      <label for="nameInput">分野</label>
      <input type="text" class="form-control" id="nameInput" name="name">
    </div>
    <button type="submit" class="btn btn-primary" style="color: black">新規追加</button>
  </form>
</div>
@endsection