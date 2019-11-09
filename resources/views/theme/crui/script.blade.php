<script >
        $('#myEditModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var nombre = button.data('nombre') 
          var icono = button.data('icono') 
          var id_categoria = button.data('id_categoria') 
          var modal = $(this)
          modal.find(".modal-body #icon").html("<i class='fa "+icono+"'></i>");
          modal.find('.modal-body #nombre').val(nombre)
          modal.find('.modal-body #icono').val(icono)
          modal.find('.modal-body #id_categoria').val(id_categoria)
        });
  </script>
      
  <script type="text/javascript">
         $(document).ready(function () {
          $('#modalDelete').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget);
              var action = button.data('action');
              var nombre = button.data('nombre');
              var modal = $(this);
              modal.find(".modal-content #txtEliminar").html("¿Está seguroooo de eliminar la categoría <b>" + nombre + "</b>?");
              modal.find(".modal-content form").attr('action', action);
          });
        });
  </script>

  <script type="text/javascript">
        function handleSelect(elm){
          window.location = elm.value+"";
        }
  </script>


      <script type="text/javascript">
        function handleSelect1(elm){
          window.location = elm.value+"";
        }
      </script>
     
   
   <script>
      $(document).ready(function()
      {
        $(".picker2").each(function()
        {
        div=$(this);
          if (icos)
          {
            var iconos="<ul>";
            for (var i=0; i<icos.length; i++) { iconos+="<li><i data-valor='"+icos[i]+"' rel='"+icos[i]+"' class='fa "+icos[i]+"'></i></li>"; }
            iconos+="</ul>";
          }
          console.log(icos.length);
          div.append("<div class='oculto2'><input type='text' placeholder='Encuentra tu icono...'>"+iconos+"</div>");
          $(".inputpicker2").click(function()
          {
            $(".oculto2").fadeToggle("fast");
          });
          $(document).on("click",".oculto2 ul li",function()
          {
            $(".inputpicker2").val($(this).find("i").data("valor"));
            $(".oculto2").fadeToggle("fast");
          });
      
          $(document).on("keyup",".oculto2 input[type=text]",function()
          {
            var value=$(this).val();
            $(".oculto2 ul li i").each(function() 
            {
              if ($(this).attr("rel").search(value) > -1) $(this).closest("li").show();
              else $(this).closest("li").hide();
            });
          });
        });
      });
      </script>

