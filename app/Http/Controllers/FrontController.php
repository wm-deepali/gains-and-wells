<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\OTP;
use App\Models\Package;
use App\Models\Page;
use App\Models\Blog;
use App\Models\BlogCategory;

class FrontController extends Controller
{
    public function home()
    {
        $page = Page::where('slug', 'home')->firstOrFail();

        $packages = Package::where('page_id', $page->id)
                       ->where('show_on_home', 1)
                       ->get();
// dd($packages->toArray());
   
        return view('front.index',compact('page', 'packages'));
    }
    

    public function aboutUs()
    {
        return view('front.about-us');
    }

  
public function blogs()
{
    $blogs = Blog::with('blogCategory')
        ->where('status', 'active')
        ->orderBy('publish_date', 'desc')
        ->paginate(6);

    $categories = BlogCategory::where('status', 'active')->get();

    $trendingPosts = Blog::where('status', 'active')
        ->orderBy('publish_date', 'desc')
        ->take(3)
        ->get();

    return view('front.blog', compact('blogs', 'categories', 'trendingPosts'));
}

public function blogDetails($slug)
{
    $blog = Blog::with('blogCategory')
        ->where('url', $slug)
        ->where('status', 'active')
        ->firstOrFail();

    $categories = BlogCategory::where('status', 'active')->get();

    $trendingPosts = Blog::where('status', 'active')
        ->orderBy('publish_date', 'desc')
        ->take(3)
        ->get();

    return view('front.blog-detail', compact('blog', 'categories', 'trendingPosts'));
}

    public function contactUs()
    {
        return view('front.contact-us');
    }
  
    
    public function career()
    {
        return view('front.career');
    }

    public function markets()
    {
         return view('front.markets');
    }

    
    public function education()
    {
        return view('front.education');
    }

   
    
    public function verifyOTP(Request $request)
    {
        $mobile = $request->mobile;
        $otp = $request->otp;

        $isValid = OTP::verifyOTP($mobile, $otp);
        if($isValid){
            //OTP::deleteOTP($mobile, $otp);
            return response()->json(['success'=>true,'isValid' => $isValid]);
        }else{
            return response()->json(['success'=>false,'isValid' => $isValid]);
        }
        
    }
    public function sendMobileOTP(Request $request)
    {
        // Generate a six-digit OTP
        $validator = Validator::make($request->all(), [
			'mobile'		=>'required|regex:/^[6-9]\d{9}$/',
		]);
		if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => 'Invalid Mobile number'
            ], 422);
        }
        $otp = rand(100000, 999999);
        $mobile_number = $request->mobile;
        OTP::where('mobile', $mobile_number)->delete();
    
        // Assuming you have a model named OTP for managing OTPs
        OTP::create([
            'mobile' => $mobile_number,
            'otp' => $otp,
            'expiry' => now()->addMinutes(10),
            ]);
    
    
   
    //     $message = "{$otp} is the OTP to verify your Mobile Number at https://ashtonwell.com. Please do not share this OTP with anyone. Regards Ashton & Well";
       
    //     $dlt_id = '1707175291422915659';
    //     $pe_id = '1701175290968159932';
    //     $request_parameter = array(
    //         'authkey'   => '449195AevVjn7d6813877aP1',
    //         'mobiles'   => $mobile_number,
    //         'sender'    => 'ASHTWE',
    //         'message'   => urlencode($message),
    //         'route'     => '4',
    //         'country'   => '91',
    //         //'unicode'   => '1',
    //     );
    //     $url = "http://sms.webmingo.in/api/sendhttp.php?";
    //     foreach($request_parameter as $key=>$val)
    //     {
    //         $url.=$key.'='.$val.'&';
    //     }
    //   $url .= 'DLT_TE_ID=' . $dlt_id . '&PE_ID=' . $pe_id;
    //     $url = rtrim($url, "&");
      
        try {
            // $ch = curl_init();
            // curl_setopt($ch, CURLOPT_URL, $url);
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            // //get response
            // $output = curl_exec($ch);
            
            // curl_close($ch);
            return response()->json([
            'success' => true,
            'message' => 'Otp Successfully Send on Your mobile number!',
        ]);
            // return true;
        } catch (\Exception $e) {
            //dd($e->getMessage());
        }
    }

}
