 @props(['editTeacher'])
 <x-admin.dashboard>
     <div class="container">
         <!-- Toolbar / Comment Box -->
         <div id="teacherForm" class="card mb-1 shadow-sm  bg-info bg-opacity-75">
             @if($editTeacher)
             <div class="card-body">
                 <h5 class="mb-2">Edit Teacher</h5>
                 <form method="POST" action="/teacher/{{$editTeacher->id}}/update">
                    @method('PATCH')
                    @csrf
                    
                    <div class="row g-2">
                        <div class="col-md-6">
                            <input type="text" value="{{old('name',$editTeacher->name)}}" class="form-control" name="name" style="font-size: 13px;" >
                            <x-error name="name" />
                        </div>
                         <div class="col-md-6">
                            <input type="text" value="{{old('position',$editTeacher->position)}}" class="form-control" name="position" style="font-size: 13px;" placeholder="position">
                            <x-error name="position" />
                        </div>
                        <div class="col-md-6">
                            <input type="email"  value="{{old('email',$editTeacher->email)}}" class="form-control" 
                            name="email" style="font-size: 13px;" >
                            <x-error name="email" />
                        </div>
                        
                        <div class="col-md-6">
                            <input type="text" name="phone" class="form-control" value="{{old('phone',$editTeacher->phone)}}" placeholder="Phone" style="font-size: 13px;" >
                            <x-error name="phone" />
                        </div>
                        <div class="col-md-6">
                            <input type="text" value="{{old('user_id',$editTeacher->user_id)}}" class="form-control" name="user_id" style="font-size: 13px;" hidden >
                            <x-error name="user_id" />
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="address" class="form-control" value="{{old('address',$editTeacher->address)}}" placeholder="Address" style="font-size: 13px;">
                            <x-error name="address" />
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
                    </div>
                </form>
            </div>
        </div>
        @endif
        
    </div>
   <script>document.querySelectorAll('.dropdown-item').forEach(item => {
        item.addEventListener('click', function () {
            const value = this.dataset.value;
            const text  = this.innerText;

            // change button text
            document.getElementById('majorBtn').innerText = text;

            // change button "value"
            document.getElementById('majorValue').value = value;
        });
    });</script>
 </x-admin.dashboard>

