<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Ify music player</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../lib/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">

	<link rel="stylesheet" href="../lib/ify/style4.css">
</head>


<body><div id="ify">

<!-- Header: Begin  -->
	<header class="row-fluid navbar-fixed-top" id="ui_Player">
		<div class="span12" id="ui_Header">
			<div class="row-fluid">

					<div class="btn-group">
						<a href="#" id="but-prev" class="btn"><i class="icon-backward"></i></a>
						<a href="#" id="but-play" class="btn"><i class="icon-play"></i></a>
						<a href="#" id="but-next" class="btn"><i class="icon-forward"></i></a>
					</div>

					<div class="input-prepend form-search input-append" id="search-bar">
						<button class="btn">Global</button>
						<input type="text" data-provide="typeahead">
						<button type="submit" class="btn submit"><i class="icon-search"></i></button>
					</div>
					
					<div class="audio-player">
					</div>

			</div>
		</div>
	</header>

<!-- Main: Begin  -->
    	<div class="row-fluid" id="main-wrapper">

			<nav>
<!-- Pane: Left -->
			Left Pane
			</nav><aside>
<!-- Pane: Right -->
			aside
			</aside>

    	</div>

<!-- ui_Footer: BEGIN -->
	<footer class="row-fluid">
		<div class="span12">
			<p class="">
				Footer :-)
			</p>
		</div>
	</footer>



    </div>

		<!-- Scripts -->
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script type="text/javascript" src="../lib/bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="../lib/sm2/soundmanager2.js"></script>

		<!--script type="text/javascript" src="../lib/ify/scripts4.js"></script-->
		<script type="text/javascript">
			
 $(document).ready(function() {
    $( "nav" ).resizable({
		handles: "e",
    });
//    $( "aside" ).resizable({
//		handles: "w",
//    });


	$("nav").on('resize', function(e, ui) {
		console.dir( "Parent " + $("#main-wrapper").width() )

		$('aside').width($('#main-wrapper').width() - $("nav").width());
	});


//	$("aside").on('resize', function(e, ui) {
//		console.dir( "Parent " + $("#main-wrapper").width() )
//
//		$('nav').width($('#main-wrapper').width() - $("aside").width());
//	});

  });

		</script>

</div></body>
</html>

