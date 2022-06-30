<?php
header('Content-type: text/plain');
include 'init.php';
$reservedpages = ['blog', 'privacy', 'about', 'terms', 'contact', 'page', 'p', 'u', 'l', 'ourstory', 'chrome', 'extension', 'hello', 'me', 'nope', 'letsgo', '2022', '2023', '2024', '2021', '2020', '2019', 'help', 'covid', 'covid19', 'covid19help', 'support', 'assist', 'chat', 'gethelp', 'getsupport', 'helpdesk', 'livechat', 'our_story', 'aboutus', 'about_us', 'lets_go', 'yes', 'please', 'wood', 'wooden', 'piano', 'guitar', 'browser', 'web', 'webbrowser', 'web_browser', 'computer', 'laptop', 'pc', 'desktop', 'mac', 'macos', 'window', 'windows', 'windowspc', 'windows_pc', 'firefox', 'safari', 'design', 'fast', 'easy', 'ez', 'quick', 'clean', 'cleaner', 'service', 'services', 'webservices', 'go', 'goto', 'hop', 'hopto', 'jump', 'jumpto', 'files', 'file', 'yay', 'hooray', 'ray', 'bay', 'may', 'january', 'february', 'jan', 'feb', 'march', 'mar', 'april', 'april', 'may', 'june', 'jun', 'jul', 'aug', 'july', 'august', 'september', 'sep', 'sept', 'october', 'oct', 'octo', 'octopus', 'november', 'nov', 'dec', 'december', 'dot', 'decimal', 'period', 'point', 'free', 'cook', 'cooking', 'kitchen', 'mask', 'better', 'best', 'great', 'good', 'link', 'hoptomysite', 'mysite', 'site', "jacob", "michael", "joshua", "matthew", "daniel", "christopher", "andrew", "ethan", "joseph", "william", "anthony", "david", "alexander", "nicholas", "ryan", "tyler", "james", "john", "jonathan", "noah", "brandon", "christian", "dylan", "samuel", "benjamin", "nathan", "zachary", "logan", "justin", "gabriel", "jose", "austin", "kevin", "elijah", "caleb", "robert", "thomas", "jordan", "cameron", "jack", "hunter", "jackson", "angel", "isaiah", "evan", "isaac", "luke", "mason", "jayden", "jason", "gavin", "aaron", "connor", "aiden", "aidan", "kyle", "juan", "charles", "luis", "adam", "lucas", "brian", "eric", "adrian", "nathaniel", "sean", "alex", "carlos", "bryan", "ian", "owen", "jesus", "landon", "julian", "chase", "cole", "diego", "jeremiah", "steven", "sebastian", "xavier", "timothy", "carter", "wyatt", "brayden", "blake", "hayden", "devin", "cody", "richard", "seth", "dominic", "jaden", "antonio", "miguel", "liam", "patrick", "carson", "jesse", "tristan", "alejandro", "henry", "victor", "trevor", "bryce", "jake", "riley", "colin", "jared", "jeremy", "mark", "caden", "garrett", "parker", "marcus", "vincent", "kaleb", "kaden", "brady", "colton", "kenneth", "joel", "oscar", "josiah", "jorge", "ashton", "cooper", "tanner", "eduardo", "paul", "edward", "ivan", "preston", "maxwell", "alan", "levi", "stephen", "grant", "nicolas", "dakota", "omar", "alexis", "george", "eli", "collin", "spencer", "gage", "max", "ricardo", "cristian", "derek", "micah", "brody", "francisco", "nolan", "ayden", "dalton", "shane", "peter", "damian", "jeffrey", "brendan", "travis", "fernando", "peyton", "conner", "andres", "javier", "giovanni", "shawn", "braden", "jonah", "bradley", "cesar", "emmanuel", "manuel", "edgar", "mario", "erik", "edwin", "johnathan", "devon", "erick", "wesley", "oliver", "trenton", "hector", "malachi", "jalen", "raymond", "gregory", "abraham", "elias", "leonardo", "sergio", "donovan", "colby", "marco", "bryson", "martin", "aaliyah", "abby", "abigail", "addison", "adriana", "adrianna", "alana", "alexa", "alexandra", "alexandria", "alexia", "alexis", "alicia", "allison", "alondra", "alyssa", "amanda", "amber", "amelia", "amy", "ana", "andrea", "angel", "angela", "angelica", "angelina", "anna", "ariana", "arianna", "ashley", "ashlyn", "aubrey", "audrey", "autumn", "ava", "avery", "bailey", "bianca", "breanna", "briana", "brianna", "brittany", "brooke", "brooklyn", "caitlin", "caitlyn", "camila", "caroline", "cassandra", "cassidy", "catherine", "charlotte", "chelsea", "cheyenne", "chloe", "christina", "claire", "courtney", "crystal", "daisy", "daniela", "danielle", "delaney", "destiny", "diana", "elizabeth", "ella", "ellie", "emily", "emma", "erica", "erin", "eva", "evelyn", "faith", "gabriela", "gabriella", "gabrielle", "genesis", "gianna", "giselle", "grace", "gracie", "hailey", "haley", "hannah", "hope", "isabel", "isabella", "isabelle", "jacqueline", "jada", "jade", "jasmin", "jasmine", "jayla", "jazmin", "jenna", "jennifer", "jessica", "jillian", "jocelyn", "jordan", "jordyn", "julia", "juliana", "kaitlyn", "karen", "karina", "kate", "katelyn", "katherine", "kathryn", "katie", "kayla", "kaylee", "kelly", "kelsey", "kendall", "kennedy", "kiara", "kimberly", "kylee", "kylie", "laura", "lauren", "layla", "leah", "leslie", "liliana", "lillian", "lilly", "lily", "lindsey", "lucy", "lydia", "mackenzie", "madeline", "madelyn", "madison", "makayla", "makenzie", "margaret", "maria", "mariah", "marissa", "mary", "maya", "mckenzie", "megan", "melanie", "melissa", "mia", "michelle", "mikayla", "miranda", "molly", "morgan", "mya", "naomi", "natalia", "natalie", "nevaeh", "nicole", "olivia", "paige", "payton", "peyton", "rachel", "reagan", "rebecca", "riley", "ruby", "rylee", "sabrina", "sadie", "samantha", "sara", "sarah", "savannah", "serenity", "shelby", "sierra", "skylar", "sofia", "sophia", "sophie", "stephanie", "summer", "sydney", "taylor", "tiffany", "trinity", "valeria", "valerie", "vanessa", "veronica", "victoria", "zoe", "zoey", "hiaaliyah", "hiaaron", "hiabby", "hiabigail", "hiabraham", "hiadam", "hiaddison", "hiadrian", "hiadriana", "hiadrianna", "hiaidan", "hiaiden", "hialan", "hialana", "hialejandro", "hialex", "hialexa", "hialexander", "hialexandra", "hialexandria", "hialexia", "hialexis", "hialexis", "hialicia", "hiallison", "hialondra", "hialyssa", "hiamanda", "hiamber", "hiamelia", "hiamy", "hiana", "hiandrea", "hiandres", "hiandrew", "hiangel", "hiangel", "hiangela", "hiangelica", "hiangelina", "hianna", "hianthony", "hiantonio", "hiariana", "hiarianna", "hiashley", "hiashlyn", "hiashton", "hiaubrey", "hiaudrey", "hiaustin", "hiautumn", "hiava", "hiavery", "hiayden", "hibailey", "hibenjamin", "hibianca", "hiblake", "hibraden", "hibradley", "hibrady", "hibrandon", "hibrayden", "hibreanna", "hibrendan", "hibrian", "hibriana", "hibrianna", "hibrittany", "hibrody", "hibrooke", "hibrooklyn", "hibryan", "hibryce", "hibryson", "hicaden", "hicaitlin", "hicaitlyn", "hicaleb", "hicameron", "hicamila", "hicarlos", "hicaroline", "hicarson", "hicarter", "hicassandra", "hicassidy", "hicatherine", "hicesar", "hicharles", "hicharlotte", "hichase", "hichelsea", "hicheyenne", "hichloe", "hichristian", "hichristina", "hichristopher", "hiclaire", "hicody", "hicolby", "hicole", "hicolin", "hicollin", "hicolton", "hiconner", "hiconnor", "hicooper", "hicourtney", "hicristian", "hicrystal", "hidaisy", "hidakota", "hidalton", "hidamian", "hidaniel", "hidaniela", "hidanielle", "hidavid", "hidelaney", "hiderek", "hidestiny", "hidevin", "hidevon", "hidiana", "hidiego", "hidominic", "hidonovan", "hidylan", "hiedgar", "hieduardo", "hiedward", "hiedwin", "hieli", "hielias", "hielijah", "hielizabeth", "hiella", "hiellie", "hiemily", "hiemma", "hiemmanuel", "hieric", "hierica", "hierick", "hierik", "hierin", "hiethan", "hieva", "hievan", "hievelyn", "hifaith", "hifernando", "hifrancisco", "higabriel", "higabriela", "higabriella", "higabrielle", "higage", "higarrett", "higavin", "higenesis", "higeorge", "higianna", "higiovanni", "higiselle", "higrace", "higracie", "higrant", "higregory", "hihailey", "hihaley", "hihannah", "hihayden", "hihector", "hihenry", "hihope", "hihunter", "hiian", "hiisaac", "hiisabel", "hiisabella", "hiisabelle", "hiisaiah", "hiivan", "hijack", "hijackson", "hijacob", "hijacqueline", "hijada", "hijade", "hijaden", "hijake", "hijalen", "hijames", "hijared", "hijasmin", "hijasmine", "hijason", "hijavier", "hijayden", "hijayla", "hijazmin", "hijeffrey", "hijenna", "hijennifer", "hijeremiah", "hijeremy", "hijesse", "hijessica", "hijesus", "hijillian", "hijocelyn", "hijoel", "hijohn", "hijohnathan", "hijonah", "hijonathan", "hijordan", "hijordan", "hijordyn", "hijorge", "hijose", "hijoseph", "hijoshua", "hijosiah", "hijuan", "hijulia", "hijulian", "hijuliana", "hijustin", "hikaden", "hikaitlyn", "hikaleb", "hikaren", "hikarina", "hikate", "hikatelyn", "hikatherine", "hikathryn", "hikatie", "hikayla", "hikaylee", "hikelly", "hikelsey", "hikendall", "hikennedy", "hikenneth", "hikevin", "hikiara", "hikimberly", "hikyle", "hikylee", "hikylie", "hilandon", "hilaura", "hilauren", "hilayla", "hileah", "hileonardo", "hileslie", "hilevi", "hiliam", "hililiana", "hilillian", "hililly", "hilily", "hilindsey", "hilogan", "hilucas", "hilucy", "hiluis", "hiluke", "hilydia", "himackenzie", "himadeline", "himadelyn", "himadison", "himakayla", "himakenzie", "himalachi", "himanuel", "himarco", "himarcus", "himargaret", "himaria", "himariah", "himario", "himarissa", "himark", "himartin", "himary", "himason", "himatthew", "himax", "himaxwell", "himaya", "himckenzie", "himegan", "himelanie", "himelissa", "himia", "himicah", "himichael", "himichelle", "himiguel", "himikayla", "himiranda", "himolly", "himorgan", "himya", "hinaomi", "hinatalia", "hinatalie", "hinathan", "hinathaniel", "hinevaeh", "hinicholas", "hinicolas", "hinicole", "hinoah", "hinolan", "hioliver", "hiolivia", "hiomar", "hioscar", "hiowen", "hipaige", "hiparker", "hipatrick", "hipaul", "hipayton", "hipeter", "hipeyton", "hipeyton", "hipreston", "hirachel", "hiraymond", "hireagan", "hirebecca", "hiricardo", "hirichard", "hiriley", "hiriley", "hirobert", "hiruby", "hiryan", "hirylee", "hisabrina", "hisadie", "hisamantha", "hisamuel", "hisara", "hisarah", "hisavannah", "hisean", "hisebastian", "hiserenity", "hisergio", "hiseth", "hishane", "hishawn", "hishelby", "hisierra", "hiskylar", "hisofia", "hisophia", "hisophie", "hispencer", "histephanie", "histephen", "histeven", "hisummer", "hisydney", "hitanner", "hitaylor", "hithomas", "hitiffany", "hitimothy", "hitravis", "hitrenton", "hitrevor", "hitrinity", "hitristan", "hityler", "hivaleria", "hivalerie", "hivanessa", "hiveronica", "hivictor", "hivictoria", "hivincent", "hiwesley", "hiwilliam", "hiwyatt", "hixavier", "hizachary", "hizoe", "hizoey"];
function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function getID() {
    global $conn;
    $id = generateRandomString(10);
    $checkres = $conn->query("SELECT * FROM link WHERE alias = '$id'");
    if (mysqli_num_rows($checkres) == 0) {
        return $id;
    } else {
        return getID();
    }
}
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
if (!empty($_GET['a'])) {
    $alias = strtolower($_GET['a']);
    if ((strlen($alias) < 5) || (strlen($alias) > 15)) {
        die('Your alias must be between 5 and 15 characters long!');
    }
    if (!preg_match('/^[a-zA-Z0-9_]+$/', $alias)) {
        die('Your alias contains invalid characters! Letters, numbers, and underscores only!');
    }
}

