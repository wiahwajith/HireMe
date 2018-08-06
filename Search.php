<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	
	.panel{
		border:solid;
		border-width: 0.1px;
		border-color: #cacaca;
		width: 1000px;
		height: 200px;
		margin-left: 60px;
		margin-right: 60px;
		margin-bottom: 10px;
		margin-top: 10px;
		padding: 10PX;
	}
	.profile {
		position: relative;
		max-width: 20%;
		width: 180PX;
		height: 170px;
		border-style: solid;
		border-width: 1px;

	}

	.star-rating {
  		line-height:32px;
 		 font-size:1.25em;
    }

	.star-rating .fa-star{color: yellow;}

	.con_con{
		position: left:200px;
	}
	
	.details{
		position: relative;
		left: 200px;
		bottom: 160PX;
		padding: 15PX;
		width: 750px;
		height: 150px;
		border-style: solid;
	}

	.oderform
	{
		position: relative;
		left: 640px;
		bottom: 130px;
	}

	.itemContent{
		height: 200px;


	}

	.footer1{
		
		bottom: 0;

	}

		

</style>
<body>

	<?php include 'header.php' ?>
		





<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT NO, NAME_WITH_INITIALS, INDEX_NO FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "<br> id: ". $row["NO"]. " - Name: ". $row["NAME_WITH_INITIALS"]. " " . $row["INDEX_NO"] . "<br>";

        echo "<br>	
        		<div class=itemContent>	    
				<img class=profile src=themes/Hireme/assets/images/favicon.png>
					<div class=details>
						<div class=conteiner>
							<h4>". $row["NAME_WITH_INITIALS"]. " </h4>
							<h6>location here". $row["NO"]. "</h6>
							<h6>rating</h6>
							<span></span>
						</div>

						<form class=oderform>
						<H2>10$/h</H2>
						<button type=button class=btn btn-lg btn-primary>ODER</button>
						</form>
						<br>
                        </div>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

<!-- search ithem backup

					<div class="con_con">
						<div class="panel">
						  <div class="panel panel-default">
						   <span class="border-left-0">
						    <div class="panel-body">
						    	<img class="profile" src="themes/Hireme/assets/images/favicon.png">
					<div class="details">
						<div class="conteiner">
							<h4>". $row["NAME_WITH_INITIALS"]. " </h4>
							<h6>location here". $row["NO"]. "</h6>
							<h6>rating</h6>
							<span></span>
						</div>

						<form class="oderform">
						<H2>10$/h</H2>
						<button type="button" class="btn btn-lg btn-primary">ODER</button>
						</form>

                     "





					<!-- star rating -->
		<div class="container">
		  <div class="row">
		    <div class="col-lg-12">
		      <div class="star-rating">
		        <span class="fa fa-star-o" data-rating="1"></span>
		        <span class="fa fa-star-o" data-rating="2"></span>
		        <span class="fa fa-star-o" data-rating="3"></span>
		        <span class="fa fa-star-o" data-rating="4"></span>
		        <span class="fa fa-star-o" data-rating="5"></span>
		        <input type="hidden" name="whatever1" class="rating-value" value="2.56">
		      </div>
		    </div>
		  </div>
 		</div>
	   </div>	
	  </div>
	</div>

<footer class="footer1">
	
	<?php  include 'flooter.php' ?>
</footer>
</body>
<script type="text/javascript">
	var $star_rating = $('.star-rating .fa');

var SetRatingStar = function() {
  return $star_rating.each(function() {
    if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
  //  </span>	
		//     </div>
		//   </div>
		// </div>
		
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
};

$star_rating.on('click', function() {
  $star_rating.siblings('input.rating-value').val($(this).data('rating'));
  return SetRatingStar();
});

SetRatingStar();
$(document).ready(function() {

});
</script>
</html>