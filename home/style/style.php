<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap');
    font-family: 'Comfortaa', cursive;
    #footer a{color: grey;}
        #footer a:hover{color: white;text-decoration: none; transition: 0.2s ease;}

* {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}
.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1.5rem;
  clear: both;
  font-weight: 400;
  color: #3a3b45;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}

.dropdown-item:hover, .dropdown-item:focus {
  color: #2e2f37;
  text-decoration: none;
  background-color: #f8f9fc;
}

.dropdown-item.active, .dropdown-item:active {
  color: #fff;
  text-decoration: none;
  background-color: #4e73df;
}

.dropdown-item.disabled, .dropdown-item:disabled {
  color: #858796;
  pointer-events: none;
  background-color: transparent;
}
.btn {
            width: 88px;
            
            border: none;
            outline: none;
            height: 39px;
            border-radius: 49px;
            color: #fff;
            /*text-transform: uppercase;*/
            font-weight: 600;
            margin: 2px 0;
            cursor: pointer;
            transition: 0.5s;
        }

.btn:hover {
    background-color: #4d84e2;
  }

a{text-decoration: none!important;
color: #95a5a6}
nav{
  /* box-shadow: 0 0 30px #000; */
}
.header{height: 100%;
margin-bottom: 50px;}

@media (max-width: 768px) {
  .header img{
    height: 55vh;
  }
}
#events{
  height: 100%;
  background: #2c3e50;
  display: flex;
  justify-content: center;
}
.carousel-indicators li{
  width: 15px;
  height: 15px;
  border-radius: 50%;
  margin: 0 8px;
}
.card{
  border: 2px solid #34495e;
  /* color: ; */
  border-radius: 5px;
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
  /* border-radius:5px 5px 0 0; */
}
.caption{
  position: absolute;
  top: 0;
  left: 0;
  color: rgb(122, 113, 113);
  width: 100%;
  height: 100%;
  display: grid;
  place-items: center;
  opacity: 0;
  transition: 1s all;
}
.caption h2{
  background: rgba(0,0,0,0.4);
  width: 100%;
  height: 100%;
  display: grid;
  place-items: center;
}
.cardheader:hover img{
  transform: rotate(14deg) scale(1.4);
}
.cardheader:hover .caption{
  opacity: 1;
}
.login_p{
  height: 100%;
  display: grid;
  place-items: center;
  align-items: center;
}
.login_btn{
  display: flex;
  justify-content: center;
}
.login_btn a{
  border:2px solid #e74c3c;
  background:  #e74c3c;
  color: #bdc3c7;
  padding: 2px 20px;
  border-radius: 100px;
  margin: 10px 10px;
  font-weight: bold;
  transition: all .4s;
  position: relative;
}
.login_btn a:hover{
  background:  #bdc3c7;
  color: #e74c3c;
}
.login_btn a::before{
  width: 100%;height: 100%;
  background: black; position: absolute;
  left: 0;top: 0;
}
#footer{
  background: #0a183d;
   height: 33vh;
}
#footer a{color: grey;}
#footer a:hover{color: white;text-decoration: none; transition: 0.2s ease;}

@media (max-width: 768px){
  #footer{
    height: 81vh;
  }
}

    </style>
  <title>Document</title>
</head>
<body>
  
</body>
</html>