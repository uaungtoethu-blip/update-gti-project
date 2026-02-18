{{-- @props(['blog'])

       <div class="container-fluid">
           <div class="d-flex justify-content-between">
            <div class="mt-1">
                <button class="btn btn-outline-info btn-sm mt-2"
        data-bs-toggle="modal"
        data-bs-target="#commentModal">
    Comment
</button>


<div class="modal fade" id="commentModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content rounded-4">

            <!-- Header -->
            <form action="/blog/{{$blog->slug}}/comment" method="POST">
                @csrf
            <div class="modal-header">
                <h6 class="modal-title text-info">Write a Comment</h6>
                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"></button>
            </div>

            <!-- Body -->
            
                    
                    <div class="modal-body">
                        <textarea class="form-control" autofocus
                        rows="2"
                        placeholder="Write your comment..." name="commentBody"></textarea>
                    </div>
                    
                    <!-- Footer -->
                    <div class="modal-footer">
                        <button class="btn btn-secondary btn-sm"
                        data-bs-dismiss="modal">
                        cancel
                    </button>
                    <button class="btn btn-info btn-sm" type="submit">
                        comment
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


 </div>
 
    </div>
       </div> --}}