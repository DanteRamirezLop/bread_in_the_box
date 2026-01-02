<footer class="row-footer container-fluid">
    <div class="footer container">
      <ul class="footer__list">
        <li class="footer__item first">
          <a href="/" aria-label="small logo">
              <img src="{{asset('images/logo-min.webp')}}" width="85px"  alt="">
          </a>
          <div class="footer__wrapper-social">
            <p class="footer__wrapper-follow">Follow us on:</p>
            <ul class="footer__social-list">
              <li class="footer__social-item">
                <a href="https://www.facebook.com/Breadinthebox/reviews/"  target="_blank" class="footer__social-link" title="Facebook">
                <span class="lab la-facebook"></span>
              </a>
              </li>
              <li class="footer__social-item">
                <a href="https://www.instagram.com/breadinthebox_/"  target="_blank" class="footer__social-link" title="Facebook">
                  <span class="lab la-instagram"></span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="footer__item">
          <p class="footer__link"><span class="footer__link-text">Company</span> <span class="footer__icon-down las la-angle-down"></span></p>
          <ul class="footer__sec-list">
             <li class="footer__sec-item"><a href="{{route('becomeDealer')}}" class="footer__sec-link" aria-label="Become a distribuidor">Become a distribuidor</a></li>
            <li class="footer__sec-item"><a href="{{route('about')}}" class="footer__sec-link" aria-label="About us">About us</a></li>
            <li class="footer__sec-item"><a href="{{route('contact')}}" class="footer__sec-link" aria-label="Contact us">Contact us</a></li>
            <li class="footer__sec-item"><a href="https://recruiting.paylocity.com/recruiting/jobs/All/16bfa118-8de6-480e-ae06-5a633fe59ea0/Bread-in-the-Box-LLC" class="footer__sec-link" aria-label="Careers" target="blank">Careers</a></li>
          </ul>
        </li>
        </li>
        <li class="footer__item">
          <p class="footer__link">
            <span class="footer__link-text">Address</span>
             <span class="footer__icon-down las la-angle-down"></span>
          </p>
          <ul class="footer__sec-list">
            <li class="footer__sec-item">
              <p class="footer__sec-link">4950 E 41st Ave Denver</p>
            </li>
            <!-- <li class="footer__sec-item">
              <a href="{{route('questions')}}" class="footer__sec-link" aria-label="Frequent questions">Frequent questions</a>
            </li>
            <li class="footer__sec-item">
              <a href="{{route('conditions')}}" class="footer__sec-link" aria-label="Terms and conditions">Terms and Conditions</a>
            </li> -->
          </ul>
        </li>
        <li class="footer__item">
          <p class="footer__link">
            <span class="footer__link-text">Attention</span>
            <span class="footer__icon-down las la-angle-down"></span>
          </p>
          <ul class="footer__sec-list">
            <li class="footer__sec-item">
              <p class="footer__sec-link"><span>Days:</span> Monday to Friday</p>
            </li>
            <li class="footer__sec-item">
              <p class="footer__sec-link"><span>Hours:</span> 07:00 am - 3:00 pm </p>
            </li>
            <!-- <li class="footer__sec-item">
              <a href="https://breadinthebox.com/user/profile" class="footer__sec-link" aria-label="My porfile">My porfile</a></li>
            <li class="footer__sec-item">
              <a href="route('suscription.index')" class="footer__sec-link" aria-label="My suscriptions">My suscriptions</a></li>
            <li class="footer__sec-item">
              <a href="route('orders.index')" class="footer__sec-link" aria-label="My orders">My orders</a>
            </li> -->
          </ul>
        </li>
        <li class="footer__item last-footer">
          <p class="footer__link"><span class="footer__link-text">Contact us</span><span class="footer__icon-down las la-angle-down"></span></p>
          <ul class="footer__sec-list">
            <!-- <li class="footer__sec-item"><p class="footer__sec-link "><span>Address:</span> 4950 E 41st Ave Denver</p></li> -->
            <!-- <li class="footer__sec-item"><p class="footer__sec-link "><span>Attention:</span> Monday to Friday  07:00 am - 3:00 pm </p></li> -->
            <li class="footer__sec-item"><p class="footer__sec-link "><span>Phone:</span> <a href="tel:015002550" aria-label="business phone"> + 303-502-5502</a></p></li>
            <li class="footer__sec-item"><p class="footer__sec-link "><span>Email:</span> <a href="mailto:customer@breadinthebox.com"  aria-label="company mails"> customer@breadinthebox.com</a></p></li>
          </ul>
        </li>
      </ul>
    </div>

    <div class="copyright__wrapper">
      <div class="copyright container">
        <div class="copyright__box-left">
            <p class="copyright__copyright">© <script>document.write(new Date().getFullYear())</script> Bread in the box. All rights reserved.</p>
        </div>
        <div class="copyright__box-mid">
          <p class="copyright__copyright">Developed by <a class="copyright__enova-link" href="https://onfleekmedia.com/" target="_blank">Onfleek Media</a></p>
        </div>
        <div class="copyright__box-right">
            <img src="{{asset('images/payment-method.png')}}"  alt="">
        </div>
      </div>
    </div>

</footer>
