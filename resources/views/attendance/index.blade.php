
  <x-layout>
      <div class="container-fluid mt-0 w-100 bg-dark text-light">
          <h3 class="pt-5 text-center text-info">{{request('department')}} - RollCall</h3>
          @session('success')
           <div class="alert alert-success">{{$value}}</div>    
          @endsession
          @if(session('error'))
          <div class="alert alert-danger">{{session('error')}}     
    </div>
    @endif
          <form action="/student-attendance/import" method="POST" enctype="multipart/form-data">
         @csrf
         <select name="department" class="form-control" required>
    <option value="">Select Department</option>
     @canany(['it_teacher','admin'])
    <option value="IT">IT</option>
    @endcanany
     @canany(['cv_teacher','admin'])
    <option value="CIVIL">CIVIL</option>
    @endcanany
     @canany(['mp_teacher','admin'])
    <option value="MP">MP</option>
    @endcanany
     @canany(['ec_teacher','admin'])
    <option value="EC">EC</option>
    @endcanany
     @canany(['fm_teacher','admin'])
    <option value="FM">FM</option>
    @endcanany
     @canany(['ep_teacher','admin'])
    <option value="EP">EP</option>
    @endcanany
</select>

         <label for="" class="text-info">Please upload your roll-call excel file : </label>
         <div class="mt-2 input-group w-100 input-group-sm">
            <input type="file" name="file" class="form-control bg-dark text-light border-secondary">
            <button class="btn btn-success" type="submit">submint</button>
        </div>
    </form>
    <p>Date</p>
    @forelse ($excelFiles as $file)
    @php
        $deptRows = $file->rows->where('department', $department);
    @endphp

    @if($deptRows->isNotEmpty())
        <div class="table-responsive mt-3">
            <h4>{{ $file->file_name }}</h4>

            <table class="table table-striped mb-3 table-dark table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Roll_N0.</th>
                        <th>Student_name</th>
                        <th>Atten_month</th>
                        <th>Atten_total</th>
                        <th>Atten_month_%</th>
                        <th>Atten_total_%</th>
                        <th>Stu_signature</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($deptRows as $row)
                        <tr>
                            <td class="text-center">{{ $row->student_id }}</td>
                            <td class="text-center">{{ $row->roll_number }}</td>
                            <td class="text-center">{{ $row->student_name }}</td>
                            <td class="text-center">{{ $row->attendance_month }}</td>
                            <td class="text-center">{{ $row->attendance_total }}</td>
                            <td class="text-center">{{ $row->attendance_percent_month }} %</td>
                            <td class="text-center">{{ $row->attendance_percent_total }} %</td>
                            <td class="text-center">{{ $row->student_signature ?? '' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="d-flex justify-content-between align-items-center">
                <a href="/student-attendance/{{ $file->id }}/export" class="btn btn-success btn-sm">
                    Download
                </a>

                @php
    $ability = strtolower($department) . '_teacher';  // IT -> it_teacher, CIVIL -> civil_teacher (see note)
@endphp

@canany(['admin', $ability])
<form action="/excel/{{ $file->id }}/delete" method="POST"
      onsubmit="return confirm('Delete this Excel File?')">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger btn-sm px-3">Delete</button>
</form>
@endcanany

            </div>
        </div>
    @endif

@empty
    <p class="alert alert-danger">No files found.</p>
@endforelse

        </div>
        </div>

</x-layout>  
