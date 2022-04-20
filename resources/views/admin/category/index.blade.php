@extends('layouts.admin')
@section('content-dashboard')
<div class="container">
      <p style="font-size: 20px; text-align: center; font-weight: bold;">カテゴリー一覧</p>
      <p style="padding-left: 30%;"><a href="<?php echo route('category.create') ?>" class="btn btn-primary">追加</a></p>
      <br/>
      <table class="table table-light table-bordered" style="margin-left: auto; margin-right: auto; width: 40%;">
          <thead>
              <tr>
                  <th scope="col">ID</th>
                  <th scope="col">分野</th>
                  <th scope="col" style="display:flex;justify-content:center;">オプション</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($categories as $category)
              <tr>
                  <td>{{ $category->id }}</td>
                  <td>{{ $category->name }}</td>
                  <td style="display:flex;justify-content:space-around;">
                      <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning">修正</a>
                      <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-danger">削除</button>
                        </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
</div>
@endsection