<html>
  <head>
        
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
      
      #card {
  position: relative;
  width: 320px;
  display: block;
  margin: 40px auto;
  text-align: center;
  font-family: 'Source Sans Pro', sans-serif;
}

#checkmark {
  font-weight: lighter;
  fill: #fff;
  margin: -3.5em auto auto 20px;
}

#lower-side {
  padding: 2em 2em 5em 2em;
  background: #fff;
  display: block;
  border-bottom-right-radius: 8px;
  border-bottom-left-radius: 8px;
  border-radius:25px;
}
#message {
  margin-top: -.5em;
  color: #757575;
  letter-spacing: 1px;
}
#contBtn {
  position: relative;
  top: 1.5em;
  text-decoration: none;
  background: #8bc34a;
  color: #fff;
  margin: auto;
  padding: .8em 3em;
  -webkit-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
  -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
  box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
  border-radius: 25px;
  -webkit-transition: all .4s ease;
		-moz-transition: all .4s ease;
		-o-transition: all .4s ease;
		transition: all .4s ease;
}
#contBtn:hover {
  -webkit-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
  -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
  box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
  -webkit-transition: all .4s ease;
		-moz-transition: all .4s ease;
		-o-transition: all .4s ease;
		transition: all .4s ease;
}

.check{
    color:green;
    font-size:60px;
    font-weight:700;

}


    </style>
    
    <body>
    <div id='card' class="gola">
  <div id='upper-side'>

    
    <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
   
  </div>
  <div id='lower-side'>
    <p id='message'>
    Congratulations, your Order has been successfully done.
    </p>
    <a href="cart.php" id="contBtn">Continue</a>
  </div>
</div>
    
    </body>
</html>