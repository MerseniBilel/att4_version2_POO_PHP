<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Create Student</title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap');
    * {
        font-family: 'Odibee Sans', cursive;
    }
</style>
</head>
<body>
    <div class="container">
<fieldset>
<legend>
    Student From
</legend>
    <form action="store.php" method="POST">
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input class="form-control" type="text" placeholder="Firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input class="form-control" type="text" placeholder="Lastname" name="lastname">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="text" placeholder="Email" name="email">
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input class="form-control" type="text" placeholder="Phone" name="phone">
        </div>
        <button type="submit" class="btn btn-outline-primary">Ajouter</button>
    </form>
</fieldset>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>