<x-app-layout>

    <div class="fixed-banner"></div>

    <div class="banner-category container-fluid" data-banner="fixed">
        <img src="{{asset('images/bg-retail.webp')}}" alt="banner MONTHLY RETAIL" class="banner-category__img">
        <div class="banner-category__box-title">
            <h1 class="banner-category__title">Retail counter</h1>
        </div>
    </div>
    <div class="month__products my-5 ">

        <div class="board">
            <h1 class="title-retail">Our bread menu </h1>
            <p class="info-rentail">Please ring the black doorbell if there is no answer, call :</p>
            <address class="text-center">
                <p>PM 720-217-4378</p>
                <a href="4125550100">AM 303-256-4968</a>
            </address>
            <ul class="boxes">
                <li class="box">
                    <h2>Regular Loafs</h2>
                    <dl>
                        @foreach($breads as $bread)
                            <dt>{{$bread->name}} </dt>
                            <dd class="description">
                                <p class="prices"><span>{{$bread->product_custom_field8}}</span> <span><em>${{number_format($bread->variation()->first()->default_purchase_price,2)}}</em></span></p>
                            </dd>
                        @endforeach
                    </dl>
                </li>
                <li class="box">
                    <h2>International Breads</h2>
                    <dl>
                        @foreach($internationals as $key=>$international)
                            @if($key == 7)
                                @break
                            @endif
                            <dt>{{$international->name}} </dt>
                            <dd class="description">
                                <p class="prices"><span>{{$international->product_custom_field8}}</span> <span><em>${{number_format($international->variation()->first()->default_purchase_price,2)}}</em></span></p>
                            </dd>
                        @endforeach
                    </dl>
                </li>
                <li class="box">
                    <h2>International Breads</h2>
                    <dl>
                        @foreach($internationals as $key=>$international)
                            @if($key > 6)
                                <dt>{{$international->name}} </dt>
                                <dd class="description">
                                    <p class="prices"><span>{{$international->product_custom_field8}}</span> <span><em>${{number_format($international->variation()->first()->default_purchase_price,2)}}</em></span></p>
                                </dd>
                            @endif
                        @endforeach
                    </dl>
                </li>
                <li class="box">
                    <h2>Monthly Specialty Breads</h2>
                    <p class="tip">​Each month we feature a different sweet specialty bread to go with the season</p>
                    <dl>
                        @foreach($BreadsMonths as $key=>$bread)
                            <dt>{{$bread->name}} </dt>
                            <dd class="description">
                                <p class="prices"><span class="mr-2"> {{$months[$key]}}</span>( {{$bread->product_custom_field8}} )<span><em>${{number_format($bread->variation()->first()->default_purchase_price,2)}}</em></span></p>
                            </dd>
                        @endforeach
                    </dl>
                </li>
            </ul>

            <table class="hours">
                <thead>
                    <tr>
                        <th colspan="2">
                            <svg width="40" viewBox="0 0 800 800">
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <path d="M340.261,358.231c17.896,0,33.647-8.998,43.067-22.706h70.971c16.318,0,29.548-13.219,29.548-29.537       c0-16.285-13.229-29.537-29.548-29.537h-70.981c-9.42-13.686-25.172-22.683-43.056-22.683c-0.278,0-0.533,0.089-0.8,0.089       l-64.706-91.065c-9.431-13.252-27.893-16.418-41.189-6.943c-13.297,9.442-16.418,27.871-6.976,41.201l64.761,91.11       c-2.044,5.588-3.333,11.531-3.333,17.84C288.03,334.87,311.402,358.231,340.261,358.231z"></path>
                                                </g>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <g>
                                                    <path d="M273.034,654.322c-28.337-19.317-57.252-56.363-43.412-125.157h37.102c6.598,0,12.585-3.91,15.24-9.941       c2.622-6.099,1.4-13.119-3.099-17.962l-96.964-104.029c-3.144-3.366-7.531-5.266-12.164-5.266       c-4.599,0-8.986,1.911-12.13,5.266L60.655,501.262c-4.499,4.843-5.721,11.874-3.077,17.962       c2.655,6.031,8.631,9.941,15.196,9.941h34.824c3.021,11.742,40.246,147.407,156.86,151.361       c6.376,0.212,12.13-3.81,14.119-9.875S278.311,657.943,273.034,654.322z"></path>
                                                </g>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <g>
                                                    <path d="M340.261,0C171.271,0,34.272,136.998,34.272,305.989c0,51.142,12.708,99.252,34.891,141.62l58.33-62.584       c-6.998-18.762-11.675-38.635-13.53-59.33h26.604c10.875,0,19.684-8.798,19.684-19.695c0-10.875-8.809-19.695-19.684-19.695       h-26.527c9.476-109.594,96.942-197.072,206.537-206.547v26.549c0,10.897,8.809,19.695,19.684,19.695       c10.886,0,19.695-8.798,19.695-19.695V79.757c109.584,9.475,197.072,96.953,206.537,206.547h-26.538       c-10.875,0-19.684,8.82-19.684,19.695c0,10.897,8.809,19.695,19.684,19.695h26.538       c-9.465,109.617-96.965,197.072-206.537,206.547v-26.538c0-10.896-8.809-19.694-19.695-19.694       c-10.875,0-19.684,8.798-19.684,19.694v26.427c-3.566-0.355-7.143-0.699-10.664-1.188c-0.044,0.101-0.044,0.211-0.089,0.3       c-7.576,17.263-24.46,28.293-43.1,28.293h-10.32c-0.533,16.529,2.566,30.726,9.109,42.867       c23.96,6.032,48.91,9.586,74.736,9.586c169.002,0,306.012-136.976,306.012-306C646.272,136.998,509.263,0,340.261,0z"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            Hours
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mon. - Fri.</td>
                        <td>7 a.m. - 3 p.m.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow-sm sm:p-8 mt-5">
            <h5 class="mb-2 text-3xl font-bold text-gray-900 ">Find us</h5>
            <p class="mb-5 text-base  sm:text-lg ">Now available on your favorite Apps!</p>
            <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
                <a href="https://www.doordash.com/store/bread-in-the-box-llc-denver-2615819/" class="w-full sm:w-auto focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex justify-center">
                    <div class="flex justify-center">
                        <img src="{{asset('images/doordash-icon.webp')}}" class="h-20 w-20 border rounded-lg" alt="doordash">
                    </div>
                </a>
                <a href="#" class="w-full sm:w-auto focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex justify-center">
                    <div class="flex justify-center">
                        <img src="{{asset('images/too-good.webp')}}" class="h-20 w-20 border rounded-lg" alt="doordash">
                    </div>
                </a>
                <a href="#" class="w-full sm:w-auto focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex justify-center">
                    <div class="flex justify-center">
                        <img src="{{asset('images/goodie-icon.webp')}}" class="h-20 w-20 border rounded-lg" alt="doordash">
                    </div>
                </a>
            </div>
            <p class="text-center mt-2 tracking-widest"> Download from Apple store or Google store</p>
        </div>
    </div>


    @push('seo')
		<title>{{$seo['title']}}</title>
        <meta name="description" content="{{$seo['description']}}">
		<meta name="keywords" content="{{$seo['keywords']}}">
		<meta property="og:image" itemprop="image" content="{{$seo['image']}}" />
	@endpush
</x-app-layout>
