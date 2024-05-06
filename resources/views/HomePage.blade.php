@extends('layouts.app')
@section('title')
    หน้าเเรก
@endsection
@php
    use App\Services\MyService;
    $myService = new MyService();
@endphp
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">เว็บบอร์ด</div>
                    <div class="card-body">
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
