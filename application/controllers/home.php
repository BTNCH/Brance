<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

	public function contact()
	{
		$data['name']="<h1>WOW !</h1>";
		return view('contact.php',$data);
	}

	public function Page2()
	{
		return view('Page2.php');
	}

	public function Page3()
	{
		return view('Page3.php');
	}

	public function Page4()
	{
		return view('Page4.php');

	}

	public function Page5()
	{
		return view('Page5.php');
	}



}
