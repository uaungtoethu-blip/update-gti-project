@props(['blog','randomBlogs'])
<div class="bg-dark">
<x-mylayout>
    <div class="container-fluid">
        <x-blog-card> 
            <div class="container">
                <x-show-page :blog="$blog" />
                {{-- <x-commentForm :comments="$comments" />  --}}
             <x-randomBlog :randomBlogs="$randomBlogs"></x-randomBlog>
            </x-blog-card>            
        </div>
        </x-mylayout>
</div>
    