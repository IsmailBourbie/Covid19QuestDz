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
                    <p>بالشراكة مع الأطباء ومهندسي الإعلام الآلي</p>
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
                    <div class="col-md-6 col-md-push-6 text-figures">
                        <p class="lead">هل تعاني ( انت أو أي شخص تعرفه) من الحمى أو السعال؟ هل أنت قلق من أنك قد تكون مصابًا بعدوى فيروس كورونا؟ هل تحتاج الى نصيحة طبية؟ سنساعدك. يساعدك استبيان التقييم الذاتي هذا على تلخيص العناصر الرئيسية التي تستلزم زيارة الطبيب أو الإتصال بالمصالح المعنية .</p>
                    </div>
                    <div class="col-md-6 col-md-pull-6 text-center figures">
                        <div class="row">
                            <div class="col-xs-6 col-md-4 col-md-offset-2 fever">
                                <figure>
                                    <img src="images/fever.png" width="150px" height="150px" alt="fever">
                                    <figcaption>حمى</figcaption>
                                </figure>
                            </div>
                            <div class="col-xs-6 col-md-4 headstash">
                                <figure>
                                    <img src="images/headstash.png" width="150px" height="150px" alt="headstash">
                                    <figcaption>صداع</figcaption>
                                </figure>
                            </div>
                        </div>
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
                <p class="lead">تم تصميم الإستبيان من قبل أطباء بالشراكة مع مهندسي الإعلام الآلي .</p>
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
                    <form action="test.php" method="post">
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
                                                <div class="alert alert-danger" role="alert">
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
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>كيف حـالك؟</h3>
                                        <h3>هل لديك أعراض؟</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">هل لديك مشــاكل في التنفس؟</p>
                                    </div>
                                    <div class="quiz-answer subInfo">
                                        <div class="answer">
                                            <input class="hasSubInfo" type="radio" name="qst11" id="qst11op1" value="نعم انا جد متضــايق">
                                            <label for="qst11op1">نعم انا جد متضــايق</label>
                                            <div class="subInfoDisplay">
                                                <div class="alert alert-info" role="alert">
                                                    لقد اشرت أنك جد متضــايق! ولهذا حـالتك تبدو خطيرة، عليك الاتصــال بالإسعـاف <u>3010</u>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="answer">
                                            <input class="hasSubInfo" type="radio" name="qst11" id="qst11op2" value="نعم انـا متضـايق نوعا مــا">
                                            <label for="qst11op2">نعم انـا متضـايق نوعا مــا</label>
                                            <div class="subInfoDisplay">
                                                <div class="alert alert-info" role="alert">
                                                    لقد اشرت أنك متضـايق نوعـا ما! ولهذا عليك استشــارة طبيب العيــادة
                                                </div>
                                            </div>
                                        </div>
                                        <div class="answer">
                                            <input class="hasSubInfo" type="radio" name="qst11" id="qst11op3" value="أنا أتنفس بشكل غير معتــاد">
                                            <label for="qst11op3">أنا أتنفس بشكل غير معتــاد</label>
                                            <div class="subInfoDisplay">
                                                <div class="alert alert-info" role="alert">
                                                    إذا كنت تعالج بالفعل من مرض تنفسي مزمن ، فلا تتردد في الاتصال بطبيبك للسؤال عما إذا كان يجب عليك تغيير العلاج المعتاد.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst11" id="qst11op4" value="أنا أتنفس بشكل عــادي">
                                            <label for="qst11op4">أنا أتنفس بشكل عــادي</label>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst11" id="qst11op5" value="بالطبع انـا أتنفس جيدا">
                                            <label for="qst11op5">بالطبع انـا أتنفس جيدا</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST12 -->
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>معلومـــات شخصية</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">هل فقدت حاسَّة الشم مؤخرا؟!</p>
                                    </div>
                                    <div class="quiz-answer subInfo">
                                        <div class="answer">
                                            <input class="hasSubInfo" type="radio" name="qst12" id="qst12yes" value="نعم، بالضبط بعد ظهور الحمى">
                                            <label for="qst1yes">نعم، بالضبط بعد ظهور الحمى</label>
                                            <div class="subInfoDisplay">
                                                <div class="alert alert-info" role="alert">
                                                    لقد أشرت انك فقدت حاسة الشم ، هذا ليس خطيرا و لكن هو مؤشر للاصابة بفيروس كوفيد 19 .
                                                    يجب إخبار الطبيب بهذا عند طلبك إستشارة .
                                                </div>
                                                <div class="alert alert-danger" role="alert">
                                                    في هذه الحالة لا تتناول أدوية مستنشقة خاصة الكورتيكويد حتى عن طريق البلع ، و غرغة الأنف غير منصوح بها لتفادي انتشار الفيروس.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst12" id="qst12no" value="لا">
                                            <label for="qst1no">لا</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST13 -->
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>معلومـــات شخصية</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">هل فقدت حاسَّة التذوق مؤخرا؟!</p>
                                    </div>
                                    <div class="quiz-answer subInfo">
                                        <div class="answer">
                                            <input class="hasSubInfo" type="radio" name="qst13" id="qst13yes" value="نعم، بالضبط بعد ظهور الحمى">
                                            <label for="qst1yes">نعم، بالضبط بعد ظهور الحمى</label>
                                            <div class="subInfoDisplay">
                                                <div class="alert alert-info" role="alert">
                                                    لقد أشرت انك فقدت حاسة التذوق ، هذا ليس خطيرا و لكن هو مؤشر للاصابة بفيروس كوفيد 19 .
                                                    يجب إخبار الطبيب بهذا عند طلبك إستشارة .
                                                </div>
                                                <div class="alert alert-danger" role="alert">
                                                    في هذه الحالة لا تتناول أدوية مستنشقة خاصة الكورتيكويد حتى عن طريق البلع ، و غرغة الأنف غير منصوح بها لتفادي انتشار الفيروس.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst13" id="qst13no" value="لا">
                                            <label for="qst1no">لا</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST14 -->
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>كيف حـالك؟</h3>
                                        <h3>هل لديك أعراض؟</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">هل لديك أعراض أخرى حاليا ؟</p>
                                    </div>
                                    <div class="quiz-answer subInfo">
                                        <div class="answer">
                                            <input type="checkbox" name="qst14[]" id="qst14op1" value="آلام في الحلق عند البلع">
                                            <label for="qst14op1">آلام في الحلق عند البلع</label>
                                        </div>
                                        <div class="answer">
                                            <input type="checkbox" name="qst14[]" id="qst14op2" value="تسارع نبضات القلب">
                                            <label for="qst14op2">تسارع نبضات القلب</label>
                                        </div>
                                        <div class="answer">
                                            <input type="checkbox" name="qst14[]" id="qst14op3" value="غثيان أو تقيء">
                                            <label for="qst14op3">غثيان أو تقيء</label>
                                        </div>
                                        <div class="answer">
                                            <input type="checkbox" name="qst14[]" id="qst14op4" value="إسهال">
                                            <label for="qst14op4">إسهال</label>
                                        </div>
                                        <div class="answer">
                                            <input type="checkbox" name="qst14[]" id="qst14op5" value="آلام في البطن">
                                            <label for="qst14op5">آلام في البطن</label>
                                        </div>
                                        <div class="answer">
                                            <input type="checkbox" name="qst14[]" id="qst14op6" value="فقدان الشهية">
                                            <label for="qst14op6">فقدان الشهية</label>
                                        </div>
                                        <div class="answer">
                                            <input type="checkbox" name="qst14[]" id="qst14op7" value="تعب شديد">
                                            <label for="qst14op7">تعب شديد</label>
                                        </div>
                                        <div class="answer">
                                            <input class="hasSubInfo" type="checkbox" name="qst14[]" id="qst14op8" value="هذيان">
                                            <label for="qst14op8">هذيان</label>
                                            <div class="subInfoDisplay">
                                                <div class="alert alert-info" role="alert">
                                                    لقد أشرت بأنك في حالة هذيان، ولهذا فانت تحتاج إلى استشارة طبية عاجلة.
                                                    إتصل بالرقم <u>3010</u>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="answer">
                                            <input class="hasSubInfo" type="checkbox" name="qst14[]" id="qst14op9" value="توعك (وعكة صحية)">
                                            <label for="qst14op9">توعك (وعكة صحية)</label>
                                            <div class="subInfoDisplay">
                                                <div class="alert alert-info" role="alert">
                                                    لقد أشرت إلى وجود وعكة صحية، ولهذا فانت تحتاج إلى استشارة طبية عاجلة.
                                                    إتصل بالرقم <u>3010</u>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST15 -->
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>هل لديك أمراض مزمنة؟</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">هل تعاني من مرض تنفسي مزمن؟</p>
                                    </div>
                                    <div class="quiz-answer subqst">
                                        <div class="answer">
                                            <input class="yes" type="radio" name="qst15" id="qst15yes" value="نعم">
                                            <label for="qst15yes">نعم</label>
                                        </div>
                                        <!-- Sub question -->
                                        <div class="subshow hide">
                                            <div class="quiz-question">
                                                <p class="lead">إذا كانت الإجابة بنعم، مـا هي الأمراض؟</p>
                                            </div>
                                            <div class="quiz-answer">
                                                <div class="answer">
                                                    <input type="checkbox" name="qst15yes[]" id="qst15yesopt1" value="مرض الانسداد الرئوي المزمن شديد  يحتاج  إلى الأكسجين يوميا (BPCO)">
                                                    <label for="qst15yesopt1">مرض الانسداد الرئوي المزمن شديد يحتاج إلى الأكسجين يوميا (BPCO).</label>
                                                </div>
                                                <div class="answer">
                                                    <input type="checkbox" name="qst15yes[]" id="qst15yesopt2" value=" مرض الانسداد الرئوي المزمن خفيف إلى معتدل (BPCO).">
                                                    <label for="qst15yesopt2"> مرض الانسداد الرئوي المزمن خفيف إلى معتدل (BPCO).</label>
                                                </div>
                                                <div class="answer">
                                                    <input type="checkbox" name="qst15yes[]" id="qst15yesopt3" value="الربو">
                                                    <label for="qst15yesopt3">الربو</label>
                                                </div>
                                                <div class="answer">
                                                    <input type="checkbox" name="qst15yes[]" id="qst15yesopt4" value="سرطان الرئة">
                                                    <label for="qst15yesopt4">سرطان الرئة</label>
                                                </div>
                                                <div class="answer">
                                                    <input type="checkbox" name="qst15yes[]" id="qst15yesopt5" value="تمدد القصبات الهوائية">
                                                    <label for="qst15yesopt5">تمدد القصبات الهوائية</label>
                                                </div>
                                                <div class="answer">
                                                    <input type="checkbox" name="qst15yes[]" id="qst15yesopt6" value="تَليّف رئوي (fibrose)">
                                                    <label for="qst15yesopt6">تَليّف رئوي (fibrose)</label>
                                                </div>
                                                <div class="answer">
                                                    <input type="checkbox" name="qst15yes[]" id="qst15yesopt7" value="مرض الساركويد (sarcoïdose)">
                                                    <label for="qst15yesopt7">مرض الساركويد (sarcoïdose)</label>
                                                </div>
                                                <div class="answer">
                                                    <input type="checkbox" name="qst15yes[]" id="qst15yesopt8" value="زرع الرئة">
                                                    <label for="qst15yesopt8">زرع الرئة</label>
                                                </div>
                                                <div class="answer">
                                                    <input type="checkbox" name="qst15yes[]" id="qst15yesopt9" value=" التَليّف الكيسي الرئوي (mucoviscidose)">
                                                    <label for="qst15yesopt9"> التَليّف الكيسي الرئوي (mucoviscidose)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="answer">
                                            <input class="no" type="radio" name="qst15" id="qst15no" value="لا">
                                            <label for="qst15no">لا</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST16 -->
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>هل لديك أمراض مزمنة؟</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">إذا كنت تعاني من مرض تنفسي مزمن ، هل اضطررت إلى زيادة في جرعات دواءك (دواء مستنشق أو أكسيجين مثلا)</p>
                                    </div>
                                    <div class="quiz-answer subInfo">
                                        <div class="answer">
                                            <input class="hasSubInfo" type="radio" name="qst16" id="qst16yes" value="نعم">
                                            <label for="qst1yes">نعم</label>
                                            <div class="subInfoDisplay">
                                                <div class="alert alert-info" role="alert">
                                                    إذ لم تتحسن حالتك بعد زيادة جرعات الدواء،
                                                    عليك باستشارة الطبيب في أقرب وقت.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst16" id="qst16no" value="لا">
                                            <label for="qst1no">لا</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST17 -->
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>هل لديك أمراض مزمنة؟</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">هل تتناول حاليا دواء آخر لعلاج مرض مزمن آخر؟</p>
                                    </div>
                                    <div class="quiz-answer subqst">
                                        <div class="answer">
                                            <input class="yes" type="radio" name="qst17" id="qst17yes" value="نعم">
                                            <label for="qst17yes">نعم</label>
                                        </div>
                                        <!-- Sub question -->
                                        <div class="subshow hide">
                                            <div class="quiz-question">
                                                <p class="lead">إذا كانت الإجابة بنعم، مـا هي الأمراض؟</p>
                                            </div>
                                            <div class="quiz-answer subInfo">
                                                <div class="answer">
                                                    <input type="checkbox" name="qst17yes[]" id="qst17yesopt1" value="فشل القلب احتشاء عضلة القلب (IDM) ">
                                                    <label for="qst17yesopt1">فشل القلب احتشاء عضلة القلب (IDM) </label>
                                                </div>
                                                <div class="answer">
                                                    <input type="checkbox" name="qst17yes[]" id="qst17yesopt2" value="قصور كلوي يحتاج إلى تصفية">
                                                    <label for="qst17yesopt2">قصور كلوي يحتاج إلى تصفية</label>
                                                </div>
                                                <div class="answer">
                                                    <input class="hasSubInfo" type="checkbox" name="qst17yes[]" id="qst17yesopt3" value="مرض السكري">
                                                    <label for="qst17yesopt3">مرض السكري</label>
                                                    <div class="subInfoDisplay">
                                                        <div class="alert alert-info" role="alert">
                                                            مرض السكرى يمكن أن ينقص مناعتك في حالة الأصابة بالكوفيد 19.
                                                            يجب عليك استشارة طبيبك.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="answer">
                                                    <input class="hasSubInfo" type="checkbox" name="qst17yes[]" id="qst17yesopt4" value="إرتفاع ضغط الدم">
                                                    <label for="qst17yesopt4">إرتفاع ضغط الدم</label>
                                                    <div class="subInfoDisplay">
                                                        <div class="alert alert-info" role="alert">
                                                            إذا كان من بين أدويتك لارتفاع الضغط دواء مدر للبول ولديك حمى عليك بشرب كمية من الماء،
                                                            في بعض الحالات يمكن إنقاص الجرعة أو توقيفه مؤقتا خاصة إذا لاحظت إنخفاض حاد في الضغط.
                                                            لكن يجب عليك دائما استشارة طبيبك الخاص.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="answer">
                                                    <input type="checkbox" name="qst17yes[]" id="qst17yesopt5" value="سرطان (يعالج بالكيماوي أو بالأشعة)">
                                                    <label for="qst17yesopt5">سرطان (يعالج بالكيماوي أو بالأشعة)</label>
                                                </div>
                                                <div class="answer">
                                                    <input class="hasSubInfo" type="checkbox" name="qst17yes[]" id="qst17yesopt6" value="مرض في الكبد (التهاب أو تلف الخلايا)">
                                                    <label for="qst17yesopt6">مرض في الكبد (التهاب أو تلف الخلايا)</label>
                                                    <div class="subInfoDisplay">
                                                        <div class="alert alert-info" role="alert">لقد أشرت لوجود مرض في الكبد.
                                                            إعلم أن جرعة عالية من دواء البراسيتامول يمكن أن تكون سامة و خطيرة على كبدك.
                                                            استشر طبيبك قبل استعماله</div>
                                                    </div>
                                                </div>
                                                <div class="answer">
                                                    <input type="checkbox" name="qst17yes[]" id="qst17yesopt7" value="مرض نقص المناعة المكتسب (غير متحكم فيه = عدد خلايا CD4 أقل من 200)">
                                                    <label for="qst17yesopt7">مرض نقص المناعة المكتسب (غير متحكم فيه = عدد خلايا CD4 أقل من 200)</label>
                                                </div>
                                                <div class="answer">
                                                    <input type="checkbox" name="qst17yes[]" id="qst17yesopt8" value="زرع الأعضاء ">
                                                    <label for="qst17yesopt8">زرع الأعضاء </label>
                                                </div>
                                                <div class="answer">
                                                    <input type="checkbox" name="qst17yes[]" id="qst17yesopt9" value="سمنة حادة (مؤشر كتلة الجسم يفوق 40 كغ/م2)">
                                                    <label for="qst17yesopt9">سمنة حادة (مؤشر كتلة الجسم يفوق 40 كغ/م2)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="answer">
                                            <input class="no" type="radio" name="qst17" id="qst17no" value="لا">
                                            <label for="qst17no">لا</label>
                                        </div>
                                        <div class="answer">
                                            <input class="no" type="radio" name="qst17" id="qst17idk" value="لا أدري">
                                            <label for="qst17idk">لا أدري</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST18 -->
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>هل لديك أمراض مزمنة؟</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">هل تلقيت تطعيم ضد الانفلونزا الموسمية لهذه السنة؟</p>
                                    </div>
                                    <div class="quiz-answer">
                                        <div class="answer">
                                            <input type="radio" name="qst18" id="qst18yes" value="نعم">
                                            <label for="qst18yes">نعم</label>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst18" id="qst18no" value="لا">
                                            <label for="qst18no">لا</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST19 -->
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>ماهي الأدوية التي تتناولها حاليا؟</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">هل تناولت مضادات حيوية عند ظهور الاعراض السابقة؟</p>
                                    </div>
                                    <div class="quiz-answer subqst">
                                        <div class="answer">
                                            <input class="yes" type="radio" name="qst19" id="qst19yes" value="نعم">
                                            <label for="qst19yes">نعم</label>
                                        </div>
                                        <!-- Sub question -->
                                        <div class="subshow hide">
                                            <div class="quiz-question">
                                            </div>
                                            <div class="quiz-answer subInfo">
                                                <div class="answer">
                                                    <label id="forInputText" for="qst19yessubinput">إذا كانت الإجابة بنعم ، فما اسمها؟</label>
                                                    <input type="text" name="qst19yes" id="qst19yessubinput">
                                                </div>
                                                <div class="quiz-question sub-quiz-question">
                                                    <p class="lead">منذ متى؟</p>
                                                </div>
                                                <div class="answer">
                                                    <input type="radio" name="qst19yes" id="qst19yesopt1" value="أقل من 3 أيــام">
                                                    <label for="qst19yesopt1">أقل من 3 أيــام</label>
                                                </div>
                                                <div class="answer">
                                                    <input class="hasSubInfo" type="radio" name="qst19yes" id="qst19yesopt2" value="أكثر من 3 أيــام">
                                                    <label for="qst19yesopt2">أكثر من 3 أيــام</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="answer">
                                            <input class="no" type="radio" name="qst19" id="qst19no" value="لا">
                                            <label for="qst19no">لا</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST20 -->
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>ماهي الأدوية التي تتناولها حاليا؟</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">هل تناولت مؤخرا مضادات الالتهاب (إيبوبروفين مثلا..)؟</p>
                                    </div>
                                    <div class="quiz-answer subInfo">
                                        <div class="answer">
                                            <input class="hasSubInfo" type="radio" name="qst20" id="qst20yes" value="نعم">
                                            <label for="qst1yes">نعم</label>
                                            <div class="subInfoDisplay">
                                                <div class="alert alert-info" role="alert">
                                                    إن استعمال مضادات الالتهاب (إيبوبروفين مثلا) يضاعف من خطورة الإصابة بفيروس كوفيد 19.
                                                    للتخفيف من بعض الآلام أو الأوجاع هذه الأدوية ممنوعة لكن يمكنك استعمال دواء البراسيتامول.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst20" id="qst20no" value="لا">
                                            <label for="qst1no">لا</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST21 -->
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>ماهي الأدوية التي تتناولها حاليا؟</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">هل تناولت دواء الكورتيزون؟</p>
                                    </div>
                                    <div class="quiz-answer subInfo">
                                        <div class="answer">
                                            <input class="hasSubInfo" type="radio" name="qst21" id="qst21yes" value="نعم">
                                            <label for="qst1yes">نعم</label>
                                            <div class="subInfoDisplay">
                                                <div class="alert alert-info" role="alert">
                                                    إن استعمال دواء الكورتيزون للضرورة يحتاج إلى مراقبة طبية مستمرة.
                                                    إن أدوية الكورتيكويد أو تلك التي تنقص المناعة والمستعملة لعلاج امراض مزمنة، لا يمكن إيقافها في انتظار استشارة الطبيب الخاص.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst21" id="qst21no" value="لا">
                                            <label for="qst1no">لا</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST22 -->
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>ماهي الأدوية التي تتناولها حاليا؟</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">هل تناولت دواء البراسيتامول مؤخرا؟</p>
                                    </div>
                                    <div class="quiz-answer subInfo">
                                        <div class="answer">
                                            <input class="hasSubInfo" type="radio" name="qst22" id="qst22yes" value="نعم">
                                            <label for="qst1yes">نعم</label>
                                            <div class="subInfoDisplay">
                                                <div class="alert alert-info" role="alert">
                                                    دواء البراسيتامول يساعد على خفض درجة الحرارة و قد يخفي بعض الأعراض!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst22" id="qst22no" value="لا">
                                            <label for="qst1no">لا</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST23 -->
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>ماهي الأدوية التي تتناولها حاليا؟</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">هل تناولت دواء الأسبيرين مؤخرا؟</p>
                                    </div>
                                    <div class="quiz-answer">
                                        <div class="answer">
                                            <input type="radio" name="qst23" id="qst23yes" value="نعم">
                                            <label for="qst1yes">نعم</label>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst23" id="qst23no" value="لا">
                                            <label for="qst1no">لا</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST24 -->
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>قياساتك؟</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">مــا معدل تنفسك؟</p>
                                        <p class="tips">يمكنك حساب ذلك بتصفح موقع <a href="http://www.automesure.com/">automesure.com</a></p>
                                    </div>
                                    <div class="quiz-answer subInfo">
                                        <div class="answer">
                                            <input type="radio" name="qst24" id="qst24op1" value="أقل من 20">
                                            <label for="qst24op1">أقل من 20</label>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst24" id="qst24op2" value="بين 20 و 22">
                                            <label for="qst24op2">بين 20 و 22</label>
                                        </div>
                                        <div class="answer">
                                            <input class="hasSubInfo" type="radio" name="qst24" id="qst24op3" value="أكثر من 22">
                                            <label for="qst24op3">أكثر من 22</label>
                                            <div class="subInfoDisplay">
                                                <div class="alert alert-info" role="alert">
                                                    لقد أشرت أن معدل التنفس يفوق 22، يجب استشارة الطبيب عاجلا!.
                                                </div>
                                                لدقة أكبر يمكنك كتابة معدل التنفس هنا : (عدد الأنفاس في الدقيقة)<br>
                                                <input type="text" name="qst24op3sub">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST25 -->
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>قياساتك؟</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">نسبة الأكسجين في الدم (إذا كان لديك جهاز لقياس ذلك) يستعمله عادة من يعانون من فشل تنفسي يلزم الاكسجين في المنزل،
                                            <br>
                                            عليك بوضع آخر نتيجة لديك:</p>
                                    </div>
                                    <div class="quiz-answer subInfo">
                                        <div class="answer">
                                            <input type="radio" name="qst25" id="qst25op1" value="بين 100 و 95 %">
                                            <label for="qst25op1">بين 100 و 95 %</label>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst25" id="qst25op2" value="بين 94 و 90 %">
                                            <label for="qst25op2">بين 94 و 90 %</label>
                                        </div>
                                        <div class="answer">
                                            <input class="hasSubInfo" type="radio" name="qst25" id="qst25op3" value="أقل من 90 %">
                                            <label for="qst25op3">أقل من 90 %</label>
                                            <div class="subInfoDisplay">
                                                <div class="alert alert-info" role="alert">
                                                    لقد أشرت إلى أن نسبة الاكسجين أقل من 90 % و هذه نسبة ضعيفة نوعا ما، عليك باستشارة الطبيب عاجلا!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- QST26 -->
                                <div class="item">
                                    <div class="quiz-title text-center">
                                        <h3>قياساتك؟</h3>
                                    </div>
                                    <div class="quiz-question">
                                        <p class="lead">ضغط الدم:<br>
                                            إذا كان لديك جهاز قياس ضغط الدم سجل هنا معدل 3 قيايسات متتالية مع فاصل زمني مدته دقيقة بين كل قياس (استعمل ضغط الدم الإنقباضي PAS)
                                        </p>
                                    </div>
                                    <div class="quiz-answer subInfo">
                                        <div class="answer">
                                            <input class="hasSubInfo" type="radio" name="qst26" id="qst26op1" value="أقل من 80">
                                            <label for="qst26op1">أقل من 80</label>
                                            <div class="subInfoDisplay">
                                                <div class="alert alert-info" role="alert">
                                                    لقد أشرت أن ضغط الدم أقل من 80 وهذا منخفض جدا، عليك باستشارة طبيب عاجلا!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="answer">
                                            <input class="hasSubInfo" type="radio" name="qst26" id="qst26op2" value="بين 80 و 90">
                                            <label for="qst26op2">بين 80 و 90</label>
                                            <div class="subInfoDisplay">
                                                <div class="alert alert-info" role="alert">
                                                    لقد أشرت ان ضغط الدم بين 80 و 90 وهذا منخفض قليلا، عليك باستشارة طبيب
                                                </div>
                                            </div>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst26" id="qst26op3" value="بين 91 و 100">
                                            <label for="qst26op3">بين 91 و 100</label>
                                        </div>
                                        <div class="answer">
                                            <input type="radio" name="qst26" id="qst26op4" value="أكثر من 101">
                                            <label for="qst26op4">أكثر من 101</label>
                                        </div>
                                    </div>
                                </div>
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