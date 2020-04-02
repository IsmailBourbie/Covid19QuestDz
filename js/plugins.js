$(document).ready(function() {
  var quizNumber = $("#quizNumber");
  $("#next").click(function() {
    let quizNumberInt = Number.parseInt(quizNumber.text());
    if (quizNumberInt < 10) {
      quizNumber.text(quizNumberInt + 1);
    }
  });

  $("#prev").click(function() {
    let quizNumberInt = Number.parseInt(quizNumber.text());
    if (quizNumberInt > 1) {
      quizNumber.text(quizNumberInt - 1);
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
  $(".subInfo input").click(function() {
    console.log();
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
});
