@extends('layouts.admin')
@section('content-dashboard')
<div class="container">
    <p style="font-size: 20px; text-align: center; font-weight: bold;">観光地修正</p>
    <form method="post" action="{{ route('destination.update', $destination->id) }}" enctype="multipart/form-data">
      {{ csrf_field() }}
    <div class="form-group">
      <label for="categoryId">カテゴリーID</label>
      <input type="number" class="form-control" id="categoryId" name="categoryId" value="{{ $destination->categoryId }}" disabled>
    </div>
    <div class="form-group">
      <label for="name">観光地</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $destination->name }}">
    </div>
    <div class="form-group">
      <label for="description">説明</label>
      <input type="text" class="form-control" id="description" name="description" value="{{ $destination->description }}">
    </div>
    <div class="form-group">
      <label for="address">住所</label>
      <input type="text" class="form-control" id="address" name="address" value="{{ $destination->address }}">
    </div>
    <div class="form-group">
      <label for="link">リンク</label>
      <input type="text" class="form-control" id="link" name="link" value="{{ $destination->link }}">
    </div>
    <div class="form-group">
      <label for="image">Image</label>
      <input type="file" class="form-control" id="image" name="image" value="{{ $destination->image }}">
    </div>  
    <div class="form-group">
      <label for="openingTime">営業中</label>
      <input type="text" class="form-control" id="openingTime" name="openingTime" value="{{ $destination->openingTime }}">
    </div>
      {{ method_field('PUT') }}
      <button type="submit" class="btn btn-primary" style="color: black">修正</button>
    </form>
</div>
@endsection