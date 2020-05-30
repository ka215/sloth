<section id="class-switching" class="sloth-styles">
  <h3>Follow Color</h3>
  <aside>
    <p><code>data-follow-color="inherit"</code></p>
    The text content of checkbox or button etc. for which this extended attribute is declared changes to specified color when such active.<br>
    The default value for this attribute is <code>inherit</code> and the active color depends on the element's color (basically the "primary" color). You can also specify any color for the attribute value. Valid color values are something only that ​​can be interpreted as stylesheet.<br>
  </aside>
  <div class="flx-col my2">
    <div class="w-full mb2">
<?php /*
      <h6 class="line-right txt-darkgray">No input element in child element</h6>
      <div class="inline flx-wrap">
        <label class="dropdown" data-follow-color="">Dropdown with arrowhead
          <select>
            <option value="1">Dropdown Item 1</option>
            <option value="2">Dropdown Item 2</option>
            <option value="3">Dropdown Item 3</option>
          </select>
        </label>
      </div>
*/ ?>
      <h6 class="line-right mt1 txt-darkgray">Input Type: Checkbox</h6>
      <div class="inline flx-wrap">
        <label class="checkbox mr2" data-follow-color="inherit">Unchecked
          <input type="checkbox">
          <span class="indicator"></span>
        </label>
        <label class="checkbox mr2" data-follow-color="inherit">Checked
          <input type="checkbox" checked="checked">
          <span class="indicator"></span>
        </label>
        <label class="checkbox muted mr2" data-follow-color="inherit">Disabled
          <input type="checkbox" disabled>
          <span class="indicator"></span>
        </label>
        <label class="checkbox muted mr2" data-follow-color="inherit">Disabled & Checked
          <input type="checkbox" checked="checked" disabled>
          <span class="indicator"></span>
        </label>
        <div class="clf mb1"></div>
        <label class="checkbox clr-prim mr2" data-follow-color="inherit">.clr-prim
          <input type="checkbox" checked="checked">
          <span class="indicator"></span>
        </label>
        <label class="checkbox clr-sec mr2" data-follow-color="inherit">.clr-sec
          <input type="checkbox" checked="checked">
          <span class="indicator"></span>
        </label>
        <label class="checkbox clr-tert mr2" data-follow-color="inherit">.clr-tert
          <input type="checkbox" checked="checked">
          <span class="indicator"></span>
        </label>
        <label class="checkbox clr-quat mr2" data-follow-color="inherit">.clr-quat
          <input type="checkbox" checked="checked">
          <span class="indicator"></span>
        </label>
        <label class="checkbox clr-quin mr2" data-follow-color="inherit">.clr-quin
          <input type="checkbox" checked="checked">
          <span class="indicator"></span>
        </label>
        <label class="checkbox" data-follow-color="purple">"purple"
          <input type="checkbox">
          <span class="indicator"></span>
        </label>
      </div>
      <h6 class="line-right mt1 txt-darkgray">Input Type: Radio</h6>
      <div class="inline flx-wrap">
        <label class="radio mr2" data-follow-color="inherit">Unchecked
          <input type="radio">
          <span class="indicator"></span>
        </label>
        <label class="radio mr2" data-follow-color="inherit">Checked
          <input type="radio" checked="checked">
          <span class="indicator"></span>
        </label>
        <label class="radio muted mr2" data-follow-color="inherit">Disabled
          <input type="radio" disabled>
          <span class="indicator"></span>
        </label>
        <label class="radio muted mr2" data-follow-color="inherit">Disabled & Checked
          <input type="radio" checked="checked" disabled>
          <span class="indicator"></span>
        </label>
        <div class="clf mb1"></div>
        <label class="radio clr-prim mr2" data-follow-color="inherit">.clr-prim
          <input type="radio" name="sample1" checked="checked">
          <span class="indicator"></span>
        </label>
        <label class="radio clr-sec mr2" data-follow-color="inherit">.clr-sec
          <input type="radio" name="sample1">
          <span class="indicator"></span>
        </label>
        <label class="radio clr-tert mr2" data-follow-color="inherit">.clr-tert
          <input type="radio" name="sample1">
          <span class="indicator"></span>
        </label>
        <label class="radio clr-quat mr2" data-follow-color="inherit">.clr-quat
          <input type="radio" name="sample1">
          <span class="indicator"></span>
        </label>
        <label class="radio clr-quin mr2" data-follow-color="inherit">.clr-quin
          <input type="radio" name="sample1">
          <span class="indicator"></span>
        </label>
        <label class="radio" data-follow-color="purple">"purple"
          <input type="radio" name="sample1">
          <span class="indicator"></span>
        </label>
      </div>
      <h6 class="line-right mt1 txt-darkgray">Toggle switch</h6>
      <div class="inline flx-wrap">
        <label class="tgl mr2 mb1" data-follow-color="inherit">Normal-toggle
          <input type="checkbox">
          <span class="tgl-btn"></span>
        </label>
        <label class="tgl flat mr2 mb1" data-follow-color="inherit">Flat-toggle
          <input type="checkbox">
          <span class="tgl-btn"></span>
        </label>
        <label class="tgl flip mr2 mb1" data-follow-color="inherit">Flip-toggle
          <input type="checkbox">
          <span class="tgl-btn" data-tgl-off="Off" data-tgl-on="On"></span>
        </label>
        <label class="tgl clr-sec mr2 mb1" data-follow-color="inherit">.clr-sec
          <input type="checkbox" checked>
          <span class="tgl-btn"></span>
        </label>
        <label class="tgl flat clr-tert mr2 mb1" data-follow-color="inherit">.clr-tert
          <input type="checkbox" checked>
          <span class="tgl-btn"></span>
        </label>
        <label class="tgl flip clr-quin mr2 mb1" data-follow-color="purple">Active text is "purple"
          <input type="checkbox" checked>
          <span class="tgl-btn" data-tgl-off="No" data-tgl-on="Yes"></span>
        </label>
      </div>
    </div>
    <div class="w-full mb2">
      <pre class="prettyprint"><code>&lt;label class="checkbox" data-follow-color="inherit">Unchecked
  &lt;input type="checkbox">
  &lt;span class="indicator">&lt;/span>
&lt;/label>
&lt;label class="checkbox clr-quin" data-follow-color="inherit">.clr-quin
  &lt;input type="checkbox" checked>
  &lt;span class="indicator">&lt;/span>
&lt;/label>
&lt;label class="checkbox" data-follow-color="purple">"purple"
  &lt;input type="checkbox">
  &lt;span class="indicator">&lt;/span>
&lt;/label>
&lt;label class="radio muted" data-follow-color="inherit">Disabled & Checked
  &lt;input type="radio" checked disabled>
  &lt;span class="indicator">&lt;/span>
&lt;/label>
&lt;label class="radio clr-sec" data-follow-color="inherit">.clr-sec
  &lt;input type="radio" name="sample1">
  &lt;span class="indicator">&lt;/span>
&lt;/label>
&lt;label class="tgl" data-follow-color="inherit">Normal-toggle
  &lt;input type="checkbox">
  &lt;span class="tgl-btn">&lt;/span>
&lt;/label>
&lt;label class="tgl flip clr-quin" data-follow-color="purple">Active text is "purple"
  &lt;input type="checkbox" checked>
  &lt;span class="tgl-btn" data-tgl-off="No" data-tgl-on="Yes">&lt;/span>
&lt;/label>
</code></pre>
    </div>
  </div>
</section>
