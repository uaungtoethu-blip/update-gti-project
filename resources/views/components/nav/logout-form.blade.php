<form method="POST" action="/auth/logout"  onsubmit="return confirm('Are you sure you want to logout?')">
            @csrf
            <button type="submit" class="btn btn-danger btn-sm" onclick="showLogoutBox()">Logout</button>
</form>