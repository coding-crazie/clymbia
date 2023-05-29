<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
     
    @if (Auth::user()->email==='fischermartin005@gmail.com' )
    <a href="{{url('/admin')}}" class="navbar-brand mx-4 mb-3">
        <h3 class="text-primary"><i class=" me-2"><img src="/images/logo.png" width="150px" alt=""></i></h3>
    </a> 
    @endif        
        
    @if (Auth::user()->email==='alex.martin@refundments.com' )
    <a href="{{url('/admins')}}" class="navbar-brand mx-4 mb-3">
        <h3 class="text-primary"><i class=" me-2"><img src="/images/logo.png" width="150px" alt=""></i></h3>
    </a> 
    @endif  

        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                 <svg viewBox="0 0 36 36" fill="none" role="img" xmlns="http://www.w3.org/2000/svg" width="30" height="30"><title>Amelia Earhart</title><mask id="mask__beam" maskUnits="userSpaceOnUse" x="0" y="0" width="36" height="36"><rect width="36" height="36" rx="72" fill="#FFFFFF"></rect></mask><g mask="url(#mask__beam)"><rect width="36" height="36" fill="#73b06f"></rect><rect x="0" y="0" width="36" height="36" transform="translate(0 0) rotate(324 18 18) scale(1)" fill="#fcba06" rx="36"></rect><g transform="translate(-4 -4) rotate(-4 18 18)"><path d="M15 19c2 1 4 1 6 0" stroke="#000000" fill="none" stroke-linecap="round"></path><rect x="10" y="14" width="1.5" height="2" rx="1" stroke="none" fill="#000000"></rect><rect x="24" y="14" width="1.5" height="2" rx="1" stroke="none" fill="#000000"></rect></g></g></svg>
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            
            <div class="ms-3">
                <h6 class="mb-0">{{Auth::user()->name}}</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
           
            <a href="{{url('users')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Users At One Place</a>
            {{-- <a href="{{url('verifications')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Verifications</a> --}}
            <a href="{{url('users-registered')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Users at Numebrs</a>
            <a href="{{url('total-requests')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Withdraw Requests</a>
            {{-- <a href="{{url('/chart')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a> --}}
            @if ( Auth::user()->email==='alex.martin@refundments.com')
            <a href="{{url('/users-banks-germany')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Germany Accounts</a>              
            @endif
            @if ( Auth::user()->email==='fischermartin005@gmail.com')
            <a href="{{url('/users-banks')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>See users Banks Accounts</a>
                
            @endif
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Important Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{url('/login')}}" class="dropdown-item">Sign In</a>
                    <a href="{{url('/registration')}}"  class="dropdown-item">Sign Up</a>
                    
                </div>
            </div>
        </div>
    </nav>
</div>