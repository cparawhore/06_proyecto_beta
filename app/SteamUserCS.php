<?php
// Disable XML warnings to avoid problems when SteamCommunity is down
libxml_use_internal_errors(true);
// Use SteamUtility to fetch URLs and other stuff
require_once 'SteamUtility.php';

/**
* SteamUser - Representation of any Steam user profile
*
* @category   SteamAPI
* @copyright  Copyright (c) 2012 Matt Ryder (www.mattryder.co.uk)
* @license    GPLv2 License
* @version    v1.2
* @link       https://github.com/MattRyder/SteamAPI/blob/master/steam/SteamUser.php
* @since      Class available since v1.0
*/
class SteamUser {

	private $userID;
	private $vanityURL;
	private $apiKey;

	/**
	 * Constructor
	 * @param mixed  $id      User's steamID or vanityURL
	 * @param string $apiKey  API key for http://steamcommunity.com/dev/
	 */
	function __construct($id, $apiKey = null) {

		if(empty($id)) {
			echo "Error: No Steam ID or URL given!", PHP_EOL;
			return NULL;
		}
		if(is_numeric($id)) {
			$this->userID = $id;
		}
		else {
			$this->vanityURL = strtolower($id);
		}

		if (!is_null($apiKey)) {
			$this->apiKey = $apiKey;
		}

		$this->getProfileData();
	}

	/**
	 * GetProfileData
	 * - Accesses Steam Profile XML and parses the data
	 */
	

	public function getProfileData() {
		
		
		//Set Base URL for the query:
		if(empty($this->vanityURL)) {
			$base = "http://steamcommunity.com/profiles/{$this->userID}/?xml=1";
		} else {
			$base = "http://steamcommunity.com/id/{$this->vanityURL}/?xml=1";
		}

		try {
			$content = SteamUtility::fetchURL($base);
			if ($content) {
				$parsedData = new SimpleXMLElement($content);
			} else {
				return null;
			}
		} catch (Exception $e) {
			//echo "Whoops! Something went wrong!\n\nException Info:\n" . $e . "\n\n";
			return null;
		}

		if(!empty($parsedData)) {
			$datosCuenta = array(
			'steamID64' => (string)$parsedData->steamID64,
			'steamID' => (string)$parsedData->steamID,
			
			'stateMessage' => (string)$parsedData->stateMessage,
			'visibilityState' => (int)$parsedData->visibilityState,
			'privacyState' => (string)$parsedData->privacyState,

			'avatarIcon' => (string)$parsedData->avatarIcon,
			'avatarMedium' => (string)$parsedData->avatarMedium,
			'avatarFull' => (string)$parsedData->avatarFull,

			'vacBanned' => (int)$parsedData->vacBanned,
			'tradeBanState' => (string)$parsedData->tradeBanState,
			'isLimitedAccount' => (string)$parsedData->isLimitedAccount,

			'onlineState' => (string)$parsedData->onlineState,
			'inGameServerIP' => (string)$parsedData->inGameServerIP,
			);

			$datos = array('datosCuenta' => $datosCuenta);
			return $datos;

			//If their account is public, get that info:
			if($this->privacyState == "public") {
				$this->customURL = (string)$parsedData->customURL;
				$this->memberSince = (string)$parsedData->memberSince;

				$this->steamRating = (float)$parsedData->steamRating;
				$this->hoursPlayed2Wk = (float)$parsedData->hoursPlayed2Wk;

				$this->headline = (string)$parsedData->headline;
				$this->location = (string)$parsedData->location;
				$this->realname = (string)$parsedData->realname;
				$this->summary = (string)$parsedData->summary;
			}

			//If they're in a game, grab that info:
			if($this->onlineState == "in-game") {
				$this->inGameInfo = array();
				$this->inGameInfo["gameName"] = (string)$parsedData->inGameInfo->gameName;
				$this->inGameInfo["gameLink"] = (string)$parsedData->inGameInfo->gameLink;
				$this->inGameInfo["gameIcon"] = (string)$parsedData->inGameInfo->gameIcon;
				$this->inGameInfo["gameLogo"] = (string)$parsedData->inGameInfo->gameLogo;
				$this->inGameInfo["gameLogoSmall"] = (string)$parsedData->inGameInfo->gameLogoSmall;
			}

			//Get their most played video games:
			if(!empty($parsedData->mostPlayedGames)) {
				$this->mostPlayedGames = array();

				$i = 0;
				foreach ($parsedData->mostPlayedGames->mostPlayedGame as $mostPlayedGame) {
					$this->mostPlayedGames[$i]->gameName = (string)$mostPlayedGame->gameName;
					$this->mostPlayedGames[$i]->gameLink = (string)$mostPlayedGame->gameLink;
					$this->mostPlayedGames[$i]->gameIcon = (string)$mostPlayedGame->gameIcon;
					$this->mostPlayedGames[$i]->gameLogo = (string)$mostPlayedGame->gameLogo;
					$this->mostPlayedGames[$i]->gameLogoSmall = (string)$mostPlayedGame->gameLogoSmall;
					$this->mostPlayedGames[$i]->hoursPlayed = (string)$mostPlayedGame->hoursPlayed;
					$this->mostPlayedGames[$i]->hoursOnRecord = (string)$mostPlayedGame->hoursOnRecord;
					$this->mostPlayedGames[$i]->statsName = (string)$mostPlayedGame->statsName;
					$i++;
				}
			}
			
			//Any weblinks listed in their profile:
			if(!empty($parsedData->weblinks)) {
				$this->weblinks = array();

				$i = 0;
				foreach ($parsedData->weblinks->weblink as $weblink) {
					$this->weblinks[$i]->title = (string)$weblink->title;
					$this->weblinks[$i]->link = (string)$weblink->link;
					$i++;
				}
			}

			//And grab any subscribed groups:
			if(!empty($parsedData->groups)) {
				$this->groups = array();

				$i = 0;
				foreach ($parsedData->groups->group as $group) {
					$this->groups[$i]->groupID64 = (string)$group->groupID64;
					$this->groups[$i]->groupName = (string)$group->groupName;
					$this->groups[$i]->groupURL = (string)$group->groupURL;
					$this->groups[$i]->headline = (string)$group->headline;
					$this->groups[$i]->summary = (string)$group->summary;

					$this->groups[$i]->avatarIcon = (string)$group->avatarIcon;
					$this->groups[$i]->avatarMedium = (string)$group->avatarMedium;
					$this->groups[$i]->avatarFull = (string)$group->avatarFull;

					$this->groups[$i]->memberCount = (string)$group->memberCount;
					$this->groups[$i]->membersInChat = (string)$group->membersInChat;
					$this->groups[$i]->membersInGame = (string)$group->membersInGame;
					$this->groups[$i]->membersOnline = (string)$group->membersOnline;

					$i++;
				}

			}
		}
	}
}
?>