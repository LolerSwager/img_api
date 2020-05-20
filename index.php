<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="upload images to json api">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data" class="fileupload">
        <h1>Jannick's image api</h1>
        <fieldset class="nav_top">
            <input type="file" name="file" id="file" class="inputfile">
            <label for="file" class="btn"><i class="fas fa-file-image"></i> Choose a file</label>
            <button type="submit" name="submit" class="btn"><i class="fas fa-upload"></i> Upload</button>
            <button type="button" class="btn"><a href="JSON/output.json" target="_blank"><i class="fas fa-code"></i> Open json</a></button>
            <button type="button" id="openlogin" class="btn">Login</button>
        </fieldset>
    </form>

<div class="grey-box"></div>    
    <div class="loginbox">
        <form action="" method="POST" class="login form">
        <span onclick="closeForm()"><i class="fas fa-times"></i></span>
                <fieldset class="fieldset-login">
                    <legend>Login</legend>
                    <label for="userName">Username</label>
                    <input type="text" name="userName" class="inputfield">
                    <label for="userPassword">Password</label>
                    <input type="password" name="userPassword" class="inputfield">
                    <button type="button" name="login" class="btn">Login</button>
                    <button type="button" name="signup" id="signup-btn" class="btn">create account</button>
                </fieldset>
        </form>

        <form action="" method="POST" class="signup-form form">
            <span onclick="closeForm()"><i class="fas fa-times"></i></span>
                <fieldset class="fieldset-login">
                    <legend>Signup</legend>
                    <label for="">Username</label>
                    <input type="text" class="inputfield">
                    <label for="">Password</label>
                    <input type="password" class="inputfield">
                    <button type="button" name="" class="btn">signup</button>
                    <button type="button" name="" id="backToLogin" class="btn">login</button>
                </fieldset>
        </form>
    </div>

    <script src="js/openlogin.js"></script>

    <script src="js/fetch_imgs.js"></script>

    <div id="post">

    </div>
</body>
</html>