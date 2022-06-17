<?php
include 'init.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?=$name?></title>
    <link rel="icon" href="logo.png">
    <style>
        /* readex-pro-300 - latin */
        @font-face {
            font-family: 'Readex Pro';
            font-style: normal;
            font-weight: 300;
            src: url('./fonts/readex-pro-v9-latin-300.eot');
            /* IE9 Compat Modes */
            src: local(''),
                url('./fonts/readex-pro-v9-latin-300.eot?#iefix') format('embedded-opentype'),
                /* IE6-IE8 */
                url('./fonts/readex-pro-v9-latin-300.woff2') format('woff2'),
                /* Super Modern Browsers */
                url('./fonts/readex-pro-v9-latin-300.woff') format('woff'),
                /* Modern Browsers */
                url('./fonts/readex-pro-v9-latin-300.ttf') format('truetype'),
                /* Safari, Android, iOS */
                url('./fonts/readex-pro-v9-latin-300.svg#ReadexPro') format('svg');
            /* Legacy iOS */
        }

        /* readex-pro-600 - latin */
        @font-face {
            font-family: 'Readex Pro';
            font-style: normal;
            font-weight: 600;
            src: url('./fonts/readex-pro-v9-latin-600.eot');
            /* IE9 Compat Modes */
            src: local(''),
                url('./fonts/readex-pro-v9-latin-600.eot?#iefix') format('embedded-opentype'),
                /* IE6-IE8 */
                url('./fonts/readex-pro-v9-latin-600.woff2') format('woff2'),
                /* Super Modern Browsers */
                url('./fonts/readex-pro-v9-latin-600.woff') format('woff'),
                /* Modern Browsers */
                url('./fonts/readex-pro-v9-latin-600.ttf') format('truetype'),
                /* Safari, Android, iOS */
                url('./fonts/readex-pro-v9-latin-600.svg#ReadexPro') format('svg');
            /* Legacy iOS */
        }

        * {
            font-family: 'Readex Pro';
        }
        
        body {
            text-align: center;
            max-width: 900px;
            padding: 15px;
            margin: auto;
        }

        .input {
            border: 2px solid #787878;
            padding: 5px;
            border-radius: 100px;
            position: relative;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .inputalias {
            border: 2px solid #787878;
            padding: 5px;
            border-radius: 100px;
            position: relative;
            max-width: 400px;
            margin: 0 auto;
        }
        
        .inputalias input {
            padding: 0;
            margin: 5px 10px;
            font-size: 1rem;
            outline: none;
            width: calc(100% - 100px);
            border: none;
        }

        .input input {
            padding: 0;
            margin: 10px 15px;
            font-size: 1.5rem;
            outline: none;
            width: calc(100% - 100px);
            border: none;
        }

        .input:focus-within, .inputalias:focus-within {
            border: 2px solid #008BFF;
        }

        .input button {
            background: #008BFF;
            color: white;
            border: 0;
            height: calc(100% - 10px);
            width: 45px;
            border-radius: 100px;
            position: absolute;
            right: 10px;
            top: 5px;
            font-size: 25px;
            cursor: pointer;
            line-height: calc(100% - 10px);
            vertical-align: middle;
        }

        .input button:hover {
            background: #0078DD;
        }

        .input button:active {
            background: #0060B0;
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
        .title1 {
            color: #008CEF;
            display: inline-block;
            transform: rotate(-15deg);
            margin-right: 5px;
        }
        .title2 {
            color: #EF0045;
            display: inline-block;
            transform: rotate(4deg);
            margin-left: 5px;
        }
        .logosmall1 {
            color: #008CEF;
            display: inline-block;
            transform: rotate(-15deg);
            -webkit-transform: rotate(-15deg);
            -moz-transform: rotate(-15deg);
            -o-transform: rotate(-15deg);
            -ms-transform: rotate(-15deg);
            margin-right: 1px;
            font-weight: bold;
        }
        .logosmall2 {
            color: #EF0045;
            display: inline-block;
            transform: rotate(4deg);
            -webkit-transform: rotate(4deg);
            -moz-transform: rotate(4deg);
            -o-transform: rotate(4deg);
            -ms-transform: rotate(4deg);
            margin-left: 1px;
            font-weight: bold;
        }
        hr {
            border: 1px solid #787878;
            width: 75%;
            border-radius: 5px;
        }
        .tagline {
            color: #720021;
        }
        .addtochrome {
            background: #0070FF;
            color: white;
            padding: 10px 15px;
            border-radius: 10px;
            display: block;
            margin: 10px 0;
        }
        .addtochrome:hover {
            background: #0058C8;
            color: white;
        }
        .addtochrome:active {
            background: #00377E;
            color: white;
        }
    </style>
</head>

<body>
    <h1><span class="title1">Link</span><span class="title2">Short</span></h1>
    <h3 class="tagline">A better way to shorten your links!</h3>
    <form action="#" method="post" onsubmit="return shortenlink();">
        <p><b>Your long link to</b> <span class="logosmall1">Link</span><span class="logosmall2">Short</span>:</p>
        <div class="input">
            <input type="url" name="url" placeholder="https://" id="link" required autofocus>
            <button type="submit" tabindex="-1">&rsaquo;</button>
        </div>
        <p><small>Custom alias? (leave blank for random)</small></p>
        <div class="inputalias">
            <input type="text" name="alias" id="alias" autofocus maxlength="15">
        </div>
        <p>By shortening your link, you agree to the <a href="terms">terms of service</a> and <a href="privacy">privacy policy</a>.</p>
    </form>
    <hr>
    <h2>About</h2>
    <p><span class="logosmall1">Link</span><span class="logosmall2">Short</span> was established in 2022 as a way to make it easier to shorten you links for free. In fact, our product requires no signup or payments, unlike other link shorteners. In fact, we don't even offer a paid plan, so you don't need to worry about getting annoyed by prompts to pay!</p>
    <p>If you're eager to make your links shorter and easier to type, our product is perfect for you. Each alias is only 10 characters long! Plus, the links aren't case-sensitive!</p>
    <hr>
    <h2>FAQs</h2>
    <p><b>Why is <span class="logosmall1">Link</span><span class="logosmall2">Short</span> better than other link shorteners?</b></p>
    <p>There are several reasons why our product is better than others.</p>
    <p>Our product is 100% free. Plus, there's no wait time - it's instant!</p>
    <p>When you visit a shortened link, it redirects directly. There's no link the user has to click, no <span class="logosmall1">Link</span><span class="logosmall2">Short</span> branding. It's simple. It just redirects. No extra pages, no extra delays.</p>
    <p><b>How do I shorten a link?</b></p>
    <p>Just paste your link into the input form and press the blue &rsaquo; button!</p>
    <p><b>I can't shorten my link! It gives the error "Please enter a URL."</b></p>
    <p>Make sure you have "http://" or "https://" at the beginning of your URL!</p>
    <p><b>Instead of outputting a shortened link, it outputs "Error, invalid URL!"</b></p>
    <p>Make sure that your URL is a valid url and begins with "http://" or "https://".</p>
    <p><b>Instead of outputting a shortened link, it outputs "Error, no URL!"</b></p>
    <p>This is an error on our end, please contact us so we can resolve the issue.</p>
    <p><b>Is there an API?</b></p>
    <p>No, not at the current moment, but we are hoping to add one soon!</p>
    <p><b>How do you make money if this is a free service?</b></p>
    <p>Well, right now we don't make any money. This project is just an experiment (for now).</p>
    <p><b>How do I report a URL that violates our terms of service?</b></p>
    <p>Please contact us to report any URLs that are violating our terms of service. Please make sure to include the shortened URL, the URL it redirects to, why it's violating our terms of service, and which section/page of the website is violating our terms of service. Thank you for reporting!</p>
    <script>
        function shortenlink() {
            if (document.getElementById('link').value.length > 0) {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        document.getElementById('link').value = xhr.responseText;
                        document.getElementById('link').select();
                        //document.execCommand('copy'); - Uncomment this line if you want the system to automatically copy the shortened URL when it is shortened. Please note that if there are errors (e.g. "Oops! You can't shorten that URL!"), those errors will also be copied.
                    }
                }
                xhr.open('GET', 's.php?u=' + encodeURIComponent(document.getElementById('link').value));
                xhr.send();
            }
            return false;
        }

    </script>
    <hr>
    <p><a href="privacy">privacy</a> - <a href="terms">terms</a> - <a href="javascript:alert('Email me [ at ] mrfake [ dot ] name!')">contact</a> - &copy; 2022. All rights reserved. Proudly made in the USA! Powered by <span class="logosmall1">Link</span><span class="logosmall2">Short</span>, an open-sourced project on <a href="https://github.com/fakerybakery/LinkShort">GitHub</a>!</p>
</body>

</html>
