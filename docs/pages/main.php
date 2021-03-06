<header id="demo-navi" class="navi-menu" hidden>
  <div class="w-half flx-row">
    <label class="toggle">
      <input type="checkbox">
      <div class="backdrop"></div>
      <div class="menu">
        <ul class="unstyled">
          <li class="pr1"><a href="#introduction"><i class="fas fa-heading mr1"></i>Sloth</a></li>
          <li class="pr1"><a href="#why-sloth"><i class="fas fa-question mr1"></i>Why Sloth?</a></li>
          <li class="pr1"><a href="#get-started-sloth"><i class="fas fa-fire mr1"></i>Get Started Sloth!</a></li>
          <li class="pr1"><a href="#sloth-extensions"><i class="far fa-lightbulb mr1"></i>Sloth Extensions</a></li>
          <li class="pr1"><a href="#basic-structures"><i class="fas fa-chalkboard mr1"></i>Basic Structures</a></li>
        </ul>
        <hr>
        <ul class="unstyled">
          <li class="pr1"><a href="#typograpy"><i class="fas fa-font mr1"></i>Typograpy</a></li>
          <li class="pr1"><a href="#lists"><i class="fas fa-list-ul mr1"></i>Lists</a></li>
          <li class="pr1"><a href="#links"><i class="fas fa-link mr1"></i>Links</a></li>
          <li class="pr1"><a href="#forms"><i class="fas fa-edit mr1"></i>Forms</a></li>
          <li class="pr1"><a href="#buttons"><i class="fas fa-toggle-on mr1"></i>Buttons</a></li>
          <li class="pr1"><a href="#tables"><i class="fas fa-table mr1"></i>Tables</a></li>
          <li class="pr1"><a href="#grid-systems"><i class="fas fa-th mr1"></i>Grid Systems</a></li>
          <li class="pr1"><a href="#components"><i class="far fa-address-card mr1"></i>Components</a></li>
          <li class="pr1"><a href="#colors"><i class="fas fa-palette mr1"></i>Colors</a></li>
          <li class="pr1"><a href="#utilities"><i class="fas fa-toolbox mr1"></i>Utilities</a></li>
          <li class="pr1"><a href="#overriding-properties"><i class="far fa-edit mr1"></i>Overriding Properties</a></li>
        </ul>
        <hr>
        <ul class="unstyled">
          <li class="pr1"><a href="./?page=2"><i class="far fa-lightbulb mr1"></i>Sloth Extensions</a></li>
          <li class="pr1"><a href="./?page=3"><i class="far fa-window-restore mr1"></i>Supported Browsers</a></li>
        </ul>
        <hr>
        <ul class="unstyled">
          <li class="pr1"><a href="https://ka215.github.io/sloth/donation.html"><i class="fas fa-donate mr1"></i>Donation</a></li>
          <li class="pr1"><a href="https://github.com/ka215/sloth"><i class="fab fa-github-alt mr1"></i>To github</a></li>
          <li class="pr1"><a href="/"><i class="fas fa-home mr1"></i>Back to homepage</a></li>
        </ul>
      </div>
    </label>
    <a href="#sloth-docs" class="brand"><img src="<?= optimize_uri('sloth.svg') ?>" height="36"> Sloth</a>
  </div>
  <div class="w-half flx-row flx-end pr2">
    <button id="close-navi" type="button" class="outline"><i class="fas fa-times"></i> Close Navi</button>
  </div>
</header>
<header id="introduction">
  <h1 class="nons"><img src="./sloth.svg" height="58" style="margin-right:1rem;">Sloth</h1>
  <p class="nons">
    Mobile-first Lightweight CSS Framework that has reduced styling coding costs to a minimum with non-BEM and simpler naming conventions than OOCSS.<br>
  </p>
  <button type="button" class="outline clr-prim" onclick="javascript:location.href='https://github.com/ka215/sloth';"><i class="fab fa-github"></i> github</button>
  <div>
    <small class="muted">Latest Version: <?= $sloth_version; ?></small>
  </div>
  <div class="ad-block" style="left:0;"><ins class="adsbygoogle"
     style="display:block;width:inherit;height:max-content;"
     data-ad-client="ca-pub-8602791446931111"
     data-ad-slot="6050360069"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins></div>
</header>
<article id="why-sloth" class="lead-block">
  <h2>Why Sloth?</h2>
  <aside>
    We're tired of complicating the HTML hierarchy to apply the preferred style and marking up several class names broken up into features. The markuping for styling should be simpler and better. This framework was developed for those who want to shirk neglect one's duties, and take the easy way out.<br>
    <br>
    The Sloth is lightweight as it saves the effort to rely on the legacy browser. Also, the Sloth can use advanced styling technology that utilizes flexbox, grid, CSS variables, and limited vendor prefixes.<br>
    <br>
    That supports SCSS and postCSS, and you can customize your build with the included gulp file. Then the Sloth is providing at only distributed css file without dependenting JavaScript.<br>
    <br>
    Finally that file size after gzip compression is <em class="txt-sec"><?= (string) $compressed_size ?>kB</em> at this time.
  </aside>
</article>
<article id="get-started-sloth" class="lead-block">
  <h2>Get Started Sloth!</h2>
  <aside>
    In order to wake up the sloth, it is necessary to read the built distribution CSS file.
    <div class="flx-row flx-center fnt-sm my1">
      <pre class="prettyprint"><code>&lt;link rel="stylesheet" href="dist/sloth.min.css"&gt;</code></pre>
    </div>
    Marking up in the Sloth style is very easy. Basically, you can complete most of your work simply by declaring the <code class="fnt-sm">.sloth</code> class to the parent element you want to apply style to.
    <div class="flx-row fnt-sm my1">
      <pre class="prettyprint"><code>&lt;body class="sloth"&gt;
<div class="my1 px2">&#x22EE;</div>&lt;/body&gt;</code></pre>
      <div class="mx2 mya">OR</div>
      <pre class="prettyprint"><code>&lt;div class="sloth"&gt;
<div class="my1 px2">&#x22EE;</div>&lt;/div&gt;</code></pre>
    </div>
    Also, if you do not want to apply a style to a specific element in a Sloth style block, specify the <code class="fnt-sm">.nons</code> class in the not sloth style declaration.
    <div class="flx-row flx-center fnt-sm my1">
      <pre class="prettyprint"><code>&lt;body class="sloth"&gt;
  &lt;h1 class="nons"&gt;Not Sloth Styled headline&lt;/h1&gt;
&lt;/body&gt;</code></pre>
    </div>
  </aside>
</article>
<article id="sloth-extensions" class="lead-block">
  <h2>Sloth Extensions</h2>
  <aside>
    Since Version 1.0.3, added new <a href="./?page=2">extension script for Sloth</a>.<br>
    If you use that script, you can get make an easily advanced form with field validation built, and enable dialog to be popuping.<br>
    If you want to enable this extension, you should be loaded script file as like below.<br>
    <div class="flx-row flx-center fnt-sm my1">
      <pre class="prettyprint"><code>&lt;script async src="dist/sloth.extension.min.js"&gt;&lt;/script&gt;</code></pre>
    </div>
    That script file size after gzip compression is <em class="txt-sec"><?= (string) $compressed_js_size ?>kB</em> at this time.<br>
  </aside>
