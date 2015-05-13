<style>
option 
{
    border-top:1px solid #CACACA;
    padding:4px;
	cursor:pointer;
}
select 
{
	cursor:pointer;
}
</style>
<?php
foreach($arr_classified as $value)
{
	$category_id_fetch=$value['classified_post']['category_id'];
	$user_id=$value['classified_post']['user_id'];
	$sub_category_id_fetch=$value['classified_post']['sub_category_id'];
	$price_fetch=$value['classified_post']['price'];
	$year_of_manufacture_fetch=$value['classified_post']['year_of_manufacture'];
	$brand_fetch=$value['classified_post']['brand'];
	$stock_fetch=$value['classified_post']['stock'];
	$sku_fetch=$value['classified_post']['sku'];
	$city_id_fetch=$value['classified_post']['city_id'];
	$product_name_fetch=$value['classified_post']['product_name'];
	$description_fetch=$value['classified_post']['description'];
	$short_description_fetch=$value['classified_post']['short_description'];
	$part_no_fetch=$value['classified_post']['part_no'];
	$photo_fetch=$value['classified_post']['photo'];
	$date_fetch=$value['classified_post']['date'];
	$time_fetch=$value['classified_post']['time'];
	$available_from_fetch=$value['classified_post']['available_from'];
	$available_to_fetch=$value['classified_post']['available_to'];
	$tax_class_fetch=$value['classified_post']['tax_class'];
	$status_fetch=$value['classified_post']['status'];
	$meta_title_fetch=$value['classified_post']['meta_title'];
	$meta_keywords_fetch=$value['classified_post']['meta_keywords'];
	$meta_description_fetch=$value['classified_post']['meta_description'];
	$location_address_fetch=$value['classified_post']['location_address'];
}
?>
<div class="row" >

    <div class="col-md-12" id="loadingform">
        <form class="form-horizontal form-row-seperated"  id="uploadimage"  method="post" enctype="multipart/form-data">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-basket font-green-sharp"></i>
                        <span class="caption-subject font-green-sharp bold uppercase">
                        Edit Product </span>
                        <span class="caption-helper">edit product</span>
                    </div>
                    <div class="actions btn-set">
                       <!-- <button type="button" name="back" class="btn btn-default btn-circle"><i class="fa fa-angle-left"></i> Back</button>-->
                        <button class="btn btn-default btn-circle addclass_function" id="configreset" ><i class="fa fa-reply"></i> Reset</button>
                        <button class="btn green-haze btn-circle addclass_function"  id="save"><i class="fa fa-check"></i> Save</button>
                        <button class="btn green-haze btn-circle addclass_function" id="save_edit"><i class="fa fa-check-circle"></i> Save & Continue Edit</button>
                    
                    </div>
                </div>
                <div id="submitform"></div>
                <div class="portlet-body">
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_general" data-toggle="tab">
                                General </a>
                            </li>
                            <li>
                                <a href="#tab_meta" data-toggle="tab">
                                Meta </a>
                            </li>
                            <li >
                                <a href="#tab_images" data-toggle="tab">
                                Images </a>
                            </li>
                            
                        </ul>
                        <div class="tab-content no-space">
                            <div class="tab-pane active" id="tab_general">
                                <div class="form-body">
                                <input type="hidden" id="update_table" value="<?php echo $productid; ?>" />
                                    <div class="form-group">
                                            <label class="col-md-2 control-label">Category: <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-10">
                                                <select class="table-group-action-input form-control input-medium"  id="categories_id" name="category_id"   onchange="fetch_sub_category_ajax(this.value)">
                                                    <option   value="">---Select Category---</option>
                                                    <?php
                                                    foreach($arr_categories as $value)
                                                    {
                                                        $categories=$value ['categorie']['categories'];
                                                        $categories_id=$value['categorie']['id'];
                                                        ?>
                                                        <option  value="<?php echo $categories_id; ?>" <?php if($categories_id==$category_id_fetch){ ?> selected="selected" <?php } ?> >&nbsp;&nbsp;&nbsp;<?php echo $categories; ?></option>
                                                         <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                    </div>
                                   
                                     <?php
									  if(!empty($sub_categories_ARR))
									  {
										  ?>
								 <span id="sub_category_ajax">     
								<div class="form-group">
									<label class="col-md-2 control-label">Sub Category: <span class="required">
									* </span>
									</label>
									<div class="col-md-10">
										<select class="table-group-action-input form-control input-medium"  id="sub_categories_id"  name="sub_category_id" >
											<option   value="">---Select Subcategory---</option>
											<?php
											foreach($sub_categories_ARR as $value)
											{
												$sub_categories=$value['sub_categorie']['sub_categories'];
												$sub_categories_id=$value['sub_categorie']['id'];
												?>
												<option   value="<?php echo $sub_categories_id; ?>"  <?php if($sub_categories_id==$sub_category_id_fetch){ ?> selected="selected" <?php } ?> >&nbsp;&nbsp;&nbsp;<?php echo $sub_categories ; ?></option>
												<?php
												
											}
											?>
										</select>
									</div>
								</div></span>
								<?php
									  }
									  else
									  {
										  ?> <span id="sub_category_ajax"> </span> <?php
									  }
								?>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Product Name: <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <input class="form-control" name="product_name" placeholder="" type="text" value="<?php echo $product_name_fetch; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Brand Name: <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <input class="form-control" name="brand" placeholder="" type="text"  value="<?php echo $brand_fetch; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Total Stock: <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <input class="form-control" name="stock" placeholder="" type="text" value="<?php echo $stock_fetch; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Year of Manufacture: <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <input class="form-control" name="year_of_manufacture" placeholder="" type="text" value="<?php echo $year_of_manufacture_fetch; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Part No.: <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <input class="form-control" name="part_no" placeholder="" type="text" value="<?php echo $part_no_fetch; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">City: <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                        	 <select class="table-group-action-input form-control input-medium"  id="city_id" name="city_id">
                                         <option  value="">---Select City---</option>
										   <?php
                                            foreach($arr_states as $value)
                                                    { 
                                                    $states=$value['state']['states'];
                                                    $states_id=$value['state']['id'];
                                                    ?>
                                                        <optgroup label="<?php echo $states; ?>">
                                                        <?php 
                                                            $return_array=$this->requestAction(array('controller' => 'Nonmovinginventory', 'action' => 'find_city_arr'),array('pass'=>array($states_id)));
                                                        foreach($return_array as $value_city_nmae)
                                                    { 
                                                        
                                                        $city_name=$value_city_nmae['city_name']['city_name'];
                                                        $city_name_id=$value_city_nmae['city_name']['id'];
                                                        ?>
                                                                        <option  value="<?php echo $city_name_id; ?>" <?php if($city_name_id==$city_id_fetch){ ?> selected="selected" <?php } ?> >&nbsp;&nbsp;&nbsp;<?php echo $city_name; ?></option>
                                                                    <?php
                                                   }
                                                    ?>
                                                    </optgroup>
                                                    <?PHP
                                                }
                                                ?></select>
                                           
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-md-2 control-label">Address: <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" name="location_address"><?php echo $location_address_fetch; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Description: <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" name="description"><?php echo $description_fetch; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Short Description: <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" name="short_description"><?php echo $short_description_fetch; ?></textarea>
                                            <span class="help-block">
                                            shown in product listing </span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Available Date: <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <div class="input-group input-large date-picker input-daterange" data-date="2012/10/11" data-date-format="yyyy/mm/dd">
                                                <input class="form-control" name="available_from" type="text" value="<?php if($available_from_fetch != '0000-00-00'){ echo $available_from_fetch; } ?>">
                                                <span class="input-group-addon">
                                                to </span>
                                                <input class="form-control" name="available_to" type="text"  value="<?php if($available_to_fetch != '0000-00-00'){ echo $available_to_fetch; } ?>">
                                            </div>
                                            <span class="help-block">
                                            availability daterange. </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">SKU: <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <input class="form-control" name="sku" placeholder="" type="text" value="<?php echo $sku_fetch; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Price: <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <input class="form-control" name="price" placeholder="" type="text" value="<?php echo $price_fetch; ?>">
                                        </div>
                                    </div>
                                   <!-- <div class="form-group">
                                        <label class="col-md-2 control-label">Tax Class: <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <select class="table-group-action-input form-control input-medium" name="tax_class">
                                                <option value="">Select...</option>
                                                <option value="1">None</option>
                                                <option value="2">Taxable Goods</option>
                                                <option value="3">Shipping</option>
                                                <option value="4">USA</option>
                                            </select>
                                        </div>
                                    </div>-->
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Status: <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <select class="table-group-action-input form-control input-medium" name="status">
                                                <option value="">Select...</option>
                                                <?php
												foreach($arr_status as $value)
                                                { 
												?>
                                                <option value="<?php echo $value['status']['id']; ?>" <?php if($value['status']['id']==$status_fetch){ ?> selected="selected" <?php } ?> >&nbsp;&nbsp;&nbsp;<?php echo $value['status']['status_name']; ?></option>
                                                <?php
												}
												?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_meta">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Meta Title:</label>
                                        <div class="col-md-10">
                                            <input class="form-control maxlength-handler" name="meta_title" maxlength="100" placeholder="" type="text" value="<?php echo $meta_title_fetch; ?>">
                                            <span class="help-block">
                                            max 100 chars </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Meta Keywords:</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control maxlength-handler" rows="8" name="meta_keywords" maxlength="1000"><?php echo $meta_keywords_fetch; ?></textarea>
                                            <span class="help-block">
                                            max 1000 chars </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Meta Description:</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control maxlength-handler" rows="8" name="meta_description" maxlength="255"><?php echo $meta_description_fetch; ?></textarea>
                                            <span class="help-block">
                                            max 255 chars </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="tab_images">
                              <div id="message"></div> 
                                <div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="input-group input-large">
                                            <div class="form-control uneditable-input span3" data-trigger="fileinput">
                                                <i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename"></span>
                                            </div>
                                            <span class="input-group-addon btn default btn-file">
                                            <span class="fileinput-new">
                                            Select file </span>
                                            <span class="fileinput-exists">
                                            Change </span>
                                            <input name="file" id="file" type="file">
                                            </span>
                                            <a href="#" class="input-group-addon btn red fileinput-exists" id="remove" data-dismiss="fileinput">
                                            Remove </a>
                                         
                                        </div>
                                   		<br/>
                                    	<button  id="upload_image"  class="btn green addclass_function" ><i class="fa fa-share"></i> Upload Files</button>
                                    </div>
                                </div>
                              <center>
                                <table class="table table-bordered table-hover" id="tab_images_uploader_filelist"  style="width:30%;">
                                <thead>
                                <tr role="row" class="heading">
                                    <th width="10%">
                                         Image
                                    </th>
                                    <th width="10%">
                                    Remove
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
								$combine_data=$user_id.$productid;
								$target = "images_post/".$user_id."/".$productid;
								$photo_data=explode(',', $photo_fetch);
								$rowCount=0;
								foreach($photo_data as $photo)
								{
									$target=@$target."/".$photo;
									$img_data=explode('.', $photo);
									$img_name=$img_data[0];
									$rowCount=substr($img_name,strlen($combine_data));
									?>
									<tr id="<?php echo $rowCount; ?>">
										<td>
											<a href="<?php echo $this->webroot; echo $target; ?>" class="fancybox-button" data-rel="fancybox-button">
											<img class="img-responsive" src="<?php echo $this->webroot;  echo $target; ?>" style="height:120px;" alt="">
											</a>
										</td>
									   <td>
										<button name="<?php echo $rowCount; ?>" class="btn red btn-sm addclass_function" removeclass="removeclass"><i class="fa fa-times"></i> Remove </button>
									   </td>
									</tr>
								   <?php
								}
								?>
                                
                                </tbody>
                                </table></center>
                                <?php
                                $table = "<table>
              <tr><td>A</td></tr>
              <tr><td>B</td></tr>
              <tr><td>C</td></tr>
          </table>";
		  ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
               