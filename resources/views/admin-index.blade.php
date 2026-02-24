<x-mylayout>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

<div class="row mt-4 pt-3 g-4">

  @foreach ($blogs as $blog)

    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="admin-card h-100">

        {{-- Image --}}
        <a href="/blog/{{$blog->slug}}" class="admin-thumb ratio ratio-16x9">
          @php
            $raw = trim($blog->blogImage, '"');
            $images = json_decode($raw, true);
            if (is_string($images)) $images = json_decode($images, true);
            $firstImage = $images[0] ?? null;
          @endphp

          @if($firstImage)
            <img src="{{ asset('storage/' . $firstImage) }}" alt="Blog Image" loading="lazy">
          @else
            <div class="admin-noimg">No image</div>
          @endif

          <span class="admin-badge">GTI</span>
        </a>

        {{-- Body --}}
        <div class="admin-body">
          <small class="admin-time">{{ $blog->created_at->diffForHumans() }}</small>

          <a href="/blog/{{$blog->slug}}" class="admin-title" title="{{ $blog->title }}">
            {{ $blog->title }}
          </a>

          <p class="admin-intro clamp-2">{{ $blog->intro }}</p>
        </div>

        {{-- Actions (no white bar) --}}
        <div class="admin-actions">
          <a href="/admin/{{$blog->slug}}/edit" class="a-btn a-edit">Edit</a>

          <form action="/admin/{{$blog->slug}}/delete" method="POST" class="m-0">
            @csrf
            @method('DELETE')
            <button class="a-btn a-del" onclick="return confirm('Delete this blog?')">
              Delete
            </button>
          </form>
        </div>

      </div>
    </div>

  @endforeach

</div>

<div class="d-flex justify-content-center mt-4">
    {{ $blogs->links() }}

</div>
<style>
.admin-card{
  border-radius: 18px;
  overflow: hidden;
  background: rgba(255,255,255,.10);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border: 1px solid rgba(255,255,255,.18);
  box-shadow: 0 10px 25px rgba(0,0,0,.20);
  display: flex;
  flex-direction: column;
  transition: transform .2s ease, box-shadow .2s ease;
}
.admin-card:hover{
  transform: translateY(-6px);
  box-shadow: 0 18px 40px rgba(0,0,0,.28);
}

.admin-thumb{
  position: relative;
  background: rgba(0,0,0,.15);
  text-decoration: none;
}
.admin-thumb img{
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.admin-noimg{
  display:flex; align-items:center; justify-content:center;
  color: rgba(255,255,255,.75);
  font-weight: 600;
}

.admin-badge{
  position: absolute;
  top: 10px;
  right: 10px;
  padding: 4px 10px;
  border-radius: 999px;
  font-size: 12px;
  font-weight: 700;
  /* background: rgba(17, 182, 9, 0.9); */
  color: #06202a;
}

.admin-body{
  padding: 14px 14px 10px;
}
.admin-time{
  display:block;
  color: rgba(255,255,255,.65);
  font-size: 12px;
  margin-bottom: 6px;
}
.admin-title{
  display:block;
  color: rgba(255,255,255,.95);
  text-decoration: none;
  font-weight: 700;
  margin-bottom: 6px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.admin-intro{
  margin: 0;
  color: rgba(255,255,255,.75);
  font-size: 13px;
}

.admin-actions{
  margin-top: auto;
  padding: 12px 14px 14px;
  display: flex;
  gap: 10px;
}
.a-btn{
  flex: 1;
  padding: 10px 12px;
  border-radius: 12px;
  font-weight: 700;
  font-size: 13px;
  border: 1px solid rgba(255,255,255,.22);
  background: rgba(0,0,0,.25);
  color: #fff;
  text-decoration: none;
  text-align: center;
  transition: transform .15s ease, background .15s ease;
}
.a-btn:hover{
  transform: translateY(-2px);
  background: rgba(0,0,0,.40);
}
.a-edit{ border-color: rgba(255,193,7,.55); }
.a-del{ border-color: rgba(220,53,69,.60); }

/* clamp 2 lines */
.clamp-2{
  display:-webkit-box;
  -webkit-line-clamp:2;
  -webkit-box-orient:vertical;
  overflow:hidden;
}
</style>

                <script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/tabs.js"></script>
<script src="assets/js/video.js"></script>
<script src="assets/js/slick-slider.js"></script>
<script src="assets/js/custom.js"></script>


</x-mylayout>