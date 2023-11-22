@extends('admin.layout.app')

@section('breadcrumb')
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0 justify-content-sm-start">
            <div class="welcome-text">
                <h4>{{ $name }}</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-sm-0 d-flex mt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('archives') }}">Archive</a></li>
                <li class="breadcrumb-item">{{ $bidang->bid_name }}</li>
                <li class="breadcrumb-item active">{{ $sub->sub_name }}</li>
            </ol>
        </div>
    </div>
@endsection

@section('app')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
@endsection
