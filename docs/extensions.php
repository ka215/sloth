<header id="demo-navi" class="navi-menu">
  <div class="flx-row">
    <label class="toggle">
      <input type="checkbox">
      <div class="backdrop"></div>
      <div class="menu">
        <ul class="unstyled">
          <li class="pr1"><a href="#what-extensions"><span class="mr1" data-size="w:1rem"><i class="fas fa-question"></i></span>What are Extensions?</a></li>
          <li class="pr1"><a href="#about-extensions"><span class="mr1" data-size="w:1rem"><i class="far fa-lightbulb"></i></span>About Extensions</a></li>
        </ul>
        <hr>
        <ul class="unstyled">
          <li class="pr1"><a href="#element-sizing"><span class="mr1" data-size="w:1rem"><i class="fas fa-expand-arrows-alt"></i></span>Element Sizing</a></li>
          <li class="pr1"><a href="#option-mapping"><span class="mr1" data-size="w:1rem"><i class="fas fa-align-justify"></i></span>Option Mapping</a></li>
          <li class="pr1"><a href="#toggle-password"><span class="mr1" data-size="w:1rem"><i class="fas fa-low-vision"></i></span>Toggle Password</a></li>
          <li class="pr1"><a href="#image-uploader"><span class="mr1" data-size="w:1rem"><i class="fas fa-file-upload"></i></span>Image Uploader</a></li>
          <li class="pr1"><a href="#class-switching"><span class="mr1" data-size="w:1rem"><i class="fas fa-exchange-alt"></i></span>Class Switching</a></li>
          <li class="pr1"><a href="#validation-form"><span class="mr1" data-size="w:1rem"><i class="fab fa-wpforms"></i></span>Validation Form</a></li>
          <li class="pr1"><a href="#dialog"><span class="mr1" data-size="w:1rem"><i class="far fa-window-restore"></i></span>Dialog</a></li>
          <li class="pr1"><a href="#lazy-loading"><span class="mr1" data-size="w:1rem"><i class="far fa-image"></i></span>Lazy Loading</a></li>
          <li class="pr1"><a href="#sloth-extensions-demo"><span class="mr1" data-size="w:1rem"><i class="far fa-lightbulb"></i></span>Demo</a></li>
        </ul>
        <hr>
        <ul class="unstyled">
          <li class="pr1"><a href="./?navi=1"><span class="mr1" data-size="w:1rem"><i class="fas fa-home"></i></span>Sloth Core Styles</a></li>
          <li class="pr1"><a href="./?page=3"><span class="mr1" data-size="w:1rem"><i class="far fa-window-restore"></i></span>Supported Browsers</a></li>
          <li class="pr1"><a href="https://ka215.github.io/sloth/donation.html"><span class="mr1" data-size="w:1rem"><i class="fas fa-donate"></i></span>Donation</a></li>
          <li class="pr1"><a href="https://github.com/ka215/sloth"><span class="mr1" data-size="w:1rem"><i class="fab fa-github-alt"></i></span>Back to github</a></li>
        </ul>
      </div>
    </label>
    <a href="#sloth-docs" class="brand"><img src="<?= optimize_uri('sloth.svg') ?>" height="36"> Sloth Extensions</a>
  </div>
</header>
<div class="px2" data-switch-class="md:mx1,lg:mx2">
  <a id="what-extensions" data-size="h:56px"></a>
  <article class="lead-block mb2">
    <h3>What are Extensions?</h3>
    <aside>
      The Sloth extensions allow you to streamline your markup and express advanced elements with a small amount of coding.<br>
      It can dynamically adjust the size of elements directly on HTML without changing the stylesheet, add validation to input fields, and add popup dialog window.<br>
    </aside>
    <div class="ad-block my1" style="min-height:90px;"><ins class="adsbygoogle"
     style="display:block;width:100%;height:max-content;min-height:90px;"
     data-ad-client="ca-pub-8602791446931111"
     data-ad-slot="6050360069"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins></div>
  </article>
  <a id="about-extensions" data-size="h:56px"></a>
  <article class="lead-block mb2">
    <h3>About Extensions</h3>
    <aside>
      To use the Sloth extension in HTML, you need to activate the Sloth style after loading the extension script.<br>
      At that time, we recommend that you enable the sloth style by adding the <code>.sloth</code> class to the <code>&lt;body&gt;</code> tag.<br>
      Some extensions can be used without enabling the Sloth style.<br>
      <div class="flx-row flx-center my1">
        <pre class="prettyprint"><code>&lt;script async src="dist/sloth.extension.min.js"&gt;&lt;/script&gt;</code></pre>
      </div>
      Then declaring the <code>.sloth</code> class to the <code>&lt;body&gt;</code> tag.
      <div class="flx-row flx-center my1">
        <pre class="prettyprint"><code>&lt;body class="sloth"&gt;
