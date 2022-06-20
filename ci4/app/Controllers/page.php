<?php

namespace App\Controllers;

class Page extends BaseController
{
	public function artikel()
	{
		return view('artikel', [
			'title' => 'Halaman Artikel'
		]);
	}	
	public function about()
	{
		return view('about', [
			'title' => 'Halaman About',
			'content' => 'Ini adalah halaman about menjelaskan isi halaman ini.'
		]);
	}
	
	public function contact()
	{
		return view('contact', [
			'title' => 'Halaman Contact'
		]);
	}
	
	public function faqs()
	{
		echo "Ini halaman FAQ";
	}
	
	public function tos()
	{
		echo "ini halaman term of services";
	}
}