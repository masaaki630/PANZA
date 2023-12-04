document.querySelector('.hamburger').addEventListener('click', function(){
    this.classList.toggle('active');
    document.querySelector('.slide_menu').classList.toggle('hidden');
  })