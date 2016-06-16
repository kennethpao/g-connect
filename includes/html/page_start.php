<?php
include ("includes/connect.php");
?>
<!DOCTYPE htm>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>G-connect</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/business-casual.css" rel="stylesheet">
    <link rel="icon" href="img/intro-pic.jpg">
</head>

<body>

    <div class="brand">G-connect</div>
    <div class="address-bar"></div>
    
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="travel_guides.php">Travel guides</a></li>
                    <li><a href="members.php">Meet members</a></li>
                    <li><a href="forums.php">Forums</a></li>
                    <li><a href="help.php">Help</a></li>
                    <li>
                        <?php
                        $query = "SELECT find_name FROM find" ;
                        $result = mysql_query($query) or die(mysql_error()."[".$query."]");
                        ?>

                        <select name="categories">

                        <?php
                        while ($row = mysql_fetch_array($result)){
                        ?>

                        <option value=" <?php $row['path']; ?> ">
                        <?php
                        echo $row['find_name'];
                        ?>
                        </option>

                        <?php
                        }
                        ?>
                        
                        </select>
                    </li>
                
					
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>