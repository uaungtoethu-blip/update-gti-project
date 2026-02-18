<x-admin.dashboard>
    <div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card bg-dark bg-opacity-75 text-info">
                <div class="card-header text-center fw-bold">
                    Blog Create Form
                </div>

                <div class="card-body">
                    <form action="/admin/post/store" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Image -->
                        <div class="mb-3">
                            <label class="form-label">Image : </label>
                            <input type="file" name="blogImage[]" multiple class="form-control">
                        </div>
                        
                        <!-- Title -->
                        <div class="mb-3">
                            <label class="form-label">Title : </label>
                            <input type="text" name="title" class="form-control" placeholder="Enter title">
                        </div>

                        <!-- Body -->
                        <div class="mb-3">
                            <label class="form-label">Body : </label>
                            <textarea name="body" rows="6" class="form-control"
                                placeholder="Write your blog content..."></textarea>
                        </div>

                        <!-- Submit -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary px-4">
                                Create Post
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

</x-admin.dashboard>