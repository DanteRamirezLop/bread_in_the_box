<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use App\Utils\Util;




class HomeController extends Controller
{
    protected $util;

    public function __construct(Util $util) {
        $this->util = $util;
    }

    public function index(){
        $nowMonth = Carbon::now()->format("m"); //obtener el mes actual
        $month = (int)$nowMonth; //convertir el mes de string a int
        $data['breadTheMonth'] = Product::where('product_custom_field1',$month)->first();
        $data['month'] = Carbon::now()->format("F"); //Nombre del mes actual
        //Obtengo el producto por categoria en query
        $productsQuery =  Product::query()->whereHas('category', function(Builder $query){
            $query->where('name','Bread');
        });
        //Filtro por query tambien el atributo de pan especial, si es null o '' vacio es un pan normal
        $products = $productsQuery->where(function($query){
            $query->whereNull('product_custom_field1')->orWhere('product_custom_field1','')->get();
        });
        $data['products'] = $products->get();
        //Metadata seo
        $dominio = config('app.url');
        $data['seo'] = array(
            'title'         => 'Bread home delivery | Bread in the box',
            'description'   => 'Fresh bread delivery in Denver. Order online any of our breads in our web site.',
            'keywords'      => 'Bread,Bakery,Colorado,Castel Rock',
            'image'         => $dominio.'/images/logo-seo.png',
        );

        $data['dealears'] =  $this->util->dealers();

        return view('home',$data);
    }
}
