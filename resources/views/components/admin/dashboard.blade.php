<x-layout>
    <div class="container-fluid pt-5 pb-2">
      <div class="row">
        {{-- admin can --}}
        <div class="">
          <button class="btn btn-info md-col-1" 
          data-bs-toggle="offcanvas" 
          data-bs-target="#sidebarMenu">
         <i class="fa-solid fa-bars"></i>
        </button>
      </div>
        <x-admin.adminCan />    
        </div>
        {{-- main dashboard --}}
        <div class="col-md-12">
            <div class=" py-2 px-1">
              {{ $slot }}
            </div>
        </div>
      </div>
    </div>
</x-layout>