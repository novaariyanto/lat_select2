
<!doctype html>
<html>
    <head>
        <title>Select2 - harviacode.com</title>
        <link rel="stylesheet" href="css/boostrap.min.css"/>
        <link rel="stylesheet" href="css/select2.min.css"/>
    </head>
    <body>
        <div style="width: 300px; padding: 15px">
            <div class="form-group">
                <label>Kota Kelahiran</label>
                <select id="kota" name="kota" class="form-control">
                    <option value=""></option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Bogor">Bogor</option>
                    <option value="Depok">Depok</option>
                    <option value="Tangerang">Tangerang</option>
                    <option value="Bekasi">Bekasi</option>
                    <option value="Bandung">Bandung</option>
                    <option value="Semarang">Semarang</option>
                    <option value="Yogyakarta">Yogyakarta</option>
                    <option value="Surabaya">Surabaya</option>
                </select>
            </div>
            <div class="form-group">
                <label>Kota Favorit (bisa lebih dari satu)</label>
                <select id="kota2" name="kota2" class="form-control" multiple="multiple">
                    <option value=""></option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Bogor">Bogor</option>
                    <option value="Depok">Depok</option>
                    <option value="Tangerang">Tangerang</option>
                    <option value="Bekasi">Bekasi</option>
                    <option value="Bandung">Bandung</option>
                    <option value="Semarang">Semarang</option>
                    <option value="Yogyakarta">Yogyakarta</option>
                    <option value="Surabaya">Surabaya</option>
                </select>
            </div>
         
        </div>
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/select2.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#kota").select2({
                    placeholder: "Please Select"
                });
                $("#kota2").select2({
                    placeholder: "Please Select"
                });
            });
        </script>
  </body>
</html>
