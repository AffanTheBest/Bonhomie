

<!DOCTYPE html>
<html lang="en">
<head>
    
    
    <title>Document</title>
    <style>
        .btn {
            width: 150px;
            
            border: none;
            outline: none;
            height: 49px;
            border-radius: 49px;
            color: #fff;
            text-transform: uppercase;
            font-weight: 600;
            margin: 10px 0;
            cursor: pointer;
            transition: 0.5s;
        }

.btn:hover {
    background-color: #4d84e2;
  }


      a {
  text-decoration: none !important;
}

body {
  background-image: url("regbg.svg");
  background-size: 80%;
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
}

.main {
  width: 100%;
  height: 86vh;
  display: -ms-grid;
  display: grid;
  place-items: center;
}

.main .input-group {
  z-index: 9999;
  border: 1px solid #636e72;
  border-radius: 100px;
  width: 350px;
}

.main .input-group .input-group-text {
  background-color: transparent;
  border: none;
}

.main .input-group input {
  width: 85%;
  border: none;
  background: transparent;
  outline: none;
  padding: 8px;
  outline: none;
}

.main .input-group textarea {
  background-color: transparent;
  border: none;
}

.main .btns input, .main .btns a {
  outline: none;
  margin: 15px 0 0 10px !important;
  text-decoration: none !important;
  font-weight: bold;
  border: 1px solid #d63031;
  padding: 5px 18px;
  border-radius: 100px;
  color: #d63031;
  -webkit-transition: .5s all;
  transition: .5s all;
}

.main .btns input:hover, .main .btns a:hover {
  color: #ffffff !important;
  text-decoration: none !important;
  background-color: #d63031 !important;
}

.main .btns input {
  padding: 5px 30px;
}

@media (max-width: 768px) {
  body {
    background: url("regbg-mobile.svg");
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
  }
  .main form{
    width:90%;
  }
  .main .input-group {
    border: 1px solid #2c3e50;
    width: 95%;
  }
}
/*# sourceMappingURL=register.css.map */


        @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap');
        font-family: 'Comfortaa', cursive;
        *{margin: 0;padding: 0;box-sizing: border-box;}
        .sports a:hover{
          color: #007bff!important;
          background: rgb(195, 201, 255);
        }
        .sports{
            display: grid;
            place-items: center;
        }
        .col-12{
            margin-left: auto;
            margin-right: auto;
        }
        #footer a{color: grey;}
        #footer a:hover{color: white;text-decoration: none; transition: 0.2s ease;}
        * {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}
a{text-decoration: none!important;}

.header{height: 100%;
margin-bottom: 50px;}

.carousel-inner img{
	height: 90vh;
}
@media (max-width: 768px){
  .carousel-inner img{
    height: 55vh!important;
  }
}

#sports{
	height: 100%;
	background: #0a3d62;
}

.cardheader{
	border-top-left-radius: 3px;
	border-top-right-radius: 3px;
  	height: 11rem;
    position: relative;
    background: transparent;
	overflow: hidden;
}
.cardheader img{
  transition: 1s all;
  overflow: hidden;
  width: 100%;
  height: 100%;
  /* border-radius:5px 5px 0 0; */
}
.caption{
  position: absolute;
  top: 0;
  left: 0;
  background: rgba(0,0,0,0.4);
  color: rgb(122, 113, 113);
  width: 100%;
  height: 100%;
  display: grid;
  place-items: center;
  opacity: 0;
  transition: 1s all;
}
.caption h2{
  width: 100%;
  height: 100%;
  display: grid;
  place-items: center;
}
.caption a{
	text-decoration: none!important;
	font-weight:bold;
	border: 1px solid white;
	padding: 2px 18px;
	border-radius: 100px;
	color: white;
	transition: .5s all;
}
.caption a:hover{
	color: #ffffff!important;
	text-decoration: none!important;
	background-color:#e84393!important ;
	border: 1px solid #e84393;
}
.cardheader:hover img{
  transform: scale(1.4);
}
.cardheader:hover .caption{
  opacity: 1;
}

.carousel-indicators li{
  width: 15px!important;
  height: 15px!important;
  border-radius: 50%!important;
  margin: 0 8px!important;
  background-color: #0984e3!important;
}

.col .card-body{
	border-bottom-left-radius: 3px;
	border-bottom-right-radius: 3px;
	border: 2px solid;
	border-color:#8D8D8D;
	border-top-color: transparent;
	border-opacity:.6;
}
#footer{
  background: #0a183d;
  height: 33vh;
}
#footer a{color: grey;}
#footer a:hover{color: white;text-decoration: none; transition: 0.2s ease;}

@media (max-width: 768px){
	#footer{
		height: 78vh;
	}
}
@media (max-width: 768px) {
  .login_p{height: 110;}
  .login_p p{
    font-size: 20px!important;
    margin:50px 5px;
  }
  .fa_user img {
    width: 70px!important;
    height: 70px!important;
  }
  #contact h1{
    font-size: 30px;
    margin-bottom:20px!important;
  }
  .form-div{
    width:90%!important;
    /* margin: 0!important; */
  }
}



    </style>








</head>
<body>
    
</body>
</html>