@props(['blog'])

<style>
    /* overlay */
.modal{
  display:none;
  position:fixed;
  inset:0;
  background: rgba(0,0,0,0.5);
  z-index: 9999;
}

/* ✅ the white box (modal box) */
.modal-content{
  width: 90%;          /* ✅ change this (ex: 70%, 80%, 900px) */
  max-width: 900px;    /* ✅ limit on big screens */
  margin: 60px auto;   /* ✅ center */
  padding: 20px;
  border-radius: 12px;
}



</style>
<div class="row mt-5">
                <div class="col-md-2">  
                </div>
                <div class="col-md-8">
    <div class="blog-image-box">
        <x-show-page-image :blog="$blog" />
    </div>
</div>

    <div class="w-75" style="margin-left:115px;">
        <div class="card mt-3" style="background-color:gray">
            <div class="card-title text-center mt-1">
                <h3>{{$blog->title}}</h3>
            </div>
            <p class="mt-3 text-dark p-2">
                {{$blog->body}}
            </p>
            <div class="d-flex justify-content-between">
                <div class="d-flex align-items-center">
                    
                    <span class="mb-2 ps-3 fs-5">Author :</span> 
                    <h5 class=""><a href="" class="link-dark text-decoration-none p-1">{{$blog->author->name}}</a></h5>
                </div>
                <p class="mt-2 text-dark pe-5">{{$blog->created_at->diffForHumans()}}</p>
            </div>
        </div>
                     {{-- <x-comment-count-reaction :blog="$blog"></x-comment-count-reaction> --}}
                </div>     
                <div class="col-md-2">   
                </div>
            </div>
        </div>