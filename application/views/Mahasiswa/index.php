<div class ="container">
	<div class="row mt-5">
		<div class="col mt-4">

			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
			  Tambah Data
			</button>

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			        <div class="form group">
			        	<label for="kode">Kode</label>
			        	<input type="numeric" class="form-control" id="kode" placeholder="Masukkan Kode">
			        </div>
			        <div class="form group">
			        	<label for="matakuliah">Matakuliah</label>
			        	<input type="text" class="form-control" id="matakuliah" placeholder="Masukkan Matakuliah">
			        </div> 
			        <div class="form group">
			        	<label for="sks">Sks</label>
			        	<input type="numeric" class="form-control" id="sks" placeholder="Masukkan Sks">
			        </div> 
			        <div class="form group">
			        	<label for="semester">Semester</label>
			        	<input type="numeric" class="form-control" id="semester" placeholder="Masukkan Semester">
			        </div> 
			        <div class="form group">
			        	<label for="jurusan">Jurusan</label>
			        	<input type="text" class="form-control" id="jurusan" placeholder="Masukkan Jurusan">
			        </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Save changes</button>
			      </div>
			    </div>
			  </div>
			</div>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Kode</th>
      <th scope="col">Matakuliah</th>
      <th scope="col">Sks</th>
      <th scope="col">Semester</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($mahasiswa as $mhs): ?>
     <tr>
     	<th scope="row"><?=$mhs['kode']; ?></th>
     	<td><?=$mhs['matakuliah'];?></td>
     	<td><?=$mhs['sks'];?></td>
     	<td><?=$mhs['semester'];?></td>
     	<td><?=$mhs['jurusan'];?></td>
     </tr>
    <?php endforeach; ?>
  </tbody>
</table>
	</div>
</div>