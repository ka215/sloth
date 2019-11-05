<section id="toggle-password" class="sloth-styles">
  <h3>Toggle Password</h3>
  <aside>
    <p><code>&lt;label class="tgl-view"&gt;</code></p>
    You can generate the password field that is bundled with a toggle button that lets you see what you enter at any time.<br>
    It is also possible to display icon images by using the <code>.eye-switch</code> class as a child element of the toggle button.<br>
  </aside>
  <div class="flx-row flx-wrap mt1">
    <div class="mb1" data-switch-class="sm:w-full,md:w-half,lg:w-1-3">
      <label for="passwd-1" class="tgl-view mb2">
        <input type="password" id="passwd-1" name="password" value="Pa55w0rD">
        <span>Toggle</span>
      </label>
      <label for="passwd-2" class="tgl-view">
        <input type="password" id="passwd-2" name="password" placeholder="Password" autocomplete="new-password">
        <span><span class="eye-switch"></span></span>
      </label>
    </div>
    <div class="mb1" data-switch-class="sm:w-full,md:w-half,lg:w-2-3">
      <pre class="prettyprint"><code>&lt;label for="passwd-1" class="tgl-view">
  &lt;input type="password" id="passwd-1" name="password" value="Pa55w0rD">
  &lt;span>Toggle&lt;/span>
&lt;/label>
&#x2E3B;
&lt;label for="passwd-2" class="tgl-view">
  &lt;input type="password" id="passwd-2" name="password" placeholder="Password" autocomplete="new-password">
  &lt;span>&lt;span class="eye-switch">&lt;/span>&lt;/span>
&lt;/label>
</code></pre>
    </div>
  </div>
</section>
