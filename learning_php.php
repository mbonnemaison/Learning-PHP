/*
PHP Programming Language Tutorial - Full Course

The notes below were taken while watching the following video on youtube:
https://www.youtube.com/watch?v=OK_JCtrrv-c

This video is provided by freeCodeCamp.org
Video length: 4:36:38 - uploaded on June 20th, 2018
*/

#===============================================================================
#Introduction
/*
PHP is a server side language, i.e. programming language that runs on a web server.
To create a local web server: php -S localhost:4000
localhost is the web address of the local computer and 4000 means that it is
running on port 4000.
*/

# This is basic html page
<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
      <title></title>
    </head>
    <body>

    </body>
  </html>

# Inside the basic html page, we are going to write php code: echo("text");
<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
      <title></title>
    </head>
    <body>

        <?php
        #The echo function is similar to the print function in Python
          echo("Mathilde, tu es la meilleure");
        ?>

    </body>
  </html>

/*
echo is a command in php which allows us to write information onto the html document.
The parentheses after echo and before the semi-colon are optional.
We wrote a simple string in between the parentheses, but we could also write html code.
Remember to add a semi-colon (;) anytime we write a line of code in php
*/
#===============================================================================
#Writing HTML
<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
      <title></title>
    </head>
    <body>

        <?php
          #h1 is for title
          echo "<h1> Le blog de Mathilde </h1>";
          #hr creates a horizontal line
          echo "<hr>";
          #p is for paragraph
          echo "<p> Bienvenue sur mon blog! </p>";
        ?>

    </body>
  </html>

#===============================================================================
#Variables
#Every time we want to create a variable in php, start the line with $
<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
      <title></title>
    </head>
    <body>
        <?php
          $characterName = "John";
          $characterAge = 58;
          #br indicates that the line ends
          echo "There once was a man named $characterName <br>";
          echo "He was $characterAge years old <br>";
          $characterName = "Ingrid";
          echo "He really liked the name $characterName <br>";
          echo "But did not like being $characterAge <br>";
        ?>

    </body>
  </html>
#===============================================================================
#Data types
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
          $phrase = "May is the 5th month of the year";
          $age = 34; #this is an integer or whole number
          $average = 25.5; #called floats, decimal
          $isMale = true;
          null;
          echo "hello Mathilde";
          echo 4.0;

        ?>

    </body>
  </html>
#===============================================================================
# Working with strings

#strtolower() = function that puts all characters in lower case
#strtoupper() = function that puts all characters in upper case
#strlen() = function that provides the number of characters in the string
#An index refers to specific characters in the string; written with []
#str_replace = function that allows us to replace a string by another
#substr = function that provides a part of the string;
# - the first item is the string;
# - the 2nd item is where to start the selection;
# - the 3rd number is to indicate how many characters we want;

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
          $phrase = "Non maIs vrAImenT!";
          echo strtolower($phrase);
          echo strlen($phrase);
          echo strtoupper($phrase);
          echo $phrase[1];
          $phrase[0] = "B";
          echo strtolower($phrase);
          echo str_replace('Bon', 'oui', $phrase);
          echo substr($phrase, 4, 6);
        ?>

    </body>
  </html>
#===============================================================================
#Working with numbers

/*
abs() = the function provides the absolute value of a number
pow() = the function allows us to raise a number to a power (eg 2^4 = pow(2,4))
sqrt() = function that provides the square root of a given number
max() & min() = provide the maximum value & minimum value.
round() = rounds the number
ceil() = round the number up
floor() = rounds the number down
*/

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
          echo (5+9)*2;
          echo "<br>";
          echo "modulus operator provides the remainder; example 10/3 <br>";
          echo 10 % 3;
          echo "<br>";
          echo "add 1 to a number ";
          $number = 34;
          echo $number;
          $number++;
          echo $number;
          echo "<br>";
          echo "remove 1 to a number ";
          $number2 = 45;
          $number2--;
          echo $number2;
          echo "<br>";
          $number2 /= 2;
          echo $number2;
          echo "<br>";
          echo abs(-345);
          echo "<br>";
          echo pow(2,4);
          echo "<br>";
          echo sqrt(144);
          echo "<br>";
          echo max (2, 10);
          echo "<br>";
          echo min (2, 10, 45);
          echo "<br>";
          echo round(2.5);
          echo "<br>";
          echo ceil(2.3);
          echo "<br>";
          echo floor(2.3);

        ?>

    </body>
  </html>
