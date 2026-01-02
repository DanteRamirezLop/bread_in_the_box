<x-app-layout>

    <div class="fixed-banner"></div>

    <div class="banner-category container-fluid" data-banner="fixed">
        <img src="{{asset('images/bg-distributors.webp')}}" alt="Banner Meet our distributors" class="banner-category__img">
        <div class="banner-category__box-title">
            <h2 class="banner-category__title">Meet our distributors</h2>
        </div>
    </div>

    <div class="catalogue">
        <div class="catalogue__products">
            @foreach($dealers as $dealer)
            <div class="flex justify-center">
                <div class="category-slider__item" >
                    <a href="{{$dealer['link']}}" target="_blank">
                        <img src="{{asset($dealer['image'])}}" alt="{{$dealer['name']}}" class="category-slider__img fr-fic fr-dib">
                    </a>
                    <a class="hover:underline my-2" target="_blank" href="{{$dealer['link']}}"> {{$dealer['name']}} </a>
                    <span class="font-semibold"><i class="las la-fax text-lg mr-1"></i> {{$dealer['phone']}} </span>
                    <p class="mt-2 capitalize"> <i class="las la-map-marker"></i> {{$dealer['adress']}} </p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="m-5">
            {{ $dealers->links() }}
        </div>
    </div>

    @push('seo')
        <title>{{$seo['title']}}</title>
        <meta name="description" content="{{$seo['description']}}">
        <meta name="keywords" content="{{$seo['keywords']}}">
        <meta property="og:image" itemprop="image" content="{{$seo['image']}}" />
    @endpush

</x-app-layout>
