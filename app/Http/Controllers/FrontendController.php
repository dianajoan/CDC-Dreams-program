<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Session\Session;
use Newsletter;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Girl;
use App\Models\Event;
use App\Models\Banner;
use App\Models\Material;
use App\Models\Progress;
use App\Models\Skill;
use Illuminate\Support\Facades\App;
use Spatie\Permission\Models\Role; // Use Spatie's Role model
use Spatie\Permission\Traits\HasRoles; // Use Spatie's HasRoles trait

class FrontendController extends Controller
{
    use HasRoles; // Use the HasRoles trait

    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }

    public function index(Request $request){
        return redirect()->route($request->user()->role);
    }

    public function home(){
        $banners=Banner::where('status','active')->limit(3)->orderBy('id','ASC')->get();
        $materials=Material::where('status','active')->limit(3)->orderBy('id','ASC')->get();
        $events=Event::where('status','active')->limit(3)->orderBy('id','ASC')->get();
        return view('frontend.index')
                ->with('banners',$banners)
                ->with('materials',$materials)
                ->with('events',$events);
                
    }   

    //Girl

    public function girl(){
        $girl=Girl::where('status','active')->orderBy('id','ASC')->get();
        return view('frontend.pages.girl')
            ->with('girls',$girl);
    }

    public function girlDetail($slug){
        $girl=Girl::getGirlBySlug($slug);
        return view('frontend.pages.girl-detail')
                ->with('girl',$girl);
    }

    //Event

    public function event(){
        $event=Event::where('status','active')->orderBy('id','ASC')->get();
        return view('frontend.pages.event')
            ->with('events',$event);
    }

    public function eventDetail($slug){
        $event=Event::getEventBySlug($slug);
        return view('frontend.pages.event-detail')
                ->with('event',$event);
    }

    //Progress

    public function progress(){
        $progress=Progress::where('status','active')->orderBy('id','ASC')->get();
        return view('frontend.pages.progress')
            ->with('progresses',$progress);
    }

    public function progressDetail($slug){
        $progress=Progress::getProgressBySlug($slug);
        return view('frontend.pages.progress-detail')
                ->with('progress',$progress);
    }

     //Material

     public function material(){
        $material=Material::where('status','active')->orderBy('id','ASC')->get();
        return view('frontend.pages.material')
            ->with('materials',$material);
    }

    public function materialDetail($slug){
        $material=Material::getMaterialBySlug($slug);
        return view('frontend.pages.material-detail')
                ->with('material',$material);
    }

    //Skill

    public function skill(){
        $skill=Skill::where('status','active')->orderBy('id','ASC')->get();
        return view('frontend.pages.skill')
            ->with('skills',$skill);
    }

    public function skillDetail($slug){
        $skill=Skill::getSkillBySlug($slug);
        return view('frontend.pages.skill-detail')
                ->with('skill',$skill);
    }
    
}
