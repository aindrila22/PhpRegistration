<html>
  <html lang="en">
    <head>
    <title>SMART UNIVERSITY SYSTEM</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script src="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800&display=swap"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

<style>
html
 {
 margin: 0;
 padding: 0;
 box-sizing: border-box;
}

body {
 font-family: 'montserrat', sans-serif;
 display: flex;
 justify-content: center;
 align-items: center;
 min-height: 100vh;
 background-color: rgb(240, 247, 247);
}


.form {
 border-radius: 16px;
 padding: 32px;
 width: 100%;
 max-width: 480px;
 box-shadow:
  -2px -2px 6px 2px #FFF,
  2px 2px 6px 2px #C4C4C4;
}

h3 {
 color: #AABBBB;
 font-size: 28px;
 font-weight: 900;
 text-shadow: 2px 2px 2px #FFF, -1px -1px -1px #A4A4A4;
 text-align: center;
 margin-bottom: 16px;
}

.input {
 appearance: none;
 border: none;
 outline: none;
 background: none;
 padding: 16px;
 border-radius: 16px;
 
 display: block;
 width: 100%;
 max-width: 320px;
 margin: 0 auto 16px;
 
 box-shadow:
   inset -4px -4px 10px 4px #FFF,
   inset 4px 4px 10px 4px #C4C4C4;
 
 color: #AAA;
 font-size: 18px;
 
 transition: 0.2s ease-out;
}

.input:placeholder {
 color: rgb(31, 44, 223);
}

.input:focus {
 box-shadow:
   inset -1px -1px 3px 1px #FFF,
   inset 1px 1px 3px 1px #C4C4C4;
}

.btn {
 color: #AABBBB;
 cursor: pointer;
 border: 3px solid transparent;
 padding: 13px;
 font-weight: 700;
 box-shadow: 
  -4px -4px 13px 4px #FFF,
  4px 4px 13px 4px #C4C4C4;
 
 .icon {
  margin-right: 8px;
 }


.btn:focus {
 box-shadow: 
  -4px -4px 13px 4px #FFF,
  4px 4px 13px 4px #C4C4C4;
}

.btn:hover {
 box-shadow:
  -3px -3px 8px 3px #FFF,
  3px 3px 8px 3px #C4C4C4;
}

.btn.active {
 color: #FF5858;
 box-shadow:
  -2px -2px 8px 2px #C4C4C4,
  2px 2px 8px 2px #FFF;
 border-color: #DFDFDF;
}

.btn:active {
 color: #FF5858;
 box-shadow: 
  -4px -4px 13px 4px #C4C4C4,
  4px 4px 13px 4px #FFF;
 border-color: #DFDFDF;
}


</style>
<body>

<div class="form">
 <h3>Registration Form</h3><br><br>
 <form action="connect1.php" method="post">
 
 <input type="text" class="input" placeholder="First Name" name="firstname" required="required"/><br>
 <input type="text" class="input" placeholder="Last Name" name="lastname" required="required"/><br>
 <input type="text" class="input" placeholder="Email Id" name="email" required="required"><br>
 <input type="password" class="input" placeholder="Password"name="password" required="required" /><br>
 <button class="input btn"><i class="icon ion-md-lock"></i>REGISTER</button><br><br>
 <button class="input btn"><i class="icon ion-md-lock"></i><a href="student-login.php">Back to login page!!!!</a></button>
</div>

  

</body>
<script>
const btn = document.querySelector('.btn');

btn.addEventListener('click', function () {
 btn.classList.toggle('active');
});
</script>
</html>