<script>
$(document).ready(function()
{
$(".picker1").each(function()
{
  div=$(this);
  if (icos)
  {
    var iconos="<ul>";
    for (var i=0; i<icos.length; i++) { iconos+="<li><i data-valor='"+icos[i]+"' rel='"+icos[i]+"' class='fa "+icos[i]+"'></i></li>"; }
   iconos+="</ul>";
  }
  console.log(icos.length);
  div.append("<div class='oculto1'><input type='text' placeholder='Encuentra tu icono...'>"+iconos+"</div>");
  $(".inputpicker1").click(function()
  {
    $(".oculto1").fadeToggle("fast");
  });
  $(document).on("click",".oculto1 ul li",function()
  {
    $(".inputpicker1").val($(this).find("i").data("valor"));
    $(".oculto1").fadeToggle("fast");
  });
  $(document).on("keyup",".oculto1 input[type=text]",function()
  {
    var value=$(this).val();
    $(".oculto1 ul li i").each(function() 
    {
      if ($(this).attr("rel").search(value) > -1) $(this).closest("li").show();
      else $(this).closest("li").hide();
    });
  });
});
});
</script>
{{-- <script>
  $(document).ready(function()
  {
  $(".picker3").each(function()
  {
    div=$(this);
    if (icos3)
    {

      var iconos="<ul>";
 for (var i=0; i<icos3.length; i++) { iconos+="<li><img data-valor='"+icos3[i]+"' rel='"+icos3[i]+"' src='svg/education/"+icos3[i]+".svg'></li>"; }
     iconos+="</ul>";
    }
    console.log(icos3.length);
    div.append("<div class='oculto3'><div class='row'><div class='col-lg-6'><input type='text' placeholder='Encuentra tu icono...'></div><div class='col-lg-6'><select id='mySelect' onclick='myFunction()'><option>Seleccione</option><option value='1'>Educación</option><option value='2'>Biología</option></select></div></div>"+iconos+"</div>");
 $(".inputpicker3").click(function()
    {
      $(".oculto3").fadeToggle("fast");
    });
    $(document).on("click",".oculto3 ul li",function()
    {
      $(".inputpicker3").val($(this).find("img").data("valor"));
      $(".oculto3").fadeToggle("fast");
    });
    $(document).on("keyup",".oculto3 input[type=text]",function()
    {
      var value=$(this).val();
      $(".oculto3 ul li img").each(function() 
      {
        if ($(this).attr("rel").search(value) > -1) $(this).closest("li").show();
        else $(this).closest("li").hide();
      });
    });
  });
  });
  </script>
   --}}

   <script>
    // function myFunction() {
    //  var x = document.getElementById("mySelect").value;
   //   document.getElementById("demo").innerHTML = x;
    // }
    
     $(document).ready(function()
     {
     $(".picker3").each(function()
     {
     
    // var x = document.getElementById("mySelect").value;
   //   document.getElementById("demo").innerHTML = x;
    // }
      div=$(this);
    //  div.append("<div class='oculto3'><div class='col-lg-6'><select id='mySelect' onclick='myFunction()'><option>Seleccione</option><option value='1'>Educación</option><option value='2'>Biología</option></select></div></div>");
          if (icos3)
          {
      
            var iconos="<ul>";
            for (var i=0; i<icos3.length; i++) { iconos+="<li><img data-valor='"+icos3[i]+"' rel='"+icos3[i]+"' src='svg/education/"+icos3[i]+".svg'></li>"; }
                iconos+="</ul>";
          }
          console.log(icos3.length);
          div.append("<div class='oculto3'><div class='row'><div class='col-lg-6'><input type='text' placeholder='Encuentra tu icono...'></div></div>"+iconos+"</div>");
          $(".inputpicker3").click(function()
              {
                $(".oculto3").fadeToggle("fast"); 
              });
              $(document).on("click",".oculto3 ul li",function()
              {
                $(".inputpicker3").val($(this).find("img").data("valor"));
                $(".oculto3").fadeToggle("fast");
              });
              $(document).on("keyup",".oculto3 input[type=text]",function()
              {
                var value=$(this).val();
                $(".oculto3 ul li img").each(function() 
                {
                  if ($(this).attr("rel").search(value) > -1) $(this).closest("li").show();
                  else $(this).closest("li").hide();
                });
               });
             });
            });
  
    </script>
     



{{-- <script>
$(document).ready(function(){

fetch_customer_data();

function fetch_customer_data(query = '')
{
$.ajax({
 url:"{{route('categoria.action') }}",
 method:'GET',
 data:{query:query},
 dataType:'json',
 success:function(data)
 {
  $('tbody').html(data.table_data);
  $('#total_records').text(data.total_data);
 }
})
}

$(document).on('keyup', '#search', function(){
var query = $(this).val();
fetch_customer_data(query);
});
});
</script>
 --}}<!----------------------------------------------------------------------------------------
  --------------------- -------   -Negocio--
  ------------------------------------------------------------------------------------------>

