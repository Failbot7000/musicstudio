<?php
    echo'
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="appassionato music studio, music, studio, daniel, kuzuhara, piano, voilin, passion, appassionato" />
    <meta name="description" content="Appassionato music studio is owned and operated by Daniel Kuzuhara. Professional masters level pianist. Apply now for lessions, or check our calendar for upcomming events" />
    <link rel="icon" type="img/ico" href="images/favicon.ico">
    <!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" />    
    <link rel="stylesheet" type="text/css" href="css/footer-distributed.css" />
    <script src=\'include/moment.min.js\'></script>
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- End Bootstrap -->
    <!-- JS Slider -->
    <script src="include/jssor.slider-25.0.7.min.js" type="text/javascript"></script>
    <script>
    $(document).ready(function() {
        $("#example").DataTable();
        var jssor_1_SlideshowTransitions = [
                  {$Duration:1200,$Opacity:2}
                ];
    
                var jssor_1_options = {
                  $AutoPlay: 1,
                  $SlideshowOptions: {
                    $Class: $JssorSlideshowRunner$,
                    $Transitions: jssor_1_SlideshowTransitions,
                    $TransitionsOrder: 1
                  },
                  $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                  },
                  $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                  }
                };
    
                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
    
                /*#region responsive code begin*/
                /*remove responsive code if you don\'t want the slider scales while window resizing*/
                function ScaleSlider() {
                    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                    if (refSize) {
                        refSize = Math.min(refSize, 980);
                        jssor_1_slider.$ScaleWidth(refSize);
                    }
                    else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }
                ScaleSlider();
                $(window).bind("load", ScaleSlider);
                $(window).bind("resize", ScaleSlider);
                $(window).bind("orientationchange", ScaleSlider);
            
    } );
    
    </script>
    <!-- Event Buttons Javascript -->
    <script>
    window.onload = function(){ 
    // Get the modal
    var modal = document.getElementById(\'myModal\');
    
    // Get the button that opens the modal
    var btn = document.getElementById("july14");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    };
    </script>
    
    <link rel="stylesheet" type="text/css" href="css/music.css">
    
    <style>
        
        
    </style>
    <title>Appassionato Music Studio</title>
</head>

<body>
	<!-- Global Div -->
	<div class="footer-bottom global-div">
		<!-- Begin Header, logo and title -->
        <img id="title-image" src="images/workinglogo.jpg" />
        <h1 id="mega-title">Appassionato Music Studio</h1>
        
        <!-- Begin nav bar -->
        <nav class="navbar navbar-default">
        	<div class="container-fluid">
            	<div class="navbar-header">
                	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse-1" aria-expanded="false">
        				<span class="sr-only">Toggle navigation</span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
      				</button>
      				<a class="navbar-brand" href="index.php">Home</a>
    			</div>
                <!--Above: Mobile menu Below: Desktop menu -->
                <div class="collapse navbar-collapse" id="main-navbar-collapse-1">
      				<ul class="nav navbar-nav">
        				<li><a href="bio.php">Biography<span class="sr-only">(current)</span></a></li>
        				<li><a href="samples.php">Samples</a></li>
                        <li><a href="studio.php">Studio</a></li>
                        <li><a href="trio.php">Trio</a></li>
                        <li><a href="contact.php">Contact</a></li>
     				 </ul>
      				<form class="navbar-form navbar-right">
        				<div class="form-group">
          					<input type="text" class="form-control" placeholder="Search">
        				</div>
        				<button type="submit" class="btn btn-default">Search Site</button>
      				</form>
                </div>
            </div>
        </nav>
    
    ';


?>