<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>ex-dischi-musicali</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <div class="container">
                <img src="img/logo.png" alt="logo" />
            </div>
        </header>

        <div class="cds-container container">
            <!-- I CD SARANNO INSERITI QUI -->
        </div>

        <script class="album-template" type="text/x-handlebars-template">  
    				<div class="cd">
    						<img src="{{cover}}" />
    						<h3>{{title}}</h3>
    						<span class="author">{{artist}}</span>
    						<span class="year">{{year}}</span>
    				</div>
    		</script>

        <script src="main.js" charset="utf-8"></script>
    </body>
</html>
