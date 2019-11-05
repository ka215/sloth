<section id="image-uploader" class="sloth-styles">
  <h3>Image Uploader</h3>
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
