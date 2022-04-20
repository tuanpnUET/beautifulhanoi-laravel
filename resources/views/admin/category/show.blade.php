@extends('layouts.admin')
@section('content-dashboard')
<div class="container">
    <h2 style="margin-top: 10px" >カテゴリー修正</h2>
    <form method="post" action="<?php echo route('category.destroy') ?>">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="nameInput">分野</label>
        <input type="text" class="form-control" id="nameInput" name="name"  value="{{ $category->name }}">
      </div>
      <button type="submit" class="btn btn-danger">削除</button>
    </form>
</div>
@endsection