<div class="my1 px2">&#x22EE;</div>&lt;/body&gt;</code></pre>
      </div>
      Now you are ready.<br>
    </aside>
  </article>
  <hr>
  <a id="element-sizing" data-size="h:56px"></a>
  <section class="sloth-styles mb2">
    <h4>Element Sizing</h4>
    <aside>
      <p><code>data-size="w:*,h:*,mw:*,mh:*,minw:*,minh:*"</code></p>
      You can declare the <b>width</b>, <b>height</b>, <b>max-width</b>, <b>max-height</b>, <b>min-width</b> and <b>min-height</b> for each individual element at once.<br>
      You can also define dynamic values ​​by specifying an expression as like <code>calc()</code> of the stylesheet.<br>
      Also, if data-size is specified for an inline element such as a span tag, it is converted to an inline-block element.<br>
    </aside>
    <div class="flx-row flx-wrap mt1">
      <div class="mb1" data-switch-class="sm:w-full,md:w-half,lg:w-half">
        <div class="inline">
          <label data-size="w:140px" class="mr0">Field Item Name</label>
          <input type="text" name="item1" data-size="w:(100% - 140px),mw:40em" class="mr0">
        </div>
        <img src="<?= optimize_uri('noimage-300x300.png') ?>" data-size="w:140px,h:6em,mw:90%,mh:90%,minw:10%,minh:10%;">
      </div>
      <div class="mb1" data-switch-class="sm:w-full,md:w-half,lg:w-half">
        <pre class="prettyprint"><code>&lt;div class="inline">
  &lt;label data-size="w:140px" class="mr0">Field Item Name&lt;/label>
  &lt;input type="text" name="item1" data-size="w:(100% - 140px),mw:40em" class="mr0">
&lt;/div>
&lt;img src="noimage-300x300.png" data-size="w:140px,h:6em,mw:90%,mh:90%,minw:10%,minh:10%"&gt;
</code></pre>
      </div>
    </div>
    <small class="note">Property names can be declared with the initials omitted as like "width" to "w".</small>
  </section>
  <a id="option-mapping" data-size="h:56px"></a>
  <section class="sloth-styles mb2">
    <h4>Option Mapping</h4>
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
    <small class="note">When a one-dimensional array type data-map is declared, the option value is an integer value starting from 1.</small>
  </section>
  <a id="toggle-password" data-size="h:56px"></a>
  <section class="sloth-styles mb2">
    <h4>Toggle Password</h4>
    <aside>
      <p><code>&lt;label class="tgl-view"&gt;</code></p>
      You can generate the password field that is bundled with a toggle button that lets you see what you enter at any time.<br>
      It is also possible to display icon images by using the <code>.eye-switch</code> class as a child element of the toggle button.<br>
    </aside>
    <div class="flx-row flx-wrap mt1">
      <div class="mb1" data-switch-class="sm:w-full,md:w-half,lg:w-1-3">
        <label for="passwd-1" class="tgl-view mb2">
          <input type="password" id="passwd-1" name="password" value="Pa55w0rD">
          <span>Toggle</span>
        </label>
        <label for="passwd-2" class="tgl-view">
          <input type="password" id="passwd-2" name="password" placeholder="Password" autocomplete="new-password">
          <span><span class="eye-switch"></span></span>
        </label>
      </div>
      <div class="mb1" data-switch-class="sm:w-full,md:w-half,lg:w-2-3">
        <pre class="prettyprint"><code>&lt;label for="passwd-1" class="tgl-view">
  &lt;input type="password" id="passwd-1" name="password" value="Pa55w0rD">
  &lt;span>Toggle&lt;/span>
&lt;/label>
&#x2E3B;
&lt;label for="passwd-2" class="tgl-view">
  &lt;input type="password" id="passwd-2" name="password" placeholder="Password" autocomplete="new-password">
  &lt;span>&lt;span class="eye-switch">&lt;/span>&lt;/span>
