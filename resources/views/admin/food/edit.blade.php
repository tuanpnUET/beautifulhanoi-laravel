@extends('layouts.admin')
@section('content-dashboard')
<div class="container">
    <p style="font-size: 20px; text-align: center; font-weight: bold;">料理修正</p>
    <form method="post" action="{{ route('food.update', $food->id) }}" enctype="multipart/form-data">
      {{ csrf_field() }}
    <div class="form-group">
      <label for="categoryId">カテゴリーID</label>
      <input type="number" class="form-control" id="categoryId" name="categoryId" value="{{ $food->categoryId }}" disabled>
    </div>
    <div class="form-group">
      <label for="name">料理</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $food->name }}">
    </div>
    <div class="form-group">
      <label for="description">説明</label>
      <input type="text" class="form-control" id="description" name="description" value="{{ $food->description }}">
    </div>
    <div class="form-group">
      <label for="image">イメージ</label>
      <input type="file" class="form-control" id="image" name="image" value="{{ $food->image }}">
    </div>
      {{ method_field('PUT') }}
      <button type="submit" class="btn btn-primary" style="color: black">修正</button>
    </form>
</div>
@endsection