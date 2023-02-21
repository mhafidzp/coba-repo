@extends('layout.index')
@section('data-master','active')
@section('data-master-menu','show')
@section('data-master-user','active')
@section('css')
@endsection
@section('content')
<!-- Page Heading -->
<div class="row mb-2">
    <div class="col-md-12">
        <a href="{{ url('user/index') }}" class="btn btn-primary float-right">Kembali</a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Ubah Users</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('update.user') }}" method="post">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="username" value="{{ $data->username }}" required>
                            <input type="hidden" name="id" value="{{ $data->id }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" value="{{ $data->password }}" required>
                        </div>
                    </div>                
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
@endsection