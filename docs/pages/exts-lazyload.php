<?php
$demoBaseURL = ENV === 'dev' ? './' : 'https://ka2.org/sloth/';
?>
<section id="lazy-loading" class="sloth-styles">
  <h3>Lazy Loading Images</h3>
  <aside>
    <p><code>&lt;img data-src="IMAGE FILE PATH"&gt;</code></p>
    When the image tag has <code>data-src</code> attribute to apply the lazy loading, then it will be loading image resource after shown that into browser window. You can use the <code>data-buffer</code> attribute togerther that then you can get the margin to the timing of loading from scrolling head.<br>
    If you want to apply the lazy loading to the inline overflow container in a page, you should add a <code>lazy-load</code> class to the overflowing parent element contains images. However, if that inline container is in dialog, you never need to add class because automatically apply by this plugin.<br>
    Notice also you should empty or never markup the <code>src</code> attribute in an image tag if you use the lazy image loading.<br>
  </aside>
  <div class="flx-col my2">
    <div class="w-full mb1">
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
    </div>
    <div class="w-full mb1">
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
&lt;/ul>
&mdash;&mdash;
&lt;div class="overflow-ya lazy-load">
  &lt;img data-src="sample-image.jpg" alt="Image">
    &#x22EE;
&lt;/div></code></pre>
    </div>
    <div class="mb1 w-full">
      <hr class="text" data-content="Other Demos">
      <ul class="unstyled">
        <li><a href="javascript:;" data-get-page="exts-lazyload2">Demo on the vertical scrolling page</a></li>
        <li><a href="javascript:;" data-get-page="exts-lazyload2" data-post-data="{hori:1,main:overflow}">Demo on the horizontal scrolling page</a></li>
        <li><a href="javascript:;" data-get-page="exts-lazyload2" data-post-data="innr:1">Demo on the inline vertical scrolling container</a></li>
        <li><a href="javascript:;" data-get-page="exts-lazyload2" data-post-data="hori:1,innr:1">Demo on the inline horizontal scrolling container</a></li>
      </ul>
      <p class="mb1"><a href="javascript:;" data-toggle="dialog" data-title="Lazy Loading Images" data-content="{remote:'get',url:'<?= $demoBaseURL ?>ajax.php?p=lazyloading'}">Show Demo on Dialog</a></p>
    </div>
  </div>
  <div>
    <small class="note">Special thanks to <a href="https://placehold.jp/en.html" rel="external" target="_blank">placehold.jp</a> for delivering images on this demo.</small>
  </div>
</section>
