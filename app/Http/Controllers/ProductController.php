<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Media;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

class ProductController extends Controller
{
     public function show(Product $product){
        //producto recomendados
        $products = Product::whereNull('product_custom_field1')->orWhere('product_custom_field1','')->get();
        $variation = $product->variation->first();
        $images = Media::where('model_id',$variation->id)->where('model_type','App\Variation')->get();
        //metadata seo
        $dominio = config('app.url');
        $seo = array(
            'title'         => $product->name.' | Bread in the box',
            'description'   => $product->product_custom_field3,
            'keywords'      => 'Bread,Denver'.$product->name,
        );
        return view('products.show', compact('product','seo','products','images'));
    }

    public function orden(){
        $nowMonth = Carbon::now()->format("m"); //obtener el mes actual
        $month = (int)$nowMonth; //convertir el mes de string a int
        $data['breadTheMonth'] = Product::where('product_custom_field1',$month)->first();
        //Obtengo el producto por categoria en query
        $productsQuery =  Product::query()->whereHas('category', function(Builder $query){
            $query->where('name', 'Bread');
        });
        //Filtro por query tambien el atributo de pan especial, si es null o '' vacio es un pan normal
        $products = $productsQuery->where(function($query){
            $query->whereNull('product_custom_field1')->orWhere('product_custom_field1','')->get();
        });
        $data['products'] = $products->get();
        //Metadata seo
        $dominio = config('app.url');
        $data['seo'] = array(
            'title'         => 'Order bread online | Bread in the box',
            'description'   => 'Order online our delicious breads made with quality and fresh ingredients. Visit our website.',
            'keywords'      => 'Bread,Bakery,Colorado',
            'image'         => $dominio.'/images/logo-seo.png',
        );
        return view('products.orden-online',$data);
    }

    public function monthlySpecialtyBreads(){
        $data['products'] = Product::whereNotNull('product_custom_field1')->where('product_custom_field1','<>','')->orderByRaw('CONVERT(product_custom_field1, UNSIGNED) asc')->get();
        $nowMonth = Carbon::now()->format("m"); //obtener el mes actual
        $month = (int)$nowMonth; //convertir el mes de string a int
        $data['month'] = Carbon::now()->format("F");
        $data['months'] = ['','January','February','March','April','May','June','July','August','September','October','November','December'];
        $data['breadTheMonth'] = Product::where('product_custom_field1',$month)->first();
        //Metadata seo
        $dominio = config('app.url');
        $data['seo'] = array(
            'title'         => 'Bread in the box | Special bread of the month',
            'description'   => 'Try our delicious bread of the month',
            'keywords'      => 'Bread,Bakery,Colorado',
            'image'         => $dominio.'/images/logo-seo.png',
        );
        return view('products.monthlySpecialtyBreads',$data);
    }

    public function international(){
        // Lista de productos Internacionales en GRID
        $productsQuery =  Product::query()->whereHas('category', function(Builder $query){
            $query->where('name', 'International bread');
        });
        $productsQuery = $productsQuery->where(function($query){
            $query->whereNull('product_custom_field1')->orWhere('product_custom_field1','')->get();
        });
        $products = $productsQuery->where(function($query){
            $query->whereNull('product_custom_field6')->orWhere('product_custom_field6','')->orWhere('product_custom_field6',2)->get();
        });

        $data['products'] = $products->orderByRaw("
            CASE
                WHEN product_custom_field7 REGEXP '^[0-9]+' THEN 1
                ELSE 2
            END,
            CAST(product_custom_field7 AS UNSIGNED) ASC,
            product_custom_field7 ASC
        ")->get();

        //Mostrar producto con su detall segun combo en el administrador
        $productShow =  Product::query()->whereHas('category', function(Builder $query){
            $query->where('name', 'International bread');
        });
        $productShow = $productShow->where(function($query){
            $query->Where('product_custom_field6',1);
        });
        $data['productShow'] = $productShow->get();

        //Metadata seo
        $dominio = config('app.url');
        $data['seo'] = array(
            'title'         => 'International Breads | Bread in the box',
            'description'   => 'Order online our delicious breads made with quality and fresh ingredients. Visit our website.',
            'keywords'      => 'Bread,Bakery,Colorado',
            'image'         => $dominio.'/images/logo-seo.png',
        );
        return view('products.international-breads',$data);
    }

    public function rentail(){

        $dominio = config('app.url');
        //BREADS OF THE MOUNTH
        $data['BreadsMonths'] = Product::whereNotNull('product_custom_field1')->where('product_custom_field1','<>','')->get();
        $data['months'] = ['January','February','March','April','May','June','July','August','September','October','November','December'];
        //BREADS REGULARS
        //Obtengo el producto por categoria en query
        $regularQuery =  Product::query()->whereHas('category', function(Builder $query){
            $query->where('name','Bread');
        });
        //Filtro por query tambien el atributo de pan especial, si es null o '' vacio es un pan normal
        $regulars = $regularQuery->where(function($query){
            $query->whereNull('product_custom_field1')->orWhere('product_custom_field1','')->get();
        });
        $data['breads'] = $regulars->get();
        // Lista de productos Internacionales en GRID
        $productsQuery =  Product::query()->whereHas('category', function(Builder $query){
            $query->where('name', 'International bread');
        });
        $products = $productsQuery->where(function($query){
            $query->whereNull('product_custom_field1')->orWhere('product_custom_field1','')->get();
        });
        // $products = $productsQuery->where(function($query){
        //     $query->whereNull('product_custom_field6')->orWhere('product_custom_field6','')->orWhere('product_custom_field6',2)->get();
        // });
        $data['internationals'] = $products->get();


        $data['seo'] = array(
            'title'         => 'Bread in the box | Rentail',
            'description'   => 'Our bread menu',
            'keywords'      => 'bread, Denver ,rentail',
            'image'         => $dominio.'/images/logo-seo.png',
        );
        return view('rentail',$data);
    }

    public function desserts(){
        // Lista de productos Internacionales en GRID
        $productsQuery =  Product::query()->whereHas('category', function(Builder $query){
            $query->where('name', 'Desserts');
        });
        $productsQuery = $productsQuery->where(function($query){
            $query->whereNull('product_custom_field1')->orWhere('product_custom_field1','')->get();
        });
        $products = $productsQuery->where(function($query){
            $query->whereNull('product_custom_field6')->orWhere('product_custom_field6','')->orWhere('product_custom_field6',2)->get();
        });

        $data['products'] = $products->orderByRaw("
            CASE
                WHEN product_custom_field7 REGEXP '^[0-9]+' THEN 1
                ELSE 2
            END,
            CAST(product_custom_field7 AS UNSIGNED) ASC,
            product_custom_field7 ASC
        ")->get();

        //Mostrar producto con su detall segun combo en el administrador
        $productShow =  Product::query()->whereHas('category', function(Builder $query){
            $query->where('name', 'Desserts');
        });
        $productShow = $productShow->where(function($query){
            $query->Where('product_custom_field6',1);
        });
        $data['productShow'] = $productShow->get();

        //Metadata seo
        $dominio = config('app.url');
        $data['seo'] = array(
            'title'         => 'Desserts | Bread in the box',
            'description'   => 'Order online our delicious breads made with quality and fresh ingredients. Visit our website.',
            'keywords'      => 'Bread,Bakery,Colorado',
            'image'         => $dominio.'/images/logo-seo.png',
        );
        return view('products.desserts',$data);
    }
}
