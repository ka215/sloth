<section id="table-of-contents" class="sloth-styles">
  <h3>Table Of Contents</h3>
  <aside>
    <p><code>&lt;div data-toc="#target-element"&gt;&lt;/div&gt;</code></p>
    By using this extension, you can easily generate the inner link list as the table of contents within specified element.<br>
    You should set an enabled selector string to the <code>data-toc</code> attribute for that. If there are multiple elements that matched your specified selector, it will be the table of contents for the first matched element. Also the listing inner links are any <code>&lt;Hn&gt;</code> tags only in the target element.<br>
  </aside>
  <div class="flx-col my2">
    <div class="w-full mb2">
      <article id="my-context" class="brd p1">
        <h2>Article Title</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quam augue, consequat ac lorem eget, bibendum interdum lacus. Morbi et laoreet dui. Donec sit amet maximus felis. Vivamus at orci pharetra, facilisis nisi quis, dignissim tortor. Etiam a neque nec massa consequat scelerisque non et lectus. Proin vitae justo ac tellus mattis tristique nec at risus. Maecenas efficitur cursus mi ac pretium. Nullam posuere diam vitae posuere ultricies.</p>
        <h3>Chapter Label 1</h3>
        <p>Integer eu leo blandit, sagittis purus non, mollis lacus. Fusce massa nunc, tincidunt in mauris a, pretium iaculis ligula. Phasellus turpis ipsum, porta vel condimentum id, egestas eget ligula. Nam dignissim a ipsum maximus porta. Morbi eu ultrices elit. Fusce sed ligula in neque fringilla sollicitudin. Cras eleifend, risus in condimentum accumsan, nisl augue rutrum nulla, eu auctor nibh tellus id diam. Praesent mattis pharetra nunc.</p>
        <h4>Section Label In Chapter</h4>
        <p>Curabitur maximus tortor sem, vitae ullamcorper sapien convallis id. Pellentesque vel commodo odio. Mauris convallis, sapien congue imperdiet tempor, lacus nisi pretium odio, sed accumsan turpis ipsum in neque. Morbi ac sodales ipsum. Ut iaculis velit eget congue faucibus. Duis eu posuere turpis, eget fermentum mauris. Quisque nec dolor lobortis diam placerat lobortis fringilla sagittis dui. Suspendisse ut mollis nisi. Duis et sapien justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce velit elit, hendrerit in mi ut, lobortis scelerisque odio. Donec fringilla est at eros laoreet tristique.</p>
      </article>
      <aside class="flx-col brd my1 px1 pb1">
        <label>Table Of Contents</label>
        <div data-toc="#my-context"></div>
      </aside>
    </div>
    <div class="w-full mb2">
      <pre class="prettyprint"><code>&lt;article id="my-context" class="brd p1">
  &lt;h2>Article Title&lt;/h2>
  &lt;p>Lorem ipsum...&lt;/p>
  &lt;h3>Chapter Label 1&lt;/h3>
  &lt;p>Integer eu...&lt;/p>
  &lt;h4>Section Label In Chapter&lt;/h4>
  &lt;p>Curabitur maximus...&lt;/p>
&lt;/article>
&lt;aside class="flx-col brd my1 px1 pb1">
  &lt;label>Table Of Contents&lt;/label>
  &lt;div data-toc="#my-context">&lt;/div>
&lt;/aside>
</code></pre>
    </div>
    <h4 class="line-right txt-prim">Cascading TOC</h4>
    <aside>
      By using the <code>data-toc-cascade="true"</code> attribute together to the <code>data-toc</code> attribute, there would be automatically cascading any generated inner-links on the table of contents dependent on the level of <code>&lt;Hn&gt;</code> tag.
    </aside>
    <div class="w-full mb2">
      <aside class="flx-col brd my1 px1 pb1">
        <label>Table Of Contents</label>
        <div data-toc="#my-context" data-toc-cascade="true"></div>
      </aside>
    </div>
    <div class="w-full mb2">
      <pre class="prettyprint"><code>&lt;aside class="flx-col brd my1 px1 pb1">
  &lt;label>Table Of Contents&lt;/label>
  &lt;div data-toc="#my-context" data-toc-cascade="true">&lt;/div>
&lt;/aside>
      </code></pre>
    </div>
  </div>
</section>
