<section id="buttons" class="sloth-styles">
  <h3>Buttons</h3>
  <aside>
    In the Sloth, the "submit" button is styled in the primary color. Add <code>.clr-prim</code> class if you want to explicitly style the primary color.
  </aside>
  <div class="flx-col my2">
    <div class="w-full mb1">
      <input type="submit" value="Input Submit" onclick="_void(this.value)">
      <input type="button" value="Input Button" onclick="_void(this.value)">
      <button type="submit" onclick="_void(this.textContent)">Button Submit</button>
      <button type="button" onclick="_void(this.textContent)">Button Normal</button>
      <button type="submit" disabled onclick="_void(this.textContent)">Disabled Submit</button>
      <button type="button" disabled onclick="_void(this.textContent)">Disabled Normal</button>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;form>
  &lt;input type="submit" value="Input Submit">
  &lt;input type="button" value="Input Button">
  &lt;button type="submit">Button Submit&lt;/button>
  &lt;button type="button">Button Normal&lt;/button>
  &lt;button type="submit" disabled>Disabled Submit&lt;/button>
  &lt;button type="button" disabled>Disabled Normal&lt;/button>
&lt;/form></code></pre>
    </div>
  </div>
  <div class="flx-col my2">
    <h4 class="line-right txt-prim">Color Variations</h4>
    <div class="w-full mb1">
      <button type="button" class="clr-prim" onclick="_void(this.textContent)">Primary</button>
      <button type="button" class="clr-sec"  onclick="_void(this.textContent)">Secondary</button>
      <button type="button" class="clr-tert" onclick="_void(this.textContent)">Tertiary</button>
      <button type="button" class="clr-quat" onclick="_void(this.textContent)">Quaternary</button>
      <button type="button" class="clr-quin" onclick="_void(this.textContent)">Quinary</button>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;button type="button" class="clr-prim">Primary&lt;/button>
&lt;button type="button" class="clr-sec" >Secondary&lt;/button>
&lt;button type="button" class="clr-tert">Tertiary&lt;/button>
&lt;button type="button" class="clr-quat">Quaternary&lt;/button>
&lt;button type="button" class="clr-quin">Quinary&lt;/button>
</code></pre>
    </div>
  </div>
  <div class="flx-col my2">
    <h4 class="line-right txt-prim">Outline butons</h4>
    <div class="w-full mb1">
      <!-- button type="submit" class="outline" onclick="_void(this.textContent)">Submit</button -->
      <button type="button" class="outline"  onclick="_void(this.textContent)">Default</button>
      <button type="button" class="outline clr-prim" onclick="_void(this.textContent)">Primary</button>
      <button type="button" class="outline clr-sec"  onclick="_void(this.textContent)">Secondary</button>
      <button type="button" class="outline clr-tert" onclick="_void(this.textContent)">Tertiary</button>
      <button type="button" class="outline clr-quat" onclick="_void(this.textContent)">Quaternary</button>
      <button type="button" class="outline clr-quin" onclick="_void(this.textContent)">Quinary</button>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;button type="button" class="outline">Default&lt;/button>
&lt;button type="button" class="outline clr-prim">Primary&lt;/button>
&lt;button type="button" class="outline clr-sec" >Secondary&lt;/button>
&lt;button type="button" class="outline clr-tert">Tertiary&lt;/button>
&lt;button type="button" class="outline clr-quat">Quaternary&lt;/button>
&lt;button type="button" class="outline clr-quin">Quinary&lt;/button>
</code></pre>
    </div>
  </div>
  <div class="flx-col my2">
    <h4 class="line-right txt-prim">Flat butons</h4>
    <div class="w-full mb1">
      <!-- button type="submit" class="flat" onclick="_void(this.textContent)">Submit</button -->
      <button type="button" class="flat" onclick="_void(this.textContent)">Default</button>
      <button type="button" class="flat clr-prim" onclick="_void(this.textContent)">Primary</button>
      <button type="button" class="flat clr-sec" onclick="_void(this.textContent)">Secondary</button>
      <button type="button" class="flat clr-tert" onclick="_void(this.textContent)">Tertiary</button>
      <button type="button" class="flat clr-quat" onclick="_void(this.textContent)">Quaternary</button>
      <button type="button" class="flat clr-quin" onclick="_void(this.textContent)">Quinary</button>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;button type="button" class="flat">Default&lt;/button>
&lt;button type="button" class="flat clr-prim">Primary&lt;/button>
&lt;button type="button" class="flat clr-sec" >Secondary&lt;/button>
&lt;button type="button" class="flat clr-tert">Tertiary&lt;/button>
&lt;button type="button" class="flat clr-quat">Quaternary&lt;/button>
&lt;button type="button" class="flat clr-quin">Quinary&lt;/button>
</code></pre>
    </div>
  </div>
  <div class="flx-col my2">
    <h4 class="line-right txt-prim">Floating Action Button</h4>
    <div class="w-full flx-row flx-wrap mb1">
      <a class="btn-fab mr1 mb1" href="javascript:_void(this.textContent)"><i class="fas fa-home"></i></a>
      <a class="btn-fab clr-prim mr1 mb1" href="javascript:_void(this.textContent)"><i class="fas fa-plus"></i></a>
      <a class="btn-fab clr-sec mr1 mb1"  href="javascript:_void(this.textContent)"><i class="fas fa-star"></i></a>
      <a class="btn-fab clr-tert mr1 mb1" href="javascript:_void(this.textContent)"><i class="far fa-heart"></i></a>
      <a class="btn-fab clr-quat mr1 mb1" href="javascript:_void(this.textContent)"><i class="fas fa-pencil-alt"></i></a>
      <a class="btn-fab clr-quin mr1 mb1" href="javascript:_void(this.textContent)"><i class="fas fa-share"></i></a>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;a class="btn-fab" href="#">&lt;i class="fas fa-home">&lt;/i>&lt;/a>
&lt;a class="btn-fab clr-prim" href="#">&lt;i class="fas fa-plus">&lt;/i>&lt;/a>
&lt;a class="btn-fab clr-sec"  href="#">&lt;i class="fas fa-star">&lt;/i>&lt;/a>
&lt;a class="btn-fab clr-tert" href="#">&lt;i class="fas fa-heart">&lt;/i>&lt;/a>
&lt;a class="btn-fab clr-quat" href="#">&lt;i class="fas fa-pencil-alt">&lt;/i>&lt;/a>
&lt;a class="btn-fab clr-quin" href="#">&lt;i class="fas fa-share">&lt;/i>&lt;/a>
</code></pre>
      <small class="note">The above icon uses powered by the <a rel="external" href="https://fontawesome.com/">Font awesome</a>.</small>
    </div>
  </div>
</section>
