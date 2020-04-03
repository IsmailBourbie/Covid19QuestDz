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
                    <form action="" method="post">
                        <div id="quizSlider" class="carousel slide" data-ride="carousel" data-wrap="false" data-interval="false">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- QST1 -->
                                <div class="item active">
                                    <div class="quiz-title text-center">
                                        <h3>معلومـــات شخصية</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">كم عمرك؟</p>
                                    </div>
                                    <div class="quiz-answer">
                                        <div class="answer">
                                            <input type="radio" name="qst1" id="qst1op1" value="18 - 30 سنة">
                                            <label for="qst1op1">18 - 30 سنة</label>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst1" id="qst1op2" value="31 - 40 سنة">
                                            <label for="qst1op2">31 - 40 سنة</label>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst1" id="qst1op3" value="41 - 50 سنة">
                                            <label for="qst1op3">41 - 50 سنة</label>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst1" id="qst1op4" value="51 - 60 سنة">
                                            <label for="qst1op4">51 - 60 سنة</label>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst1" id="qst1op5" value="61 - 70 سنة">
                                            <label for="qst1op5">61 - 70 سنة</label>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst1" id="qst1op6" value="71 سنة وأكثر">
                                            <label for="qst1op6">71 سنة وأكثر</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST2 -->
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>معلومـــات شخصية</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">هل تعيش مع العــائلة الكبيرة أو المصغرة؟</p>
                                    </div>
                                    <div class="quiz-answer">
                                        <div class="answer">
                                            <input type="radio" name="qst2" id="qst2yes" value="نعم">
                                            <label for="qst2yes">نعم</label>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst2" id="qst2no" value="لا">
                                            <label for="qst2no">لا</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST3 -->
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>معلومـــات شخصية</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">هل غــادرت أرض الوطن مؤخرا؟</p>
                                    </div>
                                    <div class="quiz-answer">
                                        <div class="answer">
                                            <input type="radio" name="qst3" id="qst3yes" value="نعم">
                                            <label for="qst3yes">نعم</label>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst3" id="qst3no" value="لا">
                                            <label for="qst3no">لا</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST4 -->
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>معلومـــات شخصية</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">هل تدخن حــاليا؟</p>
                                    </div>
                                    <div class="quiz-answer subInfo">
                                        <div class="answer">
                                            <input class="hasSubInfo" type="radio" name="qst4" id="qst4yes" value="نعم">
                                            <label for="qst1yes">نعم</label>
                                            <div class="subInfoDisplay">
                                                <div class="alert alert-info" role="alert">
                                                    لقد اشرت أنك مدخن! استهلاك التبغ يزيد من خطورة الإصـــابة بالفيروس (دراسة صينية 2020)
                                                </div>
                                            </div>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst4" id="qst4no" value="لا">
                                            <label for="qst1no">لا</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST5 -->
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>معلومـــات شخصية</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">هل قـابلت مؤخرا شخصـا أثبتت التحــاليل اصابته بمرض الكرونا؟</p>
                                    </div>
                                    <div class="quiz-answer">
                                        <div class="answer">
                                            <input type="radio" name="qst5" id="qst5yes" value="نعم">
                                            <label for="qst1yes">نعم</label>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst5" id="qst5no" value="لا">
                                            <label for="qst1no">لا</label>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst5" id="qst5idk" value="لا أدري">
                                            <label for="qst5idk">لا أدري</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST6 -->
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>كيف حـالك؟</h3>
                                        <h3>هل لديك أعراض؟</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">هل تسعل حــاليا؟</p>
                                    </div>
                                    <div class="quiz-answer subqst">
                                        <div class="answer">
                                            <input class="yes" type="radio" name="qst6" id="qst6yes" value="نعم">
                                            <label for="qst6yes">نعم</label>
                                        </div>
                                        <!-- Sub question -->
                                        <div class="subshow hide">
                                            <div class="quiz-question">
                                                <p class="lead">إذا أجبت بنعم، منذ متى؟</p>
                                            </div>
                                            <div class="quiz-answer">
                                                <div class="answer">
                                                    <input type="radio" name="qst6yes" id="qst6yesopt1" value="أقل من 48 سـاعة">
                                                    <label for="qst6yesopt1">أقل من 48 سـاعة</label>
                                                </div>
                                                <div class="answer">
                                                    <input type="radio" name="qst6yes" id="qst6yesopt2" value="3 إلى 7 أيــام">
                                                    <label for="qst6yesopt2">3 إلى 7 أيــام</label>
                                                </div>
                                                <div class="answer">
                                                    <input type="radio" name="qst6yes" id="qst6yesopt3" value="أكثر من أسبوع">
                                                    <label for="qst6yesopt3">أكثر من أسبوع</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="answer">
                                            <input class="no" type="radio" name="qst6" id="qst6no" value="لا">
                                            <label for="qst6no">لا</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST7 -->
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>كيف حـالك؟</h3>
                                        <h3>هل لديك أعراض؟</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">هل لديك الحمى؟</p>
                                    </div>
                                    <div class="quiz-answer subqst">
                                        <div class="answer">
                                            <input class="yes" type="radio" name="qst7" id="qst7yes" value="نعم">
                                            <label for="qst7yes">نعم</label>
                                        </div>
                                        <!-- Sub question -->
                                        <div class="subshow hide">
                                            <div class="quiz-question">
                                                <p class="lead">إذا أجبت بنعم، منذ متى؟</p>
                                            </div>
                                            <div class="quiz-answer">
                                                <div class="answer">
                                                    <input type="radio" name="qst7yes" id="qst7yesopt1" value="أقل من 48 سـاعة">
                                                    <label for="qst7yesopt1">أقل من 48 سـاعة</label>
                                                </div>
                                                <div class="answer">
                                                    <input type="radio" name="qst7yes" id="qst7yesopt2" value="3 إلى 7 أيــام">
                                                    <label for="qst7yesopt2">3 إلى 7 أيــام</label>
                                                </div>
                                                <div class="answer">
                                                    <input type="radio" name="qst7yes" id="qst7yesopt3" value="أكثر من أسبوع">
                                                    <label for="qst7yesopt3">أكثر من أسبوع</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="answer">
                                            <input class="no" type="radio" name="qst7" id="qst7no" value="لا">
                                            <label for="qst7no">لا</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST8 -->
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>كيف حـالك؟</h3>
                                        <h3>هل لديك أعراض؟</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">كم درجة حرارتك حــاليا؟</p>
                                    </div>
                                    <div class="quiz-answer subInfo">
                                        <div class="answer">
                                            <input type="radio" name="qst8" id="qst8op1" value="لا أدري، لا يمكنني قيـاس درجة الحرارة">
                                            <label for="qst8op1">لا أدري، لا يمكنني قيـاس درجة الحرارة</label>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst8" id="qst8op2" value="أقل من 35°م">
                                            <label for="qst8op2">أقل من 35°م</label>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst8" id="qst8op3" value="بين 35°م و 37°م">
                                            <label for="qst8op3">بين 35°م و 37°م</label>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst8" id="qst8op4" value="بين 38°م و 39°م">
                                            <label for="qst8op4">بين 38°م و 39°م</label>
                                        </div>
                                        <div class="answer">
                                            <input class="hasSubInfo" type="radio" name="qst8" id="qst8op5" value="أكثر من 39°م">
                                            <label for="qst8op5">أكثر من 39°م</label>
                                            <div class="subInfoDisplay">
                                                <div class="alert alert-info" role="alert">
                                                    لقد اشرت أن درجة الحرارة تفوق 39°م! في إنتظــار استشــارة طبية مستعجلة إشرب كمية معتبرة من المــاء خــاصة إذا كنت صغير السن
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST9 -->
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>كيف حـالك؟</h3>
                                        <h3>هل لديك أعراض؟</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">هل لديك سيلان في الأنف؟</p>
                                    </div>
                                    <div class="quiz-answer subqst">
                                        <div class="answer">
                                            <input class="yes" type="radio" name="qst9" id="qst9yes" value="نعم">
                                            <label for="qst9yes">نعم</label>
                                        </div>
                                        <!-- Sub question -->
                                        <div class="subshow hide">
                                            <div class="quiz-question">
                                            </div>
                                            <div class="quiz-answer">
                                                <div class="answer">
                                                    <input type="radio" name="qst9yes" id="qst9yesopt1" value="سيلان أخضر وخشن نوعـا مـا">
                                                    <label for="qst9yesopt1">سيلان أخضر وخشن نوعـا مـا</label>
                                                </div>
                                                <div class="answer">
                                                    <input type="radio" name="qst9yes" id="qst9yesopt2" value="سيلان شفـــاف يشبه المــاء">
                                                    <label for="qst9yesopt2">سيلان شفـــاف يشبه المــاء</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="answer">
                                            <input class="no" type="radio" name="qst9" id="qst9no" value="لا">
                                            <label for="qst9no">لا</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST10 -->
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>كيف حـالك؟</h3>
                                        <h3>هل لديك أعراض؟</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">هل تشعر بآلام حــاليا؟</p>
                                    </div>
                                    <div class="quiz-answer subqst">
                                        <div class="answer">
                                            <input class="yes" type="radio" name="qst10" id="qst10yes" value="نعم">
                                            <label for="qst10yes">نعم</label>
                                        </div>
                                        <!-- Sub question -->
                                        <div class="subshow hide">
                                            <div class="quiz-question">
                                                <p class="lead">في أي موضع من جسمك؟</p>
                                            </div>
                                            <div class="quiz-answer">
                                                <div class="answer">
                                                    <input type="radio" name="qst10yes" id="qst10yesopt1" value="الصدر">
                                                    <label for="qst10yesopt1">الصدر</label>
                                                </div>
                                                <div class="answer">
                                                    <input type="radio" name="qst10yes" id="qst10yesopt2" value="الرأس">
                                                    <label for="qst10yesopt2">الرأس</label>
                                                </div>
                                                <div class="answer">
                                                    <input type="radio" name="qst10yes" id="qst10yesopt3" value="عضلات الجسم">
                                                    <label for="qst10yesopt3">عضلات الجسم</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="answer">
                                            <input class="no" type="radio" name="qst10" id="qst10no" value="لا">
                                            <label for="qst10no">لا</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST11 -->
                                <!-- QST12 -->
                                <!-- QST13 -->
                                <!-- QST14 -->
                                <!-- QST16 -->
                                <!-- QST17 -->
                                <!-- QST18 -->
                                <!-- QST19 -->
                                <!-- QST20 -->
                                <!-- QST21 -->
                                <!-- QST22 -->
                                <!-- QST23 -->
                            </div>
                        </div>
                    </form>
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