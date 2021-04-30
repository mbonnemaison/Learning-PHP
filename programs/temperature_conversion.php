<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
      <title>
      'Temperature Conversion'
      </title>
    </head>
    <body>
      <h1> Temperature conversion </h1>
      <form action = "conversions.php" method = "post">
        Initial temperature: <input type = 'number' step = 0.01 name = 'init_temp'>

        <h3>Initial unit:</h3>
        <input type = "radio" name = 'init_unit[]' value = "K"> Kelvin
        <input type = "radio" name = 'init_unit[]' value = "C"> Celsius
        <input type = "radio" name = 'init_unit[]' value = "F"> Fahrenheit

        <h3>Final unit:</h3>
        <input type = "radio" name = 'fin_unit[]' value = "K"> Kelvin
        <input type = "radio" name = 'fin_unit[]' value = "C"> Celsius
        <input type = "radio" name = 'fin_unit[]' value = "F"> Fahrenheit<br>
        <input type = "submit">
      </form>

        <?php
        $initial_temperature = $_POST["init_temp"];
        $initial_unit = $_POST["init_unit"][0];
        $final_unit = $_POST["fin_unit"][0];
        
        function convert_to_Kelvin($initial_temperature, $initial_unit){
          switch($initial_unit){
            case "K":
              return $Kelvin_temp = $initial_temperature;
              break;
            case "C":
              return $Kelvin_temp = $initial_temperature + 273.15;
              break;
            case "F":
              return $Kelvin_temp = ($initial_temperature-32)*5.0/9.0 + 273.15;
          }
        }

        function final_conversion($Kelvin_temp, $final_unit){
          switch($final_unit){
            case "K":
              echo round($Kelvin_temp, 2);
              break;
            case "C":
              echo round($Kelvin_temp - 273.15, 2);
              break;
            case "F":
              echo round(($Kelvin_temp-273.15)*9.0/5.0 + 32, 2);
          }
        }

        final_conversion(convert_to_Kelvin($initial_temperature, $initial_unit), $final_unit);

        ?>
    </body>
  </html>
