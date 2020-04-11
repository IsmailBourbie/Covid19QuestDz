$(document).ready(function () {
  $("#quizSlider").on("slide.bs.carousel", function (e) {
    let quizNumber = $("#quizNumber"),
      direction = e.direction,
      quizNumberInt = parseInt(quizNumber.text());
    if (direction == "left") {
      if (quizNumberInt < 28) {
        quizNumber.text(quizNumberInt + 1);
      }
    } else if (direction == "right") {
      if (quizNumberInt > 1) {
        quizNumber.text(quizNumberInt - 1);
      }
    }
    $("#errors-display").hide();
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

  // if idk checkbox clicked
  $(".idk-checkbox input").click(function () {
    if ($(this).hasClass("idk-input") & $(this).is(":checked")) {
      $(this).parent().siblings().children("input").prop("checked", false);
      $(this).parent().siblings().children("input").prop("disabled", true);
    } else if ($(this).hasClass("idk-input") & !$(this).is(":checked")) {
      $(this).parent().siblings().children("input").prop("disabled", false);
    }
  });

  // On change yes/no clear select inputs
  $(".subqst input.no").click(function () {
    $(this)
      .parent()
      .siblings(".subshow")
      .find("input:checked")
      .prop("checked", false);
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

    let probMark = (probabilitySum * 100) / 92;
    let probMarkDisplay = $("#probability-display");

    probMarkDisplay.show();
    if (probMark <= 25) {
      probMarkDisplay
        .children("p")
        .html(
          "<span>إحتمال إصابتك بالفيروس ضعيف.</span><br>لا تنسى أن الإستبيان مجرد افتراض لاحتمال إصابتك، ولا يغنيك عن الاستشارة الطبية إذا استدعت حالتك ذلك."
        );
      probMarkDisplay.addClass("alert-info");
    } else if ((probMark > 25) & (probMark <= 75)) {
      probMarkDisplay
        .children("p")
        .html(
          "<span>إحتمال إصابتك بالفيروس متوسط.</span><br>عليك باستشارة طبيب او الإتصال بالجهات المعنية على الرقم الأخضر <u>3030</u> "
        );
      probMarkDisplay.addClass("alert-warning");
    } else {
      probMarkDisplay
        .children("p")
        .html(
          "<span>إحتمال إصابتك بالفيروس مرتفع.</span><br> عليك بالاتصال فورا بالاستعجالات أو على الرقم <u>3030.</u>"
        );
      probMarkDisplay.addClass("alert-danger");
    }

    let dangerMark = (dangerSum * 100) / 23.75;

    let dangerMarkDisplay = $("#danger-display");
    if (probMark > 25) {
      dangerMarkDisplay.show();
      if (dangerMark <= 25) {
        dangerMarkDisplay.children("p").html("حالتك مستقرة");
        dangerMarkDisplay.addClass("alert-info");
      } else if ((probMark > 25) & (probMark <= 75)) {
        dangerMarkDisplay
          .children("p")
          .html("حالتك خطيرة نوعا ما  عليك باستشارة طبيب عاجلا.");
        dangerMarkDisplay.addClass("alert-warning");
      } else {
        dangerMarkDisplay
          .children("p")
          .html("حالتك جد خطيرة عليك بالاتصال فورا بالاستعجالات.");
        dangerMarkDisplay.addClass("alert-danger");
      }
    } else {
      dangerMarkDisplay.hide();
    }
  });

  // Reset the quiz

  $("#reset-quiz-btn").click(function () {
    $("#quizSlider").carousel(0);
    $("#quizNumber").text(1);
    $("#probability-display").hide();
    $("#danger-display").hide();
  });

  // reset on modal hide
  $("#quizModal").on("hide.bs.modal", function (e) {
    $("#reset-quiz-btn").click();
  });

  // Validate form
  $("#next").click(function () {
    let checkedInput = $(".item.active input:checked");
    if (checkedInput.size() < 1) {
      $("#errors-display").html("يرجى الإجابة على السؤال.");
      $("#errors-display").show();
      return false;
    } else if (checkedInput.hasClass("yes")) {
      let checkedNestedInput = checkedInput
        .parent()
        .siblings(".subshow")
        .find("input:checked");
      if (checkedNestedInput.size() < 1) {
        $("#errors-display").html(
          "لقد أجبت بنعم، يرجى إكمـال الإجابة على السؤال."
        );
        $("#errors-display").show();
        return false;
      }
    }
  });
});
