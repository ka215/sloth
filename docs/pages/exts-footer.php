<section id="sticky-footer" class="sloth-styles">
  <h3>Sticky Footer</h3>
  <aside>
    <p><code>class="sticky-footer"</code></p>
    Use this class to permanently stick footer content at the bottom of the browser display area. Also if you use this class only, the sloth does not need the sloth extension script.<br>
    By using together with the <code>data-switch-class</code> attribute, as you like would stick the footer when other than tiny width devices only.
  </aside>
  <div class="flx-col my2">
    <div class="w-full mb2 of-ys brd" data-size="h:12em">
      <div class="p1 bg-white txt-fog">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat eget est quis sollicitudin. Maecenas volutpat orci vel magna vulputate vulputate. Duis magna erat, sollicitudin vitae lacus vel, tincidunt rutrum augue. Morbi eget accumsan neque. Nunc venenatis egestas risus ac sollicitudin. Duis varius, nisl sed consectetur malesuada, diam augue venenatis sem, nec aliquam ligula odio non mi. Donec ultricies semper odio, quis finibus nunc malesuada a. Etiam finibus mi magna, ac tempus lacus venenatis a. Curabitur et dignissim dolor. Morbi finibus consequat aliquet. Praesent at libero ac elit ornare convallis. Donec finibus sit amet dui eu lobortis. Sed varius nisi non egestas congue.</p>
        <p>Fusce ac odio dapibus nulla lobortis dapibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce nec sapien vel quam iaculis semper a sed leo. Maecenas et ornare justo, eu scelerisque metus. Integer feugiat urna lobortis orci tincidunt elementum. Quisque nec dolor ac purus fringilla ultricies. Mauris quis scelerisque massa. Sed ac rutrum arcu, sed aliquet urna. Duis varius vehicula mauris, eu efficitur magna congue quis. Proin vel congue purus. Donec dignissim dignissim lectus, et mollis leo tempus eu. Suspendisse erat dolor, hendrerit non diam id, tempor bibendum nibh. Donec finibus tempor ante sit amet accumsan. Duis mollis varius accumsan.</p>
        <p>Duis suscipit aliquam vehicula. Vivamus accumsan metus sed quam ultrices, vel porttitor massa volutpat. Integer molestie metus id metus tincidunt, a porttitor tellus lobortis. Donec eu tortor tellus. Phasellus fringilla scelerisque accumsan. Fusce vehicula sapien quis lectus dapibus tempor. Nunc scelerisque facilisis neque ac ultricies.</p>
      </div>
      <footer class="sticky-footer bg-whitesmoke">
        <div class="py1 txt-center">
          <i class="far fa-copyright txt-darkgray"></i> <?= date('Y') ?> Monaural Sound, ka2.org; Produced by MAGIC METHODS
        </div>
      </footer>
    </div>
    <div class="w-full">
      <pre class="prettyprint"><code>&lt;div class="p1 bg-white txt-fog">
  Lorem ipsum dolor sit amet, ...
&lt;/div>
&lt;footer class="sticky-footer bg-whitesmoke">
  &lt;div class="py1 txt-center">
    &lt;i class="far fa-copyright txt-darkgray">&lt;/i> <?= date('Y') ?> Monaural Sound, ka2.org; Produced by MAGIC METHODS
  &lt;/div>
