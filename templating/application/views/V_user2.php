<div class="col-md-2"><a href="<?php echo site_url('C_user/delete_user/'.$user->id)?>" id="hapus"><button type="button" class="btn btn-block btn-danger" >Hapus Data</button></a></div>
<div class="box-body">
	<h1>Data User</h1></br>
	
    <form role="form" method="post" action="<?php echo site_url('C_user/update_user/'.$user->id)?>">
    <div class="form-group">
	<label>ID User</label>
	<input type="text" class="form-control" name="id" placeholder="Masukan ID" value="<?php echo $user->id;?>">
	</div>
	<div class="form-group">
	<label>Nama User</label>
	<input type="text" class="form-control" name="nama" placeholder=" Masukan Nama User" value="<?php echo $user->username;?>">
	</div>
	<div class="form-group">
	<?php 
	$koneksi=mysqli_connect("localhost","root","","template");
	$query=mysqli_query($koneksi,"select id from marketing where id_users='".$user->id."'");
	$dataa=mysqli_fetch_row($query);
	$user1=$user->name;
	if($user1="marketing"){
	$alamat = mysqli_fetch_array(mysqli_query($koneksi,"select * from marketing where id='".$dataa['id']."'"));
	}
	elseif($user1="supervisor_marketing"){
	$alamat = mysqli_fetch_array(mysqli_query($koneksi,"select * from supervisor_marketing where id='".$dataa['id']."'"));
	}
	elseif($user1="supervisor_ts"){
	$alamat = mysqli_fetch_array(mysqli_query($koneksi,"select * from supervisor_ts where id='".$dataa['id']."'"));
	}
	elseif($user1="technical_support"){
	$alamat = mysqli_fetch_row(mysqli_query($koneksi,"select * from technical_support where id='".$dataa['id']."'"));
	}
	?>
	
	<!--<label>Alamat</label>
	<input type="text" class="form-control" name="alamat" placeholder=" Masukan alamat" value="<?php echo $alamat['alamat'];?>">-->
	</div>
	<input type="text" class="form-control" name="ip" value="127.0.1" style="display:none;">
	<div class="form-group">
	<label>Username</label>
	<input type="text" class="form-control" name="username_user" placeholder="Masukan Email Username" value="<?php echo $user->email;?>">
	</div>
	<div class="form-group">
	<label>Password</label>
	<input type="password" class="form-control" name="password_user" placeholder="Masukan Password" value="<?php echo $user->password;?>">
	</div>
	<div class="form-group">
	<label>No Telp</label>
	<input type="text" class="form-control" name="no_telp" placeholder="Nomor Telepon" value="<?php echo $user->phone;?>"></br>
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
	<label>Jenis User</label></br>
	<input type="text" name="hak1" value="<?php echo $user->name;?>" readonly>=>
	<SELECT name="hak">
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