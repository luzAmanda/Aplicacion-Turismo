<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Page;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index(Request $request){

        // Fetch departments
        $sectorData['data'] = Page::getSector();
   
        // Load index view
       
        return view('admin.negocio.index')->with("sectorData",$sectorData);
      }
   
      // Fetch records
      public function getTnegocio($sectorid=0){
   
        // Fetch Employees by Departmentid
        $userData['data'] = Page::getSectorTnegocio($sectorid);
        
        echo json_encode($userData);
        exit;
      }
}
