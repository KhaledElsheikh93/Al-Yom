<?php 

if(isset($_POST['show']))
{
    include "database.php";
    
    $from_date = $_POST['From'];
    $to_date = $_POST['To'];

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>family</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row text-center py-5">
        <a class="btn btn-primary" style="margin-left: 10px;" href="index.php">Back</a>
   
            <table id="t01">
                <tr>
                    <th>name</th>
                    <th>Date of birth</th>
                    <th>control</th>
                </tr>
                <?php 
                    $select_person = "SELECT * FROM person WHERE birthdate BETWEEN '" .$from_date. "' AND '" .$to_date. "'";
                    $persons = $conn->query($select_person);
                    foreach($persons as $person){ ?>

               
                <tr>
                    <td><?php echo $person['name']; ?></td>
                    <td><?php echo $person['birthdate']; ?></td>
                    <td><a class="btn btn-primary" href="Person/details.php?id=<?php echo $person['id'];?>">Details</a></td>
                </tr>
                <?php }} ?> 
                
            </table>
                
        </div>
    </div>


    <script src="http://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.4.1.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />
  
</body>
</html>