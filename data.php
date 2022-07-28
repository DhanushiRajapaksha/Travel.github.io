<html>
    <head>
        <title>Request a Tour</title>
        <link rel="stylesheet" href="Request_sites_CSS.css">
        <script type="text/javascript" src="Sub_Sites_JS.js"> </script>
        <link rel="icon" type="image/x-icon" href="icon.ico">
        <style>
            .container1{
                position: relative;
                margin-left:100px;
                margin-right:100px;
                padding: 50px;
                background-color:rgba(43, 59, 43, 0.9);
                border-radius: 30px;
                box-shadow: -5px 5px 10px black;
                font-weight: bolder;
                font-size: larger;
                color: white;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }
        </style>
        
    </head>
    <body onload=display_ct(); class="bg" style="background-image: url(4.jpg); width:100%; height: 100%;">
        <ul class="navi_bar"> 
            <li class="li1"><img src="icon.png" style="width:100px; height:55px;"></li>
            <li class="li1"><h3 style="color:white; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-weight:30px; display:center;">Tourist Places in Sri Lanka</h3></li>
            
            <li class="li2"><a href="#contacts">Contact</a></li>
            <li class="li2"><a href="FP2.html#categories">Categories</a></li>
            <li class="li2"><a href="FP2.html">Home</a></li>
        </ul>
        <center>
            <form class="container">
            <h1 style="color: beige">Packges</h1>
            <table class="pkg" border="5px">
                <tr>
                    
                    <th class="row"><center>Package 01</center></th>
                    <th class="row"><center>Package 02</center></th>
                    <th class="row"><center>Package 03</center></th>
                    <th class="row"><center>Package 04</center></th>
                    <th class="row"><center>Custom Packages</center></th>
                </tr>
                <tr>
                    <td class="row"><center>
                        
                            Sigiriya,<br><br>
                            Dambulla,<br><br>
                            Minneriya,<br><br>
                            Polonnaruwa.<br>
                        
                    </center></td>
                    <td class="row"><center>
                            
                            Colombo Town,<br><br>
                            Negombo Town,<br><br>
                            Negombo Beach,<br><br>
                            Gampaha Botanic Garden.<br>
                        
                    </center></td>
                    <td class="row"><center>
                        
                            Ella,<br><br>
                            Hakgala Botanic Garden,<br><br>
                            Hortan Plains.<br>
                        
                    </center></td>
                    <td class="row"><center>
                        
                            Temple of the Tooth Relic,<br><br>
                            Kandy Town,<br><br>
                            Peradeniya Botanic Garden.<br>
                        
                    </center></td>
                    <td class="row"><center>
                            You can request places<br> you want to visit<br> by contact us.<br>
                            <a id="cont" href="#" onclick="callUs()"><img style="width:50px; height:50px; border-radius:50px; padding:10px;"src="call.png"></a>
           
                            <a id="cont" href="#" onclick="whatsaAppUs()"><img style="width:50px; height:50px; border-radius:50px; padding:10px;"src="whatsapp.png"></a></center>
                    </center></td>
                </tr>
                <tr>
                    
                    <th class="row"><center>$ 155.87</center></th>
                    <th class="row"><center>$ 125.00</center></th>
                    <th class="row"><center>$ 114.62</center></th>
                    <th class="row"><center>$ 93.45</center></th>
                    <th class="row"><center>Custom Price</center></th>
                </tr>
            </table>
            </form>
        </center>
        <hr>
<center><div class="container1">
<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="Travel_Req";
    
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $addres = $_POST['addres'];
        $mobileno = $_POST['mobileno']; 
        $email = $_POST['email'];
        $noOfPeople = $_POST['noOfPeople'];
        $package = $_POST['package'];

        $sql = "INSERT INTO request(firstname, lastname, addres, mobileno, email, noOfPeople, package)
        VALUES('$firstname','$lastname','$addres','$mobileno','$email','$noOfPeople','$package')";

    if($conn->query($sql)===TRUE)
    {
        echo "Your request has been recieved successfully.";
    }
    else
    {
        echo "Error".$conn->error;
    }
    $conn->close();

?>
</div></center>
<footer>
            <p style="font-family: monospace"><center>Traveling destinations in Sri Lanka</center></p>
            <center><span id="DT"></span></center>
            <div id="contacts"><center><a id="cont" href="https://www.instagram.com/"><img style="width:50px; height:50px; border-radius:50px; padding:10px;"src="ig.jpg"></a>
            <a id="cont" href="https://www.facebook.com/"><img style="width:50px; height:50px; border-radius:50px; padding:10px;"src="fb.png"></a>
            
            <a id="cont" href="#" onclick="callUs()"><img style="width:50px; height:50px; border-radius:50px; padding:10px;"src="call.png"></a>
           
            <a id="cont" href="#" onclick="whatsaAppUs()"><img style="width:50px; height:50px; border-radius:50px; padding:10px;"src="whatsapp.png"></a></center><div>
        </footer>
    </body>
</html>