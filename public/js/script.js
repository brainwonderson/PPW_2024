// Blur effect
document.addEventListener('mousemove', function (e) {
  const blurEffect = document.getElementById('blur');
  blurEffect.style.top = `${e.clientY - 150}px`; // Adjusting Y position
  blurEffect.style.left = `${e.clientX - 150}px`; // Adjusting X position
});

// Dropdown toggle
function toggleDropdown(event) {
  event.preventDefault();
  const dropdownMenu = document.getElementById('dropdownMenu');
  dropdownMenu.classList.toggle('hidden');
}

document.addEventListener('click', function (e) {
  const dropdown = document.getElementById('dropdownMenu');
  if (!e.target.closest('.relative') && !dropdown.classList.contains('hidden')) {
      dropdown.classList.add('hidden');
  }
});

// Page fade-in and fade-out effect
document.addEventListener("DOMContentLoaded", function () {
  const body = document.body;
  // Fade-in on load
  body.classList.add("fade-in", "fade");

  // Fade-out on link click
  document.querySelectorAll('a').forEach(link => {
      link.addEventListener("click", function (event) {
          if (link.href !== window.location.href && link.target !== "_blank") {
              event.preventDefault();
              body.classList.remove("fade");
              body.classList.add("fade-out");
              setTimeout(() => {
                  window.location.href = link.href;
              }, 500);
          }
      });
  });
});
