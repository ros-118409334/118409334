<!DOCTYPE html>
        <html>
            <head>
                <title>eBusiness 2</title>
            </head>
            
            <body>
                <?php
session_start();
$FullNameValue = "";
$TotalValue2 = "";

$TotalValue = $_POST('txtTotal');
        $_SESSION('txtName') = $FullNameValue;
        $_SESSION('txtTotal') = $TotalValue2;
        ?>
                <div class="form">
                    <form name="details" method="post" action = "eBus3.php">
                        <center>
                            <table cellspacing="10">
                                <tr>
                                    <td><b></b><td>
                                    <td><b>Enter in your details below</b></td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" id="txtName" name="txtName" value="" /></td>
                                </tr>
                                <tr>
                                    <td>Phone Number</td>
                                    <td><input type="text" id="txtNum" name="txtNum" value="" /></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td><input type="text" id="txtPassword" name="txtPassword" value="" /></td>
                                </tr>
                                <tr>
                                    <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $TotalValue;?>" /></td>
                                </tr>
                            </table>
                        </center>
                        <center>
                            <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
        
        </div>
        </form>
        </body>
        </html>
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