&lt;/label>
</code></pre>
      </div>
    </div>
  </section>
  <a id="image-uploader" data-size="h:56px"></a>
  <section class="sloth-styles mb2">
    <h4>Image Uploader</h4>
    <aside>
      <p><code>&lt;label for="*" class="upload"&gt;</code></p>
      This extension markup adds a preview control via a dialog window to the image file upload field.<br>
      You can apply a Sloth button class to a file choosing button.<br>
      You can also click the thumbnail of the image displayed in the mini-view after registering the image to enlarge the preview using the dialog window.<br>
    </aside>
    <div class="flx-row flx-wrap mt1">
      <div class="mb1" data-switch-class="sm:w-full,md:w-half,lg:w-half">
        <div class="inline mb2">
          <label for="upload-field-1" class="upload">Choose file
            <input type="file" id="upload-field-1" name="upload_image">
          </label>
        </div>
        <div class="inline mb2">
          <label for="upload-field-2" class="upload outline"><i class="fas fa-file-upload"></i> Choose file
            <input type="file" id="upload-field-2" name="upload_image">
          </label>
        </div>
      </div>
      <div class="mb1" data-switch-class="sm:w-full,md:w-half,lg:w-half">
        <pre class="prettyprint"><code>&lt;div class="inline">
  &lt;label for="upload-field-1" class="upload">Choose file
    &lt;input type="file" id="upload-field-1" name="upload_image">
  &lt;/label>
&lt;/div>
&#x2E3B;
&lt;div class="inline">
  &lt;label for="upload-field-2" class="upload outline">&lt;i class="fas fa-file-upload">&lt;/i> Choose file
    &lt;input type="file" id="upload-field-2" name="upload_image">
  &lt;/label>
&lt;/div>
</code></pre>
      </div>
    </div>
    <small class="note">The above icon uses powered by the <a rel="external" href="https://fontawesome.com/">Font awesome</a>.</small>
  </section>
  <a id="class-switching" data-size="h:56px"></a>
  <section class="sloth-styles mb2">
    <h4>Class Switching</h4>
    <aside>
      <p><code>data-switch-class="sm:*,md:*,lg:*"</code></p>
      The class of the element for which this extended attribute is declared switches according to the browser screen size.<br>
      The breakpoints of the screen size to be switched the class are as follows.<br>
      <table class="fixed slim cell-center">
        <thead>
          <tr><th></th><th>Small (sm)</th><th>Medium (md)</th><th>Large (lg)</th></tr>
        </thead>
        <tbody>
          <tr>
            <th>Screen Size</th><td>&lt;= 480px</td><td data-switch-class="sm:fnt-sm">481px &#x301C; 768px</td><td>&gt;= 769px</td>
          </tr>
        </tbody>
      </table>
    </aside>
    <div class="flx-row flx-wrap mt1">
      <div class="mb1" data-switch-class="sm:w-full,md:w-half,lg:w-half">
        <p class="txt-center mx1 py1" data-switch-class="sm:bg-quin txt-black,md:bg-tert txt-whitesmoke,lg:bg-prim txt-white">Changing Colors</p>
        <div class="inline mx1">
          <img src="<?= optimize_uri('noimage-300x300.png') ?>" data-switch-class="sm:w-full,md:w-half,lg:w-1-3">
          <label data-switch-class="sm:hidden,md:hidden">Image Caption</label>
        </div>
      </div>
      <div class="mb1" data-switch-class="sm:w-full,md:w-half,lg:w-half">
        <pre class="prettyprint"><code>&lt;p class="txt-center mx1 py1" data-switch-class="sm:bg-quin txt-black,md:bg-tert txt-whitesmoke,lg:bg-prim txt-white">Changing Colors&lt;/p>
&#x2E3B;
&lt;div class="inline mx1">
  &lt;img src="noimage-300x300.png" data-switch-class="sm:w-full,md:w-half,lg:w-1-3">
  &lt;label data-switch-class="sm:hidden,md:hidden">Image Caption&lt;/label>
