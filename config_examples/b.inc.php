<?php
//Example config file for a "/b/ - Random" board

//require_once("../config_global.php");
//All features enabled by default
const LOCKDOWN = false;	//Set to true to disable page viewing for users (not for managers)

error_reporting(E_ALL);

// General settings
const SHOWTITLETXT = true; //Show TITLE at top
const SHOWTITLEIMG = true; //Show image at top
const HEAD_EXTRA=""; //Extra HTML to append to the head
const HERE="http://mysite.tld/b/"; //URL link to this board
//Set to PHP script for rotating banners
//Title image for SHOWTITLEIMG=1
const TITLEIMG = "banners/index.php";
const LANGUAGE = 'en'; //Language. Fikaba provides en and ja by default
const BOARDLINKS = "[<a href=\"/a/\">a</a>/ <a href=\"b\">b</a> ...]"; //Boardlinks at top
const SEED = "CHANGEME";//Set to some random text (Do not change after initial run)
//Rules under post form
const RULES = <<<EOF
<ul>
        <li>Rule 1</li>
        <li>Rule 2</li>
        <li>Rule 3</li>
</ul>
EOF;

//JavaScript settings
const ENABLEAPI = true; //Enable the JSON API?
const JSVARS = [ //Extra vars for JS
//var=>val
"jsPath"=>"js/jquery"
];
const JSPLUGINS=[ //Aditional JavaScripts (Relative to ./js/)
"jquery/stylebuttons.js",
"jquery/main.js",
"jquery/suite_settings.js",
"jquery/post_menu.js",
"jquery/custom_css.js",
"jquery/custom_js.js",
"jquery/custom_board_list.js",
"jquery/images_only.js",
"jquery/thread_stats.js",
"jquery/image_expansion.js",
"jquery/image_hover.js",
"jquery/thread_updater.js",
"jquery/quote_hover.js",
"jquery/inline_quote.js",
"jquery/center_threads.js",
"jquery/mark_quote.js",
"jquery/backlink_on_bottom.js",
"jquery/hide_back_links.js",
"jquery/quote_hash_nav.js",
"jquery/thread_nav.js",
"jquery/persistent_boards.js",
"jquery/thread_expansion.js",
"jquery/quick_reply.js",
"jquery/thread_watcher.js",
"jquery/tree_view.js",
"jquery/infinite_scroll.js",
"jquery/wysibb.js",
"jquery/op_only.js",
"jquery/nav_arrows.js",
"jquery/ajax_post.js",
"jquery/file_selector.js",
];

/* Posting */
const BBCODES = [
//bb=>code
"bold"=>"b",
"b"=>"b",
"spoiler"=>"span style=\"background-color:black;color:black;\" onmouseover=\"this.style.color='white';\" onmouseout=\"this.style.color='black';\"",
"s"=>"span style=\"background-color:black;color:black;\" onmouseover=\"this.style.color='white';\" onmouseout=\"this.style.color='black';\"",
"italic"=>"i",
"i"=>"i",
];
const EMOTES = [
//emote=>file
"nigra"=>"nigra.gif",
"sage"=>"sage.gif",
"longcat"=>"longcat.gif",
"tacgnol"=>"tacgnol.gif",
];
//Default posting values
const DEFAULT_SUBJECT = "";
const DEFAULT_NAME = "Anonymous";
const DEFAULT_COMMENT = "";

/* RSS */
const USE_RSS = true;
const RSS_LIMIT=15;

/* Meta */
const KEYWORDS = "anonymous,imageboard,image,board,chan,forum,lols,lol,random,memes,cats";
const DESCRIPTION = "&quot;/b/ - Random&quot; The birthplace of Anonymous. Only a fool would take what is posted here as fact!";
const TITLE = "/b/ - Random"; //Name of this imageboard
const ICON = ""; //URL to icon (Leave empty for none)

// Database settings
const POSTTABLE = "CHANGEME"; //Post table (NOT DATABASE)
const BANTABLE = "CHANGEME"; //Bans table (NOT DATABASE)
const MANATABLE = "CHANGEME"; //Manager (admin, mod, janitor) table
const REPORTTABLE = "CHANGEME"; //Reports table (NOT DATABASE)
const BLOTTERTABLE = "CHANGEME"; //Blotter table
const SQLHOST = "CHANGEME"; //MySQL server address, usually localhost
const SQLUSER = "CHANGEME"; //MySQL user (must be changed)
const SQLPASS = "CHANGEME"; //MySQL user's password (must be changed)
const SQLDB = "CHANGEME"; //Database used by image board