#===============================================================================
#Getting use input
/*
A form is a special html element that is a middleman between html and php.
We use form to indicate where to go (action) and what we want to do (method).
We use input to ask for an input from the user.
Different types exist: text, number, submit etc.
This information will then be recorded and can be accessed by our php code.
*/

<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
      <title>
      'Learning PHP'
      </title>
    </head>
    <body>
            <form action = "testing_php_code.php" method = "get">
                Name: <input type = "text" name = "username">
                <br>
                Age: <input type = "number" name = "age">
                <input type = "submit">
            </form>
            <br>
            Your name is <?php echo $_GET["username"] ?> and your age is <?php echo $_GET['age'] ?>
    </body>
  </html>
#===============================================================================
#Building a basic calculator
<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
      <title>
      'Learning PHP'
      </title>
    </head>
    <body>
            <form action = "testing_php_code.php" method = "get">
              <input type = "number" name = "num1">
              <br>
              <input type = "number" name = "num2">
              <input type = "submit">
            </form>
            <br>
            The sum is <?php echo $_GET['num1'] + $_GET['num2'] ?>
            <br>
            The product is <?php echo $_GET['num1'] * $_GET['num2'] ?>
            <br>
            The division of <?php echo $_GET['num1']?> by <?php echo $_GET['num2']?> is <?php echo $_GET['num1'] / $_GET['num2'] ?>
            <br>
            The substraction of <?php echo $_GET['num1']?> by <?php echo $_GET['num2']?> is <?php echo $_GET['num1'] - $_GET['num2'] ?>

    </body>
  </html>

#===============================================================================
#Building a mad libs game
<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
      <title>
      'Learning PHP'
      </title>
    </head>
    <body>
            <form action = "testing_php_code.php" method = "get">
              Color: <input type = "text" name = "color"> <br>
              Plural noun: <input type = "text" name = "noun"> <br>
              Celebrity: <input type = "text" name = "star">
              <input type = "submit">
            </form>
            <br><br>
            <?php
            $color = $_GET['color'];
            $plural_noun = $_GET['noun'];
            $celebrity = $_GET['star'];
            echo "Roses are $color <br>";
            echo "$plural_noun are blue <br>";
            echo "I love $celebrity <br>";
            ?>
    </body>
  </html>

#===============================================================================
#URL parameters
/*
After we submit a form, the value of the form gets placed inside the URL.
For example, let's create a form that asks for a name:
*/
<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
      <title>
      'Learning PHP'
      </title>
    </head>
    <body>
            <form action = "testing_php_code.php" method = "get">
              Name: <input type = "text" name = "name"> <br>
              <input type = "submit">
            </form>
            <br><br>
            <?php
            echo $_GET['name'];

            ?>
    </body>
  </html>

/*then the URL becomes:
localhost:4000/testing_php_code.php?name=Mathilde
We can add another value to it:
localhost:4000/testing_php_code.php?name=Mathilde&age=34
When we refresh the page, nothing happens, but
if we change the line echo $_GET['name']; by echo $_GET['age'];
then we can get the age show up without having to generate an input.
*/
<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
      <title>
      'Learning PHP'
      </title>
    </head>
    <body>
            <form action = "testing_php_code.php" method = "get">
              Name: <input type = "text" name = "name"> <br>
              <input type = "submit">
            </form>
            <br><br>
            <?php
            echo $_GET['age'];

            ?>
    </body>
  </html>

