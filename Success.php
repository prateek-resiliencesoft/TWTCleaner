<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>My page</title>
 
<!-- CSS dependencies -->
<!--<link rel="stylesheet" type="text/css" href="bootstrap.min.css">-->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body >


<!-- JS dependencies -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="bootstrap-3.0.0.min.js"></script>

<!-- bootbox code -->
<script src="bootbox.min.js"></script>
<script>

$( document ).ready(function() {
bootbox.dialog({
message: "Your Twitter Header has been updated! Go to your Twitter Profile to check it out!",
title: "Success!",
buttons: {
success: {
label: "Go to your Twitter Profile>!",
className: "btn-primary",
callback: function() {
 window.location.assign("http://twitter.com")
}
},
main: {
label: "Close!",
className: "btn-success",
callback: function() {
window.close();
}
}
}
});
});


</script>
</body>
</html>