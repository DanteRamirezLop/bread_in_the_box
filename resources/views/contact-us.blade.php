<x-app-layout>

  <div class="fixed-banner"></div>

    <div class="banner-category container-fluid" data-banner="fixed">
      <img src="{{asset('images/contact-us.webp')}}" alt="" class="banner-category__img">
      <div class="banner-category__box-title">
          <h2 class="banner-category__title">Contact us</h2>
      </div>
    </div>

    <section class="contacto">
          <div class="contacto__cont container">
            <div class="contacto__title">
              <h2>Do you have any questions?</h2>
              <p>Write us your doubts or queries. Customer Service Number +303-502-5502</p>
            </div>
            <div class="contacto_form">
              <form class="form" action="" id="formMessage" >
                <div class="form__row">
                  <div class="form__row__col">
                    <div class="form__group">
                      <label for="">Name* </label>
                      <input type="text" name="name" id="name"/>
                    </div>
                  </div>
                  <div class="form__row__col">
                    <div class="form__group">
                      <label for="">Last name* </label>
                      <input type="text" name="last_name" id="last_name" />
                    </div>
                  </div>
                </div>
                <div class="form__row">
                  <div class="form__row__col">
                    <div class="form__group">
                      <label for="">Phone* </label>
                      <input class="soloNumber" type="text"  name="phone" id="phone" />
                    </div>
                  </div>
                  <div class="form__row__col">
                    <div class="form__group">
                      <label for="">Email* </label>
                      <input class="validate[required, custom[email]]" type="text" name="email" id="email"/>
                    </div>
                  </div>
                </div>

                <div class="form__row">
                  <div class="form__row__col">
                    <div class="form__group">
                      <label for="">Message* </label>
                      <textarea class="validate[required]" name="message" id="message"></textarea>
                    </div>
                  </div>
                </div>

                @if(config('services.hcaptcha.enable'))
                <div class="contacto_form_text">
                    <div class="h-captcha" data-sitekey="{{ config('services.hcaptcha.sitekey') }}"></div>
                </div>
                @endif

                <div class="contacto_form_text mt-2">
                  <p>(*) All fields are required</p>
                </div>

                <div class="contacto__btn ">
                  <button id="send" class="btn btn-red Enviarconsulta"> Send <i class="las la-angle-double-right"></i></button>
                </div>
              </form>
            </div>
          </div>
      </section>

    @push('seo')
		<title>{{$seo['title']}}</title>
        <meta name="description" content="{{$seo['description']}}">
		<meta name="keywords" content="{{$seo['keywords']}}">
		<meta property="og:image" itemprop="image" content="{{$seo['image']}}" />
	@endpush

    @push('css')
		<script src="https://js.hcaptcha.com/1/api.js" async defer></script>
    @endpush

    @push('script')
        <script src="{{asset('js/messages.js')}}"></script>
    @endpush

</x-app-layout>
