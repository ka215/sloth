<?php
$ajaxBaseURL = ENV === 'dev' ? 'http://dev2.ka2.org/sloth/docs/' : 'https://ka2.org/sloth/';
?>
<section id="dialog" class="sloth-styles">
  <h3>Dialog</h3>
  <aside>
    <p><code>data-toggle="dialog"</code></p>
    The dialog window is automatically usable when enables sloth extensions. Then you should add a <code>data-toggle="dialog"</code> attribute to any tags that you want to open the dialog window when clicking.<br>
    Note that you can bind the dialog window to an only click event when you are mark-upping in the HTML. On the other hand, you can fire via <code>showDialog()</code> of global scope function from all catchable events too if using JavaScript.<br>
    You can define the inner contents on the dialog by <code>data-title</code> , <code>data-content</code> , and <code>data-foot</code> attributes within the tag that has the <code>data-toggle</code> attribute. Also by a <code>data-effect</code> attribute, you can switch transition animation type when shows and hides the dialog.<br>
    Furthermore, it is able to define the dialog's default setting as optional in the body tag. Those are a <code>data-dialog-effect</code> attribute as defaults to transition animation type, and a <code>data-dialog-button</code> attribute as defaults to button style on the dialog's footer.<br>
    The dialog is also possible to read JSON format content asynchronously from an external URL or to assign a callback to button event on the opened dialog.<br>
  </aside>
  <div class="flx-col my2">
    <div class="w-full mb2">
      <p class="mb1"><a href="javascript:;" data-toggle="dialog" data-title="Dialog's Headline" data-content="Dialog's Content Body" data-foot="Click Me!">Open Dialog</a></p>
      <p class="mb1"><a href="javascript:;" data-toggle="dialog" data-title="Terms Of Service" data-content="{remote:'get',url:'<?= $ajaxBaseURL ?>ajax.php?p=terms'}" rel="external">Fetch Content Via Ajax</a></p>
      <hr class="dotted">
      <div class="inline flx-justify mb1">
        <button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 1" data-content="Fade in and scale up (default effect)" data-foot="" data-effect="1">Type 1</button>
        <button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 2" data-content="Slide from the right" data-foot="" data-effect="2">Type 2</button>
        <button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 3" data-content="Slide from the bottom" data-foot="" data-effect="3">Type 3</button>
        <button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 4" data-content="Slide and stick to top" data-foot="" data-effect="4">Type 4</button>
        <button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 5" data-content="Fade in and shrink to full wide width" data-foot="" data-effect="5">Type 5</button>
      </div>
      <hr class="dotted">
      <p class="mb1"><span onmouseover="showDialog('title', 'body', 'Hi!', 2)">Try hover on this text</span></p>
      <hr class="dotted">
      <div class="inline flx-justify mb1">
        <button type="button" class="outline" data-toggle="dialog" data-content="If it displays the dialog body only, you need to hide the dialog footer with setting &quot;&lt;b>none&lt;/b>&quot; to the &lt;code>data-foot&lt;/code> attribute." data-foot="none">Dialog body only</button>
        <button type="button" class="outline" data-toggle="dialog" data-content="You can custom the button style on the dialog footer at the &lt;code>data-foot=&quot;{label:&apos;BUTTON LABEL&apos;,class:&apos;ADD CLASSES&apos;}&quot;&lt;/code> attribute." data-foot="{label:'Custom Button',class:'flat clr-tert'}">Custom Footer Button</button>
        <button type="button" class="outline" data-toggle="dialog" data-content="By using the &lt;code>data-foot=&quot;dismiss-outside&quot;&lt;/code>, you are able to place dismiss button to the outside of the dialog." data-foot="dismiss-outside">Dismiss to outside</button>
      </div>
    </div>
    <div class="w-full mb2">
      <pre class="prettyprint"><code>&lt;a href="" data-toggle="dialog" data-title="Dialog's Headline" data-content="Dialog's Content Body" data-foot="Click Me!">Open Dialog&lt;/a>
