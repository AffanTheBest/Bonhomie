<html>
<head>
  <style>
  a {
    text-decoration: none !important;
  }
  
  body {
    background-image: url("laptop.svg"), url("sports.svg");
    background-position: top right,-5% 90%;
    background-size: 50% 50%;
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
  
  
  .main form h2 {
    padding: 10px 50px;
    background: #74b9ff;
    border-radius: 10px;
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
    form h2 {
      font-size: 100%;
    }
    .main form {
      width: 90%;
    }
    .main .input-group {
      border: 1px solid #2c3e50;
      width: 95%;
    }
  }
  /*# sourceMappingURL=register.css.map */
  </style>
</head>
<body>
</body>
</html>