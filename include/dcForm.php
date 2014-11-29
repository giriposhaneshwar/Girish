<div class="dcContainer" ng-controller="bodyController">
  <form action='' method="POST" action="" class="dcForm ">
    <div class="col-sm-12 dcTitle">
      <div class="col-sm-5 dcHeading">Delivery Challan</div>
      <div class="butActions col-sm-7 pull-right">
        <button class="btn btn-danger addForm" ng-click="addDc()">Add</button>
        <button class="btn btn-danger saveForm" ng-click="saveDc()">Save &amp; Preview</button>
        <button class="btn btn-danger cancelForm" ng-click="cancelDc()">Cancel</button>
        <button class="btn btn-danger delForm" ng-click="delDc()">Delete</button>
      </div>
    </div>
    <div class="dcheader">
      <label>DC No.</label>
      <input type="text" name="regNo" id="regNo" placeholder="001" ng-model="regNo" ng-change="change()"/>

      <label>Date</label>
      <input type="text" name="dcDate" id="dcDate" placeholder="DD/MM/YYYY" />

      <label>Customer</label>
      <input type="text" name="dcCustomerName" id="dcCustomerName" placeholder="Customer Name" />
    </div>
    <div class="dcBody">

      <label>Item Code</label>
      <input type="text" name="dcItemCode" id="dcItemCode" placeholder="001" />


      <label>Product Name</label>
      <input type="text" name="dcCustomerName" id="dcProductName" placeholder="Customer Name" />

      <label>Qty</label>
      <input type="text" name="dcQty" id="dcQty" placeholder="5" />

      <label>Rate</label>
      <input type="text" name="dcRate" id="dcRate" placeholder="1200" />
    </div>
    <div class="dcItemContainer">
      <table class="table">
        <tr>
          <th>Sno.</th>
          <th>Product</th>
          <th class="text-center">Qty</th>
          <th class="text-center">Rate</th>
          <th class="text-center">Amount</th>
          <th>Options</th>
        </tr>
        <?php
        for ($i = 0; $i <= 5; $i++) {
          echo '<tr>
          <td>' . ($i + 1) . '</td>
          <td>Name of the product</td>
          <td class="text-center">8</td>
          <td class="text-center">1200</td>
          <td class="text-center">' . (8 * 1200) . '</td>
          <td><a href="" class="btn btn-danger btn-xs">Del</a> <a href="" class="btn btn-danger btn-xs">Edit</a></td>
        </tr>';
        }
        ?>
        <tr>
          <th colspan="4" style="text-align: right;padding-right: 20px; text-transform: uppercase;">Total</th>
          <th class="text-center"><?php echo (8 * 1200 * 6); ?></th>
          <th></th>
        </tr>
      </table>
      <div class="amtText">
        <?php
        $gTot = (((8 * 1200 * 6) * 12.42) / 100) + (8 * 1200 * 6);
        $amtText = str_split($gTot);
        $txtArr = array(
            0 => "Zero",
            1 => "One",
            2 => "Two",
            3 => "Three",
            4 => "Four",
            5 => "Five",
            6 => "Six",
            7 => "Seven",
            8 => "Eight",
            9 => "Nine",
            '.' => "Dot",
        );
        echo '<h4>In Words : </h4>';
        echo '<b>';
        foreach ($amtText as $k => $v) {
          echo strtoupper($txtArr[$v]) . " ";
        }
        echo ' ONLY</b>';
        ?>
      </div>
      <div class="vatCalc">
        <label>Vat(%)</label> <input type="text" name="vat" id="vat" placeholder="12.42"><br>
        <label>Disc(%)</label> <input type="text" name="disc" id="disc" placeholder="5"><br>
        <label>Grand Total</label> <b><?php echo $gTot; ?></b>
      </div>
    </div>
  </form>
</div>