<html>
<head>
<style>



		.form-control{
		display:inline !important;
		}
</style>
</head>
<body>
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
$message_body='<div id="massege"><div style="width:600px; margin:auto; padding:5px; border:solid 1px; overflow:auto; font-family:lato, sans-serif">
	<table width="100%">
    <tr>
    <td><a href="index.php"><img src="'.$show_img.$this->webroot.'images/project_logo/non-moving-logo.png" /></a></td>
    <td style="text-align:right"><span class="test" style="margin-left:5px;"><a href="https://www.facebook.com/HousingMatters.co.in" target="_blank" ><img src="'.$show_img.$this->webroot.'images/socialicon/fb.png"/></a></span>
<span class="test" style="margin-left:5px;"><a href="#" target="_blank"><img src="'.$show_img.$this->webroot.'images/socialicon/tw.png"/></a></span><span class="test" style="margin-left:5px;"><a href"#"><img src="'.$show_img.$this->webroot.'images/socialicon/ln.png"/></a></span></td>
    </tr>
    <tr><td><p>
<a href="mailto:ankit@phppoets.com?Subject=Hello%20again" target="_top">Send Mail</a>
</p></td><td style="text-align:right">Contact No. +91954999335</td></tr>
<tr style="background-color:#3894B1; color:white;"><td colspan="2">
<p style="text-align:justify;  padding: 5px">M/s PHP Poets have developed a portal under the guidance of Indian Institute of Materials Management, Udaipur Branch.</p>
<p style="text-align:justify; padding: 5px;">In an industry, usually huge funds are blocked in non-moving inventory. This non-moving inventory if disposed off, is converted to cash and improves company'."'".'s cash flow. This portal will bring genuine buyers and sellers on the same platform and enabling the industries to buy/sell their unused inventory at a fair price.</p>
</td></tr>
    </table>
   <div  style="  width:100%; float:left;  text-align:center;">';
   
          
                $i=0;
                foreach ($categories_arr as $categories_ftc) 
                {
                    $i++;
                   
				 
                      $message_body.='<div class="item " style="padding:1%; float:left; width:31.33%; height:170px; position: relative;">
                        
                        <a href="'.$show_img.$this->webroot.'Nonmovinginventory/categories_details?categories_id='.$categories_ftc['Categorie']['id'].'" style="text-decoration:none;  text-transform: uppercase;  color: #FFF; background: rgba(100, 174, 217, 0.85) none repeat scroll 0% 0%;"><img src="'.$show_img.$this->webroot.'images/icon_category/'.$categories_ftc['Categorie']['icon'].'" alt="NAME" style="min-height:170px; max-height:170px; width:98%; position: absolute; left: 0px; " class="img-responsive">
                         <div style="font-size:12px; position: absolute; color:#FFF; left:0%; bottom:6px; width:98%;  background: rgba(100, 174, 217, 0.85) none repeat scroll 0% 0%;">
                            <p style="margin-top:6px;"><strong>'.$categories_ftc['Categorie']['categories'].'</strong></p>
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
<div style="float:left;">
<span style="padding:5px;">
    NON MOVING INVENTORY (Support Team)</span>
	</div>
	<div style="float:right;">
    <a  style="padding:5px; color:#FFF; text-decoration:none;" href="http://app.nonmovinginventory.com/">Go to the App Now</a>
	</div>
</div>
</div></div>';
echo $message_body;
?>
<textarea name="massege">
<?php echo $message_body; ?>
</textarea>
</form>
</body>
</html>
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