</article>
<article id="basic-structures" class="lead-block">
  <h2>Basic Structures</h2>
  <aside>
    The sloth style is styled with mobile first. The basic font size changes according to the screen size of the device that is the breakpoint as below.
    <table class="fixed slim cell-center">
      <thead>
        <tr><th></th><th>Small</th><th>Medium</th><th>Large</th></tr>
      </thead>
      <tbody>
        <tr>
          <th>Screen Width</th><td>&lt;= 480px</td><td class="fnt-sm">481px &#x301C; 768px</td><td>&gt;= 769px</td>
        </tr>
        <tr>
          <th>1rem =</th><td>10px</td><td>12px</td><td>14px</td>
        </tr>
        <tr>
          <th>Base Font-size</th><td>1.4rem<br><small>(=14px)</small></td><td>1.1667rem<br><small>(≒14px)</small></td><td>1.1429rem<br><small>(≒16px)</small></td>
        </tr>
      </tbody>
    </table>
    Also, you can override custom base font-size via CSS variables as below.
    <div class="flx-col flx-center fnt-sm my1">
      <pre class="prettyprint"><code>:root {
  /* Set same sizes on all device screen */
  --base-font-size-sm: 1.4rem;    /* = 14px */ 
  --base-font-size-md: 1.1667rem; /* = 14px */
  --base-font-size-lg: 1rem;      /* = 14px */
}
</code></pre>
      <small class="note">It does not work in browsers like Internet Explorer etc which do not correspond to the CSS variables (<code>var()</code>).</small>
    </div>
  </aside>
</article>
<section id="typograpy" class="sloth-styles">
  <h3>Typograpy</h3>
  <aside>
    The typography in the Sloth style is shown below. It is not necessary to give a class name for style at markup.
  </aside>
  <div class="flx-row my1">
    <div class="w-half">
      <hgroup>
        <h1>Heading 1</h1>
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>
        <h4>Heading 4</h4>
        <h5>Heading 5</h5>
        <h6>Heading 6</h6>
      </hgroup>
      <span>Normal Text</span><br>
      <small>Smaller Text</small>
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>&lt;hgroup&gt;
  &lt;h1&gt;Heading 1&lt;/h1&gt;
  &lt;h2&gt;Heading 2&lt;/h2&gt;
  &lt;h3&gt;Heading 3&lt;/h3&gt;
  &lt;h4&gt;Heading 4&lt;/h4&gt;
  &lt;h5&gt;Heading 5&lt;/h5&gt;
  &lt;h6&gt;Heading 6&lt;/h6&gt;
&lt;/hgroup&gt;
&lt;span&gt;Normal Text&lt;/span&gt;&lt;br&gt;
&lt;small&gt;Smaller Text&lt;/small&gt;</code></pre>
    </div>
  </div>
  <hr>
  <div class="flx-col my1">
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
It is typically displayed in &lt;i&gt;italic&lt;/i&gt; type.&lt;br&gt;</code></pre>
    </div>
  </div>
  <hr>
  <h6 class="muted">Codes</h6>
  <div class="flx-row flx-wrap my1">
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
  <hr>
  <h6 class="muted">Hairlines</h6>
  <div class="flx-row flx-wrap my1">
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
  <hr>
  <h6 class="muted">Ruby</h6>
  <blockquote>
    <p>Ruby characters are small, annotative glosses that are usually placed above or to the right of Chinese characters when writing languages with logographic characters such as Chinese, Japanese or Korean to show the pronunciation.</p>
    <cite><a href="https://en.wikipedia.org/wiki/Ruby_character" target="_blank">Wikipedia</a></cite>
  </blockquote>
  <div class="flx-row flx-wrap my1">
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
  <div class="flx-row flx-wrap my1">
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
<section id="lists" class="sloth-styles">
  <h3>Lists</h3>
  <aside>
    In addition to below common styles, Sloth lists have list as components grouped together. It will be mentioned later.
  </aside>
  <div class="flx-row my1">
    <div class="w-half">
      <h6 class="muted">Ordered</h6>
      <ol>
        <li>Ordered Item</li>
        <li>Ordered Item</li>
      </ol>
      <h6 class="muted">Unordered</h6>
      <ul>
        <li>Unordered Item 1</li>
        <li>Unordered Item 2
          <ul>
            <li>Nested Item 1</li>
            <li>Nested Item 2</li>
          </ul>
        </li>
      </ul>
      <h6 class="muted">Unstyled</h6>
      <ul class="unstyled">
        <li>Unstyled Item 1</li>
        <li>Unstyled Item 2</li>
      </ul>
      <h6 class="muted">Description list</h6>
      <dl>
        <dt>Mathematical constant</dt>
        <dd>the base of the natural logarithm</dd>
        <dt>Ramanujan constant</dt>
        <dd>a number that occurs in a theorem stating</dd>
      </dl>
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>&lt;ol&gt;
  &lt;li&gt;Ordered Item&lt;/li&gt;
  &lt;li&gt;Ordered Item&lt;/li&gt;
&lt;/ol&gt;
&lt;ul&gt;
  &lt;li&gt;Unordered Item 1&lt;/li&gt;
  &lt;li&gt;Unordered Item 2
    &lt;ul&gt;
      &lt;li&gt;Nested Item 1&lt;/li&gt;
      &lt;li&gt;Nested Item 2&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="unstyled"&gt;
  &lt;li&gt;Unstyled Item 1&lt;/li&gt;
  &lt;li&gt;Unstyled Item 2&lt;/li&gt;
&lt;/ul&gt;
&lt;dl&gt;
  &lt;dt&gt;Mathematical constant&lt;/dt&gt;
  &lt;dd&gt;the base of the natural logarithm&lt;/dd&gt;
  &lt;dt&gt;Ramanujan constant&lt;/dt&gt;
  &lt;dd&gt;a number that occurs in a theorem stating&lt;/dd&gt;
&lt;/dl&gt;</code></pre>
    </div>
  </div>
  <hr>
  <div class="flx-col my1">
    <h5 class="muted">Inline list</h5>
    <div>
      <ul class="inline">
        <li>taxonomy-item-1</li>
        <li>taxonomy-item-2</li>
        <li>taxonomy-item-3</li>
      </ul>
    </div>
    <div>
      <pre class="prettyprint"><code>&lt;ul class="inline">
  &lt;li>taxonomy-item-1&lt;/li>
  &lt;li>taxonomy-item-2&lt;/li>
  &lt;li>taxonomy-item-3&lt;/li>
&lt;/ul></code></pre>
    </div>
    <h5 class="muted">Breadcrumbs</h5>
    <div>
      <ol id="bc-1" class="crumbs">
        <li><a href="#bc-1">Top level</a></li>
        <li><a href="#bc-1">Secondary level</a></li>
        <li>Current level</li>
      </ol>
    </div>
    <div>
      <pre class="prettyprint"><code>&lt;ol class="crumbs">
  &lt;li>&lt;a href="#">Top level&lt;/a>&lt;/li>
  &lt;li>&lt;a href="#">Secondary level&lt;/a>&lt;/li>
  &lt;li>Current level&lt;/li>
&lt;/ol></code></pre>
    </div>
    <div>
      <ul id="bc-2" class="crumbs arrows">
        <li><a href="#bc-2"><i class="fas fa-home"></i></a></li>
        <li><a href="#bc-2">Secondary level</a></li>
        <li>Current level</li>
      </ul>
    </div>
    <div>
      <pre class="prettyprint"><code>&lt;ul class="crumbs arrows">
  &lt;li>&lt;a href="#">&lt;i class="fas fa-home">&lt;/i>&lt;/a>&lt;/li>
  &lt;li>&lt;a href="#">Secondary level&lt;/a>&lt;/li>
  &lt;li>Current level&lt;/li>
&lt;/ul></code></pre>
      <small class="note">The above icon uses powered by the <a rel="external" href="https://fontawesome.com/">Font awesome</a>.</small>
    </div>
  </div>
