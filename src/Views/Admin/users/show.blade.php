@extends('layouts.master')

@section('title')
    Danh sách User
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h1 class="m-0">User Details</h1>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">

                    <div class="">
                        <strong>ID:</strong> {{ $user['id'] }}
                    </div>
                    <div class="">
                        <strong>Name:</strong> {{ $user['name'] }}
                    </div>
                    <div class=" ">
                        <strong>Email:</strong> {{ $user['email'] }}
                    </div>
                    <a class="btn btn-dark " href="{{ url('admin/users') }}">Back </a>
                    <a class="btn btn-warning" href="{{ url('admin/users/' . $user['id'] . '/edit') }}">Sửa</a>

                    <a class="btn btn-danger" href="{{ url('admin/users/' . $user['id'] . '/delete') }}"
                        onclick="return confirm(''Are you sure you want to delete it?'')">Xóa</a>
                </div>
            </div>
        </div>
    </div>
@endsection
