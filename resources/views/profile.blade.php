<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kartu Profil</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #fff0f5; 
      font-family: Arial, sans-serif;
    }

    .card {
      text-align: center;
    }

    .profile-pic {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid #f8c8dc; 
      margin: 0 auto 20px auto;
    }

    .info {
      background-color: #f8c8dc;
      margin: 10px auto;
      padding: 12px;
      min-width: 250px; 
      border-radius: 10px;
      font-weight: bold;
      color: #333;
      white-space: nowrap;
    }
  </style>
</head>
<body>
  <div class="card">
    <!-- Ganti "foto.jpg" dengan gambar kamu -->
    <img src="images/pp.jpg" alt="Foto Profil" class="profile-pic">

    <div class="info">{{ $nama }}</div>
    <div class="info">{{ $kelas }}</div>
    <div class="info">{{ $npm }}</div>
  </div>
</body>
</html>