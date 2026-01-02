<x-app-layout>

    <div class="fixed-banner"></div>

    <div class="banner-category container-fluid" data-banner="fixed">
        <img src="{{asset('images/bg-bread-special.webp')}}" alt="banner MONTHLY SPECIALTY BREADS" class="banner-category__img">
        <div class="banner-category__box-title">
            <h1 class="banner-category__title">MONTHLY SPECIALTY BREADS</h1>
        </div>
    </div>

    @if($breadTheMonth)
        <section>
            <h2 class="detail-product__title">​Each month we feature a different sweet specialty bread to go with the season <strong>({{$month}})</strong></h2>
            <div class="month__products">
        <div class="container">
            <div class="row ">
                <div class="flex flex-col items-center  border-gray-200 rounded-lg shadow md:flex-row bg-stone-200">
                    <img class="object-cover w-full rounded-t-lg  md:h-auto md:w-1/3 md:rounded-none md:rounded-s-lg" src="{{config('services.trading.url')}}/uploads/img/{{$breadTheMonth->image}}" alt="{{$breadTheMonth->name}}">
                    <div class="flex flex-col justify-between p-4 leading-normal bg-white">
                        <h2 class="my-2 text-3xl text-center">{{$breadTheMonth->name}}</h2>
                        <p class="mb-5 font-normal text-gray-700 text-2xl"> {!! $breadTheMonth->product_description !!}</p>
                            <div class="mb-4 mt-5 text-center">
                                <div class="text-brown text-xl mb-3">Do you want to become a distributor? </div>
                                <a href="{{route('contact')}}" aria-label="Contact us here" class="btn btn-brown-line mx-auto">
                                   Contact us here <i class="las la-mail-bulk text-xl ml-1"></i>
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </section>
    @endif

    <section class="catalogue">
        <h2 class="detail-product__title m-4">Choose from our variety of fresh breads for delivery</h2>
        <div class="catalogue__products">
            @foreach($products as $product)
                <div class="product-card">
                    <div>
                        <div class="product-card__header">
                            <a href="{{route('products.show',$product)}}" class="image-produc">
                                <img  class="w-full rounded-md transition group-hover:-translate-y-1 group-hover:shadow-xl bg-white object-cover object-center aspect-square" src="{{config('services.trading.url')}}/uploads/img/{{$product->image}}" alt="{{$product->name}}" width="250" height="250" />

                                <!-- <img src="{{config('services.trading.url')}}/uploads/img/{{$product->image}}" alt="" class="product-card__img">
                             -->
                            </a>
                        </div>
                        <div class="product-card__body">
                            <h3 class="product-card__name mb-2"> <span class="title-brown">{{$months[$product->product_custom_field1]}}</span></h3>
                            <h3 class="product-card__name"> {{$product->name}} </h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    @push('seo')
		<title>{{$seo['title']}}</title>
        <meta name="description" content="{{$seo['description']}}">
		<meta name="keywords" content="{{$seo['keywords']}}">
		<meta property="og:image" itemprop="image" content="{{$seo['image']}}" />
	@endpush
</x-app-layout>
