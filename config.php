<?php
$db_url = "localhost";
$db_name = ""; //database name
$db_username = ""; //database account username
$db_password=""; //database account password
$epg_url = ""; //epg xml url (http://link4tv.biz:2082/get.php?username=Ahmed11223&password=8ldamtfwba&type=m3u_plus&output=mpegts)
$epg_valid_hours = "+12 hours"; //if database has epg available for less than 12 hours it will be updated. Alternative values: "+1 day", "+2 days", "+1 week" etc etc

//To avoid wasting server resources, epg update will be triggered when an user login and database has less than 12 hours of programmes.

?>