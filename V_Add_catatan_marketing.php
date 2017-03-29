<div class="box-body">
	<h1>Data Catatan Marketing</h1></br>
    <form role="form" method="post" action="<?php echo site_url('C_Catatan_marketing/view_Add_catatan_marketing')?>">
    <div class="form-group">
	<label>ID</label>
	<input type="text" class="form-control" name="id" placeholder="Masukan ID">
	</div>
	<div class="form-group">
	<label>ID Marketing</label>
	<input type="text" class="form-control" name="nama_marketing" placeholder=" Masukan Nama Marketing">
	</div>
	<div class="form-group">
	<label>Catatan</label>
	<textarea class="form-control" name="catatan" ></textarea>
	</div>
	<div class="form-group">
	<label>ID Supervisor</label>
	<input type="text" class="form-control" name="owner" placeholder="Masukan ID Supervisor">
	</div>
	<div class="form-group">
	<label>Tanggal </label>
	<input type="text" class="form-control" name="tanggal" placeholder="0000-00-00" value="<?php echo $date=date("Y-m-d"); ?>" readonly	><!--can digawean make form helper da copas template adminlte jadi si CI masih lieureun ieu teh string atawa date-->
	</div>
	<div class="box-footer">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</div>
	</form>
</div>