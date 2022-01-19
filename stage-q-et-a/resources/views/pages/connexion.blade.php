@extends('layout.main')

@section('content')
<style>
.icon-background {
    color: #3abcc0;
    margin-top: -20%;
}
.icon{
  margin-top: -20%;
}
</style>
<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-9 col-xl-7">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-3">
              <div class="row justify-content-center">
                
  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Se connecter</p>
                  
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x icon-background"></i>
                    <i class="fas fa-fingerprint fa-stack-1x icon"></i>
                  </span>
                  
                  <form class="mx-1 mx-md-4">
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        {{-- <label class="form-label" for="form3Example1c">Pseudo ou Email</label> --}}
                        <input type="text" id="form3Example1c" class="form-control" placeholder="Pseudo ou Email" />
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user-lock fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          {{-- <label class="form-label" for="form3Example1c">Mot de Passe</label> --}}
                          <input type="text" id="form3Example1c" class="form-control" placeholder="Mot de passe" />
                        </div>
                      </div>
  
                    
  
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='/profil'">Se connecter</button>
                    
                    </div>
  
                  </form>
  
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
  
                  
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection


