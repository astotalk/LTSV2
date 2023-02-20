<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>LTS</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
   
      <link rel="icon" href="{{url('lts_assets/images/fevicon.png')}}"/>

      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{url('lts_assets/css/bootstrap.min.css')}}"/>
      <!-- site css -->
      <link rel="stylesheet" href="{{url('lts_assets/css/app.css')}}">
      
      <!-- responsive css -->
      <link rel="stylesheet" href="{{url('lts_assets/css/responsive.css')}}"/>
     
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{url('lts_assets/css/bootstrap-select.css')}}"/>
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{url('lts_assets/css/perfect-scrollbar.css')}}"/>
   </head>
   <center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    @if(session('success'))
                    <div class="text-success text-center">{{session('success')}}</div>
                    @endif
                    <h3 class="card-header text-center" style="color:darkseagreen">Register User LTS</h3>
                    <div class="card-body">
                        <form action="{{ route('registrationstore') }}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="name form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="email form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="password form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password_confirmation" placeholder="Confirmation Password" id="password_confirmation" class="password_confirmation form-control"
                                    name="password_confirmation" required>
                                @if ($errors->has('password_confirmation'))
                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>
                            
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <input type="submit" class="main_bt text-center" value="Submit">
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</center>

<script src="{{url('lts_assets/js/jquery.min.js')}}"></script>
<script src="{{url('lts_assets/js/popper.min.js')}}"></script>
<script src="{{url('lts_assets/js/bootstrap.min.js')}}"></script>
<!-- wow animation -->
<script src="{{url('lts_assets/js/animate.js')}}"></script>
<!-- select country -->
<script src="{{url('lts_assets/js/bootstrap-select.js')}}"></script>
<!-- nice scrollbar -->
<script src="{{url('lts_assets/js/perfect-scrollbar.min.js')}}"></script>
<script>
   var ps = new PerfectScrollbar('#sidebar');
</script>
<!-- custom js -->
<script src="{{url('lts_assets/js/custom.js')}}"></script>
</body>
</html>


