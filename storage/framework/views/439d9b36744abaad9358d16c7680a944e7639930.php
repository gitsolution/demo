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
                                      Rastreo
                                  </li>

                              </ol>
                          </div>
                      </div>



                      <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#add-category">ALTA RASTREO</button>

                      <p class="text-muted m-b-30 font-13"></p>

                      <!-- Inicia Tabla -->
                      <div class="row">
                        <div class="col-sm-12">
                            <div class=" table-responsive">



                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Fecha</th>
                                            <th>Movimiento</th>
                                            <th>Placas</th>
                                            <th>Acciones</th>
                                            
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>03-002-02-01 </td>
                                            <td>2010/10/18-03:21PM</td>
                                            <td>Entrada</td>
                                            <td>CJB-11-20</td>
                                          

                                            <td class="editbtn">

                                                <span data-toggle="modal" data-target="#edit-category">
                                                    <i class="fa fa-pencil-square-o" title="Editar" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">
                                                    </i>
                                                </span> 

                                                <i class="fa fa-ban" title="Eliminar" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>06-332-12-71</td>
                                            <td>2006/11/28-04:28PM</td>
                                            <td>Salida</td>
                                            <td>XYZ-01-20</td>
                                         
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
                <h4 class="modal-title"><strong>Alta</strong> rastreo</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="row">

                        <div class="col-md-12">
                            <label class="control-label">ID</label>
                            <input class="form-control form-white" placeholder="" type="text" name="category-name">
                        </div>



                        <div class="col-md-12">
                            <label class="control-label">Fecha</label>
                            <input class="form-control form-white" placeholder="" type="text" name="category-name">
                        </div>

                        <div class="col-md-12">
                            <label class="control-label">Movimiento</label>
                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                <option value="success">Entrada</option>
                                <option value="danger">Salida</option>

                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="control-label">Placas</label>
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
<!-- /Modal Alta -->







<!-- Modal Editar -->
<div class="modal fade none-border" id="edit-category" style="display: none;">
    <div class="modal-dialog mdlcustm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><strong>Editar</strong> rastreo</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="row">

                        <div class="col-md-12">
                            <label class="control-label">ID</label>
                            <input class="form-control form-white" placeholder="" type="text" name="category-name">
                        </div>



                        <div class="col-md-12">
                            <label class="control-label">Fecha</label>
                            <input class="form-control form-white" placeholder="" type="text" name="category-name">
                        </div>

                        <div class="col-md-12">
                            <label class="control-label">Movimiento</label>
                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                <option value="success">Entrada</option>
                                <option value="danger">Salida</option>

                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="control-label">Placas</label>
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


<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>