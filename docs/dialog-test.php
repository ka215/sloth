<?php
$_is_dev = boolval( filter_input( INPUT_GET, 'dev' ) );
$_ary = explode( 'sloth', __DIR__ );
$_abs_path = rtrim( array_shift( $_ary ), '\\' );
$current_year = (int) date( 'Y' );
$sloth_dist_path = $_is_dev ? '/sloth/dist/sloth.min.css' : '/sloth/docs/assets/sloth.min.css';
$sloth_ext_script_path = $_is_dev ? '/sloth/dist/sloth.extension.js' : '/sloth/docs/assets/sloth.extension.min.js';
$ajax_path = $_is_dev ? './ajax.php' : 'https://ka2.org/sloth/ajax.php';
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Dialog | Sloth</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php /* link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" */ ?>
  <link rel="stylesheet" href="<?= sprintf( '%s?v=%s', $sloth_dist_path, filemtime( $_abs_path . $sloth_dist_path ) ); ?>">
  <link rel="shortcut icon" href="assets/sloth.ico" type="image/x-icon">
</head>
<body class="sloth" data-dialog-effect="1" data-dialog-button="outline">
  <section class="m2">
    <h2>Dialog</h2>
    <aside>
      <p><code>data-toggle="dialog"</code></p>
      The dialog window is automatically usable when enables sloth extensions. Then you should add a <code>data-toggle="dialog"</code> attribute to any tags that you want to open the dialog window when clicking.<br>
      Note that you can bind the dialog window to an only click event when you are mark-upping in the HTML. On the other hand, you can fire via <code>showDialog()</code> of global scope function from all catchable events too if using JavaScript.<br>
      You can define the inner contents on the dialog by <code>data-title</code> , <code>data-content</code> , and <code>data-foot</code> attributes within the tag that has the <code>data-toggle</code> attribute. Also by a <code>data-effect</code> attribute, you can switch transition animation type when shows and hides the dialog.<br>
      Furthermore, it is able to define the dialog's default setting as optional in the body tag. Those are a <code>data-dialog-effect</code> attribute as defaults to transition animation type, and a <code>data-dialog-button</code> attribute as defaults to button style on the dialog's footer.<br>
      The dialog is also possible to read JSON format content asynchronously from an external URL or to assign a callback to button event on the opened dialog.<br>
    </aside>
    <div class="flx-row flx-wrap mt1">
      <div class="mb1" data-switch-class="sm:w-full,md:w-half,lg:w-half">
        <p class="mb1"><a href="javascript:;" data-toggle="dialog" data-title="Dialog's Headline" data-content="Dialog's Content Body" data-foot="Click Me!">Open Dialog</a></p>
        <p class="mb1"><a href="javascript:;" data-toggle="dialog" data-title="Retrieved Content Via Ajax" data-content="{remote:'get',url:'<?= $ajax_path; ?>?p=terms'}">Fetch Content Via Ajax</a></p>
        <p class="mb1"><a href="javascript:;" data-toggle="dialog" data-title="Wait a little!" data-content="{remote:'get',url:'<?= $ajax_path; ?>?p=test'}">Show loader when delay fetching</a></p>
        <p class="mb1"><a href="javascript:;" data-toggle="dialog" data-title="Re-init extention" data-content="{remote:'get',url:'<?= $ajax_path; ?>?p=test2'}">Init this extenstion scripts again after fetched content</a></p>
        <p class="mb1"><a href="javascript:;" data-toggle="dialog" data-title="Lazy loading" data-content="{remote:'get',url:'<?= $ajax_path; ?>?p=lazyloading'}">Lazy loading image</a></p>
        <div class="inline flx-around mb1">
          <button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 1" data-content="Fade in and scale up (default effect)" data-foot="" data-effect="1">Type 1</button>
          <button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 2" data-content="Slide from the right" data-foot="" data-effect="2">Type 2</button>
          <button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 3" data-content="Slide from the bottom" data-foot="" data-effect="3">Type 3</button>
          <button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 4" data-content="Slide and stick to top" data-foot="" data-effect="4">Type 4</button>
          <button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 5" data-content="Fade in and shrink to full width wide" data-foot="" data-effect="5">Type 5</button>
        </div>
        <p class="mb1"><span onmouseover="showDialog('title', 'body', 'Hi!', 2)">Try hover on this text</span></p>
      </div>
      <div class="mb1" data-switch-class="sm:w-full,md:w-half,lg:w-half">
        <pre class="prettyprint"><code>&lt;a href="" data-toggle="dialog" data-title="Dialog's Headline" data-content="Dialog's Content Body" data-foot="Click Me!">Open Dialog&lt;/a>
&lt;a href="" data-toggle="dialog" data-title="Retrieved Content Via Ajax" data-content="{remote:'get',url:'/ajax_url/?query=param'}" rel="external">Fetch Content Via Ajax&lt;/a>
&lt;div class="inline mb1">
  &lt;button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 1" data-content="Fade in and scale up (default effect)" data-effect="1">Type 1&lt;/button>
  &lt;button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 2" data-content="Slide from the right" data-effect="2">Type 2&lt;/button>
  &lt;button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 3" data-content="Slide from the bottom" data-effect="3">Type 3&lt;/button>
  &lt;button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 4" data-content="Slide and stick to top" data-effect="4">Type 4&lt;/button>
  &lt;button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 5" data-content="Fade in and shrink to full width wide" data-effect="5">Type 5&lt;/button>
&lt;/div>
&lt;span onmouseover="showDialog('title', 'body', 'Hi!', 2)">Try hover on this text&lt;/span>
</code></pre>
      </div>
    </div>
    <aside>
      <label>Dialog Options</label>
      <table class="slim">
        <thead>
          <tr><th></th><th>Type</th><th>showDialog()</th><th>Description</th></tr>
        </thead>
        <tbody>
          <tr>
            <th>data-title</th><td>String</td><td>argument 1</td><td>Allows strings containing HTML tags.</td>
          </tr>
          <tr>
            <th>data-content</th><td>String | Object</td><td>argument 2</td><td>
              Static text or JavaScript object-like key-value pair type string. When calling via the showDialog() function, you can specify the object directly.<br>
              There is directly displayed as HTML to the body on the dialog when it is the static string that is not able to parse to object.<br>
              On the other hands, there is allowed the properties as follows when that is an object. Their are the "<b>remote</b>" as a fetching method, the "<b>url</b>" to fetch content, and the "<b>loader</b>" as displayed while async fetching.
            </td>
          </tr>
          <tr>
            <th>data-foot</th><td>String | Object</td><td>argument 3</td><td>
              Static text or JavaScript object-like key-value pair type string. When calling via the showDialog() function, you can specify the object directly.<br>
              That becomes a display name of button on the dialog footer if it is defined static text.<br>
              On the other hands, there is allowed the properties as follows when that is an object. There are the "<b>class</b>" as an attribute of dialog's footer button, the "<b>label</b>" as a display name that button, and the "<b>callback</b>" as a calling function before hiding the dialog.
            </td>
          </tr>
          <tr>
            <th>data-effect</th><td>Number | String</td><td>argument 4</td><td>Index number of transition animation type (1 to 4) or animation type preset name.</td>
          </tr>
        </tbody>
      </table>
    </aside>
    <small class="note">At more detail of about dialog window, please see below <a href="#sloth-extensions-demo">demo</a>.</small>
  </section>
  <script async src="<?= sprintf( '%s?v=%s', $sloth_ext_script_path, filemtime( $_abs_path . $sloth_ext_script_path ) ); ?>"></script>
</body>
</html>
