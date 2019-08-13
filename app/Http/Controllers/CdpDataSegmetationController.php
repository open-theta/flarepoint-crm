<?php

namespace App\Http\Controllers;

use Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * 
 * 
 * 
 * Geographic: by geographical area 
 * Demographic: by population characteristics 
 * Psychographic: classification on the basis of psychological factors 
 * Behavioral: classifying by purchasing behavior
 * 
 * Marketing Knowledge
 * https://www.slideshare.net/zirram/brand-segmentation, 
 * https://www.smartinsights.com/digital-marketing-strategy/customer-segmentation-targeting/segmentation-targeting-and-positioning/
 */
class CdpDataSegmetationController extends Controller
{
    
    public function __construct(
    ) {
       
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cdp-segmetation.index');
    }

    /**
     * List of available segmetations
     */
    public function list()
    {
        return view('cdp-segmetation.list-segment');
    }

    /**
     * create CDP  Data Segmetation
     */
    public function create()
    {
        return view('cdp-segmetation.create-segment');
    }

}
