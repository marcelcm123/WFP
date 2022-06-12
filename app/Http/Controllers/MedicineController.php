<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;
use DB;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function front_index(){
        $medicine = Medicine::all();
        return view('frontend.product',compact('medicine'));
    }
    public function addToCart($id){
        $p=Medicine::find($id);
        $cart=session()->get('cart');
        if(!isset($cart[$id])){
            $cart[$id]=[
                "name"=>$p->generic_name,
                "quantity"=>1,
                "price"=>$p->price,
                "photo"=>"http://placehold.it/500x300"
            ];
        }else {
         $cart[$id]['quantity']++;   
        }
        //if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
            session()->put('cart',$cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        //if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" =>$p->generic_name,
            "quantity" =>1,
            "price" =>$p->price,
            "photo" =>"http://placehold.it/500x300"
        ];

        sesion()->put('cart',$cart);
        return redirect()->back()->with('succes','Product added to cart successfully!');
    }
    public function cart(){
        return view('frontend.cart');
    }


    public function index()
    {   //untuk Query dengan RAW
        //$queryRaw = DB::select(DB::raw("select * from medicines"));
        //untuk Query Builder
        //$queryBuilder = DB::table('medicines')->get();
        //untuk Query dengan Model
        //$queryModel = Medicine::all();

        //cara 1 dengan sintaks compact. Berarti variable queryBuilder nanti dikenali
        //pada Controller dan View
        //return view('medicine.index',compact('queryBuilder'));

        //cara 2 dengan sintaks array. Berarti variable queryBuilder nanti hanya dikenali
        //pada Controller dan pada View diubah nama menjadi data
        //return view('medicine.index',['data'=>$queryBuilder]);

        $list = DB::table('medicines as obat')
        ->select('obat.id','obat.generic_name','obat.form','obat.restriction_formula','obat.price','obat.description','obat.faskes1','obat.faskes2','obat.faskes3','kat.name')
        ->join('categories as kat','kat.id','=','obat.category_id')
        ->get();
        return view('medicine.index',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicine.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Medicine();
        $data->generic_name=$request->get('generic_name');
        $data->form=$request->get('form');
        $data->restriction_formula=$request->get('restriction_formula');
        $data->price=$request->get('price');
        $data->description=$request->get('description');
        $data->faskes1=$request->get('faskes1');
        $data->faskes2=$request->get('faskes2');
        $data->faskes3=$request->get('faskes3');
        $data->category_id=$request->get('category_id');
        $data->save();
        return redirect()->route('medicine.index')->with('status','Medicine is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        $data = $medicine;
        return view('medicine.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        $medicine->name=$request->get('name');
        $medicine->address=$request->get('address');
        $medicine->save();
        return redirect()->route('medicine.index')->with('status','Medicine data is changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
         try{
            $supplier->delete();
            return redirect()->route('medicine.index')->with('status','Data Medicine berhasil dihapus');
        }catch(\PDOException $e){
            $msg = "Data gagal dihapus. Pastikan data child sudah hilang atau tidak berhubungan";
            return redirect()->route('medicine.index')->with('error',$msg);

        }
    }
    public function showInfo(){
        $result=Medicine::orderBy('price','DESC')->first();
        return response()->json(array(
            'status'=>'oke',
            'msg'=>"<div class='alert alert-info'>
            Did you know? <br>The most expensive product is ". $result->generic_name . "</div>"
        ),200);}
    }

