@extends('template.interface')

@section('title','Page Login')

@section('content')
<div class="container">

    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image">
                            <img src="/img/undraw_profile_2.svg" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang Di Coffe Netbox !</h1>
                                </div>
                                <form action="/login" class="user" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user"
                                            id="Email" aria-describedby="emailHelp" placeholder="Email..."
                                            required>
                                    </div><br>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="Password" placeholder="Password..." required>
                                    </div><br>
                                    <hr class="pb-3">
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection