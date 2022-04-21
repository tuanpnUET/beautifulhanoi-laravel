@extends('layouts.admin')
@section('content-dashboard')
<div style="width: 100%">
      <p style="font-size: 20px; text-align: center; font-weight: bold;">観光地一覧</p>
      <p style="padding-left: 0%;"><a href="<?php echo route('destination.create') ?>" class="btn btn-primary">追加</a></p>
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
                  <th scope="col" style="width: 120px;">観光地</th>
                  <th scope="col">説明</th>
                  <th scope="col">住所</th>
                  <th scope="col">リンク</th>
                  <th scope="col">Image</th>
                  <th scope="col">営業中</th>
                  <th scope="col" style="width: 90px;">オプション</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($destinations as $destination)
              <tr>
                  <td>{{ $destination->id }}</td>
                  <td>{{ $destination->name }}</td>
                  <td>{{ $destination->description }}</td>
                  <td>{{ $destination->address }}</td>
                  <td><a href="{{ $destination->link }}" style="color: blue">{{ $destination->link }}</a></td>
                  <td><img src="../../images/{{ $destination->image }}" style="height: 50px;" />{{ $destination->image }}</td>
                  <td>{{ $destination->openingTime }}</td>
                  <td style="flex-direction: column; ">
                      <a href="{{ route('destination.edit', $destination->id) }}" class="btn btn-warning" style="margin-bottom: 10px">修正</a>
                      <form action="{{ route('destination.destroy', $destination->id) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-danger">削除</button>
                        </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
      <div style="margin-left: 85%; margin-right: auto;">{!! $destinations->withQueryString()->links('pagination::bootstrap-4') !!}</div>
</div>
@endsection