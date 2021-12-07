<form method="POST" action="{{route('museum.store')}}" enctype="multipart/form-data">
  {{ csrf_field() }}
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
  <div class="col">
      <div class="form-outline">
        <input type="text" id="museum" name="artId" class="form-control" />
        <label class="form-label" for="form6Example1">Nama Museum</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="museum" name="name" class="form-control" />
        <label class="form-label" for="form6Example1">Nama Museum</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="description" name="desc" class="form-control" />
        <label class="form-label" for="form6Example2">Deskripsi</label>
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div class="mb-3">
  <label for="formFile" class="form-label">Gambar</label>
  <input class="form-control" type="file" name="image" id="formFile">
</div>


  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Simpan</button>
</form>
