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
    <title>::Refundments::  P2P Trade </title>
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
                            <h1 class="h4 mt-1">P2P: Buy/Sell Your Crypto Locally</h1>
                        </div>
                        <div class="col-12 col-md-6 text-md-end">
                            <ul class="nav nav-tabs tab-body-header rounded d-inline-flex" role="tablist">
                                <li class="nav-item"><a class="nav-link buy active" data-bs-toggle="tab" href="#Buy" role="tab">Buy</a></li>
                                <li class="nav-item"><a class="nav-link sell" data-bs-toggle="tab" href="#Sell" role="tab">Sell</a></li>
                            </ul>
                        </div>
                    </div> <!-- Row end  -->
                </div>
            </div>

            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    {{-- <div class="row g-3">
                                        <div class="col-lg-4">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Enter Amount">
                                                <button class="btn btn-outline-secondary" type="button">Search</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <select class="form-select">
                                                <option selected>$</option>
                                                <option value="1">JPY</option>
                                                <option value="2">KES</option>
                                                <option value="3">KHR</option>
                                                <option value="4">KWD</option>
                                                <option value="5">KZT</option>
                                                <option value="6">LAK</option>
                                                <option value="7">LBP</option>
                                                <option value="8">LKR</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select class="form-select">
                                                <option selected>All Payments</option>
                                                <option value="1">UPI</option>
                                                <option value="2">IMPS</option>
                                                <option value="3">Bank Transfer</option>
                                                <option value="4">Google Pay(Gpay)</option>
                                                <option value="5">Paytm</option>
                                                <option value="6">Phonepay</option>
                                                <option value="7">Mokwikbi</option>
                                                <option value="8">SWIFT</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-outline-secondary"><i class="fa fa-refresh px-1" aria-hidden="true"></i>Refresh</button>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="Buy">
                                    <div class="card no-bg">
                                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0 align-items-center flex-wrap">
                                            <h6 class="mb-0 fw-bold ">P2P BUY</h6> 
                                            <div class="col-12 col-md-auto">
                                                <ul class="nav nav-tabs tab-body-header rounded d-inline-flex mt-2 mt-md-0" role="tablist">
                                                    {{-- <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#USDTBUY" role="tab">USDT</a></li> --}}
                                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#BTCBUY" role="tab">BTC</a></li>
                                                    {{-- <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#BUSDBUY" role="tab">BUSD</a></li> --}}
                                                    {{-- <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#BNBBUY" role="tab">BNB</a></li> --}}
                                                    {{-- <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#ETHBUY" role="tab">ETH</a></li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="USDTBUY">
                                                    <table id="p2pone" class="priceTable table table-hover custom-table table-bordered align-middle mb-0" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Advertisers</th>
                                                                <th>Price</th>
                                                                <th>Limit/Available</th> 
                                                                <th>Payment</th> 
                                                                <th>Trade</th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">S</div>
                                                                        <span class="mx-1 fs-6">Satoshistacker</span>
                                                                        <i class="icofont-badge fs-5 text-warning"></i>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">541 orders</span>
                                                                        <span class="text-muted small mx-1">80.24% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td> 
                                                                    <div class="d-flex align-items-center">
                                                                        <span>78.30 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">118.46 USDT</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$9,275.00 - $9,275.41</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark mx-1">UPI</span>
                                                                    <span class="badge bg-light color-light-success mx-1">IMPS</span>
                                                                    <span class="badge bg-light color-lavender-purple mx-1">Phonepe</span>
                                                                    <span class="badge bg-light color-lightblue mx-1">GPay</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-success text-uppercase" data-bs-toggle="modal" data-bs-target="#buy">Buy USDT</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">D</div>
                                                                        <span class="mx-1 fs-6">deadguy</span>
                                                                        <i class="icofont-badge fs-5 text-warning"></i>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">254 orders</span>
                                                                        <span class="text-muted small mx-1">100% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>78.34 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">1,943.47 USDT</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$50,000.00 - $152,251.43</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark mx-1">UPI</span>
                                                                    <span class="badge bg-light color-light-success mx-1">IMPS</span>
                                                                    <span class="badge bg-light color-lavender-purple mx-1">Phonepe</span>
                                                                    <span class="badge bg-light color-lightblue mx-1">GPay</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-success text-uppercase" data-bs-toggle="modal" data-bs-target="#buy">Buy USDT</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">B</div>
                                                                        <span class="mx-1 fs-6">BIG SELLER</span>
                                                                        <i class="icofont-badge fs-5 text-warning"></i>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">154 orders</span>
                                                                        <span class="text-muted small mx-1">100% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>78.34 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">599.65 USDT</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$46,976.00 - $46,976.58</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark mx-1">UPI</span>
                                                                    <span class="badge bg-light color-light-success mx-1">IMPS</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-success text-uppercase" data-bs-toggle="modal" data-bs-target="#buy">Buy USDT</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">B</div>
                                                                        <span class="mx-1 fs-6">BHARATH COINS</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">333 orders</span>
                                                                        <span class="text-muted small mx-1">100% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>78.34 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">527.15 USDT</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$41,296.00 - $41,296.93</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark mx-1">UPI</span>
                                                                    <span class="badge bg-light color-light-success mx-1">IMPS</span>
                                                                    <span class="badge bg-light color-santa-fe  mx-1">Paytm</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-success text-uppercase" data-bs-toggle="modal" data-bs-target="#buy">Buy USDT</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">F</div>
                                                                        <span class="mx-1 fs-6">FIRNAS</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">324 orders</span>
                                                                        <span class="text-muted small mx-1">94.19% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>78.34 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">1,805.00 USDT</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$50,000.00 - $141,175.00</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light color-careys-pink mx-1">Bank Transfer</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-success text-uppercase" data-bs-toggle="modal" data-bs-target="#buy">Buy USDT</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">C</div>
                                                                        <span class="mx-1 fs-6">cryptokumar</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">1302 orders</span>
                                                                        <span class="text-muted small mx-1">99.54% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>78.35 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">6,892.94 USDT</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$30,000.00 - $100,000.58</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark mx-1">UPI</span>
                                                                    <span class="badge bg-light color-light-success mx-1">IMPS</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-success text-uppercase" data-bs-toggle="modal" data-bs-target="#buy">Buy USDT</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">M</div>
                                                                        <span class="mx-1 fs-6">MONU SHUKLA</span>
                                                                        <i class="icofont-badge fs-5 text-warning"></i>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">669 orders</span>
                                                                        <span class="text-muted small mx-1">94.49% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>78.35 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">2,236.19  USDT</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$10,000.00 - $175,205.48</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark mx-1">UPI</span>
                                                                    <span class="badge bg-light color-light-success mx-1">IMPS</span>
                                                                    <span class="badge bg-light color-lavender-purple mx-1">Phonepay</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-success text-uppercase" data-bs-toggle="modal" data-bs-target="#buy">Buy USDT</button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- USDTBUY Tab End -->
                                                <div class="tab-pane fade" id="BTCBUY">
                                                    <table id="p2ptwo" class="priceTable table table-hover custom-table table-bordered align-middle mb-0" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Advertisers</th>
                                                                <th>Price</th>
                                                                <th>Limit/Available</th> 
                                                                <th>Payment</th> 
                                                                <th>Trade</th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">A</div>
                                                                        <span class="mx-1 fs-6">Alon</span>
                                                                        <i class="icofont-badge fs-5 text-warning"></i>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">541 orders</span>
                                                                        <span class="text-muted small mx-1">80.24% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>3,516,819.99 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">0.00289666 BTC</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$1,000.00 - $10,187.03</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark mx-1">UPI</span>
                                                                    <span class="badge bg-light color-light-success mx-1">IMPS</span>
                                                                    <span class="badge bg-light color-lavender-purple mx-1">Phonepe</span>
                                                                    <span class="badge bg-light color-lightblue mx-1">GPay</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-success text-uppercase" data-bs-toggle="modal" data-bs-target="#buy">Buy BTC</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">S</div>
                                                                        <span class="mx-1 fs-6">Starshig</span>
                                                                        <i class="icofont-badge fs-5 text-warning"></i>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">254 orders</span>
                                                                        <span class="text-muted small mx-1">100% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>3,517,621.06<small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">0.00036680 BTC</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$500.00 - $1,290.26</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark mx-1">UPI</span>
                                                                    <span class="badge bg-light color-light-success mx-1">IMPS</span>
                                                                    <span class="badge bg-light color-lavender-purple mx-1">Phonepe</span>
                                                                    <span class="badge bg-light color-lightblue mx-1">GPay</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-success text-uppercase" data-bs-toggle="modal" data-bs-target="#buy">Buy BTC</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">N</div>
                                                                        <span class="mx-1 fs-6">Navv</span>
                                                                        <i class="icofont-badge fs-5 text-warning"></i>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">154 orders</span>
                                                                        <span class="text-muted small mx-1">100% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>3,524,000.00 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">0.00158509 BTC</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$200.00 - $5,585.85</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark mx-1">UPI</span>
                                                                    <span class="badge bg-light color-light-success mx-1">IMPS</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-success text-uppercase" data-bs-toggle="modal" data-bs-target="#buy">Buy BTC</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">B</div>
                                                                        <span class="mx-1 fs-6">BHARATH COINS</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">333 orders</span>
                                                                        <span class="text-muted small mx-1">100% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>3,524,995.00 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">0.00033848 BTC</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$1,000.00 - $1,193.14</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark mx-1">UPI</span>
                                                                    <span class="badge bg-light color-light-success mx-1">IMPS</span>
                                                                    <span class="badge bg-light color-santa-fe  mx-1">Paytm</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-success text-uppercase" data-bs-toggle="modal" data-bs-target="#buy">Buy BTC</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">F</div>
                                                                        <span class="mx-1 fs-6">FIRNAS</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">324 orders</span>
                                                                        <span class="text-muted small mx-1">94.19% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>3,517,621.06 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">0.00036680 BTC</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$500.00 - $1,290.26</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light color-careys-pink mx-1">Bank Transfer</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-success text-uppercase" data-bs-toggle="modal" data-bs-target="#buy">Buy BTC</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">C</div>
                                                                        <span class="mx-1 fs-6">cryptokumar</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">1302 orders</span>
                                                                        <span class="text-muted small mx-1">99.54% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>3,516,819.99 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">0.00036680 BTC</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$500.00 - $1,290.26</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark mx-1">UPI</span>
                                                                    <span class="badge bg-light color-light-success mx-1">IMPS</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-success text-uppercase" data-bs-toggle="modal" data-bs-target="#buy">Buy BTC</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">M</div>
                                                                        <span class="mx-1 fs-6">MONU SHUKLA</span>
                                                                        <i class="icofont-badge fs-5 text-warning"></i>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">669 orders</span>
                                                                        <span class="text-muted small mx-1">94.49% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>3,416,819.99 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">0.00036680 BTC</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$500.00 - $1,290.26</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark mx-1">UPI</span>
                                                                    <span class="badge bg-light color-light-success mx-1">IMPS</span>
                                                                    <span class="badge bg-light color-lavender-purple mx-1">Phonepay</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-success text-uppercase" data-bs-toggle="modal" data-bs-target="#buy">Buy BTC</button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- BTCBUY Tab End -->
                                            </div>
                                        </div> 
                                    </div>
                                </div><!-- BUY TAB END -->
                                <div class="tab-pane fade" id="Sell">
                                    <div class="card no-bg">
                                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0 align-items-center flex-wrap">
                                            <h6 class="mb-0 fw-bold ">P2P Sell</h6> 
                                            <div class="col-12 col-md-auto">
                                                <ul class="nav nav-tabs tab-body-header rounded d-inline-flex mt-2 mt-md-0" role="tablist">
                                                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#USDTSELL" role="tab">USDT</a></li>
                                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#BTCSELL" role="tab">BTC</a></li>
                                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#BUSDSELL" role="tab">BUSD</a></li>
                                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#BNBSELL" role="tab">BNB</a></li>
                                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#ETHSELL" role="tab">ETH</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="USDTSELL">
                                                    <table id="p2pthree" class="priceTable table table-hover custom-table table-bordered align-middle mb-0" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Advertisers</th>
                                                                <th>Price</th>
                                                                <th>Limit/Available</th> 
                                                                <th>Payment</th> 
                                                                <th>Trade</th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">S</div>
                                                                        <span class="mx-1 fs-6">Satoshistacker</span>
                                                                        <i class="icofont-badge fs-5 text-warning"></i>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">541 orders</span>
                                                                        <span class="text-muted small mx-1">80.24% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>78.30 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">118.46 USDT</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$9,275.00 - $9,275.41</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark mx-1">UPI</span>
                                                                    <span class="badge bg-light color-light-success mx-1">IMPS</span>
                                                                    <span class="badge bg-light color-lavender-purple mx-1">Phonepe</span>
                                                                    <span class="badge bg-light color-lightblue mx-1">GPay</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-danger text-uppercase" data-bs-toggle="modal" data-bs-target="#sell">Sell USDT</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">D</div>
                                                                        <span class="mx-1 fs-6">deadguy</span>
                                                                        <i class="icofont-badge fs-5 text-warning"></i>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">254 orders</span>
                                                                        <span class="text-muted small mx-1">100% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>78.34 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">1,943.47 USDT</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$50,000.00 - $152,251.43</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark mx-1">UPI</span>
                                                                    <span class="badge bg-light color-light-success mx-1">IMPS</span>
                                                                    <span class="badge bg-light color-lavender-purple mx-1">Phonepe</span>
                                                                    <span class="badge bg-light color-lightblue mx-1">GPay</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-danger text-uppercase" data-bs-toggle="modal" data-bs-target="#sell">Sell USDT</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">B</div>
                                                                        <span class="mx-1 fs-6">BIG SELLER</span>
                                                                        <i class="icofont-badge fs-5 text-warning"></i>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">154 orders</span>
                                                                        <span class="text-muted small mx-1">100% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>78.34 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">599.65 USDT</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$46,976.00 - $46,976.58</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark mx-1">UPI</span>
                                                                    <span class="badge bg-light color-light-success mx-1">IMPS</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-danger text-uppercase" data-bs-toggle="modal" data-bs-target="#sell">Sell USDT</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">B</div>
                                                                        <span class="mx-1 fs-6">BHARATH COINS</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">333 orders</span>
                                                                        <span class="text-muted small mx-1">100% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>78.34 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">527.15 USDT</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$41,296.00 - $41,296.93</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark mx-1">UPI</span>
                                                                    <span class="badge bg-light color-light-success mx-1">IMPS</span>
                                                                    <span class="badge bg-light color-santa-fe  mx-1">Paytm</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-danger text-uppercase" data-bs-toggle="modal" data-bs-target="#sell">Sell USDT</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">F</div>
                                                                        <span class="mx-1 fs-6">FIRNAS</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">324 orders</span>
                                                                        <span class="text-muted small mx-1">94.19% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>78.34 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">1,805.00 USDT</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$50,000.00 - $141,175.00</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light color-careys-pink mx-1">Bank Transfer</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-danger text-uppercase" data-bs-toggle="modal" data-bs-target="#sell">Sell USDT</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">C</div>
                                                                        <span class="mx-1 fs-6">cryptokumar</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">1302 orders</span>
                                                                        <span class="text-muted small mx-1">99.54% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>78.35 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">6,892.94 USDT</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$30,000.00 - $100,000.58</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark mx-1">UPI</span>
                                                                    <span class="badge bg-light color-light-success mx-1">IMPS</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-danger text-uppercase" data-bs-toggle="modal" data-bs-target="#sell">Sell USDT</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">M</div>
                                                                        <span class="mx-1 fs-6">MONU SHUKLA</span>
                                                                        <i class="icofont-badge fs-5 text-warning"></i>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">669 orders</span>
                                                                        <span class="text-muted small mx-1">94.49% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>78.35 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">2,236.19  USDT</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$10,000.00 - $175,205.48</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark mx-1">UPI</span>
                                                                    <span class="badge bg-light color-light-success mx-1">IMPS</span>
                                                                    <span class="badge bg-light color-lavender-purple mx-1">Phonepay</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-danger text-uppercase" data-bs-toggle="modal" data-bs-target="#sell">Sell USDT</button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- USDTSELL Tab End -->
                                                <div class="tab-pane fade" id="BTCSELL">
                                                    <table id="p2pfour" class="priceTable table table-hover custom-table table-bordered align-middle mb-0" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Advertisers</th>
                                                                <th>Price</th>
                                                                <th>Limit/Available</th> 
                                                                <th>Payment</th> 
                                                                <th>Trade</th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">A</div>
                                                                        <span class="mx-1 fs-6">Alon</span>
                                                                        <i class="icofont-badge fs-5 text-warning"></i>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">541 orders</span>
                                                                        <span class="text-muted small mx-1">80.24% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>3,516,819.99 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">0.00289666 BTC</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$1,000.00 - $10,187.03</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark mx-1">UPI</span>
                                                                    <span class="badge bg-light color-light-success mx-1">IMPS</span>
                                                                    <span class="badge bg-light color-lavender-purple mx-1">Phonepe</span>
                                                                    <span class="badge bg-light color-lightblue mx-1">GPay</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-danger text-uppercase" data-bs-toggle="modal" data-bs-target="#sell">Sell BTC</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">S</div>
                                                                        <span class="mx-1 fs-6">Starshig</span>
                                                                        <i class="icofont-badge fs-5 text-warning"></i>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">254 orders</span>
                                                                        <span class="text-muted small mx-1">100% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>3,517,621.06<small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">0.00036680 BTC</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$500.00 - $1,290.26</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark mx-1">UPI</span>
                                                                    <span class="badge bg-light color-light-success mx-1">IMPS</span>
                                                                    <span class="badge bg-light color-lavender-purple mx-1">Phonepe</span>
                                                                    <span class="badge bg-light color-lightblue mx-1">GPay</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-danger text-uppercase" data-bs-toggle="modal" data-bs-target="#sell">Sell BTC</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">N</div>
                                                                        <span class="mx-1 fs-6">Navv</span>
                                                                        <i class="icofont-badge fs-5 text-warning"></i>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">154 orders</span>
                                                                        <span class="text-muted small mx-1">100% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>3,524,000.00 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">0.00158509 BTC</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$200.00 - $5,585.85</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark mx-1">UPI</span>
                                                                    <span class="badge bg-light color-light-success mx-1">IMPS</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-danger text-uppercase" data-bs-toggle="modal" data-bs-target="#sell">Sell BTC</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">B</div>
                                                                        <span class="mx-1 fs-6">BHARATH COINS</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">333 orders</span>
                                                                        <span class="text-muted small mx-1">100% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>3,524,995.00 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">0.00033848 BTC</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$1,000.00 - $1,193.14</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark mx-1">UPI</span>
                                                                    <span class="badge bg-light color-light-success mx-1">IMPS</span>
                                                                    <span class="badge bg-light color-santa-fe  mx-1">Paytm</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-danger text-uppercase" data-bs-toggle="modal" data-bs-target="#sell">Sell BTC</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">F</div>
                                                                        <span class="mx-1 fs-6">FIRNAS</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">324 orders</span>
                                                                        <span class="text-muted small mx-1">94.19% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>3,517,621.06 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">0.00036680 BTC</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$500.00 - $1,290.26</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light color-careys-pink mx-1">Bank Transfer</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-danger text-uppercase" data-bs-toggle="modal" data-bs-target="#sell">Sell BTC</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">C</div>
                                                                        <span class="mx-1 fs-6">cryptokumar</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">1302 orders</span>
                                                                        <span class="text-muted small mx-1">99.54% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>3,516,819.99 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">0.00036680 BTC</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$500.00 - $1,290.26</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark mx-1">UPI</span>
                                                                    <span class="badge bg-light color-light-success mx-1">IMPS</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-danger text-uppercase" data-bs-toggle="modal" data-bs-target="#sell">Sell BTC</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar xs rounded-circle no-thumbnail">M</div>
                                                                        <span class="mx-1 fs-6">MONU SHUKLA</span>
                                                                        <i class="icofont-badge fs-5 text-warning"></i>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1">669 orders</span>
                                                                        <span class="text-muted small mx-1">94.49% completion</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span>3,416,819.99 <small class="text-muted small">$</small></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-5">Available</span>
                                                                        <span class="mx-1">0.00036680 BTC</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted small mx-1 min-width-55">Limit</span>
                                                                        <span class="mx-1">$500.00 - $1,290.26</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark mx-1">UPI</span>
                                                                    <span class="badge bg-light color-light-success mx-1">IMPS</span>
                                                                    <span class="badge bg-light color-lavender-purple mx-1">Phonepay</span>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-light-danger text-uppercase" data-bs-toggle="modal" data-bs-target="#sell">Sell BTC</button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- BTCSELL Tab End -->
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- SELL TAB END -->
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

            <!-- Modal Buy -->
            <div class="modal fade" id="buy" tabindex="-1"  aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title  fw-bold" >Buy Order</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="deadline-form">
                            <form>
                                <div class="row g-3 mb-3">
                                    <div class="col-sm-12">
                                        <label class="form-label">I want to pay</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-text">$</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="form-label">I will recevied</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-text">USDT</span>
                                        </div> 
                                    </div>
                                </div>
                            </form>
                            <p class="text-primary">Terms and conditions</p>
                            <ul>
                                <li>please send exact money</li>
                                <li>Please send money only from your bank account only. </li>
                                <li>If you send money from other account refund to same account.15% will be deducted my payment gateway for refund.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                        <button type="submit" class="btn btn-light-success text-uppercase">Buy USDT</button>
                    </div>
                </div>
                </div>
            </div>

            <!-- Modal Sell -->
            <div class="modal fade" id="sell" tabindex="-1"  aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title  fw-bold" >Sell Order</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="deadline-form">
                            <form>
                                <div class="row g-3 mb-3">
                                    <div class="col-sm-12">
                                        <label class="form-label">I want to sell</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-text">USDT</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="form-label">I will recevied</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-text">$</span>
                                        </div> 
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="form-label">Payment Method</label>
                                        <select class="form-select">
                                            <option selected>UPI</option>
                                            <option value="1">UPI</option>
                                            <option value="2">IMPS</option>
                                            <option value="3">Bank Transfer</option>
                                            <option value="4">Google Pay(Gpay)</option>
                                            <option value="5">Paytm</option>
                                            <option value="6">Phonepay</option>
                                            <option value="7">Mokwikbi</option>
                                            <option value="8">SWIFT</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                        <button type="submit" class="btn btn-light-danger text-uppercase">Sell USDT</button>
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
    <script src="side-page-js/js/page/p2p.js"></script>
</body>
</html> 