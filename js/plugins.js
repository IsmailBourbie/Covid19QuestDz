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

  $("#show-result").click(function (e) {
    e.preventDefault();
    let ProbabilitySum = 0,
      i;
    let selectedInputsProb = $("input[data-probability]:checked");
    // let selectedInputsDanger = $("input[data-danger]:checked");
    for (i = 0; i < selectedInputsProb.length; i++) {
      let selectedInputProbMark = parseFloat(
        $("input[data-probability]:checked").eq(i).attr("data-probability")
      );

      ProbabilitySum = ProbabilitySum + selectedInputProbMark;
    }

    alert(ProbabilitySum);
  });
});
