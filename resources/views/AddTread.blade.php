@extends('layouts.app')
@section('title')
    หน้าเเรก
@endsection
@php
    use App\Services\MyService;
    $myService = new MyService();
@endphp
@section('content')
    <form action="{{ route('insert')}}" method="post">
        <div class="card">
            <div class="card-header">ตั้งกระทู้</div>
            <div class="card-body">
                <div class="form-group">
                    <div class="col-3">ชื่อกระทู้</div>
                    <div class="col-7">
                        <input type="text" name='nameTread' id="nameTread" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3">เนื้อหา</div>
                    <div class="col-7">
                        <textarea name="" id="" cols="30" rows="10"name='DetailTread' id="DetailTread"
                            class="form-control"></textarea>
                    </div>
                </div>.
                <div class="py-1 col-2">
                    <button class="form-control btn btn-primary" type="submit">บันทึก</button>
                </div>
            </div>
        </div>
    </form>
@endsection
