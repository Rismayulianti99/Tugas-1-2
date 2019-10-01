<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class KategoriGaleriController extends Controller
{
    public function index(){

    	$listKategoriGaleri=KategoriGaleri::all();

    	return view ('kategori_galeri.index',compact('listKategoriGaleri'));
    	//return view (view: 'kategori_artikel.index')->with('data',$listKategoriArtikel);
	}
		public function show($id){
		//Elequent
		//$KategoriArtikel=KategoriArtikel::where('id',$id)->first(); //select *from kategori_artikel where id=$id limit 1
		$KategoriGaleri=KategoriGaleri::find($id);

		return view('kategori_galeri.show',compact('KategoriGaleri'));
	}
}
