<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <a href="/" title="{{ __('misc.home_alt') }}" alt="{{ __('misc.home_alt') }}">
            <button class="download-button">{{ __('misc.homepage_title') }}</button>
        </a>
        {{ $introduction_text ?? '' }}
    </div>
</div>
