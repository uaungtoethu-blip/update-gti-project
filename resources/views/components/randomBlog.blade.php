@props(['randomBlogs'])
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

<div class="container-fluid">
    <div class="text-info  text-center d-flex justify-content-center my-4 fs-3 bg-secondary bg-opacity-75 py-2 fw-bold rounded">You    may  like ....</div>
 <div class="row my-3">
    @foreach ($randomBlogs as $randomBlog)
        <div class="col-md-4">
            <x-blog-card>
 @php
    $media = is_array($randomBlog->blogImage)
        ? $randomBlog->blogImage
        : json_decode($randomBlog->blogImage, true);

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
                        <div class="my-2 w-100 rounded" style="background-color:gray">
                            <div class="card-body">
                                <h5 class="card-title">{{$randomBlog->title}}</h5>
                                <div class="d-flex justify-content-between">
                                    <p class="fs-6 text-dark">Author : <a href="/?author={{$randomBlog->author->username??''}}{{request('searchValue')?'&searchValue='.request('searchValue'):''}}" class="text-decoration-none text-info">{{$randomBlog->author->name??''}}</a></p>
                                    <small>{{$randomBlog->created_at->diffForHumans()}}</small>
                                </div>
                            </div>
                            </div>
                                <a class="w-100 btn btn-secondary text-info" href="/blog/{{$randomBlog->slug}}">ReadMore....</a>
                                <div class="mt-2 justify-content-between d-flex">
</div>
            </x-blog-card>
        </div>
    @endforeach
 </div>
</div>