<?php
// recreation :( sorry
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBM Sign Up</title>
    <link rel="stylesheet" href="/authzservice/css/bbmauth.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
    <div id="content" class="container">
        <header class="header">
            <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/BlackBerry_Messenger_logo.png"
                alt="BBM Logo" class="logo">
            <h1 class="tagline">The fastest, easiest way to chat and share.</h1>
        </header>

        <main class="main-content">
            <form id="signup" class="signup-form" onsubmit="return false;">
                <input id="name" type="text" placeholder="Name" required>
                <input id="email" type="email" placeholder="Email Address" required>
                <div class="password-wrapper">
                    <input id="password" type="password" placeholder="Password" required>
                    <svg class="eye-icon" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11
                            7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zm0
                            12.5c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5
                            5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3
                            3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" />
                    </svg>
                </div>
            </form>

            <p class="terms">
                By clicking on "Create Account" you agree to the
                <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.
            </p>

            <button id="createBtn" class="create-account-btn">Create Account</button>
        </main>
    </div>

    <footer class="footer">
        <p>Already on BBM?</p>
        <a href="#" id="signInLink">Sign In</a>
    </footer>

    <script>
        window.onload = function() {
            if (window.HTMLOUT && window.HTMLOUT.pageDone) {
                window.HTMLOUT.pageDone();
            } else {
                console.log('HTMLOUT.pageDone not found');
            }
        };

        function doSimulatedLoginRedirect() {
            var authCode = 'fakeauthcode'; 
            var refreshToken = 'fakerefreshtoken';
            var challengeCode = 'fakechallengecode'; 

            // hardcoded from bb, bbm code is so fucking messy it took me ages to figure this out
            // mainly because the redirect uri appears to be different in so many places

            var redirectUri = 'idsZTFlNWIyNG://localhost/authorize/';

            var url = redirectUri + 
                      '?code=' + encodeURIComponent(authCode + ':' + refreshToken);
            
            if (challengeCode) {
                url += '&challengecode=' + encodeURIComponent(challengeCode);
            }

            console.log("Attempting redirect to: " + url);
            window.location.href = url;
        }

        // this is just temporary
        document.getElementById('createBtn')
            .addEventListener('click', doSimulatedLoginRedirect);
        document.getElementById('signInLink')
            .addEventListener('click', doSimulatedLoginRedirect);
    </script>
</body>

</html>