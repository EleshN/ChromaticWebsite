$(document).ready(function () {
  console.log("closebutton.js loaded and ready");
  $(document).on('click', '#close-button', function () {
    console.log("PAPAPIO");
    var socials = document.getElementById('modalbg');
    socials.classList.add('hidden');
  });
});
