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
        <div class="col-md-2">
            <input type="date" name="From" id="From" class="form-control" placeholder="from date" style="margin-top: 10px;">
        </div>
        <div class="col-md-2">
            <input type="date" name="to" id="to" class="form-control" placeholder="to date" style="margin-top: 10px;">
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
                <?php } }else {
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
                <?php }} ?>
            </table>
                
        </div>
    </div>


    <script src="http://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.4.1.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />

    <script>
        $(document).ready(function(){
        
            $(function(){
                $("#From").datepicker();
                $("#to").datepicker();
            });
            $('#range').click(function(){
                var From = $('#From').val();
                var to   = $('#to').val();
                if(From != '' && to != '')
                {
                    $.ajax({
                        url:"range.php",
                        method: "POST",
                        data:{From:From, to:to},
                        success:function(data)
                        {
                            $("#person").html(data);
                        }
                    });
                }
                else
                {
                    alert("Please insert the date");
                }
            });
        });
    </script>  
</body>
</html>