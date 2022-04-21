@extends('layouts.admin')
@section('content-dashboard')
<div class="container">
  <p style="margin-top: 10px; font-size: 18px" >新規料理追加</p>
  <form method="post" action="<?php echo route('food.store') ?>">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="categoryId">カテゴリーID</label>
      <input type="number" class="form-control" id="categoryId" name="categoryId" value="2" disabled>
    </div>
    <div class="form-group">
      <label for="name">料理</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
      <label for="description">説明</label>
      <input type="text" class="form-control" id="description" name="description">
    </div>
    <button type="submit" class="btn btn-primary" style="color: black">新規追加</button>
  </form>
</div>
@endsection