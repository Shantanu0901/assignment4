<!DOCTYPE html>
    <head>
        <title>Restaurant_Menu</title>
        
		<link rel="stylesheet" type="text/css" href="css1.css">

       
    </head>
  <body id="mbody">
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
      <div class="collapse navbar-collapse" id="Navbar">
        <ul class="navbar-nav mr-auto">
          <li id="btn1" class="nav-item active"><a class="nav-link" href="#"><span class="brandname">Zota Eats</span> Order food online</a></li>
        </ul>
      </div>
    </nav>
    <div class="jumbot">
      <h1>Welcome to <span class="title">Zota Eats!</span></h1>
    </div>
    <div class="container">
      <select name="item restaurant-dropdown restaurant" class="custom-select custom-select-lg mb-3" id="restaurant">
        <option value="">Select Menu</option>
      </select>
      <br>    
      <table id="table" class="table table-light table table-hover table-bordered table_data">
      <tr>
        <th>Name</th>
        <td id="menuname"></td>
      </tr>
      <tr>
        <th>ID</th>
        <td id="id"></td>
      </tr>
      <tr>
        <th>Short Name</th>
        <td id="sname"></td>
      </tr>
      <tr>
        <th>Description</th>
        <td id="descp"></td>
      </tr>
      <tr>
        <th>Price Small</th>
        <td id="psmall"></td>
      </tr>
      <tr>
        <th>Price Large</th>
        <td id="plarge"></td>
      </tr>
      <tr>
        <th>Small Portion Name</th>
        <td id="spname"></td>
      </tr>
      <tr>
        <th>Large Portion Name</th>
        <td id="lpname"></td>
      </tr>
      </table>
    </div> 
    <script>
       
    </script>	
		<script src="js1.js" defer></script>   
  </body>
</html>