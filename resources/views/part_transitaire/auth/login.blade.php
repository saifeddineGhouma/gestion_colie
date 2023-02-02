@extends('part_admin.auth.layout.global')
@section('contenu')
<div id="auth" style="background:url(https://compassionate-lamarr.185-137-122-9.plesk.page/ok/public/assets/images/bg/background.png); background-size: cover;">
    <div class="row h-100" style="margin-top: -120px;">
        <div class="" style="width: 600px;
   height: auto;
    margin: 0 auto;
    border-radius: 9px;
    align-items: center;
    height: 105%;
    opacity: 0.9;
    margin-top: 130px}">
            <div id="auth-left">

                <h1 class="auth-title"style="color:#fff;">Connexion</h1>

                <form action="{{route('transitaire.authenticate')}}" method="Post">
                    @csrf
											                    <br><label class="label"style="color:#fff;">Email</label> <br>

                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl"
                         placeholder="Username" name="email">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
					                    <br><label class="label"style="color:#fff;">Mot de passe</label> <br>

                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl"
                        placeholder="Password" name="password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <div class="form-check form-check-lg d-flex align-items-end">
                        <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault" style="color:#fff;">
                            Keep me logged in
                        </label>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" style="background: #C20000;">Log in</button>
                </form>
				
                <div class="text-center mt-5 text-lg fs-4">
                    <p class=""style="color:#fff;font-size:15px;">Don't have an account? <a href="{{route('transitaire.inscription')}}" class="font-bold"style="color:#C20000;">Sign
                            up</a>.</p>
                    <p><a class="font-bold" href="auth-forgot-password.html" style="color:#fff; font-size:15px;">Forgot password?</a>.</p>
                </div>
				
            </div>
        </div>

    </div>

        </div>

@endsection
