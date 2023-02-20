<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Nganh_hang;
use App\Models\Quang_cao;
use App\Models\Thuong_hieu;
use App\Models\Thong_tin_ct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NganhhangController extends Controller
{


    public function index()
    {
        //   $viewData = [];
        //   $viewData['title'] = "Them-Nganh-Hang";
          return view('admin.table.add_nganhhang');
    }
    public function add_nganhhang(Request $request)
    {
        $nganhhang = new Nganh_hang;
        $nganhhang->TEN_NH = $request->input('nganhhang');
        $request->validate([
            'anhnganhhang' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $image_NH = $request->file('anhnganhhang');
        $imageName_NH = time().'.'.$image_NH->getClientOriginalExtension();
        $image_NH->move(public_path('images'), $imageName_NH);
        
        // Lưu đường dẫn hình ảnh vào cơ sở dữ liệu
        $imagePath_NH = 'images/'.$imageName_NH;
        $nganhhang->ANH_NH=$imagePath_NH;
        $nganhhang->save();


        $thuonghieu = new Thuong_hieu;
        $thuonghieu->TEN_TH = $request->input('thuonghieu');
        $request->validate([
            'anhthuonghieu' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $image_TH = $request->file('anhthuonghieu');
        $imageName_TH = time().'.'.$image_TH->getClientOriginalExtension();
        $image_TH->move(public_path('images'), $imageName_TH);
        
        // Lưu đường dẫn hình ảnh vào cơ sở dữ liệu
        $imagePath_TH = 'images/'.$imageName_TH;
        $thuonghieu->ANH_TH=$imagePath_TH;

        $thuonghieu->save();

        
            // Lấy dữ liệu từ tất cả các input field
            // $data = $request->all();
     
            // Lấy số hàng và số cột
            $thongtinArr = $request->thongtin;

            foreach($thongtinArr as $item) {
                $thongtin = new Thong_tin_ct;

                $thongtin->MA_NH = $nganhhang->MA_NH;
                $thongtin->MA_TH = $thuonghieu->MA_TH;


                $thongtin->TEN_TTCT = $item["ten"];
                $thongtin->NOIDUNG_OPTION = $item["noidung"];

                $thongtin->save();
            }
            return Redirect::to("/admin/danh-sach-nganh-hang");

        // return view('admin.table.ds_nganhhang');

    }
    public function show(){
       $data = Thong_tin_ct::with('thuonghieu','nganhhang')->get();
      
       return view ("admin.table.ds_nganhhang",compact('data'));
      //   return view ("admin.table.ds_nganhhang")->with(['data'=>$data]); 
            
    

    }

    public function quangcao(){
        $data_th=Thuong_hieu::all();

        return view('admin.table.add_quangcao')->with('data_th',$data_th);
    }
    public function quangcaoadd(Request $request){
        $data=$request->all();

   $thuonhieu_chon=$data['thuonghieu'];
        $quangcao=new Quang_cao;


   $request->validate([
    'anh_qc' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
]);

$image = $request->file('anh_qc');
$imageName = time().'.'.$image->getClientOriginalExtension();
$image->move(public_path('images'), $imageName);

// Lưu đường dẫn hình ảnh vào cơ sở dữ liệu
$imagePath = 'images/'.$imageName;
$quangcao->ANH_QC=$imagePath;

$quangcao->MA_TH=$thuonhieu_chon;
$quangcao->LUACHON=$request->input('datqc');
$quangcao->LINK_ANH=$request->input("link_qc");
$quangcao->THOI_HAN=$request->input("thoigian");
$quangcao->save();

return Redirect::to("/admin/danh-sach-quang-cao");
    }
    public function dsquangcao(){
        $data_qc=Quang_cao::all();
        $data_th=Thuong_hieu::all();
        return view("admin.table.ds_quangcao")->with("data_qc",$data_qc)->with('data_th',$data_th);
    }
    public function deleteqc($ID_QC){
        $deleteqc=Quang_cao::find($ID_QC);
        $deleteqc->delete();
        return Redirect::to("/admin/danh-sach-quang-cao");
    }
    public function editqc($ID_QC){
        $data_qc=Quang_cao::find($ID_QC);
        $data_th=Thuong_hieu::all();

        return view('admin.table.edit_quangcao')->with('data_qc',$data_qc)->with('data_th',$data_th);
    }
    public function updataqc(Request $request, $ID_QC){
    $quangcao=Quang_cao::find($ID_QC);
    $data=$request->all();
    $data_th=$data['thuonghieu'];
    $request->validate([
        'anh_qc' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    
    $image = $request->file('anh_qc');
    $imageName = time().'.'.$image->getClientOriginalExtension();
    $image->move(public_path('images'), $imageName);
    
    // Lưu đường dẫn hình ảnh vào cơ sở dữ liệu
    $imagePath = 'images/'.$imageName;
    $quangcao->ANH_QC=$imagePath;
    $quangcao->MA_TH=$data_th;
    $quangcao->LINK_ANH=$request->input('link_qc');
    $quangcao->LUACHON=$request->input('datqc');
    $quangcao->THOI_HAN=$request->input('thoigian');
    $quangcao->LINK_ANH=$request->input('link_qc');
$quangcao->save();

return Redirect::to("/admin/danh-sach-quang-cao");

    
    }
}