&lt;/footer>
</code></pre>
    </div>
    <div class="mb2">
      <small class="note">The above icon uses powered by the <a rel="external" href="https://fontawesome.com/">Font awesome</a>.</small>
    </div>
  </div>
  <h4 class="line-right txt-prim">Pull-Up Sticky Footer</h4>
  <aside>
    <p><code>class="sticky-footer pullup"</code></p>
    By adding the <code>.pullup</code> class to sticky footer, you can make include a collapsible content in the footer.<br>
    If you want to show the collapsible content as defaults, you should add a <code>.default-show</code> class together with the <code>.pullup</code> class.<br>
    Also you can toggle collapsible content on the sticky footer via using the global function <code>toggleFooter()</code> from anywhere.
  </aside>
  <div class="flx-col my2">
    <div class="w-full mb2 of-ys brd" data-size="h:20em">
      <div class="p1 bg-white txt-fog">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat eget est quis sollicitudin. Maecenas volutpat orci vel magna vulputate vulputate. Duis magna erat, sollicitudin vitae lacus vel, tincidunt rutrum augue. Morbi eget accumsan neque. Nunc venenatis egestas risus ac sollicitudin. Duis varius, nisl sed consectetur malesuada, diam augue venenatis sem, nec aliquam ligula odio non mi. Donec ultricies semper odio, quis finibus nunc malesuada a. Etiam finibus mi magna, ac tempus lacus venenatis a. Curabitur et dignissim dolor. Morbi finibus consequat aliquet. Praesent at libero ac elit ornare convallis. Donec finibus sit amet dui eu lobortis. Sed varius nisi non egestas congue.</p>
        <p>Fusce ac odio dapibus nulla lobortis dapibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce nec sapien vel quam iaculis semper a sed leo. Maecenas et ornare justo, eu scelerisque metus. Integer feugiat urna lobortis orci tincidunt elementum. Quisque nec dolor ac purus fringilla ultricies. Mauris quis scelerisque massa. Sed ac rutrum arcu, sed aliquet urna. Duis varius vehicula mauris, eu efficitur magna congue quis. Proin vel congue purus. Donec dignissim dignissim lectus, et mollis leo tempus eu. Suspendisse erat dolor, hendrerit non diam id, tempor bibendum nibh. Donec finibus tempor ante sit amet accumsan. Duis mollis varius accumsan.</p>
        <p>Duis suscipit aliquam vehicula. Vivamus accumsan metus sed quam ultrices, vel porttitor massa volutpat. Integer molestie metus id metus tincidunt, a porttitor tellus lobortis. Donec eu tortor tellus. Phasellus fringilla scelerisque accumsan. Fusce vehicula sapien quis lectus dapibus tempor. Nunc scelerisque facilisis neque ac ultricies.</p>
      </div>
      <footer class="sticky-footer pullup bg-whitesmoke">
        <div class="pullup-content">
          <div class="m0 pt1 px1">
            <h6>Collapsible Content Block</h6>
            <ul class="unstyled">
              <li><a href="javascript:;" rel="external">Link to the relational content #1</a></li>
              <li><a href="javascript:;" rel="external">Link to the relational content #2</a></li>
              <li><a href="javascript:toggleFooter();" rel="external">Execute collapsing from links etc in the expanded content</a></li>
            </ul>
          </div>
        </div>
        <div class="py1 txt-center">
          Non-collapsible content does not have the <code>.pullup</code> class in the element.
        </div>
      </footer>
    </div>
    <div class="w-full">
      <pre class="prettyprint"><code>&lt;div class="p1 bg-white txt-fog">
  Lorem ipsum dolor sit amet, ...
&lt;/div>
&lt;footer class="sticky-footer pullup bg-whitesmoke">
  &lt;div class="pullup-content">
    &lt;div class="m0 pt1 px1">
      &lt;h6>Collapsible Content Block&lt;/h6>
      &lt;ul class="unstyled">
        &lt;li>&lt;a rel="external">Link to the relational content #1&lt;/a>&lt;/li>
        &lt;li>&lt;a rel="external">Link to the relational content #2&lt;/a>&lt;/li>
        &lt;li>&lt;a href="javascript:toggleFooter();" rel="external">Execute collapsing from links etc in the expanded content&lt;/a>&lt;/li>
      &lt;/ul>
    &lt;/div>
  &lt;/div>
  &lt;div class="py1 txt-center">
    Non-collapsible content does not have the &lt;code>.pullup&lt;/code> class in the element.
  &lt;/div>
&lt;/footer>
</code></pre>
    </div>
  </div>
</section>
