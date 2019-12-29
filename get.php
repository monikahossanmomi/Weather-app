

<?php 

error_reporting(0);
$get = json_decode(file_get_contents('http://ip-api.com/json/'),true);
date_default_timezone_set($get['timezone']);
$city = $_GET['city'];
$country = $_GET['country'];

$string="http://api.openweathermap.org/data/2.5/weather?q=".$city.",".$country."&units=metric&appid=24fcf75405e06a2df0ef4e1ed58bd375";
$data = json_decode(file_get_contents($string),true);

$temp = $data['main']['temp'];
$dt =date('Y-m-d');
$dtime=date('H:i:s');
$icon = $data['weather'][0]['icon'];
$logo="<img src='http://openweathermap.org/img/w/".$icon.".png'>";
$Visibility = $data['Visibility'];
$Visibilitykm =$Visibility/1000;
$Visibility=$Visibilitykm;
$desc = $data['weather'][0]['description'];
$clouds = $data['clouds']['all'];
$humidity =$data['main']['humidity'];
$windspeed =$data['wind']['speed'];
$pressure =$data['main']['pressure'];
$sunrise =date('h:i A',$data['sys']['sunrise']);
$sunset =date('h:i A',$data['sys']['sunset']);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Weather of <?php echo $_GET['city']; ?></title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/jumbotron/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
    
   <div class="text-center   form-signin">
    
  
    <h1 class="h3 mb-3 ">Weather Application</h1>
    <p>Date : <?php echo $dt; ?></p>
    <p>Time : <?php echo $dtime; ?></p>
    <?php echo $logo; ?>
    <table class="table " style="color: #fff;" >
          <tr>
            <td class="text-left">Temperature:</td>
            <td></td>
            <td><?php echo $temp." &deg;C"; ?>

            </td>
            
            
          </tr>
          <tr>
            
            <td class="text-left">Description:</td>
            <td></td>
            <td><?php echo $desc; ?></td>
            
          </tr>
          <tr>
            
            <td class="text-left">Clouds:</td>
            <td></td>
            <td><?php echo $clouds."%"; ?></td>
            
          </tr>
          <tr>
            
            <td class="text-left">Humidity:</td>
            <td></td>
            <td><?php echo $humidity; ?></td>
            
          </tr>
          <tr>
            
            <td class="text-left">Wind Speed:</td>
            <td></td>
            <td><?php echo $windspeed; ?></td>
            
          </tr>
          <tr>
            
            <td class="text-left">Pressure:</td>
            <td></td>
            <td><?php echo $pressure; ?></td>
            
          </tr>
          <tr>
            
            <td class="text-left">Visibility:</td>
            <td></td>
            <td><?php echo $Visibility; ?></td>
          </tr>
          <tr>
            <td class="text-left">Sunrise:</td>
            <td></td>
            <td><?php echo $sunrise; ?></td>

          </tr>
          <tr>
            <td class="text-left">Sunset:</td>
            <td></td>
            <td><?php echo $sunset; ?></td>
          </tr>
          
        </table>
         <p>&copy;Designed & Developed by Monika & Yeasin</p>
  </div>    
    
        
      
      
    
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script></body>
  </html>