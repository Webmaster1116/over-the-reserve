@extends('layouts.default')
<link rel="stylesheet" href="assets/css/about.css" />
<link rel="stylesheet" href="assets/css/faq.css" />
<link rel="stylesheet" href="assets/css/style.css" />
<script>
    document.getElementsByTagName("html")[0].className += " js";
</script>

@section('content')
<section id="pageUrl">
    <div class="container">
        <div class="url-link"><span>Home | </span><p>Faq</p></div>
    </div>
</section>
<section id="faq-1">
    <div class="container">
        <div class="faq-header">
            <span>Frequently Asked Questions</span>
        </div>
        <div class="faq-body">
            <div class="faq-main">
                <div class="faq-question col-md-6 col-sm-12">
                    <div class="faq-questions">
                        <div class="faq-header">
                            <span>Question About Selling</span>
                        </div>
                        <div class="inner-border">
                            <div class="cd-faq js-cd-faq max-width-md margin-top-lg margin-bottom-lg">
                                <ul class="cd-faq__categories">
                                    <a
                                        class="cd-faq__category cd-faq__category-selected truncate"
                                        href="#basics"
                                    ></a>
                                </ul>
                                <!-- cd-faq__categories -->

                                <div class="cd-faq__items">
                                    <ul id="basics" class="cd-faq__group">
                                        <li class="cd-faq__item">
                                        <a class="cd-faq__trigger" href="#0"
                                            ><span>How can we help?</span></a
                                        >
                                        <div class="cd-faq__content">
                                            <div class="text-component">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Blanditiis provident officiis, reprehenderit numquam.
                                                Praesentium veritatis eos tenetur magni debitis inventore
                                                fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                                                distinctio velit.
                                            </p>
                                            </div>
                                        </div>
                                        <!-- cd-faq__content -->
                                        </li>

                                        <li class="cd-faq__item">
                                        <a class="cd-faq__trigger" href="#0"
                                            ><span>I’ve got a problem, how do I contact support?</span></a
                                        >
                                        <div class="cd-faq__content">
                                            <div class="text-component">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Blanditiis provident officiis, reprehenderit numquam.
                                                Praesentium veritatis eos tenetur magni debitis inventore
                                                fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                                                distinctio velit.
                                            </p>
                                            </div>
                                        </div>
                                        <!-- cd-faq__content -->
                                        </li>

                                        <li class="cd-faq__item">
                                        <a class="cd-faq__trigger" href="#0"
                                            ><span>What is cloud backup?</span></a
                                        >
                                        <div class="cd-faq__content">
                                            <div class="text-component">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Blanditiis provident officiis, reprehenderit numquam.
                                                Praesentium veritatis eos tenetur magni debitis inventore
                                                fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                                                distinctio velit.
                                            </p>
                                            </div>
                                        </div>
                                        <!-- cd-faq__content -->
                                        </li>

                                        <li class="cd-faq__item">
                                        <a class="cd-faq__trigger" href="#0"
                                            ><span>Do you store any of my information?</span></a
                                        >
                                        <div class="cd-faq__content">
                                            <div class="text-component">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Blanditiis provident officiis, reprehenderit numquam.
                                                Praesentium veritatis eos tenetur magni debitis inventore
                                                fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                                                distinctio velit.
                                            </p>
                                            </div>
                                        </div>
                                        <!-- cd-faq__content -->
                                        </li>

                                        <li class="cd-faq__item">
                                        <a class="cd-faq__trigger" href="#0"
                                            ><span>How do I delete my account?</span></a
                                        >
                                        <div class="cd-faq__content">
                                            <div class="text-component">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Blanditiis provident officiis, reprehenderit numquam.
                                                Praesentium veritatis eos tenetur magni debitis inventore
                                                fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                                                distinctio velit.
                                            </p>
                                            </div>
                                        </div>
                                        <!-- cd-faq__content -->
                                        </li>
                                    </ul>
                                <!-- cd-faq__group -->
                                </div>
                                <!-- cd-faq__items -->

                                <a href="#0" class="cd-faq__close-panel text-replace">Close</a>

                                <div class="cd-faq__overlay" aria-hidden="true"></div>
                            </div>
                            <!-- cd-faq -->
                        </div>
                    </div>
                </div>
                <div class="faq-image col-md-6 col-sm-12">
                    <img src="{{asset('assets/img/faq/faq-1.svg')}}" />
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="faq-body">
            <div class="faq-main">
                <div class="faq-image col-md-6 col-sm-12">
                    <img src="{{asset('assets/img/faq/faq-2.svg')}}" />
                </div>
                <div class="faq-question col-md-6 col-sm-12">
                    <div class="faq-questions">
                        <div class="faq-header">
                            <span>Question About Renting</span>
                        </div>
                        <div class="inner-border">
                            <div class="cd-faq js-cd-faq max-width-md margin-top-lg margin-bottom-lg">
                                <ul class="cd-faq__categories">
                                    <a
                                        class="cd-faq__category cd-faq__category-selected truncate"
                                        href="#basics"
                                    ></a>
                                </ul>
                                <!-- cd-faq__categories -->

                                <div class="cd-faq__items">
                                    <ul id="basics" class="cd-faq__group">
                                        <li class="cd-faq__item">
                                        <a class="cd-faq__trigger" href="#0"
                                            ><span>How can we help?</span></a
                                        >
                                        <div class="cd-faq__content">
                                            <div class="text-component">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Blanditiis provident officiis, reprehenderit numquam.
                                                Praesentium veritatis eos tenetur magni debitis inventore
                                                fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                                                distinctio velit.
                                            </p>
                                            </div>
                                        </div>
                                        <!-- cd-faq__content -->
                                        </li>

                                        <li class="cd-faq__item">
                                        <a class="cd-faq__trigger" href="#0"
                                            ><span>I’ve got a problem, how do I contact support?</span></a
                                        >
                                        <div class="cd-faq__content">
                                            <div class="text-component">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Blanditiis provident officiis, reprehenderit numquam.
                                                Praesentium veritatis eos tenetur magni debitis inventore
                                                fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                                                distinctio velit.
                                            </p>
                                            </div>
                                        </div>
                                        <!-- cd-faq__content -->
                                        </li>

                                        <li class="cd-faq__item">
                                        <a class="cd-faq__trigger" href="#0"
                                            ><span>What is cloud backup?</span></a
                                        >
                                        <div class="cd-faq__content">
                                            <div class="text-component">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Blanditiis provident officiis, reprehenderit numquam.
                                                Praesentium veritatis eos tenetur magni debitis inventore
                                                fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                                                distinctio velit.
                                            </p>
                                            </div>
                                        </div>
                                        <!-- cd-faq__content -->
                                        </li>

                                        <li class="cd-faq__item">
                                        <a class="cd-faq__trigger" href="#0"
                                            ><span>Do you store any of my information?</span></a
                                        >
                                        <div class="cd-faq__content">
                                            <div class="text-component">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Blanditiis provident officiis, reprehenderit numquam.
                                                Praesentium veritatis eos tenetur magni debitis inventore
                                                fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                                                distinctio velit.
                                            </p>
                                            </div>
                                        </div>
                                        <!-- cd-faq__content -->
                                        </li>

                                        <li class="cd-faq__item">
                                        <a class="cd-faq__trigger" href="#0"
                                            ><span>How do I delete my account?</span></a
                                        >
                                        <div class="cd-faq__content">
                                            <div class="text-component">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Blanditiis provident officiis, reprehenderit numquam.
                                                Praesentium veritatis eos tenetur magni debitis inventore
                                                fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                                                distinctio velit.
                                            </p>
                                            </div>
                                        </div>
                                        <!-- cd-faq__content -->
                                        </li>
                                    </ul>
                                <!-- cd-faq__group -->
                                </div>
                                <!-- cd-faq__items -->

                                <a href="#0" class="cd-faq__close-panel text-replace">Close</a>

                                <div class="cd-faq__overlay" aria-hidden="true"></div>
                            </div>
                            <!-- cd-faq -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="faq-body">
            <div class="faq-main">
                <div class="faq-question col-md-6 col-sm-12">
                    <div class="faq-questions">
                        <div class="faq-header">
                            <span>Question About Selling</span>
                        </div>
                        <div class="inner-border">
                            <div class="cd-faq js-cd-faq max-width-md margin-top-lg margin-bottom-lg">
                                <ul class="cd-faq__categories">
                                    <a
                                        class="cd-faq__category cd-faq__category-selected truncate"
                                        href="#basics"
                                    ></a>
                                </ul>
                                <!-- cd-faq__categories -->

                                <div class="cd-faq__items">
                                    <ul id="basics" class="cd-faq__group">
                                        <li class="cd-faq__item">
                                        <a class="cd-faq__trigger" href="#0"
                                            ><span>How can we help?</span></a
                                        >
                                        <div class="cd-faq__content">
                                            <div class="text-component">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Blanditiis provident officiis, reprehenderit numquam.
                                                Praesentium veritatis eos tenetur magni debitis inventore
                                                fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                                                distinctio velit.
                                            </p>
                                            </div>
                                        </div>
                                        <!-- cd-faq__content -->
                                        </li>

                                        <li class="cd-faq__item">
                                        <a class="cd-faq__trigger" href="#0"
                                            ><span>I’ve got a problem, how do I contact support?</span></a
                                        >
                                        <div class="cd-faq__content">
                                            <div class="text-component">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Blanditiis provident officiis, reprehenderit numquam.
                                                Praesentium veritatis eos tenetur magni debitis inventore
                                                fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                                                distinctio velit.
                                            </p>
                                            </div>
                                        </div>
                                        <!-- cd-faq__content -->
                                        </li>

                                        <li class="cd-faq__item">
                                        <a class="cd-faq__trigger" href="#0"
                                            ><span>What is cloud backup?</span></a
                                        >
                                        <div class="cd-faq__content">
                                            <div class="text-component">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Blanditiis provident officiis, reprehenderit numquam.
                                                Praesentium veritatis eos tenetur magni debitis inventore
                                                fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                                                distinctio velit.
                                            </p>
                                            </div>
                                        </div>
                                        <!-- cd-faq__content -->
                                        </li>

                                        <li class="cd-faq__item">
                                        <a class="cd-faq__trigger" href="#0"
                                            ><span>Do you store any of my information?</span></a
                                        >
                                        <div class="cd-faq__content">
                                            <div class="text-component">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Blanditiis provident officiis, reprehenderit numquam.
                                                Praesentium veritatis eos tenetur magni debitis inventore
                                                fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                                                distinctio velit.
                                            </p>
                                            </div>
                                        </div>
                                        <!-- cd-faq__content -->
                                        </li>

                                        <li class="cd-faq__item">
                                        <a class="cd-faq__trigger" href="#0"
                                            ><span>How do I delete my account?</span></a
                                        >
                                        <div class="cd-faq__content">
                                            <div class="text-component">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Blanditiis provident officiis, reprehenderit numquam.
                                                Praesentium veritatis eos tenetur magni debitis inventore
                                                fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                                                distinctio velit.
                                            </p>
                                            </div>
                                        </div>
                                        <!-- cd-faq__content -->
                                        </li>
                                    </ul>
                                <!-- cd-faq__group -->
                                </div>
                                <!-- cd-faq__items -->

                                <a href="#0" class="cd-faq__close-panel text-replace">Close</a>

                                <div class="cd-faq__overlay" aria-hidden="true"></div>
                            </div>
                            <!-- cd-faq -->
                        </div>
                    </div>
                </div>
                <div class="faq-image col-md-6 col-sm-12">
                    <img src="{{asset('assets/img/faq/faq-1.svg')}}" />
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="faq-body">
            <div class="faq-main">
                <div class="faq-image col-md-6 col-sm-12">
                    <img src="{{asset('assets/img/faq/faq-2.svg')}}" />
                </div>
                <div class="faq-question col-md-6 col-sm-12">
                    <div class="faq-questions">
                        <div class="faq-header">
                            <span>Question About Renting</span>
                        </div>
                        <div class="inner-border">
                            <div class="cd-faq js-cd-faq max-width-md margin-top-lg margin-bottom-lg">
                                <ul class="cd-faq__categories">
                                    <a
                                        class="cd-faq__category cd-faq__category-selected truncate"
                                        href="#basics"
                                    ></a>
                                </ul>
                                <!-- cd-faq__categories -->

                                <div class="cd-faq__items">
                                    <ul id="basics" class="cd-faq__group">
                                        <li class="cd-faq__item">
                                        <a class="cd-faq__trigger" href="#0"
                                            ><span>How can we help?</span></a
                                        >
                                        <div class="cd-faq__content">
                                            <div class="text-component">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Blanditiis provident officiis, reprehenderit numquam.
                                                Praesentium veritatis eos tenetur magni debitis inventore
                                                fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                                                distinctio velit.
                                            </p>
                                            </div>
                                        </div>
                                        <!-- cd-faq__content -->
                                        </li>

                                        <li class="cd-faq__item">
                                        <a class="cd-faq__trigger" href="#0"
                                            ><span>I’ve got a problem, how do I contact support?</span></a
                                        >
                                        <div class="cd-faq__content">
                                            <div class="text-component">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Blanditiis provident officiis, reprehenderit numquam.
                                                Praesentium veritatis eos tenetur magni debitis inventore
                                                fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                                                distinctio velit.
                                            </p>
                                            </div>
                                        </div>
                                        <!-- cd-faq__content -->
                                        </li>

                                        <li class="cd-faq__item">
                                        <a class="cd-faq__trigger" href="#0"
                                            ><span>What is cloud backup?</span></a
                                        >
                                        <div class="cd-faq__content">
                                            <div class="text-component">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Blanditiis provident officiis, reprehenderit numquam.
                                                Praesentium veritatis eos tenetur magni debitis inventore
                                                fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                                                distinctio velit.
                                            </p>
                                            </div>
                                        </div>
                                        <!-- cd-faq__content -->
                                        </li>

                                        <li class="cd-faq__item">
                                        <a class="cd-faq__trigger" href="#0"
                                            ><span>Do you store any of my information?</span></a
                                        >
                                        <div class="cd-faq__content">
                                            <div class="text-component">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Blanditiis provident officiis, reprehenderit numquam.
                                                Praesentium veritatis eos tenetur magni debitis inventore
                                                fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                                                distinctio velit.
                                            </p>
                                            </div>
                                        </div>
                                        <!-- cd-faq__content -->
                                        </li>

                                        <li class="cd-faq__item">
                                        <a class="cd-faq__trigger" href="#0"
                                            ><span>How do I delete my account?</span></a
                                        >
                                        <div class="cd-faq__content">
                                            <div class="text-component">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Blanditiis provident officiis, reprehenderit numquam.
                                                Praesentium veritatis eos tenetur magni debitis inventore
                                                fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat
                                                distinctio velit.
                                            </p>
                                            </div>
                                        </div>
                                        <!-- cd-faq__content -->
                                        </li>
                                    </ul>
                                <!-- cd-faq__group -->
                                </div>
                                <!-- cd-faq__items -->

                                <a href="#0" class="cd-faq__close-panel text-replace">Close</a>

                                <div class="cd-faq__overlay" aria-hidden="true"></div>
                            </div>
                            <!-- cd-faq -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="{{asset('assets/js/util.js')}}"></script>
    <!-- util functions included in the CodyHouse framework -->
    <script src="{{asset('assets/js/main.js')}}"></script>
@endsection
