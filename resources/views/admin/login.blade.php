<x-head />

<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->

    <!-- login area start -->
    {{-- @if ($type == 'customer') --}}
        <div class="login-area login-s2">
            <div class="container">
                <div class="login-box ptb--100">
                    <form action="{{ route('loginAdmin') }}" method="POST">
                        @csrf

                        <div class="login-form-head">
                            <h4>Sign In</h4>
                            <p>Hello there, Sign in to managing your Account 😎</p>
                        </div>
                        {{-- <div class="login-form-body text-center">
                            <a href="{{ route('login', ['type' => 'owner']) }}">
                                <button type="button"
                                    class="btn btn-outline-secondary @if ($type == 'owner') active @endif">
                                    Owner
                                </button>
                            </a>

                            <a href="{{ route('login', ['type' => 'customer']) }}">
                                <button type="button"
                                    class="btn btn-outline-secondary @if ($type == 'customer') active @endif">Customer</button>
                            </a>
                        </div> --}}
                        <div class="login-form-body">

                            {{-- Type --}}
                            <input type="hidden" name="type"
                            {{-- value="{{ $type }}" --}}
                            >

                            {{-- Email Field --}}
                            <div class="form-gp">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" id="exampleInputEmail1" name="email">
                                <i class="ti-email"></i>
                                <div class="text-danger"></div>
                            </div>

                            {{-- Password Field --}}
                            <div class="form-gp">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" id="exampleInputPassword1" name="password">
                                <i class="ti-lock"></i>
                                <div class="text-danger"></div>
                            </div>

                            <div class="row mb-4 rmber-area">
                                {{-- Link To Remember Me --}}
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" class="custom-control-input"
                                            id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">Remember
                                            Me</label>
                                    </div>
                                </div>

                                {{-- Link To Forget Password --}}
                                <div class="col-6 text-right">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                                    @endif
                                </div>

                            </div>

                            <div class="submit-btn-area">
                                <button id="form_submit" type="submit">
                                    Submit
                                    <i class="ti-arrow-right"></i>
                                </button>
                            </div>

                            {{-- Link To Register --}}
                            {{-- <div class="form-footer text-center mt-5">
                                <p class="text-muted">
                                    Don't have an account?

                                    @if (Route::has('register'))
                                        <a href="{{ route('register', ['type' => 'customer']) }}">
                                            Sign up
                                        </a>
                                    @endif
                                </p>
                            </div> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    {{-- @endif --}}
    <!-- login area end -->

    <x-script />
</body>

</html>
