var btnToggle = document.querySelector('.toggle');
var btnSidebarClose = document.querySelector('.sidebarclose');

btnToggle.addEventListener('click', function () {
  document.querySelector('.toggle span').classList.add('toggle');
  document.querySelector('.sidebarclose').classList.add('show');
  document.getElementById('sidebar').classList.add('sidebarshow');
});

btnSidebarClose.addEventListener('click', function () {
  document.querySelector('.toggle span').classList.remove('toggle');
  document.querySelector('.sidebarclose').classList.remove('show');
  document.getElementById('sidebar').classList.remove('sidebarshow');
});
