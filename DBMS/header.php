
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="login.css">
     
    <title>Blood</title>
</head>
<body>
<section class="main-container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mx-auto">
                <div class="title">
                    <i class="fa fa-tint">&nbsp;</i><span>BLOOD BANK</span>
                </div>
                <form action="includes/logout.inc.php"  method="POST" class="logout-form">                
                    <button type="submit" name="submit" class="button button2">logout</button>
                </form>
        </nav>


    <div id="content">
            
        <nav class="navbar navbar-expand-lg navbar-light bg-light mx-auto">
            <a class="navbar-brand my-2 px-3"  href="main.php">HOME</a>
            <a class="navbar-brand my-2 px-3"  href="donor.php">DONOR REGISTRATION</a>
            <a class="navbar-brand my-2 px-3"  href="send.php">SEND REQUEST</a>
            <a class="navbar-brand my-2 px-3"  href="view.php">VIEW REQUEST</a>
            <a class="navbar-brand my-2 px-3"  href="search.php">SEARCH</a>
            <a class="navbar-brand my-2 px-3"  href="contact.php">CONTACT</a>
            
            
        </nav>
</section>
</body>
