 <div id="sorting_ase_desc" >     

        <input id="sub_categories_id" class="form-control" type="hidden" value="<?php echo @$sub_categories_id;  ?>">
        <input id="categories_id" class="form-control" type="hidden" value="<?php echo @$categories_id;  ?>">
        <input id="search_by_meta" type="hidden" class="form-control" value="<?php echo @$search_by_meta;  ?>">
        <input id="order_by" type="hidden" class="form-control" value="<?php echo @$order_by;  ?>">
        <input id="min_price" type="hidden" class="form-control" value="<?php echo @$min_price;  ?>">
         <input id="max_price" type="hidden" class="form-control" value="<?php echo @$max_price;  ?>">
	
    	<?php
		$row_count=2;
			foreach($classified_posts_arr as $ftc_classified_post)
		{
			
		$photo=$ftc_classified_post['Classified_post']['photo'];	
	
	$description=$ftc_classified_post['Classified_post']['description'];	
	$sub_category_id=$ftc_classified_post['Classified_post']['sub_category_id'];	
	
	$brand=$ftc_classified_post['Classified_post']['brand'];	
	
	$classified_post_id=$ftc_classified_post['Classified_post']['id'];	
	
	$price=$ftc_classified_post['Classified_post']['price'];	
	
	$product_name=$ftc_classified_post['Classified_post']['product_name'];	
	
	$city_id=$ftc_classified_post['Classified_post']['city_id'];	
	
	
	
	$date=$ftc_classified_post['Classified_post']['date'];	
	
	$stock=$ftc_classified_post['Classified_post']['stock'];	
		//		$sub_categories=$ftc_classified_post['sub_categories'];
				$classified_post_date_show=date("d-M-Y",strtotime($date));
				
				$photo_arr=explode(',', $photo);
			   $photo_first=$photo_arr[0];
	
	$return_array=$this->requestAction(array('controller' => 'Nonmovinginventory', 'action' => 'find_city_states_sub_category'),array('pass'=>array($city_id,$sub_category_id)));
	
	$city_name=$return_array[0];
	$states=$return_array[1];
	$sub_categories=$return_array[2];
		if($row_count%2==0)
		{
			?>
			<div class="row">
			<?php
		}
		
		?>
        <div class="col-md-6 col-sm-12">
             <div class="portlet blue-hoki box">
             
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i><a  style="color:#FFF" href="<?php echo $this->webroot; ?>ads_details?post_id=<?php echo $classified_post_id; ?>" class="search-result-title  "> <?php echo @$sub_categories; if(!empty($product_name)) { ?> ( <?php echo $product_name; ?> )<?php } ?></a>
                    </div>
                </div>
			
						
						 <div class="portlet-body">
                                <div class="row static-info">
                                    <div class="col-md-12 value">
                                        <div  style="overflow:auto;margin-bottom:10px" class="col-sm-8 " >
								 <p class="description"> <b>Price :</b> &nbsp;
                                           <?php
											if($price>0)
											{
												echo '<i class="fa fa-inr"></i>'.$price; 
											}
											else
											{
												echo 'Negotiable';
											}
											 ?> </p>
                                             <?php
											if(!empty($brand))
											{
												?>
                                                <p class="description"> <b>Brand :</b>   <?php echo $brand; ?> </p>
                                                <?php
											}
											if(!empty($stock))
											{
												?>
                                                <p class="description"> <b>Stock :</b>   <?php echo $stock; if(!empty($ftc_classified_post['Classified_post']['unit'])) {   echo " ".$ftc_classified_post['Classified_post']['unit']; } ?> </p>
                                                <?php
											}
											if(!empty($ftc_classified_post['Classified_post']['part_no']))
											{
												?>
                                                <p class="description"> <b>Part No. :</b><?php echo $ftc_classified_post['Classified_post']['part_no']; ?> </p>
                                                <?php
											}
											if(!empty($city_name))
											{
												?>
                                                 <p class="description"> <b>Location :</b>   <?php echo $city_name; ?> ( <?php echo $states; ?> )</p>
                                                <?php
											}
											 ?>
							</div>
						

                   <div class="col-sm-2">
							<a href="<?php echo $this->webroot; ?>ads_details?post_id=<?php echo $classified_post_id; ?>" class="btn-block result-details-link">
                           <div style="height:150px;width:150px"> 
                            <img style="border:2px solid #67809F; border-radius:5px 5px 5px 5px;" alt="Post Images" class="img-res" width="150"  height="135"  src="<?php if(empty($photo_first)){ echo $this->webroot; ?>images/image/no_pic.gif<?php } else { echo $this->webroot; ?>images_post/<?php echo $ftc_classified_post['Classified_post']['user_id']."/".$ftc_classified_post['Classified_post']['id']."/".$photo_first; } ?>"/>
                             <a href="ads_details?post_id=<?php echo $ftc_classified_post['Classified_post']['id']; ?>" class="btn blue-hoki btn-sm" style="width:100%; padding-top:3px; margin-top:1px;"><i class="fa fa-th-large"></i> <b>Details</b></a>
                            </div>
                            </a>
						</div>
            
                            </div>
                        </div> 
                    </div>
             </div>
        </div> 
        <?php
        if($row_count%2!=0)
        {
            
            ?>
            </div>
            <?php
        
        }
        $row_count++;
									
					
           
		}
		?>
  				  <div id="lode_more_1" >   <input name="page"  class="form-control" id="page" type="hidden" value="1">  </div>
 </div>