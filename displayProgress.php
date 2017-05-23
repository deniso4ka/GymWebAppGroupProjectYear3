
<!DOCUMENT html>
<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Display Progress </title>
		<script src = "js/jquery.js"> </script>
			<style>
			@import "css/styleMemberPage.css";
			@import "css/jquery-bootstrap.css";
			@import "css/bootstrap.min.css";
			@import "css/navigation.css";
			@import "css/image_slider.css";
			@import "css/main.css";
			@import "css/footer.css";
			@import "css/table.css";
			

			</style>
		</head>
		<body>
	<?php

			require_once('include/current_page.php');
			//set the current page
    		$login_current = 'class = "active"';
			require_once("include/navigation_part.php");
	?>

	
		<script src = "js/jquery.js"> </script>
		<script src = "js/bootstrap.min.js"> </script>
		
		
		<div class="container" id="progressTable">
  <h2 class="yellow">Progress Table</h2>
         
  <table class="table">
    <thead>
      <tr>
        <th>Something</th>
        <th>Something</th>
        <th>Something</th>
		 <th>Something</th>
		  <th>Something</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="yellow">Something</td>
        <td class="yellow">Something</td>
        <td class="yellow">Something</td>
		<td class="yellow">Something</td>
		<td class="yellow">Something</td>
      </tr>
      <tr>
        <td class="yellow">Something</td>
        <td class="yellow">Something</td>
        <td class="yellow">Something</td>
		<td class="yellow">Something</td>
		<td class="yellow">Something</td>
      </tr>
      <tr>
        <td class="yellow">Something</td>
        <td class="yellow">Something</td>
        <td class="yellow">Something</td>
		<td class="yellow">Something</td>
		<td class="yellow">Something</td>
      </tr>
    </tbody>
  </table>
</div>

		
		
<?php
		
	require_once("include/footer_part.php");	
		
?>
		
    </body>
</html>