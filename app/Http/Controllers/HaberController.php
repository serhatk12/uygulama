<?php

namespace App\Http\Controllers;

use App\Haber;
use DebugBar\DebugBarException;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HaberController extends Controller
{
    public function index()
    {
        $haberler=DB::table('haberler as h')
            //->select('h.baslik','h.icerik','u.id as ids','h.id')
            ->join('users as u','u.id','=','h.user_id')
            //->where('u.id',1) kullanıcıya özel veri çekme
            ->get();
        //dd($haberler);
        return view('haberler')->with('haberler',$haberler);
    }

    public function haber_ekle()
    {
        return view('haber_ekle');
    }

    public function haber_kaydet(Request $request)
    {
        $request->merge(['user_id'=>Auth::user()->id,'slug'=>str_slug($request->baslik)]);
        Haber::create($request->all());
        return "başarılı";
    }
    
    public function haber_detay($slug)
    {
        $haber =Haber::where('slug',$slug)->first();
        //dd($haber);
        return view('haber_detay')->with('haber',$haber);
    }

    public function haberlerim()
    {
        $haber=Haber::where('user_id',Auth::user()->id)->get();
        return view('haberlerim')->with('haberler',$haber);
    }

    public function haber_duzenle($slug)
    {
        $haber=Haber::where('slug',$slug)->first();
        return view('haber_duzenle')->with('haber',$haber);
    }

    public function haber_duzenleme(Request $request,$slug)
    {
        $haber=Haber::where('slug',$slug)->first()->update($request->all());
//        $haber->baslik=$request->baslik;
//        $haber->icerik=$request->icerik;
//        $haber->save();
        return 'başarılı';
    }
}
