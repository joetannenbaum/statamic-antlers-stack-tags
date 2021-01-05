# Antlers Stack Tags for Statamic

Provides `stack` tags for Antlers templates in Statamic. Works very similarly to [Blade stack directives](https://laravel.com/docs/8.x/blade#stacks):

Push a script onto the `scripts` stack:

```html
{{ push:scripts }}
<script
    src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
    defer
></script>
{{ /push:scripts }}
```

Prepend a script onto the `scripts` stack:

```html
{{ prepend:scripts }}
<script
    src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
    defer
></script>
{{ /prepend:scripts }}
```

Push a script onto the `scripts` stack, but only do it once (similar to [Blade once directive](https://laravel.com/docs/8.x/blade#the-once-directive)):

```html
{{ push:scripts once="true }}
<script
    src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
    defer
></script>
{{ /push:scripts }}
```

Output stack:

```html
{{ stack:scripts }}
```

Stacks can be named anything and you can have as many stacks as you want.
