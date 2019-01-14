@extends('admin::layouts.login')

@section('content')
    <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        @include('admin::layouts._error')
        <h4 class="no-margins">登录：</h4>
        <p class="m-t-md">登录到H+后台主题UI框架</p>
        <input type="text" class="form-control uname" placeholder="用户名" id="name" name="name" value="admin888" autocomplete="off" required>
        <input type="password" class="form-control pword m-b" placeholder="密码" id="password" name="password" value="admin888" required>

        <input class="i-checks" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label for="remember">
            {{ __('Remember Me') }}
        </label>
        <button type="submit" class="btn btn-success btn-block">
            {{ __('Login') }}
        </button>
    </form>
@endsection