</section>
<section id="links" class="sloth-styles">
  <h3 id="head-in-page">Links</h3>
  <aside>
    The style for link to external is applied if the <code>&lt;a&gt;</code> tag has attribute of <code>rel="external"</code> or <code>target="_blank"</code>.
  </aside>
  <div class="flx-row my1">
    <div class="w-half">
      <a href="https://ka2.org/sloth/">Normal link</a><br>
      <a rel="external" href="https://github.com/ka215/sloth">Link to external</a><br>
      <a href="#head-in-page">Link in page</a><br>
      <a class="nons" href="https://ka2.org/sloth/">Not Sloth Style link</a><br>
      <a disabled href="https://github.com/ka215/sloth">Disabled Link</a><br>
      <hr>
      <address>
        <a href="mailto:example@sloth.link">mailto@sloth.link</a>
        <a href="tel:+123-456-7890">+123-456-7890</a>
      </address>
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>&lt;a href="https://ka2.org/sloth/">Normal link&lt;/a>&lt;br>
&lt;a rel="external" href="https://github.com/ka215/sloth">Link to external&lt;/a>&lt;br>
&lt;a href="#head-in-page">Link in page&lt;/a>&lt;br>
&lt;a class="nons" href="https://ka2.org/sloth/">Not Sloth Style link&lt;/a>&lt;br>
&lt;a disabled href="https://github.com/ka215/sloth">Disabled Link&lt;/a>&lt;br>
&mdash;&mdash;
&lt;address>
  &lt;a href="mailto:example@sloth.link">mailto@sloth.link&lt;/a>
  &lt;a href="tel:+123-456-7890">+123-456-7890&lt;/a>
&lt;/address></code></pre>
    </div>
  </div>
  <h5 class="muted">Change icon for external link</h5>
  <aside>
    You can change an icon of external link with using CSS custom properties (variables). For that you should custom stylings override to the Sloth style as below:
  </aside>
  <div class="flx-col">
    <div class="w-full mb1">
      <a class="override-demo" href="https://ka2.org/sloth/" target="_blank">Example link to external</a>
    </div>
    <div class="w-full">
      <pre class="prettyprint"><code>:root {
  --external-link-content: "\f360";
  --external-link-font: "Font Awesome 5 Pro";
  --external-link-background: transparent;
  --external-link-border: 0;
  --external-link-hover-color: #4183c4;
}
</code></pre>
    </div>
    <small class="note">It does not work in browsers like Internet Explorer etc which do not correspond to the CSS variables (<code>var()</code>).</small>
  </div>
</section>
<section id="forms" class="sloth-styles">
  <h3>Forms</h3>
  <aside>
    There are a wide variety of form parts provided by the Sloth style. However, please note that some parts are not compatible with older browsers.
  </aside>
  <div class="flx-row my1">
    <div class="w-half">
      <form autocomplete="off">
        <label for="ameli">Email</label>
        <input type="email" id="ameli" placeholder="Enter your email address" autocomplete="nope">
        <label for="salting" class="required">Password</label>
        <input type="password" id="salting" placeholder="Enter your password" autocomplete="new-password" required>
        <label for="bio">Biography</label>
        <textarea id="bio" placeholder="Tell us about yourself"></textarea>
      </form>
    </div>
    <div class="w-half">
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
  <h5 class="muted">Inline forms</h5>
  <div class="flx-col my1">
    <div class="w-full">
      <form class="inline">
        <label>Name</label>
        <input type="text" placeholder="First Name" size="12">
        <input type="text" placeholder="Last Name" size="12">
      </form>
    </div>
    <div class="w-full">
      <pre class="prettyprint"><code>&lt;form class="inline">
  &lt;label>Name&lt;/label>
  &lt;input type="text" placeholder="First Name">
  &lt;input type="text" placeholder="Last Name">
&lt;/form></code></pre>
    </div>
  </div>
  <h5 class="muted">Various Form States</h5>
  <div class="flx-row my1">
    <div class="w-half">
      <form>
        <label class="muted">Disabled</label>
        <input type="text" disabled value="Disabled to enter this text field" class="mb1">
        <textarea disabled class="noresize">Disabled to enter this textarea</textarea>
        <label>Read-only</label>
        <input type="text" readonly value="This text field read only" class="mb1">
        <textarea readonly>This textarea read only</textarea>
      </form>
    </div>
    <div class="w-half">
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
  <h5 class="muted">Checkboxes</h5>
  <div class="flx-row my1">
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
  <h5 class="muted">Radio buttons</h5>
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
  <h5 class="muted">Select boxes</h5>
  <div class="flx-row my1">
    <div class="w-half">
      <form>
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
    <div class="w-half">
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
&lt;/label>
</code></pre>
    </div>
  </div>
  <h5 class="muted">Datalist</h5>
  <div class="flx-col my1">
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
    <div class="w-full">
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
  <h5 class="muted">Toggle switch</h5>
  <div class="flx-col my1">
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
<!-- /*        */ -- >
        <hr>
        <label class="tgl"><input type="checkbox" disabled><span class="tgl-btn"></span></label>
        <label class="tgl clr-prim"><input type="checkbox" checked><span class="tgl-btn"></span></label>
        <label class="tgl clr-sec" ><input type="checkbox" checked><span class="tgl-btn"></span></label>
        <label class="tgl clr-tert"><input type="checkbox" checked><span class="tgl-btn"></span></label>
        <label class="tgl clr-quat"><input type="checkbox" checked><span class="tgl-btn"></span></label>
        <label class="tgl clr-quin"><input type="checkbox" checked><span class="tgl-btn"></span></label>
        <hr>
        <label class="tgl flat"><input type="checkbox" disabled><span class="tgl-btn"></span></label>
        <label class="tgl flat clr-prim"><input type="checkbox" checked><span class="tgl-btn"></span></label>
        <label class="tgl flat clr-sec" ><input type="checkbox" checked><span class="tgl-btn"></span></label>
        <label class="tgl flat clr-tert"><input type="checkbox" checked><span class="tgl-btn"></span></label>
        <label class="tgl flat clr-quat"><input type="checkbox" checked><span class="tgl-btn"></span></label>
        <label class="tgl flat clr-quin"><input type="checkbox" checked><span class="tgl-btn"></span></label>
        <hr>
        <label class="tgl flip clr-prim"><input type="checkbox" disabled><span class="tgl-btn" data-tgl-off="Nope" data-tgl-on="Yeah!"></span></label>
        <label class="tgl flip clr-prim"><input type="checkbox" checked><span class="tgl-btn" data-tgl-off="Nope" data-tgl-on="Yeah!"></span></label>
        <label class="tgl flip clr-sec" ><input type="checkbox" checked><span class="tgl-btn" data-tgl-off="Nope" data-tgl-on="Yeah!"></span></label>
        <label class="tgl flip clr-tert"><input type="checkbox" checked><span class="tgl-btn" data-tgl-off="Nope" data-tgl-on="Yeah!"></span></label>
        <label class="tgl flip clr-quat"><input type="checkbox" checked><span class="tgl-btn" data-tgl-off="Nope" data-tgl-on="Yeah!"></span></label>
        <label class="tgl flip clr-quin"><input type="checkbox" checked><span class="tgl-btn" data-tgl-off="Nope" data-tgl-on="Yeah!"></span></label>
<!-- /*        */ -->
      </form>
    </div>
    <div class="w-full">
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
&lt;/label>
</code></pre>
    </div>
  </div>
  <hr>
  <h5 class="muted">Floating label</h5>
  <div class="flx-row my1">
    <div class="w-half">
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
    <div class="w-half">
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
&lt;/label>
</code></pre>
    </div>
  </div>
  <div class="w-full">
    <small class="note">In the styling of floating label, there are used <code>:placeholder-shown</code> pseudo-class, therefore it does not working on the browsers that is not supported as like edge.</small>
  </div>
</section>
<section id="buttons" class="sloth-styles">
  <h3>Buttons</h3>
  <aside>
    In the Sloth, the "submit" button is styled in the primary color. Add <code>.clr-prim</code> class if you want to explicitly style the primary color.
  </aside>
  <div class="flx-col my1">
    <div class="w-full mb1">
      <input type="submit" value="Input Submit" onclick="_void(this.value)">
      <input type="button" value="Input Button" onclick="_void(this.value)">
      <button type="submit" onclick="_void(this.textContent)">Button Submit</button>
      <button type="button" onclick="_void(this.textContent)">Button Normal</button>
      <button type="submit" disabled onclick="_void(this.textContent)">Disabled Submit</button>
      <button type="button" disabled onclick="_void(this.textContent)">Disabled Normal</button>
    </div>
    <div class="w-full">
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
  <div class="flx-col my1">
    <h5 class="muted">Color Variations</h5>
    <div class="w-full mb1">
      <button type="button" class="clr-prim" onclick="_void(this.textContent)">Primary</button>
      <button type="button" class="clr-sec"  onclick="_void(this.textContent)">Secondary</button>
      <button type="button" class="clr-tert" onclick="_void(this.textContent)">Tertiary</button>
      <button type="button" class="clr-quat" onclick="_void(this.textContent)">Quaternary</button>
      <button type="button" class="clr-quin" onclick="_void(this.textContent)">Quinary</button>
    </div>
    <div class="w-full">
      <pre class="prettyprint"><code>&lt;button type="button" class="clr-prim">Primary&lt;/button>
