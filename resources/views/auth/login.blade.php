<!DOCTYPE html>
<html lang="en">
<head>
    <base href="../../../../">
    <meta charset="utf-8"/>
    <title>Login Page </title>
    <meta name="description" content="Login page ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <link href="{{ asset('adminpanel/assets/css/demo3/pages/login/login-4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/css/demo3/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{ asset('adminpanel/assets/media/logos/favicon.ico') }}" />
        <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <!--end::Fonts -->

    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{ asset('adminpanel/assets/css/demo3/pages/login/login-4.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="{{ asset('adminpanel/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />
    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="{{ asset('adminpanel/assets/vendors/general/tether/dist/css/tether.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/general/select2/dist/css/select2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/general/nouislider/distribute/nouislider.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/general/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/general/quill/dist/quill.snow.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/general/@yaireo/tagify/dist/tagify.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/general/summernote/dist/summernote.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/general/animate.css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/general/toastr/build/toastr.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/general/dual-listbox/dist/dual-listbox.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/general/morris.js/morris.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/general/sweetalert2/dist/sweetalert2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/general/socicon/css/socicon.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/custom/vendors/line-awesome/css/line-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/custom/vendors/flaticon/flaticon.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/custom/vendors/flaticon2/flaticon.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{ asset('adminpanel/assets/css/demo3/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <!--end::Layout Skins -->

    <link rel="shortcut icon" href="{{ asset('adminpanel/assets/media/logos/favicon.ico') }}" />
    </head>
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    <div class="kt-grid kt-grid--ver kt-grid--root kt-page">
        <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url({{ asset('adminpanel/assets/media/bg/bg-2.jpg') }});">
                <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                    <div class="kt-login__container">
                        <div class="kt-login__logo">
                            <a href="#">
                                <img src="https://cdn-icons-png.freepik.com/256/4521/4521422.png?semt=ais_hybrid" style="width: 120px; height: 120px;">
                            </a>
                        </div>

                        {{-- Sign In Form --}}
                        <div class="kt-login__signin">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">Sign In To Hospital</h3>
                            </div>
                            <form class="kt-form kt-form--label-right" method="POST" action="{{route('login')}}" enctype="multipart/form-data">
                                <div class="input-group">
                                    @csrf
                                    <input class="form-control" type="text" placeholder="Email" name="email">
                                </div>
                                <div class="input-group">
                                    <input class="form-control" type="password" placeholder="Password" name="password">
                                </div>
                                <div class="row kt-login__extra">
                                    <div class="col">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="remember"> Remember me
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="col kt-align-right">
                                        <a href="javascript:;" id="kt_login_forgot" class="kt-login__link">Forget Password ?</a>
                                    </div>
                                </div>
                                <div class="kt-login__actions">
                                    <button id="kt_login_signin_submit" class="btn btn-brand btn-pill kt-login__btn-primary">Sign In</button>
                                </div>
                            </form>
                        </div>

                        {{-- Sign Up Form --}}
                        <div class="kt-login__signup">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">Sign Up</h3>
                                <div class="kt-login__desc">Enter your details to create your account:</div>
                            </div>
                            <form class="kt-form kt-form--label-right" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Name" name="first_name">
                                </div>
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Fullname" name="last_name">
                                </div>
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Fullname" name="fullname">
                                </div>
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
                                </div>
                                <div class="input-group">
                                    <input class="form-control" type="password" placeholder="Password" name="password">
                                </div>
                                <div class="input-group">
                                    <input class="form-control" type="password" placeholder="Confirm Password" name="password_confirmation">
                                </div>
                                <div class="row kt-login__extra">
                                    <div class="col kt-align-left">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="agree">I Agree the
                                            <a href="#" class="kt-link kt-login__link kt-font-bold">terms and conditions</a>.
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="kt-login__actions">
                                    <button id="kt_login_signup_submit" class="btn btn-brand btn-pill kt-login__btn-primary">Sign Up</button>&nbsp;&nbsp;
                                    <button type="button" id="kt_login_signup_cancel" class="btn btn-secondary btn-pill kt-login__btn-secondary">Cancel</button>
                                </div>
                            </form>
                        </div>

                        {{-- Forgot Password --}}
                        <div class="kt-login__forgot">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">Forgotten Password ?</h3>
                                <div class="kt-login__desc">Enter your email to reset your password:</div>
                            </div>
                            <form class="kt-form kt-form--label-right" method="POST" action="{{ route('password.email') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
                                </div>
                                <div class="kt-login__actions">
                                    <button id="kt_login_forgot_submit" class="btn btn-brand btn-pill kt-login__btn-primary">Request</button>&nbsp;&nbsp;
                                    <button type="button" id="kt_login_forgot_cancel" class="btn btn-secondary btn-pill kt-login__btn-secondary">Cancel</button>
                                </div>
                            </form>
                        </div>

                        <div class="kt-login__account">
                            <span class="kt-login__account-msg">Don't have an account yet ?</span>
                            &nbsp;&nbsp;
                            <a href="javascript:;" id="kt_login_signup" class="kt-login__account-link">Sign Up!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Scripts --}}
    <script src="{{ asset('adminpanel/assets/vendors/general/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/popper.js/dist/umd/popper.js') }}"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#2c77f4",
                    "light": "#ffffff",
                    "dark": "#282a3c",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                    "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                }
            }
        };

        // Xử lý đăng nhập
        $(document).ready(function() {
            $('.kt-form').on('submit', function(e) {
                e.preventDefault();

                var form = $(this);
                var url = form.attr('action');

                // Reset error messages
                form.find('.is-invalid').removeClass('is-invalid');
                form.find('.invalid-feedback').remove();

                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(),
                    success: function(response) {
                        if (response.success) {
                            toastr.success('Thao tác thành công!');
                            if (form.find('input[name="email"]').val()) {
                                window.location.href = '/admin';
                            }
                        } else {
                            toastr.error(response.message || 'Có lỗi xảy ra!');
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                var input = form.find('[name="' + key + '"]');
                                input.addClass('is-invalid');
                                input.after('<div class="invalid-feedback">' + value[0] + '</div>');
                                toastr.error(value[0]);
                            });
                        } else {
                            var message = 'Có lỗi xảy ra!';
                            if (xhr.responseJSON && xhr.responseJSON.message) {
                                message = xhr.responseJSON.message;
                            }
                            toastr.error(message);
                        }
                    }
                });
            });

            // Cấu hình toastr
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
        });
    </script>

            <!-- end::Global Config -->

            <!--begin:: Global Mandatory Vendors -->
    <!--begin:: Global Mandatory Vendors -->
    <script src="{{ asset('adminpanel/assets/vendors/general/jquery/dist/jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/popper.js/dist/umd/popper.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/js-cookie/src/js.cookie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/moment/min/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/sticky-js/dist/sticky.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/wnumb/wNumb.js') }}" type="text/javascript"></script>
    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <script src="{{ asset('adminpanel/assets/vendors/general/jquery-form/dist/jquery.form.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/block-ui/jquery.blockUI.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/custom/js/vendors/bootstrap-switch.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/select2/dist/js/select2.full.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/typeahead.js/dist/typeahead.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/handlebars/dist/handlebars.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/nouislider/distribute/nouislider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/owl.carousel/dist/owl.carousel.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/autosize/dist/autosize.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/clipboard/dist/clipboard.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/dropzone/dist/dropzone.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/custom/js/vendors/dropzone.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/quill/dist/quill.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/@yaireo/tagify/dist/tagify.polyfills.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/@yaireo/tagify/dist/tagify.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/summernote/dist/summernote.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/markdown/lib/markdown.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/custom/js/vendors/bootstrap-markdown.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/custom/js/vendors/bootstrap-notify.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/jquery-validation/dist/additional-methods.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/custom/js/vendors/jquery-validation.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/dual-listbox/dist/dual-listbox.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/raphael/raphael.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/morris.js/morris.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/chart.js/dist/Chart.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/waypoints/lib/jquery.waypoints.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/counterup/jquery.counterup.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/es6-promise-polyfill/promise.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/sweetalert2/dist/sweetalert2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/custom/js/vendors/sweetalert2.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/jquery.repeater/src/lib.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/jquery.repeater/src/jquery.input.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/jquery.repeater/src/repeater.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminpanel/assets/vendors/general/dompurify/dist/purify.js') }}" type="text/javascript"></script>
    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="{{ asset('adminpanel/assets/js/demo3/scripts.bundle.js') }}" type="text/javascript"></script>
    <!--end::Global Theme Bundle -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="{{ asset('adminpanel/assets/js/demo3/pages/login/login-general.js') }}" type="text/javascript"></script>
    <!--end::Page Scripts -->
</body>
</html>
