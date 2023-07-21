<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        @foreach ($carousels as $item)
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{ \App\Utils\ImageUtil::setImage($item->image, 'uploads/carousel') }}"
                alt="{{ $item->title }}">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
            {{-- <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                style="background: rgb(24 29 56 / 45%);"> --}}
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h1 class="display-3 text-white animated slideInDown">{{ Str::limit(strtoupper($item->title), 30, '...')  }}</h1>
                            <p class="fs-5 text-white mb-4 pb-2">{{ $item->heading }}</p>
                            @isset($item->buttons)
                                @foreach($item->buttons as $button)
                                <a href="{{ $button['permalink']}}" class="btn btn-{{$button['type'] ?? 'primary'}} py-md-3 mb-2 px-md-5 animated slideInRight">
                                    {{ $button['title']}}
                                </a>
                                @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
