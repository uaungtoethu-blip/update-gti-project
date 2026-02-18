@props(['hostel'])
<x-admin.dashboard>
     <h3 class="text-center text-info">Hostel List</h3>
    <div class="table-responsive rounded-3 overflow-hidden mb-4">
        <table class="table table-info opacity-75 table-layout-fixed bordered">
            <tr class="text-center">
                <th>Name</th>
                <th>Class</th>
                <th>Parent Name</th>
                <th>Parent Phone</th>
                <th>Address</th>
                <th>Student Phone</th>
                <th>Stay</th>
            </tr>
            @forelse ($hostel as $host)
                <tr class="text-center">
                    <td>{{ $host->name }}</td>
                    <td>{{ $host->class }}</td>
                    <td>{{ $host->parent }}</td>
                    <td>{{ $host->parent_phone }}</td>
                    <td>{{ $host->address }}</td>
                    <td>{{ $host->student_phone }}</td>
                    <td> 🎯 </td>
                    
                </tr>
                  @empty
                @endforelse
        </table>
    </div>
              
</x-admin.dashboard>
   

                