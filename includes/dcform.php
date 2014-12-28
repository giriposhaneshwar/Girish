<form action="" method="post" class="dcForm">
	<h1>Delivery Challan</h1>
	<div class="mainSection">
		<ul>
			<li>
				<label>DC No. </label>
				<input type="text" name="dcNum" id="dcNum" placeholder="001"  value="testH" />
			</li>
			<li>
				<label>Date </label>
				<input type="text" name="dcDate" id="dcDate" placeholder="01/01/15" />
			</li>
			<li>
				<label>Customer </label>
				<input type="text" name="dcCustomer" id="dcCustomer" placeholder="Customer Name" />
			</li>
		</ul>
	</div>
	<div class="dcEntry">
		<ul>
			<li>
				<label>Item Code</label>
				<input type="text" name="itemCode" placeholder="001" />
			</li>
			<li>
				<label>Product Name</label>
				<input type="text" name="productName" placeholder="Item" />
			</li>
			<li>
				<label>Qty</label>
				<input type="text" name="qty" placeholder="5" />
			</li>
			<li>
				<label>Rate</label>
				<input type="text" name="rate" placeholder="5" />
			</li>
		</ul>
	</div>
	<div class="dcItemContainer">
		<div class="dcItemEntryList">
			<table width="100%" border="0">
				<tr>
					<th>Sl No.</th>
					<th>Product</th>
					<th>Qty</th>
					<th>Rate</th>
					<th>Amount</th>
					<th>Options</th>
				</tr>
			</table>
			<div class="totalRow">
				<h4>Total</h4>
				<span class="rTotal">
					<input type="hidden" name="totRowAmt" value="" />
					250000
				</span>
			</div>
		</div>
		<div class="grandTotal">
			<div class="wordtotal">Twenty five thousand only</div>
			<div class="vatCalc">
		        <label>Vat(%)</label> <input type="hidden" name="vat" id="vat"><b>12.42</b>
		        <label>Disc(%)</label> <input type="hidden" name="disc" id="disc"><b>5</b>
		        <label>Grand Total</label> <input type="hidden" name="gtot" value=""> <b>64753.92</b>
	      	</div>
		</div>
		<div class="btnPanel">
			<button class="add">Add</button>
			<button class="save">Save &amp; Preview</button>
			<button class="cancel">Cancel</button>
		</div>
	</div>
</form>
<script type="text/javascript" src="./js/dcFormProcess.js"></script>