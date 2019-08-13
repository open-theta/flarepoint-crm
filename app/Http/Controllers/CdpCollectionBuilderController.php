<?php

namespace App\Http\Controllers;

use Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Profile Data Collection controller
 */
class CdpCollectionBuilderController extends Controller
{
    
    public function __construct(
    ) {
       
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cdp-collection.index');
    }

    /**
     * Build CDP Profile Data Collection using JavaScript Tag or Pixel Tag (for websites and web apps)
     */
    public function byTagging()
    {
        return view('cdp-collection.by-tagging');
    }

    /**
     * Build CDP Profile Data Collection using API endpoint (for Mobile Native Apps and IoT apps)
     */
    public function byApiEndpoint()
    {
        return view('cdp-collection.by-api-endpoint');
    }

    /**
     * Build CDP Profile Data Collection using uploading 3rd-party data
     */
    public function byProfileUploader()
    {
        return view('cdp-collection.by-profile-uploader');
    }

    /**
     * Build CDP Profile Data Collection using importing Persona Profile from FastData.media
     */
    public function byProfileImporter()
    {
        return view('cdp-collection.by-profile-importer');
    }

    
}
