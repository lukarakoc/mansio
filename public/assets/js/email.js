function notify(type, message) {
    const Toast = Swal.mixin({
        toast: true,
        position: 'bottom-end',
        showConfirmButton: false,
        timer: 3000
    });

    Toast.fire({
        type: type,
        title: message
    });
}

function setUpAjax() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
}

function sendEmail() {

    var email = $('#email').val();
    var message = $('#message').val();
    var sender = $('#name').val();

    console.log('usao');


    var data = new FormData();
    data.append('email', email);
    data.append('message', message);
    data.append('sender', sender);

    setUpAjax();

    $.ajax({
        url: '/send-email',
        method: 'post',
        data: data,
        contentType: false,
        processData: false
    })
        .done(function () {
            notify('success', ' Your message has been successfully sent.');
            setTimeout(location.reload.bind(location), 1500);
        })
        .fail(function (response) {
            var message = JSON.parse(response.responseText).errors;
            notify('error', String(message[Object.keys(message)[0]]));
        });

}

