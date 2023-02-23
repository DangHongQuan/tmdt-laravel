@extends('layouts.user_layout')
@section('content')
  
{{-- <script>
    window.onload = function() {
      alert("Trang của bạn đã được tải lại");
    };
  </script> --}}
    <div class="app__container">
        <div class="grid wide">
            <div class="row sm-gutter app__content">
                <!-- Category -->
                <div class="col l-2 m-0 c-0">
                    <nav class="category">
                        <h3 class="category__heading">
                            Danh mục
                        </h3>
                        <ul class="category-list">
                         
                          @foreach($nganhhangall as $all)
                            @if($all->NH_CON===null)
                          <li class="datgoldshop-item datgold-item">
                            <a href="#" class="category-item__link">{{$all->TEN_NH}}</a>
                        </li>
                        @endif
						
     
            
                          @endforeach
                        
                          @foreach($nganhhang as $danhmuccon)
                     
                          <li class="datgoldshop-item" >
                              <a href="{{url('trang-chu/danh-muc/product/'.$danhmuccon->MA_NH)}}" class="category-item__link">{{$danhmuccon->TEN_NH}}</a>
                          </li>
                          
                     @endforeach
                 
                        </ul>
                        

                    </nav>
                </div>

                <div class="col l-10 m-12 c-12">
                

                    <!-- Product -->
                    <div class="home-product">
                  
                            @yield('product')
                    
	
                    </div>
                </div>
            </div>
        </div>
    </div>

	
	
	
   

                @endsection