&lt;button type="button" class="clr-sec" >Secondary&lt;/button>
&lt;button type="button" class="clr-tert">Tertiary&lt;/button>
&lt;button type="button" class="clr-quat">Quaternary&lt;/button>
&lt;button type="button" class="clr-quin">Quinary&lt;/button>
</code></pre>
    </div>
  </div>
  <div class="flx-col my1">
    <h5 class="muted">Outline butons</h5>
    <div class="w-full mb1">
      <!-- button type="submit" class="outline" onclick="_void(this.textContent)">Submit</button -->
      <button type="button" class="outline"  onclick="_void(this.textContent)">Default</button>
      <button type="button" class="outline clr-prim" onclick="_void(this.textContent)">Primary</button>
      <button type="button" class="outline clr-sec"  onclick="_void(this.textContent)">Secondary</button>
      <button type="button" class="outline clr-tert" onclick="_void(this.textContent)">Tertiary</button>
      <button type="button" class="outline clr-quat" onclick="_void(this.textContent)">Quaternary</button>
      <button type="button" class="outline clr-quin" onclick="_void(this.textContent)">Quinary</button>
    </div>
    <div class="w-full">
      <pre class="prettyprint"><code>&lt;button type="button" class="outline">Default&lt;/button>
&lt;button type="button" class="outline clr-prim">Primary&lt;/button>
&lt;button type="button" class="outline clr-sec" >Secondary&lt;/button>
&lt;button type="button" class="outline clr-tert">Tertiary&lt;/button>
&lt;button type="button" class="outline clr-quat">Quaternary&lt;/button>
&lt;button type="button" class="outline clr-quin">Quinary&lt;/button>
</code></pre>
    </div>
  </div>
  <div class="flx-col my1">
    <h5 class="muted">Flat butons</h5>
    <div class="w-full mb1">
      <!-- button type="submit" class="flat" onclick="_void(this.textContent)">Submit</button -->
      <button type="button" class="flat" onclick="_void(this.textContent)">Default</button>
      <button type="button" class="flat clr-prim" onclick="_void(this.textContent)">Primary</button>
      <button type="button" class="flat clr-sec" onclick="_void(this.textContent)">Secondary</button>
      <button type="button" class="flat clr-tert" onclick="_void(this.textContent)">Tertiary</button>
      <button type="button" class="flat clr-quat" onclick="_void(this.textContent)">Quaternary</button>
      <button type="button" class="flat clr-quin" onclick="_void(this.textContent)">Quinary</button>
    </div>
    <div class="w-full">
      <pre class="prettyprint"><code>&lt;button type="button" class="flat">Default&lt;/button>
&lt;button type="button" class="flat clr-prim">Primary&lt;/button>
&lt;button type="button" class="flat clr-sec" >Secondary&lt;/button>
&lt;button type="button" class="flat clr-tert">Tertiary&lt;/button>
&lt;button type="button" class="flat clr-quat">Quaternary&lt;/button>
&lt;button type="button" class="flat clr-quin">Quinary&lt;/button>
</code></pre>
    </div>
  </div>
  <div class="flx-col my1">
    <h5 class="muted">Floating Action Button</h5>
    <div class="w-full flx-row flx-wrap mt1">
      <a class="btn-fab mr1 mb1" href="javascript:_void(this.textContent)"><i class="fas fa-home"></i></a>
      <a class="btn-fab clr-prim mr1 mb1" href="javascript:_void(this.textContent)"><i class="fas fa-plus"></i></a>
      <a class="btn-fab clr-sec mr1 mb1"  href="javascript:_void(this.textContent)"><i class="fas fa-star"></i></a>
      <a class="btn-fab clr-tert mr1 mb1" href="javascript:_void(this.textContent)"><i class="far fa-heart"></i></a>
      <a class="btn-fab clr-quat mr1 mb1" href="javascript:_void(this.textContent)"><i class="fas fa-pencil-alt"></i></a>
      <a class="btn-fab clr-quin mr1 mb1" href="javascript:_void(this.textContent)"><i class="fas fa-share"></i></a>
    </div>
    <div class="w-full">
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
<section id="tables" class="sloth-styles">
  <h3>Tables</h3>
  <aside>
    The Sloth styled table has several option classes.<br>
    The <code>.slim</code> class can shrink the size of the whole table, the <code>.fixed</code> class can justify horizontal cell width, and the <code>.cell-center</code> or <code>.cell-right</code> classes can align text in all cells.
  </aside>
  <div class="flx-col my1">
    <div class="w-full">
      <table>
        <thead>
          <tr><th>Name</th><th>Character</th><th>Born</th></tr>
        </thead>
        <tbody>
          <tr><td>Ryan</td><td>Deadpool</td><td>1991</td></tr>
          <tr><td>Josh</td><td>Cable</td><td>1990</td></tr>
          <tr><td>Zazie</td><td>Domino</td><td>1992</td></tr>
        </tbody>
        <tfoot>
          <tr><td colspan="3">3 People</td></tr>
        </tfoot>
      </table>
    </div>
    <div class="w-full">
      <pre class="prettyprint"><code>&lt;table>
  &lt;thead>
    &lt;tr>&lt;th>Name&lt;/th>&lt;th>Character&lt;/th>&lt;th>Born&lt;/th>&lt;/tr>
  &lt;/thead>
  &lt;tbody>
    &lt;tr>&lt;td>Ryan&lt;/td>&lt;td>Deadpool&lt;/td>&lt;td>1991&lt;/td>&lt;/tr>
    &lt;tr>&lt;td>Josh&lt;/td>&lt;td>Cable&lt;/td>&lt;td>1990&lt;/td>&lt;/tr>
    &lt;tr>&lt;td>Zazie&lt;/td>&lt;td>Domino&lt;/td>&lt;td>1992&lt;/td>&lt;/tr>
  &lt;/tbody>
  &lt;tfoot>
    &lt;tr>&lt;td colspan="3">3 People&lt;/td>&lt;/tr>
  &lt;/tfoot>
&lt;/table></code></pre>
    </div>
  </div>
  <div class="flx-col my1">
    <h5 class="muted">No borderd table</h5>
    <div class="w-full">
      <table class="nobrd">
        <thead>
          <tr><th>Name</th><th>Character</th><th>Born</th></tr>
        </thead>
        <tbody>
          <tr><td>Ryan</td><td>Deadpool</td><td>1991</td></tr>
          <tr><td>Josh</td><td>Cable</td><td>1990</td></tr>
          <tr><td>Zazie</td><td>Domino</td><td>1992</td></tr>
        </tbody>
        <tfoot>
          <tr><td colspan="3">3 People</td></tr>
        </tfoot>
      </table>
    </div>
    <div class="w-full">
      <pre class="prettyprint"><code>&lt;table class="nobrd">
  &#x22EE;
&lt;/table></code></pre>
    </div>
  </div>
