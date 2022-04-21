@extends('layouts.admin')
@section('content-dashboard')
<div style="width: 100%">
      <p style="font-size: 20px; text-align: center; font-weight: bold;">料理一覧</p>
      <p style="padding-left: 0%;"><a href="<?php echo route('food.create') ?>" class="btn btn-primary">追加</a></p>
      <br/>
        @if(\Session::has('success'))
        <div class="alert alert-success" style="margin-left: auto; margin-right: auto;">
            <p>{{ \Session::get('success') }}</p>
        </div>
        @endif
      <table class="table table-light table-bordered" style="margin-left: auto; margin-right: auto;">
          <thead>
              <tr>
                  <th scope="col">ID</th>
                  <th scope="col" style="width: 160px;">料理</th>
                  <th scope="col">説明</th>
                  <th scope="col">イメージ</th>
                  <th scope="col" style="width: 90px;">オプション</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($foods as $food)
              <tr>
                  <td>{{ $food->id }}</td>
                  <td>{{ $food->name }}</td>
                  <td>{{ $food->description }}</td>
                  <td><img src="../../images/{{ $food->image }}" style="height: auto; width: 400px" />{{ $food->image }}</td>
                  <td style="flex-direction: column; ">
                      <a href="{{ route('food.edit', $food->id) }}" class="btn btn-warning" style="margin-bottom: 10px">修正</a>
                      <form action="{{ route('food.destroy', $food->id) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-danger">削除</button>
                        </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
      <div style="margin-left: 85%; margin-right: auto;">{!! $foods->withQueryString()->links('pagination::bootstrap-4') !!}</div>
</div>
@endsection