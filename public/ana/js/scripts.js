$(function() {
    function checkEmail(email) {
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(email))
            return false;
        return true;
    }

    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    $.ajax({
        url: 'https://dropmarkets.com/api/MyWebsite/GetLocationInfo',
        type: "GET",
        success: function(d) {
            $('input[name="Country"],input[name="Country2"]').val(d.Country);
            $('input[name="Prefix"],input[name="Prefix2"]').val(d.Prefix);
        },
        error: function(e) {
            alert(e);
        }
    });
    $('.submitForm').click(function() {
        var Form = $(this).closest('form'),
            FirstName = Form.find('input[name="FirstName"]').val(),
            LastName = Form.find('input[name="LastName"]').val(),
            EmailAddress = Form.find('input[name="EmailAddress"]').val(),
            PhoneNumber = Form.find('input[name="PhoneNumber"]').val(),
            Country = Form.find('input[name="Country"]').val(),
            Prefix = Form.find('input[name="Prefix"]').val();

        if (FirstName.length > 2) {
            if (checkEmail(EmailAddress)) {
                if (PhoneNumber.match(/^\d+$/) && PhoneNumber.length > 3) {
                    $.ajax({
                        url: '../admin/add_user1.php',
                        async: false,
                        data: {
                            AppId: '727ad6dc-4e71-407a-bd05-6c22f0a60c4e',
                            LpName: getParameterByName('camp'),
                            ClientGroupId: '19',
                            FirstName: FirstName,
                            LastName: LastName,
                            Country: Country,
                            EmailAddress: EmailAddress,
                            PhoneNumber: PhoneNumber,
                            Prefix: Prefix
                        },
                        type: "POST",
                        success: function(result) {

                            swal({
                                type: 'success',
                                title: 'شكرا جزيلا لتسجيلك!',
                                html: 'سيتم الاتصال بك لاحقا'
                            })
                        },
                        error: function(e) {
                            sweetAlert("Oops...", "حدث خطأ الرجاء المحاولة مرة اخرى", "error");
                        }
                    });
                } else {
                    sweetAlert("Oops...", "الرجاء التأكد من رقم الهاتف", "error");
                }
            } else {
                sweetAlert("Oops...", "الرجاء التأكد من البريد الالكتروني", "error");
            }
        } else {
            sweetAlert("Oops...", "الرجاء التأكد من الاسم", "error");
        }
    });
});