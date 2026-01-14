<script src="https://code.jquery.com/jquery-1.10.2.js"></script>


<script>
$(document).ready(function() {
	// content to add after the current row
	var $row2 =	$('<tr id="row2">' +
					'<td>B</td>' +
					'<td>Two</td>' +
					'<td>Yellow</td>' +
					'<td>Banana</td>' +
					'<td>$1.23</td>' +
					'<td> </td>' +
				'</tr>');
	
	// add hidden divs around the content of all the TD tags
	$row2.find('td').wrapInner('<div style="display:none" />');
	
	// add this row after the first row
	$('#row1').after($row2);

	$('#row1 a').click(function() {
		if ($('#row2 div').is(":visible")) {
			// hide the div
			$('#row2 div').slideUp(700);
			
			// update link text
			$('#row1 a').text('show row 2');
			
		} else {
			// slide the div into view
			$('#row2 div').slideDown(700);
			
			// update link text
			$('#row1 a').text('hide row 2');
		}
		
		// prevent the click on the link from propagating
		return false;
	});
});
</script>


<table>
  <tr id="row1">
    <td>A</td>
    <td>One</td>
    <td>Red</td>
    <td>Apple</td>
    <td>$0.99</td>
    <td><a href="">Show row 2</a></td>
  </tr>
</table>


