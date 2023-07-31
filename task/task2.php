<!DOCTYPE html>
<html>
<head>
    <title>Simple Name Form</title>
</head>
<body>
    <h1>Enter Your Name</h1>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <button type="submit">Submit</button>
    </form>
    
    <h1>Hello, <?php echo isset($_POST['name']) ? $_POST['name'] : "Unknown"; ?></h1>






</body>
</html>
