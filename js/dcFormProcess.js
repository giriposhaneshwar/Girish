
var dcNum = $('.dcForm .mainSection input#dcNum');
var dcDate = $('.dcForm .mainSection input#dcDate');
var dcCustomer = $('.dcForm .mainSection input#dcCustomer');
var itemCode = $('.dcForm .dcEntry input[name="itemCode"]');
var productName = $('.dcForm .dcEntry input[name="productName"]');
var qty = $('.dcForm .dcEntry input[name="qty"]');
var rate = $('.dcForm .dcEntry input[name="rate"]');

// console.log(dcDate[0].value);
// entery of row
var i = 1;
rate.on('change', function(d){
	$('.dcItemEntryList').show();
	$('.dcItemEntryList table').append('<tr><td>'+i+'</td><td><input type="hidden" name="productName" value="'+productName[0].value+'" /><span>'+productName[0].value+'</span></td><td><input type="hidden" name="qty" value="'+qty[0].value+'" /><span>'+qty[0].value+'</span></td><td><input type="hidden" name="rate" value="'+rate[0].value+'" /><span>'+rate[0].value+'</span></td><td><input type="hidden" name="totRowAmt" value="'+(qty[0].value*rate[0].value)+'" /><span>'+(qty[0].value*rate[0].value)+'</span></td><td><a href="#">E</a><a href="#">D</a></td></tr>');
	itemCode[0].value = productName[0].value = qty[0].value = rate[0].value = "";
	itemCode.focus();
	i++;
});