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
<div class="page-header">
    <h1>Buscar Resultados De Granja</h1>
</div>

{{ content() }}

<div class="row">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
            <th>Area</th>
            <th>Fecha</th>
            <th>Lugar</th>
            <th>Guardia</th>
            <th>Monitorista</th>
            <th>Hora</th>
            <th>Evento</th>
            <th>Ubicacion</th>
            <th>PersonaInformada</th>
            <th>TiempoDeRespuesta</th>
            <th>Observaciones</th>

                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% if page.items is defined %}
        {% for bitacoragranja in page.items %}
            <tr>
                <td>{{ bitacoragranja.getId() }}</td>
            <td>{{ bitacoragranja.getArea() }}</td>
            <td>{{ bitacoragranja.getFecha() }}</td>
            <td>{{ bitacoragranja.getLugar() }}</td>
            <td>{{ bitacoragranja.getGuardia() }}</td>
            <td>{{ bitacoragranja.getMonitorista() }}</td>
            <td>{{ bitacoragranja.getHora() }}</td>
            <td>{{ bitacoragranja.getEvento() }}</td>
            <td>{{ bitacoragranja.getUbicacion() }}</td>
            <td>{{ bitacoragranja.getPersonainformada() }}</td>
            <td>{{ bitacoragranja.getTiempoderespuesta() }}</td>
            <td>{{ bitacoragranja.getObservaciones() }}</td>

                <td>{{ link_to("bitacoragranja/edit/"~bitacoragranja.getId(), "Edit") }}</td>
                <td>{{ link_to("bitacoragranja/delete/"~bitacoragranja.getId(), "Delete") }}</td>
            </tr>
        {% endfor %}
        {% endif %}
        </tbody>
    </table>
</div>

<div class="row">
    <div class="col-sm-1">
        <p class="pagination" style="line-height: 1.42857;padding: 6px 12px;">
            {{ page.current~"/"~page.total_pages }}
        </p>
    </div>
    <div class="col-sm-11">
        <nav>
            <ul class="pagination">
                <li>{{ link_to("bitacoragranja/search", "Primero") }}</li>
                <li>{{ link_to("bitacoragranja/search?page="~page.before, "Anterior") }}</li>
                <li>{{ link_to("bitacoragranja/search?page="~page.next, "Siguiente") }}</li>
                <li>{{ link_to("bitacoragranja/search?page="~page.last, "Último") }}</li>
            </ul>
        </nav>
    </div>
</div>
