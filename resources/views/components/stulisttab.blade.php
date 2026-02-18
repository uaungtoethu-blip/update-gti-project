<div>

    @forelse ($tables as $table)
    <div class="table-responsive rounded-3 overflow-hidden mb-4">
        <table class="table table-info opacity-75 table-layout-fixed mb-1 bordered">
            <tr class="text-center">
                <th>Name</th>
                <th>Class</th>
                <th>Parent Name</th>
                <th>Parent Phone</th>
                <th>Address</th>
                <th>Student Phone</th>
                <th>Stay</th>
                <th>Edit</th>
            </tr>
            @forelse ($table->students as $student)
            
                <tr class="text-center">
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->class }}</td>
                    <td>{{ $student->parent }}</td>
                    <td>{{ $student->parent_phone }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->student_phone }}</td>
                    <td>{{$student->stay?'🎯':''}}</td>
                    <td>
                <div class="d-flex gap-2 flex-wrap justify-content-center">
            <button class="btn btn-warning btn-sm" style="font-size: 10px;"
              data-bs-toggle="modal"
               data-bs-target="#editStudentModal{{ $student->id }}">Edit</button>
            <form action="/student/{{$student->id}}/delete" method="POST">
             @csrf
             @method('DELETE')
             <button type="submit" class="btn btn-sm btn-danger" style="font-size: 10px;"  onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
            </form>
        </div>
            </td>
            </tr>

                {{-- student edit? --}}
<div class="modal fade" id="editStudentModal{{ $student->id }}" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-secondary">
        <h5 class="modal-title text-info">Edit Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <form action="/student/{{ $student->id }}/update" method="POST">
            @csrf
            @method('PATCH')

            <input name="name" class="form-control mb-2" value="{{ $student->name }}">
            <input name="class" class="form-control mb-2" value="{{ $student->class }}">
            <input name="parent" class="form-control mb-2" value="{{ $student->parent }}">
            <input name="parent_phone" class="form-control mb-2" value="{{ $student->parent_phone }}">
            <input name="address" class="form-control mb-2" value="{{ $student->address }}">
            <input name="student_phone" class="form-control mb-2" value="{{ $student->student_phone }}">
            <label class="form-check-label">Hostel ? : </label>
            <input type="checkbox" name="stay" value="1"
           class="form-check-input"
           {{ old('stay', $student->stay ?? false) ? 'checked' : '' }}> <br>

            <button class="btn btn-primary btn-sm my-1">Update</button>
        </form>

      </div>

    </div>
  </div>
</div>

            
                @empty
                @endforelse
                
               <div class="d-flex justify-content-between">
                   <button class="btn btn-success btn-sm mb-1"
                   data-bs-toggle="modal"
                   data-bs-target="#addStudentModal{{ $table->id }}">
                   + Add Student
                   </button>
                   <span class=" fs-3 bold text-light">{{$table->name}}</span>  
            </div> 
            </table>
            <div class="d-flex justify-content-between mb-3">
              <form action="/table/{{$table->id}}/delete" method="POST">
                @csrf
                @method('DELETE')
              <button  class="btn btn-danger btn-sm" onclick="return confirm('Are you sure went to delete table') ">Delete Table</button></form>
            <button class="mb-1 btn btn-info btn-sm">{{$table->created_at->diffForHumans()}}</button>
            </div>

</div>
</div>
<div class="modal fade" id="addStudentModal{{ $table->id }}" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-secondary">
        <h5 class="modal-title text-info">Add Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <form action="/admin/{{ $table->id }}/student" method="POST">
            @csrf

            <input name="name" class="form-control mb-2" placeholder="Name">
            <input name="class" class="form-control mb-2" placeholder="Class">
            <input name="parent" class="form-control mb-2" placeholder="Parent Name">
            <input name="parent_phone" class="form-control mb-2" placeholder="Parent Phone">
            <input name="address" class="form-control mb-2" placeholder="Address">
            <input name="student_phone" class="form-control mb-2" placeholder="Student Phone">
             <label class="form-label">
              Hostel ? : 
            </label>
            <input class="form-input" type="checkbox" name="stay" value="1"
               >
        
            <button class="btn btn-primary btn-sm">Save</button>
        </form>

      </div>

    </div>
  </div>
</div>

@empty
@endforelse
        
</div>
