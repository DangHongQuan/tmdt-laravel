@extends('./layouts.admin_layout')
@section('contents')

      		<div class="table-agile-info table-responsive">
 <div class="panel panel-default">
    <div class="panel-heading">
     Danh Sách Sản Phẩm
    </div>
    <div>

      <table class="table" >
        <thead>
            <tr>

            <th data-breakpoints="xs">STT</th>
            <th>Tên Sản Phẩm</th>
            <th>Avata</th>
            <th>Phân Loại 1</th>
            <th>Phân Loại 2</th>
            <th>Giá</th>
            <th>Người Đăng</th>
            <th data-breakpoints="xs">Thời Gian Đăng</th>        
            <th data-breakpoints="xs sm md" data-title="DOB">Hành Động</th>
            </tr>
            
        
        </thead>
        <tbody>
          
            <?php $dem=1 ?>
            @foreach($ctsp as $row_ctsp)
         
    
          <tr data-expanded="true">
            <td><?php echo $dem++?></td>
           <td>{{$row_ctsp->Sanpham->TEN_SP}}</td>
           <td><img src="{{asset($row_ctsp->Sanpham->AVATA_SP)}}" alt="" style="max-width: 200px; height: 100px"></td>
        
           @foreach (json_decode($row_ctsp->PHANLOAI, true) as $item)
           @php
               $sizes = is_array($item['size']) ? $item['size'] : explode(',', $item['size']);
               $colors = explode(',', $item['color']);
           @endphp
           @foreach ($sizes as $size)
               @foreach ($colors as $color)
                   <td>{{ $size }}/{{ $color }}</td>
               @endforeach
           @endforeach
       @endforeach
       
       <td>{{$row_ctsp->PHANLOAI}}</td>
       {{-- <td>{{$row_ctsp->mausac->TEN_MAU}}</td> --}}
       <td>{{$row_ctsp->SOLUONG}}</td>
<td>{{$row_ctsp->GIA_SP}}</td>    
        
     
{{-- @foreach ($row_ctsp->phanloai->TEN_OPTION as $size)
@foreach ($row_ctsp->mausac->TEN_MAU as $color)
  @if ($row_ctsp['size'] == $size && $item['color'] == $color)
    <td>{{ $size . '/' . $color }} </td>
  @endif
@endforeach
@endforeach --}}
          
           
           
          
                
      <td>
        <a class="btn btn-primary"
        href="{{url('admin/edit/'.$row_ctsp->sanpham->MA_SP)}}">
        <i class="bi-pencil"></i>
        </a> 
      </td>
      <td>
        <form action="{{url('admin/xoa-nhan-vien/'.$row_ctsp->sanpham->MA_SP)}}"
          method="POST">
          @csrf
          {{-- @method('DELETE') ; --}}
          <button type="submit" class="btn btn-danger">
          <i class="bi-trash"></i>
          </button>

          </form>
      </td>

          </tr>
   
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>        

@endsection