<!-- Script -->
<script type='text/javascript'>
  $(document).ready(function(){
    function loadTnegocio(){
    // Department Change
//    $('#sector').change(function(){
       // Department id
     //  var id = $(this).val();
     var id=  $('#sector option:selected').val();
       // Empty the dropdown
       $('#tnegocio').find('option').not(':first').remove();
       // AJAX request 
       $.ajax({
         url: 'getTnegocio/'+id,
         type: 'get',
         dataType: 'json',
         success: function(response){
           var len = 0;
           if(response['data'] != null){
             len = response['data'].length;
           }
           if(len > 0){
             // Read data and create <option >
                var old=$('#tn').val();
                console.log('id= '+id);   
                console.log('old= '+old);   
             for(var i=0; i<len; i++){
               var id1 = response['data'][i].id_tiponegocio;
               console.log('id1= '+id1); 
               var name = response['data'][i].nombre;
               var option = "<option value='negocio?cate="+id+"&cate1="+id1+"' "+(id1==old ? 'selected':'')+"   >"+name+"</option>"; 
               $("#tnegocio").append(option); 
             }
           }
         }
      });
    }
  
      loadTnegocio();
      $('#sector').on('change',loadTnegocio);  
  //    $('#tnegocio').on('change',loadTnegocio); 

  });
  
 $(document).ready(function(){
  $("#tnegocio").on("change", function(){
        var ids=  $('#sector option:selected').val();
      // var idtn=  $('#tnegocio option:selected').val();
        console.log('ids= '+ids);   
     //   console.log('idtn= '+idtn); 
       $('#tnegocio').find('option').not(':first').remove();
       $.ajax({
         url: 'getTnegocio/'+ids,
         type: 'get',
         dataType: 'json',
         success: function(response){
           var len = 0;
           if(response['data'] != null){
             len = response['data'].length;
           }
           if(len > 0){
                var old=$('#tn').val();
                console.log('id= '+ids);   
                console.log('old= '+old);   
             for(var i=0; i<len; i++){
               var id1 = response['data'][i].id_tiponegocio;
               console.log('id1: '+id1 +'= old:'+old); 
               var name = response['data'][i].nombre; 
               var option = "<option value='negocio?cate="+ids+"cate1="+id1+"' "+(id1==old ? 'selected':'')+"  >"+name+"</option>"; 
           //  var option = "<option value='"+id1+"'  @if( session('forms.tnegocio')  == '"+id1+"') selected='selected' @endif >"+name+"</option>"; 
               $("#tnegocio").append(option); 
             }
           }
         }
      }); 
      });
      
     
    }); 


    

  </script>




<!----------------------------------------------------------------------------------------
  --------------------- -------   -Detalle--
  ------------------------------------------------------------------------------------------>

  <script type="text/javascript">
    $(document).ready(function () {
     $('#deleteDetalleModal').on('show.bs.modal', function (event) {
         var button = $(event.relatedTarget);
         var action = button.data('action');
         var nombre = button.data('nombre');
         var modal = $(this);
         modal.find(".modal-content #txtEliminar").html("¿Está seguro de eliminar el Producto <b>" + nombre + "</b>?");
         modal.find(".modal-content form").attr('action', action);
     });
   });
   </script>


<!-------------Edit tipo de negocio------------------------>

<script >
  $('#editTipoNegocioModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var nombre = button.data('nombre') 
    var icono = button.data('icono') 
    var id_tiponegocio = button.data('id_tiponegocio') 
    var modal = $(this)

    modal.find(".modal-body #icon").html("<i class='fa "+icono+"'></i>");
      
    modal.find('.modal-body #nombre').val(nombre)
    modal.find('.modal-body #icono').val(icono)
    modal.find('.modal-body #id_tiponegocio').val(id_tiponegocio)
  });
</script>

<!--------------------- NEGOCIO  -->

<script >
  $('#editNegocioModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var nombre = button.data('nombre') 
    var descripcion = button.data('descripcion') 
    var id_negocio = button.data('id_negocio') 
    var cate = button.data('cate') 
    var modal = $(this)

    
    modal.find('.modal-body #nombre').val(nombre)
    modal.find('.modal-body #descripcion').val(descripcion)
    modal.find('.modal-body #id_negocio').val(id_negocio)
    modal.find('.modal-body #cate').val(cate)
  });
</script>


 <script type="text/javascript">
  function handleSelect2(elm){
    window.location = elm.value+"";
  }
</script>

