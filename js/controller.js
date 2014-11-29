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
    $scope.dcDetails = function(){
      var regNo = $scope.regNo;
      var dcDate = $scope.dcDate;
      var dcCustomerName = $scope.dcCustomerName;
      var flag = 0;
      
      regNo == null ? flag=1 : null;
      dcDate == null ? flag=1 : null;
      dcCustomerName == null ? flag=1 : null;
      
      if(flag == 1){
        console.log("fields needed to be filled");
      }
    }
    
    $scope.productAdd = function(){
      var dcItemCode = $scope.dcItemCode;
      var dcProductName = $scope.dcProductName;
      var dcQty = $scope.dcQty;
      var dcRate = $scope.dcRate;
      var flag = 0;
      
      dcItemCode == null ? flag = 1 : flag = 0;
      dcProductName == null ? flag = 1 : flag = 0;
      dcQty == null ? flag = 1 : flag = 0;
      dcRate == null ? flag = 1 : flag = 0;
      
      var col = '<tr><td>'+dcItemCode+'</td> <td>'+dcProductName+'</td> <td class="text-center">'+dcQty+'</td> <td class="text-center">'+dcRate+'</td> <td class="text-center">total</td> <td><a href="#" class="btn btn-danger btn-xs">Del</a> <a href="#" class="btn btn-danger btn-xs">Edit</a></td></tr>';
      
      if(flag == 1){
        console.log("fields need ot be filled");
      }else{
        $('.productList').append(col);
      }
      
    }
    
  });
}(window, jQuery));