#===============================================================================
#POST vs. GET
/*
The post method is a more secure method to provide information than the get method.
If we are using the get method for a password, then the password will show up in
the url and can easily be changed like shown in the previous chapter.
The post method does not allow the information to show up on the url.
*/
<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
      <title>
      'Learning PHP'
      </title>
    </head>
    <body>
            <form action = "testing_php_code.php" method = "post">
              Password: <input type = "password" name = "password"> <br>
              <input type = "submit">
            </form>
            <br><br>
            <?php
            echo $_POST['password'];

            ?>
    </body>
  </html>

#===============================================================================
#Arrays
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
        $random = array("Matt", 23, true, false);
        #To get the first element of the array:
        echo $random[0];
        echo "<br>";
        #To get the first letter of the first element of the array:
        echo $random[0][0];
        echo "<br>";
        #To modify an array
        $random[3] = 'Martini';
        echo $random[3];
        echo "<br>";
        #Add an element to the array
        $random[4] = 1986;
        echo $random[4];
        echo "<br>";
        #Figure out the number of elements in an array
        echo count($random);
        ?>
    </body>
  </html>
#===============================================================================
#Using checkboxes
/*
In the input element of HTML, we can use the type "checkbox" to add checkboxes and
The name should have [] right after (in the string) whenever we want to select more
than 1 box and store the data inside an array.
*/
<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
      <title>
      'Learning PHP'
      </title>
    </head>
    <body>
      <form action = "testing_php_code.php" method = "post">
        Apples: <input type = "checkbox" name = "Fruits[]" value = "apples"><br>
        Oranges: <input type = "checkbox" name = "Fruits[]" value = "oranges"><br>
        Pears: <input type = "checkbox" name = "Fruits[]" value = "pears"><br>
        <input type = "submit">
      </form>

        <?php
        $fruits = $_POST["Fruits"]; #$fruits is an array
        echo $fruits[0]; #this tells us which fruit was selected first

        ?>
    </body>
  </html>


#===============================================================================
#Associative array
/*
An associative array is a dictionary. It is built as follow:
$associative_array = array('key' => 'value');
Unlike an array where we access an element using an index, in an associative
array, we access elements using the keys.
Make sure that the keys are unique to avoid confusion.
*/
<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
      <title>
      'Learning PHP'
      </title>
    </head>
    <body>
      <!--Create a text box that asks to enter the name of a student-->
      <form action = "testing_php_code.php" method = "post">
        Student name: <input type = "text" name = "student">
        <input type = "submit">
      </form>

        <?php
        $grades = array("Mathilde" => "A+", 'Judith' => 'B-', 'John' => 'C');
        #Find out the value of a given key:
        echo $grades["Mathilde"];
        echo "<br>";
        #Modify the value of a key:
        $grades['John'] = 'A-';
        echo $grades['John'];
        echo "<br>";
        #Get the number of elements in the array:
        echo count($grades);
        echo "<br>";
        #This will provide the grade of the student that was entered in the text box
        echo $grades[$_POST['student']];

        ?>
    </body>
  </html>

#===============================================================================
#Functions
/*
Function is a container where we put a bunch of code designed to perform a
specific task.
Function below says "hi" to the user.
To create a function: function(parameters){anything in here is part of the function}.
For the program to execute the function, we need to call the function.
To call a function in php, write down the name of the function followed by ().
*/
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
          function sayHi($name, $age){
            echo "Hello $name, you are $age <br>";
          }
          sayHi("Mathilde", 34);
          sayHi("Matt", 34);
          sayHi("Karen", "old");
        ?>

    </body>
  </html>

#===============================================================================
#Return statements
/*
Create a function that returns the cube of a given number (eg, 4 will return 64).
To get a value out, add the return key word.
The return key word also indicates that this is the last line of the function.
Anything after the line with "return" on it will get executed in the function.
*/

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
          function cube($num){
            echo "You're beautiful <br>";
            return $num * $num * $num;
            echo "It is sunny <br>";
          }
          $cube_number = cube(4);
          echo $cube_number;
          echo "<br>";
          echo cube(5);

        ?>

    </body>
  </html>

