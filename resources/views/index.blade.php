<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME || BANGKIT MUSIC</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>


<body class="bg-cover bg-center h-screen bg-slate-800" style="background-image: url('https://assets\images\Background.jpg')">

  <!-- Navbar -->
  <nav class="relative flex items-center justify-between px-4 py-2 bg-gray-800">
    <!-- Left Logo -->
    <div >
    <img src="{{ asset('assets\logo.jpeg') }}" alt="Logo Bangkit Musik" width="50"
    height="50">

     
    </div>

    <!-- Center Text -->
    <div class="absolute left-1/2 transform -translate-x-1/2">
      <p class="text-white font-semibold text-xl">Bangkit Musik</p>
    </div>

    <!-- Right Social Media Icons -->
    <div class="flex space-x-4">
      <!-- Social Media Icon Links -->
      <a href="#" class="text-green-500 hover:opacity-80">
        <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp" class="w-6 h-6">
      </a>
      <a href="#" class="text-pink-500 hover:opacity-80">
        <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram" class="w-6 h-6">
      </a>
      <a href="#" class="text-green-600 hover:opacity-80">
        <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png" alt="Google Maps" class="w-6 h-6">
      </a>
    </div>
  </nav>

  <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
    <div class="text-center text-white px-6">
      <h1 class="text-4xl font-bold mb-4 flex items-center justify-center gap-2">
        Bangkit Music
        <span class="text-2xl">🎵</span>
      </h1>
      <p class="text-justify leading-relaxed mb-6 mx-80">
        Bangkit Music adalah toko alat musik yang menyediakan berbagai instrumen berkualitas 
        seperti gitar, piano, drum, dan aksesoris musik lainnya. Dengan pelayanan profesional, 
        kami siap membantu Anda menemukan alat musik yang sesuai untuk mengembangkan bakat 
        dan passion musik Anda.
      </p>
      <a href="#" class="bg-white text-black px-6 py-2 rounded-full font-medium hover:bg-gray-200">
        Shop
      </a>
    </div>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 my-8">

  <!-- Center Text -->
  <div class="absolute left-1/2 transform -translate-x-1/2">
      <p class="text-white font-semibold text-3xl ">PRODUCT KAMI</p>
    </div>

    @foreach ($categories as $categorie)
        <div class="bg-white shadow-lg rounded-lg overflow-hidden my-20">
            <img src="{{ asset('storage/' . $categorie->image) }}" alt="{{ $categorie->name }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="font-bold text-lg text-center text-gray-800">{{ strtoupper($categorie->name) }}</h3>
                <div class="flex justify-center mt-4"> 
                <h3 class="font-bold text-lg text-center text-gray-800">Rp.{{ strtoupper($categorie->price) }}</h3>
                </div>
            </div>
        </div>
    @endforeach
</div>


    <img src="assets\images\Foto1.jpg" alt="Fullscreen Image" class="h-30 w-full object-cover">


<footer class="bg-red-800 text-white text-center py-4 ">
  <p class="text-sm">
    Bangkit Music 1: SPBU, Klahang RT 03/01 Sokaraja, Dusun II Klahang, Klahang, Kec. Sokaraja, 
    Kabupaten Banyumas, Jawa Tengah 53181
  </p>
  <p class="text-sm mt-1">
    Bangkit Music 2: Jl. Sunan Bonang, Dusun II, Dukuhwaluh, Kec. Kembaran, Kabupaten Banyumas, Jawa Tengah 53182
  </p>
</footer>


</body>
</html>
