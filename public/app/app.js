var app = angular.module("fitwork", ['ngMap']);

app.run(function($rootScope){
    $rootScope.$apply($(document).foundation());
});


