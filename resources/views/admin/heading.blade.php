<x-admin.dashboard>
    <div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card bg-dark bg-opacity-75 text-info">
                <div class="card-header text-center fw-bold">
                    Heading Update Form
                </div>

                <div class="card-body">
                    <form action="/admin/heading/updated" method="POST" >
                        @csrf
                        <!-- Image -->
                        <div class="mb-3">
                            <label class="form-label">Heading : </label>
                            <input type="text" name="heading"  class="form-control">
                        </div>
                        
                        <!-- Title -->
                       

                        <!-- Body -->
                        <div class="mb-3">
                            <label class="form-label">Heading Paragraph : </label>
                            <textarea name="headingParagraph" rows="6" class="form-control"
                                placeholder="Write your heading paragraph..."></textarea>
                        </div>

                        <!-- Submit -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary px-4">
                                Save
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

</x-admin.dashboard>