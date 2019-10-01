@extends('../layout.master')

@section('content')

    <div class="row">
        <div class="col-md-9 col-sm-9 col-xs-9">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Listado de Tecnicos</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Rut</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Contacto</th>
                            <th>Correo</th>
                            <th>Editar</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop
