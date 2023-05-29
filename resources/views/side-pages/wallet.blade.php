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
    <title>::Refundments::  Wallet </title>
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
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Pretitle -->
                            <h1 class="h4 mt-1">Wallet Overview</h1>
                        </div>
                        <div class="col-auto">
                            <a href="p2p.html" title="Download" target="_blank" class="btn btn-dark lift">Add Crypto via P2P</a>
                        </div>
                    </div> <!-- Row end  -->
                </div>
            </div>

            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">
                    <div class="row g-3 mb-3 row-deck">
                        <div class="col-xl-12 col-xxl-7">
                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom align-items-center flex-wrap">
                                    <h6 class="mb-0 fw-bold">Balance Details</h6> 
                                    <ul class="nav nav-tabs tab-body-header rounded d-inline-flex" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#Spot" role="tab">Spot</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#P2P" role="tab">P2P</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Margin" role="tab">Margin</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Future" role="tab">Future</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Earn" role="tab">Earn</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="Spot">
                                            <div class="row g-3">
                                                <div class="col-lg-6">
                                                    <div>Account balance:</div>
                                                    <h3>0.18005388 BTC</h3>
                                                    <div class="mt-3 pt-3 text-uppercase text-muted pt-2 small">Buy this month</div>
                                                    <h5>3.0675432 BTC</h5>
                                                    <div class="mt-3 text-uppercase text-muted small">Sell this month</div>
                                                    <h5>2.0345618 BTC</h5>
                                                    <div class="mt-3 text-uppercase text-muted small">Estimated Value:</div>
                                                    <h5>$22000.29</h5>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div id="apex-simple-donut"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="P2P">
                                            <div class="row g-3">
                                                <div class="col-lg-6">
                                                    <div>Account balance:</div>
                                                    <h3>0.00005388 BTC</h3>
                                                    <div class="mt-3 pt-3 text-uppercase text-muted pt-2 small">Buy this month</div>
                                                    <h5>0.00005388 BTC</h5>
                                                    <div class="mt-3 text-uppercase text-muted small">Sell this month</div>
                                                    <h5>2.0345618 BTC</h5>
                                                    <div class="mt-3 text-uppercase text-muted small">Estimated Value:</div>
                                                    <h5>$2000.29</h5>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div id="apex-simple-donutp2p"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Margin">
                                            <div class="row g-3">
                                                <div class="col-lg-6">
                                                    <div>Total balance:</div>
                                                    <h3>0.00095000 BTC≈$3570</h3>
                                                    <div class="mt-3 pt-3 text-uppercase text-muted pt-2 small">Total Debt:</div>
                                                    <h5>0.00005388 BTC</h5>
                                                    <div class="mt-3 text-uppercase text-muted small">Account Equity:</div>
                                                    <h5>2.0345618 BTC</h5>
                                                    <div class="mt-3 text-uppercase text-muted small">Profit & Loss:</div>
                                                    <h5>0.95 BTC(1.6.00%) $25 (8.00%)</h5>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div id="apex-circle-chart-multiplemargin"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Future">
                                            <div class="row g-3">
                                                <div class="col-lg-6">
                                                    <div>Total Margin Balance:</div>
                                                    <h3>0.00095000 BTC≈$3570</h3>
                                                    <div class="mt-3 pt-3 text-uppercase text-muted pt-2 small">Total Wallet Balance:</div>
                                                    <h5>0.00005388 BTC</h5>
                                                    <div class="mt-3 text-uppercase text-muted small">Total Unrealized PNL:</div>
                                                    <h5>2.0345618 BTC</h5>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div id="apex-circle-gradientfuture"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Earn">
                                            <div class="row g-3">
                                                <div class="col-lg-6">
                                                    <div>Total Margin Balance:</div>
                                                    <h3>0.00095000 BTC≈$3570</h3>
                                                    <div class="mt-3 pt-3 text-uppercase text-muted pt-2 small">Locked:</div>
                                                    <h5>0.00000388 BTC</h5>
                                                    <div class="mt-3 text-uppercase text-muted small">Flexible:</div>
                                                    <h5>0.0000018 BTC</h5>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div id="apex-circle-chartearn"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-xxl-5">
                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent align-items-center">
                                    <h6 class="mb-0 fw-bold">Withdraw Crypto</h6> 
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row g-3 mb-3">
                                            <div class="col-sm-12">
                                                <label class="form-label">Select coin</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control">
                                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">USDT</button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">BNB</a></li>
                                                        <li><a class="dropdown-item" href="#">BTC</a></li>
                                                        <li><a class="dropdown-item" href="#">BUSD</a></li>
                                                        <li><a class="dropdown-item" href="#">EOS</a></li>
                                                        <li><a class="dropdown-item" href="#">ETH</a></li>
                                                    </ul>
                                                </div> 
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="form-label">Withdraw Address</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="form-label">Select Withdraw Network</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected> BNB (Arrival time ≈ 2 mins)</option>
                                                    <option value="1">BTC (Arrival time ≈ 1 mins)</option>
                                                    <option value="2">BSC (Arrival time ≈ 2 mins)</option>
                                                    <option value="3">ETH (Arrival time ≈ 3 mins)</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="d-flex justify-content-between flex-wrap">
                                                    <div>
                                                        <div class="truncated">BTC spot balance</div>
                                                        <div class="text-muted truncated"> 0 BTC</div>
                                                    </div>
                                                    <div>
                                                        <div class="truncated">Minimum withdrawal</div>
                                                        <div class="text-muted  truncated"> 0.0000086 BTC </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="d-flex justify-content-between flex-wrap">
                                                    <div>
                                                        <div class="truncated">Network fee</div>
                                                        <div class="text-muted truncated"> 0.0000043 ~ 0.00055 BTC</div>
                                                    </div>
                                                    <div>
                                                        <div class="truncated">24h remaining limit</div>
                                                        <div class="text-muted  truncated"> 100 BTC/100 BTC </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row End -->

                    <div class="row g-3 mb-3 row-deck">
                        <div class="col-xl-6 col-xxl-7">
                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom align-items-center flex-wrap">
                                    <h6 class="mb-0 fw-bold">Deposit</h6> 
                                    <ul class="nav nav-tabs tab-body-header rounded d-inline-flex" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#crypto" role="tab">Crypto</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#cash" role="tab">Cash</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="crypto">
                                            <form>
                                                <div class="mb-3">
                                                    <label class="form-label">Trending</label>
                                                    <div class="row row-cols-3 row-cols-md-3 row-cols-lg-6 row-cols-xl-6">
                                                        <div class="col">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefaultbtc" checked>
                                                                <label class="form-check-label" for="flexRadioDefaultbtc">
                                                                    BTC
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefaulteth">
                                                                <label class="form-check-label" for="flexRadioDefaulteth">
                                                                ETH
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefaultusdt">
                                                                <label class="form-check-label" for="flexRadioDefaultusdt">
                                                                USDT
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefaultbnb">
                                                                <label class="form-check-label" for="flexRadioDefaultbnb">
                                                                BNB
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefaulteos">
                                                                <label class="form-check-label" for="flexRadioDefaulteos">
                                                                EOS
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefaultsol">
                                                                <label class="form-check-label" for="flexRadioDefaultsol">
                                                                SOL
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Choose Network</label>
                                                    <div class="row row-cols-3 row-cols-md-3 row-cols-lg-3 row-cols-xl-3">
                                                        <div class="col">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefaultnetwork" id="flexRadioDefaulterc" checked>
                                                                <label class="form-check-label" for="flexRadioDefaulterc">
                                                                Ethereum(ERC20)
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefaultnetwork" id="flexRadioDefaultcry">
                                                                <label class="form-check-label" for="flexRadioDefaultcry">
                                                                Cryptoon(CRC20)
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefaultnetwork" id="flexRadioDefaultsep">
                                                                <label class="form-check-label" for="flexRadioDefaultsep">
                                                                SmartC(SEP20)
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefaultnetwork" id="flexRadioDefaultsolana">
                                                                <label class="form-check-label" for="flexRadioDefaultsolana">
                                                                Solana
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefaultnetwork" id="flexRadioDefaulttron">
                                                                <label class="form-check-label" for="flexRadioDefaulttron">
                                                                Tron(TRC20)
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefaultnetwork" id="flexRadioDefaulterr">
                                                                <label class="form-check-label" for="flexRadioDefaulterr">
                                                                Ethereum(ERC30)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label d-block">Select Network <span class="text-primary">USDT</span></label>
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <img src="side-page-assets/images/qr-code.png" alt="Download App" class="img-fluid">
                                                        <div class="d-flex flex-wrap px-lg-2">
                                                            <div>
                                                                <div class="truncated">Minimum Deposit</div>
                                                                <div class="text-muted truncated mb-1"> 0.0005086 USDT </div>
                                                                <div class="truncated">Expected Arrival</div>
                                                                <div class="text-muted truncated mb-1"> 1 network confirm</div>
                                                                <div class="truncated">Expected Unlock</div>
                                                                <div class="text-muted truncated"> 1 network confirm</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <button type="submit" class="btn flex-fill btn-light-warning py-2 fs-5 text-uppercase px-5">Confirm</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="cash">
                                            <p>Deposit Ammount from your bank account and receive fund in <span class="text-primary">USD</span></p>
                                            <form>
                                                <div class="mb-3">
                                                    <label class="form-label">Select Currency</label>
                                                    <select class="form-select">
                                                        <option selected>INR</option>
                                                        <option value="1">AED</option>
                                                        <option value="2">ARS</option>
                                                        <option value="3">IDR</option>
                                                        <option value="4">TRY</option>
                                                        <option value="5">USD</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Currency to Deposit</label>
                                                    <select class="form-select">
                                                        <option selected>USD</option>
                                                        <option value="1">AED</option>
                                                        <option value="2">ARS</option>
                                                        <option value="3">IDR</option>
                                                        <option value="4">TRY</option>
                                                        <option value="5">Euro</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Pay with</label>
                                                    <div class="row row-cols-1">
                                                        <div class="col">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefaultcash" id="flexRadioDefaultcard" checked>
                                                                <label class="form-check-label" for="flexRadioDefaultcard">
                                                                    Bank Card(Visa/MC) <span class="text-muted small">1.8% fee</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefaultcash" id="flexRadioDefaultbank">
                                                                <label class="form-check-label" for="flexRadioDefaultbank">
                                                                Advance cash Account Balance <span class="text-muted small">0 fee</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <button type="submit" class="btn flex-fill btn-light-warning py-2 fs-5 text-uppercase px-5">Confirm</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-xxl-5">
                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent align-items-center">
                                    <h6 class="mb-0 fw-bold">Transfer</h6> 
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row g-3 mb-3">
                                            <div class="col-sm-12">
                                                <label class="form-label">From</label>
                                                <select class="form-select">
                                                    <option selected>SPOT</option>
                                                    <option value="1">MARGIN</option>
                                                    <option value="2">ISOLATE</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="form-label">To</label>
                                                <select class="form-select">
                                                    <option selected>USDM-Future</option>
                                                    <option value="1">COINM-Future</option>
                                                    <option value="2">POOL</option>
                                                    <option value="3">FUNDING</option>
                                                    <option value="4">ISOLATE</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="form-label">Coin</label>
                                                <select class="form-select">
                                                    <option selected>BTC</option>
                                                    <option value="1">ETH</option>
                                                    <option value="2">EOS</option>
                                                    <option value="3">LINK</option>
                                                    <option value="4">ADA</option>
                                                    <option value="5">TRX</option>
                                                    <option value="6">XRP</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="form-label">Amount</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control">
                                                    <button class="btn btn-outline-secondary" type="button">Max</button>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn flex-fill btn-light-warning py-2 fs-5 text-uppercase px-5">Confirm</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="table-responsive mt-1">
                                        <table class="table border">
                                            <tbody>
                                                <tr>
                                                    <td>Total Transfer</td>
                                                    <td>0.00058600 BTC</td>
                                                </tr>
                                                <tr>
                                                    <td>Available Margin</td>
                                                    <td>0.000059000 BTC</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row End -->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card no-bg">
                                <div class="card-header py-3 d-flex justify-content-between">
                                    <h6 class="mb-0 fw-bold">Transaction History</h6> 
                                </div>
                                <div class="card-body">
                                    <table id="ordertabthree" class="priceTable table table-hover custom-table table-bordered align-middle mb-0" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Type</th>
                                                <th>Asset</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2021-09-22 22:04</td>
                                                <td>Withdraw</td>
                                                <td>USDT</td>
                                                <td>481.90172092</td>
                                                <td><span class="color-price-up">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td>2021-09-01 23:50</td>
                                                <td>Deposit</td>
                                                <td>USDT</td>
                                                <td>323.50000000</td>
                                                <td><span class="color-price-up">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td>2021-08-21 14:07</td>
                                                <td>Withdraw</td> 
                                                <td>USDT</td>
                                                <td>99.00000000</td>
                                                <td><span class="color-price-up">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td>2021-08-18 13:07</td>
                                                <td>Deposit</td>
                                                <td>USDT</td>
                                                <td>459.00000000</td>
                                                <td><span class="color-price-down">Cancle</span></td>
                                            </tr>
                                            <tr>
                                                <td>2021-07-28 22:06</td>
                                                <td>Deposit</td>
                                                <td>BNB</td>
                                                <td>459.00000000</td>
                                                <td><span class="color-price-up">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td>2021-07-27 22:06</td>
                                                <td>Deposit</td>
                                                <td>BTC</td>
                                                <td>59.00000000</td>
                                                <td><span class="color-price-up">Completed</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
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
            
        </div>    
    
    </div>

    <!-- Jquery Core Js -->
    <script src="side-page-assets/bundles/libscripts.bundle.js"></script>

    <!-- Plugin Js -->
    <script src="side-page-assets/bundles/apexcharts.bundle.js"></script>
    <script src="side-page-assets/bundles/dataTables.bundle.js"></script>


    <!-- Jquery Page Js -->
    <script src="side-page-js/js/template.js"></script>
    <script src="side-page-js/js/page/wallet.js"></script>
</body>
</html> 