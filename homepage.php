
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <title>Home</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p>Logo</p>
        </div>

        <div class="right-links">


        <?php

        $id = $_SESSION['id'];
        $query = mysqli_query($conn,"SELECT*FROM users WHERE Id=$id");
        while($result = mysqli_fetch_assoc($query)){
            $res_Uname = $result['Username'];
            $res_Email = $result['Email'];
            $res_id = $result['Id'];
        }

        echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";

        ?>
            <a href="#">Change Profile</a>
            <a href="logout.php"> <button class="btn">Log out</button></a>
        </div>
    </div>
    <main>

        <div class="main-box-top">
            <div class="top">
                <div class="box">
                    <p>Hello <b><?php echo $res_Uname?> </b>, Welcome</p>
                </div>
                <div class="box">
                    <p>Your email is <b><?php echo $res_Email?> </b>.</p>
                </div>
            </div>
            <div class="bottom">
                <div class="box">
                    <p>And you are <b><?php echo $res_Age?> </b>.</p>
                </div>
            </div>

        </div>
    </main>
</body>
</html>