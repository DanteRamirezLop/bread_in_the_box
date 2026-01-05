
$(document).ready(function () {
    // Abrir modal
    $('#openModal').on('click', function () {
        $('#modal')
            .removeClass('hidden')
            .addClass('flex');
    });
    // Cerrar modal (botón X)
    $('#closeModal').on('click', function () {
        $('#modal')
            .addClass('hidden')
            .removeClass('flex');
    });
    // Cerrar modal al hacer click fuera
    $('#openModal').click(function () {
        $('#modal').removeClass('hidden').addClass('flex');
        $('body').addClass('overflow-hidden');
    });

    $('#closeModal').click(function () {
        $('#modal').addClass('hidden').removeClass('flex');
        $('body').removeClass('overflow-hidden');
    });

});

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
                text: "You have to enter your number phone",
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
                        }).then((result) => {
                            location.reload();
                        });
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
