window.addEventListener("load", function() {
  // dom
  let footer = document.querySelector(".l-footer");

  footer.addEventListener("click", e => {
    $(".modal").fadeIn(300);
    $(".modal-btn--cancel").click(() => {
      $(".modal").fadeOut(300);
    });
  });
});

// $(".l-footer").click(function() {
//   console.log("footer click");
//   $(".close_button, .modalBg").click(function() {
//     $(".modalWrapper, .modalBg").fadeOut();
//   });
// });
