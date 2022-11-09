<?php
	include "updateseat.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <title>Atlantic Cinema</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="atlantic.css">
        <script defer src="assets/js/seating.js"></script>
		 <script defer src="assets/js/newsletterform.js"></script>
		 <script>
function validateEmail(){
	var email = document.getElementById("email").value;
	email.trim();
	if(email.length > 0){ //make sure it is not empty
		var regexp = /^([\w\.-])+@([\w]+\.){1,3}([A-z]){2,3}$/;
		if(regexp.test(email)){
			return true;
		}
		else{
			alert("Email entered in wrong format.");
			return false;
		}
		alert("Please fill in your Email.");
		return false;
	}
}
</script>
        <style>
            li.row {
                list-style: none;
            }
            .formPage {
                max-width: 400px;
                margin: auto;
            }
            .displaytable, th, td{
                border: 1px solid black;
            }
            .submitBtn {
                margin-left: 130px;
                margin-top:50px;
            }
            .screenbox {
                margin-top:25px;
                text-align: center;
                border: 2px solid black;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <header>
                <div class="logo">
                    <img src="assets/img/logo.gif" height="90" width="250" alt="logo">
                </div>
            </header>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="movies.html">Movies</a></li>
                    <li><a href="buytickets.html">Buy Tickets</a></li>
                  
                    <li><a href="contactus.html">Contact Us</a></li>						
                </ul>
            </nav>
            <main>
                <div class="formPage">
                    <form action="seatingconfirm3.php" method="get">
                        <div class="screenbox">
                            <p><strong>Screen</strong></p>
                        </div>
                        <li class="row">
                            <ol class="seats" >
                                &nbsp;&nbsp;A 
                                <input type="checkbox" class="checkbox"id="A1" value="A1" name="seats[]" onclick="checkbox()"<?php compare1('A1')?>>
                                <input type="checkbox" class="checkbox"id="A2" value="A2" name="seats[]" onclick="checkbox()"<?php compare1('A2')?>>
                                &nbsp;&nbsp;
                                <input type="checkbox" class="checkbox"id="A3" value="A3" name="seats[]" onclick="checkbox()"<?php compare1('A3')?>>
                                <input type="checkbox" class="checkbox"id="A4" value="A4" name="seats[]" onclick="checkbox()"<?php compare1('A4')?>>
                                <input type="checkbox" class="checkbox"id="A5" value="A5" name="seats[]" onclick="checkbox()"<?php compare1('A5')?>>
                                <input type="checkbox" class="checkbox"id="A6" value="A6" name="seats[]" onclick="checkbox()"<?php compare1('A6')?>>
                
                                <input type="checkbox" class="checkbox"id="A7" value="A7" name="seats[]" onclick="checkbox()"<?php compare1('A7')?>>
                                <input type="checkbox" class="checkbox"id="A8" value="A8" name="seats[]" onclick="checkbox()"<?php compare1('A8')?>>
                                &nbsp;&nbsp;
                                <input type="checkbox" class="checkbox"id="A9" value="A9" name="seats[]" onclick="checkbox()"<?php compare1('A9')?>>
                                <input type="checkbox" class="checkbox"id="A10" value="A10" name="seats[]" onclick="checkbox()"<?php compare1('A10')?>>
                
                            </ol>
                        </li>
                        <li class="row">
                            <ol class="seats" >
                                &nbsp;&nbsp;B <input type="checkbox" class="checkbox"id="B1" value="B1" name="seats[]" onclick="checkbox()"<?php compare1('B1')?>>
                                <input type="checkbox" class="checkbox"id="B2" value="B2" name="seats[]" onclick="checkbox()"<?php compare1('B2')?>>
                                    &nbsp;&nbsp;
                                <input type="checkbox" class="checkbox"id="B3" value="B3" name="seats[]" onclick="checkbox()"<?php compare1('B3')?>>
                                <input type="checkbox" class="checkbox"id="B4" value="B4" name="seats[]" onclick="checkbox()"<?php compare1('B4')?>>
                                <input type="checkbox" class="checkbox"id="B5" value="B5" name="seats[]" onclick="checkbox()"<?php compare1('B5')?>>
                                <input type="checkbox" class="checkbox"id="B6" value="B6" name="seats[]" onclick="checkbox()"<?php compare1('B6')?>>
                                
                                <input type="checkbox" class="checkbox"id="B7" value="B7" name="seats[]" onclick="checkbox()"<?php compare1('B7')?>>
                                <input type="checkbox" class="checkbox"id="B8" value="B8" name="seats[]" onclick="checkbox()"<?php compare1('B8')?>>
                                    &nbsp;&nbsp;
                                <input type="checkbox" class="checkbox"id="B9" value="B9" name="seats[]" onclick="checkbox()"<?php compare1('B9')?>>
                                <input type="checkbox" class="checkbox"id="B10" value="B10" name="seats[]" onclick="checkbox()"<?php compare1('B10')?>>
                            </ol>
					    </li>
                        <li class="row">
                            <ol class="seats" >
                                &nbsp;&nbsp;C <input type="checkbox" class="checkbox"id="C1" value="C1" name="seats[]" onclick="checkbox()"<?php compare1('C1')?>>
                                <input type="checkbox" class="checkbox"id="C2" value="C2" name="seats[]" onclick="checkbox()"<?php compare1('C2')?>>
                                    &nbsp;&nbsp;
                                <input type="checkbox" class="checkbox"id="C3" value="C3" name="seats[]" onclick="checkbox()"<?php compare1('C3')?>>
                                <input type="checkbox" class="checkbox"id="C4" value="C4" name="seats[]" onclick="checkbox()"<?php compare1('C4')?>>
                                <input type="checkbox" class="checkbox"id="C5" value="C5" name="seats[]" onclick="checkbox()"<?php compare1('C5')?>>
                                <input type="checkbox" class="checkbox"id="C6" value="C6" name="seats[]" onclick="checkbox()"<?php compare1('C6')?>>
                                
                                <input type="checkbox" class="checkbox"id="C7" value="C7" name="seats[]" onclick="checkbox()"<?php compare1('C7')?>>
                                <input type="checkbox" class="checkbox"id="C8" value="C8" name="seats[]" onclick="checkbox()"<?php compare1('C8')?>>
                                &nbsp;&nbsp;
                                <input type="checkbox" class="checkbox"id="C9" value="C9" name="seats[]" onclick="checkbox()"<?php compare1('C9')?>>
                                <input type="checkbox" class="checkbox"id="C10" value="C10" name="seats[]" onclick="checkbox()"<?php compare1('C10')?>>
                                
                                
                            </ol>		
					    </li>
                        <li class="row">
                            <ol class="seats" >
                                &nbsp;&nbsp;D <input type="checkbox" class="checkbox"id="D1" value="D1" name="seats[]" onclick="checkbox()"<?php compare1('D1')?>>
                                <input type="checkbox" class="checkbox"id="D2" value="D2" name="seats[]" onclick="checkbox()"<?php compare1('D2')?>>
                                &nbsp;&nbsp;
                                <input type="checkbox" class="checkbox"id="D3" value="D3" name="seats[]" onclick="checkbox()"<?php compare1('D3')?>>
                                <input type="checkbox" class="checkbox"id="D4" value="D4" name="seats[]" onclick="checkbox()"<?php compare1('D4')?>>
                                <input type="checkbox" class="checkbox"id="D5" value="D5" name="seats[]" onclick="checkbox()"<?php compare1('D5')?>>
                                <input type="checkbox" class="checkbox"id="D6" value="D6" name="seats[]" onclick="checkbox()"<?php compare1('D6')?>>
                                
                                <input type="checkbox" class="checkbox"id="D7" value="D7" name="seats[]" onclick="checkbox()"<?php compare1('D7')?>>
                                <input type="checkbox" class="checkbox"id="D8" value="D8" name="seats[]" onclick="checkbox()"<?php compare1('D8')?>>
                                &nbsp;&nbsp;
                                <input type="checkbox" class="checkbox"id="D9" value="D9" name="seats[]" onclick="checkbox()"<?php compare1('D9')?>>
                                <input type="checkbox" class="checkbox"id="D10" value="D10" name="seats[]" onclick="checkbox()"<?php compare1('D10')?>>
                
                            </ol>
                        </li>
                        <li class="row">
                            <ol class="seats">
                                &nbsp;&nbsp;E <input type="checkbox" class="checkbox"id="E1" value="E1" name="seats[]" onclick="checkbox()"<?php compare1('E1')?>>
                                <input type="checkbox" class="checkbox"id="E2" value="E2" name="seats[]" onclick="checkbox()"<?php compare1('E2')?>>
                                &nbsp;&nbsp;
                                <input type="checkbox" class="checkbox"id="E3" value="E3" name="seats[]" onclick="checkbox()"<?php compare1('E3')?>>
                                <input type="checkbox" class="checkbox"id="E4" value="E4" name="seats[]" onclick="checkbox()"<?php compare1('E4')?>>
                                <input type="checkbox" class="checkbox"id="E5" value="E5" name="seats[]" onclick="checkbox()"<?php compare1('E5')?>>
                                <input type="checkbox" class="checkbox"id="E6" value="E6" name="seats[]" onclick="checkbox()"<?php compare1('E6')?>>
                            
                                <input type="checkbox" class="checkbox"id="E7" value="E7" name="seats[]" onclick="checkbox()"<?php compare1('E7')?>>
                                <input type="checkbox" class="checkbox"id="E8" value="E8" name="seats[]" onclick="checkbox()"<?php compare1('E8')?>>
                                &nbsp;&nbsp;
                                <input type="checkbox" class="checkbox"id="E9" value="E9" name="seats[]" onclick="checkbox()"<?php compare1('E9')?>>
                                <input type="checkbox" class="checkbox"id="E10" value="E10" name="seats[]" onclick="checkbox()"<?php compare1('E10')?>>
            
                                
                            </ol>
                        </li>
                        <li class="row">
                            <ol class="seats" >
                                &nbsp;&nbsp;F <input type="checkbox" class="checkbox"id="F1" value="F1" name="seats[]" onclick="checkbox()"<?php compare1('F1')?>>
                                <input type="checkbox" class="checkbox"id="F2" value="F2" name="seats[]" onclick="checkbox()"<?php compare1('F2')?>>
                                &nbsp;&nbsp;
                                <input type="checkbox" class="checkbox"id="F3" value="F3" name="seats[]" onclick="checkbox()"<?php compare1('F3')?>>
                                <input type="checkbox" class="checkbox"id="F4" value="F4" name="seats[]" onclick="checkbox()"<?php compare1('F4')?>>
                                <input type="checkbox" class="checkbox"id="F5" value="F5" name="seats[]" onclick="checkbox()"<?php compare1('F5')?>>
                                <input type="checkbox" class="checkbox"id="F6" value="F6" name="seats[]" onclick="checkbox()"<?php compare1('F6')?>>
                                
                                <input type="checkbox" class="checkbox"id="F7" value="F7" name="seats[]" onclick="checkbox()"<?php compare1('F7')?>>
                                <input type="checkbox" class="checkbox"id="F8" value="F8" name="seats[]" onclick="checkbox()" <?php compare1('F8')?>>
                                &nbsp;&nbsp;
                                <input type="checkbox" class="checkbox"id="F9" value="F9" name="seats[]" onclick="checkbox()" <?php compare1('F9')?>>
                                <input type="checkbox" class="checkbox"id="F10" value="F10" name="seats[]" onclick="checkbox()"<?php compare1('F10')?>>
                
                            </ol>
                        </li>
                        <li class="row">
                            <ol class="seats" >
                                &nbsp;&nbsp;G <input type="checkbox" class="checkbox"id="G1" value="G1" name="seats[]" onclick="checkbox()"<?php compare1('G1')?>>
                                <input type="checkbox" class="checkbox"id="G2" value="G2" name="seats[]" onclick="checkbox()"<?php compare1('G2')?>>
                                &nbsp;&nbsp;
                                <input type="checkbox" class="checkbox"id="G3" value="G3" name="seats[]" onclick="checkbox()"<?php compare1('G3')?>>
                                <input type="checkbox" class="checkbox"id="G4" value="G4" name="seats[]" onclick="checkbox()"<?php compare1('G4')?>>
                                <input type="checkbox" class="checkbox"id="G5" value="G5" name="seats[]" onclick="checkbox()"<?php compare1('G5')?>>
                                <input type="checkbox" class="checkbox"id="G6" value="G6" name="seats[]" onclick="checkbox()"<?php compare1('G6')?>>
                                
                                <input type="checkbox" class="checkbox"id="G7" value="G7" name="seats[]" onclick="checkbox()"<?php compare1('G7')?>>
                                <input type="checkbox" class="checkbox"id="G8" value="G8" name="seats[]" onclick="checkbox()"<?php compare1('G8')?>>
                                &nbsp;&nbsp;
                                <input type="checkbox" class="checkbox"id="G9" value="G9" name="seats[]" onclick="checkbox()"<?php compare1('G9')?>>
                                <input type="checkbox" class="checkbox"id="G10" value="G10" name="seats[]" onclick="checkbox()"<?php compare1('G10')?>>
                                
                               
                            </ol>
                        </li>
                        <div class="top" >
                                <table class="displaytable">
                                    <tr>
                                        <th>Selected Seats</th>
                                        <th>Price per Ticket</th>
                                        <th>Qty</th>
                                        <th>Total amount</th>
                                    </tr>
                                    <tr>
                                        <td><input type="text" id="show" name="seats"></td>
                                        <td>$12.50</td>
                                        <td><p id="seatquan" name="seats" ></p></td>
                                        <td>$<span id="movietotal"></span></td>
                                    </tr>
                                </table>
                                        <input class="submitBtn" type="submit" value="Confirm Selection">
                                        <br><br>
	                    </div>
                    </form>
                    <div>
                        <input type="checkbox" disabled> - Reserved Seat <br>
						 <img src="assets/img/checkbox.png" height = "19" width="17"  > - Selected Seat <br>
                 
                    </div>
                </div>
            </main>
            <footer>
                <form action="newsletterform.php" method="post" class="message">

           
		   
	<div class="message">
	<input type = "email" name = "email" id = "email" required placeholder = "Enter your email address" onchange="validateEmail()"> 

	<input type="submit" value="Join"> 
			
		</div>	
          </form>
		  
                <h4>Copyright &copy; Atlantic Cinema 2022 </h4>
            </footer>
        </div>
    </body>