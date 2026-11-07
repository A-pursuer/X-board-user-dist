<!DOCTYPE html>
<html lang="">
<head>
  <base href="/portal-assets/{{$theme}}/">
  <meta charset="utf-8" />
  <link href="./favicon.svg" rel="icon" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="#102693" name="theme-color" />
  <link href="./favicon.svg" rel="apple-touch-icon" />
  <title>{{$title}}</title>
  <meta name="description" content="Account and subscription portal" />
  <meta name="robots" content="noindex,nofollow" />
  <script type="module" crossorigin src="./static/js/index.14760b3e483b.js"></script>
  <link rel="modulepreload" crossorigin href="./static/js/react-vendor.d0d30b5e4991.chunk.js">
  <link rel="modulepreload" crossorigin href="./static/js/emotion.5db2b6b88937.chunk.js">
  <link rel="modulepreload" crossorigin href="./static/js/mui-core.1f5da8bea91d.chunk.js">
  <link rel="modulepreload" crossorigin href="./static/js/state-management.333bb69f2983.chunk.js">
  <link rel="modulepreload" crossorigin href="./static/js/animation.ac18b1783595.chunk.js">
  <link rel="modulepreload" crossorigin href="./static/js/forms.c43d99a33208.chunk.js">
  <link rel="modulepreload" crossorigin href="./static/js/utils.5a10e2fd5701.chunk.js">
  <link rel="modulepreload" crossorigin href="./static/js/hooks.a93ce2323035.chunk.js">
  <link rel="modulepreload" crossorigin href="./static/js/mui-x.b970afee6d30.chunk.js">
  <link rel="modulepreload" crossorigin href="./static/js/ui-misc.e2de0375c238.chunk.js">
  <link rel="modulepreload" crossorigin href="./static/js/i18n.d4275175f2f4.chunk.js">
  <link rel="modulepreload" crossorigin href="./static/js/antd.86d36ba8b720.chunk.js">
  <link rel="modulepreload" crossorigin href="./static/js/dev-tools.a077691d07d5.chunk.js">
  <link rel="stylesheet" href="./static/css/index.171782528e1e.css">
  <script type="module">try{import.meta.url;import("_").catch(()=>1);}catch(e){}window.__vite_is_modern_browser=true;</script>
  <script type="module">!function(){if(window.__vite_is_modern_browser)return;console.warn("vite: loading legacy build because dynamic import or import.meta.url is unsupported, syntax error above should be ignored");var e=document.getElementById("vite-legacy-polyfill"),n=document.createElement("script");n.src=e.src,n.onload=function(){System.import(document.getElementById('vite-legacy-entry').getAttribute('data-src'))},document.body.appendChild(n)}();</script>

  <script>
    window.settings = {
      title: @json($title),
      description: @json($description),
      logo: @json($theme_config['logo_url'] ?? $logo),
      background_url: @json($theme_config['background_url'] ?? ''),
      theme_color: @json($theme_config['theme_color'] ?? ''),
      theme_variant: @json($theme === 'TianYuan-V4' ? 'tianyuan-industrial' : 'xboard-user'),
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
  <script nomodule crossorigin id="vite-legacy-entry" data-src="./static/js/index-legacy.1041df6d331b.js">System.import(document.getElementById('vite-legacy-entry').getAttribute('data-src'))</script>
  {!! $theme_config['custom_html'] ?? '' !!}
</body>
</html>
