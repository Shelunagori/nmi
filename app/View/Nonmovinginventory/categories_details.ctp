<?php
$submit_succ=1;
$limit="LIMIT 10";
?>		

 <style type='text/css'>
@media (max-width: 770px) 
{
	.flip-scroll th, td
	{
		text-align: left;
		border-width: 0px 0px 0px 0px !important;
	}
	.table-bordered > tbody > tr > td, .table-bordered > thead > tr > th
	{
		line-height: 2.4;
	}
	.table-condensed > tbody > tr > td, .table-condensed > thead > tr > th {
		padding: 0px;
	}

}
 .page-bar .page-breadcrumb > li > a, .page-bar .page-breadcrumb > li  
 {
    color: #888;
    font-size: 13px;
    text-shadow: none;
}
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
.text_price_box 
{
  width:120px;
  display:initial;
  font-size:12px;
 height:28px
}

</style>


				
<div class="page-bar">
    <ul class="page-breadcrumb">
        
        <?php
        if(!empty($search_by_meta))
        {
            ?> 
            <li>
                <i class="fa fa-home"></i>
                Keyword
                <i class="fa fa-angle-right"></i>
            </li>
            <li> <?php echo $search_by_meta; ?></li>									
           <?php 
        }
        else if(!empty($categories_id))
        {
        ?>
            <li>
            <i class="fa fa-home"></i>
            Category
             <i class="fa fa-angle-right"></i>
            </li>
            <li> <?php echo $categories_nm['Categorie']['categories']; ?></li>
            <?php 
        }
        else if(!empty($sub_categories_id))
        {
			$categories_id=$categories_id_sub;
                ?>
               <li>
            <i class="fa fa-home"></i>
            Category
             <i class="fa fa-angle-right"></i>
            </li>
            <li> <?php echo $this->Html->link($categories_nm, array('action' => 'categories_details', '?' => array('categories_id' => $categories_id_sub)), array('escape' => false)); ?>  
             <i class="fa fa-angle-right"></i>
             </li>
            <li> <?php echo $sub_categories_nm; ?> </li>
        
            <?php
        }
                ?>

            </ul>
                        
</div>
  
<!-- END PAGE HEADER-->


<!-- ******************************* ******* content start side bar ***********************************************  -->
<?php

