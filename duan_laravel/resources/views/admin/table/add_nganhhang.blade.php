@extends('./layouts.admin_layout')
@section('contents')
<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Ngành Hàng
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="them-moi-nganh-hang" method="post" enctype="multipart/form-data" >
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Ngành Hàng</label>
                                    <input type="text" class="form-control" name="nganhhang" id="exampleInputEmail1" value="Nhập Tên Ngành Hàng" onfocus="this.value=''">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Ảnh Ngành Hàng</label>
                                    <input type="file" id="exampleInputFile" name="anhnganhhang">
                                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Thương Hiệu</label>
                                    <input type="text" class="form-control" name="thuonghieu" id="exampleInputEmail1" value="Nhập Tên Thương Hiệu" onfocus="this.value=''">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Ảnh Thương Hiệu</label>
                                    <input type="file" id="exampleInputFile" name="anhthuonghieu">
                                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                                </div>
                                <div class="form-group ">

                                    <table class="table table-secondary" id="myTable">
                                        
                                        <th>
                                       Tên Chi Tiết Về Sản Phẩm
                                        </th>
                                    
                                        <th>
                                        Thông Tin Trả Lời
                                        </th>
                                        <th><input onclick="addRow()" class="btn btn-success fw-bold text-white" value="Thêm Thuộc Tính"></input></th>
                                       
                                    </table>
                                      <script>
                                        var count = 0;
                                        function addRow() {
                                            // Get table
                                            var table = document.getElementById("myTable");
                                            
                                            // Create new row
                                            var row = table.insertRow(-1);
                                            
                                            // Create new input field in first cell
                                            var cell1 = row.insertCell(0);
                                            var input1 = document.createElement("input");
                                            input1.type = "text";
                                           
                                            input1.value="ví dụ: Xuất Xứ, Chất Liệu,....";
                                        
                                            input1.onfocus = function() {
                                    this.value = "";};
                                            // input1.name = "ten" + count;
                                            input1.name = "thongtin[" + count + "][ten]";
                                            cell1.appendChild(input1);
                                            
                                            // Create new input field in second cell
                                            var cell2 = row.insertCell(1);
                                            var input2 = document.createElement("input");
                                            input2.type = "text";
                                          
                                            input2.value="cách nhau bởi dấy phẩy";
                                        
                                            input2.onfocus = function() {
                                    this.value = "";};
                                            // input2.name ="noidung" + count;
                                            input2.name ="thongtin[" + count + "][noidung]";
                                            cell2.appendChild(input2);
                                            
                                            // Increment count
                                            count++;
                                        }
                                        </script>
                                    
                                      
                                    </div>
                                    
                              
                                <div class="text-center">
                                <button type="submit" class="btn btn-info">Thêm Dữ Liệu</button>
                                </div>
                                
                             
                            </form>
                            </div>
                            </div>

                    
                    </section>

            </div>

@endsection