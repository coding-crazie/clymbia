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
    <title>::Refundments:: FutureTrade </title>
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
            <div class="body-header border-bottom d-flex py-3">
                <div class="container-xxl">
                    <div class="row align-items-center g-2">
                        <div class="col">
                            <!-- Pretitle -->
                            <h1 class="h4 mt-1">Future Trade</h1>
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

                    <div class="row g-3 mb-3 row-deck">
                        <div class="col-xl-12 col-xxl-8">
                            <div class="card">
                                <div class="card-body">
                                    <!-- TradingView Widget BEGIN -->
                                    <div class="tradingview-widget-container">
                                        <div id="tradingview_85dc0" style="height: 697px;"></div>
                                    </div>
                                    <!-- TradingView Widget END -->
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-xxl-4">
                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0 align-items-center">
                                    <h6 class="mb-0 fw-bold ">Future Trade</h6> 
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#leverage">10X</button>
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-tabs tab-body-header rounded d-inline-flex mb-4" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#Limit" role="tab">Limit</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Market" role="tab">Market</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Stoplimit" role="tab">Stop Limit</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="Limit">
                                            <div class="row g-3">
                                                <div class="col-lg-12">
                                                    <div class="d-flex align-items-center justify-content-between my-3">
                                                        <span class="small text-muted">Avbl</span>
                                                        <span class="">{{ Auth::user()->balance }} BTC</span>
                                                    </div>
                                                    <form>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">Price</span>
                                                            <input type="text" class="form-control">
                                                            <span class="input-group-text">BTC</span>
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">Size</span>
                                                            <input type="text" class="form-control">
                                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">USDT</button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                {{-- <li><a class="dropdown-item" href="#">USDT</a></li> --}}
                                                                <li><a class="dropdown-item" href="#">BTC</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="input-group">
                                                            <div class="mb-2 d-flex justify-content-between align-items-center w-100">
                                                                <span class="text-muted">0%</span>
                                                                <span class="text-muted px-2">25%</span>
                                                                <span class="text-muted px-1">50%</span>
                                                                <span class="text-muted px-1">75%</span>
                                                                <span class="text-muted">100%</span>
                                                            </div>
                                                            <input type="range" class="form-range" min='1' max='5' value='1' step='1'>
                                                        </div>
                                                        <div class="d-flex justify-content-between flex-wrap mb-3">
                                                            <div class="d-flex">
                                                                <div class="truncated">Buy</div>
                                                                <div class="text-muted truncated px-1"> 0.00 BTC</div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="truncated">Sell</div>
                                                                <div class="text-muted  truncated px-1"> 0.00 BTC </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">TP/SL</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="Take Profit">
                                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Mark</button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item" href="#">Last</a></li>
                                                                    <li><a class="dropdown-item" href="#">Mark</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="Stop Loss">
                                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Mark</button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item" href="#">Last</a></li>
                                                                    <li><a class="dropdown-item" href="#">Mark</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 d-flex justify-content-between">
                                                            <button type="submit" class="btn btn-light-success py-2 text-uppercase">BUY/Long</button>
                                                            <button type="submit" class="btn btn-light-danger py-2 text-uppercase">Sell/Short</button>
                                                        </div>
                                                        <div class="d-flex justify-content-between flex-wrap">
                                                            <div class="d-flex">
                                                                <div class="truncated">Cost</div>
                                                                <div class="text-muted truncated px-1"> 0.00 USDT</div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="truncated">Cost</div>
                                                                <div class="text-muted  truncated px-1"> 0.00 USDT </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between flex-wrap">
                                                            <div class="d-flex">
                                                                <div class="truncated">Max</div>
                                                                <div class="text-muted truncated px-1"> 0.00 USDT</div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="truncated">Max</div>
                                                                <div class="text-muted  truncated px-1"> 0.00 USDT </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!-- Limit Tab End -->

                                        <div class="tab-pane fade" id="Market">
                                            <div class="row g-3">
                                                <div class="col-lg-12">
                                                    <div class="d-flex align-items-center justify-content-between my-3">
                                                        <span class="small text-muted">Avbl</span>
                                                        <span class="">310.800000 USDT</span>
                                                    </div>
                                                    <form>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">Size</span>
                                                            <input type="text" class="form-control">
                                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">USDT</button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">USDT</a></li>
                                                                <li><a class="dropdown-item" href="#">BTC</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="input-group">
                                                            <div class="mb-2 d-flex justify-content-between align-items-center w-100">
                                                                <span class="text-muted">0%</span>
                                                                <span class="text-muted px-2">25%</span>
                                                                <span class="text-muted px-1">50%</span>
                                                                <span class="text-muted px-1">75%</span>
                                                                <span class="text-muted">100%</span>
                                                            </div>
                                                            <input type="range" class="form-range" min='1' max='5' value='1' step='1'>
                                                        </div>
                                                        <div class="d-flex justify-content-between flex-wrap mb-3">
                                                            <div class="d-flex">
                                                                <div class="truncated">Buy</div>
                                                                <div class="text-muted truncated px-1"> 0.00 USDT</div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="truncated">Sell</div>
                                                                <div class="text-muted  truncated px-1"> 0.00 USDT </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">TP/SL</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="Take Profit">
                                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Mark</button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item" href="#">Last</a></li>
                                                                    <li><a class="dropdown-item" href="#">Mark</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="Stop Loss">
                                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Mark</button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item" href="#">Last</a></li>
                                                                    <li><a class="dropdown-item" href="#">Mark</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 d-flex justify-content-between">
                                                            <button type="submit" class="btn btn-light-success py-2 text-uppercase">BUY/Long</button>
                                                            <button type="submit" class="btn btn-light-danger py-2 text-uppercase">Sell/Short</button>
                                                        </div>
                                                        <div class="d-flex justify-content-between flex-wrap">
                                                            <div class="d-flex">
                                                                <div class="truncated">Cost</div>
                                                                <div class="text-muted truncated px-1"> 0.00 USDT</div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="truncated">Cost</div>
                                                                <div class="text-muted  truncated px-1"> 0.00 USDT </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between flex-wrap">
                                                            <div class="d-flex">
                                                                <div class="truncated">Max</div>
                                                                <div class="text-muted truncated px-1"> 0.00 USDT</div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="truncated">Max</div>
                                                                <div class="text-muted  truncated px-1"> 0.00 USDT </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!-- Market Tab End -->

                                        <div class="tab-pane fade" id="Stoplimit">
                                            <div class="row g-3">
                                                <div class="col-lg-12">
                                                    <div class="d-flex align-items-center justify-content-between my-3">
                                                        <span class="small text-muted">Avbl</span>
                                                        <span class="">310.800000 USDT</span>
                                                    </div>
                                                    <form>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">Stop Price</span>
                                                            <input type="text" class="form-control">
                                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Mark</button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">Limit</a></li>
                                                                <li><a class="dropdown-item" href="#">Mark</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">Price</span>
                                                            <input type="text" class="form-control">
                                                            <span class="input-group-text">USDT</span>
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">Size</span>
                                                            <input type="text" class="form-control">
                                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">USDT</button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">USDT</a></li>
                                                                <li><a class="dropdown-item" href="#">BTC</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="input-group">
                                                            <div class="mb-2 d-flex justify-content-between align-items-center w-100">
                                                                <span class="text-muted">0%</span>
                                                                <span class="text-muted px-2">25%</span>
                                                                <span class="text-muted px-1">50%</span>
                                                                <span class="text-muted px-1">75%</span>
                                                                <span class="text-muted">100%</span>
                                                            </div>
                                                            <input type="range" class="form-range" min='1' max='5' value='1' step='1'>
                                                        </div>
                                                        <div class="d-flex justify-content-between flex-wrap mb-3">
                                                            <div class="d-flex">
                                                                <div class="truncated">Buy</div>
                                                                <div class="text-muted truncated px-1"> 0.00 USDT</div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="truncated">Sell</div>
                                                                <div class="text-muted  truncated px-1"> 0.00 USDT </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">TP/SL</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="Take Profit">
                                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Mark</button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item" href="#">Last</a></li>
                                                                    <li><a class="dropdown-item" href="#">Mark</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="Stop Loss">
                                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Mark</button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item" href="#">Last</a></li>
                                                                    <li><a class="dropdown-item" href="#">Mark</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 d-flex justify-content-between">
                                                            <button type="submit" class="btn btn-light-success py-2 text-uppercase">BUY/Long</button>
                                                            <button type="submit" class="btn btn-light-danger py-2 text-uppercase">Sell/Short</button>
                                                        </div>
                                                        <div class="d-flex justify-content-between flex-wrap">
                                                            <div class="d-flex">
                                                                <div class="truncated">Cost</div>
                                                                <div class="text-muted truncated px-1"> 0.00 USDT</div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="truncated">Cost</div>
                                                                <div class="text-muted  truncated px-1"> 0.00 USDT </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between flex-wrap">
                                                            <div class="d-flex">
                                                                <div class="truncated">Max</div>
                                                                <div class="text-muted truncated px-1"> 0.00 USDT</div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="truncated">Max</div>
                                                                <div class="text-muted  truncated px-1"> 0.00 USDT </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!-- Stoplimit Tab End -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row End -->

                    <div class="row g-3 mb-3">
                        <div class="col-xl-5">
                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold">Order Book</h6> 
                                </div>
                                <div class="card-body">
                                    <table id="priceTableup" class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Price(USDT)</th>
                                                <th>Amount(USDT)</th>
                                                <th>Total</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span class="color-price-up">43978.43</span></td>
                                                <td>0.11228</td>
                                                <td>6,938.88312</td>
                                            </tr>
                                            <tr>
                                                <td><span class="color-price-down">44279.20</span></td>
                                                <td>0.17214</td>
                                                <td>76,053.29043</td>
                                            </tr>
                                            <tr>
                                                <td><span class="color-price-up">43928.23</span></td>
                                                <td>0.08881</td>
                                                <td>1,677.76807</td>
                                            </tr>
                                            <tr>
                                                <td><span class="color-price-up">43978.90</span></td>
                                                <td>0.00062</td>
                                                <td>1,151.15971</td>
                                            </tr>
                                            <tr>
                                                <td><span class="color-price-down">43978.90</span></td>
                                                <td>0.00062</td>
                                                <td>1,151.15971</td>
                                            </tr>
                                            <tr>
                                                <td><span class="color-price-up">44279.20</span></td>
                                                <td>0.17214</td>
                                                <td>76,053.29043</td>
                                            </tr>
                                            <tr>
                                                <td><span class="color-price-up">42978.43</span></td>
                                                <td>0.11228</td>
                                                <td>6,938.88312</td>
                                            </tr>
                                            <tr>
                                                <td><span class="color-price-up">42925.73</span></td>
                                                <td>0.08752</td>
                                                <td>5,022.51319</td>
                                            </tr>
                                            <tr>
                                                <td><span class="color-price-down">43978.43</span></td>
                                                <td>0.11228</td>
                                                <td>6,938.88312</td>
                                            </tr>
                                            <tr>
                                                <td><span class="color-price-up">42978.90</span></td>
                                                <td>0.00062</td>
                                                <td>1,151.15971</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0 align-items-center">
                                    <h6 class="mb-0 fw-bold ">Future Status</h6> 
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-tabs tab-body-header rounded d-inline-flex mb-3" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#OpenOrder" role="tab">Open Order(5)</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#OrderHistory" role="tab">Order History</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#TradeHistory" role="tab">Trade History</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="OpenOrder">
                                            <table id="ordertabone" class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Pair</th>
                                                        <th>Type</th> 
                                                        <th>Side</th>
                                                        <th>Price</th>
                                                        <th>Amount</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>09-18 17:32:15</td>
                                                        <td><img src="side-page-assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1">ETH/USDT</td>
                                                        <td>Limit</td>
                                                        <td><span class="color-price-up">Buy</span></td>
                                                        <td>2774.00</td>
                                                        <td>0.000378</td>
                                                        <td>
                                                            <div class="btn-group" role="group">
                                                                <button type="button" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></button>
                                                                <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>09-18 17:32:15</td>
                                                        <td><img src="side-page-assets/images/coin/DGD.png" alt="" class="img-fluid avatar mx-1">DGD/USDT</td>
                                                        <td>Limit</td>
                                                        <td><span class="color-price-down">Sell</span></td>
                                                        <td>35.00</td>
                                                        <td>0.000005</td>
                                                        <td>
                                                            <div class="btn-group" role="group">
                                                                <button type="button" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></button>
                                                                <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>09-21 13:32:15</td>
                                                        <td><img src="side-page-assets/images/coin/ADA.png" alt="" class="img-fluid avatar mx-1">ADA/USDT</td>
                                                        <td>Limit</td>
                                                        <td><span class="color-price-down">Sell</span></td>
                                                        <td>3.500</td>
                                                        <td>0.000001</td>
                                                        <td>
                                                            <div class="btn-group" role="group">
                                                                <button type="button" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></button>
                                                                <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>09-21 13:32:15</td>
                                                        <td><img src="side-page-assets/images/coin/BNB.png" alt="" class="img-fluid avatar mx-1">BNB/USDT</td>
                                                        <td>Limit</td>
                                                        <td><span class="color-price-down">Sell</span></td>
                                                        <td>415.00</td>
                                                        <td>0.000041</td>
                                                        <td>
                                                            <div class="btn-group" role="group">
                                                                <button type="button" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></button>
                                                                <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>09-20 13:32:15</td>
                                                        <td><img src="side-page-assets/images/coin/DOGE.png" alt="" class="img-fluid avatar mx-1">DOGE/USDT</td>
                                                        <td>Limit</td>
                                                        <td><span class="color-price-down">Sell</span></td>
                                                        <td>0.2040</td>
                                                        <td>0.203900</td>
                                                        <td>
                                                            <div class="btn-group" role="group">
                                                                <button type="button" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></button>
                                                                <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="OrderHistory">
                                            <table id="ordertabtwo" class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Pair</th>
                                                        <th>Type</th> 
                                                        <th>Side</th>
                                                        <th>Average</th>
                                                        <th>Price</th>
                                                        <th>Executed</th>
                                                        <th>Amount</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>09-18 17:32:15</td>
                                                        <td><img src="side-page-assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1">ETH/USDT</td>
                                                        <td>Market</td>
                                                        <td><span class="color-price-down">Sell</span></td>
                                                        <td>3,487.50</td>
                                                        <td>Market</td>
                                                        <td>0.0110</td>
                                                        <td>0.0110</td>
                                                        <td>38.36</td>
                                                    </tr>
                                                    <tr>
                                                        <td>09-18 17:31:11</td>
                                                        <td><img src="side-page-assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1">SOL/USDT</td>
                                                        <td>Market</td>
                                                        <td><span class="color-price-down">Sell</span></td>
                                                        <td>160.33</td>
                                                        <td>Market</td>
                                                        <td>0.75</td>
                                                        <td>0.75</td>
                                                        <td>120.25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>09-18 08:52:04</td>
                                                        <td><img src="side-page-assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1">ETH/USDT</td>
                                                        <td>Market</td>
                                                        <td><span class="color-price-up">Buy</span></td>
                                                        <td>3,439.20</td>
                                                        <td>Market</td>
                                                        <td>0.0111</td>
                                                        <td>0.0111</td>
                                                        <td>38.18</td>
                                                    </tr>
                                                    <tr>
                                                        <td>09-17 08:34:14</td>
                                                        <td><img src="side-page-assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1">SOL/USDT</td>
                                                        <td>Market</td>
                                                        <td><span class="color-price-up">Buy</span></td>
                                                        <td>147.04</td>
                                                        <td>Market</td>
                                                        <td>0.76</td>
                                                        <td>0.71</td>
                                                        <td>111.75</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="TradeHistory">
                                            <table id="ordertabthree" class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Pair</th>
                                                        <th>Side</th>
                                                        <th>Price</th>
                                                        <th>Executed</th>
                                                        <th>Fee</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>09-18 17:32:15</td>
                                                        <td><img src="side-page-assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1">ETH/USDT</td>
                                                        <td><span class="color-price-down">Sell</span></td>
                                                        <td>3,487.50</td>
                                                        <td>0.0110</td>
                                                        <td>0.03836250 USDT</td>
                                                        <td>38.36250000 USDT</td>
                                                    </tr>
                                                    <tr>
                                                        <td>09-18 17:31:11</td>
                                                        <td><img src="side-page-assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1">SOL/USDT</td>
                                                        <td><span class="color-price-down">Sell</span></td>
                                                        <td>160.33</td>
                                                        <td>0.75</td>
                                                        <td>0.12024750 USDT</td>
                                                        <td>120.24750000 USDT</td>
                                                    </tr>
                                                    <tr>
                                                        <td>09-18 08:52:04</td>
                                                        <td><img src="side-page-assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1">ETH/USDT</td>
                                                        <td><span class="color-price-up">Buy</span></td>
                                                        <td>3,439.20</td>
                                                        <td>0.0111</td>
                                                        <td>0.00001110 ETH</td>
                                                        <td>38.17512000 USDT</td>
                                                    </tr>
                                                    <tr>
                                                        <td>09-17 08:34:14</td>
                                                        <td><img src="side-page-assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1">SOL/USDT</td>
                                                        <td><span class="color-price-up">Buy</span></td>
                                                        <td>147.04</td>
                                                        <td>0.76</td>
                                                        <td>0.00076000 SOL</td>
                                                        <td>111.75040000 USDT</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row End -->

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

            <!-- Modal Leverage -->
            <div class="modal fade" id="leverage" tabindex="-1"  aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title  fw-bold" id="expeditLabel"> Adjust Leverage</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="deadline-form">
                            <form>
                                <div class="row g-3 mb-3">
                                    <div class="col-sm-12">
                                        <label class="form-label">Leverage</label>
                                        <input type="Number" class="form-control"> 
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <div class="mb-2 d-flex justify-content-between align-items-center w-100">
                                                <span class="text-muted">1X</span>
                                                <span class="text-muted px-2">25X</span>
                                                <span class="text-muted px-1">50X</span>
                                                <span class="text-muted px-1">75X</span>
                                                <span class="text-muted">100X</span>
                                                <span class="text-muted">125X</span>
                                            </div>
                                            <input type="range" class="form-range" min='1' max='6' value='1' step='1'>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p>Maximum position at current leverage: 20,000,000 <br/>USDT <span class="text-primary">Check on Leverage & Margin table</span></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                        <button type="submit" class="btn btn-primary">Confirm</button>
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
    <script  src="https://s3.tradingview.com/tv.js"></script>

    <!-- Jquery Page Js -->
    <script src="side-page-js/js/template.js"></script>
    <script src="side-page-js/js/page/future.js"></script>  
</body>
</html> 