<?php

namespace App\Controllers;

class Page extends BaseController
{
	public function about()
	{
		return view('about', [
			'title' => 'Halaman About',
			'content' => 'Ini adalah halaman about menjelaskan isi halaman ini.'
		]);
	}
	
	public function contact()
	{
		echo "Ini halaman Contact";
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