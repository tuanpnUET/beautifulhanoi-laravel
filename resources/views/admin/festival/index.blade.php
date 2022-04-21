@extends('layouts.admin')
@section('content-dashboard')
<div style="width: 100%">
      <p style="font-size: 20px; text-align: center; font-weight: bold;">お祭り一覧</p>
      <p style="padding-left: 0%;"><a href="<?php echo route('festival.create') ?>" class="btn btn-primary">追加</a></p>
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
                  <th scope="col" style="width: 160px;">お祭り</th>
                  <th scope="col">説明</th>
                  <th scope="col" style="width: 150px;">時間</th>
                  <th scope="col" style="width: 90px;">オプション</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($festivals as $festival)
              <tr>
                  <td>{{ $festival->id }}</td>
                  <td>{{ $festival->name }}</td>
                  <td>{{ $festival->description }}</td>
                  <td>{{ $festival->duration }}</td>
                  <td style="flex-direction: column; ">
                      <a href="{{ route('festival.edit', $festival->id) }}" class="btn btn-warning" style="margin-bottom: 10px">修正</a>
                      <form action="{{ route('festival.destroy', $festival->id) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-danger">削除</button>
                        </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
      <div style="margin-left: 85%; margin-right: auto;">{!! $festivals->withQueryString()->links('pagination::bootstrap-4') !!}</div>
</div>
@endsection