<?php

namespace App\Http\Controllers;

use Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/** 
* CDP Customer Activation
*/
class CdpCustomerActivationController extends Controller
{
    
    public function __construct(
    ) {
       
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cdp-activation.index');
    }

     /**
     *  
     */
    public function personalization()
    {
        return view('cdp-activation.by-personalization');
    }

    /**
     *  
     */
    public function byEmailMarketing()
    {
        return view('cdp-activation.by-email-marketing');
    }

    /**
     * 
     */
    public function bySmsMarketing()
    {
        return view('cdp-activation.by-sms-marketing');
    }

    //marketing campaign

    /**
     * 
     */
    public function bySocialMarketing()
    {
        return view('cdp-activation.by-social-marketing');
    }

    /**
     * 
     */
    public function byRetargeting()
    {
        return view('cdp-activation.by-retargeting');
    }

    
    
}
