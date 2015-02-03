<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>My page</title>
 
<!-- CSS dependencies -->
<!--<link rel="stylesheet" type="text/css" href="bootstrap.min.css">-->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>

 
<!-- JS dependencies -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="bootstrap-3.0.0.min.js"></script>
 
<!-- bootbox code -->
<script src="bootbox.min.js"></script>
<script>



$(document).on('popupafteropen', '.ui-success', function() {
 setTimeout(function () {
  $(this).success('close');
 }, 5000);
});	
	
!function(d,s,id
)
{
var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id))
{js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);
}
}
(document, 'script', 'twitter-wjs');


$( document ).ready(function()  {
bootbox.dialog({
message: "In the meantime,follow Header Junction for updates on the latest and hottest Headers!",
title: "Uploading Header to your Twitter Profile...",
buttons: {
success: {

label: "Follow @headerjunction",
className: "btn-primary",
callback: function() {
 window.location.assign("https://twitter.com/TweetHeaders1")
}
}
}
});
});

</script>

</body>
</html>