@if(isset($courses) && (count($courses) > 0))
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">{{ __('Courses') }}</h6>
            <h1 class="mb-5">{{ __('Popular Courses') }}</h1>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach ($courses as $course)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="{{ route('courses.show', $course->id) }}" class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ \App\Utils\ImageUtil::setImage( $course->photo, 'uploads/course/') }}" alt="{{ $course->heading }}">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="{{ route('courses.show', $course->id) }}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">{{ __('Read More') }}</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"><a href="{{ route('courses.show', $course->id) }}" class="text-dark">{{ \Str::limit($course->heading, 50, '...') }}</a></h5>
                            {{-- <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small></small>
                            </div>
                            <h3 class="mb-0">{{ $course->amount }}</h3> --}}
                        </div>
                        {{-- <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-user-tie text-primary me-2"></i>{{ __('John Doe') }}</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30
                                Students</small>
                        </div> --}}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endif
