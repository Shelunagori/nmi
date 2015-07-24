<?php
$message_body='<html>
<head>
<style>
.form-control{
display:inline !important;
}
body{ 
  width:100% !important; 
  min-width: 100%;
  -webkit-text-size-adjust:100%; 
  -ms-text-size-adjust:100%; 
  margin:0; 
  padding:0;
}
#main-div
{
	width:600px;
	margin:auto; 
	padding:5px; 
	border:solid 1px; 
	overflow:auto; 
	border-spacing: 0;
  	border-collapse: collapse;
	font-family:lato, sans-serif
}
table
{
	width:100%;
	padding:5px;
}
.header-contain
{
	text-align:justify;  
	padding: 5px
}
#product
{
	 margin-top:10px;
	 width:100%;
	 float:left;
	 text-align:center;
	 height:auto;
}
.product-item
{
	 
	
}
a
{
	text-decoration:none;
}
a.uppercase
{
	text-transform: uppercase !important;
	color: #000;
}
.img-caption
{
	margin-top:0px;
	font-size:13px;
	color:#000;
}
.footer-contain
{
	color:#FFF;
	background-color:#9C3348;
	height:40px;
	 
}
.footer-contain >td
{
	padding: 5px;
}
.go-app
{
	font-weight: bold; 
	font-size:18;
	box-sizing: border-box;
	border-radius: 4px;
	background-color: #CC8837; 
	border-color: #CC8837; 
	padding:5px; 
	color:#FFF;
}
.img-div 
{
	float:left;
	width:33.3% !important;
	margin-left:0px;
	height:auto !important;
}	
@media only screen and (min-width:600px) {
	.img-div 
	{
		float:left;
		width:50% !important;
		margin-left:0px;
	}
}
@media only screen and (max-width:500px) {
	.img-div 
	{
		float:left;
		width:41% !important;
		margin-left:0px;
		margin-top:0%;
   }
}
@media only screen and (max-width:480px) {
	.img-div 
	{
		float:left;
		width:60%;
		margin-left:0px;
		margin-top:0%;
	}

}
</style>
</head>
<body>';
?>


<?php
$show_img="http://app.nonmovinginventory.com";
$message_body.='<div id="main-div">
	<table>
    <tr>
    <td><a href="index.php"><img src="'.$show_img.$this->webroot.'images/project_logo/non-moving-logo.png" /></a></td>
    <td style="text-align:right">
	<a href="https://www.facebook.com/HousingMatters.co.in" target="_blank" >
	<img src="'.$show_img.$this->webroot.'images/socialicon/fb.png"/>
	</a>
	<a href="#" target="_blank">
	<img src="'.$show_img.$this->webroot.'images/socialicon/tw.png"/>
	</a>
	<a href"#">
	<img src="'.$show_img.$this->webroot.'images/socialicon/ln.png"/>
	</a>
	</td>
    </tr>
	</table>
   <table  style="margin-top:5px">
<tr style="background-color:#497093; color:white;">
<td colspan="2">
<p class="header-contain">Under the guidance of <strong>Indian Institute of Materials Management, Udaipur Branch</strong>, PHP Poets have developed a B2B marketplace for industries to sell their Non Moving or Slow Inventory.</p>
<p class="header-contain">In an industry, usually huge funds are blocked in non-moving inventory. This non-moving inventory if disposed off, is converted to cash and improves company'."'".'s cash flow. This portal will bring genuine buyers and sellers on the same platform and enabling the industries to buy/sell their unused inventory at a nominal price.</p>
</td></tr>
    </table>
   <div id="product">';
   
          
                $i=0;
                foreach ($categories_arr as $categories_ftc) 
                {
                    $i++;
                   
				 
                      $message_body.='<div class="img-div">
                        
                        <a href="'.$show_img.$this->webroot.'Nonmovinginventory/categories_details?categories_id='.$categories_ftc['Categorie']['id'].'" class="uppercase">
						<img src="'.$show_img.$this->webroot.'images/icon_category/'.$categories_ftc['Categorie']['icon'].'" height="160" width="180"  class="img-responsive">
                         
                            <p class="img-caption"  height="200" style=""><strong>'.$categories_ftc['Categorie']['categories'].'</strong></p>
                           
                         
                        </a>
                      </div>';
                     
                 
                  if($i==6)
                  {
                   break;
                  }
                }
                		
  

  $message_body.='</div>

<table  style=" font-size: 17px;" cellspacing="0">

 <tr class="footer-contain">
 <td>
 <div style="float:left">
<a href="mailto:ankit@phppoets.com?Subject=Hello%20again" target="_top" style=" text-align:left; color:#FFF;">Mail us at nonmoving@phppoets.com</a>
</div>

<div style="text-align:right; color:#FFF; float:right; width:50%;">Contact No. +91 9549993335<br/>+91 9460329666</div></td></tr>
<tr class="footer-contain">

	<td style="text-align:center;" colspan="2">
    <a class="go-app" href="http://app.nonmovinginventory.com/">Go to the App Now</a>
</td>
</tr>
</table>
</div>';
echo $message_body;
?>

<?php
  $message_body.='</body>
</html>';
?>
                                        

<br/>
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