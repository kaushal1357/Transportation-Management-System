<?php
    session_start();
?>


<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title>Welcome to Vehicle Management</title>   
<meta name="description" content="Bootstrap.">  
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<link rel="stylesheet" href="style.css">

</head>


<body style="margin:80px auto">
<?php include 'navbar.php';?>  
<div class="container foo">
<div class="row header" style="text-align:center">
<h3>Permanent Bus Schedule of sanjan yata yat</h3>
</div>



<table id="myTable" class="table table-bordered table-striped table-hover table-condensed" >  


<thead>  
          <tr>  
            <th>NO</th>  
            <th>PERIOD</th>  
            <th>FIRST</th>  
            <th>SECOND</th>  
            <th>THIRD</th>  
            <th>COST</th>
            <th>Distance</th>
          </tr>  
        </thead>  
       <tbody>  
          <tr>  
            <td>01</td>  
            <td>Kalanki To Koteshwor</td>  
            <td>3-45</td>  
            <td>4-45</td>  
            <td>6-15</td>  
            <td>100</td>
            <td>20KM</td>
          </tr> 
          <tr>  
            <td>02</td>  
            <td>Sitapaila To Balaju</td>  
            <td>4-00</td>  
            <td>5-00</td>  
            <td>6-30</td> 
            <td>60</td> 
            <td>7KM</td>
          </tr> 
          <tr>  
            <td>03</td>  
            <td>Swoyambhu To Chabahil</td>  
            <td>4-15</td>  
            <td>5-15</td>  
            <td>6-45</td> 
            <td>90</td>
            <td>9KM</td> 
          </tr> 
          <tr>  
            <td>04</td>  
            <td>Balaju To Tinkune</td>  
            <td>4-30</td>  
            <td>5-30</td>  
            <td>7-00</td> 
            <td>120</td> 
            <td>18KM</td>
          </tr> 
          <tr>  
            <td>05</td>  
            <td>Macchapokhari To Airport</td>  
            <td>4-45</td>  
            <td>5-45</td>  
            <td>7-15</td>
            <td>110</td> 
            <td>17KM</td> 
          </tr> 
          <tr>  
            <td>06</td>  
            <td>Basundhara To Gworko</td>  
            <td>5-00</td>  
            <td>6-00</td>  
            <td>7-30</td> 
            <td>150</td> 
            <td>22KM</td>
          </tr> 
          <tr>  
            <td>07</td>  
            <td>Maharajung To Mahalaxmichowk </td>  
            <td>5-00</td>  
            <td>6-00</td>  
            <td>7-15</td> 
            <td>180</td> 
            <td>25KM</td> 
          </tr> 
          <tr>  
            <td>08</td>  
            <td>Kalanki To Dahachowk</td>  
            <td>4-45</td>  
            <td>5-45</td>  
            <td>7-00</td> 
            <td>50</td> 
            <td>6KM</td>
          </tr> 
          <tr>  
            <td>09</td>  
            <td>Sitapaila To Nagarjun</td>  
            <td>4-30</td>  
            <td>5-30</td>  
            <td>6-45</td>
            <td>45</td> 
            <td>8KM</td> 
          </tr> 
          <tr>  
            <td>10</td>  
            <td>Balaju To Nuwakot</td>  
            <td>4-15</td>  
            <td>5-15</td>  
            <td>6-35</td> 
            <td>1000</td> 
            <td>45KM</td>
          </tr> 
          <tr>  
            <td>11</td>  
            <td>Koteshwor To Kavrya</td>  
            <td>4-00</td>  
            <td>5-00</td>  
            <td>6-15</td> 
            <td>700</td> 
            <td>35KM</td>
          </tr> 
          <tr>  
            <td>12</td>  
            <td>Kalanki To Dhading</td>  
            <td>3-45</td>  
            <td>4-45</td>  
            <td>6-00</td> 
            <td>800</td>
            <td>60KM</td>
          </tr>  
          <tr>  
            <td>13</td>  
            <td>Balkhu To Dachinkali</td>  
            <td>3-30</td>  
            <td>4-30</td>  
            <td>5-45</td> 
            <td>300</td>
            <td>30KM</td>
          </tr>  
        </tbody>  

</table>
	  </div>
	  
<script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        
</script>
    
</body>  

</html>