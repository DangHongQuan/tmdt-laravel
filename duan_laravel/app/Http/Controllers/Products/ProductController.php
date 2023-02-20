<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Anh_sp;
use App\Models\Ct_sanpham;
use App\Models\Mau_sac;
use App\Models\Nganh_hang;
use App\Models\Phanloai_sp;
use App\Models\San_pham;
use App\Models\Thong_tin_ct;
use App\Models\Thuong_hieu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
public function add_danhmuc(){
      $data_nh=Nganh_hang::all();
      return view('admin.table.add_con_danhmuc',compact('data_nh'));
}
  public function index_sp()
  {
        $viewData = [];
        $viewData['title'] = "Them-san-pham";
        $data_nh=Nganh_hang::all();
        $data_ttct=Thong_tin_ct::all();
        $data_th=Thuong_hieu::all();
        return view('admin.table.add_sanpham',compact('viewData','data_nh','data_ttct','data_th'));
  }

  public function add_sanpham(Request $request)
  {


  
 
$product= new San_pham;


   

$data=$request->all();
$nganhhang_chon=$data['nganhhang'];
$thuonghieu_chon=$data['thuonghieu'];
$nganhhangcon_chon=$data['nganhhangcon'];
$thongtinct_chon=$data['ttct'];
$product->MA_NH=$nganhhang_chon;
$product->MA_TH=$thuonghieu_chon;
$product->NH_CON=$nganhhangcon_chon;
$product->MA_TTCT=$thongtinct_chon;
$product->TEN_SP=$request->input('ten_sp');
$product->MOTA_SP=$request->input('mota_sp');
$product->DVT=$request->input('dvt');
$product->GIA_SP=$request->input("gia_sp");
$product->SL_SP=$request->input('sl_sp');

$loginUser=auth()->user();
$nhanvien=\App\Models\Nhan_vien::find($loginUser->MA_NV);
$product->MA_NV=$nhanvien->MA_NV;

$request->validate([
'avata_sp' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
]);

$image = $request->file('avata_sp');
$imageName = time().'.'.$image->getClientOriginalExtension();
$image->move(public_path('images'), $imageName);

// Lưu đường dẫn hình ảnh vào cơ sở dữ liệu
$imagePath = 'images/'.$imageName;
$product->AVATA_SP=$imagePath;

$product->save();

// Lưu nhiều ảnh sản phẩm vào cơ sở dữ liệu
$images = $request->file('file_anhsp');

    foreach ($images as $imagesp) {
        $imageData = file_get_contents($imagesp);
        $base64 = base64_encode($imageData);
        $imageModel = new Anh_sp();
        $imageModel->MA_SP=$product->MA_SP;
        $imageModel->FILE_ANHSP = $base64;
        $imageModel->save();
    }

    return Redirect::to("admin/danh-sach-san-pham");
}
public function add_danhmuccon(Request $request){
  $data = $request->all();
$dulieuchon = $data['nganhhangchon'];
  $them_danhmuc=new Nganh_hang;
  $them_danhmuc->TEN_NH=$request->input('danhmuccon');
  $them_danhmuc->NH_CON=$dulieuchon;
  $them_danhmuc->save();
  return Redirect::to("admin/danh-sach-nganh-hang");

}

public function dssanpham(){
  // $sanpham=San_pham::all();
  $ctsp=Ct_sanpham::with('Sanpham','Phanloai','Mausac')->get();
  // $phanloai=Phanloai_sp::all();
  // $mausac=Mau_sac::all();
  return view("admin.table.ds_sanpham")->with('ctsp',$ctsp);
}

}


