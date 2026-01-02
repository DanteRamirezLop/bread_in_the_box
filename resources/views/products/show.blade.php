<x-app-layout>
	<div class="fixed-banner "></div>
	 <div class="banner-category container-fluid" data-banner="fixed">
		<img src="{{asset('images/comprar.webp')}}" alt="banner Related Products" class="banner-category__img fr-fic fr-dii">
		<div class="banner-category__box-title">
		    <h1 class="banner-category__title">{{$product->name}}</h1>
		</div>
	</div>

    <section class="sec-product-detail mt-5">
	    <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 ">
                <div>
                    <div class="product_view_slider">
                        <div class="single_viewslider">
                            <img loading="lazy" src="{{config('services.trading.url')}}/uploads/img/{{$product->image}}" alt="image-product">
                        </div>
                        @foreach($images as $image)
                            <div class="single_viewslider">
                                <img loading="lazy" src="{{config('services.trading.url')}}/uploads/media/{{$image->file_name}}" alt="image-product">
                            </div>
                        @endforeach
                    </div>
                    <div class="product_viewslid_nav">
                        <div class="single_viewslid_nav">
                            <img loading="lazy" src="{{config('services.trading.url')}}/uploads/img/{{$product->image}}" alt="image-product">
                        </div>
                        @foreach($images as $image)
                            <div class="single_viewslid_nav">
                                <img loading="lazy" src="{{config('services.trading.url')}}/uploads/media/{{$image->file_name}}" alt="image-product">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col justify-between p-4 leading-normal ">
                        <div>
                            <h2 class="my-5 text-3xl text-center">{{$product->name}}</h2>
                            <p class="font-normal text-gray-700 text-2xl">
                                {!! $product->product_description !!}
                            </p>
                            <div class="my-5 text-center">
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

	<section class="empieza-pedido container-fluid">
        <div class="container">
            <h1 class="detail-product__title mb-4">Related Products</h1>
            <div class="category-slider__wrapper ">
                <div class="category-slider__bottom">
                    <div class="category-slider__arrow-left">
                        <i class="las la-chevron-left"></i>
                    </div>
                    <div class="category-slider__arrow-right">
                        <i class="las la-chevron-right"></i>
                    </div>
                    @if(count($products))
                    <div class="category-slider__list owl-carousel" id="olwProduct">
                        @foreach($products as $product)
                            <div class="category-slider__item" >
                                <a href="{{route('products.show',$product)}}">
                                    <!-- <img alt="{{$product->name}}" src="{{config('services.trading.url')}}/uploads/img/{{$product->image}}" width="" height=""  class="category-slider__img fr-fic fr-dib"> -->
                                    <img  class="w-full rounded-lg transition group-hover:-translate-y-1 group-hover:shadow-xl bg-white object-cover object-center aspect-square" src="{{config('services.trading.url')}}/uploads/img/{{$product->image}}" alt="{{$product->name}}" width="250" height="250" />

                                    <span>{{$product->name}}</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    @else
                    <h2>Loading...</h2>
                    @endif
                <div>
            </div>
        </div>
    </section>

	@push('css')
       <link rel="stylesheet" href="{{asset('css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
       <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    @endpush

	@push('script')
        <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('/js/slick.min.js')}}"></script>
        <script>
            (function ($) {
                    "use strict";
                    // single product view slider
                    $('.product_view_slider').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        fade: true,
                        asNavFor: '.product_viewslid_nav',
                        infinite: false
                    });
                    // single product view slider nav
                    $('.product_viewslid_nav').slick({
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        prevArrow: '<button type="button" class="slick-prev"><i class="las la-angle-left"></i></button>',
                        nextArrow: '<button type="button" class="slick-next"><i class="las la-angle-right"></i></button>',
                        asNavFor: '.product_view_slider',
                        focusOnSelect: true,
                        centerMode: false,
                        centerPadding: '0px',
                        infinite: false,
                        responsive: [{
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 4,
                            }
                        }]
                    });

                })(jQuery);

            $(document).ready(function(){
                /*  Carrousel  */
                var owl = $('#olwProduct');
                owl.owlCarousel(
                    {
						loop:true,
                        responsive:{
                            0:{
                                items:1,
                            },
                            320:{
                                items:1,
                            },
                            480:{
                                items:2,
                            },
                            600:{
                                items:3,
                            },
                            800:{
                                items:3,
                            },
                            1024:{
                                items:4,
                            },
                            1124:{
                                items:5,
                            },
                        }
                    }
                );

				let scrWidth = window.innerWidth
                let slideCounter = $('.category-slider__item').length
                if (scrWidth > 300 && scrWidth < 700 && slideCounter > 2) {
                    $('.category-slider__arrow-left').addClass('active')
                    $('.category-slider__arrow-right').addClass('active')
                }
                if (scrWidth > 700 && scrWidth < 1024 && slideCounter > 3) {
                    $('.category-slider__arrow-left').addClass('active')
                    $('.category-slider__arrow-right').addClass('active')
                }
                if (scrWidth > 1024 && slideCounter > 4) {
                    $('.category-slider__arrow-left').addClass('active')
                    $('.category-slider__arrow-right').addClass('active')
                }
                $('.category-slider__arrow-right').click(function() {
                    owl.trigger('next.owl.carousel');
                })
                $('.category-slider__arrow-left').click(function() {
                    owl.trigger('prev.owl.carousel');
                })
            });
        </script>
    @endpush

	@push('seo')
		<title>{{$seo['title']}}</title>
        <meta name="description" content="{{$seo['description']}}">
		<meta name="keywords" content="{{$seo['keywords']}}">
        <meta property="og:image" itemprop="image" content="{{config('services.trading.url')}}/uploads/img/{{$product->image}}" />
	@endpush

</x-app-layout>
