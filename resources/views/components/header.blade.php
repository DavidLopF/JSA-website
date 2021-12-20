<header class="is-full header" id="inicio">
    @component('components.navInicio')
    @endcomponent

        <div id="carouselExampleControls" class="carousel slide capa2 carrouserl-home" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <figure class="image is-16by9">
                        <img class="image-home"
                             src="{{asset('images/home/banner.jpg')}}">
                    </figure>

                </div>
                <div class="carousel-item">
                    <figure class="image is-16by9">
                        <img class="image-home"
                             src="{{asset('images/home/banner-2.jpg')}}">
                    </figure>

                </div>
                <div class="carousel-item">
                    <figure class="image is-16by9">
                        <img class="image-home"
                             src="{{asset('images/home/banner-3.jpg')}}">
                    </figure>

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


</header>






