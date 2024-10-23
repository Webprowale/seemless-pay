<?= $this->extend('Layout') ?>
<?= $this->section('content') ?>
<main class="min-h-screen w-full">
<div class="hero container mt-5">
    <div class="grid md:grid-cols-12 md:m-5 gap-[50px] sm:gap-0">
      <div class="col-span-7 sm:pt-[5rem] text-start sm:ps-5 order-2 sm:order-1">
         <div class="flex flex-col">
            <div class="flex">
          <h5 class="text-gray-800 font-semibold md:ps-2">What We Provide You</h5>
          <img src="<?=base_url() ?>/assest/img/arrow.png" class="sm:w-auto w-[100px]" alt="c-pay wallet">
            </div>
          <h1 class="text-gray-900 font-extrabold text-[1.6rem] md:text-[4.1rem]">Your Simple E-Wallet</h1>
          <h2 class="text-[#8310f2] font-extrabold text-[1.7rem] md:text-[3.6rem] mb-2">Companion</h2>
          <p class="font-medium">Welcome to the future of finance! Our e-wallet platform revolutionizes the way you manage your money,offering convenience, security, and seamless 
            transactions at your fingertips
        </p>
         </div>
         <div class="flex gap-5 mt-5">
            <a href="<?=base_url() ?>/signup" class="text-white bg-[#8310f2] hover:bg-[#9bc0fc] font-medium rounded-lg text-sm py-2 px-4 md:px-8 md:py-2 text-center">Get Started</a>
            <a href="<?=base_url() ?>#about" class="bg-white hover:bg-[#8310f2] border border-[#9bc0fc] font-medium rounded-lg hover:text-white text-sm py-2 px-4 md:px-8 md:py-2 text-center">Learn More</a>
      

         </div>
      </div>
      <div class="col-span-5 order-1 sm:order-2 ">
        <img src="<?=base_url() ?>/assest/img/c-pay.png" alt="c-pay wallet" class="w-full animate__animated animate__pulse animate__delay-2s animate__infinite">
      </div>
    </div>
</div>
</main>
<?= $this->endSection() ?>
