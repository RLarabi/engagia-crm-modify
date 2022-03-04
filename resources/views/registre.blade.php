<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRM - Immobilier Engagia</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/assets/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/assets/css/pages/registre.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/assets/css/pages/auth.css') }}">
    </head>
<body>
    <div class="row">
        <div class="col-lg-5 col-12">
            <div id="auth-left" class="">
                {{--Logo & Title--}}
                <div class="centreE">
                    <div class="auth-logo">
                        <a href="{{route('home')}}"><img src="{{ asset('frontend/images/logo.png') }}" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title text-centre text-lg">S'inscrire.</h1>
                    <p class="auth-subtitle mb-5 text-centre"></p>
    
                </div>
                {{--forme registration--}}
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                        {{--Input Name--}}
                        <div class="form-group position-relative has-icon-left mb-4 ">
                            <input id="name" type="text" class="form-control form-control-xl @error('name') is-invalid @enderror"  value="" placeholder="Nom" name="name">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                           
                        </div>
                        @error('name')
                            <div class="text-danger mt-3">Le Nom est Obligatoire</div >
                         @enderror
                        {{--Input Email--}}
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input id="email" type="text" class="form-control form-control-xl  @error('email') is-invalid @enderror"  placeholder="Email" name="email">
                            <div class="form-control-icon">
                                <i class="bi bi-at"></i>
                            </div>
                        </div>
                        @error('email')
                                <div class="text-danger mt-3">Email est Obligatoire</div >
                        @enderror
                        {{--Input Password--}}
                        <div id="password" class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl  @error('password') is-invalid @enderror" placeholder="Mot de passe" name="password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        @error('password')
                                <div class="text-danger mt-3">Mot de Passe est Obligatoire</div >
                        @enderror
                        {{--Input confirm Password--}}
                        <div id="confirm-password" class="form-group position-relative has-icon-left mb-4">
                            <input  type="password" class="form-control form-control-xl  @error('confirm-password') is-invalid @enderror" placeholder="Confirmation Mot de passe" name="confirm-password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        @error('confirm-password')
                                <div class="text-danger mt-3">La Confirmation est Obligatoire</div >
                        @enderror
                        {{--Select Pack--}}
                        <select id="select-plans" class="form-select form-select-xl  @error('select-plans') is-invalid @enderror" required aria-label="Default select example">
                            <option selected disabled>Selectioner votre Plans</option>
                            <option value="Starter">Starter</option>
                            <option value="Bussines">Bussines</option>
                            <option value="Professionnelle">Professionnelle</option>
                          </select>
                          @error('select-plans')
                                <div class="text-danger mt-3">Plans est Obligatoire</div >
                        @enderror
                        {{--Button Submite--}}
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">S'inscrire</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class="text-gray-600">Vous avez un compte ? <a href="{{route('login')}}"
                            class="font-bold">Log in</a>.</p>
                </div>
            </div>
        </div>
        {{-- Image Right--}}
        <div class="col-lg-7 d-none d-lg-block ">
            <div id="auth-right">
                 
            </div>
        </div>
    </div>

</div>
</body>
</html>