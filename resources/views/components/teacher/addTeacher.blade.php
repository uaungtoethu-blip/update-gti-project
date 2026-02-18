 @props(['teacher'])
 <div class="container">
    @session('success')    
    <div class="alert alert-success text-center" style="font-size: 15px;">{{session('success')}}</div>
    @endsession
        <!-- Toolbar / Comment Box -->
        <div id="teacherForm" class="card mb-1 shadow-sm d-none bg-info bg-opacity-75">
            @if($teacher)
            <div class="card-body">
                <h5 class="mb-2">Add Teacher</h5>
                <form method="POST" action="/admin/teacher_store">
                    @csrf

                    <div class="row g-2">
                        <div class="col-md-6">
                                <input type="text" value="{{$teacher->name}}" class="form-control" name="name" style="font-size: 13px;" >
                        </div>
                        <div class="col-md-6">
                            <input type="email"  value="{{$teacher->email}}" class="form-control" 
                            name="email" style="font-size: 13px;" >
                        </div>

                        <div class="col-md-6">
                            <input type="text" value="{{old('position')}}" class="form-control" 
                            name="position" style="font-size: 13px;" placeholder="position" >
                        </div>
                        
                        <div class="col-md-6">
                            <input type="text" name="phone" class="form-control" placeholder="Phone" style="font-size: 13px;" >
                        </div>
                        <div class="col-md-6">
                                <input type="text" value="{{$teacher->id}}" class="form-control" name="user_id" style="font-size: 13px;" hidden >
                        </div>
                          <div class="col-md-6">
                            <input type="text" name="address" class="form-control" placeholder="Address" style="font-size: 13px;">
                        </div>
                      <div class="dropdown">
    <button class="btn btn-warning dropdown-toggle" type="button"
        data-bs-toggle="dropdown" aria-expanded="false" id="majorBtn">
        Major
    </button>

    <ul class="dropdown-menu bg-dark">
        <li>
            <button class="dropdown-item text-info" type="button"
                data-value="it_teacher">IT</button>
        </li>
        <li>
            <button class="dropdown-item text-info" type="button"
                data-value="cv_teacher">CV</button>
        </li>
        <li>
            <button class="dropdown-item text-info" type="button"
                data-value="mp_teacher">MP</button>
        </li>
        <li>
            <button class="dropdown-item text-info" type="button"
                data-value="ec_teacher">EC</button>
        </li>
        <li>
            <button class="dropdown-item text-info" type="button"
                data-value="ep_teacher">EP</button>
        </li>
        <li>
            <button class="dropdown-item text-info" type="button"
                data-value="fm_teacher">FM</button>
        </li>
    </ul>
</div>

<!-- This is the REAL value sent to backend -->
<input type="hidden" name="major" id="majorValue">



                    </div>

                    <div class="mt-3 d-flex gap-2 d-flex justify-content-between">
                        <button type="submit" class="btn btn-success btn-sm px-5" style="font-size: 10px;">Save</button>
                        <button type="button" class="btn btn-secondary btn-sm px-5" id="closeForm" style="font-size: 10px;">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
        @endif

    </div>
    <script>
    document.getElementById('addTeacherBtn').onclick = () => {
        document.getElementById('teacherForm').classList.remove('d-none');
    }

    document.getElementById('closeForm').onclick = () => {
        document.getElementById('teacherForm').classList.add('d-none');
    }
    document.querySelectorAll('.dropdown-item').forEach(item => {
        item.addEventListener('click', function () {
            const value = this.dataset.value;
            const text  = this.innerText;

            // change button text
            document.getElementById('majorBtn').innerText = text;

            // change button "value"
            document.getElementById('majorValue').value = value;
        });
    });
</script>
