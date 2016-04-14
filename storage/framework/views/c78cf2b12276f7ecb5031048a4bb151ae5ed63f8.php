<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>




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
                                      Perfiles
                                  </li>

                              </ol>
                          </div>
                      </div> 


                      <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#add-category">ALTA PERFILES</button>

                      <p class="text-muted m-b-30 font-13"></p>







                      <!-- Inicia Tabla -->
                      <div class="row">
                        <div class="col-sm-12">
                            <div class=" table-responsive">



                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Pesaje</th>
                                            <th>Supervisor</th>
                                            <th>Embarques</th>
                                            <th>Administracion</th>
                                            <th>Reportes</th>
                                            <th>Activo</th>
                                            <th>Acciones</th>
                                            
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>Supervisor</td>
                                            <td><i class="fa fa-check-circle-o fa-2x"></i></td>
                                            <td><i class="fa fa-times-circle-o fa-2x"></i></td>
                                            <td><i class="fa fa-check-circle-o fa-2x"></i></td>
                                            <td><i class="fa fa-times-circle-o fa-2x"></i></td>
                                            <td><i class="fa fa-check-circle-o fa-2x"></i></td>
                                            <td><i class="fa fa-check-circle-o fa-2x"></i></td>
                                          

                                            <td class="editbtn">
                                                <a href="" title="Detalles" <i class="fa fa-file-text-o" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></a>

                                                <span data-toggle="modal" data-target="#edit-category">
                                                <i class="fa fa-pencil-square-o" title="Editar" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">
                                                </i>
                                                </span> 

                                                <i class="fa fa-ban" title="Eliminar" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Supervisor</td>
                                            <td><i class="fa fa-times-circle-o fa-2x"></i></td>
                                            <td><i class="fa fa-check-circle-o fa-2x"></i></td>
                                            <td><i class="fa fa-check-circle-o fa-2x"></i></td>
                                            <td><i class="fa fa-times-circle-o fa-2x"></i></td>
                                            <td><i class="fa fa-check-circle-o fa-2x"></i></td>
                                            <td><i class="fa fa-check-circle-o fa-2x"></i></td>
                                         
                                           <td class="editbtn">
                                                <a href="" title="Detalles" <i class="fa fa-file-text-o" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></a>

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
                <h4 class="modal-title"><strong>Alta</strong> perfil</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="control-label">Perfil</label>
                            <input class="form-control form-white" placeholder="Nombre" type="text" name="category-name">
                        </div>
                        <div class="col-md-12">

                            <div class="checkbox chkbx">
                                <input type="checkbox" id="inlineCheckbox1" value="option1">
                                <label for="inlineCheckbox1"> Pesaje </label>
                            </div>

                            <div class="checkbox chkbx">
                                <input type="checkbox" id="inlineCheckbox2" value="option2">
                                <label for="inlineCheckbox2"> Supervisor </label>
                            </div>


                            <div class="checkbox chkbx">
                                <input type="checkbox" id="inlineCheckbox3" value="option3">
                                <label for="inlineCheckbox3"> Embarques </label>
                            </div>

                            <div class="checkbox chkbx">
                                <input type="checkbox" id="inlineCheckbox4" value="option4">
                                <label for="inlineCheckbox4"> Administracion </label>
                            </div>

                            <div class="checkbox chkbx">
                                <input type="checkbox" id="inlineCheckbox5" value="option5">
                                <label for="inlineCheckbox5"> Reportes </label>
                            </div>

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
                            <label class="control-label">Perfil</label>
                            <input class="form-control form-white" placeholder="Nombre" type="text" name="category-name">
                        </div>
                        <div class="col-md-12">

                            <div class="checkbox chkbx">
                                <input type="checkbox" id="inlineCheckbox1" value="option1">
                                <label for="inlineCheckbox1"> Pesaje </label>
                            </div>

                            <div class="checkbox chkbx">
                                <input type="checkbox" id="inlineCheckbox2" value="option2">
                                <label for="inlineCheckbox2"> Supervisor </label>
                            </div>


                            <div class="checkbox chkbx">
                                <input type="checkbox" id="inlineCheckbox3" value="option3">
                                <label for="inlineCheckbox3"> Embarques </label>
                            </div>

                            <div class="checkbox chkbx">
                                <input type="checkbox" id="inlineCheckbox4" value="option4">
                                <label for="inlineCheckbox4"> Administracion </label>
                            </div>

                            <div class="checkbox chkbx">
                                <input type="checkbox" id="inlineCheckbox5" value="option5">
                                <label for="inlineCheckbox5"> Reportes </label>
                            </div>

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
<!-- /Modal Editar -->



<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>