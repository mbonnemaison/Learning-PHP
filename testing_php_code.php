<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
      <title>
      'Learning PHP'
      </title>
    </head>
    <body>
        <?php
        class MyClass {
          const CONST_VALUE = 'A constant value';
        }

        $classname = 'MyClass';
        echo $classname::CONST_VALUE;
        echo "<br>";
        echo MyClass::CONST_VALUE;
        ?>
    </body>
  </html>
