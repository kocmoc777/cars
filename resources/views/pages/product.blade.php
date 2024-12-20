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
                <span class="breadcrumbs__link">{{$product->title}}</span>
            </li>
        </ul>
    </div>
    <div class="page-wrappered container">
        <div class="header-section">
            <h1 class="car-title">{{$product->title}}</h1>
            <h2 class="company-name">Прокат спортивних і елітних автомобілів в SexyCars</h2>
        </div>

        <div class="content-section">
            <div class="image-and-pricing">
                    <div class="car-main-image">
                        <img src="{{$product->image_path}}" alt="{{$product->title}}">

                        <div class="additional-features">
                            <h3>Додаткові функції</h3>
                            <div class="features-grid">
                                <div class="feature-item">
                                    <i class="fa-regular fa-circle-check"></i>
                                    <span>Android Auto / CarPlay</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fa-regular fa-circle-check"></i>
                                    <span>AUX / USB</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fa-regular fa-circle-check"></i>
                                    <span>Bluetooth</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fa-regular fa-circle-check"></i>
                                    <span>Датчик світла</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fa-regular fa-circle-check"></i>
                                    <span>Задня камера</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fa-regular fa-circle-check"></i>
                                    <span>Клімат-контроль</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fa-regular fa-circle-check"></i>
                                    <span>Круїз контроль</span>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="pricing-card">
                    <h2 class="car-model">{{$product->title}}</h2>
                    <div class="car-image">
                        <img src="{{$product->image_path}}" alt="{{$product->title}}">
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
                    <button class="select-dates-btn">Обрати дати</button>
                </div>
                </div>
            </div>


    </div>

@endsection
