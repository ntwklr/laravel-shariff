<div class="shariff" data-backend-url="{{ route('shariff.backend') }}"
        data-url="{{ isset($url) ? $url : Request::url() }}"
        data-theme="{{ isset($theme) ? $theme : config('shariff.theme') }}"
        data-orientation="{{ isset($orientation) ? $orientation : config('shariff.orientation') }}"
        data-services="&quot;{{ implode("&quot;,&quot;", isset($buttons) ? $buttons : config('shariff.buttons')) }}&quot;"
        data-title="{{ isset($title) ? $title : config('app.name') }}"
></div>