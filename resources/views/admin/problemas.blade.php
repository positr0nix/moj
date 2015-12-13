@include('admin.includes.head')

    <!-- Main Container -->
    <main id="main-container">
        <!-- Stats -->

        <!-- END Stats -->




        <!-- Page Content -->
        <div class="content">

            <div class="row" style="padding: 0px 15px 20px 0px">
                <div class="col-md-12">
                    <button class="btn btn-success pull-right" data-toggle="modal" data-target="#modal-fadein" type="button"><i class="fa fa-plus"></i> Crear Problema</button>
                </div>
            </div>


            <div class="col-lg-12">
                <!-- Header BG Table -->
                <div class="block">
                    <div class="block-content">
                        <table class="table table-striped table-borderless table-header-bg">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">id</th>                                                                     <th class="text-center">Nombre</th>
                                <th class="text-center">Alias</th>                                                                                       <th class="text-center">Problema</th>
                                <th class="text-center">Entrada</th>                                                                                     <th class="text-center">Salida</th>
                                <th class="text-center">Propietario</th>
                                <th class="text-center">Memoria</th>
                                <th class="text-center">tiempo</th>
                                <th class="text-center">Categoría</th>
                                <th class="text-center" style="width: 100px;">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Suma de números</td>
                                <td class="text-center">A+B</td>
                                <td class="text-center"><a href="#" class="link-effect">A+B.pdf</a></td>
                                <td class="text-center"><a class="link-effect" href="javascript:void(0)">suma.in</a></td>
                                <td class="text-center"><a class="link-effect" href="javascript:void(0)">suma.out</a></td>
                                <td class="text-center">Positr0nix</td>
                                <td class="text-center">2 MB</td>
                                <td class="text-center">2 S</td>
                                <td class="text-center"><span class="label label-primary">Senior</span></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Editar usuario"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Eliminar usuario"><i class="fa fa-times"></i></button>
                                    </div>
                                </td>
                            </tr>






                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Header BG Table -->
            </div>



        </div>
        <!-- END Page Content -->


        <!-- Fade In Modal -->
        <div class="modal fade" id="modal-fadein" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">

                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Agregar un problema</h3>
                        </div>

                        <div class="block-content">

                            <form class="form-horizontal push-5-t" action="base_forms_premade.html" method="post" onsubmit="return false;">

                                <div class="form-group">
                                    <label class="col-xs-12" for="nombre">Nombre</label>
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Ingresa el nombre del problema...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-12" for="username">Alias</label>
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" id="alias" name="alias" placeholder="Ingresa el alias del problema...">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-xs-12" for="memoria">Memoria (en MB)</label>
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" id="memoria" name="memoria" placeholder="Memoria límite...">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-xs-12" for="tiempo">Tiempo (en Segundos)</label>
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" id="tiempo" name="tiempo" placeholder="Tiempo límite...">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-xs-12" for="problema">Descripción del problema</label>
                                    <div class="col-xs-12">
                                        <input type="file" id="problema" name="problema">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-xs-12" for="entrada">Archivo de entrada</label>
                                    <div class="col-xs-12">
                                        <input type="file" id="entrada" name="entrada">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-xs-12" for="salida">Archivo de salida</label>
                                    <div class="col-xs-12">
                                        <input type="file" id="salida" name="salida">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-xs-12" for="categoria">Categoría</label>
                                    <div class="col-xs-12">
                                        <select class="js-select2 form-control" id="categoria" name="categoria" style="width: 100%;" data-placeholder="Selecciona una categoría...">
                                            <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                            <option value="0">General</option>
                                            <option value="2">Senior</option>
                                            <option value="3">Junior</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-10">
                                        <button class="btn btn-sm btn-danger pull-right">Cancelar</button>
                                    </div>
                                    <div class="col-xs-2">
                                        <button class="btn btn-sm btn-success pull-right" type="submit"><i class="fa fa-plus push-5-r"></i> Crear</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Fade In Modal -->







    </main>
    <!-- END Main Container -->

      

@include('admin.includes.footer')