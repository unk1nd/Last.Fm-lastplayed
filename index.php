<!--  

 	Mikael Bendiksen (c) 2011 	
 	Last.FM php script for last played.
 
 	This is just a simple script i made just for fun.
 	If your cloning this source.. please give me a holla.
 
 	duuxman@gmail.com if you have any ideas about changes or bugs to report.
	
-->


<META HTTP-EQUIV=Refresh CONTENT="30">

<?

	// change your username here
	$username = duuxfantomet;

	$request_url = 'http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=' . $username . '&api_key=b25b959554ed76058ac220b7b2e0a026';
	$xml = simplexml_load_file($request_url);
	$title = $xml->recenttracks->track->name;
	$artist = $xml->recenttracks->track->artist;

?>


	<div style="
		border: 1px solid black;
		width: 400px;
		height: 100px;
		margin: 10px 10px 10px 10px;
		padding: 10px 10px 10px 10px;
		background: gray;
	">

<?
	echo "<font size='6'>Now Playing:</font>";
	echo "<br><br><img src='http://cdn.last.fm/flatness/global/icon_eq.gif'>  $artist <strong>-</strong> $title";
?>

</div>
