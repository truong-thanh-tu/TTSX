@extends('Master')
@section('Main')
    <div class="main mt-5">
        <div class="container">
            <div class="row">
                @include('Conponent.Header')
            </div>


            <div class="row">
                <div class="col">
                    <form action="{{ url('Update',$nv->ID) }}" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">MANV</label>
                            <input type="text" class="form-control" name="MANV" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" value="{{ $nv->MANV }}" placeholder="NHẬP MÃ NHÂN VIÊN">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">HỌ VÀ TÊN</label>
                            <input type="text" class="form-control" name="HOTEN" id="exampleInputPassword1"
                                   placeholder="NHẬP HỌ TÊN" VALUE="{{ $nv->HOTEN }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">SÓ ĐIỆN THOẠI</label>
                            <input type="number" class="form-control" name="SODT" id="exampleInputPassword1"
                                   placeholder="SÓ ĐIỆN THOẠI" VALUE="{{ $nv->SODT }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection()
