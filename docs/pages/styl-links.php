<section id="links" class="sloth-styles">
  <h3 id="head-in-page">Links</h3>
  <aside>
    The style for link to external is applied if the <code>&lt;a&gt;</code> tag has attribute of <code>rel="external"</code> or <code>target="_blank"</code>.
  </aside>
  <div class="flx-row my1">
    <div class="w-half">
      <a href="https://ka2.org/sloth/">Normal link</a><br>
      <a rel="external" href="https://github.com/ka215/sloth">Link to external</a><br>
      <a href="#head-in-page">Link in page</a><br>
      <a class="nons" href="https://ka2.org/sloth/">Not Sloth Style link</a><br>
      <a disabled href="https://github.com/ka215/sloth">Disabled Link</a><br>
      <hr>
      <address>
        <a href="mailto:example@sloth.link">mailto@sloth.link</a>
        <a href="tel:+123-456-7890">+123-456-7890</a>
      </address>
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>&lt;a href="https://ka2.org/sloth/">Normal link&lt;/a>&lt;br>
&lt;a rel="external" href="https://github.com/ka215/sloth">Link to external&lt;/a>&lt;br>
&lt;a href="#head-in-page">Link in page&lt;/a>&lt;br>
&lt;a class="nons" href="https://ka2.org/sloth/">Not Sloth Style link&lt;/a>&lt;br>
&lt;a disabled href="https://github.com/ka215/sloth">Disabled Link&lt;/a>&lt;br>
&mdash;&mdash;
&lt;address>
  &lt;a href="mailto:example@sloth.link">mailto@sloth.link&lt;/a>
  &lt;a href="tel:+123-456-7890">+123-456-7890&lt;/a>
&lt;/address></code></pre>
    </div>
  </div>
  <h5 class="muted">Change icon for external link</h5>
  <aside>
    You can change an icon of external link with using CSS custom properties (variables). For that you should custom stylings override to the Sloth style as below:
  </aside>
  <div class="flx-col">
    <div class="w-full mb1">
      <a class="override-demo" href="https://ka2.org/sloth/" target="_blank">Example link to external</a>
    </div>
    <div class="w-full">
      <pre class="prettyprint"><code>:root {
  --external-link-content: "\f360";
  --external-link-font: "Font Awesome 5 Pro";
  --external-link-background: transparent;
  --external-link-border: 0;
  --external-link-hover-color: #4183c4;
}
</code></pre>
    </div>
    <small class="note">It does not work in browsers like Internet Explorer etc which do not correspond to the CSS variables (<code>var()</code>).</small>
  </div>
</section>
