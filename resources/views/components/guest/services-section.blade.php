<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            @foreach($cards as $card)
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="service-item text-center pt-2" style="height: 300px;">
                    <div class="p-4">
                        {{-- <i class="fa-3x {{ $card->icon }} text-primary mb-4"></i> --}}
                        <img src="{{ asset('uploads/cards/'. $card->icon) }}" alt="{{ $card->title }}" style="max-width: 100px !important;">
                        <h5 class="mb-3">{{ \Str::limit($card->title, 50, '...') }}</h5>
                        <p>{{ \Str::limit(strip_tags($card->description), 110, '...') }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
