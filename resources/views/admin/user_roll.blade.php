<x-admin.dashboard>
    <div class="table-responsive rounded-3 overflow-hidden">
    <table class="table table-info opacity-75 table-layout-fixed bordered">
        <tr class="text-center">
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>User_Roll</th>
        </tr>
        @foreach($users as $user)
        <tr class="text-center">
            <td style="font-size: 13px;">{{ $user->name }}</td>
            <td style="font-size: 13px;">{{ $user->username }}</td>
            <td style="font-size: 13px;">{{ $user->email }}</td>
            <td>
                <div class="d-flex gap-2 flex-wrap justify-content-center">
                   <form action="/user/{{$user->id}}/isadmin" method="POST" style="display:inline;">
    @csrf
    @method('PATCH')

    <button type="submit" class="btn btn-sm"
        style="font-size: 10px; {{ $user->is_admin ? 'background-color: #ffc107; color: #000;' : 'background-color: #28a745; color: #fff;padding-right:16px' }}">
        {{ $user->is_admin ? 'Admin' : 'User' }}
    </button>
</form>
                    <form action="/user/{{$user->id}}/delete" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" style="font-size: 10px;">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
</div>

</x-admin.dashboard>