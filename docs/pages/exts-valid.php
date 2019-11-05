<section id="validation-form" class="sloth-styles">
  <h3>Validation Form</h3>
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
  <div>
    <small class="note">At more detail of about validation form, please see below <a href="#sloth-extensions-demo">demo</a>.</small>
  </div>
</section>
