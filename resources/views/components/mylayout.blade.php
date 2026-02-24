<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="{{ asset('/image/logo.jpg') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>GTI Naypyitaw</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style>
        body {
    position: relative;
    min-height: 100vh;
    margin: 0;
}

body::before {
  content: "";
  position: fixed;
  inset: 0;
  background-image: url('/storage/blogImage/backgroundimage.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;

  filter: brightness(60%);
  z-index: -1;

  pointer-events: none; /* ✅ IMPORTANT: allow clicking modal */
}
html, body {
  height: 100%;
  margin: 0;
}

.wrapper {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}

main {
  flex: 1;
}

footer {
  background: #333;
  color: white;
  text-align: center;
  padding: 15px;
}


    </style> 
    <link rel="icon" type="image/png" href="{{ asset('/storage/images/school-logo.jpg') }}">
</head>
<body>
    <div class="wrapper">
     <x-navbar />
    <!-- Page content -->
    <main class=" pt-3">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <x-footer />
    </div>
    <!-- Bootstrap JS Bundle (Popper included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>