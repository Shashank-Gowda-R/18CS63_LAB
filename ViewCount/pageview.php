<!-- Write a PHP program to keep track of the number of visitors visiting the web page and to display 
this count of visitors, with proper headings -->
<?php
  session_start();

  // Check if the session variable for page views is set
  if(isset($_SESSION['page_views'])) {
    $_SESSION['page_views']++;
  } else {
    $_SESSION['page_views'] = 1;
  }

  // Display the page view count
  // echo "Page views: " . $_SESSION['page_views'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Display Page Views in HTML</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <div>
    <p class="heading">Welcome to my portfolio</p>
    <p class="count" >Number of viewers: <?php echo $_SESSION['page_views']; ?></p>
  </div>
</body>
</html>
