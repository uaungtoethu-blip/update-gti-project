<form action="/" class="d-flex my-1 ms-4" role="search" method="GET">
        @if(request(['author']))
        <input type="hidden" name="author" value="{{request('author')}}">
        @endif
        <input class="form-control me-1 mt-1 w-75 " type="search" placeholder="search" aria-label="Search" name="searchValue" value="{{request('searchValue')}}" style="height: 30px;" />
        <button class="btn btn-outline-info btn-sm h-25 mt-1  text-dark ms-1" type="submit">Search</button>
</form>