<section id="components" class="sloth-styles">
  <h3>Components</h3>
  <aside>
    The sloth style has several stylized component styles to easily express rich content.
  </aside>
  <h4 class="line-right txt-prim">vCard</h4>
  <div class="flx-col my2">
    <div class="w-full mb1">
      <div class="vcard">
        <figure>
          <img src="./assets/noimage-300x300.png" width="144" height="144">
          <figcaption>Sloth Style</figcaption>
        </figure>
        <dl>
          <dt>Sloth Style</dt>
          <dd>Mobile First CSS Micro Framework. It has reduced styling coding costs to a minimum with non-BEM and simpler naming conventions than OOCSS.</dd>
          <dd class="footer">
            <a href="javascript:;" class="nons"><i class="fab fa-twitter"></i></a>
            <a href="javascript:;" class="nons"><i class="fab fa-github"></i></a>
          </dd>
        </dl>
      </div>
      <div class="vcard">
        <figure>
          <img src="./assets/noimage-300x300.png" width="96" height="96">
          <figcaption>Sloth Style</figcaption>
        </figure>
        <dl>
          <dt>Sloth Style</dt>
          <dd>Mobile First CSS Micro Framework. It has reduced styling coding costs to a minimum with non-BEM and simpler naming conventions than OOCSS.</dd>
        </dl>
      </div>
      <div class="vcard">
        <figure>
          <img src="./assets/noimage-300x300.png" width="80" height="80">
          <figcaption hidden>Sloth Style</figcaption>
        </figure>
        <dl>
          <dt>Sloth Style</dt>
          <dd>Mobile First CSS Micro Framework. It has reduced styling coding costs to a minimum with non-BEM and simpler naming conventions than OOCSS.</dd>
        </dl>
      </div>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;div class="vcard">
  &lt;figure>
    &lt;img src="images/noimage.png" width="144" height="144">
    &lt;figcaption>Sloth Style&lt;/figcaption>
  &lt;/figure>
  &lt;dl>
    &lt;dt>Sloth Style&lt;/dt>
    &lt;dd>Mobile First CSS Micro Framework. It has reduced styling coding costs to a minimum with non-BEM and simpler naming conventions than OOCSS.&lt;/dd>
    &lt;dd class="footer">
      &lt;a href="javascript:;" class="nons">&lt;i class="fab fa-twitter">&lt;/i>&lt;/a>
      &lt;a href="javascript:;" class="nons">&lt;i class="fab fa-github">&lt;/i>&lt;/a>
    &lt;/dd>
  &lt;/dl>
&lt;/div>
</code></pre>
    </div>
  </div>
  <h4 class="line-right txt-prim">Navigation Menu</h4>
  <aside>This component is header navigation with sliding left side menu that fit on the mobile page. If you want to see demo of below codes on this page, try to switch a toggle.</aside>
  <div class="flx-col my2">
    <div class="w-full mb1">
      <form class="m1">
        <label class="tgl">Toggle navigation menu showing now.
          <input type="checkbox" id="toggle-navi-menu" checked>
          <span class="tgl-btn"></span>
        </label>
      </form>
    </div>
    <div class="w-full mb2">
      <pre class="prettyprint"><code>&lt;header class="navi-menu">
  &lt;div class="slide-l">
    &lt;label class="toggle">
      &lt;input type="checkbox">
      &lt;div class="backdrop">&lt;/div>
      &lt;div class="menu">
        &lt;ul class="unstyled">
          &lt;li class="pr1">&lt;a href="#introduction">&lt;i class="fas fa-home mr1">&lt;/i>HOME&lt;/a>&lt;/li>
          &lt;li class="pr1">&lt;a href="#why-sloth">&lt;i class="fas fa-question mr1">&lt;/i>Why Sloth?&lt;/a>&lt;/li>
          &lt;li class="pr1">&lt;a href="#get-started-sloth">&lt;i class="fab fa-gripfire mr1">&lt;/i>Get Started Sloth!&lt;/a>&lt;/li>
          &lt;li class="pr1">&lt;a href="#basic-structures">&lt;i class="fas fa-chalkboard mr1">&lt;/i> Basic Structures&lt;/a>&lt;/li>
        &lt;/ul>
        &lt;hr>
          &#x22EE;
      &lt;/div>
    &lt;/label>
    &lt;div class="txt-center">
      &lt;a href="#sloth-docs" class="brand">&lt;img src="images/sloth.svg" height="36"> Sloth&lt;/a>
    &lt;/div>
  &lt;/div>
