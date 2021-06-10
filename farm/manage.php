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


    <form method="post" action="manageproccess.php" >
	
		<p>
        	 <center>
	<H1>Manage Farm Employees
		 </center>  
		   </p>

	<center>
	<a href="menu.php"> Menu</a> 
	</center>

        <div id="frm">
		<p>
		<center>
		<H2>Enter Employee Info
		</center
		</p>
	
		<p>
		<center>
		<b>Employee</b> &nbsp;
		</center>
		</p>
		
		<p>
		 <center>
                <label>ID</label>
                <input type="text" name="employee_id" id="employee_id">	
         
     	
		<label>Name</label>
                <input type="text" name="employee_name" id="employee_name">	
                
		 <label>Department</label>
                <input type="text" name="dept" id="dept">

		 <label>Plot Number</label>
                <input type="text" name="employee_plot" id="employee_plot">  


		 <label>Weekly Wage</label>
                <input type="text" name="wage" id="wage">  

		</center> 
		</p>	
		&nbsp;
		&nbsp;
		
		<p>
		<center>
		<H2>Delete Employee
		</center
		</p>

		<p>
		<center>

		<label>ID</label>
                <input type="text" name="deleted_id" id="deleted_id">	
	


		</center>
     		</p>	

		&nbsp;
		&nbsp;
		
		<p>
		<center>
		<H2>Update Employee Wage
		</center
		</p>

		<p>
		<center>
	        <label>ID</label>
                <input type="text" name="wage_id" id="wage_id">	

        	<label>New Employee Wage</label>
                <input type="text" name="new_wage" id="new_wage">	


		</center>
		</p>
		<center>
                <input type="submit" id="btn" value="Manage"/>
                
		</center>
	</div>
    </form>
	  <center>
<img src="tractor.jpg" alt="tractor"> <img src="worker.jpg" alt="worker">
   </center>

</body>
</html>