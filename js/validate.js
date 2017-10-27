$("#template-contactform").submit(function () {

    var flag = 0;

    $("form input").each(function () {
        if ($(this).val() == "") {
            $(this).addClass('error');
            flag++
        }
    });


    if (flag > 0) {
        return false;
    }

});

$("input").change(function () {
    if ($(this).hasClass('error')) {
        $(this).removeClass('error');
    }

});

if ($(".errormsg")[0]) {
    $('.errormsg').fadeOut(7000, function () {
            $(this).remove();
        }
    );
}

if ($(".successmsg")[0]) {
    $('.successmsg').fadeOut(7000, function () {
            $(this).remove();
        }
    );
}


