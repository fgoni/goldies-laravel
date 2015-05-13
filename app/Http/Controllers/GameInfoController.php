<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class GameInfoController extends Controller {

	//
    public function index() {
        $racestyle = 'greens';
            return view('gameinfo')->with('racestyle', $racestyle);
        }
}
