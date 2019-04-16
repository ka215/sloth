# Sloth

Mobile-first Micro CSS Framework that has reduced styling coding costs to a minimum with non-BEM and simpler naming conventions than OOCSS.

The Sloth is lightweight as it saves the effort to rely on the legacy browser. Also, the Sloth can use advanced styling technology that utilizes flexbox, grid, CSS variables, and limited vendor prefixes.

The Sloth supports SCSS and postCSS, and you can customize your build with the included gulp file. Then the Sloth is providing at only distributed css file without dependenting JavaScript.

**10.08kB gzipped** at this time.

## Installation



Or, you can clone the source:
```
$ git clone https://github.com/ka215/sloth.git
```

## Usage

The Sloth provides one CSS file `sloth.min.css` that minified. In order to use one, you can add a `<link>` in your `<head>`.
```
<!doctype html>
<html>
<head>
  ︙
  <link rel="stylesheet" href="/path/to/sloth/dist/sloth.min.css">
  ︙
</head>
<body>
  ︙
</body>
</html>
```

### Markup

Marking up in the Sloth style is very easy. Basically, you can complete most of your work simply by declaring the `.sloth` class to the parent element you want to apply style to.

You can apply the Sloth style on the entire page by assigning the `.sloth` class to the `<body>` element.
```
<body class="sloth">
 ︙
</body>
```

Alternatively, it is possible to apply the Sloth style only within a specific element as shown below.

```
<div class="sloth">
 ︙
</div>
```

Also, by using the `.nons` class in the element to which the Sloth style is applied, it is possible to exclude only a specific element from the Sloth style application.
```
<body class="sloth">
   ︙
  <h1 class="nons">Not Sloth Styled headline</h1>
   ︙
</body>
```

## Documentation

You would prefer to see the following URL for a list of all elements and components expressed in the Sloth style.

<https://ka2.org/sloth/>

## Contributions

1. Fork it
2. Welcome new pull request

## Creators

**ka2 (Katsuhiko Maeno)**

-   <https://ka2.org/>

Your donations for supporting the Sloth style will help me.

Donate URL:  <https://ka215.github.io/sloth/donation.html>

## Special Thanks

Thanks to Our Contributors and Sponsors.

- "[Normalize.css](https://github.com/necolas/normalize.css)" and "[Bootstrap-reboot.css](https://github.com/twbs/bootstrap/blob/v4-dev/dist/css/bootstrap-reboot.css)" for the foundation.
- Inspired by the "[Furtive](https://github.com/johno/furtive)".
- Inspired by the "[@mallendeo](https://codepen.io/mallendeo/pen/eLIiG)".

## Copyright and license

Code and documentation copyright 2019 the  [ka2](https://ka2.org/). Code released under the  [MIT License](https://raw.githubusercontent.com/ka215/sloth/master/LICENSE).
