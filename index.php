<?php
include './config/const.php';
include './config/dbCon.php';

$db = new dbCon();

include './include/consts.php';
include './include/vars.php';
include './include/header.php';
?>

<!-- Body Section  -->
<div class="bodySection" ng-controller="bodyController">
  <div class="bodyInner">
    <ul>
      <li ng-repeat="item in mods"><a href="./{{item | lowercase}}.php">{{item | uppercase}}</a></li>
    </ul>
  </div>
</div>

<?php include './include/footer.php'; ?>
