<section id="image-uploader" class="sloth-styles">
  <h3>Image Uploader</h3>
  <aside>
    <p><code>&lt;label for="*" class="upload"&gt;</code></p>
    This extension markup adds a preview control via a dialog window to the image file upload field.<br>
    You can apply a Sloth button class to a file choosing button.<br>
    You can also click the thumbnail of the image displayed in the mini-view after registering the image to enlarge the preview using the dialog window.<br>
  </aside>
  <div class="flx-col my2">
    <div class="w-full mb2">
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
    <div class="w-full mb2">
      <pre class="prettyprint"><code>&lt;div class="inline">
  &lt;label for="upload-field-1" class="upload">Choose file
    &lt;input type="file" id="upload-field-1" name="upload_image">
  &lt;/label>
&lt;/div>
&mdash;&mdash;
&lt;div class="inline">
  &lt;label for="upload-field-2" class="upload outline">&lt;i class="fas fa-file-upload">&lt;/i> Choose file
    &lt;input type="file" id="upload-field-2" name="upload_image">
  &lt;/label>
&lt;/div>
</code></pre>
    </div>
  </div>
  <div>
    <small class="note">The above icon uses powered by the <a rel="external" href="https://fontawesome.com/">Font awesome</a>.</small>
  </div>
</section>
