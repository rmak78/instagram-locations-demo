<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Instagram Location API Demo</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="index,follow" />
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<script type="text/javascript" src="js/sutlejInstagramFeed.js"></script>
</head>

<body>
<div class="container">
   <div class="row" id="search">
   <div class="form-horizontal">
   <div class="form-group">
   <label class="col-md-2" for="locationID">LocationID</label><input class="form-control" type="text" name="locationID" value="536602" id="locID" maxlength="30" />
  </div>
  <div class="form-group">
   <label class="col-md-2" for="clientID">InstagramClientID</label><input class="form-control" type="text" name="clientID" value="d1b3342d345e4b0598135facb88d68b8" id="clientID" maxlength="30" />
   </div>
    <div class="form-group"> 
	<input class="btn col-md-offset-2 btn-primary" type="button" name="getPhotos" id="getPhotos" value="Get Photos" />
    </div>
	</div>
   </div>
   <br/>
  <div class="row" id="sutlejInstagramFeed"></div>
 </div>
<script type="text/javascript">
$('#getPhotos').click(function(){
	var loc_id = parseInt($('#locID').val());
	var client_id = $('#clientID').val();
	console.log(loc_id);
	console.log(client_id);
	$('#sutlejInstagramFeed').html('');
   var feed = new sutlejInstagramFeed({
        get: 'location',
        locationId: loc_id,
		limit: 10,
		resolution: "thumbnail",
		sortBy:'most-recent',
		target: 'sutlejInstagramFeed',
        clientId: client_id,
		template: '<div class="col-md-3"><a href="{{link}}" class="thumbnail"><img src="{{image}}" alt="{{caption}}" ></a><p> Caption:{{caption}}</p> <p>Location: <strong>{{location}}</strong></p></div>'
    });
    feed.run();
	consol.log (feed);
});
    

</script>
</body>
</html>
