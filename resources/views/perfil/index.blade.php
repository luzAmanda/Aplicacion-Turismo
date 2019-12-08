@extends("theme.crui.layout")
@section("titulo")
   Lista
@endsection
 @section("contenid")
 
 
<br>
 <div class="animated fadeIn">
   <h1>PERFIL</h1>
   <div class="">
         <div class="input-group">
         <label>Cedula:  </label>
         
           <input class="form-control" id="cedula" name="cedula" type="text" value="{{ Auth::user()->cedula }}"  required autofocus> 
         </div>
         <div class="input-group">  
      <label>Nombre:</label>
        
           <input class="form-control" id="nombre" name="nombre" type="text" value="{{ Auth::user()->nombre }}"  required autofocus>  
         </div>
         <div class="input-group">  
      <label>Apellido:</label>
         
           <input class="form-control" id="apellido" name="apellido" type="text"  value="{{ Auth::user()->apellido }}"  required autofocus>  
         </div>
         <div class="input-group">  
      <label>Correo:</label>
        
           <input class="form-control" id="correo" name="correo" type="text"  value="{{ Auth::user()->correo }}"  required autofocus>    
         </div>
         <div class="input-group">  
      <label>Dirección:</label>
         
           <input class="form-control" id="direccion" name="direccion" type="text"  value="{{ Auth::user()->direccion }}"  required autofocus>  
         </div>
         <div class="input-group">  
      <label>Teléfono:</label>
        
           <input class="form-control" id="telefono" name="telefono" type="text"  value="{{ Auth::user()->telefono }}"  required autofocus>  
         </div>
         <div class="input-group">  
      <label>Celular:</label>
           
           <input class="form-control" id="celular" name="celular" type="text"  value="{{ Auth::user()->celular }}"  required autofocus> 
         </div>
           <a>Cambiar contraseña</a><br>
           <input class="form-control" id="celular" name="celular" type="text"  value="{{ Auth::user()->password }}"  required autofocus> 
           <a></a>
   </div>
@endsection



   

       
   
