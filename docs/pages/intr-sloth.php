<?php
$sloth_version = get_globals( 'sloth_version' );
$compressed_css_size = get_globals( 'compressed_css_size' );
$compressed_js_size = get_globals( 'compressed_js_size' );
?>
<div id="key-visual">
  <h1 class="nons"><img src="<?= optimize_uri( 'assets/sloth.svg' ); ?>" height="58" class="mr1">Sloth</h1>
  <p class="nons">
    Mobile-first Lightweight CSS Framework that has reduced styling coding costs to a minimum with non-BEM and simpler naming conventions than OOCSS.<br>
  </p>
  <button type="button" class="outline clr-prim" onclick="javascript:location.href='https://github.com/ka215/sloth';"><i class="fab fa-github"></i> github</button>
  <div>
    <small class="muted">Latest Version: <?= $sloth_version; ?></small>
  </div>
<?php if ( ENV === 'prod' ) : ?>
  <div class="ad-block" style="left:0;"><ins class="adsbygoogle"
     style="display:block;width:inherit;height:max-content;"
     data-ad-client="ca-pub-8602791446931111"
     data-ad-slot="6050360069"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins></div>
<?php endif; ?>
</div>
<article id="why-sloth" class="lead-block">
  <h2>Why Sloth?</h2>
  <aside>
    We're tired of complicating the HTML hierarchy to apply the preferred style and marking up several class names broken up into features. The markuping for styling should be simpler and better. This framework was developed for those who want to shirk neglect one's duties, and take the easy way out.<br>
    <br>
    The Sloth is lightweight as it saves the effort to rely on the legacy browser. Also, the Sloth can use advanced styling technology that utilizes flexbox, grid, CSS variables, and limited vendor prefixes.<br>
    <br>
    That supports SCSS and postCSS, and you can customize your build with the included gulp file. Then the Sloth is providing at only distributed css file without dependenting JavaScript.<br>
    <br>
    Finally that file size after gzip compression is <em class="txt-sec"><?= (string) $compressed_css_size ?>kB</em> at this time.
  </aside>
</article>
<article id="get-started" class="lead-block">
  <h2>Get Started Sloth!</h2>
  <aside>
    In order to wake up the sloth, it is necessary to read the built distribution CSS file.
    <div class="flx-row flx-center fnt-sm my1">
      <pre class="prettyprint"><code>&lt;link rel="stylesheet" href="dist/sloth.min.css"&gt;</code></pre>
    </div>
    Marking up in the Sloth style is very easy. Basically, you can complete most of your work simply by declaring the <code class="fnt-sm">.sloth</code> class to the parent element you want to apply style to.
    <div class="flx-row fnt-sm my1">
      <pre class="prettyprint"><code>&lt;body class="sloth"&gt;
<div class="my1 px2">&#x22EE;</div>&lt;/body&gt;</code></pre>
      <div class="mx2 mya">OR</div>
      <pre class="prettyprint"><code>&lt;div class="sloth"&gt;
<div class="my1 px2">&#x22EE;</div>&lt;/div&gt;</code></pre>
    </div>
    Also, if you do not want to apply a style to a specific element in a Sloth style block, specify the <code class="fnt-sm">.nons</code> class in the not sloth style declaration.
    <div class="flx-row flx-center fnt-sm my1">
      <pre class="prettyprint"><code>&lt;body class="sloth"&gt;
  &lt;h1 class="nons"&gt;Not Sloth Styled headline&lt;/h1&gt;
&lt;/body&gt;</code></pre>
    </div>
  </aside>
</article>
<article id="sloth-extensions" class="lead-block">
  <h2>Sloth Extensions</h2>
  <aside>
    Since Version 1.0.3, added new <a href="javascript:;" data-get-page="exti-desc">extension script for Sloth</a>.<br>
    If you use that script, you can get make an easily advanced form with field validation built, and enable dialog to be popuping.<br>
    If you want to enable this extension, you should be loaded script file as like below.<br>
    <div class="flx-row flx-center fnt-sm my1">
      <pre class="prettyprint"><code>&lt;script async src="dist/sloth.extension.min.js"&gt;&lt;/script&gt;</code></pre>
    </div>
    That script file size after gzip compression is <em class="txt-sec"><?= (string) $compressed_js_size ?>kB</em> at this time.<br>
  </aside>
</article>
<article id="basic-structures" class="lead-block">
  <h2>Basic Structures</h2>
  <aside>
    The sloth style is styled with mobile first. The basic font size changes according to the screen size of the device that is the breakpoint as below.
    <table class="fixed slim cell-center">
      <thead>
        <tr><th></th><th>Small</th><th>Medium</th><th>Large</th></tr>
      </thead>
      <tbody>
        <tr>
          <th>Screen Width</th><td>&lt;= 480px</td><td class="fnt-sm">481px &#x301C; 768px</td><td>&gt;= 769px</td>
        </tr>
        <tr>
          <th>1rem =</th><td>10px</td><td>12px</td><td>14px</td>
        </tr>
        <tr>
          <th>Base Font-size</th><td>1.4rem<br><small>(=14px)</small></td><td>1.1667rem<br><small>(≒14px)</small></td><td>1.1429rem<br><small>(≒16px)</small></td>
        </tr>
      </tbody>
    </table>
    Also, you can override custom base font-size via CSS variables as below.
    <div class="flx-col flx-center fnt-sm my1">
      <pre class="prettyprint"><code>:root {
  /* Set same sizes on all device screen */
  --base-font-size-sm: 1.4rem;    /* = 14px */
  --base-font-size-md: 1.1667rem; /* = 14px */
  --base-font-size-lg: 1rem;      /* = 14px */
}
</code></pre>
      <small class="note">It does not work in browsers like Internet Explorer etc which do not correspond to the CSS variables (<code>var()</code>).</small>
    </div>
  </aside>
</article>
