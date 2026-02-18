@props([
    'comment'
])
<div class="d-flex mb-4">
                <!-- Avatar -->
                <img src="/storage/{{$comment->commenter->profileImg}}"
                class="rounded-circle me-3 border border-2 border-info"
                width="50" height="50">
                
                <!-- Comment body -->
                <div class="flex-grow-1">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="fw-bold mb-0">{{$comment->commenter->username}}</h6>
                        <small class="text-muted">{{$comment->created_at->diffForHumans()}}</small>
                    </div>
                    <p class="mb-1">
                        {{$comment->commentBody}}
                    </p>
                    <a href="#" class="text-decoration-none btn btn-sm btn-outline-primary text-info">
                        Reply
                    </a>
                </div>
            </div>