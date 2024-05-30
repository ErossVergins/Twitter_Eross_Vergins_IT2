@foreach($posts as $post)
<div class="d-flex align-items-start">
    <img style="width:35px" class="me-2 avatar-sm rounded-circle"
        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Bruh"
        alt="Bruh Avatar">
    <div class="w-100">
        <div class="d-flex justify-content-between">
            <h6 class="">{{ $post->user->name }}</h6>
            <small class="fs-6 fw-light text-muted">{{ $post->created_at->diffForHumans() }}</small>
        </div>
        <p class="fs-6 mt-3 fw-light">
            {{ $post->content }}
        </p>
    </div>
</div>
@endforeach