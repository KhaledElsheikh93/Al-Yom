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

    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <div class="row text-center py-5">
        <a class="btn btn-primary" href="../index.php">Back</a>
            <table id="t01">
            <?php 
                include "../database.php";
                
                $id = $_GET['id'];

                $select_family = "SELECT * FROM family_members LEFT JOIN person ON 
                                   person.family_id = family_members.id WHERE person.id = $id ";
                                   
                $families = $conn->query($select_family);
                while($family = mysqli_fetch_array($families)){  
            ?>
                <tr>
                    <th>GrandFather</th>
                    <th>Father</th>
                    <th>Kid</th>
                </tr>
                <tr>
                    <td><?php echo $family['grandfather']; ?></td>
                    <td><?php echo $family['father']; ?></td>
                    <td><?php echo $family['son']; ?></td>
                </tr>
                <?php  }?>
            </table>
                
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>