&lt;/div>
</code></pre>
      </div>
    </div>
  </section>
  <a id="validation-form" data-size="h:56px"></a>
  <section class="sloth-styles mb2">
    <h4>Validation Form</h4>
    <aside>
      <p><code>&lt;form class="sloth-validation"></code></p>
      The function of field validation is provided to entry fields that are child elements of the form tag in which the <code>.sloth-validation</code> class is declared.<br>
      Note that if you will enable this validation function, it automatically adds a <code>novalidate</code> attribute to form then disable validation that is built in browser.<br>
      The validatable fields are any tags with a <code>name</code> and a <code>type</code> attribute that has a <code>required</code> or a <code>pattern</code> attribute.<br>
      The event that validates field will fire when you focus out from an inputting field or click a submit button before form submission. Then if your validated fields have any error, it will display a list of invalid fields via the dialog window.<br>
      You can make customize of display field name by using <code>data-dispname</code> attribute in the input field tag when will be displayed invalid fields list at occurred validation errors.
      Also, custom processing can be inserted as a callback before submission when validation is successful. In that case, you should use a <code>data-callback</code> attribute in a form with sloth-validation class. 
    </aside>
    <div class="flx-row flx-wrap mt1">
      <div class="mb1 pr2" data-switch-class="sm:w-full,md:w-half,lg:w-1-3">
        <form action="#validation-form" class="sloth-validation" data-callback="alert('There\'s able to call user callback before sending too as like this.')">
          <label class="required">Required Field</label>
          <input type="text" name="sample_field_1" data-dispname="Display Field Name" class="mb1" required>
          <label>Field Has Pattern</label>
          <input type="text" name="sample_field_2" pattern="^\d{4,10}$" placeholder="The number between 4 and 10 digits only" class="mb1">
          <button type="submit">Submit</button>
        </form>
      </div>
      <div class="mb1" data-switch-class="sm:w-full,md:w-half,lg:w-2-3">
        <pre class="prettyprint"><code>&lt;form action="#validation-form" class="sloth-validation" data-callback="alert('There\'s able to call user callback before sending too as like this.')">
  &lt;label class="required">Required Field&lt;/label>
  &lt;input type="text" name="sample_field_1" data-dispname="Display Field Name" class="mb1" required>
  &lt;label>Field Has Pattern&lt;/label>
  &lt;input type="text" name="sample_field_2" pattern="^\d{4,10}$" placeholder="The number between 4 and 10 digits only" class="mb1">
  &lt;button type="submit">Submit&lt;/button>
&lt;/form>
</code></pre>
      </div>
    </div>
    <small class="note">At more detail of about validation form, please see below <a href="#sloth-extensions-demo">demo</a>.</small>
  </section>
  <a id="dialog" data-size="h:56px"></a>
  <section class="sloth-styles mb2">
    <h4>Dialog</h4>
    <aside>
      <p><code>data-toggle="dialog"</code></p>
      The dialog window is automatically usable when enables sloth extensions. Then you should add a <code>data-toggle="dialog"</code> attribute to any tags that you want to open the dialog window when clicking.<br>
      Note that you can bind the dialog window to an only click event when you are mark-upping in the HTML. On the other hand, you can fire via <code>showDialog()</code> of global scope function from all catchable events too if using JavaScript.<br>
      You can define the inner contents on the dialog by <code>data-title</code> , <code>data-content</code> , and <code>data-foot</code> attributes within the tag that has the <code>data-toggle</code> attribute. Also by a <code>data-effect</code> attribute, you can switch transition animation type when shows and hides the dialog.<br>
      Furthermore, it is able to define the dialog's default setting as optional in the body tag. Those are a <code>data-dialog-effect</code> attribute as defaults to transition animation type, and a <code>data-dialog-button</code> attribute as defaults to button style on the dialog's footer.<br>
      The dialog is also possible to read JSON format content asynchronously from an external URL or to assign a callback to button event on the opened dialog.<br>
    </aside>
    <div class="flx-row flx-wrap mt1">
      <div class="mb1" data-switch-class="sm:w-full,md:w-half,lg:w-half">
        <p class="mb1"><a href="javascript:;" data-toggle="dialog" data-title="Dialog's Headline" data-content="Dialog's Content Body" data-foot="Click Me!">Open Dialog</a></p>
        <p class="mb1"><a href="javascript:;" data-toggle="dialog" data-title="Terms Of Service" data-content="{remote:'get',url:'https://ka2.org/sloth/ajax.php?p=terms'}" rel="external">Fetch Content Via Ajax</a></p>
        <div class="inline mb1">
          <button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 1" data-content="Fade in and scale up (default effect)" data-foot="" data-effect="1">Type 1</button>
          <button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 2" data-content="Slide from the right" data-foot="" data-effect="2">Type 2</button>
          <button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 3" data-content="Slide from the bottom" data-foot="" data-effect="3">Type 3</button>
          <button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 4" data-content="Slide and stick to top" data-foot="" data-effect="4">Type 4</button>
        </div>
        <p class="mb1"><span onmouseover="showDialog('title', 'body', 'Hi!', 2)">Try hover on this text</span></p>
      </div>
      <div class="mb1" data-switch-class="sm:w-full,md:w-half,lg:w-half">
        <pre class="prettyprint"><code>&lt;a href="" data-toggle="dialog" data-title="Dialog's Headline" data-content="Dialog's Content Body" data-foot="Click Me!">Open Dialog&lt;/a>
