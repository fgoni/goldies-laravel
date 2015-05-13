<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
                $bonus_rojos = "25% Attack";
                $bonus_verdes = "25% Defense";
                $bonus_azules = "25% Income";
                $bonus_naranjas = "25% Techs";
		return view('home', compact('bonus_rojos', 'bonus_verdes', 'bonus_azules', 'bonus_naranjas'));
	}

}