#===============================================================================
#If statements
/*
The general skeleton of an if statement:
if (condition){
  instructions if condition is true
} elseif(other condition){
  instructions if other condition is true
} else{
  instructions if all conditions are false
}
The "and operator" is && and is used to add a condition.
The "or operator" is || and is used in the condition.
The "negation operator" is ! and is used in the condition to say not true.
*/

#With the "and operator", && :
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
          $is_male = true;
          $is_tall = false;
          if ($is_male && $is_tall){
            echo "You are a man and you are tall";
          } else{
            echo "You are not a man and/or not tall";
          }

        ?>

    </body>
  </html>

#With the "or operator", || :
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
          $is_male = true;
          $is_tall = false;
          if ($is_male || $is_tall){
            echo "You are a man and/or you are tall";
          } else{
            echo "You are not a man and not tall";
          }

        ?>

    </body>
  </html>

#With multiple conditions:
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
          $is_male = false;
          $is_tall = true;
          if ($is_male && $is_tall){
            echo "You are a tall man ";
          } elseif($is_male && !$is_tall){
            echo "You are a short man";
          } elseif(!$is_male && $is_tall){
            echo "You are a not a man but you are tall";
          } else{
            echo "You are not a tall man";
          }

        ?>

    </body>
  </html>

#===============================================================================
#If statements (cont.)
/*
Include comparisons in conditions using <, >, <=, >=, != (not equal to) and == (equal to)
*/
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
        function get_max($num1, $num2, $num3){
          if($num1 >= $num2 && $num1 >= $num3){
            return $num1;
          } elseif($num2 >= $num1 && $num2 >= $num3){
            return $num2;
          } else {
            return $num3;
          }
        }
        echo get_max(3,4,57);



        ?>

    </body>
  </html>

#===============================================================================
#Building a better calculator
<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
      <title>
      'Learning PHP'
      </title>
    </head>
    <body>
      <form action = "testing_php_code.php" method = "post">
        <!-- step = 0.01 allows for decimal numbers up to 2 digit after the dot -->
        First number: <input type = 'number' step = 0.1 name = 'num1'><br>
        Operator: <input type = 'text' name = 'operator'><br>
        Second number: <input type = 'number' step = 0.1 name = 'num2'><br>
        <input type = "submit">
      </form>

        <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['operator'];
        if($op == "+"){
          echo $num1 + $num2;
        } elseif($op == "-"){
          echo $num1 - $num2;
        } elseif($op == "*"){
          echo $num1 * $num2;
        } elseif($op == "/"){
          echo $num1 / $num2;
        } else{
          echo "Invalid operator";
        }

        ?>

    </body>
  </html>

#===============================================================================
#Switch statements
/*
A switch statement is a special type of if statement used to compare 1 value to
a bunch of different values.
Create a switch statement:
switch(parameter){
  case 'A':
  instructions on what to do if parameter == 'A';
  break;
  case 'B':
  instructions on what to do if parameter == 'B';
  break;
}
The break statement takes us out of the switch statement.
With the break statement, if the program found parameter == 'A', then the switch
statement stops and does not check for whether parameter is equal to other cases.
If the break statement is not there and the parameter == A, then after going
through case A, the program will go through case B.
*/

<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
      <title>
      'Learning PHP'
      </title>
    </head>
    <body>
      <form action = "testing_php_code.php" method = "post">
        What was your grade? <input type = 'text' name = 'Grade'><br>

        <input type = "submit">
      </form>

        <?php
        $grade = $_POST['Grade'];
        switch($grade){
          case "A":
            echo "You did great!";
            break;
          case "B":
            echo "You did well";
            break;
          case "C":
            echo "You did poorly";
            break;
          case "D":
            echo "You did very bad";
            break;
          case "F":
            echo "You failed";
            break;
          default:
            echo "Invalid grade";
        }
        ?>

    </body>
  </html>

