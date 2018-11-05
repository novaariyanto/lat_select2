

<!DOCTYPE html>
<html>
<head>
	<title>Latihan select 2</title>
	<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/boostrap.min.css"/>
  <script src="js/jquery-1.11.2.min.js"></script>


<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<!-- 
        <link rel="stylesheet" href="css/select2.min.css"/>
        <script src="js/select2.min.js"></script> -->
</head>
<body>

<div class="row">
 <div class="col-lg-4">
  <form class="form-group">
   <label>Contoh Select2 Ajax</label>
   <select name="kabupaten" class="form-control select2">
    <option value="">- pilih kabupaten -</option>
   </select>
  </form>
 </div>

</div>
<script type="text/javascript">
$(document).ready(function(){

});
    $(function(){
       $('.select2').select2({
           minimumInputLength: 3,
           allowClear: true,
           placeholder: 'masukkan nama propinsi',
           ajax: {
              dataType: 'json',
              url: 'daftarpropinsi.php',
              delay: 800,
              data: function(params) {
                return {
                  search: params.term
                }
              },
              processResults: function (data, page) {
              return {
                results: data
              };
            },
          }
      }).on('select2:select', function (evt) {
         var data = $(".select2 option:selected").text();
         alert("Data yang dipilih adalah "+data);
      });
 });
</script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>