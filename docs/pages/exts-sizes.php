<section id="element-sizing" class="sloth-styles">
  <h3>Element Sizing</h3>
  <aside>
    <p><code>data-size="w:*,h:*,mw:*,mh:*,minw:*,minh:*"</code></p>
    You can declare the <b>width</b>, <b>height</b>, <b>max-width</b>, <b>max-height</b>, <b>min-width</b> and <b>min-height</b> for each individual element at once.<br>
    You can also define dynamic values ​​by specifying an expression as like <code>calc()</code> of the stylesheet.<br>
    Also, if data-size is specified for an inline element such as a span tag, it is converted to an inline-block element.<br>
  </aside>
  <div class="flx-col my2">
    <div class="w-full mb1">
      <div class="inline mb1">
        <label data-size="w:140px" class="mr0">Field Item Name</label>
        <input type="text" name="item1" data-size="w:(100% - 140px),mw:40em" class="mr0">
      </div>
      <img src="<?= optimize_uri('assets/noimage-300x300.png') ?>" data-size="w:280px,h:10em,mw:90%,mh:90%,minw:10%,minh:10%;">
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;div class="inline">
  &lt;label data-size="w:140px" class="mr0">Field Item Name&lt;/label>
  &lt;input type="text" name="item1" data-size="w:(100% - 140px),mw:40em" class="mr0">
&lt;/div>
&lt;img src="noimage-300x300.png" data-size="w:280px,h:10em,mw:90%,mh:90%,minw:10%,minh:10%"&gt;
</code></pre>
    </div>
  </div>
  <div>
    <small class="note">Property names can be declared with the initials omitted as like "width" to "w".</small>
  </div>
</section>
