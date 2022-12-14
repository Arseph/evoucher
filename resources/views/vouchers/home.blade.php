@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">MY VOUCHERS</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ asset('home')}}" class="text-muted">Home</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vmodal"><i class="fas fa-plus"></i>&nbsp;NEW VOUCHER</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th>Voucher Type</th>
                                    <th>Payee</th>
                                    <th>Address</th>
                                    <th>Particulars</th>
                                    <th>Amount</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vouchers as $v)
                                <tr>
                                    <td>{{$v->v_type()}}</td>
                                    <td>{{$v->payee}}</td>
                                    <td>{{$v->address}}</td>
                                    <td>{{$v->particulars}}</td>
                                    <td>{{$v->amount}}</td>
                                    <td style="width: 5%;">
                                        <div class="btn-group">
                                            <button type="button" class="btn dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button class="dropdown-item preview-dv-ob" type="button" data-id="{{$v->id}}"><i class="fas fa-newspaper"></i>Preview</button>
                                                <button class="dropdown-item edit-dv-ob" type="button" data-id="{{$v->id}}" data-vtype-id="{{$v->vtype}}"><i class="far fa-edit"></i>Edit</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('vouchers.voucher')
@endsection
@section('js')
@include('scripts.vouchers.voucher')
@endsection
