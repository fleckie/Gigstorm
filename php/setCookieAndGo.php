<?php
$cookieName = $_GET["name"];
$cookieValue = $_GET["value"];
setcookie($cookieName, $cookieValue, time() + (86400 * 30), "/");
echo "
<script>
window.location.href='/pages/band_search.html';
</script>
";
?>