</section>
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
<section id="components" class="sloth-styles">
  <h3>Components</h3>
  <aside>
    The sloth style has several stylized component styles to easily express rich content.
  </aside>
  <h5 class="muted">vCard</h5>
  <div class="flx-col my1">
    <div class="w-full">
      <div class="vcard">
        <figure>
          <img src="./noimage-300x300.png" width="144" height="144">
          <figcaption>Sloth Style</figcaption>
        </figure>
        <dl>
          <dt>Sloth Style</dt>
          <dd>Mobile First CSS Micro Framework. It has reduced styling coding costs to a minimum with non-BEM and simpler naming conventions than OOCSS.</dd>
          <dd class="footer">
            <a href="javascript:;" class="nons"><i class="fab fa-twitter"></i></a>
            <a href="javascript:;" class="nons"><i class="fab fa-github"></i></a>
          </dd>
        </dl>
      </div>
      <div class="vcard">
        <figure>
          <img src="./noimage-300x300.png" width="96" height="96">
          <figcaption>Sloth Style</figcaption>
        </figure>
        <dl>
          <dt>Sloth Style</dt>
          <dd>Mobile First CSS Micro Framework. It has reduced styling coding costs to a minimum with non-BEM and simpler naming conventions than OOCSS.</dd>
        </dl>
      </div>
      <div class="vcard">
        <figure>
          <img src="./noimage-300x300.png" width="80" height="80">
          <figcaption hidden>Sloth Style</figcaption>
        </figure>
        <dl>
          <dt>Sloth Style</dt>
          <dd>Mobile First CSS Micro Framework. It has reduced styling coding costs to a minimum with non-BEM and simpler naming conventions than OOCSS.</dd>
        </dl>
      </div>
    </div>
    <div class="w-full">
      <pre class="prettyprint"><code>&lt;div class="vcard">
  &lt;figure>
    &lt;img src="images/noimage.png" width="144" height="144">
    &lt;figcaption>Sloth Style&lt;/figcaption>
  &lt;/figure>
  &lt;dl>
    &lt;dt>Sloth Style&lt;/dt>
    &lt;dd>Mobile First CSS Micro Framework. It has reduced styling coding costs to a minimum with non-BEM and simpler naming conventions than OOCSS.&lt;/dd>
    &lt;dd class="footer">
      &lt;a href="javascript:;" class="nons">&lt;i class="fab fa-twitter">&lt;/i>&lt;/a>
      &lt;a href="javascript:;" class="nons">&lt;i class="fab fa-github">&lt;/i>&lt;/a>
    &lt;/dd>
  &lt;/dl>
&lt;/div>
</code></pre>
    </div>
  </div>
  <h5 class="muted">Navigation Menu</h5>
  <aside>This component is header navigation with sliding left side menu that fit on the mobile page. If you want to see demo of below codes on this page, try to switch a toggle.</aside>
  <div class="flx-col mb1">
    <div class="w-full">
      <form class="m1">
        <label class="tgl">Show navigation menu demo.
          <input type="checkbox" id="toggle-navi-menu">
          <span class="tgl-btn"></span>
        </label>
      </form>
    </div>
    <div class="w-full">
      <pre class="prettyprint"><code>&lt;header class="navi-menu">
  &lt;div class="w-half flx-row">
    &lt;label class="toggle">
      &lt;input type="checkbox">
      &lt;div class="backdrop">&lt;/div>
      &lt;div class="menu">
        &lt;ul class="unstyled">
          &lt;li class="pr1">&lt;a href="#introduction">&lt;i class="fas fa-home mr1">&lt;/i>HOME&lt;/a>&lt;/li>
          &lt;li class="pr1">&lt;a href="#why-sloth">&lt;i class="fas fa-question mr1">&lt;/i>Why Sloth?&lt;/a>&lt;/li>
          &lt;li class="pr1">&lt;a href="#get-started-sloth">&lt;i class="fab fa-gripfire mr1">&lt;/i>Get Started Sloth!&lt;/a>&lt;/li>
          &lt;li class="pr1">&lt;a href="#basic-structures">&lt;i class="fas fa-chalkboard mr1">&lt;/i> Basic Structures&lt;/a>&lt;/li>
        &lt;/ul>
        &lt;hr>
          &#x22EE;
      &lt;/div>
    &lt;/label>
    &lt;a href="#sloth-docs" class="brand">&lt;img src="images/sloth.svg" height="36"> Sloth&lt;/a>
  &lt;/div>
  &lt;div class="w-half flx-row flx-end pr2">
    &lt;button type="button" class="outline mb0">&lt;i class="fas fa-times">&lt;/i> Close Navi&lt;/button>
  &lt;/div>
&lt;/header>
</code></pre>
    </div>
    <small class="note">The above icon uses powered by the <a rel="external" href="https://fontawesome.com/">Font awesome</a>.</small>
    <div class="w-full my1">
      <aside>Also, you can override the height of the horizontal navigation block and the width of the sliding side menu by using CSS variables.</aside>
    </div>
    <div class="w-full">
      <pre class="prettyprint"><code>:root {
  --navi-height-sm: 56px; /* for mobile screen */
  --navi-height-md: 64px; /* for tablet screen */
  --navi-height-lg: 72px; /* for pc screen */
  --menu-width-sm: 180px; /* for mobile screen */
  --menu-width-md: 200px; /* for tablet screen */
  --menu-width-lg: 240px; /* for pc screen */
}
</code></pre>
    </div>
    <small class="note">It does not work in browsers like Internet Explorer etc which do not correspond to the CSS variables (<code>var()</code>).</small>
  </div>
