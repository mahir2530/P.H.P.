#1. Write a e PHP script to display values within a table. 

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <h1>Detail 1</h1>
        Enter SR No : <input type="text" name="sr[]">
        Enter Name : <input type="text" name="name[]">
        Enter Email : <input type="text" name="email[]">

        <h1>Detail 2</h1>
        Enter SR No : <input type="text" name="sr[]">
        Enter Name : <input type="text" name="name[]">
        Enter Email : <input type="text" name="email[]">

        <h1>Detail 3</h1>
        Enter SR No : <input type="text" name="sr[]">
        Enter Name : <input type="text" name="name[]">
        Enter Email : <input type="text" name="email[]">
        <input type="submit" name="submit" value="click">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $SR = $_POST['sr'];
        $NAME = $_POST['name'];
        $EMAIL = $_POST['email'];

        echo "<table border=2>
        <tr>
            <th>SR NO.</th>
            <th>NAME</th>
            <th>EMAIL</th>
        </tr>";

        for ($i = 0; $i < count($SR); $i++) {
            echo "<tr>
                <td>".$SR[$i]."</td>
                <td>".$NAME[$i]."</td>
                <td>".$EMAIL[$i]."</td>
            </tr>";
        }

        echo "</table>";
    }
    ?>
</body>

</html>