// File-related settings
const IMG_DIR = 'src/'; //Image directory (needs to be 777)
const THUMB_DIR = 'src/'; //Thumbnail directory (needs to be 777)
const RES_DIR = "thread/"; //Thread directory (needs to be 777)
const JS_DIR = "js/";
const CSS_DIR = "css/";
const HOME = '../'; //Site home directory (up one level by default
const EMOTES_DIR="emotes/";
const FLAGS_DIR="flags/";
const CORE_DIR="include/";
const MAX_KB = 2000; //Maximum upload size in KB
const MAX_W = 250; //Images exceeding this width will be thumbnailed
const MAX_H = 250; //Images exceeding this height will be thumbnailed
const ALLOWED_EXT = [ //List of allowed file extensions
        ".jpg",
        ".jpeg",
        ".jfif",
        ".gif",
        ".png",
        ".webm",
];
const OEKAKI_DRIVER = ""; //Leave blank to disable. Oekaki driver, available drivers are: tegaki[4chan],neo
const FORCEIMAGE = true; //Whether or not threads must start with an image
const PHP_EXT = '.html'; //Extension used for board pages after first
const PHP_SELF = 'imgboard.php'; //Name of main script file
const PHP_SELF2 = 'index'.PHP_EXT; //Name of main html file
const PHP_CAT = "catalog".PHP_EXT; //Name of catalog file
const PHP_API = "api.php"; //Name of api script file
const PHP_PLAYER = "player.php"; //Name of webm player script file
const RSS="index.rss"; //Name of RSS index file
const PHP_BLOTTER="blotter.php"; //Name of blotter script file
const PHP_BANNED="banned.php"; //Name of b& script
const DUPECHECK = true; //Check for duplicate images
const MAX_FILES = 1; //Maximum number of files
const THUMBBACK = array(255,255,238); //Thumbnail background for transp. images. Usually the background of your body element.
const FFMPEG = "ffmpeg"; //ffmpeg command

/* Look and behavior */
const PAGE_DEF = 10; //Threads per page
const THREADLIMIT = 100; //Maxium number of entries
const BUMPLIMIT = 50; //Maximum topic bumps
const COLLAPSENUM = 3; //Number of replies to show in the index
const FORTUNE=true; //Enable fortune in the email field
const COUNTRY_FLAGS=false; //Display poster's country flag with each post

/* Spam/flood protection */
const RENZOKU = 5; //Seconds between posts (floodcheck)
const RENZOKU2 = 10; //Seconds between image posts (floodcheck)
const RENZOKU3 = 15; //Seconds between threads (floodcheck)
const RENZOKU4 = 3; //Maximum active threads (floodcheck)
const RENZOKU5 = 1; //Seconds between requests (DDOS)
const BR_CHECK = 15; //Max lines per post (0 = no limit)
const PROXY_CHECK = true; //Enable proxy check
const DISP_ID = false; //Display user IDs
const FORCED_ANON = true; //Force anonymous posting (except for managers)
const BADSTRING = array(); //Posts containing any of these strings will be discarded (can be a nuisance, use with care)
const BADFILE = array(); //Files to be discarded (md5 hashes)
//Captcha
const CAPTCHA_DRIVER="saguaro"; //Leave blank to disable. Enable captcha verification, available drivers are: saguaro
const USE_CAPTCHA=true; //Captcha validation
const CAPTCHA_IMG="captcha.php"; //Captcha generator

/* CSS */
const CSSDEFAULT = "Futaba"; // The name of the stylesheet to be used by default
const STYLES = array( // Array containing NAME => FILE of stylesheets
	"Yotsuba"	=>	"yotsuba.css",
	"Yotsuba B"	=>	"yotsublue.css",
	"Miku"     	=>	"miku.css",
	"Futaba"	=>	"futaba.css",
	"Burichan"	=>	"burichan.css",
	"Tomorrow"	=>	"tomorrow.css",
	"Photon"	=>	"photon.css",
	"Gurochan"	=>	"gurochan.css"
);

const FILTERS = array( // Filters, in the format of IN => OUT
"spacechan"=>"spacecuck"
);
