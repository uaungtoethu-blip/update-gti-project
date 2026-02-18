@props(['heading'])
<style>
    .heading{
        font-size: 80px;
        font-weight: 700;
        margin-top: 150px;
    }
</style>
    <div class="container">
        <h1 class="text-white heading ">{{$heading->heading}}</h1>
        <p class="text-white mt-4 fs-6">{{$heading->headingParagraph}}</p>
    </div>
    