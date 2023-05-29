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
    <title>::Refundments::  Convert Trade </title>
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
                    <div class="row align-items-center g-2">
                        <div class="col">
                            <!-- Pretitle -->
                            <h1 class="h4 mt-1">Convert trade</h1>
                        </div>
                        {{-- <div class="col-12 col-md-6 text-md-end">
                            <a href="https://themeforest.net/user/pixelwibes" title="Download" target="_blank" class="btn btn-white border lift">Download</a>
                            <button type="button" class="btn btn-dark lift">Generate Report</button>
                        </div> --}}
                    </div> <!-- Row end  -->
                </div>
            </div>

            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent align-items-center flex-wrap border-bottom">
                                    <h6 class="mb-0 fw-bold">OTC Portal</h6>
                                    <ul class="nav nav-tabs tab-body-header rounded d-inline-flex mt-2 mt-md-0" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#Limit" role="tab">Limit</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Market" role="tab">Market</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div>BTC:</div>
                                    <h3>{{ Auth::user()->balance }}</h3>
                                    <div class="d-flex my-3 flex-wrap">
                                        <div class="">
                                            <div class="text-uppercase text-muted small">Percentage</div>
                                            <h5 class="color-price-up">+2.61%</h5>
                                        </div>
                                        <div class="px-4">
                                            <div class="text-uppercase text-muted small">Periods</div>
                                            <h5>24Hours</h5>
                                        </div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="Limit">
                                            <div class="row g-3">
                                                <div class="col-xl-6">
                                                    <div class="toolbar">
                                                        <button class="btn btn-sm btn-outline-secondary" id="one_month">1M</button>
                                                        <button class="btn btn-sm btn-outline-secondary" id="six_months">6M</button>
                                                        <button class="btn btn-sm btn-secondary" id="one_year">1Y</button>
                                                        <button class="btn btn-sm btn-outline-secondary" id="ytd">YTD</button>
                                                        <button class="btn btn-sm btn-outline-secondary" id="all">ALL</button>
                                                    </div>
                                                    <div class="mt-3 ac-line-transparent" id="apex-CoinChart"></div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <form>
                                                        <div class="row g-3 mb-3">
                                                            <div class="col-xl-12">
                                                                <label class="form-label">From</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control">
                                                                    <button class="btn btn-outline-secondary" type="button">Max</button>
                                                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">USDT</button>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item" href="#">BTC</a></li>
                                                                    <li><a class="dropdown-item" href="#">ETH</a></li>
                                                                    <li><a class="dropdown-item" href="#">BUSD</a></li>
                                                                    <li><a class="dropdown-item" href="#">XRP</a></li>
                                                                    <li><a class="dropdown-item" href="#">DOT</a></li>
                                                                    <li><a class="dropdown-item" href="#">FIL</a></li>
                                                                    <li><a class="dropdown-item" href="#">DOGE</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <label class="form-label">Price</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <label class="form-label">Expires in</label>
                                                                <select class="form-select" aria-label="Default select example">
                                                                    <option selected>1 Day</option>
                                                                    <option value="1">2 Day</option>
                                                                    <option value="2">3 Day</option>
                                                                    <option value="3">4 Day</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <label class="form-label">To</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control">
                                                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">BTC</button>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item" href="#">BTC</a></li>
                                                                    <li><a class="dropdown-item" href="#">ETH</a></li>
                                                                    <li><a class="dropdown-item" href="#">BUSD</a></li>
                                                                    <li><a class="dropdown-item" href="#">XRP</a></li>
                                                                    <li><a class="dropdown-item" href="#">DOT</a></li>
                                                                    <li><a class="dropdown-item" href="#">FIL</a></li>
                                                                    <li><a class="dropdown-item" href="#">DOGE</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <div class="d-flex flex-wrap justify-content-between mb-1">
                                                                    <div>Price</div>
                                                                    <div class="text-muted"> 1 BTC = 55409.56000000 USDT</div>
                                                                </div>
                                                                <div class="d-flex flex-wrap justify-content-between">
                                                                    <div>Inverse Price</div>
                                                                    <div class="text-muted"> 1 USDT = 0.00001804 BTC</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn flex-fill btn-light-warning py-2 fs-5 text-uppercase px-5">Place Order</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Market">
                                            <div class="row g-3">
                                                <div class="col-xl-7">
                                                    <div class="mt-3 ac-line-transparent" id="apex-CandleStick"></div>
                                                </div>
                                                <div class="col-xl-5">
                                                    <form>
                                                        <div class="row g-3 mb-3">
                                                            <div class="col-xl-12">
                                                                <label class="form-label">From</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control">
                                                                    <button class="btn btn-outline-secondary" type="button">Max</button>
                                                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">USDT</button>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item" href="#">BTC</a></li>
                                                                    <li><a class="dropdown-item" href="#">ETH</a></li>
                                                                    <li><a class="dropdown-item" href="#">BUSD</a></li>
                                                                    <li><a class="dropdown-item" href="#">XRP</a></li>
                                                                    <li><a class="dropdown-item" href="#">DOT</a></li>
                                                                    <li><a class="dropdown-item" href="#">FIL</a></li>
                                                                    <li><a class="dropdown-item" href="#">DOGE</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <label class="form-label">To</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control">
                                                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">BTC</button>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item" href="#">BTC</a></li>
                                                                    <li><a class="dropdown-item" href="#">ETH</a></li>
                                                                    <li><a class="dropdown-item" href="#">BUSD</a></li>
                                                                    <li><a class="dropdown-item" href="#">XRP</a></li>
                                                                    <li><a class="dropdown-item" href="#">DOT</a></li>
                                                                    <li><a class="dropdown-item" href="#">FIL</a></li>
                                                                    <li><a class="dropdown-item" href="#">DOGE</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <div class="d-flex flex-wrap justify-content-between mb-1">
                                                                    <div>Price</div>
                                                                    <div class="text-muted"> 1 BTC = 55409.56000000 USDT</div>
                                                                </div>
                                                                <div class="d-flex flex-wrap justify-content-between mb-1">
                                                                    <div>Inverse Price</div>
                                                                    <div class="text-muted"> 1 USDT = 0.00001804 BTC</div>
                                                                </div>
                                                                <div class="d-flex flex-wrap justify-content-between">
                                                                    <div>You will receive</div>
                                                                    <div class="text-primary"> 0.00900051 BTC</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn flex-fill btn-light-warning py-2 fs-5 text-uppercase px-5">Place Order</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
            
        </div>
    
    </div>

    <!-- Jquery Core Js -->
    <script src="side-page-assets/bundles/libscripts.bundle.js"></script>

    <!-- Plugin Js -->
    <script src="side-page-assets/bundles/apexcharts.bundle.js"></script>


    <!-- Jquery Page Js -->
    <script src="side-page-js/js/template.js"></script>
    <script src="side-page-js/js/page/convert-trade.js"></script> 
</body>
</html> 