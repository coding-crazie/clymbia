<!DOCTYPE html>
<html lang="en">

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
    <title>Refundments Admin Panel </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/images/btcweblogo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/admin-assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/admin-assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/admin-assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/admin-assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <x-admin-sidebar></x-admin-sidebar>

        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search"  name="search">
                    <button class="btn btn-primary">Search</button>

                </form>
                <div class="navbar-nav align-items-center ms-auto">
                   
                  
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                          <svg viewBox="0 0 36 36" fill="none" role="img" xmlns="http://www.w3.org/2000/svg" width="30" height="30"><title>Amelia Earhart</title><mask id="mask__beam" maskUnits="userSpaceOnUse" x="0" y="0" width="36" height="36"><rect width="36" height="36" rx="72" fill="#FFFFFF"></rect></mask><g mask="url(#mask__beam)"><rect width="36" height="36" fill="#73b06f"></rect><rect x="0" y="0" width="36" height="36" transform="translate(0 0) rotate(324 18 18) scale(1)" fill="#fcba06" rx="36"></rect><g transform="translate(-4 -4) rotate(-4 18 18)"><path d="M15 19c2 1 4 1 6 0" stroke="#000000" fill="none" stroke-linecap="round"></path><rect x="10" y="14" width="1.5" height="2" rx="1" stroke="none" fill="#000000"></rect><rect x="24" y="14" width="1.5" height="2" rx="1" stroke="none" fill="#000000"></rect></g></g></svg>
                            <span class="d-none d-lg-inline-flex">Admin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                          
                            {{-- <a href="#" class="dropdown-item">Settings</a> --}}
                            <a href="{{URL::route('logout')}}" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            {{-- <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Sale</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                   

                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Sale</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Sale & Revenue End -->

<style>
    /* Dropdown Button */
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        {{-- <h6 class="mb-0">Recent Salse</h6> --}}
                        {{-- <a href="{{url('export')}}" class="btn btn-sm btn-warning">Export In Excel</a> --}}
                        <div class="dropdown">
                            <button class="btn btn-sm btn-warning">Export</button>
                            <div class="dropdown-content">
                              <a href="{{url('export-excel')}}">Export in Excel</a>
                              <a href="{{url('export-csv')}}">Export as CSV</a>

                             
                            </div>
                          </div>
                    </div>
                    {{-- <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Salse</h6>
                        <a href="{{url('admin-insert')}}" class="btn btn-sm btn-warning">Add New User</a>
                    </div> --}}
                    {{-- <div class="d-flex align-items-center justify-content-between mb-4">
                        {{-- <h6 class="mb-0">Recent Salse</h6> --}}
                        {{-- <a href="{{url('update-balance')}}" class="btn btn-sm btn-warning">Add Balance At One click</a>
                    </div>  --}}
                    
                    <div class="table-responsive">
                        {{-- <a class="btn btn-sm btn-warning" href="{{url('admin-insert')}}">Add</a> --}}
                        {{-- <form action="" class="col-9">
                            <div class="form-group">x
                                <input type="search" name="search" id="" class="form-control" placeholder="Search Here" >
                            </div>
                            <button class="btn btn-primary">Search</button>
                        </form> --}}
                        <div class="alert alert-danger" role="alert" style="background-color: rgb(0, 234, 255)">
                           Hi <svg viewBox="0 0 48 48" height="50" width="50" xmlns="http://www.w3.org/2000/svg"><path d="M11.500 45.500 A12.5 1.5 0 1 0 36.500 45.500 A12.5 1.5 0 1 0 11.500 45.500 Z" fill="#45413c" opacity=".15"></path><path d="M33.46,19.26l-.13,3.26L22.11,11.29A2.59,2.59,0,0,0,18.67,11a2.49,2.49,0,0,0-.19,3.7l-1.59-1.59a2.77,2.77,0,0,0-3.77-.21,2.67,2.67,0,0,0-.1,3.87L13,16.72a2.53,2.53,0,0,0-3-.46,2.5,2.5,0,0,0-.53,3.94l3,3a2.19,2.19,0,0,0-3.24.16,2.28,2.28,0,0,0,.24,3L22,39a9.39,9.39,0,0,0,13.37-.06,14.47,14.47,0,0,0,4-10.81L39,16a1.08,1.08,0,0,0-1.08-1h0A4.45,4.45,0,0,0,33.46,19.26Z" fill="#ffcebf"></path><path d="M33.33,22.52,22.11,11.29A2.59,2.59,0,0,0,18.67,11a2.48,2.48,0,0,0-.36,3.49,1.8,1.8,0,0,1,.36-.37,2.59,2.59,0,0,1,3.44.27l9.66,9.67Z" fill="#ffdcd1"></path><path d="M39.09,19.12,39,16a1.08,1.08,0,0,0-1.08-1,4.45,4.45,0,0,0-4.45,4.29l-.13,3.26.13-.14a4.46,4.46,0,0,1,4.45-4.29A1.17,1.17,0,0,1,39.09,19.12Z" fill="#ffdcd1"></path><path d="M33.46,19.26l-.13,3.26L22.11,11.29A2.59,2.59,0,0,0,18.67,11a2.49,2.49,0,0,0-.19,3.7l-1.59-1.59a2.77,2.77,0,0,0-3.77-.21,2.67,2.67,0,0,0-.1,3.87L13,16.72a2.53,2.53,0,0,0-3-.46,2.5,2.5,0,0,0-.53,3.94l3,3a2.19,2.19,0,0,0-3.24.16,2.28,2.28,0,0,0,.24,3L22,39a9.39,9.39,0,0,0,13.37-.06,14.47,14.47,0,0,0,4-10.81L39,16a1.08,1.08,0,0,0-1.08-1h0A4.45,4.45,0,0,0,33.46,19.26Z" fill="none" stroke="#45413c" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12.34 23.18L18.4 29.23" fill="none" stroke="#45413c" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.02 16.78L21.93 25.69" fill="none" stroke="#45413c" stroke-linecap="round" stroke-linejoin="round"></path><path d="M18.48 14.72L25.69 21.94" fill="none" stroke="#45413c" stroke-linecap="round" stroke-linejoin="round"></path><path d="M33.33,22.52l-3.57,3.57a6,6,0,0,0,0,8.49h0" fill="none" stroke="#45413c" stroke-linecap="round" stroke-linejoin="round"></path><path d="M24.11,8.76a9.06,9.06,0,0,1,4.31,2,9.72,9.72,0,0,1,2.7,4" fill="none" stroke="#45413c" stroke-linecap="round" stroke-linejoin="round"></path><path d="M24.68,6.09A11.06,11.06,0,0,1,30,8.51a11.84,11.84,0,0,1,3.33,4.93" fill="none" stroke="#45413c" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4.65,24.24a9,9,0,0,0,.79,4.67,9.65,9.65,0,0,0,3.17,3.63" fill="none" stroke="#45413c" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1.92,24.1a11.07,11.07,0,0,0,1,5.77,12,12,0,0,0,3.91,4.49" fill="none" stroke="#45413c" stroke-linecap="round" stroke-linejoin="round"></path></svg> Admin  of Refundments <span style="color:black ">Please use three Status for Users Request <br> <span style="color:green">Success => I am the success Status if Request goes all well</span> <br> <span style="color:red">Failed => I am the Failed Status if requests goes fails </span>  <br> <span style="color:yellow">Pending =>  I am the Default Status</span>
                          </div>
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    {{-- <th scope="col"><input class="form-check-input" type="checkbox"></th> --}}
                                    <th scope="col">Registered ID</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Account Holder Full Name</th>
                                    <th scope="col">Country Code </th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Holder Country</th>    
                                    <th scope="col">Bank Number</th>
                                    <th scope="col">Bank Name</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Creation Data</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Change The Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                  
                        @foreach ($banks as $bank )
                              
                                <tr>
                                    {{-- <td><input class="form-check-input" type="checkbox"></td> --}}
                                    <td>{{$bank->user->id}}</td>
                                    <td>{{$bank->user->name}}</td>
                                    <td>{{$bank->user->email}}</td>
                                    <td>{{$bank->bfname}}</td>
                                    <td>{{$bank->bcountry_code}}</td>
                                    <td>{{$bank->bphone_number}}</td>
                                    <td>{{$bank->country}}</td>
                                    <td>{{$bank->bnumber}}</td>
                                    <td>{{$bank->bname}}</td>
                                    <td>{{$bank->amount}}</td>
                                    <td>{{$bank->created_at}}</td>
                                    @if ($bank->status=='Pending')
                                    <td><span><strong style="color: yellow">{{ $bank->status }}</strong></span></td> 
                                        
                                    @elseif($bank->status=='Success')
                                
                                      <td><span><strong style="color:green">{{ $bank->status }}</strong></span></td>
                                    @else
                                  <td><span><strong style="color:red">{{ $bank->status }}</strong></span></td>  
                                    
                                        
                                    @endif
                                    {{-- <td style="color:yellow ">{{$bank->status}}</td> --}}
                                   
                                    
                                    <td><a class="btn btn-sm btn-success" href="{{url('bank-admin-status',$bank->id)}}">Change Status</a></td>

                                    {{-- <td><a class="btn btn-sm btn-primary" href="{{url('admin-delete',$user->id)}}">Delete</a></td> --}}
                                    {{-- <td><a class="btn btn-sm btn-warning" href="{{url('add-balance',$user->id)}}">Add Balance</a></td> --}}
                                </tr>
                               
                                @endforeach
                            </tbody>

                        </table>
                        {{$banks->links()}}
                   

                    </div>
                </div>
            </div>
            <br>
            <br>
           
            <!-- Recent Sales End -->

            @foreach ($errors->all() as $error)
            <p class="text-danger">{{ $error }}</p>
         @endforeach 
            @if (session('status'))
            <div class="alert alert-warning" role="alert">
                {{ session('status') }}
            </div>
      
        @endif
        

       
            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy;  <a href="{{url('')}}">Refundments</a>  , All Right Reserved. 
                        </div>
                      
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/admin-assets/lib/chart/chart.min.js"></script>
    <script src="/admin-assets/lib/easing/easing.min.js"></script>
    <script src="/admin-assets/lib/waypoints/waypoints.min.js"></script>
    <script src="/admin-assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/admin-assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/admin-assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/admin-assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="/admin-assets/js/main.js"></script>
</body>

</html>