<div class="row">
    <div class="mx-3">
        <div class="mt-3 mb-3">
            <div class="card rounded">
                <a href="{{ route('womens.show', $women->id) }}">
                    <img class="card-img rounded square-img" src="{{ url($women->profile_photo_url) }}" alt="">
                </a>
                <div class="card-img-overlay">
                    <a href="#" class="text-dark">
                        <img src="http://localhost/storage/event_image/ボイス2.png" class="option3-img" alt="">
                    </a>
                </div>
            </div>
            <h3 class="mb-0">
                <a href="{{ route('womens.show', $women->id) }}" class="">{{ $women->name }}</a>
            </h3>
            <h6 style="color: #666666;">癒やし系</h6>
            <h6 class="text-success">●待機中</h6>
            <h6 class="font-weight-bold ">¥800/30分</h6>
            <h6 style="color: #666666" class=" overflow-hidden">{{ Str::limit($women->profile, 40) }}</h6>
        </div>
    </div>
</div>
