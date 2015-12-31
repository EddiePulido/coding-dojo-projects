<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HTML Table</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="container">

      <h1>HTML Table</h1>

      <table>

        <tr>
          <th>User #</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Full Name</th>
          <th>Full Name in upper case</th>
          <th>Length of full name (without spaces)</th>
        </tr>

        <?php

          function print_table($users){
            for($x = 0 ; $x < count($users) ; $x++){
              $first_name = "";
              $last_name = "";
              if(($x+1) % 5 == 0){
                echo "<tr class = 'table-color'>";
              }else{
                echo "<tr>";
              }
              echo "<td>" . ($x+1) . "</td>";
              foreach($users[$x] as $key => $value){
                echo "<td>" . $value . "</td>";
                if($key == "first_name"){
                  $first_name .= $value;
                }else{
                  $last_name .= $value;
                }
              }
              echo "<td>" . $first_name . " " . $last_name . "</td>";
              echo "<td>" . strtoupper($first_name) . " " . strtoupper($last_name) . "</td>";
              echo "<td>" . (strlen($first_name) + strlen($last_name)) . "</td>";
              echo "</tr>";
            }
          }

          $users = array(
            array('first_name' => 'Michael', 'last_name' => 'Choi'),
            array('first_name' => 'John', 'last_name' => 'Supsupin'),
            array('first_name' => 'Mark', 'last_name' => 'Guillen'),
            array('first_name' => 'KB', 'last_name' => 'Tonel'),
            array('first_name' => 'Abraham', 'last_name' => 'Cooper'),
            array('first_name' => 'Alfred', 'last_name' => 'Frispp'),
            array('first_name' => 'Ambassador', 'last_name' => 'Bayard'),
            array('first_name' => 'Augustus', 'last_name' => 'Egg'),
            array('first_name' => 'George', 'last_name' => 'Fripp'),
            array('first_name' => 'Grant', 'last_name' => 'Morris'),
            array('first_name' => 'Harrision', 'last_name' => 'Ainsworth'),
            array('first_name' => 'Henry', 'last_name' => 'Blyth'),
            array('first_name' => 'Hepworth', 'last_name' => 'Dixon'),
            array('first_name' => 'JD', 'last_name' => 'Harding'),
            array('first_name' => 'Richard', 'last_name' => 'Dadd')
          );

          print_table($users);

        ?>

      </table>

    </div>

  </body>
</html>
