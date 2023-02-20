@extends('./layouts.admin_layout')
@section('contents')
      		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Danh Sách Ngành Hàng
    </div>
    <div>

      <table class="table" >
        <thead>
            <tr>

            <th data-breakpoints="xs">STT</th>
            <th>Tên Ngành Hàng</th>
            <th>Ảnh Ngành Hàng</th>
            <th>Tên Thương Hiệu</th>
            <th>Ảnh Thương Hiệu</th>
            <th>Tên Thuộc Tính</th>
            <th data-breakpoints="xs">Nội Dung Thuộc Tính</th>        
            <th data-breakpoints="xs sm md" data-title="DOB">Hành Động</th>
            </tr>
            
        
        </thead>
        <tbody>
     
            <?php $stt=1;
       
            ?>
                  
            @foreach ($data as $row)
          <tr data-expanded="true">
      
            <td><?php echo $stt++?></td>
           
           
                <td>{{ $row->nganhhang->TEN_NH }}</td>
           <td><img src="{{asset($row->nganhhang->ANH_NH)}}" alt="{{$row->nganhhang->TEN_NH}}" style="max-width: 80px;"></td>
           
                <td>{{$row->thuonghieu->TEN_TH}}</td> 
         
                <td><img src="{{asset($row->thuonghieu->ANH_TH)}}" alt="{{$row->thuonghieu->TEN_NH}}" style="max-width: 80px;"></td>
                <td>{{$row->TEN_TTCT}}</td> 
                <td>{{$row->NOIDUNG_OPTION}}</td> 

               
          
            
      <td>
        <a class="btn btn-primary"
        href="">
        <i class="bi-pencil"></i>
        </a> 
      </td>
      <td>
        <form action=""
        method="POST">
        @csrf
        <!-- @method('DELETE') -->
        <button class="btn btn-danger">
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