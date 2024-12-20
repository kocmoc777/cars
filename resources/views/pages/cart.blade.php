@extends('layout.main')
@section('content')
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
                    <a href="{{asset('/')}}">Головна</a>
                </a>
            </li>
            <li class="breadcrumbs__item">
                <span class="breadcrumbs__link">Корзина замовлення</span>
            </li>
        </ul>
    </div>



    <div class="container"><h1>Корзина замовлень</h1></div>



    <div class="cart-container container">

    </div>


    <div class="insurance-section">
        <h2>Відмова від збитків</h2>
        <p>
            Захистіть себе від високих витрат на пошкодження та викрадення автомобіля. Завдяки цій відмові SexyCars
            зменшує вашу відповідальність до вказаного надлишку за випадкові пошкодження та крадіжки.
        </p>
        <div class="card-container">
            <!-- First Card -->
            <div class="card-item">
                <input type="radio" name="waiver-option" id="max-option" class="hidden-radio" checked>
                <label for="max-option">
                    <h3 class="card-title">Максимальна франшиза</h3>
                    <p class="deductible-info">Франшиза: до $527.45</p>
                    <p>€500.00 (прибл. $527.45) матеріальна відповідальність</p>
                    <p>✔ Включає захист від крадіжки</p>
                    <p class="included-text"> В комплекті</p>
                </label>
            </div>
            <!-- Second Card -->
            <div class="card-item">
                <input type="radio" name="waiver-option" id="reduced-option" class="hidden-radio">
                <label for="reduced-option">
                    <h3 class="card-title">Відмова від збитку зі зниженою франшизою</h3>
                    <p class="deductible-info">Франшиза: до $263.72</p>
                    <p>€250.00 (прибл. $263.72) матеріальна відповідальність</p>
                    <p>✔ Включає захист від крадіжки</p>
                    <p class="price-info">$10.55 / День</p>
                </label>
            </div>
            <!-- Third Card -->
            <div class="card-item">
                <input type="radio" name="waiver-option" id="min-option" class="hidden-radio">
                <label for="min-option">
                    <h3 class="card-title">Відмова від збитків (включаючи захист від крадіжки) з мінімальною
                        франшизою</h3>
                    <p class="deductible-info green-text">Без франшизи</p>
                    <p>€0.00 матеріальна відповідальність</p>
                    <p>✔ Включає захист від крадіжки</p>
                    <p class="price-info">$21.10 / День</p>
                </label>
            </div>
        </div>
    </div>




    <!--pay-->

    <div class="addon-container container">
        <h2 class="addon-title">Спосіб оплати</h2>
        <p class="addon-subtitle">Оплачуйте онлайн та отримайте найкращу ціну</p>

        <div class="addon-item">
            <input type="checkbox" id="addon1" class="addon-checkbox">
            <label for="addon1" class="addon-label">
                <span class="addon-box"></span>
                <span class="addon-text"><i class="fa-regular fa-credit-card"></i> Онлайн</span>
            </label>
            <span class="addon-price">Бонуси від компанії</span>
        </div>

        <div class="addon-item">
            <input type="checkbox" id="addon2" class="addon-checkbox">
            <label for="addon2" class="addon-label">
                <span class="addon-box"></span>
                <span class="addon-text"><i class="fa-solid fa-cash-register"></i> Офлайн</span>
            </label>
            <span class="addon-price">Готівка <small>/ Карткою на місці</small></span>
        </div>


    </div>




    <!--pay_end-->




    <div class="main-containerer container">

    </div>





    <script>
        $(document).ready(function () {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let cartContainerOutput = '';
            let mainContainererOutput = '';

            cart.forEach(item => {
                if (item) {
                    cartContainerOutput += `
            <div class="car-details">
                <input type="hidden" name="product_id" value="${item.product_id}">
                <h1>${item.product_title}</h1>
                <img src="${item.product_img_path}" alt="" class="car-image">
                <div class="car-info">
                    <div class="feature-item">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>4,000</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-cogs"></i>
                        <span>Автомат</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-user-friends"></i>
                        <span>4 людини</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-bolt"></i>
                        <span>Електро</span>
                    </div>
                </div>
                <p class="age-requirement">
                    <span><i class="fas fa-passport"></i> Водій повинен мати стаж водіння принаймні 2 роки для оренди автомобіля</span>
                </p>
            </div>




            <div class="booking-options">
                <i class="fa-solid fa-xmark close-booking"></i>

                <div class="service-options">
    <h2>Опції та послуги</h2>
    <p class="service-subtitle">Виберіть додаткові опції для комфортної подорожі</p>

    <!-- Опція 1 -->
    <div class="service-item">
        <input type="checkbox" id="service1" class="service-checkbox">

        <label for="service1" class="service-label">
            <span class="custom-checkbox"></span>
            <span class="service-text"><i class="fa-solid fa-infinity"></i> Безлімітний пробіг</span>
            <span class="service-info">ⓘ</span>
        </label>
        <span class="service-price">$45 <small>/ всього</small></span>
    </div>

    <!-- Опція 2 -->
    <div class="service-item">
        <input type="checkbox" id="service2" class="service-checkbox">
        <label for="service2" class="service-label">
            <span class="custom-checkbox"></span>
            <span class="service-text"><i class="fa-solid fa-shield"></i> Страхування коліс та скла</span>
            <span class="service-info">ⓘ</span>
        </label>
        <span class="service-price">$45 <small>/ всього</small></span>
    </div>

    <!-- Опція 3 -->
    <div class="service-item">
        <input type="checkbox" id="service3" class="service-checkbox">
        <label for="service3" class="service-label">
            <span class="custom-checkbox"></span>
            <span class="service-text"><i class="fa-solid fa-location-dot"></i> Послуга "Виїзд за кордон"</span>
            <span class="service-info">ⓘ</span>
        </label>
        <span class="service-price">$150</span>
    </div>

    <div class="service-item">
        <input type="checkbox" id="service4" class="service-checkbox">
        <label for="service4" class="service-label">
            <span class="custom-checkbox"></span>
            <span class="service-text"><i class="fa-solid fa-gas-pump"></i> Послуга "Повний бак"</span>
            <span class="service-info">ⓘ</span>
        </label>
        <span class="service-price">$140 <small>/ всього</small></span>
    </div>
<div class="service-item">
        <input type="checkbox" id="service5" class="service-checkbox">
        <label for="service5" class="service-label">
            <span class="custom-checkbox"></span>
            <span class="service-text"><i class="fa-solid fa-baby"></i> Дитяче крісло</span>
            <span class="service-info">ⓘ</span>
        </label>
        <span class="service-price">$18 <small>/ всього</small></span>
    </div>
<div class="service-item">
        <input type="checkbox" id="service6" class="service-checkbox">
        <label for="service6" class="service-label">
            <span class="custom-checkbox"></span>
            <span class="service-text"><i class="fa-solid fa-person"></i> Додатковий водій</span>
            <span class="service-info">ⓘ</span>
        </label>
        <span class="service-price">$18 <small>/ всього</small></span>
    </div>

</div>



            </div>

`;


                 mainContainererOutput += `
                     <div class="driver-form-container">
                     <input type="hidden" name="product_id" value="${item.product_id}">
                        <h1>Хто водитиме?</h1>
                    <form>
                        <div class="driver-form-group">
                            <label for="company">Компанія <span class="optional-text">( необов'язково )</span></label>
                            <input type="text" id="company" name="company" placeholder="ПрАТ 'Skyline Solutions'">
                        </div>
                        <div class="driver-form-row">
                            <div class="driver-form-group">
                                <label for="first-name">ФІО</label>
                                <input type="text" id="first-name" name="first-name" placeholder="Прізвище, ім’я, по батькові">
                            </div>

                        </div>
                        <div class="driver-form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="biuro@sexycars.ua">
                        </div>
                        <div class="driver-form-row">
                            <div class="driver-form-group">
                                <label for="country">Країна</label>
                                <select id="country" name="country">
                                    <option value="us" selected>🇺🇸 США</option>
                                    <option value="uk">🇬🇧 Велика Британія</option>
                                    <option value="ua" selected>🇺🇦 Україна</option>
                                </select>

                            </div>
                            <div class="driver-form-group">
                                <label for="phone">Номер телефону</label>
                                <input type="tel" id="phone" name="phone" placeholder="">
                            </div>
                        </div>


                        <div class="driver-form-info">
                            <i>Водій повинен мати стаж водіння принаймні 2 роки для оренди автомобіля</i>
                        </div>
                    </form>
                </div>
                    <!-- Картка бронювання -->
                    <div class="booking-cardis">
                        <div class="car-infos">
                            <img src="${item.product_img_path}" alt="Зображення Skoda Fabia" width="150"
                                 height="60" class="car-images">
                                <div class="car-detailess">
                                    <h2>${item.product_title}</h2>
                                    <small class="small-title"></small>
                                </div>
                        </div>
                        <hr>
                            <div class="pricing">
                                <p>Оренда $45 на 3 дні <span class="amount">$135</span></p>
                                <div class="mileage-limit">
                                    <span>Ліміт пробігу за весь період</span> <strong>900 км.</strong>
                                </div>
                                <hr>
                                    <p>Застава <span class="amount">$500</span></p>
                                    <hr>
                                        <p class="total"><strong>Усього</strong> <span class="amount">$135</span></p>
                            </div>
                            <button class="reserve-btn">Забронювати</button>
                            <div class="terms">

                                <label class="reserv-footer">
                                    <br>
                                        <p>
                                            Відправляючи замовлення, ви приймаєте діючі
                                            <a href="#">умови прокату,політику конфіденційності</a> та згоду на обробку ваших персональних
                                            даних.</p>
                                </label>
                            </div>
                    </div>
                `;

                }
            });

            $('.cart-container').html(cartContainerOutput);
            $('.main-containerer').html(mainContainererOutput);

            $(document).on('click', '.close-booking', function () {
                let id = $(this).closest('.booking-options').prev('.car-details').find('input[name="product_id"]').val();

                let cart = JSON.parse(localStorage.getItem('cart')) || [];
                cart = cart.filter(item => item.product_id != id);

                $('.ml-action__cart__count').text(cart.length);
                localStorage.setItem('cart', JSON.stringify(cart));

                $(this).closest('.booking-options').prev('.car-details').remove();
                $(this).closest('.booking-options').remove();
            });
            $(document).ready(function() {
                $('#country').change(function() {
                    var countryCode = $(this).val();
                    var placeholder = '';

                    switch(countryCode) {
                        case 'us':
                            placeholder = '+1';
                            break;
                        case 'uk':
                            placeholder = '+44';
                            break;
                        case 'ua':
                            placeholder = '+380';
                            break;
                        default:
                            placeholder = 'Номер телефону';
                    }
                    $('#phone').attr('placeholder', placeholder);
                });
                $('#country').trigger('change');
            });

        });


    </script>

@endsection
