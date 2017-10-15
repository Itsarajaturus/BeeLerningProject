<div class="slide">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{asset('/assets/Image/slide/slide-1.png')}}" alt="Lorem Ipsum" class="img-slide">
            </div>

            <div class="item">
                <img src="{{asset('/assets/Image/slide/slide-2.png')}}" alt="Lorem Ipsum" class="img-slide">
            </div>

            <div class="item">
                <img src="{{asset('/assets/Image/slide/slide-3.png')}}" alt="Lorem Ipsum" class="img-slide">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="slide-footer">
    <div class="slide-footer-up">
    </div>
    <div class="slide-footer-down">
    </div>
</div>