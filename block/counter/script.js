	$(document).ready(function(){
		var itemprice = $('.item-price').text();
		$('#total').val(itemprice);

		$(".switch__number .switch__button").on("click", function() {
			var $button = $(this);
			var oldValue = $button.parent().find("input").val();  
			if ($button.text() == "+") {
				var newVal = parseFloat(oldValue) + 1;
			}  
			else {
				if (oldValue > 1) {
					var newVal = parseFloat(oldValue) - 1;
				} else {
					newVal = 1;
				}
			}
			$button.parent().find("input").val(newVal);

			var quantity = $('#quantity').val();
			var total = itemprice*quantity;
			$('#total').val(total);
		});
	});