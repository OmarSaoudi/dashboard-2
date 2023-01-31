@extends('layouts.auth')

@section('title')
   Register
@stop

@section('css')

@endsection


@section('content_auth')
  <section class="height-100vh d-flex align-items-center page-section-ptb login" style="background-image: url(images/register-bg.jpg);">
    <div class="container">
       <div class="row no-gutters">
         <div class="col-lg-4 offset-lg-1 col-md-6 login-fancy-bg bg parallax" style="background-image: url(images/register-inner-bg.jpg);">
           <div class="login-fancy">
            <h2 class="text-white mb-20">Hello world!</h2>
            <p class="mb-20 text-white">Create tailor-cut websites with the exclusive multi-purpose responsive template along with powerful features.</p>
            <ul class="list-unstyled pos-bot pb-30">
              <li class="list-inline-item"><a class="text-white" href="#"> Terms of Use</a> </li>
              <li class="list-inline-item"><a class="text-white" href="#"> Privacy Policy</a></li>
            </ul>
           </div>
         </div>
         <div class="col-lg-4 col-md-6 bg-white">
          <div class="login-fancy pb-40 clearfix">
          <h3 class="mb-30">Signup</h3>
           <div class="row">
               <div class="section-field mb-20 col-sm-6">
                 <label class="mb-10" for="fname">First name* </label>
                   <input id="fname" class="web form-control" type="text" placeholder="First name" name="fname">
                </div>
                 <div class="section-field mb-20 col-sm-6">
                 <label class="mb-10" for="lname">Last name* </label>
                   <input id="lname" class="web form-control" type="text" placeholder="Last name" name="lname">
                </div>
              </div>
              <div class="section-field mb-20">
                   <label class="mb-10" for="email">Email* </label>
                    <input type="email" placeholder="Email*" id="email" class="form-control" name="email">
               </div>
              <div class="section-field mb-20">
               <label class="mb-10" for="password">Password* </label>
                 <input class="Password form-control" id="password" type="password" placeholder="Password" name="password">
              </div>
                <a href="#" class="button">
                  <span>Signup</span>
                  <i class="fa fa-check"></i>
               </a>
               <p class="mt-20 mb-0">Don't have an account? <a href="login.html"> Create one here</a></p>
            </div>
          </div>
        </div>
    </div>
  </section>
@endsection


@section('scripts')

@endsection
