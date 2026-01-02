<x-app-layout>
  @push('css')
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    @endpush
  <div class="fixed-banner"></div>

  <div class="banner-category container-fluid" data-banner="fixed">
    <img src="{{asset('images/bg-become-dealer.webp')}}" alt="" class="banner-category__img">
    <div class="banner-category__box-title">
        <h1 class="banner-category__title">Become a distribuidor</h1>
    </div>
  </div>
      <h2 class="detail-product__title">We Bake and deliver wholesale bread</h2>
      <section class="static-page__container bg-white">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
              <div>
                <img src="{{asset('images/become-distribuidor.webp')}}" class="img-become"  alt="">
              </div>
              <div>
                <h1 class="month-sub__title">A Unique Bakery Catering to Wholesale Business Needs</h1>
                <div class="text-lg text-justify">
                  Bread in the Box bakes and distributes fresh bread and pastries wholesale. We service customers such as supermarkets, markets, restaurants, etc.
                  We are proud to offer companies various types of delicious speciality breads and international breads. We have been supplying for several years supplying wholesale fresh baked breads and pastries to the Front Range of Colorado, including the Denver metro area and I-25 from Fort Collins to Colorado Springs
                </div>

                <div class="my-4 text-lg font-semibold">Contact us and we will respond as soon as possible</div>

                <div class="ml-2">
                  <div class="my-2">
                      <i class="las la-phone-volume"></i> (720) 900-9567
                  </div>
                  <div class="my-2">
                    <i class="las la-phone-volume"></i> + 303-502-5502
                  </div>
                  <div class="my-2">
                    <i class="las la-envelope"></i> customer@breadinthebox.com
                  </div>
                </div>
              </div>
          </div>
      </section>

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
                <a href="{{route('distributors')}}" class="btn btn-brown-line mb-5" aria-label="See all distributors" > <span class="mx-5"> See all distributors <i class="las la-arrow-right"></i></span> </a>
            </div>
        </section>

        @push('script')
            <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
            <script>
                $(document).ready(function(){
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
