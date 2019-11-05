<section id="components" class="sloth-styles">
  <h3>Components</h3>
  <aside>
    The sloth style has several stylized component styles to easily express rich content.
  </aside>
  <h5 class="muted">vCard</h5>
  <div class="flx-col my1">
    <div class="w-full">
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
    <div class="w-full">
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
  <h5 class="muted">Navigation Menu</h5>
  <aside>This component is header navigation with sliding left side menu that fit on the mobile page. If you want to see demo of below codes on this page, try to switch a toggle.</aside>
  <div class="flx-col mb1">
    <div class="w-full">
      <form class="m1" hidden>
        <label class="tgl">Show navigation menu demo.
          <input type="checkbox" id="toggle-navi-menu">
          <span class="tgl-btn"></span>
        </label>
      </form>
    </div>
    <div class="w-full">
      <pre class="prettyprint"><code>&lt;header class="navi-menu">
  &lt;div class="w-half flx-row">
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
    &lt;a href="#sloth-docs" class="brand">&lt;img src="images/sloth.svg" height="36"> Sloth&lt;/a>
  &lt;/div>
  &lt;div class="w-half flx-row flx-end pr2">
    &lt;button type="button" class="outline mb0">&lt;i class="fas fa-times">&lt;/i> Close Navi&lt;/button>
  &lt;/div>
&lt;/header>
</code></pre>
    </div>
    <small class="note">The above icon uses powered by the <a rel="external" href="https://fontawesome.com/">Font awesome</a>.</small>
    <div class="w-full my1">
      <aside>Also, you can override the height of the horizontal navigation block and the width of the sliding side menu by using CSS variables.</aside>
    </div>
    <div class="w-full">
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
  </div>
</section>
