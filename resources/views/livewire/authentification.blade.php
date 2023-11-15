{{-- start login --}}
@if ($TestEtatForm == 0)
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block " style="background:url('{{asset('assets/img/welcom.jpg')}}');background-position:center;background-size:cover"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome to login page</h1>
                                </div>
                                <form class="user" wire:submit.prevent="login">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                            id="exampleInputEmail"  wire:model='email_login'
                                            placeholder="Enter Email Address...">
                                            @error('email_login') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" wire:model='password_login'
                                            id="exampleInputPassword" placeholder="Password">
                                            @error('password_login') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <button  type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                    <hr>
                                    <a href="{{route('google.authgoogle')}}" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>
                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" wire:click="Oubliermotepasseform">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" wire:click="Sinscrireform">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
{{-- end login --}}
@elseif($TestEtatForm == 1)
{{-- start registration --}}
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block" style="background:url('{{asset('assets/img/hi.jpg')}}');background-position:center;background-size:cover"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" wire:submit.prevent="store">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" wire:model="First_name"
                                        placeholder="First Name">
                                        @error('First_name') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="exampleLastName" wire:model="Last_name"
                                        placeholder="Last Name">
                                        @error('Last_name') <span class="error">{{ $message }}</span> @enderror

                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail" wire:model="Email"
                                    placeholder="Email Address">
                                    @error('Email') <span class="error">{{ $message }}</span> @enderror

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" wire:model="password"
                                        id="exampleInputPassword" placeholder="Password">
                                        @error('password') <span class="error">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleRepeatPassword" placeholder="Repeat Password" wire:model="password_confirmation">
                                        @error('password_confirmation') <span class="error">{{ $message }}</span> @enderror

                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning btn-user btn-block">
                                Register Account
                            </button>
                            <hr>
                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Register with Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                            </a>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" wire:click="Oubliermotepasseform">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" wire:click="Seconnecterform">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
{{-- end registration --}}
@else
{{-- start forget password  --}}
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block" style="background: url('{{asset('assets/img/forgets1.jpg')}}'); background-position: center; background-size: cover;"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                    <p class="mb-4">We get it, stuff happens. Just enter your email address below
                                        and we'll send you a link to reset your password!</p>
                                </div>
                                <form class="user" wire:submit.prevent="resetPassword">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp" wire:model='email_oublier'
                                            placeholder="Enter Email Address...">
                                            @error('email_oublier') <span class="error">{{ $message }}</span> @enderror

                                    </div>
                                    <button type="submit"  class="btn btn-primary btn-user btn-block">
                                        Reset Password
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" wire:click="Sinscrireform">Create an Account!</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" wire:click="Seconnecterform">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endif
{{-- end forget password --}}
