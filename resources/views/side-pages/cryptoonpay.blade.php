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
    <title>::Refundments::  CryptoonPay </title> 
    <link rel="icon" href="/images/btcweblogo.png" type="image/x-icon"> <!-- Favicon-->

    <!-- plugin css file  -->
    <link rel="stylesheet" href="side-page-assets/plugin/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" href="side-page-assets/plugin/datatables/dataTables.bootstrap5.min.css"> 
    
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
         

            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">
                    <div class="row my-5">
                        <div class="col">
                            <div class="hor-timeline-steps">
                                <div class="hor-timeline-step">
                                    <div class="timeline-content">
                                        <div class="inner-circle"></div>
                                        <p class="h6 mt-3 text-muted mb-0 mb-lg-0">Set Your Payment </p>
                                    </div>
                                </div>
                                <div class="hor-timeline-step">
                                    <div class="timeline-content">
                                        <div class="inner-circle"></div>
                                        <p class="h6 mt-3 text-muted mb-0 mb-lg-0">Fast Payments</p>
                                    </div>
                                </div>
                                <div class="hor-timeline-step">
                                    <div class="timeline-content">
                                        <div class="inner-circle"></div>
                                        <p class="h6 mt-3 text-muted mb-0 mb-lg-0">With Cryptoon Pay</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row: End -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent align-items-center flex-wrap border-bottom">
                                    <h6 class="mb-0 fw-bold">Loans</h6>
                                    <ul class="nav nav-tabs tab-body-header rounded d-inline-flex mt-2 mt-md-0" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#Pay" role="tab">Pay</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Receive" role="tab">Receive</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div>Funding Wallet:</div>
                                    <h3>{{ Auth::user()->balance }}BTC</h3>
                                    {{-- <div class="d-flex my-3 flex-wrap">
                                        <div class="">
                                            <div class="text-uppercase text-muted small">Amount Spent</div>
                                            <h5>3.0675432 BTC</h5>
                                        </div>
                                        <div class="px-4">
                                            <div class="text-uppercase text-muted small">Amount Recevied</div>
                                            <h5>2.0345618 BTC</h5>
                                        </div>
                                    </div> --}}
                                    
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="Pay">
                                            <p class="text-muted">Only One Mandatory Fields</p>
                                            <form>
                                                <div class="row g-3 mb-3 row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
                                                    <div class="col">
                                                        <label class="form-label">Email</label>
                                                        <input type="email" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label class="form-label">Phone</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label class="form-label">PayID</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label class="form-label">Select Coin</label>
                                                        <select class="form-select">
                                                            <option selected>ADA</option>
                                                            <option value="1">BNB</option>
                                                            <option value="2">BTC</option>
                                                            <option value="3">SOL</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Amout Pay</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                    <label for="floatingTextarea2" class="form-label">Add Note</label>
                                                </div>
                                                <button type="submit" class="btn flex-fill btn-light-warning py-2 fs-5 text-uppercase px-5 mt-4">Pay</button>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="Receive">
                                            <p class="text-muted">Accept Payments</p>
                                            <div class="d-flex flex-wrap align-items-center">
                                            <img src="side-page-assets/images/qr-code.png" alt="Download App" class="img-fluid">
                                                <form class="px-3">
                                                    <div class="row g-3 mb-3 row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">
                                                        <div class="col">
                                                            <label class="form-label">Currency</label>
                                                            <select class="form-select">
                                                                <option selected>MATIC</option>
                                                                <option value="1">BNB</option>
                                                                <option value="2">BTC</option>
                                                                <option value="3">SOL</option>
                                                                <option value="4">Atom</option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label class="form-label">Email</label>
                                                            <input type="email" class="form-control">
                                                        </div>
                                                        <div class="col">
                                                            <label class="form-label">Amount</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="col">
                                                            <label class="form-label">Note</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn flex-fill btn-light-warning py-2 fs-5 text-uppercase px-5">Confirm</button>
                                                </form>
                                            </div>
                                            <h5 class="mt-4 mb-4">Payment History</h5>
                                            <table id="ordertabthree" class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Amount</th>
                                                        <th>Transfer/Received Id</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>09-18 17:32:15</td>
                                                        <td>100 USDT</td>
                                                        <td>225637822</td>
                                                        <th><span class="color-price-up">Received</span></th>
                                                    </tr>
                                                    <tr>
                                                        <td>06-15 16:31:14</td>
                                                        <td>210 USDT</td>
                                                        <td>235637822</td>
                                                        <th><span class="color-price-down">Paid</span></th>
                                                    </tr>
                                                    <tr>
                                                        <td>06-14 16:31:14</td>
                                                        <td>310 USDT</td>
                                                        <td>245637822</td>
                                                        <th><span class="color-price-down">Paid</span></th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row: End -->
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
    <script src="side-page-assets/bundles/dataTables.bundle.js"></script>

    <!-- Jquery Page Js -->
    <script src="side-page-js/js/template.js"></script>


    <script>
        // project data table
        $(document).ready(function() {
            $('#ordertabthree')
            .addClass( 'nowrap' )
            .dataTable( {
                responsive: true,
                columnDefs: [
                    { targets: [-1, -3], className: 'dt-body-right' }
                ]
            });
        });
    </script>
</body>
</html> 