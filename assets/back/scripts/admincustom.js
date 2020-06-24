$(function() {

	$(document).ready(function(){
		$(function(){
			$('.add_spec').click(function(){
				var sp_count = $('.sp_cn').length;
				var items ="";
				items +="<div class ='form-group contspecval rmov"+sp_count+"'>";
				items +="<input type='text' name='sp_val[]' class='form-control sp_cn' placeholder='Entrez la valeur du spec'>";
				items +="<a href='javascript:void(0)' class='remov_spec' data-id="+sp_count+">-</a>";
				items +="</div>";
				console.log(sp_count);

				if (sp_count <= 5) {
					$('.htmlitems').append(items)
				}

			});

		});
		$('body').on("click", "a.remov_spec",function(){
			var curnt = $(this).data('id');
			console.log(curnt);
			$('.rmov'+curnt).remove();

		});

    
	});

	
})