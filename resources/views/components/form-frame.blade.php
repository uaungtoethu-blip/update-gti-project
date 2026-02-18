@props(['action'=>'/','method'=>'GET','enctype'=>''])

<form action="{{$action}}" method="{{$method}}" enctype="{{$enctype}}">
    @csrf
    {{$slot}}
</form>