<!-- /*
  <h5 class="muted">Dialog</h5>
  <div class="flx-col my1">
    <div class="w-full">
      <p></p>
<dialog id="sloth-dialog" open>
  dialog box
  <button onclick="javascript:document.getElementById('humble-dialog').removeAttribute('open')">close</button>
</dialog>
    </div>
  </div>
  <div class="flx-col my1">
    <div class="w-full">
      <pre class="prettyprint"><code>
</code></pre>
    </div>
  </div>
*/ -->
</section>
<section id="colors" class="sloth-styles">
  <h3>Colors</h3>
  <aside>
    There are 5 color presets available by default for the Sloth style. These preset colors can also override custom colors via CSS variables.
  </aside>
  <div class="flx-row my1">
    <div class="w-half">
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
    <div class="w-half">
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
  <div class="flx-col mb1">
    <h6 class="muted">Demo to override color</h6>
    <form class="inline" _class="flx-row flx-evenly">
      <select id="override-color">
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
      <input type="text" id="color-code" placeholder="Enter color value">
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
<section id="utilities" class="sloth-styles">
  <h3>Utilities</h3>
  <aside>
    Utility classes are shorthanded CSS properties that can be used with or without the <code>.sloth</code> class.
  </aside>
  <h5 class="muted">Margin</h5>
  <aside>
    Allowed margin values ​​are 0 to 2 and units are "rem". Also, there are provided the <code>.ma</code> as auto all margin, the <code>.mxa</code> as horizontal auto margin, the <code>.mya</code> as vertical auto margin.
  </aside>
  <div class="flx-row my1">
    <div class="w-half flx-col">
      <div class="bg-lightgray"><div class="m0 brd bg-white">.m0</div></div>
      <div class="bg-lightgray"><div class="m1 brd bg-white">.m1</div></div>
      <div class="bg-lightgray"><div class="m2 brd bg-white">.m2</div></div>
      <div class="bg-lightgray"><div class="mx1 brd bg-white">.mx1 (left + right)</div></div>
      <div class="bg-lightgray"><div class="my1 brd bg-white">.my1 (top + bottom)</div></div>
      <div class="bg-lightgray"><div class="mt1 brd bg-white">.mt1 (top only)</div></div>
      <div class="bg-lightgray"><div class="mr1 brd bg-white">.mr1 (right only)</div></div>
      <div class="bg-lightgray"><div class="mb1 brd bg-white">.mb1 (bottom only)</div></div>
      <div class="bg-lightgray"><div class="ml1 brd bg-white">.ml1 (left only)</div></div>
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>&lt;div class="m0">.m0&lt;/div>
&lt;div class="m1">.m1&lt;/div>
&lt;div class="m2">.m2&lt;/div>
&lt;div class="mx1">.mx1 (left & right)&lt;/div>
&lt;div class="my1">.my1 (top & bottom)&lt;/div>
&lt;div class="mt1">.mt1 (top only)&lt;/div>
&lt;div class="mr1">.mr1 (right only)&lt;/div>
&lt;div class="mb1">.mb1 (bottom only)&lt;/div>
&lt;div class="ml1">.ml1 (left only)&lt;/div>
</code></pre>
    </div>
  </div>
  <h5 class="muted">Padding</h5>
  <aside>Allowed padding values ​​are 0 to 2 and units are "rem".</aside>
  <div class="flx-row my1">
    <div class="w-half">
      <div class="brd bg-lightgray p0"><div class="bg-white">.p0</div></div>
      <div class="brd bg-lightgray p1"><div class="bg-white">.p1</div></div>
      <div class="brd bg-lightgray p2"><div class="bg-white">.p2</div></div>
      <div class="brd bg-lightgray px1"><div class="bg-white">.px1 (left & right)</div></div>
      <div class="brd bg-lightgray py1"><div class="bg-white">.py1 (top & bottom)</div></div>
      <div class="brd bg-lightgray pt1"><div class="bg-white">.pt1 (top only)</div></div>
      <div class="brd bg-lightgray pr1"><div class="bg-white">.pr1 (right only)</div></div>
      <div class="brd bg-lightgray pb1"><div class="bg-white">.pb1 (bottom only)</div></div>
      <div class="brd bg-lightgray pl1"><div class="bg-white">.pl1 (left only)</div></div>
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>&lt;div class="p0">.p0&lt;/div>
&lt;div class="p1">.p1&lt;/div>
&lt;div class="p2">.p2&lt;/div>
&lt;div class="px1">.px1 (left & right)&lt;/div>
&lt;div class="py1">.py1 (top & bottom)&lt;/div>
&lt;div class="pt1">.pt1 (top only)&lt;/div>
&lt;div class="pr1">.pr1 (right only)&lt;/div>
&lt;div class="pb1">.pb1 (bottom only)&lt;/div>
&lt;div class="pl1">.pl1 (left only)&lt;/div>
</code></pre>
    </div>
  </div>
  <h5 class="muted">Width</h5>
  <aside>This is able to specify block width as like the width 100% is <code>.w-1</code> or <code>.w-full</code>, 50% is <code>.w-1-2</code> or <code>.w-half</code>. Refer to section of flexboxes on the <a href="#grid-systems">Grid Systems</a>.</aside>
  <h5 class="muted">Height</h5>
  <aside>This is able to specify block height as like the height 100% is <code>.h-full</code> and 50% is <code>.h-half</code>. It has only two classes about height as utility class.</aside>
  <h5 class="muted">Border</h5>
  <div class="flx-row my1">
    <div class="w-half">
      <div class="brd mb1">.brd</div>
      <div class="brd-prim mb1">.brd-prim</div>
      <div class="brd-sec mb1" >.brd-sec</div>
      <div class="brd-tert mb1">.brd-tert</div>
      <div class="brd-quat mb1">.brd-quat</div>
      <div class="brd-quin mb1">.brd-quin</div>
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>&lt;div class="brd">.brd&lt;/div>
&lt;div class="brd-prim">.brd-prim&lt;/div>
&lt;div class="brd-sec" >.brd-sec&lt;div>
&lt;div class="brd-tert">.brd-tert&lt;/div>
&lt;div class="brd-quat">.brd-quat&lt;/div>
&lt;div class="brd-quin">.brd-quin&lt;/div>
</code></pre>
    </div>
  </div>
  <h5 class="muted">Background & Text Color</h5>
  <aside>It is also possible to use <code>.muted</code> as a shorthand only for <code>.txt-gray</code>.</aside>
  <div class="flx-row my1">
    <div class="w-half">
      <div class="bg-white txt-black">.bg-white.txt-black</div>
      <div class="bg-whitesmoke txt-darkgray">.bg-whitesmoke.txt-darkgray</div>
      <div class="bg-lightgray txt-gray" >.bg-lightgray.txt-gray</div>
      <div class="bg-fog txt-fog">.bg-fog.txt-fog</div>
      <div class="bg-gray txt-lightgray">.bg-gray.txt-lightgray</div>
      <div class="bg-darkgray txt-whitesmoke">.bg-darkgray.txt-whitesmoke</div>
      <div class="bg-black txt-white">.bg-darkgray.txt-white</div>
      <hr>
      <div class="bg-prim txt-quin">.bg-prim.txt-quin</div>
      <div class="bg-sec txt-quat" >.bg-sec.txt-quat</div>
      <div class="bg-tert txt-tert">.bg-tert.txt-tert</div>
      <div class="bg-quat txt-sec" >.bg-quat.txt-sec</div>
      <div class="bg-quin txt-prim">.bg-quin.txt-prim</div>
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>&lt;div class="bg-white txt-black">.bg-white.txt-black&lt;/div>
&lt;div class="bg-whitesmoke txt-darkgray">.bg-whitesmoke.txt-darkgray&lt;/div>
&lt;div class="bg-lightgray txt-gray" >.bg-lightgray.txt-gray&lt;/div>
&lt;div class="bg-fog txt-fog">.bg-fog.txt-fog&lt;/div>
&lt;div class="bg-gray txt-lightgray">.bg-gray.txt-lightgray&lt;/div>
&lt;div class="bg-darkgray txt-whitesmoke">.bg-darkgray.txt-whitesmoke&lt;/div>
&lt;div class="bg-black txt-white">.bg-darkgray.txt-white&lt;/div>
&mdash;&mdash;
&lt;div class="bg-prim txt-quin">.bg-prim.txt-quin&lt;/div>
&lt;div class="bg-sec txt-quat" >.bg-sec.txt-quat&lt;/div>
&lt;div class="bg-tert txt-tert">.bg-tert.txt-tert&lt;/div>
&lt;div class="bg-quat txt-sec" >.bg-quat.txt-sec&lt;/div>
&lt;div class="bg-quin txt-prim">.bg-quin.txt-prim&lt;/div>
</code></pre>
    </div>
  </div>
  <h5 class="muted">Alignment</h5>
  <aside>
    The horizontal alignment classes (<code>.txt-*</code>) are able to apply a "text-align" property to inline elements or incontents. On the other hand the vertical alignment classes (<code>.v-*</code>) would apply a "vertical-align" property to only inline element as like the table-cell and an image tag.
  </aside>
  <div class="flx-row my1">
    <div class="w-half">
      <h6 class="muted">Horizontal alignment</h6>
      <div class="brd">
        <p class="txt-left">.txt-left</p>
        <p class="txt-center">.txt-center</p>
        <p class="txt-right">.txt-right</p>
        <p class="txt-justify">.txt-justify for using to context that has some words.</p>
      </div>
      <h6 class="muted">Vertical alignment</h6>
      <table class="nons fixed brd exam1">
        <tbody>
          <tr>
            <td class="v-top">.v-top</td>
            <td class="v-middle">.v-middle</td>
            <td class="v-bottom">.v-bottom</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>&lt;div class="brd">
  &lt;p class="txt-left">.txt-left&lt;/p>
  &lt;p class="txt-center">.txt-center&lt;/p>
  &lt;p class="txt-right">.txt-right&lt;/p>
  &lt;p class="txt-justify">.txt-justify for using to context that has some words.&lt;/p>
&lt;/div>
&mdash;&mdash;
&lt;table class="nons fixed brd">
  &lt;tbody>&lt;tr>
    &lt;td class="v-top">.v-top&lt;/td>
    &lt;td class="v-middle">.v-middle&lt;/td>
    &lt;td class="v-bottom">.v-bottom&lt;/td>
  &lt;/tr>&lt;/tbody>
