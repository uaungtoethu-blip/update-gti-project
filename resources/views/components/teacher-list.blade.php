@props(['teachers'])
<style> 
    .table{
        table-layout: fixed;
        width: 100%;
    }
    </style>
<div>
 <div class="table-responsive rounded-3 overflow-hidden ">
    <table class="table table-info opacity-75 table-layout-fixed " style="border: 3px solid gray;">
        <tr class="text-center">
            <th>Name</th>
            <th>Phone</th>
            <th>Position</th>
            <td>Address</th>
            <th>Major</th>
            <th>Edit</th>
        </tr>
        @forelse($teachers as $teacher)
@if ($teacher->it_teacher)
<tr class="text-center">
            <td style="font-size: 13px;">{{ $teacher->name }}</td>
            <td style="font-size: 13px;">{{ $teacher->phone }}</td>
            <td style="font-size: 13px;">{{$teacher->position}}</td>
            <td style="font-size: 12px;width:220px;word-wrap: break-word;">{{$teacher->address}}</td>
            <td>          
    <button class="btn btn-success btn-sm " style="font-size: 10px;">IT_DP</button></td>
    <td>

        <div class="d-flex gap-2 flex-wrap justify-content-center">
            <a class="btn btn-warning btn-sm" href="/teacher/{{$teacher->id}}/edit" style="font-size: 10px;">Edit</a>
            <form action="/teacher/{{$teacher->id}}/delete" method="POST">
             @csrf
             @method('DELETE')
             <button type="submit" class="btn btn-sm btn-danger" style="font-size: 10px;">Delete</button>
            </form>
        </div>
    </td>
        </tr>
@elseif ($teacher->cv_teacher)
    <tr class="text-center">
            <td style="font-size: 13px;">{{ $teacher->name }}</td>
            <td style="font-size: 13px;">{{ $teacher->phone }}</td>
                       <td style="font-size: 13px;">{{$teacher->position}}</td>

            <td style="font-size: 12px;width:220px;word-wrap: break-word;">{{$teacher->address}}</td>
            <td>
                 <button class="btn btn-success btn-sm " style="font-size: 10px;">CV_DP</button></td>
    <td>

        <div class="d-flex gap-2 flex-wrap justify-content-center">
            <a class="btn btn-warning btn-sm" href="/teacher/{{$teacher->id}}/edit" style="font-size: 10px;">Edit</a>
            <form action="/teacher/{{$teacher->id}}/delete" method="POST">
             @csrf
             @method('DELETE')
             <button type="submit" class="btn btn-sm btn-danger" style="font-size: 10px;">Delete</button>
            </form>
        </div>
    </td>
        </tr>
@elseif ($teacher->mp_teacher)
    <tr class="text-center">
            <td style="font-size: 13px;">{{ $teacher->name }}</td>
            <td style="font-size: 13px;">{{ $teacher->phone }}</td>
                        <td style="font-size: 13px;">{{$teacher->position}}</td>

            <td style="font-size: 12px;width:220px;word-wrap: break-word;">{{$teacher->address}}</td>
            <td>
                 <button class="btn btn-success btn-sm " style="font-size: 10px;">MP_DP</button></td>
    <td>

        <div class="d-flex gap-2 flex-wrap justify-content-center">
            <a class="btn btn-warning btn-sm" href="/teacher/{{$teacher->id}}/edit" style="font-size: 10px;">Edit</a>
            <form action="/teacher/{{$teacher->id}}/delete" method="POST">
             @csrf
             @method('DELETE')
             <button type="submit" class="btn btn-sm btn-danger" style="font-size: 10px;">Delete</button>
            </form>
        </div>
    </td>
        </tr>
@elseif ($teacher->ec_teacher)
    <tr class="text-center">
            <td style="font-size: 13px;">{{ $teacher->name }}</td>
            <td style="font-size: 13px;">{{ $teacher->phone }}</td>
                        <td style="font-size: 13px;">{{$teacher->position}}</td>

            <td style="font-size: 12px;width:220px;word-wrap: break-word;">{{$teacher->address}}</td>
            <td>
                 <button class="btn btn-success btn-sm " style="font-size: 10px;">EC_DP</button></td>
    <td>

        <div class="d-flex gap-2 flex-wrap justify-content-center">
           <a class="btn btn-warning btn-sm" href="/teacher/{{$teacher->id}}/edit" style="font-size: 10px;">Edit</a>
            <form action="/teacher/{{$teacher->id}}/delete" method="POST">
             @csrf
             @method('DELETE')
             <button type="submit" class="btn btn-sm btn-danger" style="font-size: 10px;">Delete</button>
            </form>
        </div>
    </td>
        </tr>
@elseif ($teacher->ep_teacher)
   <tr class="text-center">
            <td style="font-size: 13px;">{{ $teacher->name }}</td>
            <td style="font-size: 13px;">{{ $teacher->phone }}</td>
                        <td style="font-size: 13px;">{{$teacher->position}}</td>

            <td style="font-size: 12px;width:220px;word-wrap: break-word;">{{$teacher->address}}</td>
            <td>
                 <button class="btn btn-success btn-sm " style="font-size: 10px;">EP_DP</button></td>
    <td>

        <div class="d-flex gap-2 flex-wrap justify-content-center">
            <a class="btn btn-warning btn-sm" href="/teacher/{{$teacher->id}}/edit" style="font-size: 10px;">Edit</a>
            <form action="/teacher/{{$teacher->id}}/delete" method="POST">
             @csrf
             @method('DELETE')
             <button type="submit" class="btn btn-sm btn-danger" style="font-size: 10px;">Delete</button>
            </form>
        </div>
    </td>
        </tr>
@elseif ($teacher->fm_teacher)
    <tr class="text-center">
            <td style="font-size: 13px;">{{ $teacher->name }}</td>
            <td style="font-size: 13px;">{{ $teacher->phone }}</td>
                       <td style="font-size: 13px;">{{$teacher->position}}</td>

            <td style="font-size: 12px;max-width:220px;word-wrap: break-word;">{{$teacher->address}}</td>
            <td>
                 <button class="btn btn-success btn-sm " style="font-size: 10px;">FM_DP</button></td>
    <td>

        <div class="d-flex gap-2 flex-wrap justify-content-center">
            <a class="btn btn-warning btn-sm" href="/teacher/{{$teacher->id}}/edit" style="font-size: 10px;">Edit</a>
            <form action="/teacher/{{$teacher->id}}/delete" method="POST">
             @csrf
             @method('DELETE')
             <button type="submit" class="btn btn-sm btn-danger" style="font-size: 10px;">Delete</button>
            </form>
        </div>
    </td>
        </tr>

@endif
        @empty
        <p class="alert alert-danger">Oooh! Please add new teacher</p>
        @endforelse
    </table>
</div>
</div>
