<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <a href="/" title="{{ __('misc.home_alt') }}" alt="{{ __('misc.home_alt') }}">
            <h1><button class="btn btn-primary btn-lg">{{ __('misc.homepage_title') }}</button></h1>
        </a>
        {{ $introduction_text ?? '' }}
    </div>
</div>
