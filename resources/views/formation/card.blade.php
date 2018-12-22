<div class="col-12 col-md-6 px-25">
        <div class="course-content">
            <figure class="course-thumbnail">
                <a href="#"><img src="{{asset('images\formations\\').$formation->image}}" alt="{{$formation->name}}"></a>
            </figure><!-- .course-thumbnail -->

            <div class="course-content-wrap">
                <header class="entry-header">
                    <h2 class="entry-title"><a href="#">{{$formation->name}}</a></h2>

                    <div class="entry-meta flex flex-wrap align-items-center">
                        <div class="course-date">July 21, 2018</div>
                    </div><!-- .course-date -->
                </header><!-- .entry-header -->

                <footer class="entry-footer flex flex-wrap justify-content-between align-items-center">
                    <div class="course-cost">
                        {{$formation->price}} DH <span class="price-drop">{{$formation->price+1000}} DH</span>
                    </div><!-- .course-cost -->

                    <div class="course-ratings flex justify-content-end align-items-center">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-o"></span>
                    </div><!-- .course-ratings -->
                </footer><!-- .entry-footer -->
            </div><!-- .course-content-wrap -->
        </div><!-- .course-content -->
    </div><!-- .col -->