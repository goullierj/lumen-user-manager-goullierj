<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Laravel\Lumen\Routing\Controller;


class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public  function index()
    {
        $users = DB::select('select * from users');
        return view('index', ['users' => $users]);
    }

}
