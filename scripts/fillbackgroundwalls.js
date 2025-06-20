
function fillBackgroundWalls() {
  const container = document.getElementById('background-scroll');
  const top = container.querySelector('.background-top');

  // Remove old
  container.querySelectorAll('.background-wall').forEach(el => el.remove());

  // Calculate height
  const topHeight = top.offsetHeight;
  const wallHeight = topHeight;
  const pageHeight = document.documentElement.scrollHeight;

  const wallCount = Math.ceil((pageHeight - topHeight) / wallHeight) + 2;

  for (let i = 0; i < wallCount; i++) {
    const wall = document.createElement('div');
    wall.className = 'background-wall';
    container.appendChild(wall);
  }

  const gradient = document.getElementById('background-gradient');
  gradient.style.height = `${pageHeight}px`;
}

function syncScroll() {
  const scrollY = window.scrollY;
  const scrollContainer = document.getElementById('background-scroll');
  scrollContainer.style.transform = `translateY(-${scrollY}px)`;
}

window.addEventListener('load', () => {
  fillBackgroundWalls();
  syncScroll();
});

window.addEventListener('resize', () => {
  fillBackgroundWalls();
  syncScroll();
});

window.addEventListener('scroll', syncScroll);
