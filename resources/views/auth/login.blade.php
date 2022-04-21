@extends('layouts.app')
@section('content')
<br><br>
<div class="container">
<p style="text-align: center; font-size: 25px">ログイン</p>
        <p style="text-align: center; font-size: 16px">アカウントを持っていない方は<a href="{{ route('register') }}" style="color: red">こちらへ</a></p>
        <br />
        <div class="col-md-3"></div> 
        <div class="col-md-7">
            <div> 
                <div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">メールアドレス</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">パスワード</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="col-md-4"></div> 
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="color: black">
                                ログイン
                                </button>
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="#">
                                パスワードを忘れた
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div> 
    </div>
</div>
<br><br>
@endsection