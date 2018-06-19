@push('styles')
    <link rel="stylesheet" href="{{ mix('/vendor/shariff/shariff.css') }}">
@endpush
<div class="shariff"
        data-backend-url="{{ isset($backend) ? $backend : route('shariff.backend')}}"
        data-button-style="{{ isset($style) ? $style : config('shariff.style') }}"
        data-orientation="{{ isset($orientation) ? $orientation : config('shariff.orientation') }}"
        data-services="&quot;{{ implode("&quot;,&quot;", isset($buttons) ? $buttons : config('shariff.buttons')) }}&quot;"
        data-theme="{{ isset($theme) ? $theme : config('shariff.theme') }}"
        data-title="{{ isset($title) ? $title : config('app.name') }}"
        data-url="{{ isset($url) ? $url : Request::url() }}"
></div>