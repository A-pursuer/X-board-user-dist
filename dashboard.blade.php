<!DOCTYPE html>
<html lang="">
<head>
  <base href="/theme/{{$theme}}/">
  <meta charset="utf-8" />
  <link href="./favicon.svg" rel="icon" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="#102693" name="theme-color" />
  <link href="./favicon.svg" rel="apple-touch-icon" />
  <title>{{$title}}</title>
  <meta name="description" content="Self-hosted XBoard user portal" />
  <meta name="copyright" content="XBoard contributors" />
  <meta name="repository" content="github.com/A-pursuer/X-board/tree/feature/multi-subscription-v2/user-src" />
  <meta name="robots" content="index,follow" />
  <meta name="author" content="XBoard contributors">
  <script type="module" crossorigin src="./static/js/index.f032329c9de5.js"></script>
  <link rel="modulepreload" crossorigin href="./static/js/react-vendor.7b365462f167.chunk.js">
  <link rel="modulepreload" crossorigin href="./static/js/emotion.8bcbfa345bfd.chunk.js">
  <link rel="modulepreload" crossorigin href="./static/js/mui-core.903a5bbe706d.chunk.js">
  <link rel="modulepreload" crossorigin href="./static/js/state-management.1cc75947a0dd.chunk.js">
  <link rel="modulepreload" crossorigin href="./static/js/animation.2ac06d53578a.chunk.js">
  <link rel="modulepreload" crossorigin href="./static/js/forms.3a1ad1405113.chunk.js">
  <link rel="modulepreload" crossorigin href="./static/js/utils.d12e1f91a38f.chunk.js">
  <link rel="modulepreload" crossorigin href="./static/js/hooks.63b8a6cadc78.chunk.js">
  <link rel="modulepreload" crossorigin href="./static/js/mui-x.b8c02540e8aa.chunk.js">
  <link rel="modulepreload" crossorigin href="./static/js/ui-misc.54648b06f902.chunk.js">
  <link rel="modulepreload" crossorigin href="./static/js/i18n.43886773007d.chunk.js">
  <link rel="modulepreload" crossorigin href="./static/js/antd.d0f67ba82da0.chunk.js">
  <link rel="modulepreload" crossorigin href="./static/js/dev-tools.0d4d823f7ff5.chunk.js">
  <link rel="stylesheet" href="./static/css/index.786e222e9d9f.css">
  <script type="module">try{import.meta.url;import("_").catch(()=>1);}catch(e){}window.__vite_is_modern_browser=true;</script>
  <script type="module">!function(){if(window.__vite_is_modern_browser)return;console.warn("vite: loading legacy build because dynamic import or import.meta.url is unsupported, syntax error above should be ignored");var e=document.getElementById("vite-legacy-polyfill"),n=document.createElement("script");n.src=e.src,n.onload=function(){System.import(document.getElementById('vite-legacy-entry').getAttribute('data-src'))},document.body.appendChild(n)}();</script>

  <script>
    window.settings = {
      title: @json($title),
      description: @json($description),
      logo: @json($logo),
      background_url: @json($theme_config['background_url'] ?? ''),
      api: '',
      i18n: ['zh-CN', 'en-US']
    };
  </script>
</head>
<body>
  <noscript>You need to enable JavaScript to run this app.</noscript>
  <div id="root"></div>
  
  <script>
    window.global = window;
  </script>
  <script nomodule>!function(){var e=document,t=e.createElement("script");if(!("noModule"in t)&&"onbeforeload"in t){var n=!1;e.addEventListener("beforeload",(function(e){if(e.target===t)n=!0;else if(!e.target.hasAttribute("nomodule")||!n)return;e.preventDefault()}),!0),t.type="module",t.src=".",e.head.appendChild(t),t.remove()}}();</script>
  <script nomodule crossorigin id="vite-legacy-polyfill" src="./static/js/polyfills-legacy.6bf0a4f23138.js"></script>
  <script nomodule crossorigin id="vite-legacy-entry" data-src="./static/js/index-legacy.aa064d693ae9.js">System.import(document.getElementById('vite-legacy-entry').getAttribute('data-src'))</script>
  {!! $theme_config['custom_html'] ?? '' !!}
</body>
</html>
