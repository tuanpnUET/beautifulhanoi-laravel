@extends('layouts.admin')
@section('content-dashboard')
<div class="container">
    <p style="font-size: 20px; text-align: center; font-weight: bold;">お祭り修正</p>
    <form method="post" action="{{ route('festival.update', $festival->id) }}" enctype="multipart/form-data">
      {{ csrf_field() }}
    <div class="form-group">
      <label for="categoryId">カテゴリーID</label>
      <input type="number" class="form-control" id="categoryId" name="categoryId" value="{{ $festival->categoryId }}" disabled>
    </div>
    <div class="form-group">
      <label for="name">お祭り</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $festival->name }}">
    </div>
    <div class="form-group">
      <label for="description">説明</label>
      <input type="text" class="form-control" id="description" name="description" value="{{ $festival->description }}">
    </div>
    <div class="form-group">
      <label for="duration">時間</label>
      <input type="text" class="form-control" id="duration" name="duration" value="{{ $festival->duration }}">
    </div>
    <div class="form-group">
      <label for="image">イメージ</label>
      <p style="opacity: 0.5">画像を変更したくない場合はそのままにしておきます。</p>
      <input type="file" class="form-control" id="image" name="image" value="{{ $festival->image }}">
    </div>
      {{ method_field('PUT') }}
      <button type="submit" class="btn btn-primary" style="color: black">修正</button>
    </form>
</div>
@endsection