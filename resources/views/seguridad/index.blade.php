@extends("theme.crui.layout1")
    @section("titulo")
      Lista
    @endsection
   
     @section("contenid")
    
{{-- <div class="col-md-2 modal-dialog-centered"> --}}
    {{-- <img src="{{ asset('img/logo2.png') }}" class="img-fluid" alt="Responsive image"> --}}
{{-- </div> --}}    


<div class="row justify-content-center">
        <div class="col-md-8">
            @if($errors->any())
            <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{$error}}
                       </li>    
                   @endforeach
               </ul>
            </div>
            @endif
          <div class="card-group">
              <form method="POST" action="{{ route('login-post') }}" id="login" autocomplete="off">
                  @csrf
                <div class="card p-4">
                   
                  <div class="card-body">

                    <h1>Login</h1>
                    <p class="text-muted">Iniciar sesión</p>
                    <div class="input-group mb-3">
                     
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fa fa-user"></i>
                        </span>
                      </div>
                      <input class="form-control" type="correo" name="correo" value="{{old('correo')}}" placeholder="correo">
                    </div>
                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fa fa-lock"></i>
                        </span>
                      </div>
                      <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <button class="btn btn-primary px-4" type="submit">Login</button>
                      </div>
                      <div class="col-6 text-right">
                        <button class="btn btn-link px-0" type="button">Olvidó su contraseña?</button>
                      </div>
                    </div>
                  </div>                                                              
                </div>
              </form>  
            <div class="card text-white bg-primary py-5 d-md-down-none" style="background-image: url('coreui/img/imagen/a.jpg'); width:34%; height:374px;">
              <div class="card-body text-center">
                <div>
                  <h2></h2>
                  <p></p><br><br><br><br>
                  <button class="btn btn-primary active mt-3" type="submit">Home</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endsection