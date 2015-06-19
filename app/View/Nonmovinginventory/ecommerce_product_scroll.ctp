<?php
$srno=0;

foreach($arr_classified as $value)
{
	 $status_id=$value['classified_post']['status'];
	 $return_array=$this->requestAction(array('controller' => 'Nonmovinginventory', 'action' => 'find_status'),array('pass'=>array($status_id)));
	 foreach($return_array as $status_name_fetch)
	 { 
		$status_name=$status_name_fetch['status']['status_name'];
	 }
	 $return_array1=$this->requestAction(array('controller' => 'Nonmovinginventory', 'action' => 'find_category'),array('pass'=>array($value['classified_post']['category_id'])));
	 foreach($return_array1 as $view)
	 { 
		$categories_name=$view['categorie']['categories'];
	 }
	 $return_array2=$this->requestAction(array('controller' => 'Nonmovinginventory', 'action' => 'find_subcategory'),array('pass'=>array($value['classified_post']['sub_category_id'])));
	 foreach($return_array2 as $view)
	 { 
		$subcategories_name=$view['sub_categorie']['sub_categories'];
	 }
	?>
<tr>
<td class="sorting_1"><?php echo ++$srno; ?></td>
<!-- <td><?php echo $value['classified_post']['product_name']; ?></td>-->
<td><?php echo $value['classified_post']['part_no']; ?></td>
<td><?php echo $categories_name; ?></td>
 <td><?php echo $subcategories_name; ?></td>
<td><?php if(!empty($value['classified_post']['price'])){ ?> <i class="fa fa-inr"></i><?php echo $value['classified_post']['price']; } else { ?> <?php  echo 'Negotiable'; } ?></td>
<td><?php echo $value['classified_post']['stock']; echo " ".$value['classified_post']['unit']; ?></td>
<td><?php if($status_id=='1'){ ?><span class="label label-sm label-success"><?php } else if($status_id=='2'){ ?><span class="label label-sm label-info"><?php }  else if($status_id=='3'){ ?><span class="label label-sm label-danger"><?php }  echo $status_name; ?></span> </td>
<td><a href="ecommerce_products_edit?productid=<?php echo base64_encode($value['classified_post']['id']); ?>" class="btn btn-xs btn-info btn-editable"><i class="fa fa-pencil"></i> Edit</a></td>
</tr>

<?php
}


?>
<div style="width:100%"  id="#lode_more_<?php echo $new_page_id; ?>"><input name="page"  class="form-control" id="page" type="text" value="<?php echo $new_page_id; ?>"></div>                       