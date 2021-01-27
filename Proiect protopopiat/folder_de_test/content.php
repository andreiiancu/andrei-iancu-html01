<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>

<body ng-app="myApp">

  <div ng-controller="myController">
    <a href="#!red">Red</a>
    <a href="#!green">Green</a>
    <div ng-view></div>
  </div>
  <script>
    var app = angular.module("myApp", ["ngRoute"]);

    //DEFINE THE CONTROLLER
    ////////////////////////////////
    app.controller("myController", function() {

    });

    app.config(function($routeProvider) {
      $routeProvider
        .when("/", {
          template: "<h1>Home</h1>"
        })
        .when("/red", {
          template: "<h1>Red</h1>"
        })
        .when("/green", {
          template: "<h1>Green</h1>"
        })
        .when("/blue", {
          template: "<h1>Blue</h1>"
        });
    });
  </script>

</body>

</html>
