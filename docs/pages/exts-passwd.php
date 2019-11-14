<section id="toggle-password" class="sloth-styles">
  <h3>Toggle Password</h3>
  <aside>
    <p><code>&lt;label class="tgl-view"&gt;</code></p>
    You can generate the password field that is bundled with a toggle button that lets you see what you enter at any time.<br>
    It is also possible to display icon images by using the <code>.eye-switch</code> class as a child element of the toggle button.<br>
  </aside>
  <div class="flx-col my2">
    <div class="w-full mb2">
      <label for="passwd-1" class="tgl-view mb1">
        <input type="password" id="passwd-1" name="password" value="Pa55w0rD">
        <span>Toggle</span>
      </label>
      <label for="passwd-2" class="tgl-view">
        <input type="password" id="passwd-2" name="password" placeholder="Password" autocomplete="new-password">
        <span><span class="eye-switch"></span></span>
      </label>
    </div>
    <div class="w-full mb2">
      <pre class="prettyprint"><code>&lt;label for="passwd-1" class="tgl-view">
  &lt;input type="password" id="passwd-1" name="password" value="Pa55w0rD">
  &lt;span>Toggle&lt;/span>
&lt;/label>
&mdash;&mdash;
&lt;label for="passwd-2" class="tgl-view">
  &lt;input type="password" id="passwd-2" name="password" placeholder="Password" autocomplete="new-password">
  &lt;span>&lt;span class="eye-switch">&lt;/span>&lt;/span>
&lt;/label>
</code></pre>
    </div>
  </div>
</section>
