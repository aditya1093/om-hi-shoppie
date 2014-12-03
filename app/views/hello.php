<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>hiShoppie</title>
        <style>
            @import url(//fonts.googleapis.com/css?family=Lato:700);

            body {
                margin:0;
                font-family:'Lato', sans-serif;
                text-align:center;
                color: #999;
            }
            h1.main-logo {
                color: #a0a0a0;
                font-size:84px;
            }
            i#globe{
                font-size:64px
            }
            @media(max-width : 968px) {
                h1.main-logo {
                    font-size:74px;
                }  
                i#globe{
                    font-size:54px
                }
            }            
            @media(max-width : 768px) {
                h1.main-logo {
                    font-size:54px;
                }     
                i#globe{
                    font-size:44px
                }
            }
        </style>
        <link rel="stylesheet" href="static/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="static/bower_components/font-awesome/css/font-awesome.min.css">

    </head>
    <body>
        <div class="container">
            <div class="row" style="margin-top:20%;">
                <div class="col-xs-12">
                    <h1 class="main-logo">
                        <span class="glyphicon glyphicon-shopping-cart"></span>
                        <br>
                        hi<b><i class="fa fa-usd"></i></b>h<i class="fa fa-globe" id="globe"></i>ppie
                    </h1>
                </div>
            </div>
        </div>
    </body>
</html>
