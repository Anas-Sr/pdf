<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generate Pdf</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexstyle.css">
</head>
<body>
    <div class="container">
        <div class="title">Convert  Info To PDF</div>
            <form action="generate.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name:</span>
                        <input type="text" name="fname" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email:</span>
                        <input type="email" name="email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">About:</span>
                        <input type="text" name="about" class="a" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="generate pdf">
                </div>
            </form>
    </div>
</body>
</html>