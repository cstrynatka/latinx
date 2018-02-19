/*$('#send').click(function (e) {
    e.preventDefault();
    var emailval = $('input#email').val();
    console.log(emailval);
    if (emailval !== "") {
        $.ajax({
            cache: false, // no cache
            url: '/echo/json/', // your url; on jsfiddle /echo/json/
            type: 'POST', // request method
            dataType: 'json', // the data type, here json. it's simple to use with php -> json_decode
            data: {
                email: emailval // here the email
            },
            success: function (data) {
                console.log(data);
                $('<strong />', {
                    text: 'Successfull subscribed!'
                }).prependTo('#state');
            },
            error: function (e) {
                $('<strong />', {
                    text: 'A error occured.'
                }).prependTo('#error');
            },
            fail: function () {
                $('<strong />', {
                    text: 'The request failed!'
                }).prependTo('#fail');
            }
        });
    } else {
        alert("Insert a email!");
    }
}); */