$(window).resize(resizeItem);
function resizeItem() {
  let ideaItem = document.querySelector(".idea-item__inner");
  let ideaWidth = ideaItem.clientWidth;
  $(".idea-item__inner").css("height", ideaWidth);
  // let ideaBox = document.querySelector(".idea-contents__modal__box");
  // let ideaBoxWidth = ideaBox.clientWidth;
  // $("idea-contents__modal__box").css("height", ideaBoxWidth);
}

window.addEventListener("load", function() {
  let ideaItem = document.querySelector(".idea-item__inner");
  let ideaWidth = ideaItem.clientWidth;
  console.log(ideaWidth);
  $(".idea-item__inner").css("height", ideaWidth);

  let ideaBox = document.querySelector(".idea-contents__modal__box");
  let ideaBoxWidth = ideaBox.clientWidth;
  console.log(ideaBoxWidth);
  $("idea-contents__modal__box").css("height", ideaBoxWidth);

  $(".l-footer").click(() => {
    console.log("footer");
    $(".l-footer__modal").fadeIn(300);
    $(".modal-btn--cancel").click(() => {
      $(".l-footer__modal").fadeOut(300);
    });
  });

  $(".idea-item__inner").click(() => {
    console.log("idea!");
    $(".idea-contents__modal").fadeIn(300);
    $(".idea-modal__btn--cancel").click(() => {
      console.log("close");
      $(".idea-contents__modal").fadeOut(300);
    });
  });

  $(".menu-open-button").click(function() {
    $(".hamburger-menu__inner").removeClass("js-slide-anim-out");
    $(".hamburger-menu__inner").addClass("js-slide-anim");
  });
  $(".c-btn--close").click(function() {
    $(".hamburger-menu__inner").addClass("js-slide-anim-out");
  });
});
