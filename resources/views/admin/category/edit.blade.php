@extends('layouts.admin')
@section('content-dashboard')
<div class="container">
    <h2 style="margin-top: 10px" >カテゴリー修正</h2>
    <form method="post" action="{{ route('category.update', $category->id) }}">
      {{ csrf_field() }}
      <div class="form-group" style="width: 40%">
        <label for="name">分野</label>
        <input type="text" class="form-control" id="name" value="{{ $category->name }}" name="name">
      </div>
      {{ method_field('PUT') }}
      <button type="submit" class="btn btn-primary" style="color: black">修正</button>
    </form>
</div>
@endsection