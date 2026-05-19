document.addEventListener('DOMContentLoaded', () => {
  const toggleBtn = document.getElementById('menu-toggle');
  const wrapper = document.getElementById('wrapper');
  const links = document.querySelectorAll('.sidebar-link');
  const sections = document.querySelectorAll('.content-section');

  toggleBtn.addEventListener('click', () => {
    wrapper.classList.toggle('toggled');
  });

  links.forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const target = link.getAttribute('data-target');

      sections.forEach(s => s.classList.add('d-none'));
      document.getElementById(target).classList.remove('d-none');

      links.forEach(l => l.classList.remove('active'));
      link.classList.add('active');
    });
  });
});
