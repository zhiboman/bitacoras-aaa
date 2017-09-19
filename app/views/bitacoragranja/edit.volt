<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("bitacoragranja", "Go Back") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>
        Edit bitacoragranja
    </h1>
</div>

{{ content() }}

{{ form("bitacoragranja/save", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldId" class="col-sm-2 control-label">Id</label>
    <div class="col-sm-10">
        {{ text_field("id", "type" : "numeric", "class" : "form-control", "id" : "fieldId") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldArea" class="col-sm-2 control-label">Area</label>
    <div class="col-sm-10">
        {{ text_field("area", "size" : 30, "class" : "form-control", "id" : "fieldArea") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldFecha" class="col-sm-2 control-label">Fecha</label>
    <div class="col-sm-10">
        {{ text_field("fecha", "size" : 30, "class" : "form-control", "id" : "fieldFecha") }}
    </div>
</div>

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
    <label for="fieldHora" class="col-sm-2 control-label">Hora</label>
    <div class="col-sm-10">
        {{ text_field("hora", "size" : 30, "class" : "form-control", "id" : "fieldHora") }}
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


{{ hidden_field("id") }}

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{ submit_button('Send', 'class': 'btn btn-default') }}
    </div>
</div>

</form>
