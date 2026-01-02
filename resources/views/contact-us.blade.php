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
        <script>
            $(function(){
                var formMessage = $("#formMessage");
                formMessage.on("submit", function(e) {
                    e.preventDefault();

                    let token_location = $('meta[name="csrf-token"]').attr('content');
                    var name = $("#name").val();
                    var last_name = $("#last_name").val();
                    var phone = $("#phone").val();
                    var email = $("#email").val();
                    var message = $("#message").val();
                    var response =  grecaptcha.getResponse();

                    if(name == ''){
                        Swal.fire({
                        icon:'warning',
                        text: "You have to enter your name",
                        });
                        return false;
                    }

                    if(last_name == ''){
                        Swal.fire({
                        icon:'warning',
                        text: "You have to enter your last name",
                        });
                        return false;
                    }

                    if(phone == ''){
                        Swal.fire({
                        icon:'warning',
                        text: "You have to enter your namber phone",
                        });
                        return false;
                    }

                    if(email == ''){
                        Swal.fire({
                        icon:'warning',
                        text: "You have to enter your email",
                        });
                        return false;
                    }else{
                        emailRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                        if (emailRegex.test(email) != true) {
                        Swal.fire({
                            icon:'warning',
                            text: "You have to enter a valid email",
                        });
                        return false;
                        }
                    }

                    if(message == ''){
                        Swal.fire({
                        icon:'warning',
                        text: "You have to write a message",
                        });
                        return false;
                    }

                    if(response == ''){
                        Swal.fire({
                            icon:'warning',
                            text: "You have to accept the verification captcha",
                        });
                        return false;
                    }

                    Swal.fire({
                        header: '...',
                        title: 'Loading...',
                        allowOutsideClick:false,
                        didOpen: () => {
                        Swal.showLoading()
                        }
                    });

                    $.ajax({
                        url: "/menssage",
                        method: "post",
                        dataType: 'json',
                        data: {
                        _token: token_location,
                        nombre: name + '' +last_name,
                        telefono: phone,
                        email: email,
                        mensaje: message,
                        response: response,
                        },
                        success: function (response) {

                            if (response.status) {
                                Swal.fire({
                                icon: 'success',
                                title: response.msg
                                })
                            } else {
                                Swal.fire({
                                icon: 'warning',
                                title: 'Oops...',
                                text: response.msg,
                                })
                            }

                            $("#name").val('');
                            $("#last_name").val('');
                            $("#phone").val('');
                            $("#email").val('');
                            $("#message").val('');
                        },
                        error: function () {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...!!',
                                text: 'Something went wrong!',
                            })
                        }
                    });
                });
            });
      </script>
    @endpush

</x-app-layout>
