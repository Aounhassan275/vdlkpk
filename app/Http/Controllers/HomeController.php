<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\License;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    public $directory;

    public function __construct()
    {
        $this->directory = env('FRONTEND','front');
    }
    
    public function home(Request $request)
    {
        return view($this->directory.'.home.index');
    }
    public function how_to_apply(Request $request)
    {
        return view($this->directory.'.how_to_apply.index');
    }
    public function contact_us(Request $request)
    {
        return view($this->directory.'.contact_us.index');
    }
    public function download(Request $request)
    {
        return view($this->directory.'.download.index');
    }
    public function MessageStore(Request $request)
    {
        Message::create($request->all());
        toastr()->success('Message Send To Support Successfully!');
        return redirect()->back();
    }
    public function verifyLicense(Request $request)
    {
        // dd(1);
        $setting = Setting::find(1);
        if($request->cnic)
        {
            $license = License::where('cnic',$request->cnic)->first();
            if($license == null)
            {
                toastr()->error('No License Found against This CNIC!');
                return back();
            }
            return view($this->directory.'.verify_license.index',compact('license','setting'));
        }elseif($request->pin)
        {
            $license = License::where('pin',$request->pin)->first();
            if($license == null){
                toastr()->warning('License Pin is Invalid!');
                return back();
            }
            $file= public_path(). $license->image;
            $headers = array(
            
                        'Content-Type: application/jpeg',
            
                        );
            
            
            
            return Response::download($file, 'License.jpeg', $headers);
        }
        else{
            $license = null;
            return view($this->directory.'.verify_license.index',compact('license','setting'));
        }
        
    }
    public function DownloadForm($id)
    {
        $form = Form::find($id);
        $file= public_path().'\form/'.$form->file_name;
        $headers = array(
        
                    'Content-Type: application/pdf',
        
                    );
        $name = $form->name.'.pdf';
        return Response::download($file, $name, $headers);
        
    }
}
