@extends('./layouts.admin_layout')
@section('contents')
<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                          Thêm Danh Mục Con
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="them-moi-danh-muc-con" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Danh Mục</label>
                                    <input type="text" class="form-control" name="danhmuccon" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                              
                                <div class="form-group">
                                <label for="exampleInputEmail1">Danh Mục Thuộc Ngành Hàng Nào?</label>
                                <select class="form-control m-bot15" name="nganhhangchon" style="color: #72537d; font-weight: bold;">
                                    <option value="">Chọn Ngành Hàng</option>
                                @foreach($data_nh as $option)
                                    @if($option->NH_CON != NULL)
                                        @continue
                                    @endif
                                    <option value="{{$option->MA_NH}}">{{$option->TEN_NH}}</option>
                                    @endforeach
                            </select>
                                   
                                </div>
                                
                              
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>

@endsection