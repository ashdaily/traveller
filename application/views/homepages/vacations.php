<!-- Page Content-->
<main class="page-content"> 
    <section class="section-sm-95 bg-image bg-image-1 text-center section-sm-bottom-100 section-60">
        <div class="shell text-center">
            <h1 class="txt-white">Travel packages</h1>
            <p class="font-sec txt-white offset-top-6">Search by location or vacation type. Your dream vacation is just a click away!</p>
            <div class="range">
                <div class="cell-lg-8 cell-lg-preffix-2">
                    <!-- RD Mailform-->
                    <form class="rd-mailform text-left form-search">
                        <p class="small pull-xs-right">Searching for Hotel + Flight +Car</p>
                        <div class="range">
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
                                    <input id="datetimepicker1" type="text" data-time-picker="date" placeholder="mm/dd/yyyy" class="form-control"><span class="material-icons-event icon icon-md icon-primary"></span>
                                </div>
                            </div>
                            <div class="cell-sm-6 offset-top-45">
                                <div class="form-group date">
                                    <label for="datetimepicker2" class="form-label">Check out</label>
                                    <input id="datetimepicker2" type="text" data-time-picker="date" placeholder="mm/dd/yyyy" class="form-control"><span class="material-icons-event icon icon-md icon-primary"></span>
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
                            <div class="cell-xs-12 offset-top-37"><a href="#" data-text="search" class="btn btn-orange btn-fullwidth btn-winona btn-sm"><span>search</span></a></div>
                            <div class="cell-xs-12 offset-top-30 text-center"><a href="#" class="btn-link"> Advanced Search</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Section Explore deals by vacation type-->
    <section class="section-71 section-bottom-80">
        <div class="shell text-center">
            <h2>Explore deals by vacation type</h2>
            <div class="h5 txt-primary offset-top-12">Select any type to explore our best deals!</div>
            <div class="range">
                <div class="cell-sm-6 cell-md-4">
                    <div class="thumbnail-custom thumbnail-custom-variant-2"><img src="<?= base_url('homeassets/') ?>images/vacations-1-370x370.jpg" alt="" width="370" height="370"/>
                        <div class="caption">
                            <h4>All-inclusive Vacations</h4><a href="<?= base_url('home/family_vacations') ?>" data-text="read more" class="btn btn-winona btn-transparent btn-xs">read more</a>
                        </div>
                    </div>
                </div>
                <div class="cell-sm-6 cell-md-4 offset-top-30 offset-sm-top-0">
                    <div class="thumbnail-custom thumbnail-custom-variant-2"><img src="<?= base_url('homeassets/') ?>images/vacations-2-370x370.jpg" alt="" width="370" height="370"/>
                        <div class="caption">
                            <h4>Family Vacations</h4><a href="<?= base_url('home/family_vacations') ?>" data-text="read more" class="btn btn-winona btn-transparent btn-xs">read more</a>
                        </div>
                    </div>
                </div>
                <div class="cell-sm-6 cell-md-4 offset-top-30 offset-md-top-0">
                    <div class="thumbnail-custom thumbnail-custom-variant-2"><img src="<?= base_url('homeassets/') ?>images/vacations-3-370x370.jpg" alt="" width="370" height="370"/>
                        <div class="caption">
                            <h4>Adults Only Vacations</h4><a href="<?= base_url('home/family_vacations') ?>" data-text="read more" class="btn btn-winona btn-transparent btn-xs">read more</a>
                        </div>
                    </div>
                </div>
                <div class="cell-sm-6 cell-md-4 offset-top-30">
                    <div class="thumbnail-custom thumbnail-custom-variant-2"><img src="<?= base_url('homeassets/') ?>images/vacations-4-370x370.jpg" alt="" width="370" height="370"/>
                        <div class="caption">
                            <h4>Luxury Vacations</h4><a href="<?= base_url('home/family_vacations') ?>" data-text="read more" class="btn btn-winona btn-transparent btn-xs">read more</a>
                        </div>
                    </div>
                </div>
                <div class="cell-sm-6 cell-md-4 offset-top-30">
                    <div class="thumbnail-custom thumbnail-custom-variant-2"><img src="<?= base_url('homeassets/') ?>images/vacations-5-370x370.jpg" alt="" width="370" height="370"/>
                        <div class="caption">
                            <h4>Cruise Vacations</h4><a href="<?= base_url('home/family_vacations') ?>" data-text="read more" class="btn btn-winona btn-transparent btn-xs">read more</a>
                        </div>
                    </div>
                </div>
                <div class="cell-sm-6 cell-md-4 offset-top-30">
                    <div class="thumbnail-custom thumbnail-custom-variant-2"><img src="<?= base_url('homeassets/') ?>images/vacations-6-370x370.jpg" alt="" width="370" height="370"/>
                        <div class="caption">
                            <h4>Wedding and Honeymoon Vacations</h4><a href="<?= base_url('home/family_vacations') ?>" data-text="read more" class="btn btn-winona btn-transparent btn-xs">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section most popular-->
    <section class="section-71 section-bottom-80 bg-gray-light">
        <div class="shell">
            <h2 class="text-center">most popular</h2>
            <div class="range">
                <!-- Owl Carousel-->
                <div data-items="1" data-xs-items="1" data-sm-items="2" data-md-items="3" data-stage-padding="15" data-loop="false" data-margin="30" data-nav="true" class="owl-carousel">
                    <div class="owl-item">
                        <div class="thumbnail-custom thumbnail-custom-variant-3"><img src="<?= base_url('homeassets/') ?>images/vacations-7-370x370.jpg" alt="" width="370" height="370"/>
                            <div class="caption"><span class="material-icons-star icon icon-xs icon-white"></span><span class="material-icons-star icon icon-xs icon-white"></span><span class="material-icons-star icon icon-xs icon-white"></span><span class="material-icons-star icon icon-xs icon-white"></span>
                                <h4>Secrets Puerto Los Cabos Golf &amp; Spa Resort</h4>
                                <p>3 nights from</p>
                                <div class="h4 price">1,285</div><a href="<?= base_url('home/vacation') ?>" data-text="see more" class="btn btn-winona btn-transparent btn-xs">see more</a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="thumbnail-custom thumbnail-custom-variant-3"><img src="<?= base_url('homeassets/') ?>images/vacations-8-370x370.jpg" alt="" width="370" height="370"/>
                            <div class="caption"><span class="material-icons-star icon icon-xs icon-white"></span><span class="material-icons-star icon icon-xs icon-white"></span><span class="material-icons-star icon icon-xs icon-white"></span>
                                <h4>Santa Lucia Del Palma</h4>
                                <p>4 nights from</p>
                                <div class="h4 price">1,085</div><a href="<?= base_url('home/vacation') ?>" data-text="see more" class="btn btn-winona btn-transparent btn-xs">see more</a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="thumbnail-custom thumbnail-custom-variant-3"><img src="<?= base_url('homeassets/') ?>images/vacations-9-370x370.jpg" alt="" width="370" height="370"/>
                            <div class="caption"><span class="material-icons-star icon icon-xs icon-white"></span><span class="material-icons-star icon icon-xs icon-white"></span><span class="material-icons-star icon icon-xs icon-white"></span><span class="material-icons-star icon icon-xs icon-white"></span>
                                <h4>Palermo de Comatimente</h4>
                                <p>5 nights from</p>
                                <div class="h4 price">885</div><a href="<?= base_url('home/vacation') ?>" data-text="see more" class="btn btn-winona btn-transparent btn-xs">see more</a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="thumbnail-custom thumbnail-custom-variant-3"><img src="<?= base_url('homeassets/') ?>images/vacations-7-370x370.jpg" alt="" width="370" height="370"/>
                            <div class="caption"><span class="material-icons-star icon icon-xs icon-white"></span><span class="material-icons-star icon icon-xs icon-white"></span><span class="material-icons-star icon icon-xs icon-white"></span><span class="material-icons-star icon icon-xs icon-white"></span>
                                <h4>Secrets Puerto Los Cabos Golf &amp; Spa Resort</h4>
                                <p>4 nights from</p>
                                <div class="h4 price">1,285</div><a href="<?= base_url('home/vacation') ?>" data-text="see more" class="btn btn-winona btn-transparent btn-xs">see more</a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="thumbnail-custom thumbnail-custom-variant-3"><img src="<?= base_url('homeassets/') ?>images/vacations-8-370x370.jpg" alt="" width="370" height="370"/>
                            <div class="caption"><span class="material-icons-star icon icon-xs icon-white"></span><span class="material-icons-star icon icon-xs icon-white"></span><span class="material-icons-star icon icon-xs icon-white"></span>
                                <h4>Santa Lucia Del Palma</h4>
                                <p>4 nights from</p>
                                <div class="h4 price">1,085</div><a href="<?= base_url('home/vacation') ?>" data-text="see more" class="btn btn-winona btn-transparent btn-xs">see more</a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="thumbnail-custom thumbnail-custom-variant-3"><img src="<?= base_url('homeassets/') ?>images/vacations-9-370x370.jpg" alt="" width="370" height="370"/>
                            <div class="caption"><span class="material-icons-star icon icon-xs icon-white"></span><span class="material-icons-star icon icon-xs icon-white"></span><span class="material-icons-star icon icon-xs icon-white"></span><span class="material-icons-star icon icon-xs icon-white"></span>
                                <h4>Palermo de Comatimente</h4>
                                <p>5 nights from</p>
                                <div class="h4 price">885</div><a href="<?= base_url('home/vacation') ?>" data-text="see more" class="btn btn-winona btn-transparent btn-xs">see more</a>
                            </div>
                        </div>
                    </div>
                </div>
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
                                    <q>"I will use Fun Travel again! I’ve told all my friends how great these guys are and how great is the service they provide."</q>
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
                                    <q>“We had an unforgettable Travel experience with Fun travel. Great personalized service! Do not hesitate to use Fun travel. Highly recommend."</q>
                                </p>
                                <p>
                                    <cite>- Chandler</cite>
                                    <time datetime="2016">28.09.2015</time>
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="cell-xs-12 text-center offset-top-50"><a href="<?= base_url('home/testimonials') ?>" data-text="All Testimonials" class="btn btn-xs btn-winona btn-orange-3">All Testimonials</a></div>
            </div>
        </div>
    </section>
</main>