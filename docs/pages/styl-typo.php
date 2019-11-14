<section id="typograpy" class="sloth-styles">
  <h3>Typograpy</h3>
  <aside>
    The typography in the Sloth style is shown below. It is not necessary to give a class name for style at markup.
  </aside>
  <h4 class="line-right txt-prim">Headings</h4>
  <div class="flx-row my2">
    <div class="w-half">
      <hgroup>
        <h1>Heading 1</h1>
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>
        <h4>Heading 4</h4>
        <h5>Heading 5</h5>
        <h6>Heading 6</h6>
      </hgroup>
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>&lt;hgroup&gt;
  &lt;h1&gt;Heading 1&lt;/h1&gt;
  &lt;h2&gt;Heading 2&lt;/h2&gt;
  &lt;h3&gt;Heading 3&lt;/h3&gt;
  &lt;h4&gt;Heading 4&lt;/h4&gt;
  &lt;h5&gt;Heading 5&lt;/h5&gt;
  &lt;h6&gt;Heading 6&lt;/h6&gt;
&lt;/hgroup&gt;</code></pre>
    </div>
  </div>
  <div class="flx-col my2">
    <div class="w-full">
      <h6 class="line-both">Heading with both horizontal lines</h6>
      <h6 class="line-left">Heading with a left horizontal line</h6>
      <h6 class="line-right">Heading with a right horizontal line</h6>
      <!-- h6 class="line-both" data-linecolor="#ff3333">Customizable of line color</h6 -->
    </div>
    <div class="w-full">
      <pre class="prettyprint"><code>&lt;h6 class="line-both">Heading with both horizontal lines&lt;/h6>
&lt;h6 class="line-left">Heading with a left horizontal line&lt;/h6>
&lt;h6 class="line-right">Heading with a right horizontal line&lt;/h6></code></pre>
    </div>
  </div>
  <h4 class="line-right txt-prim">Decorative Tags</h4>
  <div class="flx-col my2">
    <div class="w-full">
      <p>Paragraphs are block-level elements, and notably will automatically close if another block-level element is parsed before the closing tag.</p>
      <blockquote>
        Indicates that the enclosed text is an extended quotation.
        <cite>source here</cite>
      </blockquote>
      Marks text that has stress <em>emphasis</em>.<br>
      Its contents have <strong>strong</strong> importance.<br>
      <b>Bring Attention</b> to element.<br>
      It is typically displayed in <i>italic</i> type.<br>
      <span>Normal Text</span><br>
      <small>Smaller Text</small>
    </div>
    <div class="w-full mt1">
      <pre class="prettyprint"><code>&lt;p&gt;Paragraphs are block-level elements, and notably...&lt;/p&gt;
&lt;blockquote&gt;
  Indicates that the enclosed text is an extended quotation.
  &lt;cite&gt;source here&lt;/cite&gt;
&lt;/blockquote&gt;
Marks text that has stress &lt;em&gt;emphasis&lt;/em&gt;&lt;br&gt;
Its contents have &lt;strong&gt;strong&lt;/strong&gt; importance.&lt;br&gt;
&lt;b&gt;Bring Attention&lt;/b&gt; to element.&lt;br&gt;
It is typically displayed in &lt;i&gt;italic&lt;/i&gt; type.&lt;br&gt;
&lt;span&gt;Normal Text&lt;/span&gt;&lt;br&gt;
&lt;small&gt;Smaller Text&lt;/small&gt;</code></pre>
    </div>
  </div>
  <h4 class="line-right txt-prim">Codes</h4>
  <div class="flx-row flx-wrap my2">
    <div class="w-half">
      <p>The <code>push()</code> method adds one or more elements...</p>
      <pre>
  L          TE
    A       A
      C    V
       R A</pre>
      <pre><code>const example = () => {
  let me = "&lt;div&gt;&lt;/div&gt;"
  return me
}
</code></pre>
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>&lt;p&gt;The &lt;code&gt;push()&lt;/code&gt; method adds one or more elements...&lt;/p&gt;
&lt;pre&gt;
  L          TE
    A       A
      C    V
       R A&lt;/pre&gt;
&lt;pre&gt;&lt;code&gt;const example = () => {
  let me = "&amp;lt;div&amp;gt;&amp;lt;/div&amp;gt;"
  return me
}
&lt;/code&gt;&lt;/pre&gt;</code></pre>
    </div>
  </div>
  <h4 class="line-right txt-prim">Hairlines</h4>
  <div class="flx-row flx-wrap my2">
    <div class="w-half">
      <hr>
      <hr class="dotted">
      <hr class="dashed">
      <hr class="double">
      <hr class="text" data-content="Separated">
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>&lt;hr>
&lt;hr class="dotted">
&lt;hr class="dashed">
&lt;hr class="double">
&lt;hr class="text" data-content="Separated"></code></pre>
    </div>
    <p>
      If you change the background color under the hairline that has <code>.text</code>, you can declare via named "--hr-text-bgcolor" of the CSS variables.
    </p>
    <small class="note">It does not work in browsers like Internet Explorer etc which do not correspond to the CSS variables (<code>var()</code>).</small>
  </div>
  <h4 class="line-right txt-prim">Ruby</h4>
  <blockquote>
    <p>Ruby characters are small, annotative glosses that are usually placed above or to the right of Chinese characters when writing languages with logographic characters such as Chinese, Japanese or Korean to show the pronunciation.</p>
    <cite><a href="https://en.wikipedia.org/wiki/Ruby_character" target="_blank">Wikipedia</a></cite>
  </blockquote>
  <div class="flx-row flx-wrap my2">
    <div class="w-half">
      <ruby>
        東京<rp>(</rp><rt>Tōkyō</rt><rp>)</rp>
      </ruby><br>
      <ruby>
        北<rp>(</rp><rt>Běi</rt><rp>)</rp>
        京<rp>(</rp><rt>jīng</rt><rp>)</rp>
      </ruby>
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>&lt;ruby>
  東京&lt;rp>(&lt;/rp>&lt;rt>Tōkyō&lt;/rt>&lt;rp>)&lt;/rp>
&lt;/ruby>&lt;br>
&lt;ruby>
  北&lt;rp>(&lt;/rp>&lt;rt>Běi&lt;/rt>&lt;rp>)&lt;/rp>
  京&lt;rp>(&lt;/rp>&lt;rt>jīng&lt;/rt>&lt;rp>)&lt;/rp>
&lt;/ruby>
</code></pre>
    </div>
  </div>
  <aside>
    The following markup is available as a unique ruby ​​description on the Sloth styling.
  </aside>
  <div class="flx-row flx-wrap my2">
    <div class="w-half">
      <p class="lh-2">
        <span data-ruby="Kyōto">京都</span><br>
        <span data-ruby="Xiānggǎng">香港</span>
      </p>
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>&lt;p class="lh-2">
  &lt;span data-ruby="Kyōto">京都&lt;/span>&lt;br>
  &lt;span data-ruby="Xiānggǎng">香港&lt;/span>
&lt;/p>
</code></pre>
    </div>
  </div>
</section>
