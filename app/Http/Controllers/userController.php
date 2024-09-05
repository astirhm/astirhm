<?php
namespace App\Http\Controllers;
// use app\model\User;

use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function keranjang(Request $request){
       $user = auth()->user();
       $data['produk']= product::find($request->id);
       return view('user-keranjang',compact('user'),$data);
    }
    public function checkout(Request $request){
        $user = auth()->user();
        $data['produk']= product::find($request->id);
        return view('user-checkout',compact('user'),$data);
     }
    public function shop(Request $request){
        $user = auth()->user();
        $data['produk'] = product::find( $request->id);
        return view('user-shop',compact('user'),$data);
    }
    public function auth(Request $request){
        $validate = $request->validate([
            'email'=> ['required','email'],
            'password'=>['required']
        ]);
        if(Auth::attempt($validate)){
            return redirect('/user');
        }
        return redirect()->back()->with('pesanlogin', "maaf,login anda gagal");
    }
    public function user(Request $request){
        $data['user']=User::all();
        $data['produk']=product::all();
        $data['total_user']=$data['user']->count();
        // dd($data['produk']);
        return view('user', $data);
    }
    function add(){

    }
    public function product()
    {
    return view('/product',);
    }
    public function ceckout(){
        return view ('cekout');
    }


}
