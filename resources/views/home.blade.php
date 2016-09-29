@extends('layouts.site')
@section('content')
<div class="w3-row">
	<div class="w3-col l6 w3-center section">
		<h1>HTML</h1>
		<p>The language for building web pages</p>
		<a href="html/default.html" class="w3-btn sectionbtn">LEARN HTML</a>
		<a href="tags/default.html" class="w3-btn sectionbtn">HTML REFERENCE</a>
	</div>

	<div class="w3-row w3-light-grey">
		<div class="w3-col l6 w3-center section css-hide-when-large">
			<h1>CSS</h1>
			<p>The language for styling web pages</p>
			<a href="css/default.html" class="w3-btn sectionbtn">LEARN CSS</a>
			<a href="cssref/default.html" class="w3-btn sectionbtn">CSS REFERENCE</a>    
			<div class="w3-col l6 w3-center section css-hide-when-small">
				<h1>CSS</h1>
				<p>The language for styling web pages</p>
				<a href="css/default.html" class="w3-btn sectionbtn">LEARN CSS</a>
				<a href="cssref/default.html" class="w3-btn sectionbtn">CSS REFERENCE</a>  
			</div>
		</div>
		<div class="w3-row">
			<div class="w3-col l6 w3-center section">
				<h1>JavaScript</h1>
				<p>The language for programming web pages</p>
				<a href="js/default.html" class="w3-btn sectionbtn">LEARN JAVASCRIPT</a>
				<a href="jsref/default.html" class="w3-btn sectionbtn">JAVASCRIPT REFERENCE</a>  
			</div>
		</div>
		<div class="w3-row w3-light-grey">
			<div class="w3-col l4 w3-center section onethird">
				<div class="w3-card-2 w3-white">
					<h2>SQL</h2>
					<p>A language for accessing databases</p>
					<a href="sql/default.html" class="w3-btn sectionbtn">LEARN SQL</a>
				</div>
			</div>
			<div class="w3-col l4 w3-center section onethird">
				<div class="w3-card-2 w3-white">
					<h2>PHP</h2>
					<p>A web server programming language</p>
					<a href="php/default.html" class="w3-btn sectionbtn">LEARN PHP</a>
				</div>
			</div>
			<div class="w3-col l4 w3-center section onethird">
				<div class="w3-card-2 w3-white">
					<h2>jQuery</h2>
					<p>A JavaScript library for developing web pages</p>
					<a href="jquery/default.html" class="w3-btn sectionbtn">LEARN JQUERY</a>
				</div>
			</div>
		</div>
		<div class="w3-row">
			<div class="w3-col l4 w3-center section onethird">
				<h2>W3.CSS</h2>
				<p class="w3-large">A modern CSS framework for faster and better responsive web sites</p>
				<a href="w3css/default.html" class="w3-btn sectionbtn">LEARN W3.CSS</a>
			</div>
			<div class="w3-col l4 w3-center section onethird">
				<h2>Color Picker</h2>
				<a href="colors/colors_picker.html"><img style="width:150px;height:128px;" src="{{ asset('sites/images/colorpicker.png')}}"></a>
			</div>
			<div class="w3-col l4 w3-center section onethird">
				<h2>Bootstrap</h2>
				<p class="w3-large">Bootstrap is a CSS framework for designing better web pages</p>
				<a href="bootstrap/default.html" class="w3-btn sectionbtn">LEARN BOOTSTRAP</a>
			</div>
		</div>
	</div>		
</div>	
@endsection
