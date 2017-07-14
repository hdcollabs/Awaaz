<?php session_start();
	// if(isset($_SESSION['logged'] || 1==1))
	// 	{}else{header('Location: index.php'); }
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Awaaz | A Debating Platform</title>

		<link href="https://fonts.googleapis.com/css?family=Hammersmith+One|Open+Sans" rel="stylesheet">
	  <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	  <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative:700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/normalize.css">

    <link rel="icon" type="image/png" href="http://www.tsrs.org/wp-content/themes/shri/images/favicon.png">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="css/signedin.css">

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />

    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto+Slab:300" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>
<body>
    <div class="nav">
        <h1 style="font-family:'Raleway';color:white;position:relative;bottom:8px;left:10px;">Awaaz.</h1>
        <button class="postdebate">Start a Debate</button>
        <div class="profile">
            <img class="profileclick" src="http://www.opinionsup.com/images/default-profile-picture_new.png" />
              <div class="myaccoptionsdiv" id="myaccoptions" style="display:none;">
                <i class="fa fa-3x fa-caret-up triarrup" aria-hidden="true"></i>
                <p class="accname">Dhruv Yadav</p>
                <p class="accemail">dhruv1103@gmail.com</p>
                <a class="accprofile" href="profile.php">Edit Profile</a><span style="font-size:16px;position:relative;bottom:5px;">/</span><a style="margin:5px;font-size:16px;position:relative;bottom:5px;" href="profile.php?changepass">Change Password</a>
                <div class="acclogoutsection">
                  <hr />
                  <a class="acclogoutbtn" href="backend/logout.php" style="text-decoration:none;color:#fff;">Log Out</a>
                </div>
              </div>
        </div>
    </div>
    <div class="tabs">
        <h1 id="tabstitle">Trending Topics</h1>
        <div class="topiclist">
            <div class="tabelem">
                <span class="tabelemtitle">Are reservations a bla bla?</span>
                <span class="tabelemdesc">Should we continue with this madness?</span>
                <span class="tabelemdetails">By Dhruv Yadav, 5 hours ago</span>
            </div>
            <div class="tabelem">
                <span class="tabelemtitle">Kill Trump?</span>
                <span class="tabelemdesc">Does he deserve to live or should he be assasinated...</span>
                <span class="tabelemdetails">By Donald Trump, 2 minutes ago</span>
            </div>
            <div class="tabelem">
                <span class="tabelemtitle">Is the Canadian PM mad?</span>
                <span class="tabelemdesc">He has set the world record for avoiding questions...</span>
                <span class="tabelemdetails">By Hritik Sapra, 2 days ago</span>
            </div>
        </div>
    </div>
    <div class="maintab">
        <h1 id="debatetitle">Active Debates</h1>
        <button class="postdebate">Start a Debate</button>
    </div>

    <script>
    $(document).ready(function(){
        $('.profileclick').click(function(){

        });
    });
    $(document).ready(function () {
  $(".profileclick").click(function()
{
  if( $(".myaccoptionsdiv").is(":visible"))
  {
    $(".myaccoptionsdiv").hide();
  }else{$(".myaccoptionsdiv").show();}
    $(".profileclick").on("click",function(){
      if($(".myaccoptionsdiv").is(":visible"))
      {
          $(".myaccoptionsdiv").hide();
      }else {
        $(".myaccoptionsdiv").show();
      }
    });
});
$(document).mouseup(function (e)
{
var container = $(".myaccoptionsdiv");

if (!container.is(e.target)
    && container.has(e.target).length === 0)
{
    container.hide();
}
});});
    </script>
</body>
</html>
