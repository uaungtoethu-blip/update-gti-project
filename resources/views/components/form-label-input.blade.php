@props(['name','type'=>'text','placeholder'=>''])
      <div class="mb-1">
          <label for="{{$name}}" class="form-label text-info">{{$name}} : </label>
          <input type="{{$type}}" id="{{$name}}" class="form-control" name="{{$name}}" required placeholder="{{$placeholder}}" value={{old($name)}}>
        </div>

