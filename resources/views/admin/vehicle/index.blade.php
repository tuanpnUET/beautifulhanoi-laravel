@extends('layouts.admin')
@section('content-dashboard')
<div style="width: 100%">
      <p style="font-size: 20px; text-align: center; font-weight: bold;">車両一覧</p>
      <p style="padding-left: 0%;"><a href="<?php echo route('vehicle.create') ?>" class="btn btn-primary">追加</a></p>
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
                  <th scope="col" style="width: 160px;">車両</th>
                  <th scope="col">説明</th>
                  <th scope="col">料金</th>
                  <th scope="col">ノート</th>
                  <th scope="col" style="width: 90px;">オプション</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($vehicles as $vehicle)
              <tr>
                  <td>{{ $vehicle->id }}</td>
                  <td>{{ $vehicle->name }}</td>
                  <td>{{ $vehicle->description }}</td>
                  <td>{{ $vehicle->cost }}</td>
                  <td>{{ $vehicle->note }}</td>
                  <td style="flex-direction: column; ">
                      <a href="{{ route('vehicle.edit', $vehicle->id) }}" class="btn btn-warning" style="margin-bottom: 10px">修正</a>
                      <form action="{{ route('vehicle.destroy', $vehicle->id) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-danger">削除</button>
                        </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
      <div style="margin-left: 85%; margin-right: auto;">{!! $vehicles->withQueryString()->links('pagination::bootstrap-4') !!}</div>
</div>
@endsection