&lt;a href="" data-toggle="dialog" data-title="Terms Of Service" data-content="{remote:'get',url:'https://ka2.org/sloth/ajax.php?p=terms'}" rel="external">Fetch Content Via Ajax&lt;/a>
&lt;div class="inline mb1">
  &lt;button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 1" data-content="Fade in and scale up (default effect)" data-effect="1">Type 1&lt;/button>
  &lt;button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 2" data-content="Slide from the right" data-effect="2">Type 2&lt;/button>
  &lt;button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 3" data-content="Slide from the bottom" data-effect="3">Type 3&lt;/button>
  &lt;button type="button" class="outline" data-toggle="dialog" data-title="Trasition Animation 4" data-content="Slide and stick to top" data-effect="4">Type 4&lt;/button>
&lt;/div>
&lt;span onmouseover="showDialog('title', 'body', 'Hi!', 2)">Try hover on this text&lt;/span>
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
            <th>data-effect</th><td>Number | String</td><td>argument 4</td><td>Index number of transition animation type (1 to 4) or animation type preset name.</td>
          </tr>
        </tbody>
      </table>
    </aside>
    <small class="note">At more detail of about dialog window, please see below <a href="#sloth-extensions-demo">demo</a>.</small>
  </section>
  <a id="lazy-loading" data-size="h:56px"></a>
  <section class="sloth-styles mb2">
    <h4>Lazy Loading Images</h4>
    <aside>
      <p><code>&lt;img data-src="IMAGE FILE PATH"&gt;</code></p>
      When the image tag has <code>data-src</code> attribute to apply the lazy loading, then it will be loading image resource after shown that into browser window. You can use the <code>data-buffer</code> attribute togerther that then you can get the margin to the timing of loading from scrolling head.<br>
      If you want to apply the lazy loading to the inline overflow container in a page, you should add a <code>lazy-load</code> class to the overflowing parent element contains images. However, if that inline container is in dialog, you never need to add class because automatically apply by this plugin.<br>
      Notice also you should empty or never markup the <code>src</code> attribute in an image tag if you use the lazy image loading.<br>
    </aside>
    <div class="flx-row flx-wrap mt1">
      <div class="mb1 pr2" data-switch-class="sm:w-full,md:w-half,lg:w-1-3">
        <ul class="unstyled">
          <li><img data-src="https://placehold.jp/22/3d4070/ffffff/320x60.png?text=Sample%20Image%20%231" width="320" height="60" alt="Sample Image #1"></li>
          <li><img data-src="https://placehold.jp/22/5e3180/ffffff/320x60.png?text=Sample%20Image%20%232" data-buffer="60" width="320" height="60" alt="Sample Image #2"></li>
          <li class="flx-row">
            <img data-src="https://placehold.jp/18/703180/ffffff/155x60.png?text=Sample%20Image%20%233" data-buffer="30" width="155" height="60" alt="Sample Image #3" style="margin-right: 10px">
            <img data-src="https://placehold.jp/18/6a4773/ffffff/155x60.png?text=Sample%20Image%20%234" data-buffer="30" width="155" height="60" alt="Sample Image #4">
          </li>
          <li class="flx-row">
            <img data-src="https://placehold.jp/18/992e7e/ffffff/155x60.png?text=Sample%20Image%20%235" width="155" height="60" alt="Sample Image #5" style="margin-right: 10px">
            <img data-src="https://placehold.jp/18/9e628e/ffffff/155x60.png?text=Sample%20Image%20%236" data-buffer="60" width="155" height="60" alt="Sample Image #6">
          </li>
          <li><img data-src="https://placehold.jp/22/b32636/ffffff/320x60.png?text=Sample%20Image%20%237" data-buffer="90" width="320" height="60" alt="Sample Image #7"></li>
          <li><img data-src="https://placehold.jp/22/c75d28/ffffff/320x60.png?text=Sample%20Image%20%238" data-buffer="120" width="320" height="60" alt="Sample Image #8"></li>
        </ul>
        <hr>
        <ul class="unstyled">
          <li><a href="./ll-test.php" rel="external">Demo on the vertical scrolling page</a></li>
          <li><a href="./ll-test.php?hori=1" rel="external">Demo on the horizontal scrolling page</a></li>
          <li><a href="./ll-test.php?innr=1" rel="external">Demo on the inline vertical scrolling container</a></li>
          <li><a href="./ll-test.php?hori=1&innr=1" rel="external">Demo on the inline horizontal scrolling container</a></li>
        </ul>
        <hr>
        <p class="mb1"><a href="javascript:;" data-toggle="dialog" data-title="Lazy Loading Images" data-content="{remote:'get',url:'https://ka2.org/sloth/ajax.php?p=lazyloading'}" rel="external">Show Demo on Dialog</a></p>
      </div>
      <div class="mb1" data-switch-class="sm:w-full,md:w-half,lg:w-2-3">
        <pre class="prettyprint"><code>&lt;ul class="unstyled">
  &lt;li>&lt;img data-src="sample_1.png" width="320" height="60" alt="Sample Image #1">&lt;/li>
  &lt;li>&lt;img data-src="sample_2.png" data-buffer="60" width="320" height="60" alt="Sample Image #2">&lt;/li>
  &lt;li class="flx-row">
    &lt;img data-src="sample_3.png" data-buffer="30" width="155" height="60" alt="Sample Image #3">
    &lt;img data-src="sample_4.png" data-buffer="30" width="155" height="60" alt="Sample Image #4">
  &lt;/li>
  &lt;li class="flx-row">
    &lt;img data-src="sample_5.png" width="155" height="60" alt="Sample Image #5">
    &lt;img data-src="sample_6.png" data-buffer="60" width="155" height="60" alt="Sample Image #6">
  &lt;/li>
  &lt;li>&lt;img data-src="sample_7.png" data-buffer="90" width="320" height="60" alt="Sample Image #7">&lt;/li>
  &lt;li>&lt;img data-src="sample_8.png" data-buffer="120" width="320" height="60" alt="Sample Image #8">&lt;/li>
