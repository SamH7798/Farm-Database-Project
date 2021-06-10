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


    <form method="post" action="enterprocess.php" >
	
		<p>
        	 <center>
	<H1>Enter Assets
		 </center>  
		   </p>
	
	<center>
	<a href="menu.php"> Return to Menu</a>
	</center>

        <div id="frm">
		<p>
		<center>
		<H3>Enter crops
		</center
		</p>

	
		<p>
		 <center>
                <label>Name</label>
                <input type="text" name="crop_name" id="crop_name">	
         
                <label>ID</label>
                <input type="text" name="crop_id" id="crop_id">	
		       
	        <label>Plot Number</label>
                <input type="text" name="crop_plot" id="crop_plot">

		<label>PPC</label>
                <input type="text" name="ppc" id="ppc">				

		
		<label>Crop Count</label>
                <input type="text" name="crop_count" id="crop_count">	
		</center> 
		</p>	
		&nbsp;
		&nbsp;
	
	
		<p>
		<center>
		<H3>Enter Livestock
		</center
		</p>

		
		<center>
		<lable>Name</lable>
		<input type="text" name="livestock_name" id="livestock_name">
		
		<lable>ID</lable>
		<input type="text" name="livestock_id" id="livestock_id">
		
		<lable>Plot Number</lable>
		<input type="text" name="livestock_plot" id="livestock_plot">
		
		<lable>PPA</lable>
		<input type="text" name="ppa" id="ppa">
	
		<lable>Animal Count</lable>
		<input type="text" name="animal_count" id="animal_count">

		</center>
		</p>
     		
		<center>
                <input type="submit" id="btn" value="Submit Info"/>
                
		</center>
	</div>
    </form>
 <center>
	<img src="crop.jpg" alt="crop"> <img src="livestock.jpg" alt="livestock">
  
   	</center>

</body>
</html>