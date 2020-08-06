@extends('Master')
@section('Main')
    <div class="main mt-5">
        <div class="container">
            <div class="row">
                @include('Conponent.Header')
            </div>
            <div class="row">
                <div class="col">
                    <div class="info">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">MANV</th>
                                <th scope="col">HỌ VÀ TÊN</th>
                                <th scope="col">SỐ ĐIỆM THOẠI</th>
                                <th scope="col">SỬA</th>
                                <th scope="col">XÓA</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $nhanvien_search->MANV }}</td>
                                <td>{{ $nhanvien_search->HOTEN }}</td>
                                <td>{{ $nhanvien_search->SODT }}</td>
                                <td>
                                    <a class="btn btn-info text-white" href="{{ route('Edit',$nhanvien_search->ID) }}">Thay đổi</a>
                                </td>
                                <td>
                                    <form action="{{ route('Delete',$nhanvien_search->ID) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button TYPE="submit" class="btn btn-danger text-white" >Xóa</button>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
