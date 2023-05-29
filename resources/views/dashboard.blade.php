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
    <title>Clymbia - Dashboard </title>
    <link rel="icon" href="/images/btcweblogo.png" type="image/x-icon"> <!-- Favicon-->

    <!-- plugin css file  -->
    <link rel="stylesheet" href="profile-assets/plugin/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" href="profile-assets/plugin/datatables/dataTables.bootstrap5.min.css"> 
    
    <!-- project css file  -->
    <link rel="stylesheet" href="profile-assets/css/cryptoon.style.min.css">
</head>
<body>
    <div id="cryptoon-layout" class="theme-orange">
        
        <!-- sidebar -->
    <x-sidebar></x-sidebar>

        <!-- main body area -->
        <div class="main px-lg-4 px-md-4">

            <!-- Body: Header -->
            <x-header></x-header>


            <!-- Body: Body -->
            <div class="body d-flex py-3"> 
                <div class="container-xxl">
                    @if (session('success'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>{{ Auth::user()->name }}</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
 
                    </div>
                @endif

                    <div class="row g-3 mb-3">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md-6 col-lg-6 col-xl-3">
                                            <div class="d-flex">
                                                <img class="avatar rounded-circle" src="profile-assets/images/profile_av.svg" alt="profile">
                                                <div class="flex-fill ms-3">
                                                    <p class="mb-0"><span class="font-weight-bold">Name</span></p>
                                                    <small class="">{{ Auth::user()->name }}</small>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-6 col-lg-6 col-xl-3">
                                            <div class="d-flex flex-column">
                                                <span class="text-muted mb-1">User ID:164647708</span>
                                                <span class="small text-muted flex-fill text-truncate">Last login time 2021-09-29 10:56:22</span>
                                            </div>
                                        </div> --}}
                                        <div class="col-md-6 col-lg-6 col-xl-2">
                                            <div class="d-flex-inline">
                                                <span class="badge bg-careys-pink mb-1">Personal</span>
                                                <span class="small text-muted d-flex align-items-center"><i class="icofont-diamond px-1 fs-5 color-lightyellow "></i> VIP</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <a href="{{url('add-bank')}}" title="invite" class="btn text-dark mb-1" style="background-color: #3aade1">Withdraw</a>
                                            {{-- <a href="{{url('add-bank')}}" title="invite" class="d-block"><i class="icofont-twitter px-1 fs-6 color-lightblue"></i>Add Your Bank Account for New Withdraw</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row End -->

                    <div class="row g-3 mb-3 row-cols-1 row-cols-md-2 row-cols-lg-4">
                        <div class="col">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="flex-fill text-truncate">
                                        <span class="text-muted small text-uppercase">BNB/BUSD</span>
                                        <div class="d-flex flex-column">
                                            <div class="price-block">
                                                <span class="fs-6 fw-bold color-price-up">418</span>
                                                <span class="small text-muted px-2">$418</span>
                                            </div>
                                            <div class="price-report">
                                                <span class="small text-danger">- 1.28% <i class="fa fa-level-down"></i></span>
                                                <span class="small text-muted px-2">Volume:10967,865.92 BUSD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="apexspark1"></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="flex-fill text-truncate">
                                        <span class="text-muted small text-uppercase">ETH/USDT</span>
                                        <div class="d-flex flex-column">
                                            <div class="price-block">
                                                <span class="fs-6 fw-bold color-price-down">3499</span>
                                                <span class="small text-muted px-2">$3500</span>
                                            </div>
                                            <div class="price-report">
                                                <span class="small text-danger">- 1.79% <i class="fa fa-level-down"></i></span>
                                                <span class="small text-muted px-2">Volume:541,545,011.76 USDT</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="apexspark2"></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="flex-fill text-truncate">
                                        <span class="text-muted small text-uppercase">DOT/BUSD</span>
                                        <div class="d-flex flex-column">
                                            <div class="price-block">
                                                <span class="fs-6 fw-bold">35.00</span>
                                                <span class="small text-muted px-2">$35</span>
                                            </div>
                                            <div class="price-report">
                                                <span class="small text-success">+ 3.78% <i class="fa fa-level-up"></i></span>
                                                <span class="small text-muted px-2">Volume:63,324,607.43 BUSD BUSD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="apexspark3"></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="flex-fill text-truncate">
                                        <span class="text-muted small text-uppercase">GRT/USDT</span>
                                        <div class="d-flex flex-column">
                                            <div class="price-block">
                                                <span class="fs-6 fw-bold color-price-up">0.8413</span>
                                                <span class="small text-muted px-2">$1</span>
                                            </div>
                                            <div class="price-report">
                                                <span class="small text-danger">- 1.11% <i class="fa fa-level-down"></i></span>
                                                <span class="small text-muted px-2">Volume:28,538,521.44 USDT</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="apexspark4"></div>
                            </div>
                        </div>
                    </div><!-- Row End -->

                    <div class="row g-3 mb-3 row-deck">
                        <div class="col-xl-12 col-xxl-7">
                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom align-items-center flex-wrap">
                                    <h6 class="mb-0 fw-bold">Balance Details</h6> 
                                    <ul class="nav nav-tabs tab-body-header rounded d-inline-flex mt-2 mt-md-0" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#Spot" role="tab">Spot</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#P2P" role="tab">P2P</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Margin" role="tab">Margin</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Future" role="tab">Future</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Earn" role="tab">Earn</a></li>
                                    </ul>
                                </div>

                                        
                                            
                                <div class="card-body" id="refresh-section">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="Spot">
                                            <div class="row g-3">
                                                <div class="col-lg-6"> 
                                                    <div>Account balance:</div>
                                                    <h3>{{ Auth::user()->balance }} BTC</h3>
                                                    {{-- <div class="mt-3 pt-3 text-uppercase text-muted pt-2 small">Buy this month</div>
                                                    <h5>3.0675432 BTC</h5> --}}
                                                    {{-- <div class="mt-3 text-uppercase text-muted small">Sell this month</div>
                                                    <h5>2.0345618 BTC</h5> --}}
                                                    <div class="mt-3 text-uppercase text-muted small">Estimated Value In EUR:</div>
                                                    <h5>{{number_format((float) Auth::user()->balance*$price,2) }} €</h5>
                                                    {{-- <h5>€ {{Cryptocap::getSingleAsset('bitcoin')->data->priceUSD)}}</h5> --}}
                                                    {{-- Price of the Bitcoin (EUR): <b>{{ $bitcoin["price_usd"] }}  €</b> <br> --}}

                                                    {{-- <h5>{{number_format((float)  Auth::user()->balance/0.000051 ,2)}} €</h5> --}}
                                                </div>  
                                             
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="P2P">
                                            <div class="row g-3">
                                                <div class="col-g-6">
                                                    <div>Account balance:</div>
                                                    <h3>{{ Auth::user()->balance }}  BTC</h3>
                                                    {{-- <div class="mt-3 pt-3 text-uppercase text-muted pt-2 small">Buy this month</div>
                                                    <h5>0.00005388 BTC</h5>
                                                    <div class="mt-3 text-uppercase text-muted small">Sell this month</div>
                                                    <h5>2.0345618 BTC</h5> --}}
                                                    <div class="mt-3 text-uppercase text-muted small">Estimated Value:</div>
                                                    <h5> {{number_format((float) Auth::user()->balance*$price,2 )}} €</h5>
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
                                                    <h3>{{ Auth::user()->balance }}  BTC</h3>
                                                    <div class="mt-3 pt-3 text-uppercase text-muted pt-2 small">Total  in €</div>
                                                    <h5>{{number_format((float) Auth::user()->balance*$price,2 )}} €</h5>
                                                    {{-- <div class="mt-3 text-uppercase text-muted small">Account Equity:</div>
                                                    <h5>2.0345618 BTC</h5>
                                                    <div class="mt-3 text-uppercase text-muted small">Profit & Loss:</div>
                                                    <h5>0.95 BTC(1.6.00%) $25 (8.00%)</h5> --}}
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
                                                    <h3>{{number_format((float) Auth::user()->balance,2) }}  BTC≈€ {{ number_format((float)Auth::user()->balance*$price ,2)}}</h3>
                                                   
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
                                                    <h3>{{number_format((float) Auth::user()->balance,2) }}  BTC≈€{{number_format((float) Auth::user()->balance*$price,2) }}</h3>
                                                    {{-- <div class="mt-3 pt-3 text-uppercase text-muted pt-2 small">Locked:</div>
                                                    <h5>0.00000388 BTC</h5>
                                                    <div class="mt-3 text-uppercase text-muted small">Flexible:</div>
                                                    <h5>0.0000018 BTC</h5> --}}
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
                                    <h6 class="mb-0 fw-bold">Increase your account security</h6> 
                                    <a href="security.html" title="security" class="d-inline-flex"><i class="icofont-caret-right fs-5"></i></a>
                                </div>
                                <div class="card-body">
                                    <div class="row row-cols-2 g-0">
                                        <div class="col">
                                            <div class="security border-bottom border-end">
                                                <div class="d-flex align-items-start px-2 py-3">
                                                    <div class="dot-green mx-2 my-2"></div>
                                                    <div class="d-flex flex-column">
                                                        <span class="flex-fill text-truncate">Enable 2FA</span>
                                                        <span>Enabled</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="security border-bottom">
                                                <div class="d-flex align-items-start px-2 py-3">
                                                    <div class="dot-green mx-2 my-2"></div>
                                                    <div class="d-flex flex-column">
                                                        <span class="flex-fill text-truncate">Identity Verification</span>
                                                        <span>Verified</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col">
                                            <div class="security border-bottom border-end">
                                                <div class="d-flex align-items-start px-2 py-3">
                                                    <div class="dot-red mx-2 my-2"></div>
                                                    <div class="d-flex flex-column">
                                                        <span class="flex-fill text-truncate">Anti-phishing Code</span>
                                                        <a href="security.html" title="setup" class="text-decoration-underline">Setup</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="col">
                                            <div class="security border-bottom">
                                                <div class="d-flex align-items-start px-2 py-3">
                                                    <div class="dot-green mx-2 my-2"></div>
                                                    <div class="d-flex flex-column">
                                                        <span class="flex-fill text-truncate">Withdrawal Whitelist</span>
                                                        <a href="#" title="setup" class="text-decoration-underline">On</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                      
                                        <div class="col">
                                            <div class="security ">
                                                <div class="d-flex align-items-start px-2 py-3">
                                                    <div class="dot-green mx-2 my-2"></div>
                                                    <div class="d-flex flex-column">
                                                        <span class="flex-fill text-truncate">Email Address </span>
                                                        <span>{{ Auth::user()->email }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row End -->

                    <div class="row g-3 mb-3 row-deck" >
                        <div class="col-xl-4 col-xxl-5">
                            <div class="card">
                                <div class="card-header py-3 d-flex flex-wrap justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold">Top Coin Volume</h6>
                                </div>
                                <div class="card-body" id="refresh-section2">
                                    <span class="h3 d-block mb-2" >{{number_format((float) Auth::user()->balance*$price ,2)}} €</span>
                                    <!-- Progress -->
                                    <div class="progress rounded-pill mb-1" style="height: 5px;">
                                        <div class="progress-bar chart-color1" role="progressbar" style="width: 32%" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar chart-color2" role="progressbar" style="width: 23%" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar chart-color3" role="progressbar" style="width: 13%" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar chart-color4" role="progressbar" style="width: 7%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between mb-4">
                                        <span>0%</span>
                                        <span>100%</span>
                                    </div>
                                    <!-- End Progress -->
                                    <div class="table-responsive">
                                        <table class="table  table-nowrap mb-0">
                                            <tbody>
                                                <tr>
                                                    <td><i class="fa fa-square chart-text-color1"></i> LIVE BTC</td>
                                                    {{-- <td><i class="fa fa-square chart-text-color1"></i> 1 BTC </td> --}}
                                                    <td id="refresh-section">1 BTC ={{number_format((float)  $price,2)}}€</td>
                                                    {{-- <td><span class="badge bg-success">+12.1%</span></td> --}}
                                                </tr>
                                                {{-- <tr>
                                                    <td><i class="fa fa-square chart-text-color2"></i> LTC</td>
                                                    <td>2.409425</td>
                                                    <td><span class="badge bg-warning">+6.9%</span></td>
                                                </tr> --}}
                                                {{-- <tr>
                                                    <td><i class="fa fa-square chart-text-color3"></i> XRP</td>
                                                    <td>0.0906654</td>
                                                    <td><span class="badge bg-danger">-1.5%</span></td>
                                                </tr> --}}
                                                {{-- <tr>
                                                    <td><i class="fa fa-square chart-text-color4"></i> DASH</td>
                                                    <td>0.007653</td>
                                                    <td><span class="badge bg-success">1.9%</span></td>
                                                </tr> --}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-xl-8 col-xxl-7">
                           <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom align-items-center flex-wrap">
                                    <h6 class="mb-0 fw-bold">Login Activity</h6> 
                                    <ul class="nav nav-tabs tab-body-header rounded d-inline-flex mt-2 mt-md-0" role="tablist">
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Activity" role="tab">Activity</a></li>
                                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#Devices" role="tab">Devices</a></li>
                                    </ul>
                                </div>
                               <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade" id="Activity">
                                            <ul class="list-unstyled list mb-0">
                                                <li class="d-flex align-items-center py-2">
                                                    <div class="avatar rounded no-thumbnail chart-text-color1"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                                    <div class="flex-fill ms-3">
                                                        <div class="h6 mb-0">web</div>
                                                        <small class="text-muted">Mumbai India</small>
                                                    </div>
                                                    <div class="flex-end">
                                                        <span class="d-block text-end">122.170.109.22</span>
                                                        <span class="text-muted d-block small">2021-09-30 11:00:52</span>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-center py-2">
                                                    <div class="avatar rounded no-thumbnail chart-text-color2"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                                    <div class="flex-fill ms-3">
                                                        <div class="h6 mb-0">web</div>
                                                        <small class="text-muted">Mumbai India</small>
                                                    </div>
                                                    <div class="flex-end">
                                                        <span class="d-block text-end">122.170.109.22</span>
                                                        <span class="text-muted d-block small">2021-09-30 11:00:20</span>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-center py-2">
                                                    <div class="avatar rounded no-thumbnail chart-text-color3"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                                    <div class="flex-fill ms-3">
                                                        <div class="h6 mb-0">web</div>
                                                        <small class="text-muted">Mumbai India</small>
                                                    </div>
                                                    <div class="flex-end">
                                                        <span class="d-block text-end">122.170.109.21</span>
                                                        <span class="text-muted d-block small">2021-09-29 10:56:22</span>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-center py-2">
                                                    <div class="avatar rounded no-thumbnail chart-text-color4"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                                    <div class="flex-fill ms-3">
                                                        <div class="h6 mb-0">web</div>
                                                        <small class="text-muted">Pune India</small>
                                                    </div>
                                                    <div class="flex-end">
                                                        <span class="d-block text-end">198.182.109.22</span>
                                                        <span class="text-muted d-block small">2021-09-30 12:50:52</span>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-center py-2">
                                                    <div class="avatar rounded no-thumbnail chart-text-color2"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                                    <div class="flex-fill ms-3">
                                                        <div class="h6 mb-0">web</div>
                                                        <small class="text-muted">Banglor India</small>
                                                    </div>
                                                    <div class="flex-end">
                                                        <span class="d-block text-end">126.150.109.22</span>
                                                        <span class="text-muted d-block small">2021-09-30 10:00:20</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade show active" id="Devices">
                                            <ul class="list-unstyled list mb-0">
                                                <li class="d-flex align-items-center py-2">
                                                    <div class="avatar rounded no-thumbnail chart-text-color1"><i class="fa fa-chrome" aria-hidden="true"></i></div>
                                                    <div class="flex-fill ms-3">
                                                        <div class="h6 mb-0">Chrome V94.0.4606.61 (Windows)</div>
                                                        <small class="text-muted">Mumbai India</small>
                                                    </div>
                                                    <div class="flex-end">
                                                        <span class="d-block text-end">122.170.109.22</span>
                                                        <span class="text-muted d-block small">2021-09-30 11:00:52</span>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-center py-2">
                                                    <div class="avatar rounded no-thumbnail chart-text-color2"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                                                    <div class="flex-fill ms-3">
                                                        <div class="h6 mb-0">iPhone</div>
                                                        <small class="text-muted">Mumbai India</small>
                                                    </div>
                                                    <div class="flex-end">
                                                        <span class="d-block text-end">27.57.172.87</span>
                                                        <span class="text-muted d-block small">2021-09-23 09:03:35</span>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-center py-2">
                                                    <div class="avatar rounded no-thumbnail chart-text-color3"><i class="fa fa-firefox" aria-hidden="true"></i></div>
                                                    <div class="flex-fill ms-3">
                                                        <div class="h6 mb-0">Mozila V92.0.4515.159 (Windows)</div>
                                                        <small class="text-muted">Mumbai India</small>
                                                    </div>
                                                    <div class="flex-end">
                                                        <span class="d-block text-end">117.99.104.150</span>
                                                        <span class="text-muted d-block small">2021-08-19 08:01:44</span>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-center py-2">
                                                    <div class="avatar rounded no-thumbnail chart-text-color4"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                                                    <div class="flex-fill ms-3">
                                                        <div class="h6 mb-0">Android</div>
                                                        <small class="text-muted">Pune India</small>
                                                    </div>
                                                    <div class="flex-end">
                                                        <span class="d-block text-end">118.99.104.150</span>
                                                        <span class="text-muted d-block small">2021-09-30 12:50:52</span>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-center py-2">
                                                    <div class="avatar rounded no-thumbnail chart-text-color3"><i class="fa fa-safari" aria-hidden="true"></i></div>
                                                    <div class="flex-fill ms-3">
                                                        <div class="h6 mb-0">Safari V84.0.4515.159 (Mac)</div>
                                                        <small class="text-muted">Banglor India</small>
                                                    </div>
                                                    <div class="flex-end">
                                                        <span class="d-block text-end">177.192.104.150</span>
                                                        <span class="text-muted d-block small">2021-08-19 07:01:44</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                               </div>
                           </div>   
                        </div> --}}
                    </div>
                    <!-- Row End -->

                   

                </div>
            </div>
        
            <!-- Modal Custom Settings-->
            <div class="modal fade right" id="Settingmodal" tabindex="-1"  aria-hidden="true">
                <div class="modal-dialog  modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Custom Settings</h5>
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
    <script src="profile-assets/bundles/libscripts.bundle.js"></script>
     

    <!-- Plugin Js -->
    <script src="profile-assets/bundles/dataTables.bundle.js"></script>
    <script src="profile-assets/bundles/apexcharts.bundle.js"></script>

    <!-- Jquery Page Js -->
    <script src="/profile-js/template.js"></script>
    <script src="/profile-js/page/index.js"></script>
            <script>

setInterval(() => {
  $('#refresh-section').load("/dashboard "+"#refresh-section");
  
  
}, 2000);
setInterval(() => {
$('#refresh-section2').load("/dashboard "+"#refresh-section2");
  
  
}, 2000);

</script>
</body>
</html> 