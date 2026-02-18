@props(['blog'])

<style>
.fb2-grid{
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 6px;
    cursor: pointer;
}

.fb2-item{
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    height: 220px;
    background: #eee;
}

.fb2-item img,
.fb2-item video{
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.fb2-more{
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,.55);
    color: #fff;
    font-size: 42px;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* play icon overlay for video */
.fb2-play{
    position:absolute;
    inset:0;
    display:flex;
    align-items:center;
    justify-content:center;
    pointer-events:none;
}
.fb2-play span{
    width:64px;
    height:64px;
    border-radius:50%;
    background: rgba(0,0,0,.55);
    color:#fff;
    font-size:28px;
    display:flex;
    align-items:center;
    justify-content:center;
}

.fb2-modal-media{
    max-height: 80vh;
    object-fit: contain;
}
</style>

@php
    // rename to "media" because it can include images/videos
    $media = is_array($blog->blogImage)
        ? $blog->blogImage
        : json_decode($blog->blogImage, true);

    $media = array_values(array_filter($media ?? []));
    $count = count($media);

    $videoExts = ['mp4','webm','ogg','mov'];
    $isVideo = fn($path) => in_array(strtolower(pathinfo($path, PATHINFO_EXTENSION)), $videoExts);
@endphp

@if($count)
    <div class="fb2-grid" data-bs-toggle="modal" data-bs-target="#galleryModal-{{ $blog->id }}">
        @foreach(array_slice($media, 0, min(2,$count)) as $i => $item)
            <div class="fb2-item">
                @if($isVideo($item))
                    <video muted preload="metadata">
                        <source src="{{ asset('storage/'.$item) }}">
                    </video>
                    <div class="fb2-play"><span>▶</span></div>
                @else
                    <img src="{{ asset('storage/'.$item) }}" alt="" class="border border-1 shadow-lg border-info">
                @endif

                @if($i === 1 && $count > 2)
                    <div class="fb2-more">+{{ $count - 2 }}</div>
                @endif
            </div>
        @endforeach
    </div>

    <!-- Modal Gallery (Bootstrap Carousel) -->
    <div class="modal fade" id="galleryModal-{{ $blog->id }}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content bg-dark">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body p-0">
                    <div id="carousel-{{ $blog->id }}" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-inner">
                            @foreach($media as $k => $item)
                                <div class="carousel-item @if($k===0) active @endif">
                                    @if($isVideo($item))
                                        <video class="d-block w-100 fb2-modal-media"
                                               controls
                                               preload="metadata">
                                            <source src="{{ asset('storage/'.$item) }}">
                                        </video>
                                    @else
                                        <img class="d-block w-100 fb2-modal-media"
                                             src="{{ asset('storage/'.$item) }}" alt="">
                                    @endif
                                </div>
                            @endforeach
                        </div>

                        <button class="carousel-control-prev" type="button"
                                data-bs-target="#carousel-{{ $blog->id }}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button"
                                data-bs-target="#carousel-{{ $blog->id }}" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
    // Pause videos when sliding or closing modal (so audio doesn't continue)
    (function(){
        const modalId = 'galleryModal-{{ $blog->id }}';
        const carouselId = 'carousel-{{ $blog->id }}';

        const modalEl = document.getElementById(modalId);
        const carouselEl = document.getElementById(carouselId);

        function pauseAllVideos(){
            if(!modalEl) return;
            modalEl.querySelectorAll('video').forEach(v => { try { v.pause(); } catch(e){} });
        }

        if (carouselEl) {
            carouselEl.addEventListener('slide.bs.carousel', pauseAllVideos);
        }
        if (modalEl) {
            modalEl.addEventListener('hidden.bs.modal', pauseAllVideos);
        }
    })();
    </script>
@endif
