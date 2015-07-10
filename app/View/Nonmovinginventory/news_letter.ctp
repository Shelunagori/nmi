
<style>
body , .item
{
	font-family:"Open Sans",sans-serif,latto;
}


		.form-control{
		display:inline !important;
		}
</style>
<form class="form-horizontal"  method="post"  name="send_template"  id="send_template">
<div class="form-group">
<center>
											<label class="control-label">Template Name</label>
											
                                                <input id="template_name" name="template_name" class="form-control  input-medium" value="" type="text">
                                                <label class="control-label">Email Id</label>
                                                <input id="email_id" name="email_id" class="form-control  input-medium" value="" type="text">
												<button type="submit"  name="submit" class="btn purple"><i class="fa fa-check"></i> Submit</button>
											</center>
										</div>
                                        

<br/>
<?php
$show_img="http://app.nonmovinginventory.com";
$message_body='<div id="massege"><div style="width:600px; margin:auto; padding:5px; border:solid 1px; overflow:auto; font-family:Arial, Helvetica, sans-serif">
	<table width="100%">
    <tr>
    <td><a href="index.php"><img src="'.$show_img.$this->webroot.'images/project_logo/non-moving-logo.png" /></a></td>
    <td style="text-align:right"><span class="test" style="margin-left:5px;"><a href="https://www.facebook.com/HousingMatters.co.in" target="_blank" ><img src="'.$show_img.$this->webroot.'images/socialicon/fb.png"/></a></span>
<span class="test" style="margin-left:5px;"><a href="#" target="_blank"><img src="'.$show_img.$this->webroot.'images/socialicon/tw.png"/></a></span><span class="test" style="margin-left:5px;"><a href"#"><img src="'.$show_img.$this->webroot.'images/socialicon/ln.png"/></a></span></td>
    </tr>
    <tr><td><p>
<a href="mailto:ankit@phppoets.com?Subject=Hello%20again" target="_top">Send Mail</a>
</p></td><td style="text-align:right">Contact No. +91954999335</td></tr>
<tr><td colspan="2">B2B marketplace for industries to sell  Non Moving or Slow Inventory. </td></tr>
    </table>
   <div  style="  width:100%; float:left; background-color:#4CA0B7; text-align:center; padding-top:4px;">';
   
          
                $i=0;
                foreach ($categories_arr as $categories_ftc) 
                {
                    $i++;
                   
				 
                      $message_body.='<div class="item " style="padding:1%; float:left; width:32%;">
                        
                        <a href="'.$show_img.$this->webroot.'Nonmovinginventory/categories_details?categories_id='.$categories_ftc['Categorie']['id'].'" style="text-decoration:none;"><img src="'.$show_img.$this->webroot.'images/icon_category/'.$categories_ftc['Categorie']['icon'].'" alt="NAME" style="height:170px; width:100%;" class="img-responsive">
                          <div class="" style="color:#FFF" >
                            <strong style="font-size:12px">'.$categories_ftc['Categorie']['categories'].'</strong>
                            
                          </div>
                        </a>
                      </div>';
                     
                 
                  if($i==6)
                  {
                   break;
                  }
                }
                		
  

  $message_body.='</div>
<div  style=" margin-top:10px; width:100%; float:left; color:#FFF; background-color:#9C3348; padding: 15px 0px; font-size: 12px;">
<span style="padding:5px">
    NON MOVING INVENTORY (Support Team)</span><br/>
    <a  style="padding:5px; color:#FFF;" href="http://app.nonmovinginventory.com/" target="_blank">App.nonmovinginventory.com</a>
</div>
</div></div>';
echo $message_body;
?>
<textarea name="massege">
<?php echo $message_body; ?>
</textarea>
</form>
<!--
<script src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script>
$(document).ready(function()
{
	
	$("#send_template").on('submit',(function(e) 
	{
		e.preventDefault();
		
		
		var ar = [];
		var template_name=$("input[name=template_name]").val();
		var email_id=$("input[name=email_id]").val();
		var massege=$('#massege').html();
		ar.push(template_name,email_id,massege);
		
		var myJsonString1 = JSON.stringify(ar);
		var myJsonString =encodeURI(myJsonString1);
		$.ajax({
			url: "ajax_php_file?send_template=1&q="+myJsonString,
			type: "POST",
			dataType: "json",         
			success: function(data)
			{
				alert(data);
			}
		});
	}));
});
</script>

-->