<!DOCTYPE html>
<html dir='rtl' lang='ar'>

<head>
<title>تداول الذهب</title>
<meta charset="UTF-8" http-equiv="content-type">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">

<link href='{{ asset('ana/css/bootstrap.min.css')}}' rel='stylesheet'>
<link href='{{ asset('ana/css/themify-icons.css')}}' rel='stylesheet'>
<link href='{{ asset('ana/css/sweetalert2.min.css')}}' rel='stylesheet'>
<link href='{{ asset('ana/css/jzoor-font.css')}}' rel='stylesheet'>
<link href='{{ asset('ana/css/style.css')}}' rel='stylesheet'>

<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-990859865');
</script>

</head>

<body>
<header>
    <div class='container'>
        <div class='row'>
            <div class='col-md-3 col-sm-5 col-5'>
            </div>
            <div class='col-md-12'></div>
            <div class='col-md-8 col-sm-12'>
                <h1>انطلق نحو الذهب</h1>
                <h2>ابدأ حياتك في تداول الذهب وأفتح افاق جديدة للربح</h2>
                <p style='font-size: 18px;'>يمكنك الأن التداول بكل ثقة على واحدة من كبرى شبكات التداول الرائدة في العالم</p>
                <a class='link' href=''>ابدأ بالتداول</a>
            </div>
            <div class='col-md-4 col-sm-12'>
                <form id="formwork1" class="row">
                    @csrf
                    <input type="hidden" name="serial_num" value="{{$camp}}">
                    <div class="form-group col-md-12">
                        <input type="text" name="fname" placeholder="الاسم الاول">
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" name="lname" placeholder="الاسم الاخير">
                    </div>
                    <div class="form-group col-md-12">
                        <input type="email" name="email" placeholder="البريد الإلكتروني">
                    </div>
                    @php
                        $countries = \App\Models\Country::all();
                    @endphp
                    <div class="form-group col-md-6">
                        <select class="form-control country ng-pristine ng-untouched ng-valid ng-valid-required" name="country_id" style="height:47px;">
                            <option value="">الدولة</option>
                                @foreach ($countries as $item)
                                <option value="{{$item->id}}" phoneprefix = "{{$item->prefix}}" >{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="tel" name="phone" placeholder="رقم الهاتف">
                    </div>
                    <div class="col-md-12">
                        <a class='submitForm button' id = "submitForm1">اشتراك</a>
                    </div>
                    <input type="hidden" name="Prefix">
                </form>
            </div>
        </div>
    </div>
</header>

<section id='points' class='container'>
    <div class='row text-center'>
        <div class='item col-lg-4 col-md-4 col-sm-12 col-12'>
            <i class='ti-5x ti-shield'></i>
            <div class='item-body'>
                <h3>خصوصية</h3>
                <span>لن نشارك بياناتك الخاصة بدون اذنك</span>
            </div>
        </div>
        <div class='item col-lg-4 col-md-4 col-sm-12 col-12'>
            <i class='ti-5x ti-lock'></i>
            <div class='item-body'>
                <h3>مؤمّنة</h3>
                <span>سيتم الأحتفاظ بأموالك في أمان في بنوك عالمية من الدرجة الأولى</span>
            </div>
        </div>
        <div class='item col-lg-4 col-md-4 col-sm-12 col-12'>
            <i class='ti-5x ti-check-box'></i>
            <div class='item-body'>
                <h3>التزام تام بالقانون</h3>
                <span>تعمل تحت مظلة وإشراف أكبر منظمين محليينن وعالميين</span>
            </div>
        </div>
    </div>
</section>

<section id='msg'>
    <div class='container'>
        <h2>أسعار الذهب ترتفع لا تضيع الفرصه</h2>
        <h4>قم بالإيداع الأن وسنقوم بزيادة إيداعك</h4>
        <br>
        <a class='link1' href=''>ابدأ بالتداول</a>
    </div>
</section>

<section id='advs' class='container'>
    <div class='row'>
        <div class='col-md-12 text-center'>
            <h2>انضم الى فريق تداولي ناجح</h2>
        </div>
        <div class='col-md-7'>
            <i class='ti-stats-up ti-3x'></i>
            <h3>تحليلاتنا في سوق تداول الذهب اثبتت وبجدارة خلال الأشهر الماضية على أكبر نسبة أرباح لعملائنا</h3>
            <div class='row'>
                <div class='col-md-8'>
                    <h4>الإيجابيات</h4>
                    <div class='item'>
                        <i class='ti-check ti-2x'></i>
                        <span>ميزات تداول اجتماعي كثيرة</span>
                    </div>
                    <div class='item'>
                        <i class='ti-check ti-2x'></i>
                        <span>حساب تجريبي</span>
                    </div>
                    <div class='item'>
                        <i class='ti-check ti-2x'></i>
                        <span>تشريع عالي</span>
                    </div>
                </div>
                <div class='col-md-4 col-pull-md-1'>
                    <h4>السلبيات</h4>
                    <div class='item'>
                        <i class='ti-world ti-1x'></i>
                        <span>انتشارات عالية</span>
                    </div>
                </div>
            </div>
        </div>
        <div class='col-md-5'>
            <img src='ana/images/b5.jpeg'>
        </div>
    </div>
</section>

<section id='form'>
    <div class='container text-center'>
        <h2>ابدأ التداول الآن</h2>
        <h3>أو يمكنك تجربة حساب تجريبي مجاني</h3>
        <br>
        <form id="formwork2" class="row">
            @csrf
            <input type="hidden" name="serial_num" value="{{$camp}}">
            <div class="form-group col-md-6">
                <input type="text" name="fname" placeholder="الاسم الاول">
            </div>
            <div class="form-group col-md-6">
                <input type="text" name="lname" placeholder="الاسم الاخير">
            </div>
            <div class="form-group col-md-6">
                <input type="email" name="email" placeholder="البريد الإلكتروني">
            </div>
            @php
                $countries = \App\Models\Country::all();
            @endphp
            <div class="form-group col-md-6">
                <select class="form-control country ng-pristine ng-untouched ng-valid ng-valid-required" name="country_id" style="height:47px;">
                    <option value="">الدولة</option>
                        @foreach ($countries as $item)
                        <option value="{{$item->id}}" phoneprefix = "{{$item->prefix}}" >{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <input type="tel" name="phone" placeholder="رقم الهاتف">
            </div>
            <div class="col-md-6">
                <a class='submitForm button' id = "submitForm2">اشتراك</a>
            </div>
            <input type="hidden" name="Prefix" >
        </form>
    </div>
</section>

<footer>
    <div class='container'>
        <div class='row'>
            <div class='col-lg-6 col-md-6 col-sm-12 col-12 text-right' id='links'>
                <a href='http://astithmar.com/lp/terms.html' target="_blank">الخصوصية والامان</a>|
                <a href='http://astithmar.com/lp/terms.html' target="_blank">شروط الإستخدام</a>|
                <a href='http://astithmar.com/lp/terms.html' target="_blank">إتفاقية العمل</a>|
                <a href='http://astithmar.com/lp/terms.html' target="_blank">الشروط والأحكام</a>
            </div>
            <div class='col-lg-6 col-md-6 col-sm-12 col-12 text-left' id='social'>
                <a href='#'><i class='ti-facebook'></i></a>
                <a href='#'><i class='ti-twitter'></i></a>
                <a href='#'><i class='ti-youtube'></i></a>
                <a href='#'><i class='ti-apple'></i></a>
            </div>
        </div>
    </div>
</footer>

<script src='{{ asset('ana/js/jquery-3.2.1.min.js')}}'></script>
<script src='{{ asset('ana/js/bootstrap.bundle.min.js')}}'></script>
<script src='{{ asset('ana/js/sweetalert2.min.js')}}'></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=AW-990859865"></script>

<script>
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

            $('[name="country_id"]').change(function() {
                $('[name="Prefix"]').val($(this).find('option:selected').attr("phoneprefix"));
            });

            $.ajax({
                url: 'https://dropmarkets.com/api/MyWebsite/GetLocationInfo',
                type: "GET",
                success: function(d) {
                    $($('[name="country_id"] option').filter(function() {
                        return this.text === d.Country
                    })[0]).prop('selected', true);

                    $($('[name="country_id"] option').filter(function() {
                        return this.text === d.Country
                    })[1]).prop('selected', true);

                    $('[name="Prefix"]').val(d.Prefix);
                },
                error: function(e) {
                    alert(e);
                }
            });


            $('#submitForm1').click(function() {
                var Form = $(this).closest('form'),
                    FirstName = Form.find('input[name="fname"]').val(),
                    LastName = Form.find('input[name="lname"]').val(),
                    EmailAddress = Form.find('input[name="email"]').val(),
                    PhoneNumber = Form.find('input[name="phone"]').val(),
                    Country = Form.find('input[name="Country"]').val(),
                    Prefix = Form.find('input[name="Prefix"]').val();

                    console.log($('#formwork1').serialize());
                if (FirstName.length > 2) {
                    if (checkEmail(EmailAddress)) {
                        if (PhoneNumber.match(/^\d+$/) && PhoneNumber.length > 3) {
                            $.ajax({
                                url: "{{route('anapart.create')}}",
                                async: false,
                                data: $('#formwork1').serialize(),
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

            $('#submitForm2').click(function() {
                var Form = $(this).closest('form'),
                    FirstName = Form.find('input[name="fname"]').val(),
                    LastName = Form.find('input[name="lname"]').val(),
                    EmailAddress = Form.find('input[name="email"]').val(),
                    PhoneNumber = Form.find('input[name="phone"]').val(),
                    Country = Form.find('input[name="Country"]').val(),
                    Prefix = Form.find('input[name="Prefix"]').val();

                if (FirstName.length > 2) {
                    if (checkEmail(EmailAddress)) {
                        if (PhoneNumber.match(/^\d+$/) && PhoneNumber.length > 3) {
                            $.ajax({
                                url: "{{route('anapart.create')}}",
                                async: false,
                                data: $('#formwork2').serialize(),
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
</script>
</body>

</html>
