<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" type="text/css" href="style/header.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>

    <body>
    <header>
            <a href="#" class="logo">Easy Tour & Travel</a>
            <div class="manu-toggle"></div>
                <nav>
                    <ul>
                        <li><a href="#section-1" class="active">Home</a></li>
                        <li><a href="#section-2">About</a></li>
                        <li><a href="#section-3">Top Tour</a></li>
                        <li><a href="#section-4">Destination</a></li>
                        <li><a href="#section-5">Contact</a></li>
                    </ul>
                </nav>
                <div class="clearfix"></div>
        </header>    
        <?php include('js/header.js') ?>
        <script type="text/javascript">
            $(document).ready(function()
            {
                $('/.manu-toggle').click(function()
                {
                    $('.manu-toggle').toggleClass('active')
                })
            })
        </script>
    </body>
</html>