<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../">
		<title>Sign In - Cinta Kitab Suci</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="{{ asset('assets') }}/media/logos/favicon.png" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('assets') }}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets') }}/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            html, body {
                height: 100%;
                overflow:hidden;
            }
            .navbar-light .navbar-toggler-icon {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='white' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            }
            .navbar-toggler {
                border: 1px solid white !important;
                border-radius: 0;
            }
            a.navbar-brand,
            .navbar-nav a:hover {
                color: rgb(106, 106, 250) !important;
            }
            .tengah{
                width: 50%;
                margin: 0 auto;
            }
        </style>
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
			<!--begin::Content-->
                <div class="row">
                    <div class="col-md">
                            <!--begin::Wrapper-->
                            <div class="w-lg-500px bg-body p-10 p-lg-15 mx-auto mt-2">
                                <!--begin::Form-->
                                <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="../../demo1/dist/index.html" action="#">
                                    <!--begin::Heading-->
                                    <!--begin::Logo-->
                                    <div class="text-center mb-7">
                                        <a href="../../demo1/dist/index.html" class="mb-12">
                                            <img alt="Logo" src="{{ asset('assets') }}/media/logos/logo-cks.png" style="max-height:125px" />
                                        </a>
                                    </div>
                                    <!--end::Logo-->
                                    <div class="text-center mb-10">
                                        <!--begin::Title-->
                                        <h1 class="text-dark mb-3 fw-bold">Sign In</h1>
                                        <!--end::Title-->
                                        <!--begin::Link-->
                                        <p class="text-gray-400 fw-bold fs-5 fw-bold">New Here?
                                            <button type="button" class="btn btn-sm text-gray-400 fw-bold fs-6 mb-1" data-bs-toggle="modal" data-bs-target="#register">
                                                Create Account
                                            </button>
                                        </p>
                                        <!--end::Link-->
                                    </div>
                                    <!--begin::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fs-6 fw-bolder text-dark">Whatsapp</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack mb-2">
                                            <!--begin::Label-->
                                            <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                            <!--end::Label-->
                                            <!--begin::Link-->
                                            <a href="../../demo1/dist/authentication/layouts/basic/password-reset.html" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="text-center">
                                        <!--begin::Submit button-->
                                        <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                            <span class="indicator-label">Sign In</span>
                                            <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                        <!--end::Submit button-->
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Wrapper-->
                    </div>
                    {{-- col 1 --}}
                    <div class="col-md" >
                        <img alt="Logo" src="{{ asset('assets') }}/media/logos/religion-cks.png" style="width: 680px; height: 625px;"/>
                    </div>
                    {{-- col 2 --}}
                </div>
                {{-- row --}}
			<!--end::Content-->
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
        <!-- Modal Register -->
        <div class="modal fade" id="register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="register" aria-hidden="true">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="register">
                      <div class="text-center">
                        <a href="../../demo1/dist/index.html" class="mb-12">
                            <img alt="Logo" src="{{ asset('assets') }}/media/logos/logo-cks.png" style="max-height:50px" />
                        </a>
                      </div>
                    </h5>
                    <div class="text-dark-left text-dark mt-2 fw-bold">
                        <p>Step 1: Create Account</p>
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
                <div class="modal-body text-center">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav mx-auto">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link active" id="type-tab" data-bs-toggle="tab" data-bs-target="#type" type="button" role="tab" aria-controls="type" aria-selected="true">Account Type</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="step2 nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Account Settings</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="step3 nav-link" id="groups-tab" data-bs-toggle="tab" data-bs-target="#groups" type="button" role="tab" aria-controls="groups" aria-selected="false">Details Groups</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="step4 nav-link" id="completed-tab" data-bs-toggle="tab" data-bs-target="#completed" type="button" role="tab" aria-controls="completed" aria-selected="false">Completed</button>
                                      </li>
                                  </ul>
                            </div>
                          </div>
                        </div>
                      </nav>
                      <form id="my-form" method="post">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="type" role="tabpanel" aria-labelledby="type-tab">
                                <div class="mt-2">
                                    <h3>Select Account Type</h3>
                                    <h5>if you need more info, please check out <a href="{{ url('faq') }}">FAQ Page</a></h5>
                                </div>
                                <input type="hidden" name="role_id" id="role_id">
                                <div class="text-center mt-4">
                                    <a href="#" class="mb-12">
                                        <img class="role-admin" alt="Logo" src="{{ asset('assets') }}/media/logos/leader.png" style="max-width:40%" />
                                    </a>
                                </div>
                                <div class="text-center mt-3 mb-5">
                                    <a href="#" class="mb-12">
                                        <img class="role-member" alt="Logo" src="{{ asset('assets') }}/media/logos/member.png" style="max-width:40%" />
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                    <div class="mt-2">
                                        <h3>Account Settings</h3>
                                        <h5>if you need more info, please check out <a href="{{ url('faq') }}">FAQ Page</a></h5>
                                    </div>
                                <div class="tengah border pb-4" style="width:65%;border-radius:2rem;">
                                    <div class="tengah row mt-4">
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" placeholder="First name">
                                        </div>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="tengah row mt-4">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" placeholder="Email (Optional)">
                                        </div>
                                    </div>
                                    <div class="tengah row mt-4">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" placeholder="Whatsapp">
                                        </div>
                                    </div>
                                    <div class="tengah row mt-4">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                    <div class="tengah row mt-4">
                                        <div class="col-sm-6">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Date of birth
                                          </button>
                                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                          </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                                Month of birth
                                              </button>
                                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                              </ul>
                                        </div>
                                    </div>
                                    <div class="tengah row mt-4">
                                        <div class="col-sm-6">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Gender
                                          </button>
                                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                          </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                                Religion
                                              </button>
                                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                              </ul>
                                        </div>
                                    </div>
                                </div>
                                    <div class="tengah row">
                                        <div class="col-sm-6 mt-4" style="float: left">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                                        </div>
                                        <div class="col-sm-6 mt-4" style="float: right">
                                            <button type="button" class="btn btn-primary">Details Groups</button>
                                        </div>
                                    </div>
                                </div>
                            <div class="tab-pane fade" id="groups" role="tabpanel" aria-labelledby="groups-tab">
                                    <div class="mt-2">
                                        <h3>Details Groups</h3>
                                        <h5>if you need more info, please check out <a href="{{ url('faq') }}">FAQ Page</a></h5>
                                    </div>
                            </div>
                            <div class="tab-pane fade" id="completed" role="tabpanel" aria-labelledby="completed-tab">
                                    <div class="mt-2">
                                        <h3>Completed</h3>
                                        <h5>if you need more info, please check out <a href="{{ url('faq') }}">FAQ Page</a></h5>
                                    </div>
                            </div>
                        </div>
                    </form>
                {{-- <div class="text-center">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Understood</button>
                </div> --}}
                </div>
              </div>
            </div>
          </div>
        <!-- end Modal Register -->
		<!--begin::Javascript-->
		<script>var hostUrl = "{{ asset('assets') }}/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{  asset('assets') }}/plugins/global/plugins.bundle.js"></script>
		<script src="{{  asset('assets') }}/js/scripts.bundle.js"></script>
        {{-- bootstrap JS --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{  asset('assets') }}/js/custom/authentication/sign-in/general.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
        <script>
            $(document).ready(function(){
                let role = '';
                
                $('.role-admin').on('click', function(){
                    role = 'admin';
                    $('#role_id').val(role);
                    console.log('string');
                });

                $('.role-member').on('click', function(){
                    role = 'member';
                    $('#role_id').val(role);
                    console.log('string2');
                });
            });
        </script>
	</body>
	<!--end::Body-->
</html>