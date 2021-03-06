@include('includes.header')


<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">




            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="page-title">Dashboard </h4>
                                <ol class="breadcrumb">
                                    <li>
                                      Catalogos
                                  </li>
                                  <li>
                                      Usuarios
                                  </li>

                              </ol>
                          </div>
                      </div>


                      <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#add-category">ALTA USUARIOS</button>

                      <p class="text-muted m-b-30 font-13"></p>






                      <!-- Inicia Tabla -->
                      <div class="row">
                        <div class="col-sm-12">
                            <div class=" table-responsive">



                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Usuario</th>
                                            <th>Nombre</th>
                                            <th>Perfiles</th>
                                            <th>Ubicaciones</th>
                                            <th>Activo</th>
                                            <th>Acciones</th>
                                            
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Supervisor</td>
                                            <td>E01-Planta ecoplast</td>
                                            
                                            <td><i class="fa fa-check-circle-o fa-2x"></i></td>
                                           
                                          

                                            <td class="editbtn">
                                                

                                                <span data-toggle="modal" data-target="#edit-category">
                                                <i class="fa fa-pencil-square-o" title="Editar" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">
                                                </i>
                                                </span> 

                                                <i class="fa fa-ban" title="Eliminar" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Angelica Ramos</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>Supervisor</td>
                                            <td>E01-Planta ecoplast</td>
                                            <td><i class="fa fa-times-circle-o fa-2x"></i></td>
                                           
                                           
                                         
                                           <td class="editbtn">
                                               

                                                <span data-toggle="modal" data-target="#edit-category">
                                                <i class="fa fa-pencil-square-o" title="Editar" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">
                                                </i>
                                                </span> 

                                                <i class="fa fa-ban" title="Eliminar" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i>
                                            </td>
                                        </tr>



                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <!-- Termina Tabla -->





                  </div>
              </div>
          </div>


      </div> <!-- container -->

  </div> <!-- content -->

</div><!-- content-page -->



<!-- Modal Alta -->
<div class="modal fade none-border" id="add-category" style="display: none;">
    <div class="modal-dialog mdlcustm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><strong>Alta</strong> usuarios</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="control-label">Usuario</label>
                            <input class="form-control form-white" placeholder="" type="text" name="category-name">
                        </div>

                        <div class="col-md-12">
                            <label class="control-label">Nombre</label>
                            <input class="form-control form-white" placeholder="" type="text" name="category-name">
                        </div>

                        <div class="col-md-12">
                            <label class="control-label">Perfiles</label>
                            <input class="form-control form-white" placeholder="" type="text" name="category-name">
                        </div>

                        <div class="col-md-12">
                            <label class="control-label">Ubicaciones</label>
                            <input class="form-control form-white" placeholder="" type="text" name="category-name">
                        </div>





                        <div class="col-md-6">
                            <label class="control-label">Activo</label>
                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                <option value="success">Si</option>
                                <option value="danger">No</option>

                            </select>
                        </div>
                    </div>
                </form>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-default waves-effect waves-light save-category" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- /Modal Alta -->


<!-- Modal Editar -->
<div class="modal fade none-border" id="edit-category" style="display: none;">
    <div class="modal-dialog mdlcustm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><strong>Editar</strong> empresas</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="row">

                        <div class="col-md-12">
                            <label class="control-label">Empresa</label>
                            <input class="form-control form-white" placeholder="" type="text" name="category-name">
                        </div>



                        <div class="col-md-12">
                            <label class="control-label">Razon Social</label>
                            <input class="form-control form-white" placeholder="" type="text" name="category-name">
                        </div>


                        <div class="col-md-12">
                            <label class="control-label">Tipo de empresa</label>
                            <input class="form-control form-white" placeholder="" type="text" name="category-name">
                        </div>

                    </div>
                </form>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-default waves-effect waves-light save-category" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- /Modal Editar -->

@include('includes.footer')