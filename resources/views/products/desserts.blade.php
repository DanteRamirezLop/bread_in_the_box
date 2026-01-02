<x-app-layout>
        <div class="fixed-banner"></div>

        <div class="banner-category container-fluid" data-banner="fixed">
            <img src="{{asset('images/desserts.webp')}}" alt="Banner" class="banner-category__img">
            <div class="banner-category__box-title">
                <h2 class="banner-category__title">Desserts</h2>
            </div>
        </div>

        @if($productShow)
            @foreach($productShow as $item)
            <div class="month__products">
                <div class="container">
                    <div class="row ">
                        <div class="flex flex-col items-center  border-gray-200 rounded-lg shadow md:flex-row bg-stone-200">
                            <img class="object-cover w-full rounded-t-lg  md:h-auto md:w-1/3 md:rounded-none md:rounded-s-lg" src="{{config('services.trading.url')}}/uploads/img/{{$item->image}}" alt="{{$item->name}}">
                            <div class="flex flex-col justify-between p-4 leading-normal bg-white">
                                <h2 class="my-2 text-3xl text-center">{{$item->name}}</h2>
                                <p class="mb-5 font-normal text-gray-700 text-2xl"> {!! $item->product_description !!}</p>
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
            @endforeach
        @endif

        <div class="catalogue">
            <div class="catalogue__products">
                @if(count($products))
                    @foreach($products as $product)
                    <div class="product-card">
                        <a href="{{route('products.show',$product)}}">
                            <div>
                                <div class="product-card__header">
                                    <img  class="w-full rounded-md-lg transition group-hover:-translate-y-1 group-hover:shadow-xl bg-white object-cover object-center aspect-square" src="{{config('services.trading.url')}}/uploads/img/{{$product->image}}" alt="{{$product->name}}" width="400" height="400" />
                                </div>
                                <div class="product-card__body">
                                    <h3 class="product-card__name"> <span class="list-number">{{$product->product_custom_field7}}.</span> {{$product->name}} </h3>
                                </div>
                            </div>
                            <div class="product-card__footer">
                                <div class="tag-info ordenar"><p class="tag-info__text">See product </p></div>
                            </div>
                        </a>
                    </div>
                    @endforeach

                @else
                    <h3>Loading...</h3>
                @endif
            </div>
        </div>
        @push('seo')
            <title>{{$seo['title']}}</title>
            <meta name="description" content="{{$seo['description']}}">
            <meta name="keywords" content="{{$seo['keywords']}}">
            <meta property="og:image" itemprop="image" content="{{$seo['image']}}" />
        @endpush
</x-app-layout>
