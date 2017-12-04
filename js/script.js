/*global angular */

var app = angular.module('myApp', ['ngRoute']);

app.config(function ($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl: 'components/home.php'
        })
        .when('/login', {
            templateUrl: 'components/login.php'
        })
        .when('/admin_login', {
            templateUrl: 'components/admin_login.php'
        })
        .when('/registration', {
            templateUrl: 'components/registration.php'
        })
        .when('/search', {
            templateUrl: 'components/search.php'
        })
        .when('/lookup', {
            templateUrl: 'components/lookup.php'
        })
        .when('/delete', {
            templateUrl: 'components/delete.php'
        })
        .when('/logout', {
            templateUrl: 'login.php'
        })
        .otherwise({
            template: 'Error 404'
        });
});
