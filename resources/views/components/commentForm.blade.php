     @props(['comments'])
    <div class="container my-2">
             <!-- Comment form -->
             <div class="d-flex justify-content-center mb-4">

                 <div class="card shadow-sm" style="width: 38rem">
                     <div class="card-body bg-secondary border border-2 rounded">
                         
            <!-- Comment title -->
            <h5 class="fw-bold mb-3 text-info">Comments ({{$comments->count()}})</h5>
            
            <!-- Single comment -->
 @if($comments->count())        <!-- First 3 comments shown by default -->
@foreach($comments->take(3) as $comment)
    <x-comment-item :comment="$comment" />
@endforeach

<!-- Hidden comments -->
<div class="collapse" id="extraComments{{$comment->blog->id}}">
    @foreach($comments->skip(3) as $comment)
        <x-comment-item :comment="$comment" />
    @endforeach
</div>

<!-- Show all button -->
@if($comments->count() > 3)
    <button class="btn btn-sm btn-outline-primary text-info" type="button" data-bs-toggle="collapse" 
        data-bs-target="#extraComments{{$comment->blog->id}}" aria-expanded="false" 
        aria-controls="extraComments{{$comment->blog->id}}">
        Show all comments
    </button>
@endif
{{-- @else
<P class="text-info">do you went to comment ?</P> --}}
@endif
            </div>
            </div>
            </div>
    </div>
</div>
</div>
</div>
