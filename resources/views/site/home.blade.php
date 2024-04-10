@extends('layouts.site-layout')
@section('title', 'Home')

@section('content')


<div class="section-bgc intro">
    <div class="intro-item intro-item-type-1" style="background-image: url('assets/img/intro-img1.jpg');">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="intro-content" style="--margin-left: 4rem;">
                        <div class="section-heading shm-none">
                            <div class="section-subheading">Contando</div>
                            <h1>O melhor sistema online de gestão para o seu escritório de Contabilidade</h1>
                            <p class="section-desc">Focado em funcionalidades para agilizar o dia a dia do escritório de contabilidade
                                como buscador de nota fiscal, gestão de tarefas, gestão de processos, controle de cnd's e muito mais.
                            </p>
                        </div>
                        <div class="btn-group intro-btns">
                            <a href="{{ route('tenant.create')}}"
                                class="btn btn-border btn-with-icon btn-small ripple">
                                <span>Testar agora</span>
                                <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                    <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="row">
            <header class="col-12">
                <div class="section-heading heading-center">
                    <div class="section-subheading">Areas what we serv</div>
                    <h2>Our Services</h2>
                </div>
            </header>
            <div class="col-lg-4 col-md-6 col-12 item">
                <a href="#!" class="iitem item-style iitem-hover">
                    <div class="iitem-icon">
                        <i class="material-icons material-icons-outlined md-48">corporate_fare</i>
                    </div>
                    <div class="iitem-icon-bg">
                        <i class="material-icons material-icons-outlined">corporate_fare</i>
                    </div>
                    <h3 class="iitem-heading item-heading-large">Corporate Solution</h3>
                    <div class="iitem-desc">Contrary to popular belief, Lorem Ipsum is not simply random
                        text. It has roots in a piece of classical Latin literature from 45 BC, making it
                        over 2000 years old.
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <a href="#!" class="iitem item-style iitem-hover">
                    <div class="iitem-icon">
                        <i class="material-icons material-icons-outlined md-48">support_agent</i>
                    </div>
                    <div class="iitem-icon-bg">
                        <i class="material-icons material-icons-outlined">support_agent</i>
                    </div>
                    <h3 class="iitem-heading item-heading-large">Call Center Solutions</h3>
                    <div class="iitem-desc">Contrary to popular belief, Lorem Ipsum is not simply random
                        text. It has roots in a piece of classical Latin literature from 45 BC, making it.
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-12 col-12 item">
                <a href="#!" class="iitem item-style iitem-hover">
                    <div class="iitem-icon">
                        <i class="material-icons material-icons-outlined md-48">cloud_download</i>
                    </div>
                    <div class="iitem-icon-bg">
                        <i class="material-icons material-icons-outlined">cloud_download</i>
                    </div>
                    <h3 class="iitem-heading item-heading-large">Cloud Development</h3>
                    <div class="iitem-desc">There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form, by injected humour, or
                        randomised words.
                    </div>
                </a>
            </div>
            <div class="section-footer col-12 section-footer-animate">
                <div class="btn-group align-items-center justify-content-center">
                    <a href="#!" class="btn btn-with-icon btn-w240 ripple">
                        <span>See All Services</span>
                        <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                            <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-bgc">
    <div class="container">
        <div class="row litems">
            <header class="col-12">
                <div class="section-heading heading-center">
                    <div class="section-subheading">some reasons</div>
                    <h2>Why Choose Us</h2>
                </div>
            </header>
            <div class="col-lg-4 col-md-6 col-12 litem">
                <div class="ini">
                    <div class="ini-count">01</div>
                    <div class="ini-info">
                        <h3 class="ini-heading item-heading-large">High Quality <br> Hardware</h3>
                        <div class="ini-desc">
                            <p>We use top-notch hardware to develop the most efficient apps for our
                                customers
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 litem">
                <div class="ini">
                    <div class="ini-count">02</div>
                    <div class="ini-info">
                        <h3 class="ini-heading item-heading-large">Dedicated 24\7 <br> Support</h3>
                        <div class="ini-desc">
                            <p>You can rely on our 24/7 tech support that will gladly solve any app issue
                                you may have.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 litem">
                <div class="ini">
                    <div class="ini-count">03</div>
                    <div class="ini-info">
                        <h3 class="ini-heading item-heading-large">30-Day Money-back Guarantee</h3>
                        <div class="ini-desc">
                            <p>If you are not satisfied with our apps, we will return your money in the
                                first 30 days.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 litem">
                <div class="ini">
                    <div class="ini-count">04</div>
                    <div class="ini-info">
                        <h3 class="ini-heading item-heading-large">Agile and Fast <br> Working Style</h3>
                        <div class="ini-desc">
                            <p>This type of approach to our work helps our specialists to quickly develop
                                better apps.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 litem">
                <div class="ini">
                    <div class="ini-count">05</div>
                    <div class="ini-info">
                        <h3 class="ini-heading item-heading-large">Some Apps <br> are Free</h3>
                        <div class="ini-desc">
                            <p>We also develop free apps that can be downloaded online without any payments.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 litem">
                <div class="ini">
                    <div class="ini-count">06</div>
                    <div class="ini-info">
                        <h3 class="ini-heading item-heading-large">High Level <br> of Usability</h3>
                        <div class="ini-desc">
                            <p>All our products have high usability allowing users to easily operate the
                                apps.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-without-padding-bottom">
    <div class="container">
        <div class="row items spincrement-container">
            <div class="col-xl-3 col-md-6 col-12 item">
                <div class="counter-min">
                    <div class="counter-min-block">
                        <div class="counter-min-ico">
                            <i class="material-icons material-icons-outlined md-36">history</i>
                        </div>
                        <div class="counter-min-numb spincrement" data-from="0" data-to="10">0</div>
                    </div>
                    <div class="counter-min-info">
                        <h4 class="counter-min-heading">Years Of Experience</h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12 item">
                <div class="counter-min">
                    <div class="counter-min-block">
                        <div class="counter-min-ico">
                            <i class="material-icons material-icons-outlined md-36">chat</i>
                        </div>
                        <div class="counter-min-numb spincrement" data-from="0" data-to="40">0</div>
                    </div>
                    <div class="counter-min-info">
                        <h4 class="counter-min-heading">Consultans</h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12 item">
                <div class="counter-min">
                    <div class="counter-min-block">
                        <div class="counter-min-ico">
                            <i class="material-icons material-icons-outlined md-36">assignment_ind</i>
                        </div>
                        <div class="counter-min-numb spincrement" data-from="0" data-to="160">0</div>
                    </div>
                    <div class="counter-min-info">
                        <h4 class="counter-min-heading">Employers</h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12 item">
                <div class="counter-min">
                    <div class="counter-min-block">
                        <div class="counter-min-ico">
                            <i class="material-icons material-icons-outlined md-36">phonelink_setup</i>
                        </div>
                        <div class="counter-min-numb"><span class="spincrement" data-from="0"
                            data-to="2">0</span>K</div>
                    </div>
                    <div class="counter-min-info">
                        <h4 class="counter-min-heading">Apps Developed</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <header class="col-12">
                <div class="section-heading heading-center">
                    <div class="section-subheading">Reviews from our clients</div>
                    <h2>What People Say</h2>
                </div>
            </header>
            <div class="col-lg-4 col-md-6 col-12 item">
                <div class="reviews-item item-style">
                    <div class="reviews-item-header">
                        <div class="reviews-item-img">
                            <img data-src="assets/img/auth-img-1.jpg" class="img-cover lazy"
                                src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                alt="">
                        </div>
                        <div class="reviews-item-info">
                            <h4 class="reviews-item-name item-heading">Catherine Williams</h4>
                            <div class="reviews-item-position">Regular client</div>
                        </div>
                    </div>
                    <div class="reviews-item-text">
                        <p>PathSoft offers a high caliber of resources skilled in Microsoft Azure.NET,
                            mobile and Quality Assurance. They became our true business partners over the
                            past three years.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <div class="reviews-item item-style">
                    <div class="reviews-item-header">
                        <div class="reviews-item-img">
                            <img data-src="assets/img/auth-img-2.jpg" class="img-cover lazy"
                                src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                alt="">
                        </div>
                        <div class="reviews-item-info">
                            <h4 class="reviews-item-name item-heading">Rupert Wood</h4>
                            <div class="reviews-item-position">Regular client</div>
                        </div>
                    </div>
                    <div class="reviews-item-text">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit consequuntur
                            sequi eos beatae deleniti culpa cupiditate rerum. Similique, blanditiis rem
                            perspiciatis fugiat voluptatem quas officiis ducimus reprehenderit.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 item">
                <div class="reviews-item item-style">
                    <div class="reviews-item-header">
                        <div class="reviews-item-img">
                            <img data-src="assets/img/auth-img-3.jpg" class="img-cover lazy"
                                src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                alt="">
                        </div>
                        <div class="reviews-item-info">
                            <h4 class="reviews-item-name item-heading">Samantha Brown</h4>
                            <div class="reviews-item-position">Regular client</div>
                        </div>
                    </div>
                    <div class="reviews-item-text">
                        <p>We sincerely hope that each and every user entering our website will find
                            exactly. With advanced features of activating account and new login widgets, you
                            will definitely have a great experience of using our web page.
                        </p>
                    </div>
                </div>
            </div>
            <footer class="section-footer col-12 section-footer-animate">
                <div class="btn-group align-items-center justify-content-center">
                    <a href="#!" class="btn btn-with-icon btn-w240 ripple">
                        <span>See All Reviews</span>
                        <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                            <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                        </svg>
                    </a>
                </div>
            </footer>
        </div>
    </div>
