const logoImg = document.querySelector('.logo img');
const dropdown = document.querySelector('.dropdown');

logoImg.addEventListener('click', () => {
  dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
});

document.addEventListener('click', (event) => {
  const target = event.target;
  if (!logoImg.contains(target) && !dropdown.contains(target)) {
    dropdown.style.display = 'none';
  }
});