&lt;/ul></code></pre>
      </div>
    </div>
    <small class="note">Special thanks to <a href="https://placehold.jp/en.html" rel="external" target="_blank">placehold.jp</a> for delivering images on this demo.</small>
  </section>
  <hr>
  <a id="sloth-extensions-demo" data-size="h:56px"></a>
  <form class="m1 sloth-validation">
    <h2 class="fnt-lg mb1">Sloth style forms with validation as an extension Demo</h2>
    <p class="note">You must enter the fields with this <label class="required" data-size="w:5px"></label>mark.</p>
    <div class="inline mb1">
      <label for="tf-1" class="required" data-size="w:10rem">Name</label>
      <input type="text" id="tf-1" name="first_name" placeholder="First Name" pattern="^.{1,35}$" data-size="w:(50% - 7rem),mw:20em" data-dispname="First Name" autocomplete="nope" required>
      <input type="text" id="tf-3" name="last_name" placeholder="Last Name" pattern="^.{1,35}$" data-size="w:(50% - 7rem),mw:20em" data-dispname="Last Name" autocomplete="nope" required>
    </div>
<?php /*
    <div class="inline mb1">
      <label for="tf-4" class="required" data-size="w:10rem">Ruby Name</label>
      <input type="text" id="tf-4" name="ruby_first_name" placeholder="First Name" pattern="^.{1,35}$" data-size="w:(50% - 7rem),mw:20em" data-dispname="First Name Ruby" autocomplete="nope" required>
      <input type="text" id="tf-6" name="ruby_last_name" placeholder="Last Name" pattern="^.{1,35}$" data-size="w:(50% - 7rem),mw:20em" data-dispname="Last Name Ruby" autocomplete="nope" required>
      <small class="note">Full-width Katakana only</small>
    </div>
*/ ?>
    <div class="inline mb1">
      <label class="required" data-size="w:10rem">Gender</label>
      <label class="radio">Female
        <input type="radio" name="gender" value="female" data-dispname="Gender" required>
        <span class="indicator"></span>
      </label>
      <label class="radio">Male
        <input type="radio" name="gender" value="male" data-dispname="Gender" required>
        <span class="indicator"></span>
      </label>
    </div>
    <div class="inline mb1">
      <label class="required" data-size="w:10rem">Birth Date</label>
      <label class="dropdown">
        <select name="birth_year" class="txt-fog" data-dispname="Birth Year" required>
          <option value="" data-map="1919...2019" class="txt-fog">Year</option>
        </select>
      </label>
      <label class="dropdown">/
        <select name="birth_month" class="txt-fog" data-dispname="Birth Month" required>
          <option value="" data-map="1...12" class="txt-fog">Month</option>
        </select>
      </label>
      <label class="dropdown">/
        <select name="birth_day" class="txt-fog" data-dispname="Birth Day" required>
          <option value="" data-map="1...31" class="txt-fog">Day</option>
        </select>
      </label>
    </div>
    <div class="inline mb1">
      <label class="required" data-size="w:10rem">Country</label>
      <label class="dropdown">
        <select name="country" class="txt-fog" data-dispname="Country" required>
          <option value="" data-map="us:United States America,fr:France,de:Germany,es:Spain,it:Italy,ru:Russia,jp:Japan,cn:China,br:Brazil" class="txt-fog">Country</option>
        </select>
      </label>
    </div>
    <div class="inline mb1">
      <label class="required" for="tf-11" data-size="w:10rem">Postal Code</label>
      <input type="text" id="tf-11" name="postal_code" placeholder="Postal Code" pattern="^\d{2,11}$" data-size="w:11em" data-dispname="Postal Code" required>
      <small class="note">Only numbers without hyphens</small>
    </div>
    <div class="inline mb1">
      <label class="required" data-size="w:10rem">Prefecture</label>
      <label class="dropdown">
        <select name="prefecture" class="txt-fog" data-dispname="Prefecture" required>
          <option value="" data-map="Tokyo,Hokkaido,,Osaka,Kyouto,,Fukuoka,,,Okinawa" class="txt-fog">Prefecture</option>
        </select>
      </label>
    </div>
    <div class="inline mb1">
      <label for="tf-12" class="required" data-size="w:10rem">City</label>
      <input type="text" id="tf-12" name="city" placeholder="City" pattern="^.{0,100}$" data-size="w:(100% - 13rem),mw:20em" data-dispname="City" required>
    </div>
    <div class="inline mb1">
      <label for="tf-13" data-size="w:10rem">Address</label>
      <input type="text" id="tf-13" name="address" placeholder="Address" pattern="^.{0,100}$" data-size="w:(100% - 13rem),mw:35em" data-dispname="Address" autocomplete="nope">
    </div>
    <div class="inline mb1">
      <label for="tf-21" class="required" data-size="w:10rem">Email Address</label>
      <input type="email" id="tf-21" name="email_address" placeholder="Email Address" pattern="^[a-zA-Z]{1}[0-9a-zA-Z]+[\w\.-]+@[\w\.-]+\.\w{2,}$" data-size="w:(100% - 13rem),mw:35em" data-dispname="Email Address" autocomplete="nope" size="60" required>
    </div>
    <div class="inline mb1">
      <label for="pw-1" class="required" data-size="w:10rem">Password</label>
      <label for="pw-1" class="tgl-view">
        <input type="password" id="pw-1" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" autocomplete="new-password" data-dispname="Password" required>
        <span><span class="eye-switch"></span><!-- i class="far fa-eye"></i --></span>
      </label>
      <small class="note">Contain at least 8 letters, numbers, lowercase letters, and uppercase letters</small>
    </div>
    <div class="inline mb1">
      <label for="tf-22" class="required" data-size="w:10rem">Display Name</label>
      <input type="text" id="tf-22" name="display_name" placeholder="Display Name" pattern="^.{0,100}$" data-size="w:15em" data-dispname="Display Name" required>
      <small class="note">Strings at least 3 letters and more</small>
    </div>
    <div class="inline mb1">
      <label for="ff-1" class="required" data-size="w:10rem">Avatar Image</label>
      <label for="ff-1" class="upload outline"><i class="fas fa-file-upload"></i> Choose file
        <input type="file" id="ff-1" name="avatar_image" data-dispname="Avatar Image" required>
      </label>
      <small class="note">Maximum upload file size is 100kB</small>
    </div>
    <div class="inline mb1">
      <label for="ff-2" data-size="w:10rem">Avatar Image 2</label>
      <label for="ff-2" class="upload outline"><i class="fas fa-file-upload"></i> Choose file
        <input type="file" id="ff-2" name="avatar_image" data-dispname="Avatar Image 2">
      </label>
    </div>
    <div class="inline mb1">
      <label for="ta-1" data-size="w:10rem">Biography</label>
      <textarea id="ta-1" name="biography" placeholder="Your Biography" pattern="^.{0,100}$" data-size="w:(100% - 11em),h:10em" data-dispname="Biography"></textarea>
    </div>
    <div class="inline mb1">
      <label for="ta-2" class="required" data-size="w:10rem">Feedback</label>
      <textarea id="ta-2" name="feedback" placeholder="Your Feedback" pattern="^.{1,200}$" data-size="w:(100% - 11em),h:10em" data-dispname="Feedback" required></textarea>
      <small class="note">Maximum allowed string length is 200 letters</small>
    </div>
    <div class="inline mb1">
      <label for="cb-1-1" data-size="w:10rem">Capabilities</label>
      <div class="flx-row flx-wrap">
        <label class="checkbox">Physical
          <input type="checkbox" id="cb-1-1" name="capabilities[]" data-dispname="Capabilities" value="physical">
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Endurance
          <input type="checkbox" id="cb-1-2" name="capabilities[]" data-dispname="Capabilities" value="endurance">
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Strength
          <input type="checkbox" id="cb-1-3" name="capabilities[]" data-dispname="Capabilities" value="strength">
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Intelligence
          <input type="checkbox" id="cb-1-4" name="capabilities[]" data-dispname="Capabilities" value="intelligence">
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Agility
          <input type="checkbox" id="cb-1-5" name="capabilities[]" data-dispname="Capabilities" value="agility">
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Mental
          <input type="checkbox" id="cb-1-6" name="capabilities[]" data-dispname="Capabilities" value="mental">
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Leadership
          <input type="checkbox" id="cb-1-7" name="capabilities[]" data-dispname="Capabilities" value="leadership">
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Charisma
          <input type="checkbox" id="cb-1-8" name="capabilities[]" data-dispname="Capabilities" value="charisma">
          <span class="indicator"></span>
        </label>
      </div>
    </div>
    <div class="inline mb1">
      <label for="cb-2-1" class="required" data-size="w:10rem">Favorites</label>
      <div class="flx-row flx-wrap">
        <label class="checkbox">Travel
          <input type="checkbox" id="cb-2-1" name="favorites[]" data-dispname="Favorites" value="travel" required>
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Movies
          <input type="checkbox" id="cb-2-2" name="favorites[]" data-dispname="Favorites" value="movies" required>
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Musics
          <input type="checkbox" id="cb-2-3" name="favorites[]" data-dispname="Favorites" value="musics" required>
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Sports
          <input type="checkbox" id="cb-2-4" name="favorites[]" data-dispname="Favorites" value="sports" required>
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Reading
          <input type="checkbox" id="cb-2-5" name="favorites[]" data-dispname="Favorites" value="reading" required>
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Games
          <input type="checkbox" id="cb-2-6" name="favorites[]" data-dispname="Favorites" value="games" required>
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Communication
          <input type="checkbox" id="cb-2-7" name="favorites[]" data-dispname="Favorites" value="communication" required>
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Development
          <input type="checkbox" id="cb-2-8" name="favorites[]" data-dispname="Favorites" value="development" required>
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Stady
          <input type="checkbox" id="cb-2-9" name="favorites[]" data-dispname="Favorites" value="stady" required>
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Other
          <input type="checkbox" id="cb-2-10" name="favorites[]" data-dispname="Favorites" value="other" required>
          <span class="indicator"></span>
        </label>
      </div>
      <small class="note">Choose at least one option</small>
    </div>
    <div class="inline mb1" data-switch-class="sm:flx-center">
      <label data-size="w:10rem" data-switch-class="sm:hidden">Agreement</label>
      <label class="tgl flat" for="cb-1">I agree to <a href="javascript:;" data-toggle="dialog" data-title="Terms Of Service" data-content="{remote:'get',url:'https://ka2.org/sloth/ajax.php?p=terms'}" rel="external">the terms of service</a>.
        <input type="checkbox" id="cb-1" name="agreement" value="1" data-dispname="Agreement" required>
        <span class="tgl-btn"></span>
      </label>
    </div>
    <hr class="dotted">
    <div class="inline">
      <button type="submit" class="outline clr-prim">Register</button>
      <button type="button" class="outline" data-toggle="dialog" data-title="Title Of Dialog" data-content="{remote:'get',url:'https://ka2.org/sloth/ajax.php?p=test&t=<?= mt_rand() ?>',loader:'<div class=\'txt-center my2\'><img src=\'spinning-circles.svg\'></div>'}" data-effect="2">Via Ajax</button>
      <button type="button" class="outline" data-toggle="dialog" data-content='<p>You are able to set a callback to button on the dialog footer.<br>In that case, it defines an object has a "callback" property in the "data-foot" attribute. At the "callback" property, set directly function, or a function name on the global scope.</p>' data-foot="{class:'outline clr-sec',label:'<i class=\'far fa-grin-squint\'></i> Close Me!',callback:'sample'}" data-effect="3">Callback</button>
      <button type="button" class="outline" data-toggle="dialog" data-title="Title Of Dialog" data-content="<p>Content Of Dialog<br>...</p>" data-foot="<i class=\'fas fa-times\'></i> Close" data-effect="4">Cancel</button>
    </div>
  </form>
</div>
