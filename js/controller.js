(function(global, $, undefined){
  'use strict';
  var dcapp = angular.module('dcapp', []);
  
  // controller
  dcapp.controller('headerController', function($scope){
    $scope.user = "this is scope object";
  });
  
  // body controller
  dcapp.controller('bodyController', function($scope){
    $scope.mods = ['DC', 'customer', 'product'];
    
    $scope.addDc = function(){
      console.log("This is angular trigger");
    }
    $scope.saveDc = function(){
      console.log("this is to save the dc");
    }
    $scope.delDc = function(){
      console.log("this is to Delete the dc");
    }
    $scope.cancelDc = function(){
      console.log("this is to Cancel the dc");
    }
    $scope.change = function(){
      var regNo = $scope.regNo;
      console.log("Field Changes", regNo);
    }
  });
}(window, jQuery));