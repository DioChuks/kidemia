<div class="main-wrapper">
    <div class="test-box">
        <div class="header-img">
            <img src="{{ asset('images/'.$img) }}" alt="second-img">
        </div>
        <div class="test-body">
            <h1 class="test-title">{{ $title }}</h1>
            <p class="test-subtitle">{{ $subtitle }}</p>
        </div>
        <div class="test-btn">
            <a href="#" class="btn btn-secondary">cancel</a>
            <a href="#{{ $id }}" class="btn btn-primary">continue</a>
        </div>
    </div>
</div>
