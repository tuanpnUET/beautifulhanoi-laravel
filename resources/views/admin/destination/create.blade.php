@extends('layouts.admin')
@section('content-dashboard')
<div class="container">
  <p style="font-size: 20px; text-align: center; font-weight: bold;" >新規観光地追加</p>
  <form method="post" action="<?php echo route('destination.store') ?>" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="categoryId">カテゴリーID</label>
      <input type="number" class="form-control" id="categoryId" name="categoryId" value="1" disabled>
    </div>
    <div class="form-group">
      <label for="name">観光地</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
      <label for="description">説明</label>
      <input type="text" class="form-control" id="description" name="description">
    </div>
    <div class="form-group">
      <label for="address">住所</label>
      <input type="text" class="form-control" id="address" name="address">
    </div>
    <div class="form-group">
      <label for="link">リンク</label>
      <input type="text" class="form-control" id="link" name="link">
    </div>
    <div class="form-group">
      <label for="image">イメージ</label>
      <input type="file" class="form-control" id="image" name="image">
    </div>
    <div class="form-group">
      <label for="openingTime">営業中</label>
      <input type="text" class="form-control" id="openingTime" name="openingTime">
    </div>
    <button type="submit" class="btn btn-primary" style="color: black">新規追加</button>
  </form>
</div>
@endsection