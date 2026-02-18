@props(['name'])
@error($name)
    <small class="text-danger fs-sm">{{$message}}</small>
@enderror