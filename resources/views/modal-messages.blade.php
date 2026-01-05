<div id="modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-xl p-6 relative">
            <!-- Botón cerrar -->
            <button id="closeModal" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700">
               <i class="las la-times"></i>
            </button>
            <h2 class="text-xl font-semibold p-5 text-center">Write us your doubts or queries. Customer Service Number +303-502-5502</h2>
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
                <div class="text-center mt-4">
                    <button id="send" class="ml-2 btn btn-red Enviarconsulta"> Send message <i class="las la-angle-double-right"></i> </button>
                </div>
              </form>
            </div>
        </div>
    </div>
