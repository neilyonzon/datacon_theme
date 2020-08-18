<?php get_header();?>

<!--Main Content -->
<div class="main-content">
    <div class="hero">
        <img src="<?php echo THEME_IMG_PATH;?>/hero_los_angeles.png" alt="" class="hero__img">
        <div class="hero__overlay"></div>
        <div class="hero__headline">
            <h1>Data Con 2020:<br />LA’s Most Data<br />Centric Community</h1>
        </div>
        <div class="hero__subline">Tuesday, October 23rd - Thursday, October 25th</div>
        <div class="hero__description">Join Data Con LA <strong>virtually</strong> and learn from experts in the data
            and
            technology field. Registration is now available.</div>
        <button class="btn btn--quaternary">Register Now</button>
    </div>
    <div class="container-flex">
        <div class="col-1-of-2">
            <div class="callout callout--secondary">Data Con LA is the largest, of its kind, data conference in
                Southern
                California.
            </div>
        </div>
        <div class="col-1-of-2 flex-align--center headspace-s--m">
            <p class="paragraph">Spearheaded by Subash D’Souza and organized and supported by a community of
                volunteers,
                sponsors and speakers, Data Con LA features the most vibrant gathering of data and technology
                enthusiasts in
                Los Angeles.</p>
            <p class="paragraph">Data Con LA began as Big Data Day LA in 2013, with just over 250 attendees. We have
                since
                grown to over 550 attendees in 2014, 950+ attendees in 2015, 1200+ attendees in 2016, and 1550+
                attendees in
                2017. In 2018, we re-branded ourselves from Big Data Day LA to Data Con LA. We also had over 1800+
                attendees
                attend. This year we expect that tally to be over 2000.</p>
        </div>
    </div>
    <div class="stats">
        <div class="stats__col">
            <div class="stats__content">
                <div class="stats_info">
                    <div class="stats__number">2000</div>
                    <div class="stats__detail">participants</div>
                </div>
                <div class="stats__icon">
                    <svg class="stats__icon">
                        <use xlink:href="<?php echo THEME_IMG_PATH;?>/sprite.svg#icon-group"></use>
                    </svg>
                </div>
            </div>
        </div>
        <div class="stats__col">
            <div class="stats__content">
                <div class="stats_info">
                    <div class="stats__number">42</div>
                    <div class="stats__detail">speakers</div>
                </div>
                <div class="stats__icon">
                    <svg class="stats__icon">
                        <use xlink:href="<?php echo THEME_IMG_PATH;?>/sprite.svg#icon-mic"></use>
                    </svg>
                </div>
            </div>
        </div>
        <div class="stats__col">
            <div class="stats__content">
                <div class="stats_info">
                    <div class="stats__number">?</div>
                    <div class="stats__detail">panels</div>
                </div>
                <div class="stats__icon">
                    <svg class="stats__icon">
                        <use xlink:href="<?php echo THEME_IMG_PATH;?>/sprite.svg#icon-movie"></use>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="container-flex">
        <div class="col-1-of-2">
            <p class="paragraph">Our 2020 session tracks will include:</p>
            <ul class="callout-list callout-list--secondary">
                <li class="callout-list__item">Data</li>
                <li class="callout-list__item">AI/ ML/ Data Science</li>
                <li class="callout-list__item">Emerging Tech</li>
                <li class="callout-list__item">Visualizations/ UI/ Use Cases</li>
                <li class="callout-list__item">Infrastructure & Security</li>
            </ul>
        </div>
        <div class="col-1-of-2">
            <div class="cta-box cta-box--secondary">
                <div class="cta-box__header">Call For Proposals</div>
                <div class="cta-box__body">
                    <p class="paragraph">Interested in speaking at DataCon 2020? Send us your proposal before
                        January
                        6,
                        2020.</p>
                </div>
                <div class="cta-box__cta">
                    <button class="btn btn--secondary">Submit Proposal</button>
                </div>
            </div>
        </div>
    </div>
    <div class="media-banner">
        <img src="<?php echo THEME_IMG_PATH;?>/conference.png" alt="" class="media-banner__img">
        <div class="media-banner__overlay">
            <div class="media-banner__intro-text">DATA CON LA 2019</div>
            <div class="media-banner__header">Highlights from Last Year's Event</div>
            <div class="media-banner__cta">Play Video Reel</div>
            <div class="media-banner__line">
                </hr>
            </div>
        </div>
    </div>

    <?php get_footer();?>