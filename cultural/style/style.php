<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap');

* {
  font-family: 'Comfortaa', cursive;
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}
a{text-decoration: none!important;}

.header{height: 100%;
margin-bottom: 50px;}

.navbar{
  box-shadow: 0 5px 8px rgba(0,0,0,0.3);
}
.carousel-inner img{
	height: 90vh;
}
@media (max-width: 768px){
  .carousel-inner img{
    height: 55vh!important;
  }
}

#events{
	height: 100%;
  display: grid;
  place-items: center;
  box-shadow: 10px 2px 20px rgba(0,0,0,0.3) inset;
  background:url(eventbg1.png) , url(eventbg1.png);
  background-repeat: no-repeat;
  background-position: 0 0 , 100% 100%;
  background-size: 30% 65%;
  
}

.card {
  border: none!important;
  box-shadow: 5px 5px 5px rgba(33, 45, 151,0.2);
  backdrop-filter: blur(50px);
  transition:0.2s all;
  background:transparent!important;
}
.card1 {
  background: rgba(255, 255, 255, 0.5)!important;
}
.card3{
  background: rgba(255, 255, 255 , 0.6)!important;
}
.card:hover{
  box-shadow: 0 0 25px rgba(33, 45, 151,0.2);
  transform: scale(1.04);
}

.cardheader{
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
	background-color:rgba(255, 0, 53,0.8)!important;
	border: 1px solid rgba(255, 0, 53);
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
  border: 1px solid transparent!important;
  cursor: default;
}
#footer{
  background: rgba(10, 24, 61,0.9);
  height: 33vh;
}
#footer a{color: grey;}
#footer a:hover{color: white;text-decoration: none; transition: 0.2s ease;}

@media (max-width: 768px){
	#footer{
		height: 78vh;
	}
}
    </style>

</head>

<body>
    
</body>
</html>