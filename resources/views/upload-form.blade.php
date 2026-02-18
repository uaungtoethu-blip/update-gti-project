<form action="{{ route('excel.import') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label class="form-label">Upload Excel File</label>
        <input type="file" name="file" class="form-control" required>
    </div>

    <button class="btn btn-primary">Import Excel</button>
</form>