<script type="text/javascript">
  $(document).ready(function () {
   $('#deleteNegocioModal').on('show.bs.modal', function (event) {
       var button = $(event.relatedTarget);
       var action = button.data('action');
       var nombre = button.data('nombre');
       var cate = button.data('cate');
      + var modal = $(this);
       modal.find(".modal-content #txtEliminar").html("¿Está seguroooo de eliminar la pyme <b>" + nombre + "</b>?");
       modal.find('.modal-body #cate').val(cate);
       modal.find(".modal-content form").attr('action', action);
   });
 });
 </script>


<!----------------------------------------------------------------------------------------
  --------------------- -------   -sucursal--
  ------------------------------------------------------------------------------------------>
<script type="text/javascript">
  function handleSelect3(elm){
    window.location = elm.value+"";
  }
</script>
<script >
    $('#editSucursalModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var nombre = button.data('nombre') 
      var celular = button.data('celular') 
      var telefono = button.data('telefono') 
      var direccion = button.data('direccion') 
      var latitud = button.data('latitud') 
      var longitud = button.data('longitud') 
      var foto = button.data('foto')
      var tipo_foto = button.data('tipo_foto') 
      
      var id_sucursal = button.data('id_sucursal') 
      var cate = button.data('cate') 
      var modal = $(this)
  
      
      modal.find('.modal-body #nombre').val(nombre)
      modal.find('.modal-body #celular').val(celular)
      modal.find('.modal-body #telefono').val(telefono)
      modal.find('.modal-body #direccion').val(direccion)
      modal.find('.modal-body #latitud').val(latitud)
      modal.find('.modal-body #longitud').val(longitud)
     // modal.find('.modal-body #foto').val(foto)
      //modal.find('.modal-body #tipo_foto').val(tipo_foto)
     // modal.find(".modal-body #ima").html("<img src='{{ 'data:image/" .tipo_foto . ";base64," .foto '}}' "style='max-width:75px;' >");
 
      
      modal.find('.modal-body #id_sucursal').val(id_sucursal)
      modal.find('.modal-body #cate').val(cate)
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function () {
     $('#deleteSucursalModal').on('show.bs.modal', function (event) {
         var button = $(event.relatedTarget);
         var action = button.data('action');
         var nombre = button.data('nombre');
         var cate = button.data('cate');
         var modal = $(this);
         modal.find(".modal-content #txtEliminar").html("¿Está seguro de eliminar la Sucursal <b>" + nombre + "</b>?");
         modal.find('.modal-body #cate').val(cate);
         modal.find(".modal-content form").attr('action', action);
     });
   });
   </script>



   <!--.-----------------------------------USUARIO--->


   <script >
      $('#editUsuarioModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var nombre = button.data('nombre') 
        var nombre = button.data('cedula') 
        var celular = button.data('celular') 
        var telefono = button.data('telefono') 
        var direccion = button.data('direccion') 
        var latitud = button.data('correo') 
        var longitud = button.data('apellido') 
       
        
        var id_usuario = button.data('id_usuario') 
      
        var modal = $(this)
    
        modal.find('.modal-body #cedula').val(cedula)
        modal.find('.modal-body #nombre').val(nombre)
        modal.find('.modal-body #apellido').val(apellido)
        modal.find('.modal-body #celular').val(celular)
        modal.find('.modal-body #telefono').val(telefono)
        modal.find('.modal-body #direccion').val(direccion)
        modal.find('.modal-body #correo').val(correo)
   
        modal.find('.modal-body #id_usuario').val(id_usuario)
      
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function () {
       $('#deleteUsuarioModal').on('show.bs.modal', function (event) {
           var button = $(event.relatedTarget);
           var action = button.data('action');
           var nombre = button.data('nombre');
          
           var modal = $(this);
           modal.find(".modal-content #txtEliminar").html("¿Está seguro de eliminar el Usuario <b>" + nombre + "</b>?");
          
           modal.find(".modal-content form").attr('action', action);
       });
     });
     </script>
  

