@extends('layouts.app')

@section('content')
    <main class="main-block container">
        <nav class="navivation-content">
            <ul>
                <li><button class="btn-item active-item">Сегодня</button></li>
                <li><button class="btn-item">Завтра</button></li>
                <li><button class="btn-item">Воскресенье, 10 сент.</button></li>
                <li><button class="btn-item">Понедельник, 11 сент.</button></li>
                <li><button class="btn-item">Вторник, 12 сент.</button></li>
                <li><button class="btn-item">Среда, 13 сент.</button></li>
            </ul>
        </nav>
        <div class="all-movie">

            <div class="block-movie">
                <div class="img-movie">
                    <img src="{{ asset('img/movie1.svg') }}" alt="">
                    <div class="premiere">
                        <p>ПРЕМЬЕРА</p>
                    </div>
                </div>
                <div class="name-movie">
                    <h2>Праздники</h2>
                </div>
                <div class="tag-movie">
                    <p>комедия</p>
                </div>
                <div class="timetable">
                    <div class="block-timetable">
                        <div class="time-and-price">
                            <button class="time">15:35</button>
                            <div class="format-and-price">
                                <p class="format">2D</p>
                                <p class="price">1233 ₸</p>
                            </div>
                        </div>
                        <p class="hall">Зал 3</p>
                    </div>
                    <div class="block-timetable">
                        <div class="time-and-price">
                            <button class="time">17:40</button>
                            <div class="format-and-price">
                                <p class="format">2D</p>
                                <p class="price">3080 ₸</p>
                            </div>
                        </div>
                        <p class="hall">Зал 6 VIP</p>
                    </div>
                    <div class="block-timetable">
                        <div class="time-and-price">
                            <button class="time">19:15</button>
                            <div class="format-and-price">
                                <p class="format">2D</p>
                                <p class="price">1700 ₸</p>
                            </div>
                        </div>
                        <p class="hall">Зал 4</p>
                    </div>
                    <div class="block-timetable">
                        <div class="time-and-price">
                            <button class="time">21:05</button>
                            <div class="format-and-price">
                                <p class="format">2D</p>
                                <p class="price">1700 ₸</p>
                            </div>
                        </div>
                        <p class="hall">Зал 3</p>
                    </div>
                    <div class="block-timetable">
                        <div class="time-and-price">
                            <button class="time">21:40</button>
                            <div class="format-and-price">
                                <p class="format">2D</p>
                                <p class="price">4030 ₸</p>
                            </div>
                        </div>
                        <p class="hall">Зал 6 VIP</p>
                    </div>
                    <div class="block-timetable">
                        <div class="time-and-price">
                            <button class="time">22:45</button>
                            <div class="format-and-price">
                                <p class="format">2D</p>
                                <p class="price">1700 ₸</p>
                            </div>
                        </div>
                        <p class="hall">Зал 3</p>
                    </div>
                </div>
            </div>



            <div class="block-movie">
                <div class="img-movie">
                    <img src="{{ asset('img/movie2.svg') }}" alt="">
                </div>
                <div class="name-movie">
                    <h2>Мег 2: Бездна</h2>
                </div>
                <div class="tag-movie">
                    <p>экшен</p>
                    <p>триллер</p>
                </div>
                <div class="timetable">
                    <div class="block-timetable">
                        <div class="time-and-price">
                            <button class="time">15:35</button>
                            <div class="format-and-price">
                                <p class="format">2D</p>
                                <p class="price">4030 ₸</p>
                            </div>
                        </div>
                        <p class="hall">Зал 6 VIP</p>
                    </div>
                    <div class="block-timetable">
                        <div class="time-and-price">
                            <button class="time">17:40</button>
                            <div class="format-and-price">
                                <p class="format">2D</p>
                                <p class="price">3080 ₸</p>
                            </div>
                        </div>
                        <p class="hall">Зал 2 Auro</p>
                    </div>
                    <div class="block-timetable">
                        <div class="time-and-price">
                            <button class="time">19:15</button>
                            <div class="format-and-price">
                                <p class="format">2D</p>
                                <p class="price">1700 ₸</p>
                            </div>
                        </div>
                        <p class="hall">Зал 4</p>
                    </div>
                </div>
            </div>




            <div class="block-movie">
                <div class="img-movie">
                    <img src="{{ asset('img/movie3.svg') }}" alt="">
                </div>
                <div class="name-movie">
                    <h2>Заложники</h2>
                </div>
                <div class="tag-movie">
                    <p>экшен</p>
                    <p>триллер</p>
                </div>
                <div class="timetable">
                    <div class="block-timetable">
                        <div class="time-and-price">
                            <button class="time">16:10</button>
                            <div class="format-and-price">
                                <p class="format">2D</p>
                                <p class="price">4030 ₸</p>
                            </div>
                        </div>
                        <p class="hall">Зал 1</p>
                    </div>
                    <div class="block-timetable">
                        <div class="time-and-price">
                            <button class="time">21:30</button>
                            <div class="format-and-price">
                                <p class="format">2D</p>
                                <p class="price">3080 ₸</p>
                            </div>
                        </div>
                        <p class="hall">Зал 1</p>
                    </div>
                </div>
            </div>




            <div class="block-movie">
                <div class="img-movie">
                    <img src="{{ asset('img/movie4.svg') }}" alt="">
                </div>
                <div class="name-movie">
                    <h2>Леди Баг и Супер-Кот: Пробуждение силы</h2>
                </div>
                <div class="tag-movie">
                    <p>фентези</p>
                    <p>боевик</p>
                    <p>мелодрама</p>
                    <p>мультфильм</p>
                    <p>комедия</p>
                </div>
                <div class="timetable">
                    <div class="block-timetable">
                        <div class="time-and-price">
                            <button class="time">16:10</button>
                            <div class="format-and-price">
                                <p class="format">2D</p>
                                <p class="price">4030 ₸</p>
                            </div>
                        </div>
                        <p class="hall">Зал 1</p>
                    </div>
                    <div class="block-timetable">
                        <div class="time-and-price">
                            <button class="time">21:30</button>
                            <div class="format-and-price">
                                <p class="format">2D</p>
                                <p class="price">3080 ₸</p>
                            </div>
                        </div>
                        <p class="hall">Зал 1</p>
                    </div>
                </div>
            </div>


            <div class="block-movie">
                <div class="img-movie non-movie">
                    <img src="{{ asset('img/none-movie.svg') }}" alt="">
                    <div class="premiere">
                        <p>ПРЕМЬЕРА</p>
                    </div>
                </div>
                <div class="name-movie">
                    <h2>Когда не загрузилась афиша</h2>
                </div>
                <div class="tag-movie">
                    <p>комедия</p>
                </div>
                <div class="timetable">
                    <div class="block-timetable">
                        <div class="time-and-price">
                            <button class="time">15:35</button>
                            <div class="format-and-price">
                                <p class="format">2D</p>
                                <p class="price">1233 ₸</p>
                            </div>
                        </div>
                        <p class="hall">Зал 3</p>
                    </div>
                    <div class="block-timetable">
                        <div class="time-and-price">
                            <button class="time">17:40</button>
                            <div class="format-and-price">
                                <p class="format">2D</p>
                                <p class="price">3080 ₸</p>
                            </div>
                        </div>
                        <p class="hall">Зал 6 VIP</p>
                    </div>
                </div>
            </div>



            <div class="block-movie">
                <div class="img-movie">
                    <img src="{{ asset('img/movie5.svg') }}" alt="">
                    <div class="premiere">
                        <p>ПРЕМЬЕРА</p>
                    </div>
                </div>
                <div class="name-movie">
                    <h2>Руслан и Людмила. Больше, чем сказка</h2>
                </div>
                <div class="tag-movie">
                    <p>анимационое приключение</p>
                </div>
                <div class="box-timetable">
                    <button>Сеансы на Завтра</button>
                </div>
            </div>





        </div>
    </main>
@endsection