&lt;/header>
</code></pre>
    </div>
    <aside>The moving direction of the slide menu and the position of the toggle switch of this component are able to change to the left or right side on the navigation container.</aside>
    <div class="w-full mb1">
      <form class="m1">
        <label class="tgl">Toggle to navigation menu that has the slide right.
          <input type="checkbox" id="toggle-navi-menu-right">
          <span class="tgl-btn"></span>
        </label>
      </form>
    </div>
    <div class="w-full mb2">
      <pre class="prettyprint"><code>&lt;header class="navi-menu">
  &lt;div class="slide-r">
    &#x22EE;
  &lt;/div>
&lt;/header>
</code></pre>
    </div>
    <small class="note">The above icon uses powered by the <a rel="external" href="https://fontawesome.com/">Font awesome</a>.</small>
    <div class="w-full my2">
      <aside>Also, you can override the height of the horizontal navigation block and the width of the sliding side menu by using CSS variables.</aside>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>:root {
  --navi-height-sm: 56px; /* for mobile screen */
  --navi-height-md: 64px; /* for tablet screen */
  --navi-height-lg: 72px; /* for pc screen */
  --menu-width-sm: 180px; /* for mobile screen */
  --menu-width-md: 200px; /* for tablet screen */
  --menu-width-lg: 240px; /* for pc screen */
}
</code></pre>
    </div>
    <small class="note">It does not work in browsers like Internet Explorer etc which do not correspond to the CSS variables (<code>var()</code>).</small>
    <div class="w-full my2">
      <aside>
        If you want to fix without scrolling the content under the overlay backdrop when it's shown menu, you should add the <code>data-onmenu-fixed="true"</code> attribute to the elements that prevent scrolling. And furthermore, you must remember to need the sloth extension scripts to do one.<br>
        For more information, refer to the <a href="javascript:;" data-get-page="exts-backdrop">Fixed Backdrop</a>.
      </aside>
    </div>
  </div>
  <h4 class="line-right txt-prim">Blockquote</h4>
  <aside></aside>
  <div class="flx-col my2">
    <div class="w-full mb1">
      <blockquote class="bq-oneliner">
        <p>The possession of great power necessarily implies great responsibility.</p>
        <cite>William Lamb</cite>
      </blockquote>
      <blockquote class="bq-oneliner inverse">
        <p>I've learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel.</p>
        <cite>Maya Angelou</cite>
      </blockquote>
      <blockquote class="bq-block">
        <p>We are what we pretend to be, so we must be careful about what we pretend to be.</p>
        <cite>Kurl Vonnegut, Jr.</cite>
      </blockquote>
      <blockquote class="bq-block inverse">
        <p>Because a strong man who has known power all his life may lose respect for that power. But a weak man knows the value of strength. And knows compassion.</p>
        <cite>Steve Rogers</cite>
      </blockquote>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;blockquote class="bq-oneliner">
  &lt;p>The possession of great power necessarily implies great responsibility.&lt;/p>
  &lt;cite>William Lamb&lt;/cite>
&lt;/blockquote>
&lt;blockquote class="bq-oneliner inverse">
  &#x22EE;
&lt;/blockquote>
&lt;blockquote class="bq-block">
  &#x22EE;
&lt;/blockquote>
&lt;blockquote class="bq-block inverse">
  &#x22EE;
&lt;/blockquote>
</code></pre>
  </div>
</section>
