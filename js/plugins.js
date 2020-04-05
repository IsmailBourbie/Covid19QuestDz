$(document).ready(function () {
  $("#quizSlider").on("slide.bs.carousel", function (e) {
    let quizNumber = $("#quizNumber"),
      direction = e.direction,
      quizNumberInt = parseInt(quizNumber.text());
    if (direction == "left") {
      if (quizNumberInt < 26) {
        quizNumber.text(quizNumberInt + 1);
      }
    } else if (direction == "right") {
      if (quizNumberInt > 1) {
        quizNumber.text(quizNumberInt - 1);
      }
    }
  });

  // disabled button if the last item
  $("#quizSlider").on("slid.bs.carousel", function (e) {
    if ($(".item.active").hasClass("lastItem")) {
      $("#next").fadeOut();
    } else {
      $("#next").fadeIn();
    }
  });

  // Show sub questions
  $(".subqst input").click(function () {
    if ($(this).hasClass("yes")) {
      $(this).parent().siblings(".subshow").removeClass("hide");
    } else {
      $(this).parent().siblings(".subshow").addClass("hide");
    }
  });

  // Show sub info
  $(".subInfo input[type=radio]").click(function () {
    $(this).parent().siblings().children(".subInfoDisplay").hide();
    if ($(this).hasClass("hasSubInfo")) {
      $(this).siblings(".subInfoDisplay").show();
    }
  });

  // sub info for checkbox
  $(".subInfo input[type=checkbox]").click(function () {
    if ($(this).is(":checked")) {
      $(this).siblings(".subInfoDisplay").show();
    } else {
      $(this).siblings(".subInfoDisplay").hide();
    }
  });

  // Calculate the final result

  $("#show-result-btn").click(function (e) {
    e.preventDefault();
    let probabilitySum = 0,
      dangerSum = 0,
      i,
      j;
    let selectedInputsProb = $("input[data-probability]:checked");
    let selectedInputsDanger = $("input[data-danger]:checked");

    // calculate probability sum
    for (i = 0; i < selectedInputsProb.length; i++) {
      let selectedInputProbMark = parseFloat(
        selectedInputsProb.eq(i).attr("data-probability")
      );
      probabilitySum = probabilitySum + selectedInputProbMark;
    }

    for (j = 0; j < selectedInputsDanger.length; j++) {
      let selectedInputDangerMark = parseFloat(
        selectedInputsDanger.eq(j).attr("data-danger")
      );
      dangerSum = dangerSum + selectedInputDangerMark;
    }

    $("#probability-display > span").text(probabilitySum);
    $("#danger-display > span").text(dangerSum);
    $("#result-display").show();
  });

  // Reset the quiz

  $("#reset-quiz-btn").click(function () {
    $("#quizSlider").carousel(0);
    $("#quizNumber").text(0);
  });

  // reset on modal hide

  $("#quizModal").on("hide.bs.modal", function (e) {
    $("#reset-quiz-btn").click();
  });
});
