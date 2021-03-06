<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>

      html, body {
          background-color: #fff;
          color: black;
          font-family: 'Montserrat', sans-serif;
          font-weight: 200;
          height: 100vh;
          text-align: center;
          margin: 0;
          padding: 10px;
      }

      h1{
        text-transform: uppercase;
        font-weight: bold;
      }
      a{
        color: gray;
        text-decoration: none;
      }

      table{
        width: 500px;
        margin: 0 auto;
      }

      table tr,td{
        text-align: center;
      }

      td.hover:hover{
        background: lightgray;
      }

      input{
        padding: 10px;
        background: red;
        text-align: center;
      }
      .w100{
        width: 100%;
      }
      .p10{
        padding: 10px;
      }
      button{
        padding: 10px;
        border-radius: 20px;
      }

      button:hover{
        padding: 12px;
        background: red;
      }

      .black{
        color: black;
      }

      .red{
        color: red;
      }

      .full-height {
          height: 100vh;
      }

      .flex-center {
          align-items: center;
          display: flex;
          justify-content: center;
      }

      .position-ref {
          position: relative;
      }

      .top-right {
          position: absolute;
          right: 10px;
          top: 18px;
      }

      .content {
          text-align: center;
      }

      .title {
          font-size: 84px;
      }

      .links > a {
          color: black;
          padding: 0 25px;
          font-size: 13px;
          font-weight: 600;
          letter-spacing: .1rem;
          text-decoration: none;
          text-transform: uppercase;
      }

      .m-b-md {
          margin-bottom: 30px;
      }

    </style>
  </head>
  <body>
      @yield('main_section')
  </body>
</html>
