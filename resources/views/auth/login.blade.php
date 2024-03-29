@extends('layouts.auth')

@section('title')
   Log in
@stop

@section('css')

@endsection


@section('content_auth')
          <!--=================================
 login-->

 <section class="height-100vh d-flex align-items-center page-section-ptb login"
 style="background-image: url(assets/images/login-bg.jpg);">
 <div class="container">
     <div class="row justify-content-center no-gutters vertical-align">
         <div class="col-lg-4 col-md-6 login-fancy-bg bg"
             style="background-image: url(images/login-inner-bg.jpg);">
             <div class="login-fancy">
                 <h2 class="text-white mb-20">Hello world!</h2>
                 <p class="mb-20 text-white">Create tailor-cut websites with the exclusive multi-purpose
                     responsive template along with powerful features.</p>
                 <ul class="list-unstyled  pos-bot pb-30">
                     <li class="list-inline-item"><a class="text-white" href="#"> Terms of Use</a> </li>
                     <li class="list-inline-item"><a class="text-white" href="#"> Privacy Policy</a></li>
                 </ul>
             </div>
         </div>
         <div class="col-lg-4 col-md-6 bg-white">
             <div class="login-fancy pb-40 clearfix">
                 <h3 class="mb-30">Sign In To Admin</h3>

                 <form method="POST" action="{{ route('login') }}">
                     @csrf

                     <div class="section-field mb-20">
                         <label class="mb-10" for="name">Email* </label>
                         <input id="email" type="email"
                             class="form-control @error('email') is-invalid @enderror" name="email"
                             value="{{ old('email') }}" required autocomplete="email" autofocus>
                         @error('email')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                         @enderror

                     </div>

                     <div class="section-field mb-20">
                         <label class="mb-10" for="Password">Password* </label>
                         <input id="password" type="password"
                             class="form-control @error('password') is-invalid @enderror" name="password"
                             required autocomplete="current-password">

                         @error('password')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                         @enderror

                     </div>
                     <div class="section-field">
                        <div class="remember-checkbox mb-30">
                           <input type="checkbox" class="form-control" name="two" id="two" />
                           <label for="two"> Remember me</label>
                           <a href="password-recovery.html" class="float-right">Forgot Password?</a>
                          </div>
                        </div>
                       <button class="button"><span>Log in</span><i class="fa fa-check"></i></button>
                       <p class="mt-20 mb-0">Don't have an account? <a href="{{ route('register') }}"> Create one here</a></p>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
</section>

<!--=================================
login-->
@endsection


@section('scripts')

@endsection
