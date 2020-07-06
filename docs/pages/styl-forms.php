<section id="forms" class="sloth-styles">
  <h3>Forms</h3>
  <aside>
    There are a wide variety of form parts provided by the Sloth style. However, please note that some parts are not compatible with older browsers.
  </aside>
  <div class="flx-col my2">
    <div class="w-full mb1">
      <form autocomplete="off">
        <label for="ameli">Email</label>
        <input type="email" id="ameli" placeholder="Enter your email address" autocomplete="nope">
        <label for="salting" class="required">Password</label>
        <input type="password" id="salting" placeholder="Enter your password" autocomplete="new-password" required>
        <label for="bio">Biography</label>
        <textarea id="bio" placeholder="Tell us about yourself"></textarea>
      </form>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;form>
  &lt;label for="email">Email&lt;/label>
  &lt;input type="email" id="email" placeholder="Enter your email address">
  &lt;label for="passwd" class="required">Password&lt;/label>
  &lt;input type="password" id="passwd" placeholder="Enter your password" autocomplete="new-password" required>
  &lt;label for="bio">Biography&lt;/label>
  &lt;textarea id="bio" placeholder="Tell us about yourself">&lt;/textarea>
&lt;/form></code></pre>
    </div>
  </div>
  <h4 class="line-right txt-prim">Inline forms</h4>
  <div class="flx-col my2">
    <div class="w-full mb1">
      <form class="inline">
        <label>Name</label>
        <input type="text" placeholder="First Name" size="12">
        <input type="text" placeholder="Last Name" size="12">
      </form>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;form class="inline">
  &lt;label>Name&lt;/label>
  &lt;input type="text" placeholder="First Name">
  &lt;input type="text" placeholder="Last Name">
&lt;/form></code></pre>
    </div>
  </div>
  <h4 class="line-right txt-prim">Various Form States</h4>
  <div class="flx-col my2">
    <div class="w-full mb1">
      <form>
        <label class="muted">Disabled</label>
        <input type="text" disabled value="Disabled to enter this text field" class="mb1">
        <textarea disabled class="noresize">Disabled to enter this textarea</textarea>
        <label>Read-only</label>
        <input type="text" readonly value="This text field read only" class="mb1">
        <textarea readonly>This textarea read only</textarea>
      </form>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;form>
  &lt;label class="muted">Disabled&lt;/label>
  &lt;input type="text" disabled value="Disabled to enter this text field">
  &lt;textarea disabled class="noresize">Disabled to enter this textarea&lt;/textarea>
  &lt;label>Read-only&lt;/label>
  &lt;input type="text" readonly value="This text field read only">
  &lt;textarea readonly>This textarea read only&lt;/textarea>
&lt;/form></code></pre>
    </div>
  </div>
  <h4 class="line-right txt-prim">Checkboxes</h4>
  <div class="flx-row my2">
    <div class="w-half">
      <form>
        <label class="checkbox">Unchecked
          <input type="checkbox">
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Checked
          <input type="checkbox" checked="checked">
          <span class="indicator"></span>
        </label>
        <label class="checkbox muted">Disabled
          <input type="checkbox" disabled>
          <span class="indicator"></span>
        </label>
        <label class="checkbox muted">Disabled & Checked
          <input type="checkbox" checked="checked" disabled>
          <span class="indicator"></span>
        </label>
        <hr>
        <label class="checkbox clr-sec">.checkbox.clr-sec
          <input type="checkbox" checked="checked">
          <span class="indicator"></span>
        </label>
        <label class="checkbox clr-tert">.checkbox.clr-tert
          <input type="checkbox" checked="checked">
          <span class="indicator"></span>
        </label>
        <label class="checkbox clr-quat">.checkbox.clr-quat
          <input type="checkbox" checked="checked">
          <span class="indicator"></span>
        </label>
        <label class="checkbox clr-quin">.checkbox.clr-quin
          <input type="checkbox" checked="checked">
          <span class="indicator"></span>
        </label>
      </form>
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>&lt;label class="checkbox">Unchecked
  &lt;input type="checkbox">
  &lt;span class="indicator">&lt;/span>
&lt;/label>
&lt;label class="checkbox">Checked
  &lt;input type="checkbox" checked="checked">
  &lt;span class="indicator">&lt;/span>
