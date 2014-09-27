<?
 class Web
 {

 	public function ActivePage($value,$empty,$current,$active)
 	{
 		if($current==$active)
 		{
 			$result = $value;
 		}
 		elseif($current==NULL and $active == "home")
 		{
 			$result = $value;
 		}
 		else
 		{
 			$result = $empty;
 		}
 		return $result;
 	}

 }

$web = new Web;
 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="static/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="static/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
    <link href="static/css/layouts.css" rel="stylesheet">
    <link href="static/css/main_styles.css" rel="stylesheet">
  </head>

  <body>

    <div class="topnav-masthead">
      <div class="container">
        <nav class="topnav-nav">
        	<div class="floatleft">
        		<a class="topnav-nav-item <?=$web->ActivePage("active","",$_GET["mode"],"home")?>" href="index.php">Home</a>
        		<a class="topnav-nav-item <?=$web->ActivePage("active","",$_GET["mode"],"topics")?>" href="index.php?mode=topics">Topics</a>
        		<a class="topnav-nav-item <?=$web->ActivePage("active","",$_GET["mode"],"tags")?>" href="index.php?mode=tags">Tags</a>
        	</div>
        	<div class="floatright">
        		<a class="topnav-nav-item <?=$web->ActivePage("active","",$_GET["mode"],"register")?>" href="index.php?mode=register">Register</a>
        		<a class="topnav-nav-item <?=$web->ActivePage("active","",$_GET["mode"],"login")?>" href="index.php?mode=login">Login</a>
        		<!--<button type="button" class="btn btn-success btn-xs" style="position: relative;top: -2px;">Create New Topic</button>-->
        	</div>
        	<div class="clearfix"></div>
        </nav>
      </div>
    </div>

    <div class="container">

     
     
   