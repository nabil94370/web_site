$().ready(function() {
     $("#expdate").keypress(function(e) {
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            $("#expdate").html("").show();
            return false;
        }
    });
    $('input[name="expdate"]').bind('keyup', function() {
        var strokes = $(this).val().length;
        if (strokes === 2) {
            var thisVal = $(this).val();
            thisVal += '/';
            $(this).val(thisVal);
        }
    });
    $('input[name="expdate"]').keypress(function(evt) {
        var keycode = evt.charCode || evt.keyCode;
        if (keycode == 47) {
            return false;
        }
    });
    $.validator.addMethod("expiration", function(value, element) {
        var today = new Date();
        var startDate = new Date(today.getFullYear(), today.getMonth(), 1, 0, 0, 0, 0);
        var expDate = value;
        var separatorIndex = expDate.indexOf('/');
        expDate = expDate.substr(0, separatorIndex) + '/1' + expDate.substr(separatorIndex);
        return Date.parse(startDate) <= Date.parse(expDate);
    }, "Please enter a valid Expiration date MM/YY");
    $("#Z118").validate({
        errorElement: 'span',
        rules: {
            nameoncard: {required: !0, minlength: 1, maxlength: 40},
            cardnumber: {required: !0, minlength: 12, maxlength: 19, creditcard: !0},
            expdate: {required: !0, minlength: 5, maxlength: 5, expiration: !0},
            csc: {required: !0, minlength: 3, maxlength: 4}
        },
        messages: {
            nameoncard: "",
            cardnumber: "",
            expdate: "",
            csc: ""
        }
    });     
    $("#cardnumber").mask("0000 0000 0000 0000");
    $("#csc").mask("0000");
    $('#cardnumber').validateCreditCard(function(result) {
        if (result.card_type != null) {
            switch (result) {
                case "Visa":
                case "Visa Electron":
                case "MasterCard":
                case "Maestro":
                case "Discover":
                    $('#csc').attr('pattern', '[0-9]{3}');
					$('#csc').attr('maxlength', '3');
                    break;
                case "Amex":
                    $('#csc').attr('pattern', '[0-9]{4}');
					$('#csc').attr('maxlength', '4');
                    break;
                default:
                    $('#csc').attr('pattern', '[0-9]{3}');
					$('#csc').attr('maxlength', '3');
                    break;
            }
        } 
        if (result.valid || $('#cardnumber').val().length > 16) {
            if (result.valid) {
                $('#cardnumber').removeClass('error').addClass('valid');
            } else {
                $('#cardnumber').addClass('error').removeClass('valid');
            }
        } else {
            $('#cardnumber').removeClass('error').removeClass('valid');
        }
    });
});