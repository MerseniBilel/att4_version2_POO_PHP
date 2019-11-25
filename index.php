<!DOCTYPE html>
<html lang="en">
<style>
    @import url('https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap');
    * {
        font-family: 'Odibee Sans', cursive;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Create Student</title>
</head>
<body>
<div class="container">
    <div class="jumbotron mt-4">
    <h1 class="text-center">List of Students</h1>

    </div>
    <?php
    if($_GET['success'] == 'delete'){?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> The Student Is Deleted successfully.
    </div>
    <?php }else if($_GET['success'] == 'add'){?>
        <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> The Student Is Added successfully.
    </div>
    <?php }else if($_GET['success'] == 'update') {?>
        <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> The Student Is Updated successfully.
        </div>
    <?php } ?>
<table class="table mt-4">
    <thead class="thead-dark text-center">
        <tr>
            <th>ID</th>
            <th>FIRSTNAME</th>
            <th>LASTNAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>OPERATION</th>
        </tr>
    </thead>
        <?php
        include 'classes/etudiant.calss.php';

        $rep = new Etudiant;
        $repp = $rep->ListAllStudent();
        while($data = $repp->fetch()){
            echo '<tr>';
            echo '<td>'.$data['Id'].'</td>' ;
            echo '<td>'.$data['firstname'].'</td>' ;
            echo '<td>'.$data['lastname'].'</td>' ;
            echo '<td>'.$data['email'].'</td>' ;
            echo '<td>'.$data['phone'].'</td>' ;
            echo '<td class="text-center"><a href="edit.php?id='.$data['Id'].'" class="btn btn-success">Editer</a> <a href="delete.php?id='.$data['Id'].'" class="btn btn-danger ml-5">Supprimer</a>
            ';
            
            echo '</td>';
        }
        ?>
    </table>
    <a href="create.php" class="btn btn-primary">Add student</a>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>