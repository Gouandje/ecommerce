




 <!--  page-wrapper -->
    <div id="page-wrapper">
        <div class="row">
           <!-- page header -->
           <div class="col-lg-12">
            <h1 class="page-header">Forms Element</h1>
        </div>
        <!--end page header -->
    </div>
    <div class="row ">
        <div class="col-lg-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
               
                <div class="panel-heading">
                    Ajouter une spécification du produit
                </div>
                <div class="panel-body">
                    <div class="row padtop">
                        <div class="col-lg-10">
                           <h5 style='color:red'> <?php echo validation_errors();?></h5>
                                <?php echo form_open('save-spec','');?>
                                 <?php $pro = $this->ProductModel->get_all_product();?>
                                 <select class="form-control" name="spec_pro">
                                        <option>Selectionner Produit</option>
                                       
                                         <?php
                                         foreach ($pro as $product) {  ?>
                                        <option value="<?php echo $product->pro_id;?>"><?php echo $product->pro_title?></option>
                                        <?php } ?>
                                </select>
                                <div class="form-group">
                                    <label>caractéristique</label>
                                    <input type="text" class="form-control" value="<?php echo set_value('sp_name')?>" name="sp_name" required="">
                                </div>
                                <div class="htmlitems">
									<div class="form-group contspecval">
										<input type='text' name='sp_val[]' class='form-control sp_cn' placeholder='Entrez la valeur du spec'>
										<a href="javascript:void(0)" class="add_spec" >+</a>
								   </div>
								</div>
                                 
                                <button type="submit" class="btn btn-primary">Save</button>
                            <?php echo form_close();?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Elements -->
        </div>
    </div>
</div>
<!-- end page-wrapper -->


