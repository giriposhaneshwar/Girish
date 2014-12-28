<div class="custContainer">
<div class="toggleCust">
	<ul>
		<li><a href="#">Add Customer</a></li>
		<li><a href="#">Upload File</a></li>
		<li><a href="#">Customer List</a></li>
	</ul>
</div>

	<div class="newEntry">
	<div class="custHeading">Add New Customer</div>
		<form action="" method="">
			<ul>
				<li>
					<label>Name</label>
					<input type="text" name="custName" id="custName" placeholder="Customer Name"/>
				</li>
				<li>
					<label>Phone</label>
					<input type="text" name="custPhone" id="custPhone" placeholder="Customer Phone" />
				</li>
				<li>
					<label>Email</label>
					<input type="text" name="custEmail" id="custEmail" placeholder="Customer Email" />
				</li>
				<li>
					<label>Tin No.</label>
					<input type="text" name="custTin" id="custTin" placeholder="Customer Tin Number" />
				</li>
				<li>
					<label>Address</label>
					<textarea name="custAddress" id="custAddress" >Customer Address</textarea>
				</li>
				<li>
					<input type="submit" name="newEntry" value="Add Customer" />
				</li>
			</ul>
		</form>
	</div>
	<div class="loadFile">
	<div class="custHeading">Upload Customer List</div>
		<form>
			<ul>
				<li>
					<label>Customer List (CSV File)</label>
					<input type="file" name="customerList">
				</li>
				<li>
					<input type="submit" value="Upload">
				</li>
			</ul>
		</form>
	</div>
	<div class="showList">
	<div class="custHeading">Customer List</div>
		
	</div>
</div>