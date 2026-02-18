<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GTI</title>
    <link rel="icon" href="{{ asset('/image/logo.jpg') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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

    </style>
</head>
<body>
    <!-- Navbar -->
    <x-navbar />

    <!-- Page content -->
    <main class=" pt-3">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <x-footer />

    <!-- Bootstrap JS Bundle (Popper included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
