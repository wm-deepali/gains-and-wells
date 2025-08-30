<?php

namespace App\Helpers;
use Illuminate\Http\Request;
use App\Models\SeoMeta;
use App\Models\SectionSetting;
use App\Models\Faq;
use App\Models\Service;
use App\Models\Country;
use App\Models\Page;

class Helper
{
    public static function getSEOData($page)
    {
        $seo = '';
        if($page !='')
        {
            $seo = SeoMeta::where('page_slug', $page)->first();
            if(isset($seo) && !empty($seo))
            {
                return $seo;
            }
            else
            {
                return $seo;
            }
        }
        else
        {
            return $seo;
        }
    }
    public static function getpagefaq($page)
    {
        
        $faqs = '';
        if($page !='')
        {
            $pageFaq = SectionSetting::where('page_slug', $page)->first();
            // dd($pageFaq->toArray());
            
            if(isset($pageFaq) && !empty($pageFaq))
            {
                if($pageFaq->is_show_faq_form !='' && $pageFaq->is_show_faq_form == "yes")
                {
                    if($pageFaq->faq_type == "page-based")
                    {
                        $faqs = Faq::where('page_id', $pageFaq->faq_id)->get();
                    }
                    else
                    {
                        $faqs = Faq::where('is_default', 'yes')->get();
                        
                    }
                }
            }
        }
            return $faqs;    
               
    }
    public static function isMarqueShow($page)
    {
        
        $mshow = 'no';
        if($page !='')
        {
            $section = SectionSetting::where('page_slug', $page)->first();
            
            if(isset($section) && !empty($section))
            {
                 $mshow = $section->is_show_logo_marque;
            }
        }
            return $mshow;    
               
    }
    public static function isBlogShow($page)
    {
        
        $mshow = 'no';
        if($page !='')
        {
            $section = SectionSetting::where('page_slug', $page)->first();
            
            if(isset($section) && !empty($section))
            {
                 $mshow = $section->is_show_blog_section;
            }
        }
            // dd($mshow);
            return $mshow;
               
    }
    public static function isTestimonialShow($page)
    {
        
        $mshow = 'no';
        if($page !='')
        {
            $section = SectionSetting::where('page_slug', $page)->first();
            
            if(isset($section) && !empty($section))
            {
                 $mshow = $section->is_show_testimonial;
            }
        }
            return $mshow;    
               
    }
    public static function getServices()
    {
        $services = Service::all();
        
            return $services;    
               
    }
    public static function getCountry()
    {
        $countries = Country::all();
        
            return $countries;    
               
    }
    
    public static function getCountryPhoneCode()
    {
        $phonecodes = Country::select('id','phonecode', 'name')->where('phonecode', '!=', 0)->where('show_front', '=', 1)->get();
        
            return $phonecodes;    
               
    }
    
    public static function getCurrentPage()
    {
        $pageId="";
        $slug = request()->segment(count(request()->segments()));
       if (request()->url() === url('/')) 
        {
            $slug = 'home';
        }
        
        $page = Page::where('slug', $slug)->first();
        if(isset($page) && !empty($page))
        {
            return $page->id;    
        }
            
    }
    
}