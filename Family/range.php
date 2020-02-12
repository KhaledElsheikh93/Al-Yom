<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>family</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="col-md-2">
            <input type="text" name="From" id="From" class="form-control" placeholder="from date" style="margin-top: 10px;">
        </div>
        <div class="col-md-2">
            <input type="text" name="to" id="to" class="form-control" placeholder="to date" style="margin-top: 10px;">
        </div>
        <div class="col-md-8">
            <input type="button" name="range" id="range" value="Range" class="btn btn-success">
        </div>
        <div class="row text-center py-5" id="person">
        <a class="btn btn-primary" href="Person/create_person.php">Add Person</a>
        <a class="btn btn-primary" style="margin-left: 10px;" href="Family/create_family.php">Add Family</a>
            <table id="t01">
                <tr>
                    <th>name</th>
                    <th>Date of birth</th>
                    <th>control</th>
                </tr>
                <?php 
                if(isset($_POST["Form"], $_POST["to"])){
                include "database.php";
                
                $select_person = "SELECT * FROM person WHERE birthdate BETWEEN '" .$_POST["From"]. "' AND '" .$_POST["to"]. "' ";
                $results = $conn->query($select_person);
                foreach($results as $result){

               ?> 
                <tr>
                    <td><?php echo $result['name']; ?></td>
                    <td><?php echo $result['birthdate']; ?></td>
                    <td><a class="btn btn-primary" href="Person/details.php?id=<?php echo $result['id'];?>">Details</a></td>
                </tr>
                <?php } }?>
            </table>
                
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</body>
</html>