&lt;/label>
&lt;label class="checkbox muted">Disabled
  &lt;input type="checkbox" disabled>
  &lt;span class="indicator">&lt;/span>
&lt;/label>
&lt;label class="checkbox muted">Disabled &amp; Checked
  &lt;input type="checkbox" checked="checked" disabled>
  &lt;span class="indicator">&lt;/span>
&lt;/label></code></pre>
    </div>
  </div>
  <h4 class="line-right txt-prim">Radio buttons</h4>
  <div class="flx-row my1">
    <div class="w-half">
      <form>
        <label class="radio">Unchecked
          <input type="radio">
          <span class="indicator"></span>
        </label>
        <label class="radio">Checked
          <input type="radio" checked="checked">
          <span class="indicator"></span>
        </label>
        <label class="radio muted">Disabled
          <input type="radio" disabled>
          <span class="indicator"></span>
        </label>
        <label class="radio muted">Disabled & Checked
          <input type="radio" checked="checked" disabled>
          <span class="indicator"></span>
        </label>
        <hr>
        <label class="radio clr-sec">.radio.clr-sec
          <input type="radio" checked="checked">
          <span class="indicator"></span>
        </label>
        <label class="radio clr-tert">.radio.clr-tert
          <input type="radio" checked="checked">
          <span class="indicator"></span>
        </label>
        <label class="radio clr-quat">.radio.clr-quat
          <input type="radio" checked="checked">
          <span class="indicator"></span>
        </label>
        <label class="radio clr-quin">.radio.clr-quin
          <input type="radio" checked="checked">
          <span class="indicator"></span>
        </label>
      </form>
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>&lt;label class="radio">Unchecked
  &lt;input type="radio">
  &lt;span class="indicator">&lt;/span>
&lt;/label>
&lt;label class="radio">Checked
  &lt;input type="radio" checked="checked">
  &lt;span class="indicator">&lt;/span>
&lt;/label>
&lt;label class="radio muted">Disabled
  &lt;input type="radio" disabled>
  &lt;span class="indicator">&lt;/span>
&lt;/label>
&lt;label class="radio muted">Disabled &amp; Checked
  &lt;input type="radio" checked="checked" disabled>
  &lt;span class="indicator">&lt;/span>
&lt;/label></code></pre>
    </div>
  </div>
  <h4 class="line-right txt-prim">Select boxes</h4>
  <div class="flx-col my2">
    <div class="w-full mb1">
      <form class="flx-col flx-justify item-start">
        <select class="mb1">
          <option>Dropdown Item 1</option>
          <option>Dropdown Item 2</option>
          <option>Dropdown Item 3</option>
        </select>
        <label class="dropdown mb1">Dropdown with arrowhead
          <select>
            <option>Dropdown Item 1</option>
            <option>Dropdown Item 2</option>
            <option>Dropdown Item 3</option>
          </select>
        </label>
        <label class="dropdown caret mb1">Dropdown with double carets
          <select>
            <option>Dropdown Item 1</option>
            <option>Dropdown Item 2</option>
            <option>Dropdown Item 3</option>
          </select>
        </label>
      </form>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;select>
  &lt;option>Dropdown Item 1&lt;/option>
  &lt;option>Dropdown Item 2&lt;/option>
  &lt;option>Dropdown Item 3&lt;/option>
&lt;/select>
&lt;label class="dropdown">Dropdown with arrowhead
  &lt;select>
    &lt;option>Dropdown Item 1&lt;/option>
     &#x22EE;
  &lt;/select>
&lt;/label>
&lt;label class="dropdown caret">Dropdown with double carets
  &lt;select>
    &lt;option>Dropdown Item 1&lt;/option>
     &#x22EE;
  &lt;/select>