</section>
<section class="section section-bgc">
    <div class="container">
        <div class="row items">
            <header class="col-12">
                <div class="section-heading heading-center">
                    <div class="section-subheading">More info about</div>
                    <h2>Latest News</h2>
                </div>
            </header>
            <div class="col-lg-4 col-md-6 col-12 item">
                <article class="news-item item-style">
                    <a href="news-post.html" class="news-item-img el">
                    <img data-src="assets/img/news-img-1.jpg" class="lazy"
                        src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                        alt="">
                    </a>
                    <div class="news-item-info">
                        <div class="news-item-date">07/01/2021</div>
                        <h3 class="news-item-heading item-heading">
                            <a href="news-post.html" title="Benefits Of Async/Await">Benefits Of
                            Async/Await</a>
                        </h3>
                        <div class="news-item-desc">
                            <p>Asynchronous functions are a good and bad thing in JavaScript.</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <article class="news-item item-style">
                    <a href="news-post.html" class="news-item-img el">
                    <img data-src="assets/img/news-img-2.jpg" class="lazy"
                        src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                        alt="">
                    </a>
                    <div class="news-item-info">
                        <div class="news-item-date">05/01/2021</div>
                        <h3 class="news-item-heading item-heading">
                            <a href="news-post.html" title="Key Considerations Of IPaaS">Key Considerations
                            Of IPaaS</a>
                        </h3>
                        <div class="news-item-desc">
                            <p>Digital transformation requires cloud appropriate adoption</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <article class="news-item item-style">
                    <a href="news-post.html" class="news-item-img el">
                    <img data-src="assets/img/news-img-3.jpg" class="lazy"
                        src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                        alt="">
                    </a>
                    <div class="news-item-info">
                        <div class="news-item-date">01/01/2021</div>
                        <h3 class="news-item-heading item-heading">
                            <a href="news-post.html" title="Hibernate Query Language">Hibernate Query
                            Language</a>
                        </h3>
                        <div class="news-item-desc">
                            <p>In this tutorial, we will discuss the Hibernate Query Language. </p>
                        </div>
                    </div>
                </article>
            </div>
            <footer class="section-footer col-12 item section-footer-animate">
                <div class="btn-group align-items-center justify-content-center">
                    <a href="news.html" class="btn btn-with-icon btn-w240 ripple">
                        <span>See All News</span>
                        <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                            <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                        </svg>
                    </a>
                </div>
            </footer>
        </div>
    </div>
</section>




@endsection
