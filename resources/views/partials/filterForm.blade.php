@yield('filter')
<div class="row">
    <div class="col-md-12">
        <!--BUSCADOR-->
        <div class="panel panel-busqueda " id="accordion_filtro">

            <div class="panel-heading">
                <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion_filtro" href="#collapseOne" class="collapsed" aria-expanded="false"><i class="fas fa-chevron-down"></i> Filtro de búsqueda</a>
                </h3>
            </div>

            <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                <div class="panel-body">
                <form  method="get" action="{{route('searchWordForm')}}" name="frm_busqueda" id="frm_busqueda">
                        <div class="form-group">
                            <input type="text" data-toggle="tooltip" data-placement="top" title="Qué buscamos?" name="search" id="search" class="form-control" placeholder="Qué buscamos?">
                        </div>
                        <div class="form-group" style="clear:both;">
                            <button type="submit" data-toggle="tooltip" data-placement="top" title="Empezar la Búsqueda"  class="btn btnBuscar fas fa-search"></button>
                            <a type="button" data-toggle="tooltip" data-placement="top" title="Todos los Formularios" class="btn btnBuscar fas fa-list-ol" href="{{route('dash_user')}}"></a>
                        </div>
                </form>
                </div>
            </div><!--FIN BUSCADOR-->
        </div>
    </div>
</div>
