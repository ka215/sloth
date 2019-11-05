<section id="lists" class="sloth-styles">
  <h3>Lists</h3>
  <aside>
    In addition to below common styles, Sloth lists have list as components grouped together. It will be mentioned later.
  </aside>
  <div class="flx-row my1">
    <div class="w-half">
      <h6 class="muted">Ordered</h6>
      <ol>
        <li>Ordered Item</li>
        <li>Ordered Item</li>
      </ol>
      <h6 class="muted">Unordered</h6>
      <ul>
        <li>Unordered Item 1</li>
        <li>Unordered Item 2
          <ul>
            <li>Nested Item 1</li>
            <li>Nested Item 2</li>
          </ul>
        </li>
      </ul>
      <h6 class="muted">Unstyled</h6>
      <ul class="unstyled">
        <li>Unstyled Item 1</li>
        <li>Unstyled Item 2</li>
      </ul>
      <h6 class="muted">Description list</h6>
      <dl>
        <dt>Mathematical constant</dt>
        <dd>the base of the natural logarithm</dd>
        <dt>Ramanujan constant</dt>
        <dd>a number that occurs in a theorem stating</dd>
      </dl>
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>&lt;ol&gt;
  &lt;li&gt;Ordered Item&lt;/li&gt;
  &lt;li&gt;Ordered Item&lt;/li&gt;
&lt;/ol&gt;
&lt;ul&gt;
  &lt;li&gt;Unordered Item 1&lt;/li&gt;
  &lt;li&gt;Unordered Item 2
    &lt;ul&gt;
      &lt;li&gt;Nested Item 1&lt;/li&gt;
      &lt;li&gt;Nested Item 2&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="unstyled"&gt;
  &lt;li&gt;Unstyled Item 1&lt;/li&gt;
  &lt;li&gt;Unstyled Item 2&lt;/li&gt;
&lt;/ul&gt;
&lt;dl&gt;
  &lt;dt&gt;Mathematical constant&lt;/dt&gt;
  &lt;dd&gt;the base of the natural logarithm&lt;/dd&gt;
  &lt;dt&gt;Ramanujan constant&lt;/dt&gt;
  &lt;dd&gt;a number that occurs in a theorem stating&lt;/dd&gt;
&lt;/dl&gt;</code></pre>
    </div>
  </div>
  <hr>
  <div class="flx-col my1">
    <h5 class="muted">Inline list</h5>
    <div>
      <ul class="inline">
        <li>taxonomy-item-1</li>
        <li>taxonomy-item-2</li>
        <li>taxonomy-item-3</li>
      </ul>
    </div>
    <div>
      <pre class="prettyprint"><code>&lt;ul class="inline">
  &lt;li>taxonomy-item-1&lt;/li>
  &lt;li>taxonomy-item-2&lt;/li>
  &lt;li>taxonomy-item-3&lt;/li>
&lt;/ul></code></pre>
    </div>
    <h5 class="muted">Breadcrumbs</h5>
    <div>
      <ol id="bc-1" class="crumbs">
        <li><a href="#bc-1">Top level</a></li>
        <li><a href="#bc-1">Secondary level</a></li>
        <li>Current level</li>
      </ol>
    </div>
    <div>
      <pre class="prettyprint"><code>&lt;ol class="crumbs">
  &lt;li>&lt;a href="#">Top level&lt;/a>&lt;/li>
  &lt;li>&lt;a href="#">Secondary level&lt;/a>&lt;/li>
  &lt;li>Current level&lt;/li>
&lt;/ol></code></pre>
    </div>
    <div>
      <ul id="bc-2" class="crumbs arrows">
        <li><a href="#bc-2"><i class="fas fa-home"></i></a></li>
        <li><a href="#bc-2">Secondary level</a></li>
        <li>Current level</li>
      </ul>
    </div>
    <div>
      <pre class="prettyprint"><code>&lt;ul class="crumbs arrows">
  &lt;li>&lt;a href="#">&lt;i class="fas fa-home">&lt;/i>&lt;/a>&lt;/li>
  &lt;li>&lt;a href="#">Secondary level&lt;/a>&lt;/li>
  &lt;li>Current level&lt;/li>
&lt;/ul></code></pre>
      <small class="note">The above icon uses powered by the <a rel="external" href="https://fontawesome.com/">Font awesome</a>.</small>
    </div>
  </div>
</section>
