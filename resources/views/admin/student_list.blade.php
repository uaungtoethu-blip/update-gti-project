@props(['students'])
<x-admin.dashboard>
    <h2 class="text-center text-info">Student List</h2>
    <div class="d-flex gap-2 mb-3 justify-content-end"> 
  <button type="button" class="btn btn-primary btn-sm mb-3"
        data-bs-toggle="collapse"
        data-bs-target="#studentForm">
    + Add Table (Show Form)
</button>

</div>

{{-- new student create --}}

  <div class="collapse" id="studentForm">
    <div class="card card-body mb-3">

        <form action="{{route('studentlist.addTable')}}" method="POST">
            @csrf
            <h5 class="text-info">Table Add Form</h5>
            <input name="name" class="form-control mb-2" placeholder="Name">
            {{-- <input name="name" class="form-control mb-2" placeholder="Name">
            <input name="class" class="form-control mb-2" placeholder="Class">
            <input name="parent" class="form-control mb-2" placeholder="Parent Name">
            <input name="parent_phone" class="form-control mb-2" placeholder="Parent Phone">
            <input name="address" class="form-control mb-2" placeholder="Address">
            <input name="student_phone" class="form-control mb-2" placeholder="Student Phone"> --}}
            <button class="btn btn-primary btn-sm">Save</button>
        </form>

    </div>
</div>

<x-stulisttab />

</x-admin.dashboard>