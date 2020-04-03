$(document).ready(function() {
  $("#quizSlider").on("slide.bs.carousel", function(e) {
    let quizNumber = $("#quizNumber"),
      direction = e.direction,
      quizNumberInt = parseInt(quizNumber.text());
    if (direction == "left") {
      if (quizNumberInt < 10) {
        quizNumber.text(quizNumberInt + 1);
      }
    } else if (direction == "right") {
      if (quizNumberInt > 1) {
        quizNumber.text(quizNumberInt - 1);
      }
    }
  });

  // Show sub questions
  $(".subqst input").click(function() {
    if ($(this).hasClass("yes")) {
      $(this)
        .parent()
        .siblings(".subshow")
        .removeClass("hide");
    } else {
      $(this)
        .parent()
        .siblings(".subshow")
        .addClass("hide");
    }
  });

  // Show sub info
  $(".subInfo input[type=radio]").click(function() {
    $(this)
      .parent()
      .siblings()
      .children(".subInfoDisplay")
      .hide();
    if ($(this).hasClass("hasSubInfo")) {
      $(this)
        .siblings(".subInfoDisplay")
        .show();
    }
  });

  // sub info for checkbox
  $(".subInfo input[type=checkbox]").click(function() {
    if ($(this).is(":checked")) {
      $(this)
        .siblings(".subInfoDisplay")
        .show();
    } else {
      $(this)
        .siblings(".subInfoDisplay")
        .hide();
    }
  });
});
