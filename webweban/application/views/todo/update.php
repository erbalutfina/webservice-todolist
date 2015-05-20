<div class="box">
	<div> 
		<?php  echo validation_errors();  ?>
		<form action="" accept-charset="utf-8" method="post">
		    <div class="form-group">
				<label for="aktivitas">Aktifitas</label>
		        <input type="text" class="form-control" name="aktivitas" id="aktivitas" value="<?php echo $todo_list['aktivitas']; ?>" placeholder="" required/>
		    </div>

		    <div class="form-group">
				<label for="deskripsi">Deskripsi</label>
				<textarea name="deskripsi" class="form-control" placeholder=""><?php echo $todo_list['deskripsi']; ?></textarea>
		    </div>

		    <div class="form-group">
				<label for="tanggal">Deadline</label>
		        <div class="input-group">
		            <div class="input-group-addon">
		                <i class="fa fa-calendar"></i>
		            </div>
		            <input type="text" name="tanggal" id="tanggal" value="<?php echo $todo_list['tanggal']; ?>" style="width:100px;" class="form-control"/>
		        </div><!-- /.input group -->
				<script type="text/javascript">
		            $(function() {
			           $("#tanggal").datepicker({
			              dateFormat: "yy-mm-dd",
			              changeMonth: true,
			              changeYear: true
			            });
				   });
		        </script>
		    </div>

	        <div class="box-footer">
	            <button type="button" id="simpan" class="btn btn-primary" onclick="submit()">Submit</button>
	        </div>
		</form>
	</div>
</div>
	