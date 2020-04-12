<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
</head>

<body>
    <h1>Sign Up Form</h1>
    <form action="/register" method="POST" enctype="multipart/form-data">
        <label>username</label>
        <input type="text" name="username">
        <br><br>
        <label>email</label>
        <input type="text" name="email">
        <br><br>
        <br><br>
        <input type="submit" name="submit">
    </form>
    <br>
    <button type="button"><a href="<?= $this->url->get('home') ?>">Home</a></button> 
        
</body>

</html>
