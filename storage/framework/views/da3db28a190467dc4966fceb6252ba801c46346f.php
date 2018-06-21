<?php $__env->startSection('scripts'); ?>
##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
<script src="<?php echo e(asset('/ckeditor/ckeditor.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form enctype="multipart/form-data" method="post" action="<?php echo e(asset('home')); ?>">
<?php echo csrf_field(); ?>

    <div class="form-group" <?php echo e($errors->has('surname')?'has-error':''); ?>>
      <label for="disabledTextInput">Фамилия Имя Отчество</label>
      <input type="text" id="disabledTextInput" name="surname" class="form-control"  value="<?php echo e(isset($obj)?$obj->surname:old('surname')); ?>">
    <?php if($errors->has('surname')): ?>
    <span class = "help-block">
    <b><?php echo e($errors->first('surname')); ?></b>
    <?php endif; ?>
    </span>
    </div>
    <div class="form-group" <?php echo e($errors->has('nick')?'has-error':''); ?>>
      <label for="disabledTextInput">Ник</label>
      <input type="text" id="disabledTextInput" name="nick" class="form-control"  value="<?php echo e(isset($obj)?$obj->nick:old('nick')); ?>">
      <?php if($errors->has('nick')): ?>
    <span class = "help-block">
    <b><?php echo e($errors->first('nick')); ?></b>
    <?php endif; ?>
    </div>
    <div class="form-group" <?php echo e($errors->has('phone')?'has-error':''); ?>>
      <label for="disabledTextInput">Контактный телефон</label>
      <input type="text" id="disabledTextInput" name="phone" class="form-control" value="<?php echo e(isset($obj)?$obj->phone:old('phone')); ?>">
      <?php if($errors->has('phone')): ?>
    <span class = "help-block">
    <b><?php echo e($errors->first('phone')); ?></b>
    <?php endif; ?>
    </div>
    <div class="form-group" <?php echo e($errors->has('about')?'has-error':''); ?>>
      <label for="disabledTextInput">О себе</label>
      <textarea class="form-control ckeditor" name="about" id="editor1"><?php echo e(isset($obj)?$obj->about:old('about')); ?></textarea>
      <?php if($errors->has('about')): ?>
    <span class = "help-block">
    <b><?php echo e($errors->first('about')); ?></b>
    <?php endif; ?>
    </div>
    
    <div class="form-group">
      <label for="disabledSelect">Страна</label>
      <select id="disabledSelect" name="country" class="form-control">
      <option data-id="10414533690" value="+7">Россия</option><option data-id="10400654407" value="+61">Австралия</option><option data-id="10426428818" value="+43">Австрия</option><option data-id="10410450732" value="+994">Азербайджан</option><option data-id="10410522537" value="+355">Албания</option><option data-id="10419531540" value="+213">Алжир</option><option data-id="10400909101" value="+244">Ангола</option><option data-id="10395022134" value="+1264">Ангуилья</option><option data-id="10396157513" value="+376">Андорра</option><option data-id="10401935333" value="+1268">Антигуа и Барбуда</option><option data-id="10425952826" value="+599">Антильские острова</option><option data-id="10401434079" value="+54">Аргентина</option><option data-id="10417232037" value="+374">Армения</option><option data-id="10410310303" value="+93">Афганистан</option><option data-id="10407551720" value="+1242">Багамские острова</option><option data-id="10396352095" value="+880">Бангладеш</option><option data-id="10411706009" value="+1246">Барбадос</option><option data-id="10406995556" value="+973">Бахрейн</option><option selected="selected" data-id="10423319006" value="+375">Беларусь</option><option data-id="10394079228" value="+501">Белиз</option><option data-id="10408272261" value="+32">Бельгия</option><option data-id="10423428619" value="+229">Бенин</option><option data-id="10414686106" value="+1441">Бермуды</option><option data-id="10393631600" value="+359">Болгария</option><option data-id="10409174087" value="+591">Боливия</option><option data-id="10396139862" value="+387">Босния/Герцеговина</option><option data-id="10401213745" value="+267">Ботсвана</option><option data-id="10394346015" value="+55">Бразилия</option><option data-id="10409651721" value="+1284">Британские Виргинские о-ва</option><option data-id="10419484235" value="+673">Бруней</option><option data-id="10404060904" value="+226">Буркина Фасо</option><option data-id="10404374905" value="+257">Бурунди</option><option data-id="10404540364" value="+975">Бутан</option><option data-id="10412870819" value="+678">Вануату</option><option data-id="10411136417" value="+379">Ватикан</option><option data-id="10406170538" value="+44">Великобритания</option><option data-id="10409956165" value="+36">Венгрия</option><option data-id="10396486463" value="+58">Венесуэла</option><option data-id="10415852578" value="+84">Вьетнам</option><option data-id="10393450888" value="+241">Габон</option><option data-id="10417683703" value="+509">Гаити</option><option data-id="10403255122" value="+592">Гайана</option><option data-id="10399865285" value="+220">Гамбия</option><option data-id="10397676008" value="+233">Гана</option><option data-id="10414930207" value="+590">Гваделупа</option><option data-id="10419428643" value="+502">Гватемала</option><option data-id="10413226540" value="+224">Гвинея</option><option data-id="10403555674" value="+245">Гвинея-Бисау</option><option data-id="10397571399" value="+49">Германия</option><option data-id="10399224101" value="+441481">Гернси остров</option><option data-id="10406295560" value="+350">Гибралтар</option><option data-id="10399351736" value="+504">Гондурас</option><option data-id="10412717530" value="+852">Гонконг</option><option data-id="12850988277547" value="+970">Государство Палестина</option><option data-id="10395467357" value="+1473">Гренада</option><option data-id="10408186696" value="+299">Гренландия</option><option data-id="10410192803" value="+30">Греция</option><option data-id="10411801535" value="+995">Грузия</option><option data-id="10414151425" value="+243">ДР Конго</option><option data-id="10398024550" value="+45">Дания</option><option data-id="10392982119" value="+447">Джерси остров</option><option data-id="10423910652" value="+253">Джибути</option><option data-id="10392890835" value="+18">Доминиканская Республика</option><option data-id="10402537077" value="+20">Египет</option><option data-id="10422229795" value="+260">Замбия</option><option data-id="10405794288" value="+212">Западная Сахара</option><option data-id="10410213419" value="+263">Зимбабве</option><option data-id="10424542073" value="+972">Израиль</option><option data-id="10415489530" value="+91">Индия</option><option data-id="10394991378" value="+62">Индонезия</option><option data-id="10412777633" value="+962">Иордания</option><option data-id="10405044887" value="+964">Ирак</option><option data-id="10419405993" value="+98">Иран</option><option data-id="10421760139" value="+353">Ирландия</option><option data-id="10420187771" value="+354">Исландия</option><option data-id="10423450359" value="+34">Испания</option><option data-id="10414775922" value="+39">Италия</option><option data-id="10418754394" value="+967">Йемен</option><option data-id="10396069806" value="+238">Кабо-Верде</option><option data-id="10415971874" value="+7">Казахстан</option><option data-id="10410376034" value="+855">Камбоджа</option><option data-id="10417801476" value="+237">Камерун</option><option data-id="10393621238" value="+1">Канада</option><option data-id="10424568667" value="+974">Катар</option><option data-id="10421430373" value="+254">Кения</option><option data-id="10401168591" value="+357">Кипр</option><option data-id="10397251386" value="+86">Китай</option><option data-id="10398961528" value="+57">Колумбия</option><option data-id="10415000877" value="+506">Коста-Рика</option><option data-id="10397441630" value="+225">Кот-д'Ивуар</option><option data-id="10400805253" value="+53">Куба</option><option data-id="10425905274" value="+965">Кувейт</option><option data-id="10417619125" value="+682">Кука острова</option><option data-id="10405644775" value="+996">Кыргызстан</option><option data-id="10422182119" value="+856">Лаос</option><option data-id="10405172143" value="+371">Латвия</option><option data-id="10404932758" value="+266">Лесото</option><option data-id="10426378265" value="+231">Либерия</option><option data-id="10394492001" value="+961">Ливан</option><option data-id="10396193388" value="+218">Ливия</option><option data-id="10408982062" value="+370">Литва</option><option data-id="10402377389" value="+423">Лихтенштейн</option><option data-id="10417321877" value="+352">Люксембург</option><option data-id="10421455265" value="+230">Маврикий</option><option data-id="10402331337" value="+222">Мавритания</option><option data-id="10395008003" value="+261">Мадагаскар</option><option data-id="10403452946" value="+389">Македония</option><option data-id="10424318428" value="+60">Малайзия</option><option data-id="10392808561" value="+223">Мали</option><option data-id="10419625380" value="+960">Мальдивские острова</option><option data-id="10418580649" value="+356">Мальта</option><option data-id="10398888997" value="+212">Марокко</option><option data-id="10405114643" value="+52">Мексика</option><option data-id="10395900020" value="+258">Мозамбик</option><option data-id="10397135919" value="+373">Молдова</option><option data-id="10406156316" value="+377">Монако</option><option data-id="10400052977" value="+976">Монголия</option><option data-id="10397507309" value="+95">Мьянма (Бирма)</option><option data-id="10425274320" value="+441624">Мэн остров</option><option data-id="10398918582" value="+264">Намибия</option><option data-id="10395547483" value="+977">Непал</option><option data-id="10403897067" value="+227">Нигер</option><option data-id="10403906713" value="+234">Нигерия</option><option data-id="10416691196" value="+31">Нидерланды (Голландия)</option><option data-id="10415455264" value="+505">Никарагуа</option><option data-id="10416927951" value="+64">Новая Зеландия</option><option data-id="10417478473" value="+687">Новая Каледония</option><option data-id="10403907946" value="+47">Норвегия</option><option data-id="10407515868" value="+971">О.А.Э.</option><option data-id="10413735381" value="+968">Оман</option><option data-id="10407624473" value="+92">Пакистан</option><option data-id="32108942709" value="+441624">Палау</option><option data-id="10417127108" value="+507">Панама</option><option data-id="10414119671" value="+675">Папуа Новая Гвинея</option><option data-id="10397730315" value="+595">Парагвай</option><option data-id="10397453891" value="+51">Перу</option><option data-id="10420475109" value="+64">Питкэрн остров</option><option data-id="10414896014" value="+48">Польша</option><option data-id="10396879941" value="+351">Португалия</option><option data-id="10413603686" value="+1787">Пуэрто Рико</option><option data-id="10410395082" value="+242">Республика Конго</option><option data-id="10395017596" value="+262">Реюньон</option><option data-id="10421210322" value="+250">Руанда</option><option data-id="10416439221" value="+40">Румыния</option><option data-id="10395431810" value="+1">США</option><option data-id="10401272160" value="+503">Сальвадор</option><option data-id="10418117522" value="+685">Самоа</option><option data-id="10425587057" value="+378">Сан-Марино</option><option data-id="10402425385" value="+239">Сан-Томе и Принсипи</option><option data-id="10410580805" value="+966">Саудовская Аравия</option><option data-id="10408209383" value="+268">Свазиленд</option><option data-id="10411324250" value="+1758">Святая Люсия</option><option data-id="10394159876" value="+850">Северная Корея</option><option data-id="10392716690" value="+248">Сейшеллы</option><option data-id="10415402038" value="+508">Сен-Пьер и Микелон</option><option data-id="10399264429" value="+221">Сенегал</option><option data-id="10413542523" value="+1869">Сент Китс и Невис</option><option data-id="10397340738" value="+1784">Сент-Винсент и Гренадины</option><option data-id="10403797723" value="+381">Сербия</option><option data-id="10403882021" value="+65">Сингапур</option><option data-id="10421914141" value="+963">Сирия</option><option data-id="10394488739" value="+421">Словакия</option><option data-id="10412478477" value="+386">Словения</option><option data-id="10399243721" value="+677">Соломоновы острова</option><option data-id="10402270246" value="+252">Сомали</option><option data-id="10422456146" value="+249">Судан</option><option data-id="10399143993" value="+597">Суринам</option><option data-id="10419209718" value="+232">Сьерра-Леоне</option><option data-id="10426480621" value="+992">Таджикистан</option><option data-id="10420570186" value="+66">Таиланд</option><option data-id="10394605145" value="+886">Тайвань</option><option data-id="10412575230" value="+255">Танзания</option><option data-id="10396777362" value="+1649">Теркс и Кейкос</option><option data-id="10406981529" value="+228">Того</option><option data-id="10394734441" value="+690">Токелау острова</option><option data-id="10417023658" value="+676">Тонга</option><option data-id="10424065948" value="+1868">Тринидад и Тобаго</option><option data-id="10400207372" value="+688">Тувалу</option><option data-id="10399201022" value="+216">Тунис</option><option data-id="10396721959" value="+993">Туркменистан</option><option data-id="10406909768" value="+90">Турция</option><option data-id="10410627224" value="+256">Уганда</option><option data-id="10423529949" value="+998">Узбекистан</option><option data-id="10424076448" value="+380">Украина</option><option data-id="10395074682" value="+681">Уоллис и Футуна о-ва</option><option data-id="10426234429" value="+598">Уругвай</option><option data-id="10395058357" value="+298">Фарерские острова</option><option data-id="10423400059" value="+679">Фиджи</option><option data-id="10423933302" value="+63">Филиппины</option><option data-id="10405620585" value="+358">Финляндия</option><option data-id="10394185598" value="+33">Франция</option><option data-id="10395243227" value="+689">Французская Полинезия</option><option data-id="10421079332" value="+385">Хорватия</option><option data-id="10393424473" value="+235">Чад</option><option data-id="26287387136" value="+382">Черногория</option><option data-id="10395033214" value="+420">Чехия</option><option data-id="10397429545" value="+56">Чили</option><option data-id="10401982134" value="+41">Швейцария</option><option data-id="10393232409" value="+46">Швеция</option><option data-id="10400772860" value="+94">Шри-Ланка</option><option data-id="10408281200" value="+593">Эквадор</option><option data-id="10413994177" value="+240">Экваториальная Гвинея</option><option data-id="10422842223" value="+291">Эритрея</option><option data-id="10399393757" value="+372">Эстония</option><option data-id="10404948045" value="+251">Эфиопия</option><option data-id="10396767805" value="+27">ЮАР</option><option data-id="10409076784" value="+82">Южная Корея</option><option data-id="10415454380" value="+1876">Ямайка</option><option data-id="10404808625" value="+81">Япония</option></select>
      </select>
    </div>
    <div class="form-group">
      <label for="disabledSelect">Город</label>
      <input type="text" id="disabledTextInput" name="city" class="form-control" value="<?php echo e(isset($obj)?$obj->city:old('city')); ?>">          
    </div>
    <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" name="picture1" id="exampleInputFile">
    <?php if($errors->has('picture')): ?>
    <span class = "help-block">
    <b><?php echo e($errors->first('picture')); ?></b>
    <?php endif; ?>
    
  </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>