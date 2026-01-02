<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Utils\Util;

class PageController extends Controller
{
    protected $util;

    public function __construct(Util $util) {
        $this->util = $util;
    }

     public function about(){
        //Metadata seo
        $dominio = config('app.url');
        $data['seo'] = array(
            'title'         => 'Bread in the box | About us',
            'description'   => 'BAKERY ECOMERCE',
            'keywords'      => 'Bread,Bakery,Colorado',
            'image'         => $dominio.'/images/logo-seo.png',
        );
        return view('about-us',$data);
    }

    public function contact(){
        $dominio = config('app.url');
        $data['seo'] = array(
            'title'         => 'Bread in the box | Contact us',
            'description'   => 'BAKERY ECOMERCE',
            'keywords'      => 'Bread,Bakery,Colorado',
            'image'         => $dominio.'/images/logo-seo.png',
        );
        return view('contact-us',$data);
    }

    public function questions(){
        $dominio = config('app.url');
        $data['seo'] = array(
            'title'         => 'Bread in the box | Frequent questions',
            'description'   => 'BAKERY ECOMERCE',
            'keywords'      => 'Bread,Bakery,Colorado',
            'image'         => $dominio.'/images/logo-seo.png',
        );
        return view('question',$data);
    }

    public function becomeDealer(){
        $dominio = config('app.url');
        $data['seo'] = array(
            'title'         => 'Bread in the box | Become a distribuidor',
            'description'   => 'Scratch Baked Goods for Businesses',
            'keywords'      => 'bread,business',
            'image'         => $dominio.'/images/logo-seo.png',
        );
        $data['dealears'] = $this->util->dealers();
        return view('becomeDealer',$data);
    }

    public function careers(){
        return redirect('https://recruiting.paylocity.com/Recruiting/Jobs/All/16bfa118-8de6-480e-ae06-5a633fe59ea0');
    }

       public function conditions()
    {
        $dominio = config('app.url');
        $data['seo'] = array(
            'title'         => 'Bread in the box | Terms and conditions',
            'description'   => 'bread,Denver',
            'keywords'      => 'bread',
            'image'         => $dominio.'/images/logo-seo.png',
        );
        return view('conditions',$data);
    }
}
