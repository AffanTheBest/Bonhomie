<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }

    .navbar{
        background: rgba(0,0,0,0.1);

    }
    .navbar a{
        font-size: 18px!important;
        text-decoration: none!important;
        color: #333!important;
        font-weight: 350px!important;
    }
    .navbar .active{
        font-weight: 700!important;
        cursor: pointer;
    }
    .navbar .active:hover{
        font-weight: 600;
        background: rgba(162, 155, 254,0.4);
    }
    .navbar ul li{
        transition: 0.2s all;
    }
    .navbar ul li:hover{
        background: rgba(162, 155, 254,0.4);
    }
    .header{
        height: 95vh;
        background-image: url("headerbg.jpg");
        background-attachment: fixed;
    }

    .header-bg{
        width: 100%;
        height: 100%;
        /* background: rgba(0,0,0,0); */
    }
    .headerpart{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .center_div{
        /* color : #636e72; */
        font-size: 50px!important;
        padding: 10px;
        background: rgba(39, 60, 117,0.3);
    }

    .team{
        background: url("teambg.jpg") fixed;
    }
    .team-container {
        height: 79vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .row{
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .col{
        display:flex;
        justify-content:center;
        align-items:center;
        margin: 10px 20px;
    }
    .user-card{
        width: 280px;
        height:250px;
    }

    .card-content{
        width: 100%;
        height: 100%;
        transition: 0.7s all;
        transform-style: preserve-3d;
        transform: perspective(500px);
    }
    .front , .back{
        width: 100%;
        height: 100%;
        cursor: pointer;
        position:absolute;
        backface-visibility: hidden;
        transition: all 1s;
    }
    .front{
        display: grid;
        place-items: center;
        transform: perspective(500px) scale(1);
    }
    .front img {
        width: 190px;
        height: 190px;
        margin: auto;
        border-radius: 50%;
        transition:1s all;
        box-shadow: 0 0 20px #0984e3;
    }

    .back{
        /* background:rgba(0,0,0,0.5); */
        box-shadow: 0 0 10px #333;
        box-shadow: 5px 5px 10px #a29bfe;
        opacity: 0;
        transform: perspective(500px) scale(0);
    }
    .back h3{
        /* color: rgb(255, 255, 255); */
        padding: 10px;
        margin: 50px 0 2px 0;
    }
    .icons{
        /* color: rgb(255, 255, 255)!important; */
        width: 100%;
        padding: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .back i{
        margin: 0 10px;
        transition: 0.3s all;
    }
    .back i:hover{
        color: #5083EC;
        transform: scale(1.1);
    }
    .user-card:hover .front{
        opacity: 0;
        transform: perspective(500px) scale(0);
    }
    .user-card:hover .back{
        transform: perspective(500px) scale(1);
        opacity: 1;
    }

    .back-btn{
        transition: 1s all;
    }

    @media (max-width:768px) {
        .center_div{
            width: 95vw;
        }
        .center_div p{
            font-size: 35px;
            font-weight: bold;
        }
        .center_div h4{
            font-size: 18px;
            color: rgb(83, 83, 83);
        }
        .team-container{
            height: auto;
        }
    }
            </style>
</head>
<body>
    
</body>
</html>