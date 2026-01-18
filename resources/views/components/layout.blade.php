<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $title }}</title>
    <style>
  /* Mengembalikan warna paginasi ke putih bersih (Style Guru) */
  
  /* 1. Kotak nomor yang aktif jadi abu-abu muda/putih (bukan biru) */
  nav[role="navigation"] span[aria-current="page"] span {
      background-color: #F3F4F6 !important; /* gray-100 */
      color: #374151 !important; /* gray-700 */
      border-color: #D1D5DB !important; /* gray-300 */
  }

  /* 2. Warna nomor yang tidak aktif jadi hitam/abu-abu gelap */
  nav[role="navigation"] a {
      color: #374151 !important;
      background-color: #ffffff !important;
      border-color: #D1D5DB !important;
  }

  /* 3. Efek hover saat mouse lewat jadi abu-abu sangat muda */
  nav[role="navigation"] a:hover {
      background-color: #F9FAFB !important; /* gray-50 */
      color: #111827 !important; /* gray-900 */
  }

  /* 4. Panah Prev/Next jadi abu-abu */
  nav[role="navigation"] svg {
      fill: #6B7280 !important; /* gray-500 */
  }
</style>
</head>
<body class="h-full">

<div class="min-h-full">
  <x-navbar/>

  <x-header :title="$title"/>
  <main>
   <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        {{ $slot }}
     </div>
    </main>
</div>
 <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
</body>
</html>