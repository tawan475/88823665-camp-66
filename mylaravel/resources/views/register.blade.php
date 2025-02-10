@extends('layouts.default')

@section('content')
<div class="register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../index2.html"><b>Admin</b>LTE</a>
        </div>
        <!-- /.register-logo -->
        <div class="card">
            <div class="card-body register-card-body">
                <p class="register-box-msg">Register a new membership</p>
                <form action="{{ url ('/register') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input required type="text" id="name" name="name" class="form-control" placeholder="Full Name" />
                        <div class="input-group-text"><span class="bi bi-person"></span></div>
                        <div class="px-2 invalid-feedback">Please enter your name</div>
                    </div>
                    <!-- Error Message -->
                    <div class="input-group mb-3">
                        <input required type="email" id="email" name="email" class="form-control" placeholder="Email" />
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                        <div class="px-2 invalid-feedback">Please enter your email</div>
                    </div>
                    <div class="input-group mb-3">
                        <input required type="password" id="password" name="password" class="form-control" placeholder="Password" />
                        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                        <div class="px-2 invalid-feedback">Password must have atleast one number, one lowercase and one uppercase</div>
                    </div>
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-8">
                            <div class="form-check">
                                <input required class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">
                                    I agree to the <a href="#">terms</a>
                                </label>
                                <div class="px-2 invalid-feedback">Please agree to our terms!</div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" onclick="validate(event);">Sign In</button>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!--end::Row-->
                </form>
                <div class="social-auth-links text-center mb-3 d-grid gap-2">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-primary">
                        <i class="bi bi-facebook me-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-danger">
                        <i class="bi bi-google me-2"></i> Sign in using Google+
                    </a>
                </div>
                <!-- /.social-auth-links -->
                <p class="mb-0">
                    <a href="login.html" class="text-center"> I already have a membership </a>
                </p>
            </div>
            <!-- /.register-card-body -->
        </div>
        <script>
            function validate(e) {
                e.preventDefault();
                // validate form
                let form = e.target.form;
                let isValid = true;
                for (let i = 0; i < form.length; i++) {
                    let checking = form[i];
                    let id = checking.id;
                    let value = checking.value;
                    checking.classList.remove("is-invalid");
                    switch (id) {
                        case "name":
                            if (value.trim() === ''){
                                checking.classList.add("is-invalid");
                                isValid = false;
                            }
                            break;
                        case "email":
                            if (!value.trim().match(/.+@.+\..+/)){
                                checking.classList.add("is-invalid");
                                isValid = false;
                            }
                            break;
                        case "password":
                            // password must have 0-9 a-z A-Z
                            if (!value.trim().match(/(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).+/)){
                                checking.classList.add("is-invalid");
                                isValid = false;
                            }
                            break;
                        case "flexCheckDefault":
                            if (!checking.checked){
                                checking.classList.add("is-invalid");
                                isValid = false;
                            }
                            break;
                    }
                }

                if (isValid){
                    Swal.fire({
                        title: "Registered!",
                        text: "Register successfully.",
                        icon: "success"
                    }).then(() => {
                        e.target.form.submit();
                    });
                }
            }
        </script>
    </div>
    @endsection
