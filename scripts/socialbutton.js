$(document).ready(function () {
  console.log("socialbutton.js loaded and ready");
  $(document).on('click', '#social-button', function () {
    console.log("PAPAPIO");
    var socials = document.getElementById('modalbg');
    socials.classList.remove('hidden');
  });
});
