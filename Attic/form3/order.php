<head>
	<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	<script>
		google.load("jquery", "1.5");
	</script>
	<script type="text/javascript" src="jquery.multipage.js"></script>
	<link rel="stylesheet" href="jquery.multipage.css" />

	<script type="text/javascript">
		$(window).ready(function() {
                        $('#multipage').multipage({transitionFunction:transition,stateFunction: textpages});
			$('form').submit(function(){ alert("Submitted!"); return false;});
		});
		
		function generateTabs(tabs) { 
		
			html = '';
			for (var i in tabs) { 
				tab = tabs[i];
				html = html + '<li class="multipage_tab"><a href="#" onclick="return $(\'#multipage\').gotopage(' + tab.number + ');">' + tab.title + '</a></li>';				
			}
			$('<ul class="multipage_tabs" id="multipage_tabs">'+html+'<div class="clearer"></div></ul>').insertBefore('#multipage');
		}
		function setActiveTab(selector,page) { 
			$('#multipage_tabs li').each(function(index){ 
				if ((index+1)==page) { 
					$(this).addClass('active');
				} else {
					$(this).removeClass('active');
				}
			});			
		}
		
		function transition(from,to) {
			$(from).fadeOut('fast',function(){$(to).fadeIn('fast');});
		
		}
		function textpages(obj,page,pages) { 
			$(obj).html(page + ' of ' + pages);
		}

	</script>
	<style type='text/css'>
		body { font-family:helvetica;}

		
		p.input label { display:block; }
		
		
		p.input input { width: 200px; }
		.clearer { clear:both; width:100%; height:0px; } 
	</style>
</head>

<body>
	<h1>jQuery Multipage Form Plugin</h1>
	<p>Add custom transitions to your form</p>

	
        <a href="example.html">Turn into multipage form</a><br />
            OR<br />
        <a href="exampletabs.html">Turn into tabbed form</a>
	
    
	<div style="width:500px; margin:20px; padding:10px; border:20px solid #F0F0F0;">
	<form id="multipage">
		<fieldset id="page_one">
			<legend>Customer Type</legend>
			<p class="input">
			  <input type="radio" name="radio" id="customerType" value="customerType">
			Dentist</p>
			<p class="input">
			  <input type="radio" name="radio" id="customerType2" value="customerType">
			Dental Staff</p>
			<p class="input">
			  <input type="radio" name="radio" id="customerType3" value="customerType">
			Patient</p>
			<p class="input">
			  <input type="radio" name="radio" id="customerType4" value="customerType"> 
			  Jeweler
</p>
		
		</fieldset>
		<fieldset id="page_two">
			<legend>About You</legend>
			<p class="input">
				<label for="name">Name</label>
				<input name="name" id="name" value="" />
			</p>	

			<p class="input">
				<label for="loc">Location</label>
				<input name="loc" id="loc" value="" />
			</p>		
			
			<p class="input">
				<label for="tags">
				Tags</label>
				<input name="tags" id="tags" value="foo,bar,baz,booda" />
			</p>
		</fieldset>
		<fieldset id="page_three">
			<legend>Stuff</legend>
			<p class="input">
				<label for="age">Age</label>
				<input name="age" id="age" value="" />
			</p>	
			<p class="input">
				<label for="loc">Location</label>
				<input name="loc" id="loc" value="" />
			</p>		
		</fieldset>
		<input type="submit" value="Create User" />
	</form>
	</div>
	


</body>