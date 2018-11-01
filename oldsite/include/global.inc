<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="appassionato music studio, music, studio, daniel, kuzuhara, piano, voilin, passion, appassionato" />
<meta name="description" content="Appassionato music studio is owned and operated by Daniel Kuzuhara. Professional masters level pianist. Apply now for lessions, or check our calendar for upcomming events" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<link rel="icon" type="img/ico" href="images/favicon.ico">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" />
<link rel="stylesheet" type="text/css" href="css/footer-distributed.css" />
<!-- Boostrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="include/jssor.slider-25.0.7.min.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
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
            /*remove responsive code if you don't want the slider scales while window resizing*/
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
<style>
        /* jssor slider loading skin double-tail-spin css */

        .jssorl-004-double-tail-spin img {
            animation-name: jssorl-004-double-tail-spin;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-004-double-tail-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssorb051 .i {position:absolute;cursor:pointer;}
        .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;stroke:#000;stroke-width:400;stroke-miterlimit:10;stroke-opacity:0.5;}
        .jssorb051 .i:hover .b {fill-opacity:.7;}
        .jssorb051 .iav .b {fill-opacity: 1;}
        .jssorb051 .i.idn {opacity:.3;}

        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
</style>
<style>
	
	.page-container {
		max-width: 960px;	
		margin-left: auto;
		margin-right: auto;
		
	}
	#mega-title {
		font-size: 48pt;
		max-width: 100%;
		width: 100%;
	}
	#gimme-space {
		margin-left: 25px;	
	}
	.fa {
			
	}
</style>
<title>Appassionato Music Studio</title>
</head>