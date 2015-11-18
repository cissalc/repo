<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>林颖小店</title>
      <!-- Bootstrap -->
  <link href="/bootstrap-3.3.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
  <script src="/bootstrap-3.3.2/js/bootstrap.min.js"></script>
 <!-- <script src ="/jquery/jquery-2.1.1.min.js"></script>-->
  <script>
  function factive(obj){
  	$(obj).parent().children().removeClass("active");
  	$(obj).addClass("active");
  	
  };
  function f1(){
  	var t = $("#text_box");  
    alert(t.val());
  };
   function fadd(obj){   
   		var t = $(obj).prev();    
        t.val(parseInt(t.val())+1)  
        ftotal(t);  
    };
    function fmin(obj){  
    	var t = $(obj).next();
    	var num = parseInt(t.val())-1;
    	if(num<0){
    		num=0;
    	}
        t.val(num)  
        ftotal(t);  
    }; 
  function ftotal(obj){  
  		var t = $(obj);
        $(obj).html((parseInt(t.val())*300).toFixed(2));  
    };
  </script>
  <style>
  .nav-stacked li{
  	border:1px solid #DDD;
  }
  .imgClass{
  	 width:100%;
  	 height:85%;
  }
  </style>
</head>
<body>
<?php 
	header("Content-Type:text/html;   charset=utf-8");
	$this->load->helper('url');
	if(!isset($num)){
		$num = 'class1';
	}
?>
<div class="container">
	<div style="width:28%;float:left;position:fixed;">
		<ul class="nav nav-pills nav-stacked" >
		  <?php
		    $j=-1;
		  	foreach ( $menus as $value ) {
		  	$j++;
		  	?>
       			<li  role="presentation"  onclick="factive(this);" class="<?php if($j==0) echo "active";?>">
				  	<a href="<?php echo "#" . $value['id'];?>"> <?php echo$value['name'];?></a>
				</li>
			<?php
			}
		  ?>
		</ul>
	</div>
	<div style="width:68%;float:left;margin-left:30%;" class="panel panel-default">
		<?php
		  	foreach ( $items as $value ) {
		  	?>
		  	<a name="<?php echo $value[0]['menuId']?>"></a>
		  	<div class="panel-heading"><?php echo $value[0]['menuName']?></div>
			<?php
			  	$j=-1;
			  	foreach ( $value as $valueT ) {
			  	$j++;
			  	?>
			  		<div style="border:1px solid #DDD;margin:5px 5px 5px 5px;height:25%;padding:2px;clear:both;" class="panel-body">
						<div style="float:left;width:72%">
							<img class="imgClass" src="<?php echo base_url('/imgs/' . $valueT['picAddress']);?>"  alt="<?php echo $valueT['name'];?>" />
						</div>
						<div style="float:left;width:25%;margin-left:2px;margin-top:-3px;">
							<input class="btn btn-default" style="width:100%"  name="" type="button" value="-" onclick="fmin(this)"/>
							<input class="btn" readonly  style="width:100%"    name="" type="text" value="0" />  
							<input class="btn btn-default"  style="width:100%" name="" type="button" value="+" onclick="fadd(this)"/>  
						</div>
						<div style="clear:both;">
								<span><?php echo $valueT['name'];?></span>
								<span style="color:#AAA;">销量<?php echo $valueT['sales'];?></span>
								<span style="color:red;font-size:20px;float:right;">￥<?php echo $valueT['price'];?></span>
						</div>
					</div>
			  	<?php
			  	}
			  	?>
		<?php
		    }
		?>
		
	</div>
	<div  style="margin-top:8%;">
	