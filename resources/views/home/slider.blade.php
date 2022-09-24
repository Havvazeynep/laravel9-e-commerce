<!-- Carousel Start -->
<div class="container-fluid mb-3">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($sliderdata as $key=>$rs) 
                    
                    <li data-target="#header-carousel" data-slide-to="{{$key}}" @if ($key==0) class="active" @endif></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach($sliderdata as $key=>$rs)
                    <div class="carousel-item position-relative @if ($key==0) active @endif" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="{{Storage::url($rs->image)}}" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">{{$rs->title}}</h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="{{route('product',['id'=>$rs->id])}}">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="{{asset('/')}}assets/img/slider-ek-1.jpg" alt="">
                <div class="offer-text"><br><br><br><br><br>
                    <a href="{{route('shop')}}" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="{{asset('/')}}assets/img/slider-ek-2.jpg" alt="">
                <div class="offer-text"><br><br><br><br><br>
                    <a href="{{route('shop')}}" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->