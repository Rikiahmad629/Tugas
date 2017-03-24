<!--<div class="col-md-2"><button type="button" class="btn btn-block btn-danger" href="<?php echo site_url('C_resto/delete_resto/'.$resto->id)?>">Hapus Data</button></div>-->
<div class="box-body">
	<h1>Data User</h1></br>
	
    <form role="form" method="post" action="<?php echo site_url('C_user/insert_user')?>">
    <div class="form-group">
	<label>ID User</label>
	<input type="text" class="form-control" name="id" placeholder="Masukan ID">
	</div>
	<div class="form-group">
	<label>Nama Awal</label>
	<input type="text" class="form-control" name="nama_awal" placeholder=" Masukan Nama Awal User">
	</div>
	<div class="form-group">
	<label>Nama Akhir</label>
	<input type="text" class="form-control" name="nama_akhir" placeholder=" Masukan Nama Akhir User">
	</div>
	<input type="text" class="form-control" name="ip" value="127.0.1" style="display:none;">
	<div class="form-group">
	<label>Username</label>
	<input type="text" class="form-control" name="username_user" placeholder="Masukan Email Username">
	</div>
	<div class="form-group">
	<label>Password</label>
	<input type="password" class="form-control" name="password_user" placeholder="Masukan Password">
	</div>
	<div class="form-group">
	<label>No Telp</label>
	<input type="text" class="form-control" name="no_telp" placeholder="Nomor Telepon">
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
	
	<div class="form-group">
	<label>Jenis User</label>
	<SELECT class="form-control">
		<option value="3">Marketing</option>
		<option value="4">Supervisor Marketing</option>
		<option value="5">Technical Support</option>
		<option value="6">Supervisor Technical</option>
	</SELECT>
	</div>
	<div class="box-footer">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</div>
	</form>
</div>