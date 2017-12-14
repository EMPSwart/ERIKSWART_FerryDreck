<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Sum 41 Discografie</title>
<meta name="description" content="Sum 41 heeft verschillende albums uitgebracht zoals Chuck, Does This Look Infected en hun laatste album 13 Voices!">
<meta name="keywords" content="Sum 41, Sum 41 Albums, Sum 41 Band, Deryck Whibley, Cone McCaslin Bass, 13 Voices Album, Dave Brownsound Guitar, 13 Voices Sum 41, 13 Voices Out Now">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <header>
            <img src="logo.jpeg" alt="Sum 41" class="logo" width="20%">
        <div class="socials">
            <a href="http://www.facebook.com/"><img src="fb.png" width="50px"></a>
            <a href="http://www.twitter.com"><img src="twit.png" width="50px"></a>
        </div>
    </header>
    <nav>
        <a href="sum41page.html">Home</a>
        <a href="">About us</a>
        <a href="discografie.html">Discografie</a>
        <a href="concerten.php">Concerts</a>
        <a href="">Contact</a>
    </nav>
    <div class="main">
        <div class="title">
            <h1>Here follow the concerts of the beloved Sum 41</h1>
        </div>
    </div>
    <form id="ajaxform" method="get">
        <input type="text" id="str" autocomplete="off" name="data">
    </form>
    <div id="life">
        <?php
        $conn = new mysqli("localhost", "root", "ds9sisko!", "concert");
        
        $s = "SELECT datum, locatie, concertzaal FROM concerten";

        if ($result = $conn->query($s)) {
        while ($row = $result->fetch_assoc()){
        echo $row["datum"]. " " . $row["locatie"]. " ".$row["concertzaal"] . "<br>";
        }}
        
        
        ?>
    </div>
        
    <script>
    
        document.getElementById("str").addEventListener("keyup", function() {
            const xhttp = new XMLHttpRequest();
            document.getElementById("life").innerHTML = "<img src=\"load.gif\" width=\"10%\">";
            xhttp.onreadystatechange = function() {

                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("life").innerHTML = this.responseText;
                    //document.getElementById("status").innerHTML = this.statusText;
                    //alert("Got the response!")

                }
            };

            xhttp.open("GET", "./ajaxtest.php?data=" + str.value, true);
            xhttp.send();
        });
        
    </script>
</body>
</html>