<!-- Page Content-->
<main class="page-content">
    <section class="section-60 section-sm-95 bg-image bg-image-1 text-center section-sm-bottom-60">
        <!-- Swiper--> 
        <div data-autoplay="5000" class="swiper-container swiper-slider text-center">
            <div class="swiper-wrapper">
                <div data-slide-bg="<?= base_url('homeassets/') ?>images/index5.jpg" class="swiper-slide">             
                </div>
                <div data-slide-bg="<?= base_url('homeassets/') ?>images/index10.jpg" class="swiper-slide">

                </div>
                <div data-slide-bg="<?= base_url('homeassets/') ?>images/index11.jpg" class="swiper-slide">             
                </div>
            </div>
            <!-- Swiper Pagination-->
            <div class="swiper-pagination"></div>
        </div>		
        <div class="shell">
            <h1 class="txt-white">TRAVEL</h1>
            <div class="range">
                <div class="cell-lg-8 cell-lg-preffix-2">
                    <!-- RD Mailform-->
                    <form class="rd-mailform text-left form-search">
                        <p class="small text-xs-right">Searching for Hotel + Flight +Car</p>
                        <div class="range offset-top-22">
                            <div class="cell-sm-6">
                                <div class="form-group">
                                    <label for="from" class="form-label">From</label>
                                    <input id="from" type="text" name="city" data-constraints="@Required" placeholder="Where are you departing from?" class="form-control">
                                </div>
                            </div>
                            <div class="cell-sm-6 offset-top-45 offset-sm-top-0">
                                <div class="form-group">
                                    <label for="to" class="form-label">To</label>
                                    <input id="to" type="text" name="city2" data-constraints="@Required" placeholder="Where would you like to go?" class="form-control">
                                </div>
                            </div>
                            <div class="cell-sm-6 offset-top-45">
                                <div class="form-group date">
                                    <label for="datetimepicker1" class="form-label">Check in</label>
                                    <input id="datetimepicker1" type="text" data-time-picker="date" placeholder="mm/dd/yyyy" data-constraints="@Required" class="form-control"><span class="material-icons-event icon icon-md icon-primary"></span>
                                </div>
                            </div>
                            <div class="cell-sm-6 offset-top-45">
                                <div class="form-group date">
                                    <label for="datetimepicker2" class="form-label">Check out</label>
                                    <input id="datetimepicker2" type="text" data-time-picker="date" placeholder="mm/dd/yyyy" data-constraints="@Required" class="form-control"><span class="material-icons-event icon icon-md icon-primary"></span>
                                </div>
                            </div>
                            <div class="cell-xs-6 cell-md-3 offset-top-45">
                                <div class="form-group">
                                    <!--Select 2-->
                                    <label for="select-1" class="form-label">Rooms</label>
                                    <select id="select-1" data-placeholder="-" data-minimum-results-for-search="Infinity" class="form-control select-filter">
                                        <option>-</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cell-xs-6 cell-md-3 offset-top-45">
                                <div class="form-group">
                                    <!--Select 2-->
                                    <label for="select-2" class="form-label">Adults</label>
                                    <select id="select-2" data-placeholder="-" data-minimum-results-for-search="Infinity" class="form-control select-filter">
                                        <option>-</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cell-xs-6 cell-md-3 offset-top-45">
                                <div class="form-group">
                                    <!--Select 2-->
                                    <label for="select-3" class="form-label">Children</label>
                                    <select id="select-3" data-placeholder="-" data-minimum-results-for-search="Infinity" class="form-control select-filter">
                                        <option>-</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cell-xs-6 cell-md-3 offset-top-45">
                                <div class="form-group">
                                    <!--Select 2-->
                                    <label for="select-4" class="form-label">Driver</label>
                                    <select id="select-4" data-placeholder="-" data-minimum-results-for-search="Infinity" class="form-control select-filter">
                                        <option>-</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cell-xs-12 offset-top-37">
                                <button type="submit" data-text="search" class="btn btn-orange btn-fullwidth btn-winona btn-sm"><span>search</span></button>
                            </div>
                            <div class="cell-xs-12 offset-top-30 text-center"><a href="#" class="btn-link-2"> Advanced Search</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Section Hot Tours-->
    <section class="section-71 section-bottom-80">
        <div class="shell">
            <h2 class="text-center">hot tours</h2>
            <div class="range">
                <!-- Owl Carousel-->
                <div data-items="1" data-xs-items="1" data-sm-items="2" data-md-items="3" data-stage-padding="15" data-loop="false" data-margin="30" data-nav="true" class="owl-carousel">
                    <div class="owl-item">
                        <div class="thumbnail-custom"><img src="<?= base_url('homeassets/') ?>images/index-2-370x370.jpg" alt="" width="370" height="370"/>
                            <div class="caption">
                                <div class="h5">-35%</div>
                                <h4>Barcelona</h4>
                                <p>2 nights + Flight + 4*Hotel</p>
                                <div class="h4 price">400</div><a href="<?= base_url('vacation') ?>" data-text="buy a tour" class="btn btn-winona btn-transparent btn-xs">buy a tour</a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="thumbnail-custom"><img src="<?= base_url('homeassets/') ?>images/index-3-370x370.jpg" alt="" width="370" height="370"/>
                            <div class="caption">
                                <div class="h5">-35%</div>
                                <h4>New York</h4>
                                <p>1 night + Flight + 5*Hotel</p>
                                <div class="h4 price">1,600</div><a href="<?= base_url('vacation') ?>" data-text="buy a tour" class="btn btn-winona btn-transparent btn-xs">buy a tour</a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="thumbnail-custom"><img src="<?= base_url('homeassets/') ?>images/index-4-370x370.jpg" alt="" width="370" height="370"/>
                            <div class="caption">
                                <div class="h5">-35%</div>
                                <h4>Los Angeles</h4>
                                <p>3 nights + Flight + 4*Hotel</p>
                                <div class="h4 price">1,100</div><a href="<?= base_url('vacation') ?>" data-text="buy a tour" class="btn btn-winona btn-transparent btn-xs">buy a tour</a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="thumbnail-custom"><img src="<?= base_url('homeassets/') ?>images/index-2-370x370.jpg" alt="" width="370" height="370"/>
                            <div class="caption">
                                <div class="h5">-35%</div>
                                <h4>Barcelona</h4>
                                <p>2 nights + Flight + 4*Hotel</p>
                                <div class="h4 price">400</div><a href="<?= base_url('vacation') ?>" data-text="buy a tour" class="btn btn-winona btn-transparent btn-xs">buy a tour</a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="thumbnail-custom"><img src="<?= base_url('homeassets/') ?>images/index-3-370x370.jpg" alt="" width="370" height="370"/>
                            <div class="caption">
                                <div class="h5">-35%</div>
                                <h4>New York</h4>
                                <p>1 night + Flight + 5*Hotel</p>
                                <div class="h4 price">1,600</div><a href="<?= base_url('vacation') ?>" data-text="buy a tour" class="btn btn-winona btn-transparent btn-xs">buy a tour</a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="thumbnail-custom"><img src="<?= base_url('homeassets/') ?>images/index-4-370x370.jpg" alt="" width="370" height="370"/>
                            <div class="caption">
                                <div class="h5">-35%</div>
                                <h4>Los Angeles</h4>
                                <p>3 nights + Flight + 4*Hotel</p>
                                <div class="h4 price">1,100</div><a href="<?= base_url('vacation') ?>" data-text="buy a tour" class="btn btn-winona btn-transparent btn-xs">buy a tour</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell-xs-12 offset-top-50 text-center"><a href="<?= base_url('vacation') ?>" data-text="All offers" class="btn btn-xs btn-winona btn-transparent-2">All offers</a></div>
            </div>
        </div>
    </section>
    <!--Section Popular Destinations-->
    <section>
        <div class="shell-fluid inset-left-0 inset-right-0">
            <div class="range range-condensed">
                <div class="cell-md-6 bg-primary text-center section-flex cell-md-push-6 section-40 section-md-0">
                    <h2>Most Popular Destinations</h2><a href="destinations.html" class="btn-link tt-u offset-top-21 reveal-inline-block">all Destinations</a>
                </div>
                <div class="cell-xs-6 cell-sm-4 cell-md-3 cell-md-push-1">
                    <div class="thumbnail-custom-2"><img src="<?= base_url('homeassets/') ?>images/index-5-512x270.jpg" alt="" width="512" height="270"/>
                        <div class="caption">
                            <div class="h4"><a href="<?= base_url('vacation') ?>"><span>H</span><span>a</span><span>v</span><span>a</span><span>n</span><span>a</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="cell-xs-6 cell-sm-4 cell-md-3 cell-md-push-2">
                    <div class="thumbnail-custom-2"><img src="<?= base_url('homeassets/') ?>images/index-6-512x270.jpg" alt="" width="512" height="270"/>
                        <div class="caption">
                            <div class="h4"><a href="<?= base_url('vacation') ?>"><span>B</span><span>a</span><span>l</span><span>i</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="cell-xs-6 cell-sm-4 cell-md-3 cell-md-push-3">
                    <div class="thumbnail-custom-2"><img src="<?= base_url('homeassets/') ?>images/index-7-512x270.jpg" alt="" width="512" height="270"/>
                        <div class="caption">
                            <div class="h4"><a href="<?= base_url('vacation') ?>"><span>M</span><span>a</span><span>d</span><span>a</span><span>g</span><span>a</span><span>s</span><span>c</span><span>a</span><span>r</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="cell-xs-6 cell-sm-4 cell-md-3 cell-md-push-4">
                    <div class="thumbnail-custom-2"><img src="<?= base_url('homeassets/') ?>images/index-8-512x270.jpg" alt="" width="512" height="270"/>
                        <div class="caption">
                            <div class="h4"><a href="<?= base_url('vacation') ?>"><span>T</span><span>u</span><span>r</span><span>k</span><span>e</span><span>y</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="cell-xs-6 cell-sm-4 cell-md-3 cell-md-push-5">
                    <div class="thumbnail-custom-2"><img src="<?= base_url('homeassets/') ?>images/index-9-512x270.jpg" alt="" width="512" height="270"/>
                        <div class="caption">
                            <div class="h4"><a href="<?= base_url('vacation') ?>"><span>L</span><span>o</span><span>s</span><span>&#160;</span><span>A</span><span>n</span><span>g</span><span>e</span><span>l</span><span>e</span><span>s</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="cell-xs-6 cell-sm-4 cell-md-3 cell-md-push-7">
                    <div class="thumbnail-custom-2"><img src="<?= base_url('homeassets/') ?>images/index-10-512x270.jpg" alt="" width="512" height="270"/>
                        <div class="caption">
                            <div class="h4"><a href="<?= base_url('vacation') ?>"><span>C</span><span>a</span><span>n</span><span>c</span><span>u</span><span>n</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="cell-xs-6 cell-sm-4 cell-md-3 cell-md-push-8">
                    <div class="thumbnail-custom-2"><img src="<?= base_url('homeassets/') ?>images/index-11-512x270.jpg" alt="" width="512" height="270"/>
                        <div class="caption">
                            <div class="h4"><a href="<?= base_url('vacation') ?>"><span>S</span><span>e</span><span>y</span><span>c</span><span>h</span><span>e</span><span>l</span><span>l</span><span>e</span><span>s</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="cell-xs-6 cell-sm-4 cell-md-3 cell-md-push-9">
                    <div class="thumbnail-custom-2"><img src="<?= base_url('homeassets/') ?>images/index-12-512x270.jpg" alt="" width="512" height="270"/>
                        <div class="caption">
                            <div class="h4"><a href="<?= base_url('vacation') ?>"><span>E</span><span>g</span><span>y</span><span>p</span><span>t</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="cell-xs-6 cell-sm-4 cell-md-3 cell-md-push-10">
                    <div class="thumbnail-custom-2"><img src="<?= base_url('homeassets/') ?>images/index-13-512x270.jpg" alt="" width="512" height="270"/>
                        <div class="caption">
                            <div class="h4"><a href="<?= base_url('vacation') ?>"><span>M</span><span>o</span><span>r</span><span>o</span><span>c</span><span>c</span><span>o</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="cell-xs-6 cell-sm-4 cell-md-3 cell-md-push-11">
                    <div class="thumbnail-custom-2"><img src="<?= base_url('homeassets/') ?>images/index-14-512x270.jpg" alt="" width="512" height="270"/>
                        <div class="caption">
                            <div class="h4"><a href="<?= base_url('vacation') ?>"><span>I</span><span>t</span><span>a</span><span>l</span><span>y</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section Most popular Cruises-->
    <section class="section-71 section-bottom-80">
        <div class="shell">
            <h2 class="text-center">most popular Cruises</h2>
            <div class="range">
                <!-- Owl Carousel-->
                <div data-items="1" data-xs-items="1" data-sm-items="2" data-md-items="3" data-stage-padding="15" data-loop="false" data-margin="30" data-nav="true" class="owl-carousel">
                    <div class="owl-item">
                        <div class="thumbnail-custom thumbnail-custom-variant-1"><img src="<?= base_url('homeassets/') ?>images/index-15-370x370.jpg" alt="" width="370" height="370"/>
                            <div class="caption">
                                <div class="h5">-35%</div>
                                <h4>Princess Cruises</h4>
                                <p>5 nights / 6 days</p>
                                <div class="h4 price">1,285</div><a href="<?= base_url('bahamas_cruises') ?>" data-text="buy a tour" class="btn btn-winona btn-transparent btn-xs">buy a tour</a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="thumbnail-custom thumbnail-custom-variant-1"><img src="<?= base_url('homeassets/') ?>images/index-16-370x370.jpg" alt="" width="370" height="370"/>
                            <div class="caption">
                                <div class="h5">-35%</div>
                                <h4>Princess Consuella</h4>
                                <p>5 nights / 6 days</p>
                                <div class="h4 price">4,285</div><a href="<?= base_url('bahamas_cruises') ?>" data-text="buy a tour" class="btn btn-winona btn-transparent btn-xs">buy a tour</a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="thumbnail-custom thumbnail-custom-variant-1"><img src="<?= base_url('homeassets/') ?>images/index-17-370x370.jpg" alt="" width="370" height="370"/>
                            <div class="caption">
                                <div class="h5">-35%</div>
                                <h4>Legend Cruises</h4>
                                <p>5 nights / 6 days</p>
                                <div class="h4 price">1,985</div><a href="<?= base_url('bahamas_cruises') ?>" data-text="buy a tour" class="btn btn-winona btn-transparent btn-xs">buy a tour</a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="thumbnail-custom thumbnail-custom-variant-1"><img src="<?= base_url('homeassets/') ?>images/index-15-370x370.jpg" alt="" width="370" height="370"/>
                            <div class="caption">
                                <div class="h5">-35%</div>
                                <h4>Princess Cruises</h4>
                                <p>5 nights / 6 days</p>
                                <div class="h4 price">1,285</div><a href="<?= base_url('bahamas_cruises') ?>" data-text="buy a tour" class="btn btn-winona btn-transparent btn-xs">buy a tour</a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="thumbnail-custom thumbnail-custom-variant-1"><img src="<?= base_url('homeassets/') ?>images/index-16-370x370.jpg" alt="" width="370" height="370"/>
                            <div class="caption">
                                <div class="h5">-35%</div>
                                <h4>Princess Consuella</h4>
                                <p>5 nights / 6 days</p>
                                <div class="h4 price">4,285</div><a href="<?= base_url('bahamas_cruises') ?>" data-text="buy a tour" class="btn btn-winona btn-transparent btn-xs">buy a tour</a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="thumbnail-custom thumbnail-custom-variant-1"><img src="<?= base_url('homeassets/') ?>images/index-17-370x370.jpg" alt="" width="370" height="370"/>
                            <div class="caption">
                                <div class="h5">-35%</div>
                                <h4>Legend Cruises</h4>
                                <p>5 nights / 6 days</p>
                                <div class="h4 price">1,985</div><a href="<?= base_url('bahamas_cruises') ?>" data-text="buy a tour" class="btn btn-winona btn-transparent btn-xs">buy a tour</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell-xs-12 offset-top-50 text-center"><a href="<?= base_url('cruises') ?>" data-text="All cruises" class="btn btn-xs btn-winona btn-transparent-2">All cruises</a></div>
            </div>
        </div>
    </section>
    <!--Section Testimonials-->
    <section class="section-71 section-bottom-80 bg-primary">
        <div class="shell">
            <h2 class="text-center">What Our Customers Say?</h2>
            <div class="range">
                <div class="cell-md-6">
                    <div class="unit unit-xs unit-xs-horizontal unit-spacing-xs">
                        <div class="unit-left">
                            <div class="round img-auto"><img src="<?= base_url('homeassets/') ?>images/index-18-84x84.jpg" alt="" width="84" height="84" class="round-green"></div>
                        </div>
                        <div class="unit-body">
                            <blockquote class="quote">
                                <p>
                                    <q>"I will use Fun Travel again! I've told all my friends how great these guys are and how great is the service they provide."</q>
                                </p>
                                <p>
                                    <cite>- Monica</cite>
                                    <time datetime="2016">20.09.2015</time>
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="cell-md-6 offset-top-50 offset-md-top-0">
                    <div class="unit unit-xs unit-xs-horizontal unit-spacing-xs">
                        <div class="unit-left">
                            <div class="round img-auto"><img src="<?= base_url('homeassets/') ?>images/index-19-84x84.jpg" alt="" width="84" height="84" class="round-green"></div>
                        </div>
                        <div class="unit-body">
                            <blockquote class="quote">
                                <p>
                                    <q>"We had an unforgettable Travel experience with Fun travel. Great personalized service! Do not hesitate to use Fun travel. Highly recommend."</q>
                                </p>
                                <p>
                                    <cite>- Chandler</cite>
                                    <time datetime="2016">28.09.2018</time>
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="cell-xs-12 text-center offset-top-50"><a href="<?= base_url('testimonials') ?>" data-text="All Testimonials" class="btn btn-xs btn-winona btn-orange-3">All Testimonials</a></div>
            </div>
        </div>
    </section>
</main>