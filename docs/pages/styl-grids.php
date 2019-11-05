<section id="grid-systems" class="sloth-styles">
  <h3>Grid Systems</h3>
  <h5 class="muted">Flex boxes</h5>
  <aside>
    The grid representation in Sloth is basically done in flexbox (<code>display: flex</code>). It is realized by including a block element with sizes class according to the number of grids to be divided in the container element which applied <code>.flx-row</code> class.<br>
    In addition, it corresponds to the grid of six divisions.
  </aside>
  <div class="flx-col my1">
    <div class="w-full">
      <div class="flx-row flx-wrap">
        <div class="w-full mb1 p1 brd">.w-full</div>
        <div class="w-half mb1 p1 brd">.w-half</div>
        <div class="w-half mb1 p1 brd">.w-half</div>
        <div class="w-1-3 mb1 p1 brd">.w-1-3</div>
        <div class="w-1-3 mb1 p1 brd">.w-1-3</div>
        <div class="w-1-3 mb1 p1 brd">.w-1-3</div>
        <div class="w-1-3 mb1 p1 brd">.w-1-3</div>
        <div class="w-2-3 mb1 p1 brd">.w-2-3</div>
        <div class="w-1-4 mb1 p1 brd">.w-1-4</div>
        <div class="w-1-4 mb1 p1 brd">.w-1-4</div>
        <div class="w-1-4 mb1 p1 brd">.w-1-4</div>
        <div class="w-1-4 mb1 p1 brd">.w-1-4</div>
        <div class="w-1-4 mb1 p1 brd">.w-1-4</div>
        <div class="w-3-4 mb1 p1 brd">.w-3-4</div>
        <div class="w-1-5 mb1 p1 brd">.w-1-5</div>
        <div class="w-1-5 mb1 p1 brd">.w-1-5</div>
        <div class="w-1-5 mb1 p1 brd">.w-1-5</div>
        <div class="w-1-5 mb1 p1 brd">.w-1-5</div>
        <div class="w-1-5 mb1 p1 brd">.w-1-5</div>
        <div class="w-2-5 mb1 p1 brd">.w-2-5</div>
        <div class="w-3-5 mb1 p1 brd">.w-3-5</div>
        <div class="w-1-6 mb1 p1 brd">.w-1-6</div>
        <div class="w-1-6 mb1 p1 brd">.w-1-6</div>
        <div class="w-1-6 mb1 p1 brd">.w-1-6</div>
        <div class="w-1-6 mb1 p1 brd">.w-1-6</div>
        <div class="w-1-6 mb1 p1 brd">.w-1-6</div>
        <div class="w-1-6 mb1 p1 brd">.w-1-6</div>
        <div class="w-1-6 mb1 p1 brd">.w-1-6</div>
        <div class="w-5-6 mb1 p1 brd">.w-5-6</div>
      </div>
    </div>
    <div class="w-full">
      <pre class="prettyprint"><code>&lt;div class="flx-row flx-wrap">
  &lt;div class="w-full mb1 p1 brd">.w-full&lt;/div>
  &lt;div class="w-half mb1 p1 brd">.w-half&lt;/div>
  &lt;div class="w-half mb1 p1 brd">.w-half&lt;/div>
  &lt;div class="w-1-3 mb1 p1 brd">.w-1-3&lt;/div>
    &#x22EE;
  &lt;div class="w-2-3 mb1 p1 brd">.w-2-3&lt;/div>
  &lt;div class="w-1-4 mb1 p1 brd">.w-1-4&lt;/div>
    &#x22EE;
  &lt;div class="w-3-4 mb1 p1 brd">.w-3-4&lt;/div>
  &lt;div class="w-1-5 mb1 p1 brd">.w-1-5&lt;/div>
    &#x22EE;
  &lt;div class="w-2-5 mb1 p1 brd">.w-2-5&lt;/div>
  &lt;div class="w-3-5 mb1 p1 brd">.w-3-5&lt;/div>
  &lt;div class="w-1-6 mb1 p1 brd">.w-1-6&lt;/div>
    &#x22EE;
  &lt;div class="w-5-6 mb1 p1 brd">.w-5-6&lt;/div>
&lt;/div>
</code></pre>
    </div>
  </div>
  <h5 class="muted">CSS Grid</h5>
  <aside>
    You can also use CSS grid (<code>display: grid</code>) in Sloth style. But don't forget that some browsers are not compatible with this advanced style.
  </aside>
  <div class="flx-col my1">
    <div class="w-full">
      <div class="grid mb1">
        <div class="p1 brd">Row of fullspan</div>
      </div>
      <div class="grid grd-2 mb1">
        <div class="p1 brd">Half column</div>
        <div class="p1 brd">Half column</div>
      </div>
      <div class="grid grd-3 mb1">
        <div class="p1 brd">1/3 column</div>
        <div class="p1 brd">1/3 column</div>
        <div class="p1 brd">1/3 column</div>
      </div>
      <div class="grid grd-4 mb1">
        <div class="p1 brd">1/4 column</div>
        <div class="p1 brd">1/4 column</div>
        <div class="p1 brd">1/4 column</div>
        <div class="p1 brd">1/4 column</div>
      </div>
      <div class="grid grd-5 mb1">
        <div class="p1 brd">1/5 col</div>
        <div class="p1 brd">1/5 col</div>
        <div class="p1 brd">1/5 col</div>
        <div class="p1 brd">1/5 col</div>
        <div class="p1 brd">1/5 col</div>
      </div>
      <div class="grid grd-6 mb1">
        <div class="p1 brd">1/6 col</div>
        <div class="p1 brd">1/6 col</div>
        <div class="p1 brd">1/6 col</div>
        <div class="p1 brd">1/6 col</div>
        <div class="p1 brd">1/6 col</div>
        <div class="p1 brd">1/6 col</div>
      </div>
    </div>
    <div class="w-full mt1">
      <pre class="prettyprint"><code>&lt;div class="grid">
  &lt;div class="p1 brd">Row of fullspan&lt;/div>
&lt;/div>
&lt;div class="grid grd-2">
  &lt;div class="p1 brd">Half column&lt;/div>
  &lt;div class="p1 brd">Half column&lt;/div>
&lt;/div>
&lt;div class="grid grd-3">
  &lt;div class="p1 brd">1/3 column&lt;/div>
    &#x22EE;
&lt;/div>
&lt;div class="grid grd-4">
  &lt;div class="p1 brd">1/4 column&lt;/div>
    &#x22EE;
&lt;/div>
&lt;div class="grid grd-5">
  &lt;div class="p1 brd">1/5 col&lt;/div>
    &#x22EE;
&lt;/div>
&lt;div class="grid grd-6">
  &lt;div class="p1 brd">1/6 col&lt;/div>
    &#x22EE;
&lt;/div>
</code></pre>
    </div>
  </div>
</section>
