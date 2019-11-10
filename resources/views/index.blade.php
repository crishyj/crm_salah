
<!DOCTYPE html>
<html data-ng-app="LPApp" class="ng-scope">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>
        كن الاول في معرفة اسعار البتكوين قبل ارتفاعها او انخفاضها
    </title>
    <meta http-equiv="Cache-control" content="public">
    <meta name="description" content="الان عن طريق برنامج اسرار البتكوين انت قادر على معرفة أسعار البتكوين قبل تغيرها بشكل فعلي، مما يساعدك على تحقيق أرباح.">
    <link rel="icon" href="favicon.ico" type="image/png">
    <link href="{{ asset('assets/css/bootstrap.min.css')}} " rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-rtl.min.css')}} " rel="stylesheet">
    <link href="{{ asset('assets/css/loader_container.min.css')}} " type="text/css" rel="stylesheet" >
    <link href="{{ asset('assets/css/footer_light_arb.css')}} " rel="stylesheet">
    <link href="{{ asset('assets/css/bitcoin-secrets-app.min.css')}} " rel="stylesheet">
    <link href="{{ asset('assets/css/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" >
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-990859865"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-990859865');
    </script>
</head>

<body data-ng-controller="mainController" class="ng-scope">
    <section class="loader_container">
        <div class="loader-fade">
            <img src="assets/images/loader_nt.gif" alt="Netotrade loader">
            <p>يرجى الانتظار...</p>
        </div>
    </section>

    <div class="lightbox">
        <div class="inner">
            <div class="popup">
                <div class="closeBtn">
                    <span class="closePopUp">x</span>
                </div>
                <h3>
                    انتظر لحظة!
                </h3>
                <p class="txt1">
                    هل انت متأكد أنك تريد قول لا لمبلغ 5000$ تظن أني ابالغ ؟!
                    <br> من بين ال 100 مستخدم للبرنامج اليوم، هنالك
                    <br> 74 شخص حققوا 200,000$ واكثر الا تريد ان تكون واحد منهم؟
                    <br> الفرصة الأخيرة للحصول على البرنامج
                </p>
                <p class="txt2">
                    للوصول الى البرنامج ادخل اسمك وعنوان بريدك الالكتروني
                </p>
                <div class="append_on_popup">
                </div>
            </div>
        </div>
    </div>

    <div class="header_767">
        <p>
            اسرار البتكوين يتنبأ بتحركات العملة
        </p>
    </div>

    <section class="top_section">
        <div class="container">
            <h1>
                اسرار البتكوين
            </h1>
            <h2 class="sub_title">
                برنامج متميز يتنبأ بتحركات العملة الرقمية قبل حدوثها على مدار الساعة!
            </h2>
        </div>
        <div class="video_and_form_wrap">
            <div class="container">
                <div class="form_content">
                    <h2 class="desktop_txt">
                        اداة المستثمر الناجح في العالم الرقمي ابدأ باستخدامه اليوم !
                    </h2>
                    <h2 class="mobile_txt">
                        هذه فرصتك لتغيير الواقع اليوم!
                    </h2>
                    <div class="append_on_desktop">

                    <form method="post" id="Step_1_Form" class="Step_1_Form" action="" >
                            @csrf
                            <div class="row form_group_wrap">
                                <div class="”server_msg”"></div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <input class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength" type="text" id="FirstName" name="name" placeholder="الاسم بالكامل" maxlength="100">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <input class="form-control" type="email" id="Email" name="email" placeholder="البريد الإلكتروني" maxlength="100">
                                    </div>
                                </div>
                                @php
                                    $countries = \App\Models\Country::all();
                                @endphp
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <select class="form-control country ng-pristine ng-untouched ng-valid ng-valid-required" name="country_id">
                                            <option value="">الدولة</option>
                                             @foreach ($countries as $item)
                                                <option value="{{$item->id}}" phoneprefix = "{{$item->prefix}}" >{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 phone">
                                    <div class="form-group row">
                                        <div class="col-xs-9 padding-left-0">
                                            <input class="form-control phoneNumber  border-none border-radius-left-0 ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength" type="tel" name="phone" placeholder="الهاتف" maxlength="14">
                                        </div>
                                        <div class="col-xs-3 padding-right-0">
                                            <input class="form-control phoneCountryCode border-none border-radius-right-0 ng-pristine ng-untouched ng-valid ng-valid-required ng-valid-pattern ng-valid-maxlength" type="tel" name="prefix" maxlength="4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button id="submitBtn" type="submit" class="btn">
                                <span class="text_desktop btn-form-gtm">
                                    ابدأ الان !
                                </span>
                                <span class="text_popup btn-popup-gtm">
                                    احصل على البرنامج!
                                </span>
                            </button>
                        </form>

                    </div>
                </div>

                <div class="video_content">
                    <h2>
                        23 اشتراك مجاني متبقي من 100
                    </h2>
                    <div class="video">
                        <div class="slideshow_wrapper">
                            <div class="embed-container">
                                <iframe src="https://player.vimeo.com/video/300959349" width="640" height="360" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="slideshow-bottom">
                                <div class="title-counter-container">
                                    <div class="custom-counter-container">
                                        <div class="custom-counter"><span>7</span><span>3</span><span>3</span></div>
                                    </div>
                                    <div class="custom-title">
                                        <h4>
                                            شخص يشاهدون هذا الفيديو الآن
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="mobile_middle_strip_768">
        <div class="container">
            <h2>
                23 اشتراك مجاني متبقي من 100
            </h2>
        </div>
    </section>

    <section class="partners_section">
        <div class="line_top">
        </div>
        <div class="main_content">
            <div class="container">
                <div class="row">
                    <ul class="col-xs-12 hide_580">
                        <li class="col-xs-2">
                            <img src="{{ asset('assets/images/usa_icon.jpg') }}" alt="">
                        </li>
                        <li class="col-xs-2">
                            <img src="{{ asset('assets/images/amazon_icon.jpg')}} " alt="">
                        </li>
                        <li class="col-xs-2">
                            <img src=" {{asset('assets/images/forbes_icon.jpg')}} " alt="">
                        </li>
                        <li class="col-xs-2">
                            <img src=" {{asset('assets/images/directFN_icon.jpg')}} " alt="">
                        </li>
                        <li class="col-xs-2">
                            <img src=" {{asset('assets/images/oasys_icon.jpg')}} " alt="">
                        </li>
                        <li class="col-xs-2">
                            <img src=" {{asset('assets/images/bbc_icon.jpg')}} " alt="">
                        </li>
                    </ul>
                    <ul class="show_580">
                        <li class="">
                            <img src="{{ asset('assets/images/usa_icon.jpg')}} " alt="">
                        </li>
                        <li class="">
                            <img src=" {{asset('assets/images/amazon_icon.jpg')}} " alt="">
                        </li>
                        <li class="">
                            <img src=" {{asset('assets/images/forbes_icon.jpg')}} " alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="second_section">
        <div class="container">
            <div class="right_side">
                <div class="coin_img"></div>
                <div class="items woman active"></div>
                <div class="items man"></div>
                <div class="items oldMan"></div>
            </div>
            <div class="left_side">

                <div class="text_group woman_txt active">
                    <h3>
                        مجاني
                    </h3>
                    <p>
                        رغدة الشامسي معلمة
                        <br> من دبي، حققت 17,354$
                        <br> ارباح في الشهر الأول
                    </p>
                </div>

                <div class="text_group man_txt">
                    <h3>
                        تحركات بمنتهى
                        <br> الدقة
                    </h3>
                    <p>
                        منتصر بن سلمان
                        <br> من جدة، رجل اعمال
                        <br> حقق 205,959$ خلال
                        <br> شهرين
                    </p>
                </div>

                <div class="text_group old_man_txt">
                    <h3>
                        أرباح طائلة
                    </h3>
                    <p>
                        سليم الراشد من أبو ظبي،
                        <br> حقق ضعف راتبه التقاعدي
                        <br> في أسبوع، اليوم يحقق
                        <br> تقريبا 25,000$ أسبوعيا
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="second_section_767 man">
        <div class="container">
            <div class="man_wrap_767">
                <h3>
                    تحركات بمنتهى الدقة
                </h3>
                <div class="man_img_767">
                    <div class="coin_img"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="second_section_767 woman">
        <div class="container">
            <div class="woman_wrap_767">
                <h4 class="txt_top">
                    منتصر بن سلمان من جدة،
                    <br> رجل اعمال حقق 205,959$ خلال شهرين
                </h4>
                <h3>
                    مجاني
                </h3>
                <div class="woman_img_767">
                    <div class="coin_img"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="second_section_767 old_man">
        <div class="container">
            <div class="old_man_wrap_767">
                <h4 class="txt_top">
                    رغدة الشامسي معلمة من دبي،
                    <br> حققت 17,354$ ارباح في الشهر الأول
                </h4>
                <h3>
                    أرباح طائلة
                </h3>
                <div class="old_man_img_767">
                    <div class="coin_img"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="bottom_section_1199">
        <div class="container">
            <p class="woman_txt_1199" style="display: block;">
                رغدة الشامسي معلمة من دبي، حققت 17,354$ ارباح في الشهر الأول
            </p>
            <p class="man_txt_1199" style="display: none;">
                منتصر بن سلمان من جدة، رجل اعمال حقق 205,959$ خلال شهرين
            </p>
            <p class="old_man_txt_1199" style="display: none;">
                سليم الراشد من أبو ظبي، حقق ضعف راتبه التقاعدي في أسبوع، اليوم يحقق تقريبا 25,000$ أسبوعيا
            </p>
        </div>
    </section>

    <section class="bottom_section_480">
        <div class="container">
            <p>
                سليم الراشد من أبو ظبي، حقق ضعف
                <br> راتبه التقاعدي في أسبوع، اليوم يحقق
                <br> تقريبا 25,000$ أسبوعيا
            </p>
            <div class="btn">
                كُن الأفضل
            </div>
        </div>
    </section>

    <footer>
        <div>
            <ul class="first-ul">
                <li><img src="{{ asset('assets/images/visa.svg')}}" alt="visa"></li>
                <li><img src="{{ asset('assets/images/master_card.svg')}}" alt="master-card"></li>
                <li><img src="{{ asset('assets/images/visa_electron.svg')}}" alt="visa-electron"></li>
                <li><img src="{{ asset('assets/images/maestro.svg')}}" alt="maestro"></li>
                <li><img src="{{ asset('assets/images/cash_u.svg')}}" alt="cashu"></li>
                <li><img src="{{ asset('assets/images/wire_transfer.svg')}}" alt="wire-transfer"></li>
                <li><img src="{{ asset('assets/images/qiwi_wallet.svg')}}" alt="qiwi-walet"></li>
                <li><img src="{{ asset('assets/images/v_pay.svg')}}" alt="v-pay"></li>
                <li><img src="{{ asset('assets/images/american_express.svg')}}" alt="amex"></li>
                <li><img src="{{ asset('assets/images/mcafee.svg')}}" alt="mcafee"></li>
                <li><img src="{{ asset('assets/images/pci.svg')}}" alt="pci"></li>
            </ul>
        </div>
        <section>
            <p>
                ينطوي تداول العملات الأجنبية على مخاطر كبيرة وهو ليس مناسباً لجميع المستثمرين. ينبغي أن تؤخذ إمكانية تكبد خسائر كبيرة بعين الاعتبار، ولذلك فمن المهم فهم العواقب المحتملة للاستثمار. يجب على التجار وزن المكاسب المحتملة ضد المخاطر التي تنطوي عليها والتصرف
                على هذا النحو. يتم تشغيل Netotrade.com من قبل NTGX LTD. تتم معالجة معاملات بطاقات الائتمان من قبل Capital Process Ltd.
            </p>
        </section>
        <ul class="last-ul">
            <li><a href="http://astithmar.com/lp/terms.html" target="_blank" class="ng-binding">الشروط والاحكام</a></li>
            <li> | <a href="http://astithmar.com/lp/terms.html" target="_blank" class="ng-binding">سياسة الخصوصية</a></li>
            <li> | <a href="http://astithmar.com/lp/terms.html" target="_blank" class="ng-binding">كشف المخاطر</a></li>
        </ul>
    </footer>

    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/bitcoin-secrets-app.min.js')}}"></script>   
    <script src="{{ asset('assets/js/sweetalert2.min.js')}}" type="text/javascript"></script>

    <script type='text/javascript'>
        
        $('[name="country_id"]').change(function() {
            $('[name="prefix"]').val($(this).find('option:selected').attr("phoneprefix"));
        });

        $.ajax({
            url: 'https://dropmarkets.com/api/MyWebsite/GetLocationInfo',
            type: "GET",
            success: function(d) {

                $($('[name="country_id"] option').filter(function() {
                    return this.text === d.Country
                    
                })[0]).prop('selected', true);
                $('[name="prefix"]').val(d.Prefix);
            },
            error: function(e) {
                alert(e);
            }
        });

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

        function ConvertNumbers(Number) {
            var newNumber = '';
            $.each(new String(Number), function(i, n) {
                switch (n) {
                    case '٠':
                        newNumber += '0';
                        break;
                    case '١':
                        newNumber += '1';
                        break;
                    case '٢':
                        newNumber += '2';
                        break;
                    case '٣':
                        newNumber += '3';
                        break;
                    case '٤':
                        newNumber += '4';
                        break;
                    case '٥':
                        newNumber += '5';
                        break;
                    case '٦':
                        newNumber += '6';
                        break;
                    case '٧':
                        newNumber += '7';
                        break;
                    case '٨':
                        newNumber += '8';
                        break;
                    case '٩':
                        newNumber += '9';
                        break;
                    default:
                        newNumber += n;
                }
            });
            return newNumber;
        }

        $('.Step_1_Form').on('submit', function(e) {
            e.preventDefault();
           
            var Form = $(this),
                FirstName = Form.find('[name="name"]').val(),
                EmailAddress = Form.find('[name="email"]').val(),
                PhoneNumber = ConvertNumbers(Form.find('[name="phone"]').val()),
                Country = Form.find('[name="country"]').val(),
                Prefix = Form.find('[name="prefix"]').val(),  
                token = Form.find('[name="_token"]').val();          

            var Obj = {
                FirstName: FirstName,
                Country: Country,
                EmailAddress: EmailAddress,
                PhoneNumber: PhoneNumber,
                Prefix: Prefix
            }
            if (FirstName.length < 3) {
                sweetAlert("الرجاء التأكد من الأسم", "", "error");
                return
            }
            if (!checkEmail(EmailAddress)) {
                sweetAlert("الرجاء التأكد من البريد الالكتروني", "", "error");
                return
            }
            if (!PhoneNumber.match(/^\d+$/) || PhoneNumber.length < 5) {
                sweetAlert("الرجاء التأكد من رقم الهاتف", "", "error");
                return
            }
            console.log($('.Step_1_Form').serialize());
            $.ajax({
                url: "{{route('home.create')}}",
                data: $('.Step_1_Form').serialize(),
                type: "POST",
                success: function(result) {
                   
                    Form.get(0).reset();                   
                        swal({
                            type: 'success',
                            title: 'شكرا جزيلا لتسجيلك!',
                            html: 'سيتم الاتصال بك لاحقا'
                        })                  
                },
                error: function(e) {
                  
                    sweetAlert("حدث خطأ الرجاء المحاولة مرة اخرى", "error");
                }
            });

        });
    </script>
</body>
</html>