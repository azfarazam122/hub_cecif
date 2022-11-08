@extends('layouts.app')

@section('content')


<style>
.headingOrange {
    font-weight: 900;
    color: #E84741;
}

#background {
    position: absolute;
    height: 100vh;
    top: 0;
    right: 0;
    background: linear-gradient(to right, white 50%, #141539 50%);

}

.image {
    border-radius: 20px;

}

.myfield {
    background-color: white !important;
    border: 1px solid #dedede;
    width: 130% !important;
    padding: 8px 10px;
}

.myfield:focus {
    background-color: white !important;
    width: 130% !important;
    padding: 8px 10px;
    /* box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(126, 239, 104, 0.6);s */
    outline: 0 none;
    border-bottom: 3px solid #E84741 !important;
}

.myfield:focus-visible {
    background-color: white !important;
    width: 130% !important;
    padding: 8px 10px;
    /* box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(126, 239, 104, 0.6);s */
    outline: 0 none;
    border-bottom: 3px solid #E84741 !important;
}

.btn-primary {
    background-color: #E84741 !important;
    border-radius: 0px !important;
    width: 100% !important;
    padding: 10px 0px;
    border: none;
}

@media only screen and (max-width: 1000px) {
    
#background {
    display:none;
}
}
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <div style='color:white;' class="card-header">{{ __('Register') }}</div>
<div class="row">
    <div class="col-lg-5 offset-lg-1">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class=" mb-3">
                            <label for="name" class="col-md-4 col-form-label ">{{ __('Name') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" mb-3">
                            <label for="email" class="col-md-4 col-form-label">{{ __('Email Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" mb-3">
                            <label for="password" class="col-md-4 col-form-label ">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label ">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div></div>
    
                <div class="col-lg-6 p-5" id='background'>
                    <div class="image" style='height:100vh;'>
                        <img src="{{ asset('images/business.jpg') }}" style='border-radius:30px;' height='80%' />

                    </div>
                </div>

</div>
            </div>
        </div>
    </div>
</div>
@endsection
