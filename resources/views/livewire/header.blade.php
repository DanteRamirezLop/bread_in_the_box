<div>
<header class="container-fluid  header__wrapper">

  <div class="top-bar__wrapper">
    <div class="top-bar container">
      <div class="top-bar__left">
        <p class="top-bar__text"><i class="las la-store-alt top-bar__icon "></i>Attention from: Monday to Friday / 07:00 am - 3:00 pm</p>
        <p class="top-bar__text"><i class="las la-phone-volume top-bar__icon "></i> Denver: <a href="tel:015002550" aria-label="company phone">+ 303-502-5502</a></p>
        <p class="top-bar__text"><i class="las la-envelope top-bar__icon"></i>  customer@breadinthebox.com</p>
      </div>
      <div class="top-bar__right">
        <div class="top-bar__account">
       </div>
      </div>
    </div>
  </div>

  <div class="header container">
    <div class="header__left">
      <a href='/' class="header__box-logo" aria-label="Logo Bread in the box">
        <img src="{{asset('images/logo.webp')}}?v=1993.1.1" width="160px" height="55px" alt="">
      </a>
      <ul class="header__list">
        <li class="header__item">
          <a href="{{route('orden')}}" class="header__link" aria-label="Order Online">Order Online</a>
        </li>
        <li class="header__item">
          <a href="{{route('monthly.specialty')}}" class="header__link" aria-label="Monthly specualty breads">Monthly Specialty Breads</a>
        </li>
        <li class="header__item">
          <a href="{{route('international')}}" class="header__link" aria-label="International breads">International Breads</a>
        </li>

        <li class="header__item">
          <a href="{{route('desserts')}}" class="header__link" aria-label="Desserts">Desserts</a>
        </li>

        <li class="header__item">
          <a href="{{route('retail')}}" class="header__link" aria-label="Retail">Retail</a>
        </li>

      </ul>
    </div>

    <div class="header__right">
      <div class="header__options" >
        @auth

        <div class="group-action">
          <div x-data="{ show: false, menu: false }">
              <button class="text-sm text-yellow px-4 py-2 border-0 rounded-md outline-none" x-on:click="show = ! show"><i class="las la-user text-xl"></i> {{Str::limit(Auth::user()->name,12)}} <i class="las la-angle-down"></i></button>
              <div class="relative">
                  <div class="bg-white rounded-md p-3 w-44 top-1 absolute z-10" x-show="show" @click.away="show = false" >
                      <ul >

                          <li class="link-option mb-2"> </li>
                      </ul>
                  </div>
              </div>
          </div>

        </div>

        @endauth
        <div class="group-action"> </div>
      </div>
    </div>
  </div>
</header>

<header class="container-fluid header-mobile__wrapper">
  <div class="header-mobile container">
    <div class="header-mobile__left">
      <div class="header-mobile__box-logo">
        <span class="header-mobile__menu las la-bars" id="open_menu_mobile"></span>
        <a href="/" aria-label="logo">
          <img src="{{asset('images/logo.webp')}}" width="120px" alt="">
        </a>
      </div>
      <ul class="header-mobile__list">
        <span class="las la-times header-mobile__close" id="close_menu_mobile"></span>
        <div class="header-mobile__bloque">
          <li class="header-mobile__item">
            <a href="/" aria-label="samll logo" class="header-mobile__link principal-itm">
              <img src="{{asset('images/logo.webp')}}" width="180px" alt="">
            </a>
          </li>
          <li class="header-mobile__item">
            <a href="{{route('orden')}}" class="header-mobile__link" aria-label="Order Online">Order Online</a>
          </li>
          <li class="header-mobile__item">
            <a href="{{route('monthly.specialty')}}" class="header-mobile__link" aria-label="Monthly specialty breads">Monthly Specialty Breads</a>
          </li>
          <li class="header-mobile__item">
            <a href="{{route('international')}}" class="header-mobile__link" aria-label="International breads">International Breads</a>
          </li>

          <li class="header-mobile__item">
            <a href="{{route('desserts')}}" class="header-mobile__link" aria-label="Desserts">Desserts</a>
          </li>
            <li class="header-mobile__item">
            <a href="{{route('retail')}}" class="header-mobile__link" aria-label="Retail">Retail</a>
          </li>
        </div>

        <div class="top-bar-mobile__wrapper">
          <div class="top-bar-mobile container">
              <div class="top-bar-mobile__left">
                <p class="top-bar-mobile__text"> <i class="las la-store-alt top-bar__icon "></i> Attention from: Monday to Friday / 07:00 am - 3:00 pm</p>
                <p class="top-bar-mobile__text"> <i class="las la-phone-volume top-bar__icon "></i> Denver: <a href="tel:015002550" aria-label="Business phone"> + 303-502-5502</a></p>
                <p class="top-bar-mobile__text"> <i class="las la-envelope top-bar__icon"></i>  <a href="mailto:customer@breadinthebox.com" aria-label="company mail">customer@breadinthebox.com</a></p>
              </div>
            <div class="header-mobile__bloque">
        </div>
        </div>
      </div>
      </ul>
    </div>
    <div class="header-mobile__right">
      <div class="header-mobile__options">
        <div class="group-action"  id="showSidebarMobile">

           <div class="group-action__left showCartMobile">
                <a href="tel:015002550" aria-label="business phone" class="text-yellow"><i class="las la-phone"></i> + 303-502-5502</a>
            </div>

        </div>
      </div>
    </div>
  </div>
</header>
</div>