&lt;/label></code></pre>
    </div>
  </div>
  <h4 class="line-right txt-prim">Datalist</h4>
  <div class="flx-col my2">
    <div class="w-full mb1">
      <form>
        <label class="combo-box">Combo box
          <input type="text" name="datalist_field" list="item-list" placeholder="Choose a candidate or enter" size="27">
          <datalist id="item-list">
            <option value="Candidatable item 1">
            <option value="Candidatable item 2">
            <option value="Candidatable item 3">
          </datalist>
          <span class="indicator"></span>
        </label>
      </form>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;label class="combo-box">Combo box
  &lt;input type="text" name="datalist_field" list="item-list" placeholder="Choose a candidate or enter" size="27">
  &lt;datalist id="item-list">
    &lt;option value="Candidatable item 1">
    &lt;option value="Candidatable item 2">
    &lt;option value="Candidatable item 3">
  &lt;/datalist>
  &lt;span class="indicator">&lt;/span>
&lt;/label>
</code></pre>
      <small class="note">It is best to include <a href="https://github.com/mfranzke/datalist-polyfill" target="_blank">datalist-polyfill</a> if you want to support older and currently incompatible browsers as like Android webview.</small>
    </div>
  </div>
  <h4 class="line-right txt-prim">Toggle switch</h4>
  <div class="flx-col my2">
    <div class="w-full mb1">
      <form>
        <label class="tgl mb1">Normal type of toggle switch, firstly.
          <input type="checkbox">
          <span class="tgl-btn"></span>
        </label><br>
        <label class="tgl flat mb1">Flat type of toggle switch nextly.
          <input type="checkbox">
          <span class="tgl-btn"></span>
        </label><br>
        <label class="tgl flip mb1">Flip type of toggle switch finally.
          <input type="checkbox">
          <span class="tgl-btn" data-tgl-off="Off" data-tgl-on="On"></span>
        </label><br>
        <label class="tgl clr-sec mb1">Also changeable the active color of toggle switch.
          <input type="checkbox" checked>
          <span class="tgl-btn"></span>
        </label><br>
      </form>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;label class="tgl">Normal type of toggle switch, firstly.
  &lt;input type="checkbox">
  &lt;span class="tgl-btn">&lt;/span>
&lt;/label>
&lt;label class="tgl flat">Flat type of toggle switch, nextly.
  &lt;input type="checkbox">
  &lt;span class="tgl-btn">&lt;/span>
&lt;/label>
&lt;label class="tgl flip">Flip type of toggle switch, finaly.
  &lt;input type="checkbox">
  &lt;span class="tgl-btn" data-tgl-off="Off" data-tgl-on="On">&lt;/span>
&lt;/label>
&lt;label class="tgl clr-sec">Also changeable the active color of toggle switch.
  &lt;input type="checkbox" checked>
  &lt;span class="tgl-btn">&lt;/span>
&lt;/label></code></pre>
    </div>
  </div>
  <h4 class="line-right txt-prim">Floating label</h4>
  <div class="flx-col my2">
    <div class="w-full mb1">
      <form>
        <label for="field-1" class="floating">
          <input type="text" id="field-1" placeholder="&nbsp;" autocomplete="nope">
          <span class="label">Name</span>
          <span class="border"></span>
        </label>
        <label for="field-2" class="floating">
          <input type="password" id="field-2" placeholder="&nbsp;" autocomplete="new-password">
          <span class="label">Password</span>
          <span class="border"></span>
        </label>
        <label for="field-3" class="floating">
          <textarea id="field-3" placeholder="&nbsp;"></textarea>
          <span class="label">Content</span>
          <span class="border"></span>
        </label>
      </form>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;label for="field-1" class="floating">
  &lt;input type="text" id="field-1" placeholder="&amp;nbsp;">
  &lt;label>Name&lt;/label>
  &lt;span class="border">&lt;/span>
&lt;/label>
&lt;label for="field-2" class="floating">
  &lt;input type="password" id="field-2" placeholder="&amp;nbsp;">
  &lt;span class="label">Password&lt;/span>
  &lt;span class="border">&lt;/span>
&lt;/label>
&lt;label for="field-3" class="floating">
  &lt;textarea id="field-3" placeholder="&amp;nbsp;">&lt;/textarea>
  &lt;label>Content&lt;/label>
  &lt;span class="border">&lt;/span>
&lt;/label></code></pre>
    </div>
  </div>
  <div>
    <div class="w-full">
      <small class="note">In the styling of floating label, there are used <code>:placeholder-shown</code> pseudo-class, therefore it does not working on the browsers that is not supported as like edge.</small>
    </div>
  </div>
</section>
