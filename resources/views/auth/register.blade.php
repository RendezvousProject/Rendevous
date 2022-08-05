<x-head />

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader">
        </div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    @if ($type == 'customer')
        <div class="login-area login-s2">
            <div class="container">
                <div class="login-box ptb--10">
                    <form action="{{ route('register', ['type' => 'customer']) }}" method="POST">
                        @csrf
                        <div class="login-form-head">
                            <h4>Sign up</h4>
                            <p>Hello there, Sign up Now and Join with Us To rent your own space 🤞</p>
                        </div>
                        <div class="login-form-body" style="padding-top:1px">
                            <div class="login-form-body text-center">
                                <a href="{{ route('register', ['type' => 'owner']) }}">
                                    <button type="button"
                                        class="btn btn-outline-secondary @if ($type == 'owner') active @endif">
                                        Owner
                                    </button>
                                </a>

                                <a href="{{ route('register', ['type' => 'customer']) }}">
                                    <button type="button"
                                        class="btn btn-outline-secondary @if ($type == 'customer') active @endif">Customer</button>
                                </a>
                            </div>

                            {{-- Type --}}
                            <input type="hidden" name="type" value="{{ $type }}">

                            <div class="form-gp">
                                <label for="exampleInputName1">First Name</label>
                                <input type="text" name="first_name" id="exampleInputName1">
                                <i class="ti-user"></i>
                                <div class="text-danger"></div>
                            </div>
                            <div class="form-gp">
                                <label for="exampleInputName1">Last Name</label>
                                <input type="text" name="last_name" id="exampleInputName1">
                                <i class="ti-user"></i>
                                <div class="text-danger"></div>
                            </div>
                            <div class="form-gp">
                                <label for="exampleInputName1">Email address</label>
                                <input type="email" name="email" id="exampleInputName1">
                                <i class="ti-email"></i>
                                <div class="text-danger"></div>
                            </div>

                            <div class="form-gp">
                                <label for="exampleInputName1">Phone Number</label>
                                <input type="text" name="phone_number" id="exampleInputName1">
                                <i class="ti-mobile"></i>
                                <div class="text-danger"></div>
                            </div>
                            {{-- <div class="form-gp">
                                <label for="exampleInputName1">Company Name</label>
                                <input type="text" name="company_name" id="exampleInputName1">
                                <!-- <i class="ti-company"></i> -->
                                <div class="text-danger"></div>
                            </div> --}}
                            <div class="form-gp">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" id="exampleInputPassword1">
                                <i class="ti-lock"></i>
                                <div class="text-danger"></div>
                            </div>
                            <div class="form-gp">
                                <label for="exampleInputPassword2">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="exampleInputPassword2">
                                <i class="ti-lock"></i>
                                <div class="text-danger"></div>
                            </div>
                            <div class="row mb-4 rmber-area">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" class="custom-control-input"
                                            id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">I agree usage
                                            policies</label>
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="#">The usage policies</a>
                                </div>
                            </div>
                            <div class="submit-btn-area">
                                <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                            </div>
                            <div class="form-footer text-center mt-0">
                                <p class="text-muted">already have an account?
                                    <a href="{{ route('login', ['type' => 'customer']) }}">Sign in</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif

    @if ($type == 'owner')
        <div class="login-area login-s2">
            <div class="container">
                <div class="login-box ptb--10">
                    <form action="{{ route('register', ['type' => 'owner']) }}" method="POST">
                        @csrf
                        <div class="login-form-head">
                            <h4>Sign up</h4>
                            <p>Hello there, Sign up Now and Join with Us To rent your own space 🤞</p>
                        </div>
                        <div class="login-form-body" style="padding-top:1px">
                            <div class="login-form-body text-center">
                                <a href="{{ route('register', ['type' => 'owner']) }}">
                                    <button type="button"
                                        class="btn btn-outline-secondary @if ($type == 'owner') active @endif">
                                        Owner
                                    </button>
                                </a>

                                <a href="{{ route('register', ['type' => 'customer']) }}">
                                    <button type="button"
                                        class="btn btn-outline-secondary @if ($type == 'customer') active @endif">Customer</button>
                                </a>
                            </div>

                            {{-- Type --}}
                            <input type="hidden" name="type" value="{{ $type }}">

                            <div class="form-gp">
                                <label for="exampleInputName1">First Name</label>
                                <input type="text" name="first_name" id="exampleInputName1">
                                <i class="ti-user"></i>
                                <div class="text-danger"></div>
                            </div>
                            <div class="form-gp">
                                <label for="exampleInputName1">Last Name</label>
                                <input type="text" name="last_name" id="exampleInputName1">
                                <i class="ti-user"></i>
                                <div class="text-danger"></div>
                            </div>
                            <div class="form-gp">
                                <label for="exampleInputName1">Email address</label>
                                <input type="email" name="email" id="exampleInputName1">
                                <i class="ti-email"></i>
                                <div class="text-danger"></div>
                            </div>

                            <div class="form-gp">
                                <label for="exampleInputName1">Phone Number</label>
                                <input type="text" name="phone_number" id="exampleInputName1">
                                <i class="ti-mobile"></i>
                                <div class="text-danger"></div>
                            </div>
                            <div class="form-gp">
                                <label for="exampleInputName1">Company Name</label>
                                <input type="text" name="company_name" id="exampleInputName1">
                                <i class="ti-company"></i>
                                <div class="text-danger"></div>
                            </div>
                            <div class="form-gp">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" id="exampleInputPassword1">
                                <i class="ti-lock"></i>
                                <div class="text-danger"></div>
                            </div>
                            <div class="form-gp">
                                <label for="exampleInputPassword2">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="exampleInputPassword2">
                                <i class="ti-lock"></i>
                                <div class="text-danger"></div>
                            </div>
                            <div class="row mb-4 rmber-area">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" class="custom-control-input"
                                            id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">I agree
                                            usage policies</label>
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="#">The usage policies</a>
                                </div>
                            </div>
                            <div class="submit-btn-area">
                                <button id="form_submit" type="submit">Submit <i
                                        class="ti-arrow-right"></i></button>
                            </div>
                            <div class="form-footer text-center mt-0">
                                <p class="text-muted">already have an account?
                                    <a href="{{ route('login', ['type' => 'owner']) }}">Sign in</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif

    <x-script />
</body>

</html>
