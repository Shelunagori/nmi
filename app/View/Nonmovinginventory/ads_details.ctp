<?php
foreach($classified_posts_arr as $ftc_classified_post)
		{
			$photo=$ftc_classified_post['Classified_post']['photo'];	
			
			$short_description=$ftc_classified_post['Classified_post']['short_description'];
			$description=$ftc_classified_post['Classified_post']['description'];	
			$sub_categories_id=$ftc_classified_post['Classified_post']['sub_category_id'];	
			
			$brand=$ftc_classified_post['Classified_post']['brand'];	
			
			$classified_post_id=$ftc_classified_post['Classified_post']['id'];	
			
			$price=$ftc_classified_post['Classified_post']['price'];	
			
			$product_name=$ftc_classified_post['Classified_post']['product_name'];	
			
			$city_id=$ftc_classified_post['Classified_post']['city_id'];	
		
			$time=$ftc_classified_post['Classified_post']['time'];	
			$part_no=$ftc_classified_post['Classified_post']['part_no'];	
	
			$location_address=$ftc_classified_post['Classified_post']['location_address'];	
			$user_id=$ftc_classified_post['Classified_post']['user_id'];	
			$year=$ftc_classified_post['Classified_post']['year_of_manufacture'];	
			$date=$ftc_classified_post['Classified_post']['date'];	
			$stock=$ftc_classified_post['Classified_post']['stock'];	
			$classified_post_date_show=date("d-M-Y",strtotime($date));
			
			if(empty($photo))
			{
			$img_cnt=0;	
			}
			else
			{
				@$photo_arr=explode(',', $photo);
				$img_cnt=sizeof($photo_arr);
				$photo_first=$photo_arr[0];
			}
			$return_array=$this->requestAction(array('controller' => 'Nonmovinginventory', 'action' => 'find_city_states_sub_category'),array('pass'=>array($city_id,$sub_categories_id)));
			
			$city_name=$return_array[0];
			$states=$return_array[1];
			$sub_categories=$return_array[2];
			$categories=$return_array[3];
					
			
				}
				
                ?>
                <style>
				.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
   background: #E6400C;
   color: #fff;
}
</style>
 <div  class="row">
	<div class="col-md-12">
    

            <div class="product-page">
             <a href="<?php echo $this->webroot; ?>Nonmovinginventory/categories_details?sub_categories_id=<?php echo $sub_categories_id; ?>" class="btn btn-info" rel="tab"><i class="fa fa-arrow-circle-left"></i> Back</a>
             <br/><br/>
              <div class="row">
                <div class="col-md-3 col-sm-6">
                  <div style="position: relative; overflow: hidden;" class="product-main-image">
              
                      <img  src="<?php if(empty($photo_first)){ echo $this->webroot; ?>images/image/no_pic.gif<?php } else { echo $this->webroot; ?>images_post/<?php echo $ftc_classified_post['Classified_post']['user_id']."/".$ftc_classified_post['Classified_post']['id']."/".$photo_first; } ?>" data-bigimgsrc="<?PHP echo $this->webroot; ?>images_post/<?php if(empty($photo)){ ?>no_pic.gif<?php } else { echo @$photo_first; } ?>"/>
                      
                  <img style="position: absolute; top: -25.2695px; left: -11.9843px; opacity: 0; width: 600px; height: 800px; border: medium none; max-width: none;" class="zoomImg" src="<?php if(empty($photo_first)){ echo $this->webroot; ?>images/image/no_pic.gif<?php } else { echo $this->webroot; ?>images_post/<?php echo $ftc_classified_post['Classified_post']['user_id']."/".$ftc_classified_post['Classified_post']['id']."/".$photo_first; } ?>">
                  </div>
                  <div class="product-other-images">
                  <?php
				  if(!empty($photo))
				  {
					  foreach($photo_arr as $photos)
					  {
						  ?>
						  <a href="<?php echo $this->webroot; ?>images_post/<?php echo $ftc_classified_post['Classified_post']['user_id']."/".$ftc_classified_post['Classified_post']['id']."/".$photos;  ?>" class="fancybox-button" rel="photos-lib"><img alt="<?php echo $sub_categories; ?> ( <?php echo $product_name; ?> )"  src="<?php if(empty($photo)){ echo $this->webroot; ?>images/image/no_pic.gif<?php } else { echo $this->webroot; ?>images_post/<?php echo $ftc_classified_post['Classified_post']['user_id']."/".$ftc_classified_post['Classified_post']['id']."/".$photos; } ?>" style="width:58px; height:70px;"></a>
						  
						  <?php
					  }
				  }
				  ?>
                 
                  </div>
                </div>
                <div class="col-md-9 col-sm-6">
                  <h1><?php echo $sub_categories; if(!empty($product_name)) {  echo "( ".$product_name." )"; } ?> </h1>
                  <div class="price-availability-block clearfix">
                    <div class="price">
                      <strong>
                      <?php
					  if($price>0)
					  {
						  ?>
                      <span>&nbsp;<i class="fa fa-inr"></i></span><?php echo $price ; 
					  }
					  else
					  {
						  echo 'Negotiable';
					  }
					  ?>
                      </strong>
                      
                    </div>
                    <div class="availability">
                      Availability: <strong>In Stock</strong>
                    </div>
                  </div>
                  <?php
                  if(!empty($brand))
					{
						?>
                  <div class="description">
                     <p><strong style="font-size:16px;">Brand -</strong><span style="font-size:14px;"> <?php echo $brand; ?></span></p>
                  </div>
                   <hr/>
                   <?php
					}
					?>
                    <?php
                  if(!empty($stock))
					{
						?>
                  <div class="description">
                    <p><strong style="font-size:16px;">Stock - </strong><span style="font-size:14px;"><?php echo $stock; ?></span></p>
                  </div>
                   <hr/>
                   <?php
					}
					?>
                     <?php
					  if(!empty($part_no))
						{
							?>
					  <div class="description">
						<p><strong style="font-size:16px;">Part No. - </strong><span style="font-size:14px;"><?php echo $part_no; ?></span></p>
					  </div>
					   <hr/>
					   <?php
						}
						?>
						<?php
					  if(!empty($year) and $year != '0000')
						{
							?>
					  <div class="description">
						<p><strong style="font-size:16px;">Year of Manufacturing - </strong><span style="font-size:14px;"><?php echo $year; ?></span></p>
					  </div>
					   <hr/>
					   <?php
						}
						?>
                         <?php
                  if(!empty($city_name))
					{
						?>
                        
                <div class="location">
                    <p><strong style="font-size:16px;">City - </strong><span style="font-size:14px;"><?php echo $city_name; ?> ( <?php echo $states; ?> )</span></p>
                  </div>
               		
                 <hr/>
                 <?php
					}
					?>
                        <?php
                  if(!empty($location))
					{
						?>
                        
                <div class="location">
                    <p><strong style="font-size:16px;">Address - </strong><span style="font-size:14px;"><?php echo $location_address; ?></span></p>
                  </div>
               		
                 <hr/>
                 <?php
					}
					?>
                    <?php
                  if(!empty($description))
					{
						?>
                  <div class="location">
                    <p><strong style="font-size:16px;">Description - </strong><span style="font-size:14px;"><?php echo $description; ?></span></p>
                  </div>
                   <hr/>
                   <?php
					}
					?>
                    
                        
                  
                 <!-- <div class="product-page-cart ">
                    <div class="product-quantity">
                        <div class="input-group bootstrap-touchspin input-group-sm"><span class="input-group-btn">
                        	<button class="btn quantity-down bootstrap-touchspin-down" type="button"><i class="fa fa-angle-down"></i></button></span><span style="display: none;" class="input-group-addon bootstrap-touchspin-prefix"></span><input style="display: block;" id="product-quantity" value="1" readonly="" class="form-control input-sm" type="text"><span style="display: none;" class="input-group-addon bootstrap-touchspin-postfix"></span><span class="input-group-btn"><button class="btn quantity-up bootstrap-touchspin-up" type="button"><i class="fa fa-angle-up"></i></button></span></div>
                    </div>-->
                    <a aria-expanded="false" class="accordion-toggle collapsed btn btn-primary" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">
													Enquiry </a>
                  <!--  <button class="btn btn-primary" type="submit">Enquiry</button>-->
                    <div style="height: 0px;" aria-expanded="false" id="accordion1_1" class="panel-collapse collapse">
													<div class="panel-body">
														
                                                      <!-- BEGIN FORM-->
                                                    <form id="regform" name="regform">
                                                        <h2>Write a Enquiry</h2>
                                                        <div class="form-group">
                                                          <label for="name">Name <span class="require">*</span></label>
                                                          <input class="form-control" id="name" name="name" type="text">
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="email">Email</label>
                                                          <input class="form-control" id="email" name="email" type="text">
                                                        </div>
                                                         <div class="form-group">
                                                          <label for="phone">Phone No. <span class="require">*</span></label>
                                                          <input class="form-control" id="phone" type="text" name="phone_no">
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="message">Message</label>
                                                          <textarea class="form-control" rows="5" id="message" name="message"></textarea>
                                                        </div>
                                                       <input type="hidden" value="<?php echo $email_id; ?>" id="email_to" />
                                                        <div class="padding-top-20">                  
                                                        <!--  <button type="submit" class="btn btn-primary">Send</button>-->
                                                          <a class="btn btn-primary" id="notific8_show" >
															<i class="fa fa-mail-forward"></i> Send </a>
                                                            
                                                        </div>
                                                    </form>
                                                      <!-- END FORM--> 
													</div>
												</div>
                                                <div id="enquiry_loading">
                                                </div>
                  </div>
                 
                  <!--   Show Notification    ------->
                                   <input id="notific8_heading" value="Send Your Enquiry"  type="hidden">
                                   <input id="notific8_text" value="Successfully send your message." type="hidden" >
                                    <select id="notific8_life" style="visibility:hidden">
                                        <option value="10000" selected="selected">10 seconds (default)</option>
                                    </select>
                                    <select id="notific8_theme" style="visibility:hidden">
                                        <option value="teal" selected="selected">teal (default)</option>
                                    </select>
									<select id="notific8_pos_hor" style="visibility:hidden">
                                        <option value="top">top (default)</option>
                                    </select>
                                    <select id="notific8_pos_ver" style="visibility:hidden">
                                        <option value="right">right (default)</option>
                                    </select>
								
								<!--   End Notification    ------->
									
								
                
                </div>
 
               
                </div>

                <!--<div class="sticker sticker-sale"></div>-->
              </div>
            </div>
       
       
       <!--- Start Related Post  -->
       
            
          <div class="row">
			  <div class="col-md-12">  
             
                    <div class="portlet light">
                        <div class="portlet-body">
                         <span style="font-size:18px">Related post...</span>
                         <br/>
                            <div id="sorting_ase_desc" >  
                           <?php
							 $row_count=2;
							 $ads_detail=0;
							 foreach($classified_posts_arr_related as $ftc_classified_post)
							{
								$post_id=$ftc_classified_post['Classified_post']['id'];
								if($post_id!=$classified_post_id && $ads_detail !=4)
								{
									$ads_detail++;
								$classified_post_date_show=date("d-M-Y",strtotime($ftc_classified_post['Classified_post']['date']));
								
								$photo_arr=explode(',', $ftc_classified_post['Classified_post']['photo']);
								$photo_first=$photo_arr[0];
								
								$return_array=$this->requestAction(array('controller' => 'Nonmovinginventory', 'action' => 'find_city_states_sub_category'),array('pass'=>array($ftc_classified_post['Classified_post']['city_id'],$ftc_classified_post['Classified_post']['sub_category_id'])));
								
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
                                                        <i class="fa fa-cogs"></i><a style="color:#FFF" class="search-result-title  " href="ads_details?post_id=<?php echo $ftc_classified_post['Classified_post']['id']; ?>" rel='tab' ><?php echo @$sub_categories; if(!empty($ftc_classified_post['Classified_post']['product_name'])) { ?> ( <?php echo $ftc_classified_post['Classified_post']['product_name']; ?> ) <?php } ?></a>
                                                    </div>
                                                </div>
									
                                    <div class="portlet-body">
                                                <div class="row static-info">
                                                    <div class="col-md-12 value">
                                                    
                                                        <div  style="overflow:auto;margin-bottom:10px" class="col-sm-8 " >
                                       
                                        
                                                            <p class="description"> <b>Price :</b>&nbsp;   
                                                            <?php
                                                            if($ftc_classified_post['Classified_post']['price']>0)
                                                            {
                                                                echo '<i class="fa fa-inr"></i>'.$ftc_classified_post['Classified_post']['price']; 
                                                            }
                                                            else
                                                            {
                                                                echo 'Negotiable';
                                                            }
                                                             ?> </p>
                                                                 <?php
                                                                if(!empty($ftc_classified_post['Classified_post']['brand']))
                                                                {
                                                                    ?>
                                                                    <p class="description"> <b>Brand :</b>   <?php echo $ftc_classified_post['Classified_post']['brand']; ?> </p>
                                                                    <?php
                                                                }
                                                                if(!empty($ftc_classified_post['Classified_post']['stock']))
                                                                {
                                                                    ?>
                                                                    <p class="description"> <b>Stock :</b>   <?php echo $ftc_classified_post['Classified_post']['stock'];
                                                                    if(!empty($ftc_classified_post['Classified_post']['unit'])) {   echo " ".$ftc_classified_post['Classified_post']['unit']; } ?> </p>
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
																	
                                                                 <div class="col-sm-2 ">
                                                                    <a href="ads_details?post_id=<?php echo $ftc_classified_post['Classified_post']['id']; ?>" class="btn-block result-details-link" rel='tab'>
                                                                   <div style="height:150px;width:150px"> 
                                                                    <img style="border:1px solid #67809F; border-radius:5px 5px 5px 5px;" alt="Post Images" class="img-res" width="100%"  height="90%"  src="<?php if(empty($photo_first)){ echo $this->webroot; ?>images/image/no_pic.gif<?php } else { echo $this->webroot; ?>images_post/<?php echo $ftc_classified_post['Classified_post']['user_id']."/".$ftc_classified_post['Classified_post']['id']."/".$photo_first; } ?>" />  <a href="ads_details?post_id=<?php echo $ftc_classified_post['Classified_post']['id']; ?>" class="btn blue-hoki btn-sm" style="width:100%; padding-top:3px; margin-top:1px;" rel='tab'><i class="fa fa-th-large"></i> <b>Details</b></a></div>
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
							}
							?>
                            </div>
                        </div>
                    </div>
             </div>
            
            
            
            
            <!--- End Releted Post  -->
            
            
          </div>
      </div>
  