<section id="option-mapping" class="sloth-styles">
  <h3>Option Mapping</h3>
  <aside>
    <p><code>&lt;option data-map="*...*"&gt;</code> , <code>&lt;option data-map="*,*,*,*"&gt;</code> , <code>&lt;option data-map="*:*,*:*,*:*"&gt;</code></p>
    Expands a numeric range or array declared in <code>data-map</code> to the option tags.<br>
    It is recommended to leave the <code>value</code> attribute empty so that the option tag itself with the <code>data-map</code> attribute is handled as a placeholder default value of select-box.<br>
    There are three types of data-map values: an integer range type that combines minimum and maximum values ​​with "...", a comma-separated array type, and a hash type that uses the option value as a key.<br>
  </aside>
  <div class="flx-row flx-wrap mt1">
    <div class="mb1" data-switch-class="sm:w-full,md:w-half,lg:w-1-3">
      <label class="dropdown mb2">
        <select name="birth_year">
          <option value="" data-map="1920...2020">Birth Year</option>
        </select>
      </label>
      <br>
      <label class="dropdown mb2">
        <select name="prefecture">
          <option value="" data-map="Tokyo,Hokkaido,,Osaka,Kyouto,,Fukuoka,,,Okinawa">Prefecture</option>
        </select>
      </label>
      <br>
      <label class="dropdown mb2">
        <select name="country">
          <option value="" data-map="us:United States America,fr:France,de:Germany,es:Spain,it:Italy,ru:Russia,jp:Japan,cn:China,br:Brazil">Country</option>
        </select>
      </label>
    </div>
    <div class="mb1" data-switch-class="sm:w-full,md:w-half,lg:w-2-3">
      <pre class="prettyprint"><code>&lt;label class="dropdown">
  &lt;select name="birth_year">
    &lt;option value="" data-map="1920...2020">Birth Year&lt;/option>
  &lt;/select>
&lt;/label>
&#x2E3B;
&lt;label class="dropdown">
  &lt;select name="prefecture">
    &lt;option value="" data-map="Tokyo,Hokkaido,,Osaka,Kyouto,,Fukuoka,,,Okinawa">Prefecture&lt;/option>
  &lt;/select>
&lt;/label>
&#x2E3B;
&lt;label class="dropdown">
  &lt;select name="country">
    &lt;option value="" data-map="us:United States America,fr:France,de:Germany,es:Spain,it:Italy,ru:Russia,jp:Japan,cn:China,br:Brazil">Country&lt;/option>
  &lt;/select>
&lt;/label>
</code></pre>
    </div>
  </div>
  <div>
    <small class="note">When a one-dimensional array type data-map is declared, the option value is an integer value starting from 1.</small>
  </div>
</section>