&lt;/table>
</code></pre>
    </div>
  </div>
  <aside>
    There are the alignment classes for flexbox as below. Also, it has defaults to <code>flex-wrap: nowrap</code> in the <code>.flx-row</code> and <code>.flx-col</code> classes. If you want to styling to the wrappable flexbox, you should apply with <code>.flx-wrap</code> together.
  </aside>
  <div class="flx-col my1">
    <h6 class="muted">Case of ".flx-row" <small>(<code>flex-direction: row</code>)</small></h6>
    <div class="w-full">
      <div>.flx-row.flx-start<br>
        <div class="flx-row flx-start brd bg-lightgray mb1">
          <div class="brd bg-white px1">Inner Item 1</div>
          <div class="brd bg-white px1">Inner Item 2</div>
          <div class="brd bg-white px1">Inner Item 3</div>
        </div>
      </div>
      <div>.flx-row.flx-center<br>
        <div class="flx-row flx-center brd bg-lightgray mb1">
          <div class="brd bg-white px1">Inner Item 1</div>
          <div class="brd bg-white px1">Inner Item 2</div>
          <div class="brd bg-white px1">Inner Item 3</div>
        </div>
      </div>
      <div>.flx-row.flx-justify<br>
        <div class="flx-row flx-justify brd bg-lightgray mb1">
          <div class="brd bg-white px1">Inner Item 1</div>
          <div class="brd bg-white px1">Inner Item 2</div>
          <div class="brd bg-white px1">Inner Item 3</div>
        </div>
      </div>
      <div>.flx-row.flx-around<br>
        <div class="flx-row flx-around brd bg-lightgray mb1">
          <div class="brd bg-white px1">Inner Item 1</div>
          <div class="brd bg-white px1">Inner Item 2</div>
          <div class="brd bg-white px1">Inner Item 3</div>
        </div>
      </div>
      <div>.flx-row.flx-evenly<br>
        <div class="flx-row flx-evenly brd bg-lightgray mb1">
          <div class="brd bg-white px1">Inner Item 1</div>
          <div class="brd bg-white px1">Inner Item 2</div>
          <div class="brd bg-white px1">Inner Item 3</div>
        </div>
      </div>
      <div>.flx-row.flx-end<br>
        <div class="flx-row flx-end brd bg-lightgray mb1">
          <div class="brd bg-white px1">Inner Item 1</div>
          <div class="brd bg-white px1">Inner Item 2</div>
          <div class="brd bg-white px1">Inner Item 3</div>
        </div>
      </div>
      <div class="flx-row flx-evenly">
        <div class="w-1-3 mx1">.flx-row.item-start<br>
          <div class="flx-row flx-evenly item-start brd bg-lightgray mb1 exam1">
            <div class="brd bg-white px1">Inner Item</div>
          </div>
        </div>
        <div class="w-1-3 mx1">.flx-row.item-center<br>
          <div class="flx-row flx-evenly item-center brd bg-lightgray mb1 exam1">
            <div class="brd bg-white px1">Inner Item</div>
          </div>
        </div>
        <div class="w-1-3 mx1">.flx-row.item-end<br>
          <div class="flx-row flx-evenly item-end brd bg-lightgray mb1 exam1">
            <div class="brd bg-white px1">Inner Item</div>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full">
      <pre class="prettyprint"><code>&lt;div class="flx-row flx-start">
  &lt;div>Inner Item 1&lt;/div>
  &lt;div>Inner Item 2&lt;/div>
  &lt;div>Inner Item 3&lt;/div>
&lt;/div>
&lt;div class="flx-row item-start">
  &#x22EE;
&lt;/div>
</code></pre>
    </div>
  </div>
  <h6 class="muted">Case of ".flx-col" <small>(<code>flex-direction: column</code>)</small></h6>
  <div class="flx-col my1">
    <div class="flx-row flx-wrap flx-evenly w-full">
      <div class="w-1-3 pr1 mb1">.flx-col.flx-start<br>
        <div class="flx-col flx-wrap flx-start brd bg-lightgray exam2">
          <div class="brd bg-white px1">Inner Item 1</div>
          <div class="brd bg-white px1">Inner Item 2</div>
          <div class="brd bg-white px1">Inner Item 3</div>
        </div>
      </div>
      <div class="w-1-3 pr1 mb1">.flx-col.flx-center<br>
        <div class="flx-col flx-wrap flx-center brd bg-lightgray exam2">
          <div class="brd bg-white px1">Inner Item 1</div>
          <div class="brd bg-white px1">Inner Item 2</div>
          <div class="brd bg-white px1">Inner Item 3</div>
        </div>
      </div>
      <div class="w-1-3 pr1 mb1">.flx-col.flx-justify<br>
        <div class="flx-col flx-wrap flx-justify brd bg-lightgray exam2">
          <div class="brd bg-white px1">Inner Item 1</div>
          <div class="brd bg-white px1">Inner Item 2</div>
          <div class="brd bg-white px1">Inner Item 3</div>
        </div>
      </div>
      <div class="w-1-3 pr1 mb1">.flx-col.flx-around<br>
        <div class="flx-col flx-wrap flx-around brd bg-lightgray exam2">
          <div class="brd bg-white px1">Inner Item 1</div>
          <div class="brd bg-white px1">Inner Item 2</div>
          <div class="brd bg-white px1">Inner Item 3</div>
        </div>
      </div>
      <div class="w-1-3 pr1 mb1">.flx-col.flx-evenly<br>
        <div class="flx-col flx-wrap flx-evenly brd bg-lightgray exam2">
          <div class="brd bg-white px1">Inner Item 1</div>
          <div class="brd bg-white px1">Inner Item 2</div>
          <div class="brd bg-white px1">Inner Item 3</div>
        </div>
      </div>
      <div class="w-1-3 pr1 mb1">.flx-col.flx-end<br>
        <div class="flx-col flx-wrap flx-end brd bg-lightgray exam2">
          <div class="brd bg-white px1">Inner Item 1</div>
          <div class="brd bg-white px1">Inner Item 2</div>
          <div class="brd bg-white px1">Inner Item 3</div>
        </div>
      </div>
      <div class="w-full">.flx-col.item-start<br>
        <div class="flx-col item-start brd bg-lightgray mb1">
          <div class="brd bg-white px1">Inner Item</div>
        </div>
      </div>
      <div class="w-full">.flx-col.item-center<br>
        <div class="flx-col item-center brd bg-lightgray mb1">
          <div class="brd bg-white px1">Inner Item</div>
        </div>
      </div>
      <div class="w-full">.flx-col.item-end<br>
        <div class="flx-col item-end brd bg-lightgray mb1">
          <div class="brd bg-white px1">Inner Item</div>
        </div>
      </div>
    </div>
    <div class="w-full">
      <pre class="prettyprint"><code>&lt;div class="flx-col flx-start">
  &lt;div>Inner Item 1&lt;/div>
  &lt;div>Inner Item 2&lt;/div>
  &lt;div>Inner Item 3&lt;/div>
&lt;/div>
&lt;div class="flx-col item-start">
  &#x22EE;
&lt;/div>
</code></pre>
    </div>
  </div>
  <h5 class="muted">Text decorations</h5>
  <aside>
    It has several utility classes to decorate text in context.
  </aside>
  <h6 class="muted">Font sizes</h6>
  <div class="flx-row my1">
    <div class="w-half">
      <p>
        The font size can change to <span class="fnt-xl">xlarge (144%)</span>, <span class="fnt-lg">large (120%)</span>, <span class="fnt-sm">small (80%)</span>, <span class="fnt-xs">xsmall (64%)</span> from inherit size on element.
      </p>
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>&lt;span class="fnt-xl">xLarge (144%)&lt;/span>
&lt;span class="fnt-lg">Large  (120%)&lt;/span>
&lt;span class="fnt-sm">Small  ( 80%)&lt;/span>
&lt;span class="fnt-xs">xSmall ( 64%)&lt;/span>
</code></pre>
    </div>
  </div>
  <h6 class="muted">Line-height</h6>
  <div class="flx-row my1">
    <div class="w-half">
      <p class="lh-1">
        The line-height CSS property sets the amount of space used for lines, such as in text.
      </p>
      <p class="lh-2">
        The ".lh-2" class is same as "line-height: 2". That is the best size for the context that contains the ruby.
      </p>
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>&lt;p class="lh-1">
  The line-height CSS property...
