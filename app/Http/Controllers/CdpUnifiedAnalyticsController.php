<?php

namespace App\Http\Controllers;

use Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/** 
* CDP Customer Unified Data Analytics
*/
class CdpUnifiedAnalyticsController extends Controller
{
    
    public function __construct(
    ) {
       
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cdp-unification.index');
    }

    // data collection

    /**
     *  all created data collections
     */
    public function collections()
    {
        return view('cdp-unified-analytics.collections');
    }

    /**
     * 
     */
    public function collection($collectionId)
    {
        $data = ['collectionId'=>$collectionId];
        return view('cdp-unified-analytics.collection-report', $data);
    }

    public function profiles()
    {
        # code...
        return view('cdp-unified-analytics.profiles');
    }


    public function profile($profileId)
    {
        # code...
        $data = ['profileId'=>$profileId];
        return view('cdp-unified-analytics.profile-report',$data);
    }

    //marketing campaign

    /**
     * 
     */
    public function campaigns()
    {
        return view('cdp-unified-analytics.campaigns');
    }

    /**
     * 
     */
    public function campaign()
    {
        return view('cdp-unified-analytics.campaign');
    }
   

    //business brand

    /**
     * 
     */
    public function brands()
    {
        return view('cdp-unified-analytics.brands');
    }

    /**
     * 
     */
    public function brand()
    {
        return view('cdp-unified-analytics.brand');
    }

    //business brand

    /**
     * 
     */
    public function products()
    {
        return view('cdp-unified-analytics.products');
    }

    /**
     * 
     */
    public function product()
    {
        return view('cdp-unified-analytics.product');
    }

    
}
