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
