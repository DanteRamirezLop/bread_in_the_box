<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utils\Util;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class DealerController extends Controller
{
    protected $util;
    public function __construct(Util $util) {
        $this->util = $util;
    }
    public function index(){
        $is_all = true;
        $items = $this->util->dealers($is_all);
        $page = request()->get('page', 1);
        // Cantidad por página
        $perPage = 20;

        $dealers = new LengthAwarePaginator(
            $items->forPage($page, $perPage),
            $items->count(),
            $perPage,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );

        $dominio = config('app.url');
        $data['seo'] = array(
            'title'         => 'Bread in the box | Become a distribuidor',
            'description'   => 'Scratch Baked Goods for Businesses',
            'keywords'      => 'bread,business',
            'image'         => $dominio.'/images/logo-seo.png',
        );
        $data['dealers'] = $dealers;
        return view('distributors',$data);
    }
}
