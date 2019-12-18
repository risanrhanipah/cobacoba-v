<?php  
  if (isset($_GET['level'])) {
    if ($_GET['level'] == 'Admin') {
      header("location:admin.php");
  }else{
    header("location:admin.php");
  }
}
  ?> 
<html>
  <head>
    <title>Selamat Datang</title>

    <style type="text/css">

body{
  background: url(../image/kan.jpg);
  padding:0;
  margin:0;
}
.vid-container{
  position:relative;
  height:100vh;
  overflow:hidden;
}
.bgvid.back {
  position: fixed; right: 0; bottom: 0;
  min-width: 100%; min-height: 100%;
  width: auto; height: auto; z-index: -100;
}
.inner {
  position: absolute;
}
.inner-container{
  width:400px;
  height:400px;
  position:absolute;
  top:calc(50vh - 200px);
  left:calc(50vw - 200px);
  overflow:hidden;
}
.bgvid.inner{
  top:calc(-50vh + 200px);
  left:calc(-50vw + 200px);
  filter: url("data:image/svg+xml;utf9,<svg%20version='1.1'%20xmlns='http://www.w3.org/2000/svg'><filter%20id='blur'><feGaussianBlur%20stdDeviation='10'%20/></filter></svg>#blur");
  -webkit-filter:blur(10px);
  -ms-filter: blur(10px);
  -o-filter: blur(10px);
  filter:blur(10px);
}
.box{
  position:absolute;
  height:100%;
  width:100%;
  font-family:Helvetica;
  color:#000000;
  background:rgba(0,0,0,0.13);
  padding:30px 0px;
}
.box h1{
  text-align:center;
  margin:30px 0;
  font-size:30px;
}
.box input{
  display:block;
  width:300px;
  margin:20px auto;
  padding:15px;
  background:rgba(0,0,0,0.2);
  color:#000000;
  border:0;
}
.box input:focus,.box input:active,.box button:focus,.box button:active{
  outline:none;
}
.box button{
  background:#742ECC;
  border:0;
  color:#000000;
  padding:10px;
  font-size:20px;
  width:330px;
  margin:20px auto;
  display:block;
  cursor:pointer;
}
.box button:active{
  background:#FF8C00;
}
.box p{
  font-size:14px;
  text-align:center;
}s
.box p span{
  cursor:pointer;
  color:#666;
}
    </style>

</head>
  <body >
    <table border="1">
      
   
    <div class="box">
      <form method="post" action="cek.php">
        <h1>Silahkan Login Terlebih Dahulu</h1>
        <input type="text" name="username" placeholder="Username"/>
        <input type="text" password="password" placeholder="Password"/>
        <input type="submit" name="login" style="background-color: darkgreen; " >
      <p>Not a member? <span>Sign Up</span></p>
    </form>
    </div>
  </table>
</body>
</html>
