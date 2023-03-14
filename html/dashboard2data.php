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
    <link rel="stylesheet" href="/login/css/dashboard2data.css">
</head>


<body>

    <div class="data">
        <table id="customers">
            <!-- <tr>
                <th style="font-size: 22px;
                font-weight: 500;
                color: #0076ff;
                padding-left: 40px; ">#
               <img src="../img/Group 3.png" style="float: right;
                    padding-right: 7px;
                    width: 1rem;
                    margin-top: 10px; opacity: 0.7;">
                    </th>
                <th>Actions<img src="../img/Group 3.png" style="float: right;
                    padding-right: 7px;
                    width: 1rem;
                    margin-top: 4px; opacity: 0.7;"></th>
                <th>Product Name <img src="../img/Group 3.png" style="float: right;
                    padding-right: 7px;
                    width: 1rem;
                    margin-top: 4px; opacity: 0.7;"></th>
                <th>Brand <img src="../img/Group 3.png" style="float: right;
                    padding-right: 7px;
                    width: 1rem;
                    margin-top: 4px; opacity: 0.7;"></th>
                <th>Price <img src="../img/Group 3.png" style="float: right;
                    padding-right: 7px;
                    width: 1rem;
                    margin-top: 4px; opacity: 0.7;"></th>
                <th>Mo. Sales <img src="../img/Group 3.png" style="float: right;
                    padding-right: 7px;
                    width: 1rem;
                    margin-top: 4px; opacity: 0.7;"></th>
                <th>D. Sales <img src="../img/Group 3.png" style="float: right;
                    padding-right: 7px;
                    width: 1rem;
                    margin-top: 4px; opacity: 0.7;"></th>
                <th>MO. Revenue <img src="../img/Group 3.png" style="float: right;
                    padding-right: 7px;
                    width: 1rem;
                    margin-top: 4px; opacity: 0.7;"></th>
                <th>Date First Available <img src="../img/Group 3.png" style="float: right;
                    padding-right: 7px;
                    width: 1rem;
                    margin-top: 4px; opacity: 0.7;"></th>
                <th>Net</th>
            </tr> -->
            <tr>
                <td style="padding-left: 50px ;" data-label="#">1</td>
                <td data-label="Actions" class="action-img"><img src="../img/add - Copy (2).png">
                    <img src="../img/key (2).png">
                    <img src="../img/tag (2).png">
                </td>
                <td data-label="Product Name"><img src="../img/mobile.jpg" style="height:40px ; width:30px; ;">
                    POCO Android
                </td>
                <td data-label="Brand">Samsung</td>
                <td data-label="Price"><small style="font-size: 10px; opacity: 0.9;">AED</small> <sub>14.00</sub> </td>
                <td data-label="Mo.Sales">134</td>
                <td data-label="D. Sales">135</td>
                <td data-label="Mo. Revenue">136</td>
                <td data-label="Date First Available">16-07-2022</td>
                <td data-label="Net"><small style="font-size: 10px; opacity: 0.9;">AED</small> <sub>90</sub></td>
            </tr>
            <tr style="font-family:poppins ; ">
                <td style=" padding-left:50px ;" data-label="#">2</td>
                <td data-label="Actions" class="action-img"><img src="../img/add - Copy (2).png">
                    <img src="../img/key (2).png">
                    <img src="../img/tag (2).png">
                </td>
                <td data-label="Product Name"><img src="../img/sumsang.webp" style="height:40px ; width:30px; ;">
                    Samsung Android
                </td>
                <td data-label="Brand">Infinx</td>
                <td data-label="Price"><small style="font-size: 10px; opacity: 0.9;">AED</small> <sub>14.00</sub></td>
                <td data-label="Mo. Sales">131</td>
                <td data-label="D. Sales">132</td>
                <td data-label="Mo. Revenue">134</td>
                <td data-label="Date First Available">18-05-2022</td>
                <td data-label="Net"><small style="font-size: 10px; opacity: 0.9;">AED</small> <sub>90</sub></td>
            </tr>
            <tr style="font-family:poppins ;">
                <td style="padding-left: 50px;" data-label="#">3</td>
                <td data-label="Actions" class="action-img"><img src="../img/add - Copy (2).png">
                    <img src="../img/key (2).png">
                    <img src="../img/tag (2).png">
                </td>
                <td data-label="Product Name"><img src="../img/moto.webp" style="height:40px ; width:30px; ">
                    Moto Android
                </td>
                <td data-label="Brand">Oppo</td>
                <td data-label="Price"><small style="font-size: 10px; opacity: 0.9;">AED</small> <sub>14.00</sub></td>
                <td data-label="Mo. Sales">132</td>
                <td data-label="D. Sales">136</td>
                <td data-label="Mo. Revenue">138</td>
                <td data-label="Date First Available">12-04-2022</td>
                <td data-label="Net"><small style="font-size: 10px; opacity: 0.9;">AED</small> <sub>90</sub></td>
            </tr>
            <tr style="font-family:poppins ;">
                <td style="padding-left: 50px;" data-label="#">4</td>
                <td data-label="Actions" class="action-img"><img src="../img/add - Copy (2).png">
                    <img src="../img/key (2).png">
                    <img src="../img/tag (2).png">
                </td>
                <td data-label="Product Name"><img src="../img/iphone.webp" style="height:40px ; width:30px; ;">
                   Iphone Android
                </td>
                <td data-label="Brand">Vivo</td>
                <td data-label="Price"><small style="font-size: 10px; opacity: 0.9;">AED</small> <sub>14.00</sub></td>
                <td data-label="Mo. Sales">135</td>
                <td data-label="D. Sales">131</td>
                <td data-label="Mo. Revenue">139</td>
                <td data-label="Date First Available">11-09-2022</td>
                <td data-label="Net"><small style="font-size: 10px; opacity: 0.9;">AED</small> <sub>90</sub></td>
            </tr>
            <tr style="font-family:poppins ;">
                <td style="padding-left: 50px ; " data-label="#">5</td>
                <td data-label="Actions" class="action-img"><img src="../img/add - Copy (2).png">
                    <img src="../img/key (2).png">
                    <img src="../img/tag (2).png">
                </td>
                <td data-label="Product Name"><img src="../img/iphone2.webp" style="height:40px ; width:30px; ;">
                    Iphone Android
                </td>
                <td data-label="Brand">Nokia</td>
                <td data-label="Price"><small style="font-size: 10px; opacity: 0.9;">AED</small> <sub>14.00</sub></td>
                <td data-label="Mo. Sales">139</td>
                <td data-label="D. Sales">136</td>
                <td data-label="Mo. Revenue">134</td>
                <td data-label="Date First Available">24-03-2022</td>
                <td data-label="Net"><small style="font-size: 10px; opacity: 0.9;">AED</small> <sub>90</sub></td>
            </tr>
            <tr style="font-family:poppins ;">
                <td style="padding-left: 50px ; " data-label="#">6</td>
                <td data-label="Actions" class="action-img"><img src="../img/add - Copy (2).png">
                    <img src="../img/key (2).png">
                    <img src="../img/tag (2).png">
                </td>
                <td data-label="Product Name"><img src="../img/nokia.jpg" style="height:40px ; width:30px; ;">
                    Nokia Android
                </td>
                <td data-label="Brand">Realme</td>
                <td data-label="Price"><small style="font-size: 10px; opacity: 0.9;">AED</small> <sub>14.00</sub></td>
                <td data-label="Mo. Sales">132</td>
                <td data-label="D. Sales">131</td>
                <td data-label="Mo. Revenue">133</td>
                <td data-label="Date First Available">23-07-2022</td>
                <td data-label="Net"><small style="font-size: 10px; opacity: 0.9;">AED</small> <sub>90</sub></td>
            </tr>
            <tr style="font-family:poppins ;">
                <td style="padding-left: 50px ; " data-label="#">7</td>
                <td data-label="Actions" class="action-img"><img src="../img/add - Copy (2).png">
                    <img src="../img/key (2).png">
                    <img src="../img/tag (2).png">
                </td>
                <td data-label="Product Name"><img src="../img/mobile.jpg" style="height:40px ; width:30px; ;">
                    Realme Android
                </td>
                <td data-label="Brand">Poco</td>
                <td data-label="Price"><small style="font-size: 10px; opacity: 0.9;">AED</small> <sub>14.00</sub></td>
                <td data-label="Mo. Sales">135</td>
                <td data-label="D. Sales">138</td>
                <td data-label="Mo. Revenue">139</td>
                <td data-label="Date First Available">20-05-2022</td>
                <td data-label="Net"><small style="font-size: 10px; opacity: 0.9;">AED</small> <sub>90</sub></td>
            </tr>


        </table>



    </div>

</body>

</html>