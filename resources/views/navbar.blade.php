<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}" crossorigin="anonymous">
</head>
<body>
<div id="app">
        <div>
                <b-navbar type="dark" variant="dark">
                  <b-navbar-nav>
                    <b-nav-item href="#">Home</b-nav-item>
                    <!-- Navbar dropdowns -->
                    <b-nav-item-dropdown text="Lang" right>
                      <b-dropdown-item href="#">EN</b-dropdown-item>
                      <b-dropdown-item href="#">ES</b-dropdown-item>
                      <b-dropdown-item href="#">RU</b-dropdown-item>
                      <b-dropdown-item href="#">FA</b-dropdown-item>
                    </b-nav-item-dropdown>
                    <b-nav-item-dropdown text="User" right>
                      <b-dropdown-item href="#">Account</b-dropdown-item>
                      <b-dropdown-item href="#">Settings</b-dropdown-item>
                    </b-nav-item-dropdown>
                  </b-navbar-nav>
                </b-navbar>
              </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>