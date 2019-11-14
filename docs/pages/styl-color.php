<section id="colors" class="sloth-styles">
  <h3>Colors</h3>
  <aside>
    There are 5 color presets available by default for the Sloth style. These preset colors can also override custom colors via CSS variables.
  </aside>
  <div class="flx-col my2">
    <div class="w-full mb1">
      <table class="nobrd">
        <tbody><tr>
            <th>Primary</th><td><code>.*-prim</code></td><td><div class="bg-prim txt-white txt-center upper">#4183c4</div></td>
          </tr><tr>
            <th>Secondary</th><td><code>.*-sec</code></td><td><div class="bg-sec txt-white txt-center upper">#00a968</div></td>
          </tr><tr>
            <th>Tertiary</th><td><code>.*-tert</code></td><td><div class="bg-tert txt-white txt-center upper">#e8383d</div></td>
          </tr><tr>
            <th>Quaternary</th><td><code>.*-quat</code></td><td><div class="bg-quat txt-white txt-center upper">#ee7800</div></td>
          </tr><tr>
            <th>Quinary</th><td><code>.*-quin</code></td><td><div class="bg-quin txt-white txt-center upper">#e9bc00</div></td>
        </tr></tbody>
      </table>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>:root {
  --color-primary: #4183c4;
  --color-primary-active: #1e70bf;
  --color-secondary: #00a968;
  --color-secondary-active: #009854;
  --color-tertiary: #e8383d;
  --color-tertiary-active: #d70035;
  --color-quaternary: #ee7800;
  --color-quaternary-active: #ed6d35;
  --color-quinary: #e9bc00;
  --color-quinary-active: #e5a323;
}
</code></pre>
    </div>
  </div>
  <h4 class="line-right txt-prim">Demo to override color</h4>
  <div class="flx-col my2">
    <form class="inline mb1">
      <select id="override-color" class="mr1">
        <option value="--color-primary">--color-primary</option>
        <option value="--color-primary-active">--color-primary-active</option>
        <option value="--color-primary-active-light">--color-primary-active-light</option>
        <option value="--color-secondary">--color-secondary</option>
        <option value="--color-secondary-active">--color-secondary-active</option>
        <option value="--color-secondary-active-light">--color-secondary-active-light</option>
        <option value="--color-tertiary">--color-tertiary</option>
        <option value="--color-tertiary-active">--color-tertiary-active</option>
        <option value="--color-tertiary-active-light">--color-tertiary-active-light</option>
        <option value="--color-quaternary">--color-quaternary</option>
        <option value="--color-quaternary-active">--color-quaternary-active</option>
        <option value="--color-quaternary-active-light">--color-quaternary-active-light</option>
        <option value="--color-quinary">--color-quinary</option>
        <option value="--color-quinary-active">--color-quinary-active</option>
        <option value="--color-quinary-active-light">--color-quinary-active-light</option>
      </select>
      <input type="text" id="color-code" placeholder="Enter color value" class="mr1">
      <button type="button" id="btn-change-color" class="clr-prim">Try change</button>
    </form>
    <small class="note">It does not work in browsers like Internet Explorer etc which do not correspond to the CSS variables (<code>var()</code>).</small>
  </div>
<!-- /*
  <h5 class="muted">Other colors</h5>
  <div class="flx-col my1">
  </div>
*/ -->
</section>
