<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to the future of finance! Our e-wallet platform revolutionizes the way you manage your money,offering convenience, security, and seamless 
            transactions at your fingertips" />
    <meta name="keywords" content="Simple E-Wallet, payment companion" />
    <meta name="author" content="Seemless Payment" />
    <title>Seemless Pay - Transaction At Your Finger Tips</title>
    <link href="assets/img/logo.png" rel="icon" type="image/png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css"
      rel="stylesheet"
    />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            container: {
              center: true,
              padding: "1rem",
              screens: {
                sm: "100%",
                md: "768px",
                lg: "1024px",
                xl: "1280px",
              },
            },
          },
        },
      };
    </script>
</head>
<body class="bg-[#f2f2f2] overflow-x-clip">
<nav class="bg-transparent w-full z-20 top-0 start-0">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto pt-4 ">
  <a href="<?=base_url() ?>" class="flex items-center space-x-3 rtl:space-x-reverse text-xl text-gray-900 font-bold">
    <img src="<?= base_url() ?>/assest/img/logo.png" alt="seemless pay logo" class='w-[100px]'>
   <span class="text-[#8310f2] text-[1.3rem] ">SeemLess</span>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <button type="button" class="text-white bg-[#8310f2] hover:bg-[$9bc0fc] md:block hidden focus:ring-4 focus:outline-none font-medium rounded-full text-sm px-8 py-2 text-center ">Sign In</button>
     <div class="px-4">
      <button data-collapse-toggle="navbar-sticky" id="navBtn" onclick="navBtnOnclick()" type="button" class="px-3 transition-all duration-300 ease-in-out inline-flex items-center border shadow p-2  justify-center text-sm text-gray-500 rounded-lg md:hidden focus:outline-none " aria-controls="navbar-sticky" aria-expanded="false">
      <i class="fa-solid fa-bars text-[1.4rem] text-gray-900"></i>
    </button>
     </div>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 transition duration-300 ease-in-out" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0">
      <li>
        <a href="<?= base_url() ?>" class="block py-2 px-3 text-gray-900 md:bg-transparent md:text-[#8310f2] font-bold md:p-0" aria-current="page">Home</a>
      </li>
      <li>
        <a href="<?= base_url() ?>#about" class="block py-2 px-3 text-gray-900 rounded bg-transparent hover:text-[#8310f2] md:p-0 ">About</a>
      </li>
      <li>
        <a href="<?=base_url() ?>#service" class="block py-2 px-3 text-gray-900 rounded :bg-transparent hover:text-[#8310f2] md:p-0">Services</a>
      </li>
      <li>
        <a href="<?=base_url() ?>#contact" class="block py-2 px-3 text-gray-900 rounded  bg-transparent hover:text-[#8310f2] md:p-0">Contact</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

    <?=$this->renderSection('content') ?>
    
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
<script src="<?= base_url() ?>js/index.js" defer></script>
</body>
</html>