&lt;a href="" data-toggle="dialog" data-title="Terms Of Service" data-content="{remote:'get',url:'./ajax.php?p=terms'}" rel="external">Fetch Content Via Ajax&lt;/a>
&mdash;&mdash;
&lt;div class="inline mb1">
  &lt;button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 1" data-content="Fade in and scale up (default effect)" data-effect="1">Type 1&lt;/button>
  &lt;button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 2" data-content="Slide from the right" data-effect="2">Type 2&lt;/button>
  &lt;button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 3" data-content="Slide from the bottom" data-effect="3">Type 3&lt;/button>
  &lt;button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 4" data-content="Slide and stick to top" data-effect="4">Type 4&lt;/button>
  &lt;button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 5" data-content="Fade in and shrink to full wide width" data-effect="5">Type 5&lt;/button>
&lt;/div>
&mdash;&mdash;
&lt;span onmouseover="showDialog('title', 'body', 'Hi!', 2)">Try hover on this text&lt;/span>
&mdash;&mdash;
&lt;div class="inline mb1">
  &lt;button type="button" class="outline" data-toggle="dialog" data-content="If it displays the dialog body only, ..." data-foot="none">Dialog body only&lt;/button>
  &lt;button type="button" class="outline" data-toggle="dialog" data-content="You can custom the button style on ..." data-foot="{label:'Custom Button',class:'flat clr-tert'}">Custom Footer Button&lt;/button>
  &lt;button type="button" class="outline" data-toggle="dialog" data-content="Place dismiss button to the outside ..." data-foot="dismiss-outside">Dismiss to outside&lt;/button>
&lt;/div>
</code></pre>
    </div>
  </div>
  <aside>
    <label>Dialog Options</label>
    <table class="slim">
      <thead>
        <tr><th></th><th>Type</th><th>showDialog()</th><th>Description</th></tr>
      </thead>
      <tbody>
        <tr>
          <th>data-title</th><td>String</td><td>argument 1</td><td>Allows strings containing HTML tags.</td>
        </tr>
        <tr>
          <th>data-content</th><td>String | Object</td><td>argument 2</td><td>
            Static text or JavaScript object-like key-value pair type string. When calling via the showDialog() function, you can specify the object directly.<br>
            There is directly displayed as HTML to the body on the dialog when it is the static string that is not able to parse to object.<br>
            On the other hands, there is allowed the properties as follows when that is an object. Their are the "<b>remote</b>" as a fetching method, the "<b>url</b>" to fetch content, and the "<b>loader</b>" as displayed while async fetching.
          </td>
        </tr>
        <tr>
          <th>data-foot</th><td>String | Object</td><td>argument 3</td><td>
            Static text or JavaScript object-like key-value pair type string. When calling via the showDialog() function, you can specify the object directly.<br>
            That becomes a display name of button on the dialog footer if it is defined static text.<br>
            On the other hands, there is allowed the properties as follows when that is an object. There are the "<b>class</b>" as an attribute of dialog's footer button, the "<b>label</b>" as a display name that button, and the "<b>callback</b>" as a calling function before hiding the dialog.
          </td>
        </tr>
        <tr>
          <th>data-effect</th><td>Number | String</td><td>argument 4</td><td>Index number of transition animation type (<b>1 to 5</b>) or animation type preset name.</td>
        </tr>
        <tr>
          <th>data-reinit</th><td>Number | String | Boolean</td><td>argument 5</td><td>Whether fire the event that initializes the sloth extensions once more after showing this dialog. Defaults to <b>true</b>, there will re-init that. You can specify a bit value or string other than a boolean value, too.</td>
        </tr>
      </tbody>
    </table>
  </aside>
  <div>
    <small class="note">If there is an element that has the "data-onmenu-fixed" attribute on that page when it has been shown dialog, the <a href="javascript:;" data-get-page="exts-backdrop">Fixed Backdrop</a> work to enable. </small><br>
    <small class="note">At more detail of about dialog window, please see below <a href="javascript:;" data-get-page="exts-demo1">demo</a>.</small>
  </div>
</section>