foreach($reservedpages as $page) {
    if (strtolower($_GET['a']) == $page) {
        die('Sorry, your alias is reserved!');
    }
}
if (!empty($_GET['u'])) {
    if (substr($_GET['u'], 0, strlen($shorturl)) === $shorturl) {
        die('Oops, you can\'t shorten that URL!');
    }
    if (filter_var($_GET['u'], FILTER_VALIDATE_URL)) {
        if (!isset($alias)) {
            $id = getID();
            $stmt = $conn->prepare("INSERT INTO link (alias, url, ip) VALUES (?, ?, ?)");
            $url = ($_GET['u']);
            $stmt->bind_param('sss', $id, $url, $ip);
            $stmt->execute();
            echo $shorturl . $id;
        } else {
            $stmtcheckalias = $conn->prepare('SELECT * FROM link WHERE alias = ?');
            $stmtcheckalias->bind_param('s', $alias);
            $stmtcheckalias->execute();
            $rescheck0 = $stmtcheckalias->get_result();
            if (mysqli_num_rows($rescheck0) == 0) {
                $id = $alias;
                $stmt = $conn->prepare("INSERT INTO link (alias, url, ip) VALUES (?, ?, ?)");
                $url = ($_GET['u']);
                $stmt->bind_param('sss', $id, $url, $ip);
                $stmt->execute();
                echo $shorturl . $id;
            } else {
                die('That alias is taken. Try another one.');
            }
        }
    } else {
        die("Error, invalid URL!");
    }

} else {
    die('Error, no URL!');
}
?>
