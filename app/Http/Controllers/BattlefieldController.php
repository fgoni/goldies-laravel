<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Usuario;

class BattlefieldController extends Controller {

	//
    	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
    public function index() {
        $usuarios = Usuario::all();
        $racestyle = 'greens';
            return view('battlefield', compact('usuarios', 'racestyle'));
        }
}
