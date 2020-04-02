$(document).ready(function() {
  var quizNumber = $("#quizNumber");
  $("#next").click(function() {
    let quizNumberInt = Number.parseInt(quizNumber.text());
    if (quizNumberInt < 2) {
      quizNumber.text(quizNumberInt + 1);
    }
  });

  $("#prev").click(function() {
    let quizNumberInt = Number.parseInt(quizNumber.text());
    if (quizNumberInt > 1) {
      quizNumber.text(quizNumberInt - 1);
    }
  });
});
