<!--<div class="col-md-2"><a href="<?php// echo site_url('C_resto/delete_resto/'.$resto->id)?>"><button type="button" class="btn btn-block btn-danger" >Hapus Data</button></a></div>-->
<div class="box-body">
	<h1>Data Restoran</h1></br>
    <form role="form" method="post" action="<?php echo site_url('C_resto/insert_resto')?>">
    <div class="form-group">
	<label>ID Restoran</label>
	<input type="text" class="form-control" name="id" placeholder="Masukan ID">
	</div>
	<div class="form-group">
	<label>Nama Restoran</label>
	<input type="text" class="form-control" name="nama_resto" placeholder=" Masukan Nama Restoran">
	</div>
	<div class="form-group">
	<label>Umur Restoran</label>
	<input type="text" class="form-control" name="umur_resto" placeholder="Masukan Umur Resto">
	</div>
	<div class="form-group">
	<label>Owner Restoran</label>
	<input type="text" class="form-control" name="owner" placeholder="Masukan Owner Restoran">
	</div>
	<div class="form-group">
	<label>Jabatan</label>
	<input type="text" class="form-control" name="jabatan" placeholder="Masukan Jabatan Owner">
	</div>
	<div class="form-group">
	<label>No Telp</label>
	<input type="text" class="form-control" name="no_telp" placeholder="id" name="no_telp">
	<i class="fa fa-fw fa-plus-square" onclick="tambah();"></i>
	<!--<script>
	function tambah(){
	var form=document.getElementsByTagName('form')[0],input=document.createElement('input');
	var x=$(".box-body");
	input.setAttribute('type','text');
	input.setAttribute('name','no_telp');
	input.setAttribute('class','form-control');
	form.appendChild(input);
	x.append();
	}
	</script> 
	ERROR di penempatan-->
	
	</div>
	<div class="form-group">
	<label>Sistem Sebelumnya</label>
	<input type="text" class="form-control" name="sistem_sebelumnya" placeholder="Masukan Sistem yang Sebelumnya Dipakai">
	</div>
	<div class="form-group">
	<label>Tanggal Visit</label>
	<input type="text" class="form-control" name="tanggal_visit" value="<?php echo $date=date("Y-m-d"); ?>" readonly><!--can digawean make form helper da copas template adminlte jadi si CI masih lieureun ieu teh string atawa date-->
	</div>
	<div class="form-group">
	<label>Marketing</label></br>
	<?php 
		$koneksi=mysqli_connect("localhost","root","","template");
		$query=mysqli_query($koneksi,"select id ,nama_marketing from marketing");
		
	?>
	<select name="marketing">
		<?php
		while($isi=mysqli_fetch_array($query)){
		echo"<option value='".$isi['id']."'>".$isi['nama_marketing']."</option>";}
		?>
	</select>
	</div>
	<div class="form-group">
	<label>Potensi</label></br>
	<select name="potensi">
	<option value="1">Sangat Potensial</option>
	<option value="2">Potensial</option>
	<option value="3">Tidak Potensial</option><!-- potensial pake nomer-->
	</select>
	</div>
	<div class="box-footer">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</div>
	</form>
</div>