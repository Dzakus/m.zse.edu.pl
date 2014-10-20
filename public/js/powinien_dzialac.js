window.onload = 
	function(){
		$('table').each(function (index, table) {
	    // Read timetable
	    var data = [];
	    (function () {
	        $(table).find('tr').each(function (index, row) {
	            var row_array = [];
	            $(row).find('td, th').each(function (index, col) {
	                // console.log();
	                var html = $(col).html();
	                // Replace unneacessary tags with inner
	                html = html.replace(/<span[^>]*>(.+?)<\/span>/g, '$1');
	                html = html.replace(/<span[^>]*>(.+?)<\/span>/g, '$1');
	                row_array[row_array.length] = html;
	            });
	            data[data.length] = row_array;
	        });
	    })();

	    // Add table
	    (function () {
	        var result = $('#result');
	        var td_count = data[0].length;
	        // console.log(td_count);
	        for (var i = 2; i < td_count; i++) {
	            var tab = $('<table class="timetable">');

	            // Add header from first row of array
	            tab.append(
	            $('<tr>')
	                .append($('<th class="no">').text(data[0][0]))
	                .append($('<th class="time">').text(data[0][1]))
	                .append($('<th class="item">').text(data[0][i])));

	            // Add body. 
	            $.each(data.slice(1), function (index, row) {
	                tab.append(
	                $('<tr>')
	                    .append($('<td class="no">').text(row[0]))
	                    .append($('<td class="time">').text(row[1]))
	                    .append($('<td class="item">').html(row[i])));
	                // console.log(row[i]);
	                // console.log(row[0]+"@"+row[1]+"@"+row[i]);
	            });
	            result.append(tab);
	            // console.log("AA");
		        $('div.mobile').append(tab);
	        };
	        // console.log(result);
	    })();
	    // Remove big table;
	    $(table).detach();
	})
	}