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
                         @foreach($nhanvien as $nv)
                             <tr>
                                 <td>{{ $nv->MANV }}</td>
                                 <td>{{ $nv->HOTEN }}</td>
                                 <td>{{ $nv->SODT }}</td>
                                 <td>
                                     <a class="btn btn-primary text-white" href="{{ route('Edit',$nv->ID) }}">Thay đổi</a>
                                 </td>
                                 <td>
                                     <form action="{{ route('Delete',$nv->ID) }}" method="POST">
                                         @method('DELETE')
                                         @csrf
                                         <button TYPE="submit" class="btn btn-primary text-white" >Xóa</button>
                                     </form>
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
@endsection()
