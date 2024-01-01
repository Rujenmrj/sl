<?php
echo "<h1>Welcome, ".$_SESSION["username"];
echo "</h1>";
echo "<a href=\"logout.php\">Logout</a>";
echo "<hr>";
echo "<a href=\"dashboard.php\">Dashboard |</a>";
echo "<a href=\"user.php\">User |</a>";
echo "<a href=\"category.php\">Category |</a>";
echo "<a href=\"post.php\">Posts |</a>";
echo "<hr>";
?>