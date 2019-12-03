<?php  
	include "../fungsi/koneksi.php";
    //mengambil id untuk edit user
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = mysqli_query($koneksi, "SELECT * FROM bioskop WHERE kode_bioskop = '$id' ");
		if (mysqli_num_rows($query)) {
			while($row2 = mysqli_fetch_assoc($query)):
?>

<section class="content">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="text-center">Edit Data Bioskop</h3>
                </div>                
                <form method="post"  action="editbioskopproses.php" class="form-horizontal">
                    <div class="box-body">
                     <div class="row">
                        <div class="col-md-2">
                            <a href="index.php?p=bioskop" class="btn btn-primary"><i class="fa fa-backward"></i> Kembali</a> 
                        </div>
                        <br><br>
                    </div>     
                    	<input type="hidden" name="id" value="<?= $row2['id_user']; ?>">
                        <div class="form-group ">
                            <label for="username" class="col-sm-offset-1 col-sm-3 control-label">Kode Bioskop</label>
                            <div class="col-sm-4">
                                <input type="text"  required value="<?= $row2['kode_bioskop']; ?>" class="form-control" name="kode_bioskop">
                            </div>
                        </div>
                         <div class="form-group ">
                            <label for="manajer" class="col-sm-offset-1 col-sm-3 control-label">Nama Bioskop</label>
                            <div class="col-sm-4">
                                <input type="text" value="<?= $row2['nama_bioskop'];  ?>" required  class="form-control" name="nama_bioskop">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="asmen" class="col-sm-offset-1 col-sm-3 control-label">Manager</label>
                            <div class="col-sm-4">
                                <input type="text" value="<?= $row2['mgr'];  ?>" required  class="form-control" name="mgr">
                            </div>
                        </div>   
                        <div class="form-group ">
                            <label for="asmen" class="col-sm-offset-1 col-sm-3 control-label">Alamat Bioskop</label>
                            <div class="col-sm-4">
                                <input type="text" value="<?= $row2['alamat'];  ?>" required  class="form-control" name="alamat">
                            </div>
                        </div>      
                        <div class="form-group ">
                            <label for="asmen" class="col-sm-offset-1 col-sm-3 control-label">No. Telp</label>
                            <div class="col-sm-4">
                                <input type="text" value="<?= $row2['no_telp'];  ?>" required  class="form-control" name="no_telp">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="asmen" class="col-sm-offset-1 col-sm-3 control-label">No. Fax</label>
                            <div class="col-sm-4">
                                <input type="text" value="<?= $row2['no_fax'];  ?>" required  class="form-control" name="no_fax">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="asmen" class="col-sm-offset-1 col-sm-3 control-label">Email</label>
                            <div class="col-sm-4">
                                <input type="text" value="<?= $row2['email'];  ?>" required  class="form-control" name="email">
                            </div>
                        </div>               
                         
                        </div>                       
                        <div class="form-group">
                            <input type="submit" name="update" class="btn btn-primary col-sm-offset-4 " value="Simpan" > 
                            &nbsp;
                            <input type="reset" class="btn btn-danger" value="Batal">                                                                              
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php endwhile; } }  ?>