&lt;/p>
&lt;p class="lh-2">
  The ".lh-2" class is...
&lt;/p>
</code></pre>
    </div>
  </div>
  <h6 class="muted">Text transforms</h6>
  <div class="flx-row my1">
    <div class="w-half">
      <p>
        <span class="upper">This is uppercase.</span><br>
        <span class="lower">This is LOWERCASE.</span><br>
        <span class="capital">This is capitalize.</span>
      </p>
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>&lt;span class="upper">This is uppercase.&lt;/span>
&lt;span class="lower">This is LOWERCASE.&lt;/span>
&lt;span class="capital">This is capitalize.&lt;/span>
</code></pre>
    </div>
  </div>
  <h5 class="muted">Overflow</h5>
  <aside>If you use those utility classes for overflowing element or text, you should specify width or height to element which is as the container. Such the case it recommends you can use <a href="./extensions.html#element-sizing">the element sizing included in the sloth extension</a>.</aside>
  <h6 class="muted">Block elements</h6>
  <div class="flx-row my1">
    <div class="w-half">
      <div class="of-v">Or "overflow-v" class, this is styled as "overflow: visible".</div>
      <div class="of-h" style="height:2rem">Or "overflow-h" class, this is styled as "overflow: hidden".</div>
      <div class="of-s" style="height:3rem">Or "overflow-s" class, this is styled as "overflow: scroll".</div>
      <div class="of-a" style="height:2rem">Or "overflow-a" class, this is styled as "overflow: auto".</div>
      <div class="of-xv">Or "overflow-xv" class, this is styled as "overflow-x: visible".</div>
      <div class="of-xh" style="height:2rem">Or "overflow-xh" class, this is styled as "overflow-x: hidden".</div>
      <div class="of-xs" style="height:3rem">Or "overflow-xs" class, this is styled as "overflow-x: scroll".</div>
      <div class="of-xa" style="height:2rem">Or "overflow-xa" class, this is styled as "overflow-x: auto".</div>
      <div class="of-yv">Or "overflow-yv" class, this is styled as "overflow-y: visible".</div>
      <div class="of-yh" style="height:2rem">Or "overflow-yh" class, this is styled as "overflow-y: hidden".</div>
      <div class="of-ys" style="height:3rem">Or "overflow-ys" class, this is styled as "overflow-y: scroll".</div>
      <div class="of-ya" style="height:2rem">Or "overflow-ya" class, this is styled as "overflow-y: auto".</div>
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>&lt;div class="of-v">Or "overflow-v" class, this is styled as "overflow: visible".&lt;/div>
&lt;div class="of-h">Or "overflow-h" class, this is styled as "overflow: hidden".&lt;/div>
&lt;div class="of-s">Or "overflow-s" class, this is styled as "overflow: scroll".&lt;/div>
&lt;div class="of-a">Or "overflow-a" class, this is styled as "overflow: auto".&lt;/div>
&lt;div class="of-xv">Or "overflow-xv" class, this is styled as "overflow-x: visible".&lt;/div>
&lt;div class="of-xh">Or "overflow-xh" class, this is styled as "overflow-x: hidden".&lt;/div>
&lt;div class="of-xs">Or "overflow-xs" class, this is styled as "overflow-x: scroll".&lt;/div>
&lt;div class="of-xa">Or "overflow-xa" class, this is styled as "overflow-x: auto".&lt;/div>
&lt;div class="of-yv">Or "overflow-yv" class, this is styled as "overflow-y: visible".&lt;/div>
&lt;div class="of-yh">Or "overflow-yh" class, this is styled as "overflow-y: hidden".&lt;/div>
&lt;div class="of-ys">Or "overflow-ys" class, this is styled as "overflow-y: scroll".&lt;/div>
&lt;div class="of-ya">Or "overflow-ya" class, this is styled as "overflow-y: auto".&lt;/div>
</code></pre>
    </div>
  </div>
  <h6 class="muted">Text Overflow</h6>
  <div class="flx-row my1">
    <div class="w-half">
      <div class="txt-of-v">Or "txt-overflow-v" class, this is never styled to overflow text.</div>
      <div class="txt-of-c">Or "txt-overflow-c" class, this is styled as "text-overflow: clip".</div>
      <div class="txt-of-e">Or "txt-overflow-e" class, this is styled as "text-overflow: ellipsis".</div>
      <!-- div class="txt-of-s" data-ellipsis="-">Or "txt-overflow-s" class, this is styled as "text-overflow: attr(data-ellipsis, '')".</div -->
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>&lt;div class="txt-of-v">Or "txt-overflow-v" class, this is never styled to overflow text.&lt;/div>
&lt;div class="txt-of-c">Or "txt-overflow-c" class, this is styled as "text-overflow: clip".&lt;/div>
&lt;div class="txt-of-e">Or "txt-overflow-e" class, this is styled as "text-overflow: ellipsis".&lt;/div>
</code></pre>
    </div>
  </div>
  <h5 class="muted">Note as helper text</h5>
  <aside>An information icon is displayed at the beginning of an element that has a <code>.note</code> class.</aside>
  <div class="flx-col my1">
    <div class="w-full mb1">
      <p class="note">You would prefer to be used this utility class for displaying text of supplementary sentence etc.</p>
    </div>
    <div class="w-full">
      <pre class="prettyprint"><code>&lt;p class="note">You would prefer to be used this utility class ...&lt;/p>
</code></pre>
    </div>
  </div>
</section>
<section id="overriding-properties" class="sloth-styles">
  <h3>Overriding Properties</h3>
  <aside>
    On the sloth style, we can override some styling properties via CSS variables without rebuild custom css. Currently overridable properties are as follows.
  </aside>
  <div class="flx-col my1">
    <div class="w-full">
    </div>
    <div class="w-full">
      <pre class="prettyprint"><code>:root {
  --base-font-size-sm: 1.4rem;
  --base-font-size-md: 1.1667rem;
  --base-font-size-lg: 1.1429rem;

  --hr-text-bgcolor: #f5f5f5;

  --ruby-font-size: 0.65em;

  --color-primary: #4183c4;
  --color-primary-active: #3876b4;
  --color-primary-active-light: rgba(46, 131, 215, 0.2);
  --color-secondary: #00a968;
  --color-secondary-active: #009058;
  --color-secondary-active-light: rgba(0, 169, 104, 0.2);
  --color-tertiary: #e8383d;
  --color-tertiary-active: #e52127;
  --color-tertiary-active-light: rgba(249, 39, 45, 0.2);
  --color-quaternary: #ee7800;
  --color-quaternary-active: #d56b00;
  --color-quaternary-active-light: rgba(238, 120, 0, 0.2);
  --color-quinary: #e9bc00;
  --color-quinary-active: #d0a700;
  --color-quinary-active-light: rgba(233, 188, 0, 0.2);

  --color-code-text: #e8383d;

  --external-link-content: "\f360";
  --external-link-font: "Font Awesome 5 Pro";
  --external-link-background: transparent;
  --external-link-border: 0;
  --external-link-hover-color: #4183c4;
  --external-link-padding-left: 1em;

  --navi-height-sm: 56px;
  --navi-height-md: 56px;
  --navi-height-lg: 56px;
  --menu-width-sm: max-content;
  --menu-width-md: max-content;
  --menu-width-lg: max-content;
}
</code></pre>
    </div>
    <small class="note">It does not work in browsers like Internet Explorer etc which do not correspond to the CSS variables (<code>var()</code>).</small>
  </div>
</section>
<section id="template" class="sloth-styles" hidden>
  <h3>Others</h3>
  <aside>
    section discription
  </aside>
  <div class="flx-row my1">
    <div class="w-half">
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>
</code></pre>
    </div>
  </div>
</section>