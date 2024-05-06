@extends('layouts.app')
@section('title')
    home
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (auth()->check())
                            <p>ยินดีต้อนรับ {{ auth()->user()->name }}</p>
                        @else
                            <a href="{{ route('login') }}">
                                <p>กรุณาเข้าสู่ระบบ</p>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
