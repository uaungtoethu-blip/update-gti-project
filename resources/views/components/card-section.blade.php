@props(['blogs'])  
<h5 class="text-center text-white mt-5"><<< Latest News >>></h5>
<style>
   .video-wrapper {
    height: 150px;
    overflow: hidden;
}

.fb-video {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.play-btn {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 30px;
    color: white;
    background: rgba(0,0,0,0.4);
    cursor: pointer;
}




</style>
<script>
function playVideo(button) {
    const video = button.previousElementSibling;

    video.play();                 // ▶ run video
    video.setAttribute('controls', 'controls');
    button.style.display = 'none'; // hide play button
}
</script>

          <div class="container my-5">
                <div class="row">
                    @forelse ($blogs as $blog)     
                    <div class="col-md-4 mb-3">
                        <x-blog-card>
 @php
    $media = is_array($blog->blogImage)
        ? $blog->blogImage
        : json_decode($blog->blogImage, true);

    $first = $media[0] ?? null;

    $ext = $first ? strtolower(pathinfo($first, PATHINFO_EXTENSION)) : null;
    $videoExts = ['mp4','webm','ogg','mov'];
    $isVideo = $ext && in_array($ext, $videoExts);
@endphp

@if($first)

    {{-- VIDEO POST (Facebook style) --}}
    @if($isVideo)
       <div class="video-wrapper position-relative">
    <video class="fb-video">
        <source src="{{ asset('storage/'.$first) }}" type="video/mp4">
    </video>

    <div class="play-btn" onclick="playVideo(this)">▶</div>
</div>
    {{-- IMAGE POST (normal) --}}
    @else
        <img src="{{ asset('storage/'.$first) }}"
             class="card-img-top border border-2 border-info"
             style="height:150px; width:100%; object-fit:cover;">
    @endif

@endif

                <div class="my-2 w-100 rounded" style="background-color: gray" >
                <div class="card-body">
                 <h6 class="card-title">{{$blog->title}}</h6>
                <div class="card-text">
                <small class="text-black">Intro : {{$blog->intro}}</small>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                    <p class="fs-6 text-dark">Author : <a href="/?author={{$blog->author->username??''}}{{request('searchValue')?'&searchValue='.request('searchValue'):''}}" class="text-decoration-none text-info">{{$blog->author->name??''}}</a></p>
                                        <small>{{$blog->created_at->diffForHumans()}}</small>
        </div>
    </div>
</div>
<div class="mt-auto">    
    <a class="w-100 btn btn-secondary text-info" href="/blog/{{$blog->slug}}">ReadMore....</a>
</div>
@can('admin')
<div class="mt-2 justify-content-between d-flex">
    <a href="/admin/{{$blog->slug}}/edit" class=" me-1 btn btn-outline-warning text-dark">Edit</a>
    <form action="/admin/{{$blog->slug}}/delete" method="POST">
        @csrf
        @method('DELETE')
        <button class=" btn btn-outline-danger text-dark" type="submit">Delete</button>
    </form>
</div>
@endcan
</x-blog-card>
</div>
@empty
<p class="text-danger fs-5">No blog Found !!! <i class="fa-solid fa-triangle-exclamation"></i></p>
@endforelse
<div class="pt-5">
    {{$blogs->links()}}
</div>
</div>
</div>
</div>
</div>     
        </div>
    </div>
    
        
        