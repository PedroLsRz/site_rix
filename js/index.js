<script>
  document.addEventListener('DOMContentLoaded', function () {
    const slider = document.querySelector('.slider');
    let currentIndex = 0;

    function nextSlide() {
      currentIndex = (currentIndex + 1) % slider.children.length;
      scrollToSlide();
    }

    function scrollToSlide() {
      const offset = currentIndex * slider.offsetWidth;
      slider.scrollTo({
        left: offset,
        behavior: 'smooth',
      });
    }

    setInterval(nextSlide, 1000); // Altere o valor para ajustar o tempo de transição (em milissegundos)
  });
</script>
