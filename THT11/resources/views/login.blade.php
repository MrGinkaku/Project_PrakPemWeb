<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Menghubungkan dengan file CSS Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <div class="card">
    <div class="card-header">
      <h4 class="text-center">Login</h4>
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('login') }}" id="loginForm">
        @csrf

        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" class="form-control" placeholder="Your Username" required>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control" placeholder="Your Password" required>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>

      <p class="text-center">Belum memiliki akun? <a href="{{ route('register') }}">Registrasi disini</a></p>
    </div>
  </div>
</div>

<!-- Menghubungkan dengan file JavaScript Bootstrap dan jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- <script>
  document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.getElementById('loginForm');

    loginForm.addEventListener('submit', function (event) {
      event.preventDefault();

      fetch(loginForm.action, {
        method: loginForm.method,
        body: new FormData(loginForm),
        headers: {
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        },
      })
      .then(response => response.json())
      .then(data => {
        alert('Berhasil login');
        window.location.href = "{{ route('home') }}";
      })
      .catch(error => {
        console.error('Error during login:', error);
      });
    });
  });
</script> -->

</body>
</html>
