<div class="nav-item">
  <span id="settings-btn" class="text-info"><i class="fa-solid fa-gear"></i>
  </span>
</div>

<!-- Settings Modal -->
<div id="settings-modal" class="modal">
  <div class="modal-content w-75 h-100 bg-secondary bg-opacity-75">
    <span class="close-btn text-dark text-end" id="close-btn">&times;</span>
    <!-- Add your settings options here -->

    <form action="/user/{{auth()->user()->username}}/edit" method="POST" enctype="multipart/form-data" class="text-white">
      @csrf
      @method('PATCH')
      <div class="d-flex justify-content-start ms-5">
        <img src="/storage/{{auth()->user()->profileImg}}" alt="" class="rounded-circle my-2 border border-3 border-info" width="100px" height="100px">
      </div>
      <p class="text-info ms-4 mb-4">{{auth()->user()->username}} <small>( id : {{auth()->user()->id}} )</small></p>
    <div class="my-3">
      <label for="" class="form-label">Set Profile :</label><br>
    <input type="file" class="w-50"  name="profileImg" value="{{old('profileImg')}}">
    </div>
     <div class="my-3">
    <input type="text" class="form-control w-50"   name="name" value="{{old('name',auth()->user()->name)}}">
    </div>
  <div class="my-3">
    <input type="text" class="form-control w-50"  name="username" value="{{old('username',auth()->user()->username)}}">
  </div>
  <div class="d-flex justify-content-between">
    <button type="submit" class="btn btn-success btn-sm">Save</button>
  </form>
  <x-nav.logout-form />
</div>
  </div>
</div>
<style>
  /* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 9999;   /* 🔥 VERY IMPORTANT */
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
}


/* Modal Content */
.modal-content {
  background-color: white;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 300px;
  border-radius: 8px;
}

/* Close Button */
.close-btn {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close-btn:hover,
.close-btn:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

</style>
<script>
  // Get modal and buttons
const modal = document.getElementById("settings-modal");
const settingsBtn = document.getElementById("settings-btn");
const closeBtn = document.getElementById("close-btn");

// Open modal when settings button is clicked
settingsBtn.onclick = function() {
  modal.style.display = "block";
}

// Close modal when close button is clicked
closeBtn.onclick = function() {
  modal.style.display = "none";
}

// Close modal if clicked outside of the modal content
window.onclick = function(event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
}

</script>