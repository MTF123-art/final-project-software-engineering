@extends('layout.app')

@section('title', 'Register')

@section('content')

<main>

   <!-- Register -->
   <section class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">
       <div class="container">
           <div class="row justify-content-center">
               <div class="col-12 col-xl-5 col-lg-7 col-md-9">
                   <div class="card border-0 shadow-sm p-xl-2 aos-init aos-animate" data-aos="fade">
                       <div class="card-body">
                           <div class="border-bottom mb-4">
                               <h1 class="h2 text-body-emphasis">Register</h1>
                           </div>
                           <form method="post">
                               <div class="border-bottom pb-4">
                                   <div class="mb-4">
                                       <label for="txtFullname" class="form-label">Full Name<span class="text-danger">*</span></label>
                                       <input class="form-control shadow-sm" id="txtFullname" name="email" required="">
                                   </div>
                                   <div class="mb-4">
                                       <label for="txtPassword" class="form-label">Password<span class="text-danger">*</span></label>
                                       <input class="form-control shadow-sm" id="txtPassword" name="password" type="password" required="">
                                   </div>
                                   <div class="mb-4">
                                       <label for="txtEmail" class="form-label">Email<span class="text-danger">*</span></label>
                                       <input class="form-control shadow-sm" id="txtEmail" name="email" required="">
                                   </div>
                                   <div class="mb-4">
                                       <label for="txtRetypePassword" class="form-label">Retype password<span class="text-danger">*</span></label>
                                       <input class="form-control shadow-sm" id="txtRetypePassword" name="retypepassword" type="password" required="">
                                   </div>
                                   <div class="form-check mb-4">
                                       <input class="form-check-input shadow-sm" type="checkbox" id="chckAgree" required="">
                                       <label class="form-check-label" for="chckAgree"> I agree to <a href="#" class="hover">terms and policy<span class="text-danger">*</span></a>. </label>
                                   </div>
                                   <button class="btn btn-primary w-100" type="submit" id="btnSubmit">
                                       <i class="hicon hicon-profiles"></i>
                                       <span>Register</span>
                                   </button>
                               </div>
                               <div class="mt-4">
                                   <span>Already have an account? <a href="./login.html">Login</a></span>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- /Register -->

</main>

@endsection