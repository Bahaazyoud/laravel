<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        * {
        box-sizing: border-box;
        }
        html, body {
        min-height: 100vh;
        padding: 0;
        margin: 0;
        font-family: Roboto, Arial, sans-serif;
        font-size: 14px;
        color: #666;
        }
        input, textarea {
        outline: none;
        }
        body {

        padding: 20px;
        background: #5a7233;
        }
        h1 {
        margin-top: 0;
        font-weight: 500;
        }
        form {

        position: relative;
        width: 80%;
        border-radius: 30px;
        background: #fff;
        }
        .form-left-decoration,
        .form-right-decoration {
        content: "";
        position: absolute;
        width: 50px;
        height: 20px;
        border-radius: 20px;
        background: #5a7233;
        }
        .form-left-decoration {
        bottom: 60px;
        left: -30px;
        }
        .form-right-decoration {
        top: 60px;
        right: -30px;
        }
        .form-left-decoration:before,
        .form-left-decoration:after,
        .form-right-decoration:before,
        .form-right-decoration:after {
        content: "";
        position: absolute;
        width: 50px;
        height: 20px;
        border-radius: 30px;
        background: #fff;
        }
        .form-left-decoration:before {
        top: -20px;
        }
        .form-left-decoration:after {
        top: 20px;
        left: 10px;
        }
        .form-right-decoration:before {
        top: -20px;
        right: 0;
        }
        .form-right-decoration:after {
        top: 20px;
        right: 10px;
        }
        .circle {
        position: absolute;
        bottom: 80px;
        left: -55px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #fff;
        }
        .form-inner {
        padding: 40px;
        }
        .form-inner input,
        .form-inner textarea {
        display: block;
        width: 100%;
        padding: 15px;
        margin-bottom: 10px;
        border: none;
        border-radius: 20px;
        background: #d0dfe8;
        }
        .dec {
            display: flex;
        justify-content: center;
        align-items: center;
        }
        .form-inner textarea {
        resize: none;
        }
        button {
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        border-radius: 20px;
        border: none;
        border-bottom: 4px solid #3e4f24;
        background: #5a7233;
        font-size: 16px;
        font-weight: 400;
        color: #fff;
        }
        button:hover {
        background: #3e4f24;
        }
        @media (min-width: 568px) {
        form {
        width: 60%;
        }
        }
      </style>

</head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
   
  </div>
</nav>
