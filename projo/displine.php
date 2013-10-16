<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Disciplinary</title>

<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>


<script type="text/javascript">

$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:11,
		animSpeed:600,
		pauseTime:2000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false, 
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>

</head>

<body>
        <div id="slider">
            <a href="#"><img src="images/slideshow/01.jpg" alt="" title="Lorem ipsum dolor sit amet." /></a>
            <a href="#"><img src="images/slideshow/02.jpg" alt="" title="Nullam ante leo, consectetur eget." /></a>
            <a href="#"><img src="images/slideshow/03.jpg" alt="" title="Suspendisse sit amet enim elit." /></a>
            <a href="#"><img src="images/slideshow/04.jpg" alt="" title="Nulla faucibus luctus quam eget placerat." /></a>
            <a href="#"><img src="images/slideshow/05.jpg" alt="" title="Phasellus aliquet viverra posuere. " /></a>
        </div>



<form name="frmdisplinary">
<p>
Adm Number:
  <input type="text"  name="txtadm_no"/>
</p>
<p>
Date :    
  <input type="text" name="txtdate" />
</p>
<p>
Category:<input type="text" name="txtcategory"  />
</p>
<p> Details :   <textarea></textarea> 
  <br>
</p>
<br />
<input type="submit" value="SUBMIT" />
<input type="reset"   value="NEW" />
</form>
</body>
</html>
