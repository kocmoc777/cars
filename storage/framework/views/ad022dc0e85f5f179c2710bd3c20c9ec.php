<?php $__env->startSection('content'); ?>





    <header class="header">
        <div class="wrapper">
            <img class="header-image" src="<?php echo e(asset('image/slider.png')); ?>" alt="">
            <div class="container-header">
                <h4 class="header-title">Орендуй мрію</h4>
                <div class="header-desc"><h2>Ми зрадістю зустрінемо вас!</h2></div>
            </div>
        </div>
    </header>
    <section class="categories"></section>
    <div class="title-about container"><h3><br><strong>Ексклюзивні варіанти</strong></h3></div>
    <div class="card-wrappered container">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('catalog',$category->hash)); ?>" class="vehicle-card">

                <img src="<?php echo e($category->icon); ?>" alt="<?php echo e($category->title); ?>">

                <div class="card-details">
                    <?php echo e($category->title); ?>


                </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>






    <div class="about ">
        <div class="container">
            <div class="title-about"><h3><br><strong>Про нас</strong></h3></div>
            <div class="subtitle-about"><h6> Познайомтеся з нашим флотом!</h6></div>
            <div class="text-about">
                <p>
                    Прокат спортивних та розкішних автомобілів SexyCars зосереджений на одній меті, а
                    саме на вашому повному задоволенні, коли ви орендуєте у нас спортивний автомобіль. Ми гарантуємо
                    вам
                    максимальну насолоду і комфорт при використанні спортивних автомобілів в нашій прокатній
                    компанії. Ми
                    також прагнемо, щоб це задоволення не було занадто дорогим.
                </p>

                <p>
                    Ми надаємо напрокат наші спортивні автомобілі по всій Україні і найчастіше в містах: Луцьк,
                    Рівне,
                    Львів, Київ без застави та за вигідною ціною. Ми надаємо наші спортивні та розкішні автомобілі в
                    оренду подобово або на більш тривалий період часу, тобто довгостроково. Вибираючи прокат в
                    містах
                    <strong>Луцьк, Рівне, Львів, Київ, Одеса, Вінниця</strong>
                    ви можете розраховувати на професійне обслуговування від нас.
                </p>
            </div>
            <div class="about-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5431854.280136174!2d31.182437349999997!3d48.33606545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d1d9c154700e8f%3A0x1068488f64010!2z0KPQutGA0LDRl9C90LA!5e0!3m2!1suk!2sua!4v1730077769794!5m2!1suk!2sua"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="text-about-down">
                <p><br> Спорткари - це категорія автомобілів, в яких більший акцент робиться на динаміці руху, ніж
                    на
                    практичності. Водночас, це цивільні автомобілі, які повинні відповідати всім технічним нормам
                    для їзди
                    по дорогах загального користування.
                </p>
                <p>Вони можуть бути:</p>


                <p>
                    <strong>Автомобілі, модифіковані з класичних кузовів на спортивні (наприклад, в результаті
                        тюнінгу)</strong>

                </p>
                <div class="container">
                    <img class="container" src="<?php echo e(asset('image/Toyota Corolla.png')); ?>" alt="">

                    <p><br><strong>Типові спортивні автомобілі, створені для задоволення від водіння</strong></p>

                    <img class="container" src="<?php echo e(asset('image/Lamborghini Huracan.png')); ?>" alt="">

                    <p><br><strong> Екстремальні автомобілі, призначені для високопродуктивного водіння,
                            перегонів</strong>
                    </p>
                    <img class="container" src="<?php echo e(asset('image/Aston Martin.png')); ?>" alt="dfgfs">

                    <p><br><strong> Тож перед тим, як вибрати спортивні автомобілі напрокат або купити, з'ясуйте, на
                            якому з
                            них варто зупинити свій вибір. Ми ж забезпечимо належну підготовку та професійне
                            обслуговування:

                        </strong></p>

                    <div class="wrap">
                        <ul class="about-list">
                            <li>
                                <sapn><strong>Привабливі ціни на оренду</strong>

                                </sapn>
                            </li>
                            <li>
                                <sapn><strong>Можлива доставка автомобіля в Кракові</strong>
                                </sapn>
                            </li>
                            <li>
                                <sapn><strong>Задоволення від оренди гарантовано</strong>

                                </sapn>
                            </li>
                            <li>
                                <sapn><strong>Короткострокова та довгострокова оренда</strong>

                                </sapn>
                            </li>
                            <li>
                                <sapn><strong>Більшість автомобілів без застави</strong>

                                </sapn>
                            </li>
                            <li>
                                <sapn><strong>Найкраща прокатна компанія у Кракові</strong>

                                </sapn>
                            </li>
                            <li>
                                <sapn><strong>У нас є красиві та швидкі спортивні автомобілі</strong>

                                </sapn>
                            </li>
                            <li>
                                <sapn><strong>Орендуйте наші автомобілі на весілля</strong>

                                </sapn>
                            </li>
                        </ul>
                        <div class="tel-wrap container  "><a class="tel-nam" href="#">Подзвони нам!</a></div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php $__env->stopSection(); ?>


    </body>
    </html>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH L:\project\car_open_server\SexCars\resources\views/pages/home.blade.php ENDPATH**/ ?>