#===============================================================================
#While loops
/*
To create a while loop: while (loop condition){loop body}
The loop condition resembles the condition in the if statement.
The loop body contains instructions on what to do if condition is true.
The way while loops work is that the condition is checked first.
If the condition is true, then the content of the loop body is executed.
*/

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
        $index = 1;
        while($index <= 5){
          echo "$index <br>";
          #increment the index by 1 with ++
          $index++;
        }

        ?>

    </body>
  </html>

/*
Do-while loops are the same as while loop except that the loop body is executed
first and then the condition is checked.
This is the opposite of
*/
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
        $index = 6;
        do {
          echo "$index <br>";
          $index++;
        } while($index <= 5);

        ?>

    </body>
  </html>

#===============================================================================
#For loops
/*
Create a for loop: for(3 parameters){}
We have 3 parameters between the parentheses which are separated by semi-colon:
1. Variable initialization
2. Looping condition
3. Line of code we want to execute after every iteration of the loop
*/

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
        #Create a for loop similar to the while loop above
        #This for loop is way more compact than the while loop
        for($i = 1; $i <= 5; $i++){
          echo "$i <br>";
        }

        ?>

    </body>
  </html>

/*
Loop through the content of an array
*/
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
        $lucky_numbers = array(5,18,1,23,100,34,6,2,29,77);
        for($i = 0; $i < count($lucky_numbers); $i++){
          echo "$lucky_numbers[$i] <br>";
        }

        ?>

    </body>
  </html>

#===============================================================================
#Include HTML files
/*
Create a header.html and a footer.html files which will show the header and footer
for every pages on the website.
When creating a new page, we can include those files in the php code.
*/
<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
      <title>
      'Learning PHP'
      </title>
    </head>
    <body>
        <?php include "header.html" ?>
        <p> Hello World! </p>
        <?php include "footer.html" ?>

    </body>
  </html>

#===============================================================================
#Include PHP files
/*
Create a article_header.php file
Let's say that every article on our blog website has a title, an author and word
count.
*/
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
        $title = "My first post";
        $author = "Mathilde";
        $word_count = 23;
        include "article_header.php"
        ?>
    </body>
  </html>

#Another example with a function:
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
        include 'useful_tools.php';
        say_hi('Matthew');
        echo '<br>';
        echo $feet_in_mile;

        ?>
    </body>
  </html>

#===============================================================================
#Classes & objects
/*
Create a class: class name_of_class {custom data type}
In the custom data type, we have to add attributes: var $name_of_attribute;
To use this data type, we create a variable that will store the information
used to describve this class. This is called creating an object.
*/

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
        #Create a class which is a book data type
        #A class is a specification for what a book is in our program
        class Book {
          var $title;
          var $author;
          var $pages;
        }
        #Create an book object using the $book1 variable to store a book object
        $book1 = new Book;
        $book1->title = "Permanent Record";
        $book1->author = "Edward Snowden";
        $book1->pages = 350;

        #Create another book object
        $book2 = new Book;
        $book2->title = "Programming Python";
        $book2->author = "Mark Lutz";
        $book2->pages = 1250;

        echo $book2->title;
        ?>
    </body>
  </html>

#===============================================================================
#Constructors
/*
A constructor is a function inside a class which is called when we create an
object of that class, i.e. when we say $variable_name = new class_name.
To create a constructor, we have to be inside a class and write:
function __construct(){}
*/

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
        class Book {
          var $title;
          var $author;
          var $pages;

          function __construct(){
            echo "New book created <br>";
          }
        }
        $book1 = new Book;
        $book1->title = "Permanent Record";
        $book1->author = "Edward Snowden";
        $book1->pages = 350;

        $book2 = new Book;
        $book2->title = "Programming Python";
        $book2->author = "Mark Lutz";
        $book2->pages = 1250;

        ?>
    </body>
  </html>

#We can enter a name between the parentheses for the constructor and the object.
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
        class Book {
          var $title;
          var $author;
          var $pages;

          function __construct($name){
            echo $name;
            echo "<br>";
          }
        }
        $book1 = new Book("spy");
        $book1->title = "Permanent Record";
        $book1->author = "Edward Snowden";
        $book1->pages = 350;

        $book2 = new Book("computer");
        $book2->title = "Programming Python";
        $book2->author = "Mark Lutz";
        $book2->pages = 1250;

        ?>
    </body>
  </html>

