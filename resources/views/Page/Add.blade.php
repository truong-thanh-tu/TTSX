@extends('Master')
@section('Main')
    <div class="main mt-5">
        <div class="container">
            <div class="row">
                @include('Conponent.Header')
            </div>
            <div class="row">
                <div class="col">
                    <form action="{{route('Add')}}" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">MANV</label>
                            <input type="text" class="form-control"  name="MANV"  aria-describedby="emailHelp" placeholder="NHẬP MÃ NHÂN VIÊN">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">HỌ VÀ TÊN</label>
                            <input type="text" class="form-control" name="HOTEN" placeholder="NHẬP HỌ VÀ TÊN">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">SÓ ĐIỆN THOẠI</label>
                            <input type="number" class="form-control" name="SODT"id="exampleInputPassword1" placeholder="NHẬP SÓ ĐIỆN THOẠI">
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection()
