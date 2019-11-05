<section id="class-switching" class="sloth-styles">
  <h3>Class Switching</h3>
  <aside>
    <p><code>data-switch-class="sm:*,md:*,lg:*"</code></p>
    The class of the element for which this extended attribute is declared switches according to the browser screen size.<br>
    The breakpoints of the screen size to be switched the class are as follows.<br>
    <table class="fixed slim cell-center">
      <thead>
        <tr><th></th><th>Small (sm)</th><th>Medium (md)</th><th>Large (lg)</th></tr>
      </thead>
      <tbody>
        <tr>
          <th>Screen Size</th><td>&lt;= 480px</td><td data-switch-class="sm:fnt-sm">481px &#x301C; 768px</td><td>&gt;= 769px</td>
        </tr>
      </tbody>
    </table>
  </aside>
  <div class="flx-row flx-wrap mt1">
    <div class="mb1" data-switch-class="sm:w-full,md:w-half,lg:w-half">
      <p class="txt-center mx1 py1" data-switch-class="sm:bg-quin txt-black,md:bg-tert txt-whitesmoke,lg:bg-prim txt-white">Changing Colors</p>
      <div class="inline mx1">
        <img src="<?= optimize_uri('assets/noimage-300x300.png') ?>" data-switch-class="sm:w-full,md:w-half,lg:w-1-3">
        <label data-switch-class="sm:hidden,md:hidden">Image Caption</label>
      </div>
    </div>
    <div class="mb1" data-switch-class="sm:w-full,md:w-half,lg:w-half">
      <pre class="prettyprint"><code>&lt;p class="txt-center mx1 py1" data-switch-class="sm:bg-quin txt-black,md:bg-tert txt-whitesmoke,lg:bg-prim txt-white">Changing Colors&lt;/p>
&#x2E3B;
&lt;div class="inline mx1">
  &lt;img src="noimage-300x300.png" data-switch-class="sm:w-full,md:w-half,lg:w-1-3">
  &lt;label data-switch-class="sm:hidden,md:hidden">Image Caption&lt;/label>
&lt;/div>
</code></pre>
    </div>
  </div>
</section>