if(!empty($search_by_meta) || !empty($categories_id) || !empty($sub_categories_id))
{
	?>
    <div class="portlet-body flip-scroll">
<table class="table table-bordered table-condensed flip-content">
<thead class="flip-content">
<tr class="heading" >
<th style="width:20%">Date Sorting </th>
<th>Price Sorting</th>
<th>Price Range</th>
<th>Categories</th>
<th>Sub Categories</th>
</tr>
</thead>
<tbody>
<tr><td>
        <select class="table-group-action-input form-control input-inline input-small input-sm select_box" name="order" onChange="accending_disending(this.value,'<?php echo @$categories_id; ?>','<?php echo @$search_by_meta; ?>','<?php echo @$sub_categories_id; ?>','1');" >
                        <option value="" >--Sorting--</option>
                        <option value="date ASC" >Ascending</option>
                        <option value="date DESC" >Descending</option>
          </select> 
    </td><td>
       <select class="table-group-action-input form-control input-inline input-small input-sm select_box"  name="order_way" onChange="accending_disending(this.value,'<?php echo @$categories_id; ?>','<?php echo @$search_by_meta; ?>','<?php echo @$sub_categories_id; ?>','1');">
                        <option value="" >--Sorting--</option>
                        <option value="price ASC" >Ascending</option>
                        <option value="price DESC" >Descending</option>
                    </select>
    </td><td>
        <input type="text"  class="filterme  form-control input-small  text_price_box" autocomplete="off"  placeholder="Min" value="<?php  echo @$min_price;?>" name="min_price" id="min_price"/>  
          <input type="text"  class="filterme  form-control input-small text_price_box" required autocomplete="off" placeholder="Max" value="<?php  echo@ $max_price;?>" name="max_price" id="max_price"/>  
          
            <button class="btn btn-sm yellow filter-submit margin-bottom"  onclick="accending_disending('Classified_post.id DESC','<?php echo @$categories_id; ?>','<?php echo @$search_by_meta; ?>','<?php echo @$sub_categories_id; ?>','2');"><i class="fa fa-search"></i> Search</button>
      
    </td>
    <td >
       <select class="table-group-action-input form-control input-inline input-small input-sm divider" rel='tab'>
       <option value=""> --Select--</option>
           <?php $i=0;
		   	
			foreach ($categories_arr as $categories_ftc) 
			{ 
				if($categories_ftc['Categorie']['id']==@$categories_id)
				{
					$selected='selected=selected';
				}
				else
				{
					$selected='';
				}
				?> 
			<?php echo  '<option class="c" value="categories_details?categories_id='.$categories_ftc['Categorie']['id'].'" '.$selected.'>'.$categories_ftc['Categorie']['categories'].'</option>'; ?> 
			<?php } ?>
            </select>
    </td>
    <td >
       <select class="table-group-action-input form-control input-inline input-small input-sm divider" rel='tab'>
       <option value=""> --Select--</option>
           <?php $i=0;
			foreach ($sub_categories_arr as $sub_categories_ftc) 
			{ 
				if($sub_categories_ftc['Sub_categorie']['id']==@$sub_categories_id)
				{
					$selected='selected=selected';
				}
				else
				{
					$selected='';
				}
				?> 
			<?php echo  '<option class="c" value="categories_details?sub_categories_id='.$sub_categories_ftc['Sub_categorie']['id'].'" '.$selected.'>'.$sub_categories_ftc['Sub_categorie']['sub_categories'].'</option>'; ?> 
			<?php } ?>
            </select>
    </td>
  </tr>
  </tbody>

</table>
</div>
    <?php 
	
	/*if(!empty($categories_id))
	{
		$sub_categories_id="";
	}
	if(!empty($sub_categories_id))
	{
		$categories_id="";
		$categories_id=$categories_id_sub;
		$sub_categories_id=$sub_categories_id;
	}*/
	
}

		?>
       
       
      <!-- ******************************* ******* content end side bar ***********************************************  -->
      
         <!-- ******************************* ******* content start post inventory  ***********************************************  -->
         <div class="row">
					<div class="col-md-12">
						<!-- Begin: life time stats -->
						<div class="portlet light">
							<div class="portlet-body">
                             <div id="sorting_ase_desc" >     
                              <input id="sub_categories_id" type="hidden" class="form-control" value="<?php echo @$sub_categories_id;  ?>">
                                <input id="categories_id" type="hidden"class="form-control" value="<?php echo @$categories_id;  ?>">
                                <input id="search_by_meta" type="hidden" class="form-control" value="<?php echo @$search_by_meta;  ?>">
                                <input id="order_by" type="hidden" class="form-control" value="<?php echo @$order_by;  ?>">
                                <input id="min_price" type="hidden" class="form-control" value="<?php echo @$min_price;  ?>">
                                <input id="max_price" type="hidden" class="form-control" value="<?php echo @$max_price;  ?>">
                             <?php
							 $row_count=2;
							 
							 foreach($classified_posts_arr as $ftc_classified_post)
							{
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
                                                        <i class="fa fa-cogs"></i><a style="color:#FFF" class="search-result-title  " href="<?php echo $this->webroot; ?>Nonmovinginventory/ads_details?post_id=<?php echo $ftc_classified_post['Classified_post']['id']; ?>" rel='tab' ><?php echo @$sub_categories; if(!empty($ftc_classified_post['Classified_post']['product_name'])) { ?> ( <?php echo $ftc_classified_post['Classified_post']['product_name']; ?> ) <?php } ?></a>
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
                                                                    <a href="<?php echo $this->webroot; ?>ads_details?post_id=<?php echo $ftc_classified_post['Classified_post']['id']; ?>" class="btn-block result-details-link" rel='tab'>
                                                                   <div style="height:150px;width:150px"> 
                                                                    <img style="border:1px solid #67809F; border-radius:5px 5px 5px 5px;" alt="Post Images" class="img-res" width="150"  height="135"  src="<?php if(empty($photo_first)){ echo $this->webroot; ?>images/image/no_pic.gif<?php } else { echo $this->webroot; ?>images_post/<?php echo $ftc_classified_post['Classified_post']['user_id']."/".$ftc_classified_post['Classified_post']['id']."/".$photo_first; } ?>" />  <a href="<?php echo $this->webroot; ?>ads_details?post_id=<?php echo $ftc_classified_post['Classified_post']['id']; ?>" class="btn blue-hoki btn-sm" style="width:100%; padding-top:3px; margin-top:1px;" rel="tab"><i class="fa fa-th-large"></i> <b>Details</b></a></div>
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
											
								</div>	
							</div>
						</div>
						<!-- End: life time stats -->
					</div>
				</div>

   
             <!-- ******************************* ******* content end post inventory  ***********************************************  -->

<?php
	
/////////////////////////////////////////////////////////////   ******* content end **************////////////////////////////////////////////////////////////////

	?>		

  
  

<script src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/jquery.min.js" type="text/javascript"></script>

<script>

$(document).scroll(function(e){

    // grab the scroll amount and the window height
    var scrollAmount = $(window).scrollTop();
    var documentHeight = $(document).height();
	// alert(documentHeight);
    // calculate the percentage the user has scrolled down the page


    var scrollPercent = (scrollAmount / documentHeight) * 100;

    if(scrollPercent >50) {
	
     doSomething();
    }
});


</script>

<script>

  $('.filterme').keypress(function(eve) 
 {
	 
  if ((  eve.which != 46 ||  $(this).val().indexOf('.') != -1) && (eve.which < 48 || eve.which > 57 ) && eve.which != 8 && eve.which != 0 || (eve.which == 46 && $(this).caret().start == 0) ) 
	  {
		eve.preventDefault();
			alert('Please insert only numeric value.');
	  }
// this part is when left part of number is deleted and leaves a . in the leftmost position. For example, 33.25, then 33 is deleted

	 $('.filterme').keyup(function(eve)
	  {
		  if($(this).val().indexOf('.') == 0)
		   { 
			  
			  $(this).val($(this).val().substring(1));
		   }
	 });
});

</script>
<script>
jQuery(document).ready(function(){
$("select[rel='tab']").bind('change',function(){
		//ee.preventDefault();
		$(".page-spinner-bar").removeClass("hide"); //show loading]
		var pageurl = $(this).val();
		
		window.history.pushState({path:pageurl},'',pageurl);
		$.ajax({
			url:pageurl,
		}).done(function(responce){
			$(".page-spinner-bar").addClass(" hide"); //hide loading
			 
			$(".page-content").html(responce);
			$("html, body").animate({
				scrollTop:0
			},"slow");
		});
		
		});
});
</script>
