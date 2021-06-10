<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 

    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Farm</title>

<style>
div {
  border: 1px solid black;
  background-color: lightgreen;
  padding-top: 50px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
}
</style>
</head>
<body>

<body style="background-color:powderblue;">


    <form method="post" action="manageassetsproccess.php" >
	
		<p>
        	 <center>
	<H1>Manage Assets
		 </center>  
		   </p>

	<center>
	<a href="menu.php"> Menu</a> 
	</center>

        <div id="frm">
		<p>
		<center>
		<H2>Update Crop Count
		</center
		</p>
	
		<p>
		<center>
		<b>Crop</b> &nbsp;
		</center>
		</p>
		
		<p>
		 <center>
	
		     <label>Crop ID</label>
                <input type="text" name="update_crop_id" id="update_crop_id">	 



                <label>New Crop Count</label>
                <input type="text" name="new_crop_count" id="new_crop_count">	 

		</center> 
		</p>	
		&nbsp;
		&nbsp;
		
		<p>
		<center>
		<H2>Update Live Stock Count
		</center
		</p>

		<p>
		<center>

		<label>Livestock ID</label>
                <input type="text" name="update_livestock_id" id="update_livestock_id">
	
		<label>New Livestock Count</label>
                <input type="text" name="new_livestock_count" id="new_livestock_count">	
		
	
		</center>
     		</p>	

		&nbsp;
		&nbsp;
		
                 <p>
		<center>
		<H2>Delete Crop
		</center
		</p>
	
		<p>
		 <center>
	
		     <label>Crop ID</label>
                <input type="text" name="delete_crop_id" id="delete_crop_id">	  

		</center> 
		</p>	

		&nbsp;
		&nbsp;
		
     		<p>
		<center>
		<H2>Delete Livestock
		</center
		</p>
		
			<p>
		 <center>
	
		     <label>Livestock ID</label>
                <input type="text" name="delete_livestock_id" id="delete_livestock_id">	  

		</center> 
		</p>	


		<center>
                <input type="submit" id="btn" value="Manage"/>
                
		</center>
	</div>
    </form>

   </center>
	
	<center>
<img src="sheep.jpg" alt="sheep">  
	</center>

</body>
</html>