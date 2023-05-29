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
    <title>::Cryptoon::  CryptoLoan </title>
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
                                        <p class="h6 mt-3 mb-1">Hour - 10min</p>
                                        <p class="h6 text-muted mb-0 mb-lg-0">Loan Request</p>
                                    </div>
                                </div>
                                <div class="hor-timeline-step">
                                    <div class="timeline-content">
                                        <div class="inner-circle"></div>
                                        <p class="h6 mt-3 mb-1">Hour - 05min</p>
                                        <p class="h6 text-muted mb-0 mb-lg-0">Receive Loan</p>
                                    </div>
                                </div>
                                <div class="hor-timeline-step">
                                    <div class="timeline-content">
                                        <div class="inner-circle"></div>
                                        <p class="h6 mt-3 mb-1">Day - (0)</p>
                                        <p class="h6 text-muted mb-0 mb-lg-0">Repay at any time</p>
                                    </div>
                                </div>
                                <div class="hor-timeline-step">
                                    <div class="timeline-content">
                                        <div class="inner-circle"></div>
                                        <p class="h6 mt-3 mb-1">Day - 1</p>
                                        <p class="h6 text-muted mb-0 mb-lg-0">Receive Collateral</p>
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
                                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#Borrow" role="tab">Borrow</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Orders" role="tab">Ongoing Orders (3)</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="Borrow">
                                            <div class="row g-3">
                                                <div class="col-xl-6">
                                                    <div class="color-bg-100 p-2 p-lg-4 mt-4">
                                                        <h4>Initial LTV <span class="small">(Loan-to-Value Ratio)</span></h4>
                                                        <h5 class="color-price-up">65%</h5>
                                                        <span class="text-muted d-block">Initial LTV 65%, Margin Call 75%, Liquidation LTV 83%</span>
                                                        <div class="d-flex justify-content-between flex-wrap my-3">
                                                            <div>
                                                                <div class="truncated">Liquidation Price(BNB/USDT)</div>
                                                                <div class="text-muted truncated"> 0 BTC</div>
                                                            </div>
                                                            <div>
                                                                <div class="truncated">Total Interest Amount</div>
                                                                <div class="text-muted truncated"> 0 USDT</div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between flex-wrap">
                                                            <div>
                                                                <div class="truncated">Hourly & Daily Interest Rate</div>
                                                                <div class="text-muted  truncated"> 0.003917% / 0.0800% </div>
                                                            </div>
                                                            <div>
                                                                <div class="truncated">Repayment Amount</div>
                                                                <div class="text-muted  truncated"> - USDT </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <form>
                                                        <label class="form-label">I want to borrow</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="Minimum Amount 100 USDT">
                                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">USDT</button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">BUSD</a></li>
                                                                <li><a class="dropdown-item" href="#">1INCH</a></li>
                                                                <li><a class="dropdown-item" href="#">ALICE</a></li>
                                                                <li><a class="dropdown-item" href="#">ATOM</a></li>
                                                                <li><a class="dropdown-item" href="#">ETH</a></li>
                                                                <li><a class="dropdown-item" href="#">SOL</a></li>
                                                                <li><a class="dropdown-item" href="#">BNB</a></li>
                                                                <li><a class="dropdown-item" href="#">BTC</a></li>
                                                                <li><a class="dropdown-item" href="#">XRP</a></li>
                                                            </ul>
                                                        </div>
                                                        <label class="form-label">Collateral Amount</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control">
                                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">BNB</button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">BUSD</a></li>
                                                                <li><a class="dropdown-item" href="#">1INCH</a></li>
                                                                <li><a class="dropdown-item" href="#">ALICE</a></li>
                                                                <li><a class="dropdown-item" href="#">ATOM</a></li>
                                                                <li><a class="dropdown-item" href="#">ETH</a></li>
                                                                <li><a class="dropdown-item" href="#">SOL</a></li>
                                                                <li><a class="dropdown-item" href="#">BNB</a></li>
                                                                <li><a class="dropdown-item" href="#">BTC</a></li>
                                                                <li><a class="dropdown-item" href="#">XRP</a></li>
                                                            </ul>
                                                        </div>
                                                        <label class="form-label mb-0">Loan Term</label>
                                                        <span class="text-muted d-block small mb-3">No interest penalty for early repayment</span>
                                                        <div class="btn-group mb-3 justify-content-center d-flex" role="group">
                                                            <button type="button" class="btn btn-outline-primary p-3">  7 Days</button>
                                                            <button type="button" class="btn btn-outline-primary p-3"> 14 Days</button>
                                                            <button type="button" class="btn btn-outline-primary p-3"> 30 Days</button>
                                                            <button type="button" class="btn btn-outline-primary p-3"> 90 Days</button>
                                                        </div>
                                                        <button type="submit" class="btn flex-fill btn-light-warning py-2 fs-5 text-uppercase px-5 mt-4">Start Borrowing Now</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Orders">
                                            <table id="ordertabthree" class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Borrow</th>
                                                        <th>Collateral Amount</th>
                                                        <th>Term Day</th>
                                                        <th>Interest Rate</th>
                                                        <th>Total Interest Amount</th>
                                                        <th>Repayment Amount</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>09-18 17:32:15</td>
                                                        <td>100 USDT</td>
                                                        <td>0.35048829 BNB</td>
                                                        <td>7</td>
                                                        <td>0.001667% / 0.0400%</td>
                                                        <td>0.490056 USDT</td>
                                                        <td>100.490056</td>
                                                        <th><span class="text-warning">UNDER PROCESS</span></th>
                                                    </tr>
                                                    <tr>
                                                        <td>06-15 16:31:14</td>
                                                        <td>110 USDT</td>
                                                        <td>0.35048829 BNB</td>
                                                        <td>7</td>
                                                        <td>0.001667% / 0.0400%</td>
                                                        <td>0.520056 USDT</td>
                                                        <td>100.520056</td>
                                                        <th><span class="color-price-up">COMPLETED</span></th>
                                                    </tr>
                                                    <tr>
                                                        <td>06-14 16:31:14</td>
                                                        <td>110 USDT</td>
                                                        <td>0.35048829 BNB</td>
                                                        <td>7</td>
                                                        <td>0.001667% / 0.0400%</td>
                                                        <td>0.520056 USDT</td>
                                                        <td>100.520056</td>
                                                        <th><span class="color-price-down">CANCLE</span></th>
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
            $('#ordertabthree').DataTable({
                responsive: true
            });
            $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
                $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust()
                .responsive.recalc();
            }); 
        });
    </script>


</body>
</html> 