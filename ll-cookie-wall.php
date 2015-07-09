<?php
/*
    Plugin Name: Level Level Cookie Wall
    Plugin URI: http://level-level.com
    Description: Blocks site until cookies are accepted - by EU cookie law 2015
    Version: 1.0
    Author: Level Level
    Author URI: http://level-level.com
    Text Domain: ll-cookie-wall
 */

function ll_is_robot() {
	$robots = array();
	$robots[] = 'ABCdatos';
	$robots[] = 'BotLink';
	$robots[] = 'Acme.Spider';
	$robots[] = 'Ahoy! The Homepage Finder';
	$robots[] = 'Alkaline';
	$robots[] = 'Anthill';
	$robots[] = 'Walhello appie';
	$robots[] = 'Arachnophilia';
	$robots[] = 'Arale';
	$robots[] = 'Araneo';
	$robots[] = 'AraybOt';
	$robots[] = 'ArchitextSpider';
	$robots[] = 'Aretha';
	$robots[] = 'ARIADNE';
	$robots[] = 'arks';
	$robots[] = 'AskJeeves';
	$robots[] = 'ASpider (Associative Spider)';
	$robots[] = 'ATN Worldwide';
	$robots[] = 'Atomz.com Search Robot';
	$robots[] = 'AURESYS';
	$robots[] = 'BackRub';
	$robots[] = 'Bay Spider';
	$robots[] = 'Big Brother';
	$robots[] = 'Bingbot';
	$robots[] = 'Bjaaland';
	$robots[] = 'BlackWidow';
	$robots[] = 'Die Blinde Kuh';
	$robots[] = 'Bloodhound';
	$robots[] = 'Borg-Bot';
	$robots[] = 'BoxSeaBot';
	$robots[] = 'bright.net caching robot';
	$robots[] = 'BSpider';
	$robots[] = 'CACTVS Chemistry Spider';
	$robots[] = 'Calif';
	$robots[] = 'Cassandra';
	$robots[] = 'Digimarc Marcspider/CGI';
	$robots[] = 'Checkbot';
	$robots[] = 'ChristCrawler.com';
	$robots[] = 'churl';
	$robots[] = 'cIeNcIaFiCcIoN.nEt';
	$robots[] = 'CMC/0.01';
	$robots[] = 'Collective';
	$robots[] = 'Combine System';
	$robots[] = 'Conceptbot';
	$robots[] = 'ConfuzzledBot';
	$robots[] = 'CoolBot';
	$robots[] = 'Web Core / Roots';
	$robots[] = 'XYLEME Robot';
	$robots[] = 'Internet Cruiser Robot';
	$robots[] = 'Cusco';
	$robots[] = 'CyberSpyder Link Test';
	$robots[] = 'CydralSpider';
	$robots[] = 'Desert Realm Spider';
	$robots[] = 'DeWeb(c) Katalog/Index';
	$robots[] = 'DienstSpider';
	$robots[] = 'Digger';
	$robots[] = 'Digital Integrity Robot';
	$robots[] = 'Direct Hit Grabber';
	$robots[] = 'DNAbot';
	$robots[] = 'DownLoad Express';
	$robots[] = 'DragonBot';
	$robots[] = 'e-collector';
	$robots[] = 'EbiNess';
	$robots[] = 'EIT Link Verifier Robot';
	$robots[] = 'ELFINBOT';
	$robots[] = 'Emacs-w3 Search Engine';
	$robots[] = 'ananzi';
	$robots[] = 'esculapio';
	$robots[] = 'Esther';
	$robots[] = 'Evliya Celebi';
	$robots[] = 'FastCrawler';
	$robots[] = 'Fluid Dynamics Search Engine robot';
	$robots[] = 'Felix IDE';
	$robots[] = 'Wild Ferret Web Hopper #1, #2, #3';
	$robots[] = 'FetchRover';
	$robots[] = 'fido';
	$robots[] = 'HÃ¤mÃ¤hÃ¤kki';
	$robots[] = 'KIT-Fireball';
	$robots[] = 'Fish search';
	$robots[] = 'Fouineur';
	$robots[] = 'Robot Francoroute';
	$robots[] = 'Freecrawl';
	$robots[] = 'FunnelWeb';
	$robots[] = 'gammaSpider, FocusedCrawler';
	$robots[] = 'gazz';
	$robots[] = 'GCreep';
	$robots[] = 'GetBot';
	$robots[] = 'GetURL';
	$robots[] = 'Golem';
	$robots[] = 'Googlebot';
	$robots[] = 'Google';
	$robots[] = 'Grapnel/0.01 Experiment';
	$robots[] = 'Griffon';
	$robots[] = 'Gromit';
	$robots[] = 'Northern Light Gulliver';
	$robots[] = 'Gulper Bot';
	$robots[] = 'HamBot';
	$robots[] = 'Harvest';
	$robots[] = 'havIndex';
	$robots[] = 'HI (HTML Index) Search';
	$robots[] = 'Hometown Spider Pro';
	$robots[] = 'ht://Dig';
	$robots[] = 'HTMLgobble';
	$robots[] = 'Hyper-Decontextualizer';
	$robots[] = 'iajaBot';
	$robots[] = 'IBM_Planetwide';
	$robots[] = 'Popular Iconoclast';
	$robots[] = 'Ingrid';
	$robots[] = 'Imagelock';
	$robots[] = 'IncyWincy';
	$robots[] = 'Informant';
	$robots[] = 'InfoSeek Robot 1.0';
	$robots[] = 'Infoseek Sidewinder';
	$robots[] = 'InfoSpiders';
	$robots[] = 'Inspector Web';
	$robots[] = 'IntelliAgent';
	$robots[] = 'I, Robot';
	$robots[] = 'Iron33';
	$robots[] = 'Israeli-search';
	$robots[] = 'JavaBee';
	$robots[] = 'JBot Java Web Robot';
	$robots[] = 'JCrawler';
	$robots[] = 'Jeeves';
	$robots[] = 'JoBo Java Web Robot';
	$robots[] = 'Jobot';
	$robots[] = 'JoeBot';
	$robots[] = 'The Jubii Indexing Robot';
	$robots[] = 'JumpStation';
	$robots[] = 'image.kapsi.net';
	$robots[] = 'Katipo';
	$robots[] = 'KDD-Explorer';
	$robots[] = 'Kilroy';
	$robots[] = 'KO_Yappo_Robot';
	$robots[] = 'LabelGrabber';
	$robots[] = 'larbin';
	$robots[] = 'legs';
	$robots[] = 'Link Validator';
	$robots[] = 'LinkScan';
	$robots[] = 'LinkWalker';
	$robots[] = 'Lockon';
	$robots[] = 'logo.gif Crawler';
	$robots[] = 'Lycos';
	$robots[] = 'Mac WWWWorm';
	$robots[] = 'Magpie';
	$robots[] = 'marvin/infoseek';
	$robots[] = 'Mattie';
	$robots[] = 'MediaFox';
	$robots[] = 'MerzScope';
	$robots[] = 'NEC-MeshExplorer';
	$robots[] = 'MindCrawler';
	$robots[] = 'mnoGoSearch search engine software';
	$robots[] = 'moget';
	$robots[] = 'MOMspider';
	$robots[] = 'Monster';
	$robots[] = 'Motor';
	$robots[] = 'MSNBot';
	$robots[] = 'Muncher';
	$robots[] = 'Muninn';
	$robots[] = 'Muscat Ferret';
	$robots[] = 'Mwd.Search';
	$robots[] = 'Internet Shinchakubin';
	$robots[] = 'NDSpider';
	$robots[] = 'Nederland.zoek';
	$robots[] = 'NetCarta WebMap Engine';
	$robots[] = 'NetMechanic';
	$robots[] = 'NetScoop';
	$robots[] = 'newscan-online';
	$robots[] = 'NHSE Web Forager';
	$robots[] = 'Nomad';
	$robots[] = 'The NorthStar Robot';
	$robots[] = 'nzexplorer';
	$robots[] = 'ObjectsSearch';
	$robots[] = 'Occam';
	$robots[] = 'HKU WWW Octopus';
	$robots[] = 'OntoSpider';
	$robots[] = 'Openfind data gatherer';
	$robots[] = 'Orb Search';
	$robots[] = 'Pack Rat';
	$robots[] = 'PageBoy';
	$robots[] = 'ParaSite';
	$robots[] = 'Patric';
	$robots[] = 'pegasus';
	$robots[] = 'The Peregrinator';
	$robots[] = 'PerlCrawler 1.0';
	$robots[] = 'Phantom';
	$robots[] = 'PhpDig';
	$robots[] = 'PiltdownMan';
	$robots[] = 'Pioneer';
	$robots[] = 'html_analyzer';
	$robots[] = 'Portal Juice Spider';
	$robots[] = 'PGP Key Agent';
	$robots[] = 'PlumtreeWebAccessor';
	$robots[] = 'Poppi';
	$robots[] = 'PortalB Spider';
	$robots[] = 'psbot';
	$robots[] = 'GetterroboPlus Puu';
	$robots[] = 'The Python Robot';
	$robots[] = 'Raven Search';
	$robots[] = 'RBSE Spider';
	$robots[] = 'Resume Robot';
	$robots[] = 'RoadHouse Crawling System';
	$robots[] = 'RixBot';
	$robots[] = 'Road Runner: The ImageScape Robot';
	$robots[] = 'Robbie the Robot';
	$robots[] = 'ComputingSite Robi/1.0';
	$robots[] = 'RoboCrawl Spider';
	$robots[] = 'RoboFox';
	$robots[] = 'Robozilla';
	$robots[] = 'Roverbot';
	$robots[] = 'RuLeS';
	$robots[] = 'SafetyNet Robot';
	$robots[] = 'Scooter';
	$robots[] = 'Sleek';
	$robots[] = 'Search.Aus-AU.COM';
	$robots[] = 'SearchProcess';
	$robots[] = 'Senrigan';
	$robots[] = 'SG-Scout';
	$robots[] = 'ShagSeeker';
	$robots[] = 'Sift';
	$robots[] = 'Simmany Robot Ver1.0';
	$robots[] = 'Site Valet';
	$robots[] = 'Open Text Index Robot';
	$robots[] = 'SiteTech-Rover';
	$robots[] = 'Skymob.com';
	$robots[] = 'SLCrawler';
	$robots[] = 'Inktomi Slurp';
	$robots[] = 'Smart Spider';
	$robots[] = 'Snooper';
	$robots[] = 'Solbot';
	$robots[] = 'Spanner';
	$robots[] = 'Speedy Spider';
	$robots[] = 'spider_monkey';
	$robots[] = 'SpiderBot';
	$robots[] = 'Slackbot';
	$robots[] = 'Slack';
	$robots[] = 'Skype';
	$robots[] = 'Spiderline Crawler';
	$robots[] = 'SpiderMan';
	$robots[] = 'SpiderView(tm)';
	$robots[] = 'Spry Wizard Robot';
	$robots[] = 'Site Searcher';
	$robots[] = 'Suke';
	$robots[] = 'suntek search engine';
	$robots[] = 'Sven';
	$robots[] = 'Sygol';
	$robots[] = 'TACH Black Widow';
	$robots[] = 'Tarantula';
	$robots[] = 'tarspider';
	$robots[] = 'Tcl W3 Robot';
	$robots[] = 'TechBOT';
	$robots[] = 'Templeton';
	$robots[] = 'TeomaTechnologies';
	$robots[] = 'TITAN';
	$robots[] = 'TitIn';
	$robots[] = 'The TkWWW Robot';
	$robots[] = 'TLSpider';
	$robots[] = 'UCSD Crawl';
	$robots[] = 'UdmSearch';
	$robots[] = 'UptimeBot';
	$robots[] = 'URL Check';
	$robots[] = 'URL Spider Pro';
	$robots[] = 'Valkyrie';
	$robots[] = 'Verticrawl';
	$robots[] = 'Victoria';
	$robots[] = 'vision-search';
	$robots[] = 'void-bot';
	$robots[] = 'Voyager';
	$robots[] = 'VWbot';
	$robots[] = 'The NWI Robot';
	$robots[] = 'W3M2';
	$robots[] = 'WallPaper (alias crawlpaper)';
	$robots[] = 'the World Wide Web Wanderer';
	$robots[] = 'w@pSpider by wap4.com';
	$robots[] = 'WebBandit Web Spider';
	$robots[] = 'WebCatcher';
	$robots[] = 'WebCopy';
	$robots[] = 'webfetcher';
	$robots[] = 'The Webfoot Robot';
	$robots[] = 'Webinator';
	$robots[] = 'weblayers';
	$robots[] = 'WebLinker';
	$robots[] = 'WebMirror';
	$robots[] = 'The Web Moose';
	$robots[] = 'WebQuest';
	$robots[] = 'Digimarc MarcSpider';
	$robots[] = 'WebReaper';
	$robots[] = 'webs';
	$robots[] = 'Websnarf';
	$robots[] = 'WebSpider';
	$robots[] = 'WebVac';
	$robots[] = 'webwalk';
	$robots[] = 'WebWalker';
	$robots[] = 'WebWatch';
	$robots[] = 'Wget';
	$robots[] = 'whatUseek Winona';
	$robots[] = 'WhoWhere Robot';
	$robots[] = 'Wired Digital';
	$robots[] = 'Weblog Monitor';
	$robots[] = 'w3mir';
	$robots[] = 'WebStolperer';
	$robots[] = 'The Web Wombat';
	$robots[] = 'The World Wide Web Worm';
	$robots[] = 'WWWC Ver 0.2.5';
	$robots[] = 'WebZinger';
	$robots[] = 'XGET';

	$is_robot = false;

	foreach( $robots as $robot ) {
		if( strstr( strtolower( $_SERVER['HTTP_USER_AGENT'] ), strtolower( $robot ) ) ) {
			$is_robot = true;
		}
	}

	return $is_robot;
}
class LL_Cookie_Wall {
	public function __construct() {
		if( !ll_is_robot() ) {
			if( is_admin() || in_array( $GLOBALS['pagenow'], array( 'wp-login.php', 'wp-register.php' ) ) ) {
				include_once( plugin_dir_path( __FILE__ ) . 'admin/admin-cookie-wall.php' );
				new Admin_Cookie_Wall();
			} else {
				include_once( plugin_dir_path( __FILE__ ) . 'public/public-cookie-wall.php' );
				new Public_Cookie_Wall();
			}
		}
	}
}

new LL_Cookie_Wall();