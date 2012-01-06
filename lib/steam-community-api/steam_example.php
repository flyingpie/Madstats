<?php
//====================================================================================
// PHP STEAM COMMUNITY API EXAMPLE
//====================================================================================
// Author:	|LBTG|Regime (regime@livebythegun.com)
// Version:	0.1
// Date:	14/06/2009
//====================================================================================
// Notes:	This is an example for use with the PHP Steam Community API class 
// that allows you to query the Steam Community API. Note that this example is exactly 
// that.. an example. Although the provided class validates the parameters you provide 
// to it as input, it does not do anything to sanitize the data returned by the API. 
// This is something you should always do yourself in your code!
// THE SAMPLE DOES NOT USE ALL THE PROVIDED DATA. PLEASE USE print_r TO FIND THE REST.
//====================================================================================
// Thanks:	Many thanks to Valve for providing us with the Steam Community API.
//====================================================================================
// http://www.steampowered.com/
// http://www.steamcommunity.com/
// http://www.livebythegun.com/
//====================================================================================

//- Include the Steam API class
include 'steam_api.php';

//- Store the name of this file for later use
$self = basename($_SERVER['SCRIPT_FILENAME']);

//- If no steam id is set, display a form to enter one
if (!isset($_POST['steamid']))
{
	$output =	'<form action="' . $self . '" method="post">' .
			'<p>Page can be used to check Steam Community info for a steam id (ie. STEAM_0:1:23456)<br /><br />' .
			'Steam ID: <input type="text" name="steamid" />' .
			'<input type="submit" value="get data" /></p>' . 
			'</form>';
}
//- If a steam id is set, get the data from the Steam Community API
else
{
	//- Get the steam id from the post data
	$steam_arg = $_POST['steamid'];

	//- The Steam Community API class can return exceptions, so call it from a try/catch block
	//- For more information on php exception handling, go here: http://www.w3schools.com/php/php_exception.asp
	try {
		//- Create a new SteamAPI object for the supplied steam id
		$Steam = new SteamAPI();

		//- If needed it is possible to set the timeout for connections made from the webserver to the Steam Community server
		//- The default value is a timeout of 3 seconds
		$Steam->timeout = 3;

		//- Use the SteamAPI object to get the profile data
		$profile_data = $Steam->get_profile_data($steam_arg);
		
		//- The SteamAPI object also allows for translation of regular Steam ID's to 64 bit Steam ID's used by the 
		//- steam community. This may be useful if you just want to create a link to a steam profile and don't need
		//- a full blown API query
		$steam_id64 = $Steam->calculate_steamid64($steam_arg);
		
		//- It also allows for translation of 64 bit Steam ID's to regular Steam ID's.
		$steam_id = $Steam->calculate_steamid($steam_id64);

	}catch (Exception $e) {

		//- If there is a problem, display the error message
		//- This could be anything from a malformed steam id to being unable to connect to the Steam Community API
		echo 	'ERROR: ' . $e->getMessage() . '<br />' . 
			'------------------<br />' .
			'<a href="' . $self . '">[back]</a>';

		exit();
	}

	//- If the profile_data['steamID'] field does not exist, things will fail
	if (!$profile_data['steamID'])
	{
		echo	'This user does not have his/her Steam profile set up.<br />' . 
			'------------------<br />' .
			'<a href="' . $self . '">[back]</a>';
		print_r($profile_data);

		exit();
	}

	//- The array $profile_data now holds the Steam Community profile data
	//- Use...
	//- print_r($profile_data); 
	//- ...to display what data is in the array exactly. 

	//- Construct the profile data output
	$output = 	'<p>Steam data for steam id ' . $steam_arg . '<br />' .
			'------------------<br />' .
			'Avatar<br />' .
			'------------------<br />' .
			'<img src="' . $profile_data['avatarFull'] . '" /><br />' .
			'------------------<br />' .
			'Profile info<br />' .
			'------------------<br />' .
			'Name: <a href="http://steamcommunity.com/profiles/' . $profile_data['steamID64'] . '">' . 
			$profile_data['steamID'] . '</a><br />' .
			'Online status: ' . $profile_data['onlineState'] . '<br />' .
			'VAC status: ' . ($profile_data['vacBanned'] == 0 ? 'OK' : 'BANNED') . '<br />';
			
	//- Check if this is a public profile
	if ( $profile_data['visibilityState'] == '3' )
	{
		//- Some stuff that's only available in public profiles
		$output .=	'Member since: ' . $profile_data['memberSince'] . '<br />' .
				'Steam Rating: ' . $profile_data['steamRating'] . '<br />' .
				'Hours played: ' . $profile_data['hoursPlayed2Wk'] . '<br />';

		if ($profile_data['favoriteGame'])
		{
			//- Get the favorite game data array which is stored in the profile data array
			$favorite_data = $profile_data['favoriteGame'];

			//- The favorite game array is a single dimensional array. The same applies for inGameInfo which provides
			//- info about the ingame status (server being played on etc.)
			$output .= 'Favorite steam game: ' . $favorite_data['name'] . '<br />';
		}

		//- Friends are also only visible in public profiles
		$output .=	'------------------<br />' .
				'Friends<br />' .
				'------------------<br />';

		if ($profile_data['friends'])
		{
			//- Get the friend data array which is stored in the profile data array
			$friend_data = $profile_data['friends'];

			//- Loop through the friends. The friends are stored in the array, as an array
			//- The same applies for weblinks, groups and mostPlayedGames. If those are present (check if they are first)
			//- then they are multi dimensional arrays that you can loop through. $friend_data[0]['steamID'] would hold
			//- the steam ID for the first friend, etc, etc. 
			foreach ($friend_data as $friend)
			{
				$output .= $friend['steamID'] . ' - ' . $friend['onlineState'] . '<br />';
			}
		}
	}
	else
	{
		$output .=	'<b>Profile is set to private</b><br />';
	}

	//- Add a link so people are able to go back to the form
	$output .=	'------------------<br />' .
			'<a href="' . $self . '">[back]</a></p>';
}

//- I like my XHTML valid
$header = 	'<?xml version="1.0" encoding="utf-8"?>' .
		'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">' . 
		'<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">' . 
		'<head><title>PHP Steam Community API example page</title></head><body>' .
		'<h1>PHP Steam Community API example page</h1>';
$footer = 	'<div><a href="http://www.livebythegun.com/" style="display: none">|LBTG| CS:S Gaming Clan</a></div></body></html>';

//- Print the output
echo $header . $output . $footer;

?>
