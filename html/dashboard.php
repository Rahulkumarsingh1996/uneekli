<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/6.6.6/css/flag-icons.min.css">

    <!-- font -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- font icon code ----------------->
    <!--Link for Font awesome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <!-- file add path here -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <script>
        $(function () {
            $("#home_content").load("home_content.html");
            $("#all_data").load("data.html");
            $("#learnmore").load("learn_morePage.html");
        });
    </script>

    <link rel="stylesheet" href="../css/dashboard.css">
</head>




<body>
    <div class="nav" id="navbarpage">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">

            <div id="mySidenav" class="sidenav">
                <div class="profile">
                    <img src="../img//dp.png">
                    <h3 style="font-family: poppins;">Hello, Surya</h3>
                </div>
                <hr style="position: absolute;
              width: 100%;
              height: 0px;
              left: 0px;
              top: 50px;
              
              border: 1px solid #AEAEAE;">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="/login/html/cyview.html"><img src="../img//note.png" style="
                    width: 20px;
                    height: 20px;
                    ">
                    <span style="color: black ; font-size: 15px; font-family: poppins; " target="_self">Customize
                        View</span>
                    <i class="fa-solid fa-arrow-right"
                        style="position: absolute; top: 80px; left: 370px; font-size: 15px; color: #003167;"></i></a>
                <a href="/login/html/filterpage.html"><img src="../img//filter.png" style="width: 24px;
                  height: 24px;">
                    <span style="color: black ; font-size: 15px; font-family: poppins;  " target=" _self">Filter
                        Results</span>
                    <i class="fa-solid fa-arrow-right"
                        style="position: absolute; top: 120px; left: 370px; font-size: 15px; color: #003167;"></i>
                </a>
                <a href="#"> <img src="../img//download (1).png" style="left:45px ; height: 20px; width: 20px;">
                    <span style="color: black ; font-size: 15px; font-family: poppins; ">Download CSV</span></a>
                <a href="#"><img src="../img//keyword.png" style="left: 45px; height: 20px; width: 20px;">
                    <span style="color: black ; font-size: 15px; font-family: poppins; ">Keyword Cloud</span></a>
                <a href="#"> <img src="../img//trend.png" style=" height: 15px; width: 15px; margin: 1%;">
                    <span style="color: black ; font-size: 15px; font-family: poppins; ">Search Trends</span></a>
                <a href="#"><img src="../img//screenshot.png" style="height: 20px; width:20px;">
                    <span style="color: black ; font-size: 15px; font-family: poppins; ">Download Screenshot</span></a>


                <div class="bottom">
                    <hr style="width: 550px;">
                    <a href="/login/html/help.html">
                        <img src="../img//help.png" style=" width: 22px; height: 22px;"> <span
                            style="color:black ; font-size: 15px;">Help</span>
                        <i class="fa-solid fa-arrow-right"
                            style="position: absolute; top: 50px; left: 370px; font-size: 15px; color: #003167;"></i>
                    </a>
                    <a href="/login/html/account.html">
                        <img src="../img//settings (1).png" style="width: 22px; height: 22px;">
                        <span style="color:black ; font-size: 15px;">Account Settings</span>
                        <i class="fa-solid fa-arrow-right"
                            style="position: absolute; top: 90px; left: 370px; font-size: 15px; color: #003167;"></i>
                    </a>
                    <a href="#">
                        <img src="../img//logout.png" style="width: 22px; height: 22px;">
                        <span style="color:black ; font-size: 15px;">Log Out</span>
                    </a>
                </div>
            </div>

            <span style="font-size: 22px; cursor: pointer; color: white; position: absolute; top: 6px; left: 10px; font-weight: 600"
                onclick="openNav()">&#9776; Menu</span>
            <div class="logo">
                <img src="../img/logo copy.png" style="height: 45px; position:absolute; top:2px; left:640px; ">
            </div> 
        
            <img src="../img//crosss.png" style="position: absolute;
            left: 1245px;
            top: 7px;
            width: 25px;
            height: 30px;">
        </div>
        <div class="nav-btn">
            <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>


    </div>

    <div class="container">
        <div class="row">
        <div class="col-2" style="text-align: center;
        position: absolute;
        margin: 4rem 4rem;
        background-color: #4646ff;
        color: white;
        font-weight: 600;
        border: none;
        width: 7rem;
        padding: 7px 5px;">
           AED <sub>2100.90</sub> 
        </div>
        <div class="col-2" style="text-align: center;
        margin: 4rem 13rem; background-color: #4646ff;
        color: white;
        font-weight: 600;
        border: none;
        width: 7rem;
        padding: 7px 5px">
         AED <sub>2100.90</sub> 
        </div>
        <div class="col-2" style="text-align: center;
        margin: 4rem -11rem; background-color: #4646ff;
        color: white;
        font-weight: 600;
        border: none;
        width: 7rem;
        padding: 7px 5px">
          AED <sub>2100.90</sub> 
        </div>
        <div class="col-4">
        <img src="../img/d2.png" alt="" style="position: absolute;
        margin: 0rem 23rem;
        width: 18rem;">
        </div>
        </div>

       
    </div>
    <div class="container">
    <div>
            <img src="../img/d1.jpg" alt="" style="width: 37rem;
            position: absolute;
            margin: 0rem 3rem;
            height: 160px;">
        </div>
        </div>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "430px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

</body>

</html>