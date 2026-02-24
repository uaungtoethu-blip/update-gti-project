@props(['blog'])
<x-mylayout>
    <div class="container my-4 mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card bg-dark bg-opacity-75 text-info">
                <div class="card-header text-center fw-bold">
                    Post Update Form
                </div>

                <div class="card-body">
                    <form action="/admin/{{$blog->slug}}/update" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <!-- Image -->
                        <div class="mb-3">
                            <label class="form-label">Image : </label>
                            <input type="file" name="blogImage[]" multiple class="form-control" value="{{old('blogImage[]','$blog->blogImage')}}">
                        </div>
                        
                        <!-- Title -->
                        <div class="mb-3">
                            <label class="form-label">Title : </label>
                            <input type="text" name="title" class="form-control" placeholder="Enter title" value="{{old('title',$blog->title)}}">
                        </div>

                        <!-- Body -->
                        <div class="mb-3">
                            <label class="form-label">Body : </label>
                            <textarea name="body" rows="6" class="form-control"
                                placeholder="Write your blog content..." >{{old('body',$blog->body)}}</textarea>
                        </div>

                        <!-- Submit -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary px-4">
                                Update Post
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

</x-mylayout>