<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Category_Product;

class ResourceController extends Controller
{

  public function ppl_index(){

      $ppl = DB::table('products')
                            ->join('category_products','products.category_no','=','category_products.category_no')
                            ->join('users','users.user_no','=','products.company_no')
                            ->leftjoin('upload_files',function ($join){
                               $join->on('products.product_no','=','upload_files.serial_no')
                                   ->where([
                                     ['upload_files.table_type','=','ppl_products'],
                                     ['upload_files.use_type','=','title'],
                                   ]);
                           })->get();

      $ppl_category = DB::table('category_products')->orderBy('category')->get();
      return view('resource.ppl',[
        'ppls'=> $ppl,
        'ppl_categorys'=>$ppl_category
      ]);
    }


  public function equipment_index(){

    $equipment = DB::table('rental_equipments')
                ->leftjoin('upload_files',function ($join){
                $join->on('rental_equipments.equipment_no','=','upload_files.serial_no')
                  ->where([
                            ['upload_files.table_type','=','rental_equipments'],
                            ['upload_files.use_type','=','title'],
                        ]);
              })->paginate(16);

    return view('resource.equipment',[
      'equipments'=> $equipment,
    ]);

  }

  public function location_index(){

    $location = DB::table('locations')
                          ->join('category_locations','locations.category_no','=','category_locations.category_no')
                          ->leftjoin('upload_files',function ($join){
                               $join->on('locations.location_no','=','upload_files.serial_no')
                                   ->where([
                                     ['upload_files.table_type','=','locations'],
                                     ['upload_files.use_type','=','title'],
                                   ]);
                          })->get();

    return view('resource.location',[
      'locations'=> $location,
    ]);

  }

  public function location($location_no){
    $location = DB::table('locations')
                ->join('category_locations','category_locations.category_no','=','locations.category_no')
                ->where('locations.location_no',$location_no)
                ->get();
    $location_img = DB::table('locations')
                ->join('category_locations','locations.category_no','=','category_locations.category_no')
                ->leftjoin('upload_files',function ($join){
                  $join->on('locations.location_no','=','upload_files.serial_no')
                  ->where([
                            ['upload_files.table_type','=','locations'],
                            ['upload_files.use_type','=','title'],
                          ]);
                      })->where('locations.location_no',$location_no)->get();
                // var_dump($location_img);exit;
    return view('resource.placeinfo',[
      'locations' => $location,
      'location_imgs' => $location_img
    ]);
  }

  public function ppl_view($product_no){
      $product= DB::table('products')
                ->join('users', 'user_no','=','products.company_no')
                ->where('products.product_no',$product_no)
                ->get();
      return view('resource.ppl_view', [
        'products' => $product
      ]);
    }


  public function company_ppl_write_category(){
    $category = DB::table('category_products')->get();
    // var_dump($category); exit;
    return view('resource.resource_company_ppl_write', [
      'categorys' => $category
    ]);
  }

  public function company_ppl_write(Request $request){
      $user = Auth::user();
      $user_no= $user->user_no;
      $product = new Product([
        'company_no' => $user_no,
        'product_name'=> $request->get('product_name'),
        'category_no'=> $request->get('category_no'),
        'introduce'=> $request->get('introduce')
      ]);
      $product->save();

      $product_no = DB::table('products')->max('product_no');
      $file = $request->file('image');

      if($file == null){
        $upload_file = new Upload_File([
          'table_type' => 'product',
          'serial_no' => $product_no,
          'use_type' => 'title',
          'sequence' => 1,
          'original_name' => '',
          'save_name' => '',
          'path' => '/images/resource',
          'type' => '',
        ]);
      $upload_file->save();
      }else{
      //파일업로드
      //파일 확장자
      $extension = $request->file('image')->getClientOriginalExtension();
      //파일 원본이름
      $original_name = $request->file('image')->getClientOriginalName();
      //파일 저장이름   -  양식 tabletype_usetype_serialno.extension
      $save_name = "product_title_".$product_no.".".$extension;
      //파일 업로드  storage/app/images/drama
      $path = $request->file('image')->storeAs('images/resource',$save_name);


      $date= date('Ymd');
      $upload_file = new Upload_File([
        'table_type' => 'product',
        'serial_no' => $product_no,
        'use_type' => 'title',
        'sequence' => 1,
        'original_name' => $original_name,
        'save_name' => $save_name,
        'date' => $date,
        'path' => '/images/resource',
        'type' => $extension,
      ]);

      $upload_file->save();

      return redirect()->route('ppl_main');
    }
  }
    public function ppl_category_sort($category_no){
      $ppl_category = DB::table('category_products')->get();
      $ppl = DB::table('products')
                       ->join('category_products','products.category_no','=','category_products.category_no')
                       ->join('users','users.user_no','=','products.company_no')
                       ->leftjoin('upload_files',function ($join){
                        $join->on('products.product_no','=','upload_files.serial_no')
                        ->where([
                                  ['upload_files.table_type','=','ppl_products'],
                                  ['upload_files.use_type','=','title'],
                        ]);
                      })->where('products.category_no',$category_no)->get();
    return view('resource.ppl_sort', [
    'ppl_categorys' => $ppl_category,
    'ppls' => $ppl
      ]);
    }

}
