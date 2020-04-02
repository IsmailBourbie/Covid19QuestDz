<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-4">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">
                            COVID19DZ
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-8">
                    <p>بالشراكة مع الأطباء ومهندسي الكمبيوتر</p>
                </div>
            </div>
        </div>
    </nav>

    <!-- Start with Main -->
    <div class="main">
        <div class="container">
            <div class="main-header">
                <h1>
                    <i class="fa fa-1x fa-info-circle"></i>
                    معلومــات مهمة
                </h1>
            </div>
            <div class="section">
                <div class="row">
                    <div class="col-md-6 col-lg-push-6">
                        <p class="lead">هل تعاني ( انت أو أي شخص تعرفه) من الحمى أو السعال؟ هل أنت قلق من أنك قد تكون مصابًا بعدوى فيروس كورونا؟ هل تحتاج الى نصيحة طبية؟ سنساعدك. يساعدك استبيان التقييم الذاتي هذا على تلخيص العناصر الرئيسية التي تستلزم زيارة الطبيب أو الإتصال بالمصالح المعنية .</p>
                    </div>
                    <div class="col-md-6 col-lg-pull-6" style="text-align: center">
                        <img src="http://covid-quest.com/images/3.fievre.png">
                        <img src="http://covid-quest.com/images/2.toux.png">
                    </div>
                </div>
            </div>
            <div class="section">
                <p class="lead">تسمح أجوبتك على الاستبيان بالحصول على نموذج يمكن إرساله إلى طبيبك أو إلى المصالح المختصة لطلب موعد.
                    يقدم لك هذا الاستبيان أيضًا معلومات خاصة بحالتك حيث يمكن إكمال القيام بتقييم ذاتي بواسطة الشخص المريض نفسه أو مقدم الرعاية( خاصة بالنسبة لكبار السن أو الأشخاص المتعبين جدًا ) .
                    لا يهدف هذا الاستبيان إلى استبدال المشورة الطبية ، فهو مصمم لتسهيل الحوار مع الطبيب فقط .
                    ملاحظة: هذا الاستبيان غير مناسب للأطفال.</p>
            </div>

            <div class="section">
                <p class="lead">تم تصميم الإستبيان من قبل أطباء بالشراكة مع مهندسي إعلام .</p>
            </div>

            <div class="main-footer">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#quizModal">أبدأ الأسئلة</button>
            </div>
        </div>
    </div>
    <!-- Quiz Modal Slider Start -->
    <div class="modal fade" id="quizModal" tabindex="-1" role="dialog" aria-labelledby="quizModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">إستبيــان خاص بكورونا فيروس</h4>
                </div>
                <div class="modal-body">
                    <div id="quizSlider" class="carousel slide" data-ride="carousel" data-wrap="false" data-interval="false">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active" style="background: red">

                            </div>
                            <div class="item" style="background: green">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <!-- Controls -->
                    <div class="row">
                        <div class="col-xs-4 text-left">
                            <a class="left btn carousel-control" id="prev" href="#quizSlider" role="button" data-slide="prev">
                                الســابق
                            </a>
                        </div>
                        <div class="col-xs-4 text-center">
                            <div class="quizNumeration">
                                <span id="quizNumber">1</span> - 26
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <a class="right btn carousel-control" id="next" href="#quizSlider" role="button" data-slide="next">
                                التـــالي
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <script src="js/jquery-1.12.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
</body>

</html>