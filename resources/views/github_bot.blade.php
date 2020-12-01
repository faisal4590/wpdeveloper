<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Github BOT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
        <header>
            <p> Github bot</p>
        </header>

        <!-- search pane container -->
        <div>
            <label for="">Github username: </label> <br>
            <input type="text" name="username">
            <input type="submit" value="Extract">
        </div>

        <!-- Show profile with repository container -->
        <div>
            <!-- show profile container -->
            <div>
                <img src="../resources/assets/img/user.png" alt="image" height="50" width="50"> <br>
                <p>Taylor</p>
            </div>

            <!-- show repositories container -->
            <div>
               <h3>Repositories</h3>
               <ul>
                   <li>1</li>
                   <li>2</li>
                   <li>3</li>
               </ul>
            </div>
        </div>
    </body>
</html>
