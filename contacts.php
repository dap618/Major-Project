<!DOCTYPE html>
<html lang="en">
<head>
<title>Contacts</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background-image: url("https://mlsvc01-prod.s3.amazonaws.com/dfb65dfc001/4a0d0bcf-6bbe-4173-8f3a-6ec71a5cd333.png?ver=1580163906000");
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  color: black;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 10px;
}

.container {
  width: 100%;
  height: 160px;
  background-color: lightgrey;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 50%;
  height: 50%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>CDF Guardians</h1>
  <p><b>The safest organisation in Singapore</b></p>
</div>

<div class="navbar">
  <a href="index-CDF.php" >Home</a>
  <a href="contacts.php" class="active">Contacts</a>
  <a href="#">Services</a>
  <a href="#">About</a>
</div>

  <div class="main">
    <div class="container">
    <h2>CEO: Wallberg Perkins</h2>
    <h5></b>Email:</b> wallbergperkins.ceo@gmail.com</h5>
    <h5 style="margin-top: -15px;"></b>Number:</b> 67844561</h5>
    <img style="width:30px;height:30px;" src="https://image.flaticon.com/icons/png/512/85/85435.png"><a style="margin-left:5px;"> @wallyperksboss</a>
    </div>
    <br>
    <div class="container">
    <h2>CTO/CIO: Evans Shirley</h2>
    <h5></b>Email: evansshirley.cto@gmail.com </b></h5>
    <h5 style="margin-top: -15px;"></b>Number:</b> 67569561</h5>
    <img style="width:30px;height:30px;" src="https://image.flaticon.com/icons/png/512/85/85435.png"><a style="margin-left:5px;"> @shirleyvans</a>
    </div>
    <br>
    <div class="container">
    <h2>COO: Vegas Newton</h2>
    <h5></b>Email: vegasnewton.coo@gmail.com  </b></h5>
    <h5 style="margin-top: -15px;"></b>Number:</b> 68849674</h5>
    <img style="width:30px;height:30px;" src="https://image.flaticon.com/icons/png/512/85/85435.png"><a style="margin-left:5px;"> @vegasnewton_coo </a>
    </div>
    <br>
    <div class="container">
    <h2>CFO: Degal Link</h2>
    <h5></b>Email: degallink.finance@gmail.com  </b></h5>
    <h5 style="margin-top: -15px;"></b>Number:</b> 65549674</h5>
    <img style="width:30px;height:30px;" src="https://image.flaticon.com/icons/png/512/85/85435.png"><a style="margin-left:5px;"> @degal_link </a>
    </div>
  </div>
</div>

<div class="footer">
  <h2>Our Company Social Media: <img style="width:27px;height:27px;" src="https://image.flaticon.com/icons/png/512/85/85435.png"><a style="margin-left:5px;"> @cdfguardians</h2>
</div>
</body>
</html>
