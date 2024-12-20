<?php $__env->startSection('content'); ?>

    <div class="breadcrumbs container">
        <ul class="breadcrumbs__list">
            <li class="breadcrumbs__item">
                <a href="#" class="breadcrumbs__link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         viewBox="0 0 16 16">
                        <path d="M8 6.982C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.309 8 6.982"/>
                        <path
                            d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.707L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.646a.5.5 0 0 0 .708-.707L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                    </svg>
                    <a href="<?php echo e(asset('/')); ?>">Головна</a>

                </a>
            </li>
            <li class="breadcrumbs__item">
                <span class="breadcrumbs__link"><?php echo e($title); ?></span>
            </li>
        </ul>
    </div>















































    <div class="cont-filter container ">
        <div class="custom-dropdown">
            <button class="custom-dropdown-button">Ціна за день </button>
            <div class="custom-dropdown-content">
                <h3>Ціна за день</h3>
                <label><input type="checkbox"> 0 - $50</label>
                <label><input type="checkbox"> 50 - $100</label>
                <label><input type="checkbox"> 100 - $200</label>
                <label><input type="checkbox"> $200 +</label>
            </div>
        </div>

        <div class="custom-dropdown">
            <button class="custom-dropdown-button">Клас авто</button>
            <div class="custom-dropdown-content">
                <h3>Клас авто</h3>
                <label>
                    <input type="checkbox"> Економ
                    <span class="icon"><i class="fas fa-car"></i></span>
                </label>
                <label>
                    <input type="checkbox"> Середній
                    <span class="icon"><i class="fas fa-car-side"></i></span>
                </label>
                <label>
                    <input type="checkbox"> Бізнес
                    <span class="icon"><i class="fas fa-car-alt"></i></span>
                </label>
                <label>
                    <input type="checkbox"> Позашляховик
                    <span class="icon"><i class="fas fa-truck-monster"></i></span>
                </label>
                <label>
                    <input type="checkbox"> Мінівен
                    <span class="icon"><i class="fas fa-shuttle-van"></i></span>
                </label>
                <label>
                    <input type="checkbox"> Преміум
                    <span class="icon"><i class="fas fa-star"></i></span>
                </label>
                <label>
                    <input type="checkbox"> Електромобіль
                    <span class="icon"><i class="fas fa-bolt"></i></span>
                </label>
            </div>
        </div>

        <div class="custom-dropdown">
            <button class="custom-dropdown-button">Тип палива</button>
            <div class="custom-dropdown-content">
                <h3>Тип палива</h3>
                <label>
                    <input type="checkbox"> Бензин
                    <span class="icon">⛽</span>
                </label>
                <label>
                    <input type="checkbox"> Дизель
                    <span class="icon">🅓</span>
                </label>
                <label>
                    <input type="checkbox"> Електро
                    <span class="icon">⚡</span>
                </label>
                <label>
                    <input type="checkbox"> Гібрид
                    <span class="icon">🌱</span>
                </label>
            </div>
        </div>

        <div class="custom-dropdown">
            <button class="custom-dropdown-button">Кількість місць</button>
            <div class="custom-dropdown-content">
                <h3>Кількість місць</h3>
                <label>
                    <input type="checkbox"> 2
                    <span class="icon"><i class="fas fa-chair"></i></span>
                </label>
                <label>
                    <input type="checkbox"> 3
                    <span class="icon"><i class="fas fa-chair"></i></span>
                </label>
                <label>
                    <input type="checkbox"> 4
                    <span class="icon"><i class="fas fa-chair"></i></span>
                </label>
                <label>
                    <input type="checkbox"> 5
                    <span class="icon"><i class="fas fa-chair"></i></span>
                </label>
                <label>
                    <input type="checkbox"> 6
                    <span class="icon"><i class="fas fa-chair"></i></span>
                </label>
                <label>
                    <input type="checkbox"> 7
                    <span class="icon"><i class="fas fa-chair"></i></span>
                </label>
                <label>
                    <input type="checkbox"> 8
                    <span class="icon"><i class="fas fa-chair"></i></span>
                </label>
                <label>
                    <input type="checkbox"> 9
                    <span class="icon"><i class="fas fa-chair"></i></span>
                </label>
            </div>
        </div>
        <div class="custom-dropdown ">
            <button class="custom-dropdown-button">Марка</button>
            <div class="custom-dropdown-content">
                <h3>Марка</h3>
                <label>
                    <input type="checkbox"> Mercedes
                    <span class="icon"><img src="<?php echo e(asset('image/mercedes.svg')); ?>" alt=""></span>
                </label>
                <label>
                    <input type="checkbox"> Citroen
                    <span class="icon"><img src="<?php echo e(asset('image/citroen.svg')); ?>" alt=""></span>
                </label>
                <label>
                    <input type="checkbox"> Fiat
                    <span class="icon"><img src="<?php echo e(asset('image/fiat.svg')); ?>" alt=""></span>
                </label>
                <label>
                    <input type="checkbox"> Ford
                    <span class="icon"><img src="<?php echo e(asset('image/ford.svg')); ?>" alt=""></span>
                </label>
                <label>
                    <input type="checkbox"> Honda
                    <span class="icon"><img src="<?php echo e(asset('image/honda.svg')); ?>" alt=""></span>
                </label>
                <label>
                    <input type="checkbox"> Hyundai
                    <span class="icon"><img src="<?php echo e(asset('image/hyundai.svg')); ?>" alt=""></span>
                </label>
                <label>
                    <input type="checkbox"> Land Rover
                    <span class="icon"><img src="<?php echo e(asset('image/landrover.svg')); ?>" alt=""></span>
                </label>
                <label>
                    <input type="checkbox"> Lexus
                    <span class="icon"><img src="<?php echo e(asset('image/lexus.svg')); ?>" alt=""></span>
                </label>
                <label>
                    <input type="checkbox"> Mazda
                    <span class="icon"><img src="<?php echo e(asset('image/mazda.svg')); ?>" alt=""></span>
                </label>
                <label>
                    <input type="checkbox"> Audi
                    <span class="icon"><img src="<?php echo e(asset('image/audi.svg')); ?>" alt=""></span>
                </label>

            </div>
        </div>
        <div class="custom-dropdown">
            <button class="custom-dropdown-button">Сортування</button>
            <div class="custom-dropdown-content">
                <h3>Сортування</h3>
                <label>
                    <input type="checkbox"> Популярне
                    <span class="icon"><i class="fa-solid fa-heart"></i></span>
                </label>
                <label>
                    <input type="checkbox"> Від дешевих до дорогих
                    <span class="icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span>
                </label>
                <label>
                    <input type="checkbox"> Від дорогих до дешевих
                    <span class="icon"><i class="fa-solid fa-arrow-up-short-wide"></i></span>
                </label>
            </div>
        </div>
    </div>




    <div class="card-wrappered ">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="vehicle-card">
                <a href="<?php echo e(route('product', $product->hash)); ?>" class="vehicle-card-img">
                    <img src="<?php echo e(asset($product->image_path)); ?>" alt="">
                    <div class="card-details">
                        <h3 class="card-details-title"><?php echo e($product->title); ?></h3>
                        <p><span class="price"><span class="price-detail"><?php echo e($product->price); ?></span> </span>$/day</p>
                        <div class="features-list">
                            <div class="feature-item">
                                <i class="fas fa-tachometer-alt"></i>
                                <span><?php echo e($product->mileage); ?></span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-cogs"></i>
                                <span><?php echo e($product->gearbox); ?></span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-user-friends"></i>
                                <span><?php echo e($product->pearson); ?> Person</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-bolt"></i>
                                <span><?php echo e($product->engine); ?></span>
                            </div>
                        </div>
                        <table class="price-table">
                            <thead>
                            <tr>
                                <th>Оренда</th>
                                <th>Ціна</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1-3 діб</td>
                                <td>$200 / добу</td>
                            </tr>
                            <tr>
                                <td>4-9 діб</td>
                                <td>$180 / добу</td>
                            </tr>
                            <tr>
                                <td>10-25 діб</td>
                                <td>$150 / добу</td>
                            </tr>
                            <tr>
                                <td>26+ діб</td>
                                <td>$100 / добу</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </a>
                <div class="features-button">
                    <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                    
                    <button class="rent-button"> Додати в корзину</button>
                    </a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        var checkList = document.getElementById('list1');
        if (checkList) {
            var anchor = checkList.getElementsByClassName('anchor')[0];
            if (anchor) {
                anchor.onclick = function (evt) {
                    checkList.classList.toggle('visible');
                };
            }
        }

        $(document).ready(function () {
            $('.rent-button').on('click', function () {
                let id = $(this).closest('.vehicle-card').find('input[name="product_id"]').val();
                let title = $(this).closest('.vehicle-card').find('.card-details-title').text();
                let price = $(this).closest('.vehicle-card').find('.price .price-detail').text();
                let img_path = $(this).closest('.vehicle-card').find('.vehicle-card-img img').attr('src');
                let hash = $(this).closest('.vehicle-card').find('input[name="hash"]').val();

                let product = {
                    product_id: id,
                    product_title: title,
                    product_img_path: img_path,
                    product_price: price,
                    product_hash: hash,
                    count: 1,
                };

                let cart = JSON.parse(localStorage.getItem('cart')) || [];

                let match = false;
                cart.forEach(item => {
                    if (item && item.product_id === product.product_id) {
                        match = true;
                        item.count += 1;
                    }
                });

                if (!match) {
                    cart.push(product);
                    $('.ml-action__cart__count').text(cart.length);
                    localStorage.setItem('cart', JSON.stringify(cart));
                } else {
                    alert('Цей товар вже додано до кошика!');
                }
            });
        });


    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH L:\project\car_open_server\SexCars\resources\views/pages/category.blade.php ENDPATH**/ ?>