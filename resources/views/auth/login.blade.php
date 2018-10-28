@extends('layouts.app') 

@section('content')
<section class="cover cover-fullscreen height-100 imagebg" data-gradient-bg="#4876BD,#5448BD,#8F48BD,#BD48B1">

    <div class="container pos-vertical-center">
        <div class="row justify-content-center" >
            <div class="login col-md-4 col-lg-4" >
                
                <form method="POST" action="{{ route('login') }}" class="row mt-0">
                    @csrf
                    
                        <div class="col-md-12 text-center">
                            <img src="{{ asset('img/logo-white.png') }}">
                        </div>
                        <div class="col-md-12 text-center">
                            <h3>DTUTIMES</h3>
                        </div>
                        <div class="col-md-12">
                            <input placeholder="Email" type="email" name="email" value=""
                                required autofocus> 
                                                        </div>
                        <div class="col-md-12">
                            <input placeholder="Password" type="password" name="password"
                                required>
                        </div>
                        
                        
                        <div class="col-md-12">
                            <button class="btn btn--primary type--uppercase" type="submit">Login</button>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="input-checkbox">
                                <input id="checkbox" type="checkbox" name="remember" >
                                <label for="checkbox"></label>
                            </div>
                            <span>Remember me</span>

                            <br>
                            <span class="type--fine-print block" >Forgot your username or password?
                                <a href="http://dtutimes.me/password/email">Recover account</a>
                            </span>

                        </div>
                </form>
            </div>
        </div>
     </div>
</section>
    

@endsection
 