<?php
include '../init.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Privacy | <?=$name?></title>
    <style>
        /* readex-pro-300 - latin */
        @font-face {
            font-family: 'Readex Pro';
            font-style: normal;
            font-weight: 300;
            src: url('../fonts/readex-pro-v9-latin-300.eot');
            /* IE9 Compat Modes */
            src: local(''),
                url('../fonts/readex-pro-v9-latin-300.eot?#iefix') format('embedded-opentype'),
                /* IE6-IE8 */
                url('../fonts/readex-pro-v9-latin-300.woff2') format('woff2'),
                /* Super Modern Browsers */
                url('../fonts/readex-pro-v9-latin-300.woff') format('woff'),
                /* Modern Browsers */
                url('../fonts/readex-pro-v9-latin-300.ttf') format('truetype'),
                /* Safari, Android, iOS */
                url('../fonts/readex-pro-v9-latin-300.svg#ReadexPro') format('svg');
            /* Legacy iOS */
        }

        /* readex-pro-600 - latin */
        @font-face {
            font-family: 'Readex Pro';
            font-style: normal;
            font-weight: 600;
            src: url('../fonts/readex-pro-v9-latin-600.eot');
            /* IE9 Compat Modes */
            src: local(''),
                url('../fonts/readex-pro-v9-latin-600.eot?#iefix') format('embedded-opentype'),
                /* IE6-IE8 */
                url('../fonts/readex-pro-v9-latin-600.woff2') format('woff2'),
                /* Super Modern Browsers */
                url('../fonts/readex-pro-v9-latin-600.woff') format('woff'),
                /* Modern Browsers */
                url('../fonts/readex-pro-v9-latin-600.ttf') format('truetype'),
                /* Safari, Android, iOS */
                url('../fonts/readex-pro-v9-latin-600.svg#ReadexPro') format('svg');
            /* Legacy iOS */
        }

        * {
            font-family: 'Readex Pro';
        }
        
        a {
            color: #008BFF;
            text-decoration: none;
            cursor: pointer;
            font-weight: bold;
        }

        a:hover {
            color: #0078DD;
        }

        a:active {
            color: #0060B0;
        }
    </style>
</head>

<body>
    <h1>Privacy Policy</h1>
    <p><i>Last updated June 10, 2022.</i></p>
    <p><a href="../">back</a></p>
    <p>By using our services, you agree to the following privacy notice.</p>
    <p>Here at <?=$legalname?>, we're committed to protecting your privacy. That's why we're very open and transparent about what information we collect and how we use it. We only collect the bare minimum amount of information.</p>
    <p>Here's what we collect and why:</p>
    <ul>
        <li>The URL you would like to shorten (of course, we need this!)</li>
        <li>The shortened URL (to know where to redirect it to)</li>
        <li>The timestamp of the creation of the link (this isn't really personal information)</li>
        <li>Your IP address (to track spammers/scammers and block them!)</li>
    </ul>
    <p>Your information will be stored in our database until you request a removal by contacting us or until we remove it unless we have marked that you are spammer or scammer. Your IP address may then be stored for longer in our blacklist.</p>
    <p><b>A NOTE REGARDING CALIFORNIA &amp; EU RESIDENTS:</b> We're currently not serving California residents or residents living in the European Union. This is because California has a law called CCPA. This makes it very tricky to navigate the storage of information about the user. Maybe later we will add support for California residents. The European Union has a law called GDPR, which also makes it difficult to navigate the maze of privacy compliance. If you are a California resident or European Union resident, please <b>do not</b> use this service!!! If you have already submitted a link, please contact us immediately to remove it from our databases!</p>
    <p>This privacy notice may be changed at any time without any warning whatsoever.</p>
    <p>Thank you for reading the privacy policy (most people probably won't). Why not check out our <a href="../terms">terms of service</a>?</p>
    <p><a href="../">back</a></p>
</body>

</html>