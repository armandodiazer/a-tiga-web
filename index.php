<?php
include_once 'php_scripts/db.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>ATIGA</title>
        <link rel="stylesheet" href="StyleIndex.css">
        <link rel="stylesheet" href="ResponsiveIndex.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>
    <body>
        <header>
            <div class="container">
                <h2>WELCOME TO ATIGA WEBSITE<span>.</span></h2>
            </div>
        </header>
        <div class="top-wrapper">
            <div class="container">
                <h1>YOU ARE NOT ALONE</h1>
                <h1>WE ARE HERE FOR YOU</h1>
            </div>
        </div>
        <div class="content">
            <div class="list-container">
                <div class="list-content">
                    <a href="index.php" class="btn home">HOME</a>
                </div>
                <div class="list-content">
                    <a href="#" class="btn news">NEWS</a>
                </div>
                <div class="list-content">
                    <a href="about.php" class="btn about">ABOUT US</a>
                </div>
            </div>
        </div>
        <div class="item">
                <div class="container">
                   
                   <?php

                		$sql = "SELECT * FROM blog_data;";
                		$run = mysqli_query($conn, $sql);
                		while ($rows = mysqli_fetch_array($run)){

                			$blogTitle = strtoupper($rows['blogTitle']);
                			$blogDesc = substr($rows['blogDesc'],0,300);

                			?>
                			<div class="items">
                        		<div class="list-item">
	                            	<div class="list-items">
	                                	<img src="https://i.pinimg.com/564x/ba/b5/ab/bab5abd5f2206dd1156c70c8e36d8354.jpg">
	                                	<h2><?php echo $blogTitle; ?></h2>
	                                	<p><?php echo $blogDesc; ?></p>
	                            	</div>
                        		</div>
                    		</div>
                	<?php	}
                	?>	



                    <a href="#" class="btn-lihat">LIHAT LAINYA</a>
                </div>
            </div>
        <footer>
            <div class="container">
                <h1>ATIGA<span>.</span></h1>
                <p>@2021 Powered by ATIGA Team</p>
            </div>
        </footer>
    </body>
</html>