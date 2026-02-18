
   <div class="offcanvas offcanvas-start bg-info bg-opacity-50" tabindex="-1" id="sidebarMenu">
  <div class="offcanvas-header">
    <div class="d-flex">

            <img src="/storage/{{auth()->user()->profileImg}}" class="rounded-circle mt-1 border border-2 border-info" width="30px" height="30px" alt="">
            <small class="text-dark fs-6 btn ">{{auth()->user()->name}} (Admin)</small>
          </div>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class=" vh-100 opacity-75">
   <x-admin.list name="🏫 Hostel Status List" route="/admin/hostel/list" />
   <x-admin.list name="👥 Student_List" route="/admin/student_list" />
   <x-admin.list name="🔐 User_Roll" route="/admin/user_roll" />
   <x-admin.list name="👩‍🏫 Teacher_List" route="/admin/teacher_edit_pannel" />
   <x-admin.list name="✏️ Update_Heading" route="/admin/heading/update" />
   <x-admin.list name="📰 Create_Post" route="/admin/post/create" />
</div>
</div>
