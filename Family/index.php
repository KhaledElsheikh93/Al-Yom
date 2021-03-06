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
            <a class="btn btn-primary" href="Person/create_person.php">Add Person</a>
            <a class="btn btn-primary" style="margin-left: 10px;" href="Family/create_family.php">Add Family</a>
            <a class="btn btn-primary" style="margin-left: 10px;" href="search_date.php">Searching by date</a>
            <table id="t01">
                <tr>
                    <th>name</th>
                    <th>Date of birth</th>
                    <th>control</th>
                </tr>
                <?php
                include "database.php";
                $select_person = "SELECT * FROM person";
                $results = $conn->query($select_person);
                foreach($results as $result){

               ?> 
                <tr>
                    <td><?php echo $result['name']; ?></td>
                    <td><?php echo $result['birthdate']; ?></td>
                    <td><a class="btn btn-primary" href="Person/details.php?id=<?php echo $result['id'];?>">Details</a></td>
                </tr>
                <?php } ?>
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