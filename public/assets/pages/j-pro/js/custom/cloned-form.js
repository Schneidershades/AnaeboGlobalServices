$(document).ready(function(){

		/***************************************/
		/* Cloned element */
		/***************************************/
		// $('.clone-widget').cloneya();

		// $('.clone-rightside-btn-1').cloneya();

		// $('.clone-rightside-btn-2').cloneya();

		// $('.clone-leftside-btn-1').cloneya();

		// $('.clone-leftside-btn-2').cloneya();

		// $('.clone-link').cloneya();

		// $('.select-stock').cloneya();


  //       selectValues = { "1": "test 1", "2": "test 2" };

  //       $.each(selectValues, function(key, value) {   
		//      $('.select-stock')
		//          .append($("<option></option>")
		//                     .attr("value",key)
		//                     .text(value)); 
		// });


    //     $.ajax({
		  //       type: "POST",
		  //       url: "sample.php",
		  //       cache: "false",
		  //       dataType: "json",
		  //       success: function(data) {
		  //         //data.month = 03
		  //         $('#birth_month option[value="data.month"]').prop('selected', true);
		  //       }
		  // });


		  // $.ajax({
		  //   url: '/ajax/store',
		  //   processResults: function (data) {
		  //     // Tranforms the top-level key of the response object from 'items' to 'results'
		  //     return {
		  //       results: data.items
		  //       $.each(result.data, function (key, value) {
				//     $("#questionNumber").append($('<option>', {
				//         value: value.id,
				//         text: value.number,
				//         'data-mark': value.id
				//     }));
				// });
		  //     };
		  //   }
		  // });

		 //  $('.continentname').change(function () {
			//     var id = $(this).find(':selected')[0].id;
			//     //alert(id); 
			//     $.ajax({
			//         type: 'POST',
			//         url: '../include/continent.php',
			//         data: {
			//             'id': id
			//         },
			//         success: function (data) {
			//             // the next thing you want to do 
			//             var $country = $('#country');
			//             $country.empty();
			//             $('#city').empty();
			//             for (var i = 0; i < data.length; i++) {
			//                 $country.append('<option id=' + data[i].sysid + ' value=' + data[i].name + '>' + data[i].name + '</option>');
			//             }

			//             //manually trigger a change event for the contry so that the change handler will get triggered
			//             $country.change();
			//         }
			//     });

			// });



  //       $.ajax({
		//   method: "GET",
		//   url: "/ajax/store",
		//   dataType: "script"
		// });

		// var result = {data:[
		// 	{
		//   	id:"5",
		//     number: "5"
		//   },
		//   {
		//   	id: "89",
		//     number: "89"
		//   }
		// ]}
		// $.each(result.data, function (key, value) {
		//     $("#questionNumber").append($('<option>', {
		//         value: value.id,
		//         text: value.number,
		//         'data-mark': value.id
		//     }));
		// });
		
		/***************************************/
		/* end Cloned element */
		/***************************************/


			// $(document).on('click', '.tr-add', function(){
			// 	var html = 
			// 	html += '<tr>'+
			// 			'<select name="quantity[]" class="form-control">' +
		 //                    @foreach($customers as $customer)
		 //                        '<option value="{{$customer['id']}}">{{$customer['name']}}</option>' +
		 //                    @endforeach
		 //                '</select>' +
			// 	html += '	<td><input type="number" placeholder="quantity" name="quantity[]"></td>'
			// 	html += '	<td><input type="number" placeholder="Units" name="unit[]"></td>'
			// 	html += '	<td><input type="number" placeholder="total" name="total"></td>'
			// 	html += '	<td><button type="button" class="addon-btn adn-50 adn-remove tr-remove">'
   //              html += '        	<i class="icofont icofont-plus"></i>'
   //              html += '        </button>'
   //              html += '    </td>'
			// 	html += '</tr>';

			// 	$('#item_table').append(html);
			// });

			// $(document).on('click', '.tr-remove', function(){
			// 	$(this).closest('tr').remove();
			// });


			// $(function() {
//   $("#addMore").click(function(e) {
//     e.preventDefault();
//     $("#fieldList").append("<li>&nbsp;</li>");
//     $("#fieldList").append("<li><input type='text' name='name[]' placeholder='Name' /></li>");
//     $("#fieldList").append('<select class="" name="txtSubCategory[]" id="subcategory1">
//             <option value="">Please select category</option>
//         </select>');
//     $("#fieldList").append("<li><input type='text' name='email[]' placeholder='E-Mail' /></li>");
//   });
// });

// $(function() {
//   $(".tr-add").click(function() {
//     $("#item_table").append('<tr>');
//     $("#item_table").append('<td><input type="number" placeholder="quantity" name="quantity[]"></td>');
//     $("#item_table").append('<td><input type="number" placeholder="quantity" name="quantity[]"></td>');
//     $("#item_table").append('<td><input type="number" placeholder="quantity" name="quantity[]"></td>');
//     $("#item_table").append('<td><input type="number" placeholder="quantity" name="quantity[]"></td>');
//     $("#item_table").append('<td><input type="number" placeholder="quantity" name="quantity[]"></td>');
//     $("#item_table").append('<tr>');
//   });
// });

		// var $addItem = $('.tr-add');
	 //    var $orderMenuItems = $('#item_table');

	 //    $addItem.click(function(){
	 //        var markup = $('.orderItem')[0].outerHTML;
	 //        $orderMenuItems.append(markup).find("input,textarea").val("").find('select option:first-child()');
	 //    });

	 //    $(document).on('click', '.tr-remove', function(){
		// 	$(this).closest('tr').remove();
		// });


		  // var i = 0;
		  // var last12 = $('#main').last();
		  // $(document).on('click', '.add', function() {
		  //      var clone = $('#main').clone().find("input,textarea").val("").end().find('select option:first-child()').attr('selected','selected').end().attr("id", "main" + i++).append(last12);

		  //     //clone.id = "main" + i;

		  // });

		  // $(".remove").click(function(){
		  //         $('div[id^="main"]:last').remove();
		  // });


	});