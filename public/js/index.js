function navBtnOnclick() {
    var navBtn = document.getElementById('navBtn');
    if (navBtn.innerHTML.includes('fa-bars')) {
        navBtn.innerHTML = '<i class="fa-solid fa-xmark text-[1.4rem] text-gray-900"></i>';
    } else {
        navBtn.innerHTML = '<i class="fa-solid fa-bars text-[1.4rem] text-gray-900"></i>';
    }
    
}
