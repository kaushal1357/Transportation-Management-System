<!DOCTYPE html>
<html lang="en">

<?php include("vendor/inc/head.php");?>

<body>

  <!-- Navigation -->
  <?php include("vendor/inc/nav.php");?>

 <body style="margin:80px auto"> 
<div class="container foo">
<style>
    .center-text {
        text-align: center;
    }
</style>

<div class="row header center-text">
    <h3>Permanent Bus Schedule of Sanjan Yata Yat</h3>
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Vehicle</title>
</head>
<body>
<h1 style="text-align: center">Book a Bus</h1>
    <form method="POST" action="schedule_vehicle.php">
        <label for="user_id">User ID:</label>
        <input type="text" id="user_id" name="user_id" required>
        
        <label for="vehicle_id">Vehicle ID:</label>
        <input type="text" id="vehicle_id" name="vehicle_id" required>
        
        <label for="start_time">Start Time:</label>
        <input type="datetime-local" id="start_time" name="start_time" required>
        
        <label for="end_time">End Time:</label>
        <input type="datetime-local" id="end_time" name="end_time" required>
        
        <button type="submit">Book Vehicle</button>
    </form>
</body>
</html>