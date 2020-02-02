window.addEventListener("load", function() {
  // dom

  $(".l-footer").click(() => {
    console.log("footer");
    $(".l-footer__modal").fadeIn(300);
    $(".modal-btn--cancel").click(() => {
      $(".l-footer__modal").fadeOut(300);
    });
  });

  $(".idea-item").click(() => {
    console.log("idea!");
    $(".idea-contents__modal").fadeIn(300);
    $(".modal-btn--cancel").click(() => {
      $(".idea-contents__modal").fadeOut(300);
    });
  });
});
