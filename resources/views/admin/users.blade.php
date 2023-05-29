<!doctype html>
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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="/images/btcweblogo.png" rel="icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <style>
    body{
        background-color: black;
    }
    .heading{ 
        text-align: center;
        color: red;
    }
   
  </style>
  <body>

    <h1 class="heading">Our Users At One Place</h1>
    <h1 class="heading">Current Time </h1>

    <h1 class="heading">{{date('Y-m-d H:i:s')}}</h1>
    <form action="" class="col-9">
        <div class="form-group">
            <input type="search" name="search" id="" class="form-control" placeholder="Search Here" >
        </div>
        <button class="btn btn-primary">Search</button>
    </form>
    <br>
    
    <a href="{{url('downloadpdf')}}" class="btn btn-primary">Export As PDF</a>
    <br>
    <br>
    <br>
  
    <table class="table table-dark table-hover">
       
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">BTC Balance</th>    
          
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user )
                              
                                <tr>
                                    {{-- <td><input class="form-check-input" type="checkbox"></td> --}}
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->password}}</td>
                                    <td>{{$user->balance}}</td>
                                    
                                   
                                
                                </tr>
                               
                                @endforeach
        </tbody>
      </table>
      {{$users->links()}}
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>