<section id="fixed-backdrop" class="sloth-styles">
  <h3>Fixed Backdrop</h3>
  <aside>
    <p><code>data-onmenu-fixed="true"</code></p>
    By using the "data-onmenu-fixed" attribute, you can fix without scrolling the content of an element that has one under the overlay backdrop when it's shown menu.<br>
    Also, you must note that the element has this attribute is not the child of an element of the navigation menu; and further, if a value of this attribute isn't as <code>true</code>, there's never work that.<br>
  </aside>
  <div class="flx-col my2">
    <div class="w-full mb1">
      <form class="m1">
        <label class="tgl">Toggle to the fixed backdrop of the navigation menu that shown now.
          <input type="checkbox" id="toggle-fixed-backdrop">
          <span class="tgl-btn"></span>
        </label>
      </form>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;header class="navi-menu">
  &#x22EE;
&lt;/header>
&lt;main data-onmenu-fixed="true">
  &#x22EE;
&lt;/main>
</code></pre>
    </div>
  </div>
  <div>
    <small class="note">Only <code>true</code> and <code>1</code> evaluate to true for the "data-onmenu-fixed" attribute value. Other values ​​are false as invalid.</small>
    <div class="flx-col flx-center flx-around" data-size="h:100vh">
<?php for ( $i = 0; $i < 10; $i++ ) { ?>
      <i class="fas fa-arrow-down txt-lightgray mxa"></i>
<?php } ?>
    </div>
  </div>
</section>
