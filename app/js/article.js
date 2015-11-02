var articles = angular.module('articles',['ngRoute']);

articles.config(['$routeProvider', function($routeProvide){
    $routeProvide
        .when('/seo1', {
            templateUrl:'./template/seo1.html'
        })
        .when('/seo2', {
            templateUrl:'./template/seo2.html'
        })
        .when('/seo3', {
            templateUrl:'./template/seo3.html'
        })
        .when('/seo4', {
            templateUrl:'./template/seo4.html'
        })
        .when('/seo5', {
            templateUrl:'./template/seo5.html'
        })
        .when('/seo6', {
            templateUrl:'./template/seo6.html'
        })
        .when('/seo7', {
            templateUrl:'./template/seo7.html'
        })
        .when('/seo8', {
            templateUrl:'./template/seo8.html'
        })
        .when('/seo9', {
            templateUrl:'./template/seo9.html'
        })
        .when('/seo10', {
            templateUrl:'./template/seo10.html'
        })
        .when('/seo11', {
            templateUrl:'./template/seo11.html'
        })
        .when('/seo12', {
            templateUrl:'./template/seo12.html'
        })
        //.when('/phones/:phoneId', {
        //    templateUrl:'template/phone-detail.html'
        //
        //})
        .otherwise({
            redirectTo: '/seo1'
        })
}

]);

//articles.controller('ArticleController',['$scope','$http', function($scope, $http) {
//
//    $http.get('./templates/pages.json').success(function(data) {
//       $scope.pages = data;
//    });
//
//    //console.log('$location.url() - ', $location.url());
//    //console.log('$location.path() - ', $location.path());
//    //console.log('$location.search() - ', $location.search());
//    //console.log('$location.hash() - ', $location.hash());
//
//
//}]);