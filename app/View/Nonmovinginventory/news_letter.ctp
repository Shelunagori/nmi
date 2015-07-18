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
	</table>
   <table width="100%" style="margin-top:5px">
<tr style="background-color:#497093; color:white;"><td colspan="2">
<p style="text-align:justify;  padding: 5px">Under the guidance of <strong>Indian Institute of Materials Management, Udaipur Branch</strong>, PHP Poets have developed a B2B marketplace for industries to sell their Non Moving or Slow Inventory.</p>
<p style="text-align:justify; padding: 5px;">In an industry, usually huge funds are blocked in non-moving inventory. This non-moving inventory if disposed off, is converted to cash and improves company'."'".'s cash flow. This portal will bring genuine buyers and sellers on the same platform and enabling the industries to buy/sell their unused inventory at a nominal price.</p>
</td></tr>
    </table>
   <div  style=" margin-top:10px; width:100%; float:left;  text-align:center; height:auto;">';
   
          
                $i=0;
                foreach ($categories_arr as $categories_ftc) 
                {
                    $i++;
                   
				 
                      $message_body.='<div class="item " style="float:left; width:33%; height:auto;">
                        
                        <a href="'.$show_img.$this->webroot.'Nonmovinginventory/categories_details?categories_id='.$categories_ftc['Categorie']['id'].'" style="text-decoration:none;  text-transform: uppercase;  color: #000;"><img src="'.$show_img.$this->webroot.'images/icon_category/'.$categories_ftc['Categorie']['icon'].'" height="160" width="180"  class="img-responsive">
                         
                            <p  height="200" style="margin-top:0px; font-size:13px; color:#000;"><strong>'.$categories_ftc['Categorie']['categories'].'</strong></p>
                           
                         
                        </a>
                      </div>';
                     
                 
                  if($i==6)
                  {
                   break;
                  }
                }
                		
  

  $message_body.='</div>
<div  style=" width:100%; float:left; color:#FFF; background-color:#9C3348; ">
<table style="width:100%; line-height: 2;padding:5px; font-size: 17px;">

 <tr><td><p>
<a href="mailto:ankit@phppoets.com?Subject=Hello%20again" target="_top" style=" text-decoration:none; color:#FFF;">Mail us at nonmoving@phppoets.com</a>
</p></td><td style="text-align:right; color:#FFF;">Contact No. +91954999335</td></tr>
<tr>

	<td style="text-align:center; font-size: 20px;" colspan="2">

    <a  style="
	font-weight: bold;
	padding: 17px;
	line-height: 26px;
	box-sizing: border-box;
	height: 62px;
	margin: 0px 0px 16px;
border-radius: 4px; background-color: #F78E11; border-color: #F78E11; padding:5px; color:#FFF; text-decoration:none;" href="http://app.nonmovinginventory.com/">Go to the App Now</a>
</td>
</tr>
</table>
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