#Reduce the work in creating a class object
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
        class Book {
          var $title;
          var $author;
          var $pages;

          function __construct($a_title, $a_author, $a_pages){
            #it must be $this->name_of_attribute to work
            $this->title = $a_title;
            $this->author = $a_author;
            $this->pages = $a_pages;
          }
        }
        $book1 = new Book("Permanent Record", "Edward Snowden", 350);
        $book2 = new Book("Programming Python", "Mark Lutz", 1250);
        echo $book2->pages;

        ?>
    </body>
  </html>

#===============================================================================
#Object functions
/*
An object function is a function defined inside of a class and an object of that
class can use that function.
*/
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
        class Student {
          var $name;
          var $major;
          var $gpa;

          function __construct($name, $major, $gpa){
            #it must be $this->name_of_attribute to work
            $this->name = $name;
            $this->major = $major;
            $this->gpa = $gpa;
          }

          function has_honors(){
            if($this->gpa > 3.7){
              return "true";
            } return "false";
          }
        }
        $student1 = new Student("Edward Snowden", "Computer Science", 3.9);
        $student2 = new Student("Mark Lutz", "zoology", 3.5);

        echo $student2->has_honors();

        ?>
    </body>
  </html>

#===============================================================================
#Getters and Setters
/*
Visibility modifier is a key word that is going to tell php what code is able to
access and use attribute in our program.
When var or public are written in front of the name_of_attribute, this means
that anybody can have access to it and modify it. var and public are for the
most part interchangeable.
When private is written in front of the name_of_attribute, this means that only
code inside of the class that is declared is going to be used.
*/

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
        #The goal is to create a class with specific ratings for movies:
        #Possible ratings are: R, PG, PG-13, NR and G.
        #We don't want to be able to have other ratings than those above.
        class Movie {
          public $title;
          #The private category will prevent us from making any rating.
          private $rating;

          function __construct($title, $rating){
            $this->title = $title;
            #To avoid being able to manually modify the rating
            $this->set_rating($rating);
          }
          #The get_rating will allow us to make changes to ratings with the
          #set_rating function
          function get_rating(){
            return $this->rating;
          }
          #The set_rating will allow us to only accept specific ratings, i.e.
          #G, PG, PG-13, R, NR
          function set_rating($rating){
            if($rating == "G" || $rating == "PG" ||$rating == "PG-13" ||$rating == "R" ||$rating == "NR"){
              $this->rating = $rating;
            } else{
              $this->rating = 'Not a valid rating. Please enter a valid rating: G, PG, PG-13, R or NR';
            }
          }
        }
        $movie1 = new Movie("Terminator 2", "r");
        #$movie1->set_rating('PG');
        echo $movie1->get_rating();

        ?>
    </body>
  </html>

#===============================================================================
#Inheritance
/*
Inheritance is when a class can inherit all the attributes from another class in php.
*/

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
        class Chef{
          function chicken(){
            echo "This chef can make a mean chicken <br>";
          }
          function salad(){
            echo "This chef can make a splendid salads <br>";
          }
          function special_dish(){
            echo "This chef can make fantastic BBQ ribs! <br>";
          }

        }
        /*Create a class called italian_chef that can do everything that is in
        the class chef plus more.
        Use inheritance to include the information from the chef class into the
        italian_chef class
        */
        class italian_chef extends Chef{
          function pasta(){
            echo "Bellissimo! <br>";
          }
          #Overwrite a function
          #Let's say the italian chef's special dish is spaghetti bolognese
          function special_dish(){
            echo "This chef can make the best spaghetti bolognese! <br>";
          }
        }
        $chef = new Chef();
        $chef->special_dish();

        $italian_chef = new italian_chef();
        $italian_chef->special_dish();
        ?>
    </body>
  </html>
