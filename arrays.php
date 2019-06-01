<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

  $food = ["Rice", "Fries", "Chicken", "Coke", "Banana"];    
   
/*
Print every array element in a new line.
*/

  echo "{$food[0]}, ";
  echo "{$food[1]}, ";
  echo "{$food[2]}, ";
  echo "{$food[3]}, ";
  echo "{$food[4]}.";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/
  
    echo "<ul>";
        echo "<li>{$food[0]}</li>";
        echo "<li>{$food[1]}</li>";
        echo "<li>{$food[2]}</li>";
        echo "<li>{$food[3]}</li>";
        echo "<li>{$food[4]}</li>";
    echo "</ul>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

  $food_assoc = [
    "Rice" => "Appetizer", 
    "Fries" => "Appetizer", 
    "Chicken" => "Main course", 
    "Coke" => "Drink", 
    "Banana" => "Fruit"
  ];

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

  echo "Rice | {$food_assoc["Rice"]}<br/>";
  echo "Fries | {$food_assoc["Fries"]}<br/>";
  echo "Chicken | {$food_assoc["Chicken"]}<br/>";
  echo "Coke | {$food_assoc["Coke"]}<br/>";
  echo "Banana | {$food_assoc["Banana"]}<br/>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

  $food_assoc = [
    "Rice" => ["type" => "Appetizer",
                "Origin" => "India"
              ], 
    "Fries" => ["type" => "Appetizer",
                "Origin" => "France"
              ], 
    "Chicken" => ["type" => "Main course",
                "Origin" => "Peru"
              ], 
    "Coke" => ["type" => "Drink",
               "Origin" => "USA"
              ], 
    "Banana" => ["type" => "Fruit",
                "Origin" => "Colombia"
              ]
    ];

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

  echo "Rice | {$food_assoc["Rice"]["type"]} | {$food_assoc["Rice"]["Origin"] }<br>";
  echo "Fries | {$food_assoc["Fries"]["type"]} | {$food_assoc["Fries"]["Origin"] }<br>";
  echo "Chicken | {$food_assoc["Chicken"]["type"]} | {$food_assoc["Chicken"]["Origin"] }<br>";
  echo "Coke | {$food_assoc["Coke"]["type"]} | {$food_assoc["Coke"]["Origin"] }<br>";
  echo "Banana | {$food_assoc["Banana"]["type"]} | {$food_assoc["Banana"]["Origin"] }<br>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/

  echo "<table>";
    echo "<tr>";
      echo "<th><h2>food</h2><th/>";
      echo "<th><h2>Type</h2><th/>";
      echo "<th><h2>Origin</h2><th/>";
    echo "</tr>";
    echo "<tr>";
      echo "<th>Rice<th/>";
      echo "<th>{$food_assoc["Rice"]["type"]}<th/>";
      echo "<th>{$food_assoc["Rice"]["Origin"]}<th/>";
    echo "</tr>";
    echo "<tr>";
      echo "<th>Fries<th/>";
      echo "<th>{$food_assoc["Fries"]["type"]}<th/>";
      echo "<th>{$food_assoc["Fries"]["Origin"]}<th/>";
    echo "</tr>";
    echo "<tr>";
      echo "<th>Chicken<th/>";
      echo "<th>{$food_assoc["Chicken"]["type"]}<th/>";
      echo "<th>{$food_assoc["Chicken"]["Origin"]}<th/>";
    echo "</tr>";
    echo "<tr>";
      echo "<th>Coke</th>";
      echo "<th>{$food_assoc["Coke"]["type"]}<th/>";
      echo "<th>{$food_assoc["Coke"]["Origin"]}<th/>";
    echo "</tr>";
    echo "<tr>";
      echo "<th>Banana<th/>";
      echo "<th>{$food_assoc["Banana"]["type"]}<th/>";
      echo "<th>{$food_assoc["Banana"]["Origin"]}<th/>";
    echo "</tr>";
    
  echo "</table>";


?>