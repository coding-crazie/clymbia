<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3KZV2TPM7F"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3KZV2TPM7F');
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>::Refundments::  Security </title>
    <link rel="icon" href="/images/btcweblogo.png" type="image/x-icon"> <!-- Favicon-->
    
    <!-- project css file  -->
    <link rel="stylesheet" href="side-page-assets/css/cryptoon.style.min.css">
</head>
<body>
    <div id="cryptoon-layout" class="theme-orange">
        
        <!-- sidebar -->
        <x-sidebar></x-sidebar>


        <!-- main body area -->
        <div class="main px-lg-4 px-md-4">

            <!-- Body: Header -->
            <x-header></x-header>


            <!-- Body: Titel Header -->
            <div class="body-header border-bottom d-flex py-3">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <div class="col-xl-12">
                            <!-- Pretitle -->
                            <h1 class="h4 mt-1">Security</h1>
                        </div>
                    </div> <!-- Row end  -->
                </div>
            </div>

            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">
                    <div class="row align-item-center mb-3">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent align-items-center ">
                                    <h6 class="mb-0 fw-bold">Authentication (2FA)</h6>
                                </div>
                                <div class="card-body">
                                    <div class="border-bottom py-2 mb-2">
                                        <div class="row justify-content-between">
                                            <div class="col-lg-4 col-xl-4">
                                                <div class="d-flex">
                                                    <i class="icofont-key fs-5 text-primary"></i>
                                                    <div class="d-flex flex-column px-2">
                                                        <span class="fw-bold">Security Key</span>
                                                        <span class="text-muted small">Protect your account with a security key.</span>
                                                    </div>
                                                </div>   
                                            </div>
                                            <div class="col-lg-4 col-xl-4">
                                                <div class="d-flex align-items-center">
                                                    <i class="icofont-close-circled fs-5 text-danger"></i>
                                                    <span class="px-2">Unset</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-xl-4">
                                                <button type="button" class="btn flex-fill btn-light-warning py-2 fs-6 text-uppercase px-3 mt-2 mt-lg-0 float-lg-end" data-bs-toggle="modal" data-bs-target="#EnableModal">Enable</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-bottom py-2 mb-2">
                                        <div class="row justify-content-between">
                                            <div class="col-lg-4 col-xl-4">
                                                <div class="d-flex">
                                                    <i class="icofont-network fs-5 text-primary"></i>
                                                    <div class="d-flex flex-column px-2">
                                                        <span class="fw-bold">Google Authenticator (Recommended)</span>
                                                        <span class="text-muted small">Protect your account and transactions.</span>
                                                    </div>
                                                </div>   
                                            </div>
                                            <div class="col-lg-4 col-xl-4">
                                                <div class="d-flex align-items-center">
                                                    <i class="icofont-close-circled fs-5 text-danger"></i>
                                                    <span class="px-2">Unset</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-xl-4">
                                                <button type="button" class="btn flex-fill btn-light-warning py-2 fs-6 text-uppercase px-3 mt-2 mt-lg-0 float-lg-end" data-bs-toggle="modal" data-bs-target="#EnableModal">Enable</button>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="border-bottom py-2 mb-2">
                                        <div class="row justify-content-between">
                                            <div class="col-lg-4 col-xl-4">
                                                <div class="d-flex">
                                                    <i class="icofont-smart-phone fs-5 text-primary"></i>
                                                    <div class="d-flex flex-column px-2">
                                                        <span class="fw-bold">Phone Number Verification</span>
                                                        <span class="text-muted small">Protect your account and transactions.</span>
                                                    </div>
                                                </div>   
                                            </div>
                                            <div class="col-lg-4 col-xl-4">
                                                <div class="d-flex align-items-center">
                                                    <i class="icofont-check-circled fs-5 text-success"></i>
                                                    <span class="px-2">98****478</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-xl-4">
                                                <button type="button" class="btn flex-fill btn-light-danger py-2 fs-6 text-uppercase px-3 mt-2 mt-lg-0 float-lg-end" data-bs-toggle="modal" data-bs-target="#RemoveModal">Remove</button>
                                                <button type="button" class="btn flex-fill btn-light-success py-2 fs-6 text-uppercase px-3 mt-2 mt-lg-0 float-lg-end mx-2" data-bs-toggle="modal" data-bs-target="#ChangeModal">Change</button>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="py-2">
                                        <div class="row justify-content-between">
                                            <div class="col-lg-4 col-xl-4">
                                                <div class="d-flex">
                                                    <i class="icofont-email fs-5 text-primary"></i>
                                                    <div class="d-flex flex-column px-2">
                                                        <span class="fw-bold">Email Address Verification</span>
                                                        <span class="text-muted small">Protect your account and transactions.</span>
                                                    </div>
                                                </div>   
                                            </div>
                                            <div class="col-lg-4 col-xl-4">
                                                <div class="d-flex align-items-center">
                                                    <i class="icofont-check-circled fs-5 text-success"></i>
                                                    <span class="px-2">{{Auth::user()->email}}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-xl-4">
                                                {{-- <button type="button" class="btn flex-fill btn-light-danger py-2 fs-6 text-uppercase px-3 mt-2 mt-lg-0 float-lg-end" data-bs-toggle="modal" data-bs-target="#RemoveModal">Remove</button> --}}
                                                <a href="{{url('/change-email')}}" type="button" class="btn flex-fill btn-light-success py-2 fs-6 text-uppercase px-3 mt-2 mt-lg-0 float-lg-end mx-2" >Change</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row align-item-center mb-3">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent align-items-center ">
                                    <h6 class="mb-0 fw-bold">Advanced Security</h6>
                                </div>
                                <div class="card-body">
                                    <div class="py-2">
                                        <div class="row justify-content-between">
                                            <div class="col-lg-4 col-xl-4">
                                                <div class="d-flex">
                                                    <i class="icofont-email fs-5 text-primary"></i>
                                                    <div class="d-flex flex-column px-2">
                                                        <span class="fw-bold">Login Password</span>
                                                        <span class="text-muted small">Protect your account and transactions.</span>
                                                    </div>
                                                </div>   
                                            </div>
                                            <div class="col-lg-4 col-xl-4">
                                                <!--<div class="d-flex align-items-center">-->
                                                <!--    <i class="icofont-check-circled fs-5 text-success"></i>-->
                                                <!--    <span class="px-2">{{Auth::user()->password}}</span>-->
                                                <!--</div>-->
                                            </div>
                                            <div class="col-lg-4 col-xl-4">
                                                {{-- <button type="button" class="btn flex-fill btn-light-danger py-2 fs-6 text-uppercase px-3 mt-2 mt-lg-0 float-lg-end" data-bs-toggle="modal" data-bs-target="#RemoveModal">Remove</button> --}}
                                                <a href="{{url('/change-password')}}" type="button" class="btn flex-fill btn-light-success py-2 fs-6 text-uppercase px-3 mt-2 mt-lg-0 float-lg-end mx-2"  >Change</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-bottom py-2 mb-2">
                                        <div class="row justify-content-between">
                                            <div class="col-lg-4 col-xl-4">
                                                <div class="d-flex">
                                                    <i class="icofont-tasks fs-5 text-primary"></i>
                                                    <div class="d-flex flex-column px-2">
                                                        <span class="fw-bold">Withdrawal Whitelist</span>
                                                        <span class="text-muted small">whitelisted withdrawal addresses.</span>
                                                    </div>
                                                </div>   
                                            </div>
                                            <div class="col-lg-4 col-xl-4">
                                                <div class="d-flex align-items-center">
                                                    <i class="icofont-close-circled fs-5 text-danger"></i>
                                                    <span class="px-2">OFF</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-xl-4">
                                                <button type="button" class="btn flex-fill btn-light-warning py-2 fs-6 text-uppercase px-3 mt-2 mt-lg-0 float-lg-end" data-bs-toggle="modal" data-bs-target="#EnableModal">Enable</button>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="py-2">
                                        <div class="row justify-content-between">
                                            <div class="col-lg-4 col-xl-4">
                                                <div class="d-flex">
                                                    <i class="icofont-anchor fs-5 text-primary"></i>
                                                    <div class="d-flex flex-column px-2">
                                                        <span class="fw-bold">Anti-Phishing Code</span>
                                                        <span class="text-muted small">Protect your account from phishing attempts </span>
                                                    </div>
                                                </div>   
                                            </div>
                                            <div class="col-lg-4 col-xl-4">
                                                <div class="d-flex align-items-center">
                                                    <i class="icofont-close-circled fs-5 text-danger"></i>
                                                    <span class="px-2">OFF</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-xl-4">
                                                <button type="button" class="btn flex-fill btn-light-warning py-2 fs-6 text-uppercase px-3 mt-2 mt-lg-0 float-lg-end" data-bs-toggle="modal" data-bs-target="#EnableModal">Enable</button>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                </div>
            </div>
        
            <!-- Modal Custom Settings-->
            <div class="modal fade right" id="Settingmodal" tabindex="-1"  aria-hidden="true">
                <div class="modal-dialog  modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Custome Settings</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body custom_setting">
                            <!-- Settings: Color -->
                            <div class="setting-theme pb-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-color-bucket fs-4 me-2 text-primary"></i>Template Color Settings</h6>
                                <ul class="list-unstyled row row-cols-3 g-2 choose-skin mb-2 mt-2">
                                    <li data-theme="indigo"><div class="indigo"></div></li>
                                    <li data-theme="tradewind"><div class="tradewind"></div></li>
                                    <li data-theme="monalisa"><div class="monalisa"></div></li>
                                    <li data-theme="blue"><div class="blue"></div></li>
                                    <li data-theme="cyan"><div class="cyan"></div></li>
                                    <li data-theme="green"><div class="green"></div></li>
                                    <li data-theme="orange" class="active"><div class="orange"></div></li>
                                    <li data-theme="blush"><div class="blush"></div></li>
                                    <li data-theme="red"><div class="red"></div></li>
                                </ul>
                            </div>
                            <!-- Settings: Template dynamics -->
                            <div class="dynamic-block py-3">
                                <ul class="list-unstyled choose-skin mb-2 mt-1">
                                    <li data-theme="dynamic"><div class="dynamic"><i class="icofont-paint me-2"></i> Click to Dyanmic Setting</div></li>
                                </ul>
                                <div class="dt-setting">
                                    <ul class="list-group list-unstyled mt-1">
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label>Primary Color</label>
                                            <button id="primaryColorPicker" class="btn bg-primary avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label>Secondary Color</label>
                                            <button id="secondaryColorPicker" class="btn bg-secondary avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 1</label>
                                            <button id="chartColorPicker1" class="btn chart-color1 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 2</label>
                                            <button id="chartColorPicker2" class="btn chart-color2 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 3</label>
                                            <button id="chartColorPicker3" class="btn chart-color3 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 4</label>
                                            <button id="chartColorPicker4" class="btn chart-color4 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 5</label>
                                            <button id="chartColorPicker5" class="btn chart-color5 avatar xs border-0 rounded-0"></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Settings: Font -->
                            <div class="setting-font py-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-font fs-4 me-2 text-primary"></i> Font Settings</h6>
                                <ul class="list-group font_setting mt-1">
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-poppins" value="font-poppins">
                                            <label class="form-check-label" for="font-poppins">
                                                Poppins Google Font
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-opensans" value="font-opensans">
                                            <label class="form-check-label" for="font-opensans">
                                                Open Sans Google Font
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-montserrat" value="font-montserrat">
                                            <label class="form-check-label" for="font-montserrat">
                                                Montserrat Google Font
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-Plex" value="font-Plex" checked="">
                                            <label class="form-check-label" for="font-Plex">
                                                Plex Google Font
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Settings: Light/dark -->
                            <div class="setting-mode py-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-layout fs-4 me-2 text-primary"></i>Contrast Layout</h6>
                                <ul class="list-group list-unstyled mb-0 mt-1">
                                    <li class="list-group-item d-flex align-items-center py-1 px-2">
                                        <div class="form-check form-switch theme-switch mb-0">
                                            <input class="form-check-input" type="checkbox" id="theme-switch">
                                            <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center py-1 px-2">
                                        <div class="form-check form-switch theme-high-contrast mb-0">
                                            <input class="form-check-input" type="checkbox" id="theme-high-contrast">
                                            <label class="form-check-label" for="theme-high-contrast">Enable High Contrast</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center py-1 px-2">
                                        <div class="form-check form-switch theme-rtl mb-0">
                                            <input class="form-check-input" type="checkbox" id="theme-rtl">
                                            <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-start">
                            <button type="button" class="btn btn-white border lift" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary lift">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div> 

            <!-- Modal Enable-->
            <div class="modal fade" id="EnableModal" tabindex="-1"  aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Enable Settings</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                              <label class="form-label">Set Your Code</label>
                              <input type="text" class="form-control">
                              <div class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Your Code</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" >
                              <label class="form-check-label">Check me out</label>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Activate</button>
                    </div>
                  </div>
                </div>
            </div>

            <!-- Modal Change-->
            <div class="modal fade" id="ChangeModal" tabindex="-1"  aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Change Settings</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                              <label class="form-label">Old Detail</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New Detail</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" >
                              <label class="form-check-label" >Check me out</label>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save Change</button>
                    </div>
                  </div>
                </div>
            </div>

            <!-- Modal Remove-->
            <div class="modal fade" id="RemoveModal" tabindex="-1"  aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Remove Settings</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <i class="icofont-ui-delete fs-2 text-danger d-flex justify-content-center"></i>
                        <h2 class="my-3 text-center">Are you sure you want to remove?</h2>
                        <p class="text-muted">Withdrawals and P2P selling will be disabled for 24 hours after you make this change to protect your account.</p>
                        <p class="text-muted">Two security verification methods are required for withdrawals and other actions. Using only one verification method will limit your withdrawals.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save Change</button>
                    </div>
                  </div>
                </div>
            </div>
            
        </div>
    
    </div>

    <!-- Jquery Core Js -->
    <script src="side-page-assets/bundles/libscripts.bundle.js"></script>


    <!-- Jquery Page Js -->
    <script src="side-page-js/js/template.js"></script>
</body>
</html> 