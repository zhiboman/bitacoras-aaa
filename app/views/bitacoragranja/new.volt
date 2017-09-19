<div class="row">

 
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Accion Acuicola </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
     
      <li><a href="/bitacoras-aaa/bitacoragranja">Buscar Bitacora Granjas</a></li>
      <li><a href="/bitacoras-aaa/bitacoragranja/new" class="btn btn-primary active">Crear Bitacora Granjas</a></li>
      <li><a href="#">Camiones</a></li>
    </ul>
        
  </div>
</nav>
</div>

<div class="page-header">   
    <h1>
        Crear  Bitacora Granja
    </h1>
    <p>Centtral De Monitoreo C3</p>
</div>

{{ content() }}

{{ form("bitacoragranja/create", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}







<div class="form-group">
    <label for="fieldLugar" class="col-sm-2 control-label">Lugar</label>
    <div class="col-sm-10">
        {{ text_field("lugar", "size" : 30, "class" : "form-control", "id" : "fieldLugar") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldGuardia" class="col-sm-2 control-label">Guardia</label>
    <div class="col-sm-10">
        {{ text_field("guardia", "size" : 30, "class" : "form-control", "id" : "fieldGuardia") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldMonitorista" class="col-sm-2 control-label">Monitorista</label>
    <div class="col-sm-10">
        {{ text_field("monitorista", "size" : 30, "class" : "form-control", "id" : "fieldMonitorista") }}
    </div>
</div>



<div class="form-group">
    <label for="fieldEvento" class="col-sm-2 control-label">Evento</label>
    <div class="col-sm-10">
        {{ text_field("evento", "size" : 30, "class" : "form-control", "id" : "fieldEvento") }}
    </div>
</div>
    
<div class="form-group">
    <label for="fieldUbicacion" class="col-sm-2 control-label">Ubicacion</label>
    <div class="col-sm-10">
        {{ text_field("ubicacion", "size" : 30, "class" : "form-control", "id" : "fieldUbicacion") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldPersonainformada" class="col-sm-2 control-label">PersonaInformada</label>
    <div class="col-sm-10">
        {{ text_field("personaInformada", "size" : 30, "class" : "form-control", "id" : "fieldPersonainformada") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldTiempoderespuesta" class="col-sm-2 control-label">TiempoDeRespuesta</label>
    <div class="col-sm-10">
        {{ text_field("tiempoDeRespuesta", "size" : 30, "class" : "form-control", "id" : "fieldTiempoderespuesta") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldObservaciones" class="col-sm-2 control-label">Observaciones</label>
    <div class="col-sm-10">
        {{ text_field("observaciones", "size" : 30, "class" : "form-control", "id" : "fieldObservaciones") }}
    </div>
</div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{ submit_button('Guardar', 'class': 'btn btn-default') }}
    </div>
</div>

</form>
