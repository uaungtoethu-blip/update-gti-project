<div class="container">
    <div class="d-flex justify-content-between">

        <form action="/admin/user_search" method="GET">
            @csrf
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text bg-info" id="inputGroup-sizing-sm ">Search_User : </span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="user_id" value="{{request()->user_id}}">
                <button type="submit" class="btn btn-sm btn-success ms-2 px-1 text-dark">Search</button>
            </div>
    </form>
    <button class="btn btn-sm btn-info" style="height: 30px" id="addTeacherBtn">Add_Teacher</button>
</div>
</div>