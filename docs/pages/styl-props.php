<section id="overriding-properties" class="sloth-styles">
  <h3>Overriding Properties</h3>
  <aside>
    On the sloth style, we can override some styling properties via CSS variables without rebuild custom css. Currently overridable properties are as follows.
  </aside>
  <div class="flx-col my2">
    <div class="w-full">
    </div>
    <div class="w-full">
      <pre class="prettyprint"><code>:root {
  --base-font-size-sm: 1.4rem;
  --base-font-size-md: 1.1667rem;
  --base-font-size-lg: 1.1429rem;

  --hr-text-bgcolor: #f5f5f5;

  --ruby-font-size: 0.65em;

  --color-primary: #4183c4;
  --color-primary-active: #3876b4;
  --color-primary-active-light: rgba(46, 131, 215, 0.2);
  --color-secondary: #00a968;
  --color-secondary-active: #009058;
  --color-secondary-active-light: rgba(0, 169, 104, 0.2);
  --color-tertiary: #e8383d;
  --color-tertiary-active: #e52127;
  --color-tertiary-active-light: rgba(249, 39, 45, 0.2);
  --color-quaternary: #ee7800;
  --color-quaternary-active: #d56b00;
  --color-quaternary-active-light: rgba(238, 120, 0, 0.2);
  --color-quinary: #e9bc00;
  --color-quinary-active: #d0a700;
  --color-quinary-active-light: rgba(233, 188, 0, 0.2);

  --color-code-text: #e8383d;

  --external-link-content: "\f360";
  --external-link-font: "Font Awesome 5 Pro";
  --external-link-background: transparent;
  --external-link-border: 0;
  --external-link-hover-color: #4183c4;
  --external-link-padding-left: 1em;

  --navi-height-sm: 56px;
  --navi-height-md: 56px;
  --navi-height-lg: 56px;
  --menu-width-sm: max-content;
  --menu-width-md: max-content;
  --menu-width-lg: max-content;
}
</code></pre>
    </div>
    <small class="note">It does not work in browsers like Internet Explorer etc which do not correspond to the CSS variables (<code>var()</code>).</small>
  </div>
</section>
<section id="template" class="sloth-styles" hidden>
  <h3>Others</h3>
  <aside>
    section discription
  </aside>
  <div class="flx-row my1">
    <div class="w-half">
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>
</code></pre>
    </div>
  </div>
</section>
