@php

    $category1 = $categories->first();
    $category2= $categories->skip(1)->first();
    $category3 = $categories->skip(2)->first();
    $category4 = $categories->skip(3)->first();
    //$category5 = $categories->skip(1)->first();

@endphp

<div class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h6 class="section-title bg-white text-center text-primary px-3">
                {{ __('Course Categories') }}</h6>
            <h1 class="mb-5">{{ __('Courses Categories') }}</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    @isset($category1)
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                        <a class="position-relative d-block overflow-hidden" href="{{ route('courses.category_wise', $category1->id) }}">
                            {{-- <img class="img-fluid" src="{{ asset('uploads/course-category/' . $category1->image) }}" alt="" style="height: 284px; width: 665px;"> --}}
                            <img class="img-fluid" src="{{ \App\Utils\ImageUtil::setImage($category1->image, 'uploads/course-category') }}" alt="" style="height: 284px; width: 665px;">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">{{ $category1->name }}</h5>
                                <small class="text-primary">{{ $category1->courses_count}} {{ __('Courses') }}</small>
                            </div>
                        </a>
                    </div>
                    @endisset
                    @isset($category2)
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                        <a class="position-relative d-block overflow-hidden" href="{{ route('courses.category_wise', $category2->id) }}">
                            <img class="img-fluid" src="{{ \App\Utils\ImageUtil::setImage($category2->image, 'uploads/course-category') }}" alt="" style="height: 216px; width: 325px;">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">{{ $category2->name }}</h5>
                                <small class="text-primary">{{ $category2->courses_count }} {{ __('Courses') }}</small>
                            </div>
                        </a>
                    </div>
                    @endisset
                    @isset($category3)
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
                        <a class="position-relative d-block overflow-hidden" href="{{ route('courses.category_wise', $category3->id) }}">
                            <img class="img-fluid" src="{{ \App\Utils\ImageUtil::setImage($category3->image, 'uploads/course-category') }}" alt="" style="height: 216px; width: 325px;">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">{{ $category3->name }}</h5>
                                <small class="text-primary">{{ $category3->courses_count }} {{ __('Courses') }}</small>
                            </div>
                        </a>
                    </div>
                    @endisset
                </div>
            </div>
            @isset($category4)
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px; visibility: visible; animation-delay: 0.7s; animation-name: zoomIn;">
                <a class="position-relative d-block h-100 overflow-hidden" href="{{ route('courses.category_wise', $category4->id) }}">
                    <img class="img-fluid position-absolute w-100 h-100" src="{{ \App\Utils\ImageUtil::setImage($category4->image, 'uploads/course-category') }}" alt="" style="object-fit: cover;">
                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                        <h5 class="m-0">{{ $category4->name }}</h5>
                        <small class="text-primary">{{ $category4->courses_count}} {{ __('Courses') }}</small>
                    </div>
                </a>
            </div>
            @endisset
        </div>
    </div>
</div>
