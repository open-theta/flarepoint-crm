<?php

namespace App\Http\Controllers;

use Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CdpTagController extends Controller
{
    

    public function __construct(
    ) {
       
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('datasources.index');
    }

    /**
     * 
     */
    public function web()
    {
        return view('datasources.web');
    }

     /**
     * 
     */
    public function app()
    {
        return view('datasources.app');
    }

     /**
     * 
     */
    public function uploader()
    {
        return view('datasources.uploader');
    }

    
}
