<!DOCTYPE html>
<html lang="en">
<head>
  <title>Job List</title>
 </head>
<body>

<div class="form-group">
      <input type="text" name="search" id="search" class="form-control" placeholder="Search Job Data" />
     </div>
<table border="1">
    <thead>
		<tr>
			<td>Company Name</td>
            <td>Job Title</td>
            <td>Location</td>
			<td>Salary</td>
        </tr>
        </thead>
        <tbody>

        </tbody>



	</table>

    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('job.search') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
</script>
</body>

</html>
