# Manifest module for ProcessWire
by Rudy Affandi (2020)

Manifest is a ProcessWire module that bridges between Twig and Webpack. It also works with Laravel Mix. Manifest will take your `manifest.json` and automatically handles the `<script>` and `<link>` tags on your front-end code output.

If you are using ProCache with CDN, it will handle CDN invalidation via query string method. Make sure to enable it on your CDN settings.

### Installation


### Settings
Go to Manifest module settings to set your `manifest.json` file and your `build` folder location.

### How to use it

#### Initialize it
```
$manifest = $modules->get("Manifest");
```

#### Use it in your template
```
$manifest->css('/css/app.css');
$manifest->js('/js/js.js');
```

Or if you're using twig
```
{{ global.manifest.css('/css/app.css') }}
{{ global.manifest.js('/js/app.js') }}
```

