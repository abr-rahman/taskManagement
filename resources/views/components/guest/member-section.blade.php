@isset($members)
<div class="container-fluid pt-5">
    <div class="row">
        <section id="cards">
            <div class="pt-2">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <h6 class="section-title bg-white text-center text-primary px-3">{{ __('Members') }}</h6>
                    <h1 class="mb-5">{{ __('Meet the People behind CERRS') }}</h1>
                </div>
                <!-- cards -->
                <div class="owl-carousel my">
                    @foreach($members as $member)
                    <div class="card shadow-sm border-0 h-100 header-main m-2" style="">
                        <div class="card-body">
                            <div class="user-picture float-end mb-3" style="margin-top: -20px;">
                                <img src="{{ \App\Utils\ImageUtil::setImage( $member->image, '/uploads/member') }}"
                                    alt="Not Found" class="shadow-sm rounded-circle" height="130" width="130">
                            </div>
                            <div class="user-content">
                                <h5 class="text-capitalize user-name">{{ $member->name }}</h5>
                                <p class="text-capitalize text-muted small blockquote-footer mt-2" style="color: blue !important;">{{
                                    $member->designation }}</p>
                                <p class="small text-muted mb-0">
                                    {{ Str::limit(\strip_tags($member->description), 300, '...') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- /cards -->
        </section>
    </div>
</div>
@endisset

{{-- <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="news-slider" class="owl-carousel">
                @foreach($members as $member)
                <div class="post-slide">
                    <div class="post-img">
                        <img src="{{ \App\Utils\ImageUtil::setImage( $member->image, '/uploads/member') }}" alt="Not Found"
                            class="" style="width: 100%;height: 360px;object-fit: cover;">
                        <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">
                            <a href="#">{{ $member->name }}</a>
                        </h3>
                        <p class="post-description">
                            {{ Str::limit(\strip_tags($member->description), 300, '...') }}
                        </p>
                        <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                        <a href="#" class="read-more">Read Detail</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div> --}}
