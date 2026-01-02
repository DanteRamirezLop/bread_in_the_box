<x-app-layout>
    @push('css')
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    @endpush
    <div class="home-loader">
        <div class="fixed-banner"></div>
        <div class="home_2_hero" id="olwHome">
            <div class="single_hero_slider banner-home bg-home"></div>
            <div class="single_hero_slider banner-home bg-1"></div>
            <div class="single_hero_slider banner-home bg-2"></div>
        </div>
        <section class="empieza-pedido container-fluid">
            <h1 class="detail-product__title mb-4">Create the combination for your next breakfast</h1>
            <div class="category-slider__wrapper">
                <div class="category-slider__bottom">
                    <div class="category-slider__arrow-left">
                        <i class="las la-chevron-left"></i>
                    </div>
                    <div class="category-slider__arrow-right">
                        <i class="las la-chevron-right"></i>
                    </div>
                    @if(count($products))
                    <div class="category-slider__list owl-carousel" id="olwProduct">
                        @if($breadTheMonth)
                            <div class="category-slider__item">
                                <a href="">
                                    <img  class="w-full rounded-md transition group-hover:-translate-y-1 group-hover:shadow-xl bg-white object-cover object-center aspect-square" src="{{config('services.trading.url')}}/uploads/img/{{$breadTheMonth->image}}" alt="{{$breadTheMonth->name}}" width="400" height="400" />

                                    <!-- <img alt="{{$breadTheMonth->name}}" src="{{config('services.trading.url')}}/uploads/img/{{$breadTheMonth->image}}" width="" height=""  class="category-slider__img fr-fic fr-dib">
                                     -->
                                    <span>{{$breadTheMonth->name}}</span>
                                </a>
                            </div>
                        @endif
                        @foreach($products as $product)
                            <div class="category-slider__item" >
                                <a href="{{route('products.show',['product' => $product])}}">
                                    <img  class="w-full rounded-md transition group-hover:-translate-y-1 group-hover:shadow-xl bg-white object-cover object-center aspect-square" src="{{config('services.trading.url')}}/uploads/img/{{$product->image}}" alt="{{$product->name}}" width="400" height="400" />

                                    <!-- <img alt="{{$product->name}}" src="{{config('services.trading.url')}}/uploads/img/{{$product->image}}" width="" height=""  class="category-slider__img fr-fic fr-dib">
                                    -->
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
            <div class="text-center mb-5">
                <a href="{{route('orden')}}" class="btn btn-brown-line mb-5 "> <span class="mx-5">See all breads <i class="las la-arrow-right"></i></span> </a>
            </div>
        </section>

        <div class="home__community">
            <div class="communityHome">
                <div class="communityHome__page">
                    <div class="communityHome__page__header">
                        <div class="communityHome__page__header__title">
                            Our Community
                        </div>
                        <div class="communityHome__page__header__text">
                            <p>Follow us on instagram</p>
                        </div>
                    </div>
                    <div class="communityHome__page__card">
                        <div class="communityHome__description">
                            <div class="communityHome__description__container">
                                <div class="communityHome__description__container__follow">
                                    <div class="communityHome__description__container__follow__description">
                                        <div class="communityHome__description__container__follow__description__image">
                                            <img alt="logo" width="121" height="64" src="{{asset('images/perfil_instagram.webp')}}" class="rounded-full">
                                        </div>
                                        <div class="communityHome__description__container__follow__description__page">
                                            <div class="communityHome__description__container__follow__description__page__nick">
                                                <p>@breadinthebox_</p>
                                            </div>
                                            <div class="communityHome__description__container__follow__description__page__category">Bakery</div>
                                            <div class="communityHome__description__container__follow__description__page__phrase">Colorado-based bakery 🍞.</div>
                                        </div>
                                        <a href="https://www.instagram.com/breadinthebox_/" target="_blank"class="communityHome__description__container__follow__description__button">
                                            Follow
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="communityHome__description__images">
                                <div class="communityHome__description__images__image">
                                    <img src="{{asset('images/gif/reel_1.gif')}}" alt="Reel 1 de instagram">
                                    <div>
                                        <img src="{{asset('images/arrow.svg')}}" alt="play">
                                        <p>504</p>
                                    </div>
                                </div>
                                <div class="communityHome__description__images__image">
                                    <img src="{{asset('images/gif/reel_2.gif')}}" alt="Reel 2 de instagram">
                                    <div>
                                        <img src="{{asset('images/arrow.svg')}}" alt="play">
                                        <p>152</p>
                                    </div>
                                </div>
                                <div class="communityHome__description__images__image">
                                    <img src="{{asset('images/gif/reel_3.gif')}}" alt="Reel 3 de instagram">
                                    <div>
                                        <img src="{{asset('images/arrow.svg')}}" alt="play">
                                        <p>208</p>
                                    </div>
                                </div>
                                <div class="communityHome__description__images__image">
                                <img src="{{asset('images/gif/reel_4.gif')}}" alt="Reel 4 de instagram">
                                    <div>
                                        <img src="{{asset('images/arrow.svg')}}" alt="play">
                                        <p>806</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="communityHome__galery">
                    <img src="{{asset('images/community.webp')}}" class="rounded-lg" alt="community">
                </div>
            </div>
        </div>
        <section class="empieza-pedido container-fluid">
            <h1 class="detail-product__title mb-4">Meet our distributors</h1>
            <div class="category-slider__wrapper">
                <div class="category-slider__bottom">
                    <div class="category-slider__arrow-left">
                        <i class="las la-chevron-left"></i>
                    </div>
                    <div class="category-slider__arrow-right">
                        <i class="las la-chevron-right"></i>
                    </div>
                    <div class="category-slider__list owl-carousel" id="olwWholesalers">
                        @foreach($dealears as $dealear )
                            <div class="category-slider__item" >
                                <a href="{{$dealear['link']}}" target="_blank">
                                    <img src="{{asset($dealear['image'])}}" alt="{{$dealear['name']}}" class="category-slider__img fr-fic fr-dib">
                                </a>
                                <a class="hover:underline my-2" target="_blank" href="{{$dealear['link']}}">{{$dealear['name']}}</a>
                                <span class="font-semibold"><i class="las la-fax text-lg mr-1"></i> {{$dealear['phone']}} </span>
                                <p class="mt-2 capitalize"> <i class="las la-map-marker"></i> {{$dealear['adress']}}</p>
                            </div>
                        @endforeach
                    </div>
                <div>
            </div>
            <div class="text-center mb-5">
                <a href="{{route('distributors')}}" class="btn btn-brown-line mb-5 "> <span class="mx-5">See all distributors <i class="las la-arrow-right"></i></span> </a>
            </div>
        </section>

        @if($breadTheMonth)
            <section class="home-conocenos">
                <div class="home-conocenos__cont">
                    <div class="home-conocenos__img left">
                        <img src="{{asset('images/trigo_02.webp')}}" alt="Left" class="fr-fil fr-dib">
                    </div>
                    <div class="home-conocenos__text-cont">
                        <div class="mx-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                            <img src="{{config('services.trading.url')}}/uploads/img/{{$breadTheMonth->image}}" alt="Bread the Month" class="rounded-lg gradient-white">
                            <div class="home-conocenos__text px-3">
                                <h2 class="month-sub__title "> Bread of the Month "{{$month}}"</h2>
                                <p class="box-subtotal__text text-center">
                                    {{$breadTheMonth->name}}
                                </p>
                                <span class="mt-2">Subscribe to the bread of the month and receive the benefits and discounts for being a frequent customer </span>
                            </div>
                            <div class="home-conocenos__action mb-3">
                                <a class="btn" href="{{route('monthly.specialty')}}"><i class="las la-bread-slice"></i> See detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="home-conocenos__img right">
                        <img src="{{asset('images/trigo_01.webp')}}" alt="Right" class="fr-fil fr-dib">
                    </div>
                </div>
            </section>
        @endif

        <section class="home-instagram container-fluid">
            <div class="home-instagram__top">
                <a href="https://www.doordash.com/store/bread-in-the-box-llc-denver-2615819/" target="_blank">
                    <p class="home-instagram__hash">
                        <svg fill="#FBE7C5" width="60px" height="60px" viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg"><path d="M23.071 8.409a6.09 6.09 0 0 0-5.396-3.228H.584A.589.589 0 0 0 .17 6.184L3.894 9.93a1.752 1.752 0 0 0 1.242.516h12.049a1.554 1.554 0 1 1 .031 3.108H8.91a.589.589 0 0 0-.415 1.003l3.725 3.747a1.75 1.75 0 0 0 1.242.516h3.757c4.887 0 8.584-5.225 5.852-10.413"/></svg>
                        <span class="home-instagram__ht">Doordash / Bread in the box</span>
                    </p>
                </a>
            </div>
            <div class="home-instagram__bottom">
                <ul class="home-instagram__list"></ul>
            </div>
        </section>

    </div>

    @push('css')
       <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    @endpush

    @push('script')
        <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
         <script src="{{asset('/js/slick.min.js')}}"></script>
        <script>
            $(document).ready(function(){

                $('#olwHome').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true,
                    autoplay: true,
                    autoplaySpeed: 5000,
                });

                /*  Carrousel  */
                var owlProduct = $('#olwProduct');
                owlProduct.owlCarousel(
                    {
                        loop:true,
						// margin:10,
                        responsive:{
                            0:{
                                items:1,
                            },
                            320:{
                                items:1,
                            },
                            480:{
                                items:1,
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
                 /*  Carrousel  */
                 var owl = $('#olwWholesalers');
                    owl.owlCarousel(
                    {
                        loop:true,
                        autoplay:true,
                        autoplayTimeout:1400,
                        autoplayHoverPause:true,
						// margin:10,
                        responsive:{
                            0:{
                                items:1,
                            },
                            320:{
                                items:1,
                            },
                            480:{
                                items:1,
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
                if (scrWidth > 700 && scrWidth < 1024 && slideCounter > 4) {
                    $('.category-slider__arrow-left').addClass('active')
                    $('.category-slider__arrow-right').addClass('active')
                }
                if (scrWidth > 1024 && slideCounter > 5) {
                    $('.category-slider__arrow-left').addClass('active')
                    $('.category-slider__arrow-right').addClass('active')
                }

                $('.category-slider__arrow-right').click(function() {
                    owlProduct.trigger('next.owl.carousel');
                })
                $('.category-slider__arrow-left').click(function() {
                    owlProduct.trigger('prev.owl.carousel');
                })
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
		<meta property="og:image" itemprop="image" content="{{$seo['image']}}" />
	@endpush

</x-app-layout>
