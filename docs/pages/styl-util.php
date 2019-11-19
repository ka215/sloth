<section id="utilities" class="sloth-styles">
  <h3>Utilities</h3>
  <aside>
    Utility classes are shorthanded CSS properties that can be used with or without the <code>.sloth</code> class.
  </aside>
  <h4 class="line-right txt-prim">Margin</h4>
  <aside>
    Allowed margin values ​​are 0 to 2 and units are "rem". Also, there are provided the <code>.ma</code> as auto all margin, the <code>.mxa</code> as horizontal auto margin, the <code>.mya</code> as vertical auto margin.
  </aside>
  <div class="flx-col my2">
    <div class="w-full flx-col mb2">
      <div class="bg-lightgray"><div class="m0 brd bg-white">.m0</div></div>
      <div class="bg-lightgray"><div class="m1 brd bg-white">.m1</div></div>
      <div class="bg-lightgray"><div class="m2 brd bg-white">.m2</div></div>
      <div class="bg-lightgray"><div class="mx1 brd bg-white">.mx1 (left + right)</div></div>
      <div class="bg-lightgray"><div class="my1 brd bg-white">.my1 (top + bottom)</div></div>
      <div class="bg-lightgray"><div class="mt1 brd bg-white">.mt1 (top only)</div></div>
      <div class="bg-lightgray"><div class="mr1 brd bg-white">.mr1 (right only)</div></div>
      <div class="bg-lightgray"><div class="mb1 brd bg-white">.mb1 (bottom only)</div></div>
      <div class="bg-lightgray"><div class="ml1 brd bg-white">.ml1 (left only)</div></div>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;div class="m0">.m0&lt;/div>
&lt;div class="m1">.m1&lt;/div>
&lt;div class="m2">.m2&lt;/div>
&lt;div class="mx1">.mx1 (left & right)&lt;/div>
&lt;div class="my1">.my1 (top & bottom)&lt;/div>
&lt;div class="mt1">.mt1 (top only)&lt;/div>
&lt;div class="mr1">.mr1 (right only)&lt;/div>
&lt;div class="mb1">.mb1 (bottom only)&lt;/div>
&lt;div class="ml1">.ml1 (left only)&lt;/div>
</code></pre>
    </div>
  </div>
  <h4 class="line-right txt-prim">Padding</h4>
  <aside>Allowed padding values ​​are 0 to 2 and units are "rem".</aside>
  <div class="flx-col my2">
    <div class="w-full mb2">
      <div class="brd bg-lightgray p0"><div class="bg-white">.p0</div></div>
      <div class="brd bg-lightgray p1"><div class="bg-white">.p1</div></div>
      <div class="brd bg-lightgray p2"><div class="bg-white">.p2</div></div>
      <div class="brd bg-lightgray px1"><div class="bg-white">.px1 (left & right)</div></div>
      <div class="brd bg-lightgray py1"><div class="bg-white">.py1 (top & bottom)</div></div>
      <div class="brd bg-lightgray pt1"><div class="bg-white">.pt1 (top only)</div></div>
      <div class="brd bg-lightgray pr1"><div class="bg-white">.pr1 (right only)</div></div>
      <div class="brd bg-lightgray pb1"><div class="bg-white">.pb1 (bottom only)</div></div>
      <div class="brd bg-lightgray pl1"><div class="bg-white">.pl1 (left only)</div></div>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;div class="p0">.p0&lt;/div>
&lt;div class="p1">.p1&lt;/div>
&lt;div class="p2">.p2&lt;/div>
&lt;div class="px1">.px1 (left & right)&lt;/div>
&lt;div class="py1">.py1 (top & bottom)&lt;/div>
&lt;div class="pt1">.pt1 (top only)&lt;/div>
&lt;div class="pr1">.pr1 (right only)&lt;/div>
&lt;div class="pb1">.pb1 (bottom only)&lt;/div>
&lt;div class="pl1">.pl1 (left only)&lt;/div>
</code></pre>
    </div>
  </div>
  <h4 class="line-right txt-prim">Width</h4>
  <aside>This is able to specify block width as like the width 100% is <code>.w-1</code> or <code>.w-full</code>, 50% is <code>.w-1-2</code> or <code>.w-half</code>. Refer to section of flexboxes on the <a href="javascript:;" data-get-page="styl-grids">Grid Systems</a>.</aside>
  <h4 class="line-right txt-prim">Height</h4>
  <aside>This is able to specify block height as like the height 100% is <code>.h-full</code> and 50% is <code>.h-half</code>. It has only two classes about height as utility class.</aside>
  <h4 class="line-right txt-prim">Border</h4>
  <div class="flx-row my2">
    <div class="w-half">
      <div class="brd mb1">.brd</div>
      <div class="brd-prim mb1">.brd-prim</div>
      <div class="brd-sec mb1" >.brd-sec</div>
      <div class="brd-tert mb1">.brd-tert</div>
      <div class="brd-quat mb1">.brd-quat</div>
      <div class="brd-quin mb1">.brd-quin</div>
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>&lt;div class="brd">.brd&lt;/div>
&lt;div class="brd-prim">.brd-prim&lt;/div>
&lt;div class="brd-sec" >.brd-sec&lt;div>
&lt;div class="brd-tert">.brd-tert&lt;/div>
&lt;div class="brd-quat">.brd-quat&lt;/div>
&lt;div class="brd-quin">.brd-quin&lt;/div>
</code></pre>
    </div>
  </div>
  <h4 class="line-right txt-prim">Background & Text Color</h4>
  <aside>It is also possible to use <code>.muted</code> as a shorthand only for <code>.txt-gray</code>.</aside>
  <div class="flx-col my2">
    <div class="w-full mb2">
      <div class="bg-white txt-black">.bg-white.txt-black</div>
      <div class="bg-whitesmoke txt-darkgray">.bg-whitesmoke.txt-darkgray</div>
      <div class="bg-lightgray txt-gray" >.bg-lightgray.txt-gray</div>
      <div class="bg-fog txt-fog">.bg-fog.txt-fog</div>
      <div class="bg-gray txt-lightgray">.bg-gray.txt-lightgray</div>
      <div class="bg-darkgray txt-whitesmoke">.bg-darkgray.txt-whitesmoke</div>
      <div class="bg-black txt-white">.bg-darkgray.txt-white</div>
      <hr>
      <div class="bg-prim txt-quin">.bg-prim.txt-quin</div>
      <div class="bg-sec txt-quat" >.bg-sec.txt-quat</div>
      <div class="bg-tert txt-tert">.bg-tert.txt-tert</div>
      <div class="bg-quat txt-sec" >.bg-quat.txt-sec</div>
      <div class="bg-quin txt-prim">.bg-quin.txt-prim</div>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;div class="bg-white txt-black">.bg-white.txt-black&lt;/div>
&lt;div class="bg-whitesmoke txt-darkgray">.bg-whitesmoke.txt-darkgray&lt;/div>
&lt;div class="bg-lightgray txt-gray" >.bg-lightgray.txt-gray&lt;/div>
&lt;div class="bg-fog txt-fog">.bg-fog.txt-fog&lt;/div>
&lt;div class="bg-gray txt-lightgray">.bg-gray.txt-lightgray&lt;/div>
&lt;div class="bg-darkgray txt-whitesmoke">.bg-darkgray.txt-whitesmoke&lt;/div>
&lt;div class="bg-black txt-white">.bg-darkgray.txt-white&lt;/div>
&mdash;&mdash;
&lt;div class="bg-prim txt-quin">.bg-prim.txt-quin&lt;/div>
&lt;div class="bg-sec txt-quat" >.bg-sec.txt-quat&lt;/div>
&lt;div class="bg-tert txt-tert">.bg-tert.txt-tert&lt;/div>
&lt;div class="bg-quat txt-sec" >.bg-quat.txt-sec&lt;/div>
&lt;div class="bg-quin txt-prim">.bg-quin.txt-prim&lt;/div>
</code></pre>
    </div>
  </div>
  <h4 class="line-right txt-prim">Alignment</h4>
  <aside>
    The horizontal alignment classes (<code>.txt-*</code>) are able to apply a "text-align" property to inline elements or incontents. On the other hand the vertical alignment classes (<code>.v-*</code>) would apply a "vertical-align" property to only inline element as like the table-cell and an image tag.
  </aside>
  <div class="flx-col my2">
    <div class="w-full mb2">
      <h5 class="muted">Horizontal alignment</h5>
      <div class="brd">
        <p class="txt-left">.txt-left</p>
        <p class="txt-center">.txt-center</p>
        <p class="txt-right">.txt-right</p>
        <p class="txt-justify">.txt-justify for using to context that has some words.</p>
      </div>
      <h5 class="muted">Vertical alignment</h5>
      <table class="nons fixed brd exam1">
        <tbody>
          <tr>
            <td class="v-top">.v-top</td>
            <td class="v-middle">.v-middle</td>
            <td class="v-bottom">.v-bottom</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;div class="brd">
  &lt;p class="txt-left">.txt-left&lt;/p>
  &lt;p class="txt-center">.txt-center&lt;/p>
  &lt;p class="txt-right">.txt-right&lt;/p>
  &lt;p class="txt-justify">.txt-justify for using to context that has some words.&lt;/p>
&lt;/div>
&mdash;&mdash;
&lt;table class="nons fixed brd">
  &lt;tbody>&lt;tr>
    &lt;td class="v-top">.v-top&lt;/td>
    &lt;td class="v-middle">.v-middle&lt;/td>
    &lt;td class="v-bottom">.v-bottom&lt;/td>
  &lt;/tr>&lt;/tbody>
&lt;/table>
</code></pre>
    </div>
  </div>
  <aside>
    There are the alignment classes for flexbox as below. Also, it has defaults to <code>flex-wrap: nowrap</code> in the <code>.flx-row</code> and <code>.flx-col</code> classes. If you want to styling to the wrappable flexbox, you should apply with <code>.flx-wrap</code> together.
  </aside>
  <div class="flx-col my1">
    <h5 class="muted">Case of ".flx-row" <small>(<code>flex-direction: row</code>)</small></h5>
    <div class="w-full">
      <div>.flx-row.flx-start<br>
        <div class="flx-row flx-start brd bg-lightgray mb1">
          <div class="brd bg-white px1">Inner Item 1</div>
          <div class="brd bg-white px1">Inner Item 2</div>
          <div class="brd bg-white px1">Inner Item 3</div>
        </div>
      </div>
      <div>.flx-row.flx-center<br>
        <div class="flx-row flx-center brd bg-lightgray mb1">
          <div class="brd bg-white px1">Inner Item 1</div>
          <div class="brd bg-white px1">Inner Item 2</div>
          <div class="brd bg-white px1">Inner Item 3</div>
        </div>
      </div>
      <div>.flx-row.flx-justify<br>
        <div class="flx-row flx-justify brd bg-lightgray mb1">
          <div class="brd bg-white px1">Inner Item 1</div>
          <div class="brd bg-white px1">Inner Item 2</div>
          <div class="brd bg-white px1">Inner Item 3</div>
        </div>
      </div>
      <div>.flx-row.flx-around<br>
        <div class="flx-row flx-around brd bg-lightgray mb1">
          <div class="brd bg-white px1">Inner Item 1</div>
          <div class="brd bg-white px1">Inner Item 2</div>
          <div class="brd bg-white px1">Inner Item 3</div>
        </div>
      </div>
      <div>.flx-row.flx-evenly<br>
        <div class="flx-row flx-evenly brd bg-lightgray mb1">
          <div class="brd bg-white px1">Inner Item 1</div>
          <div class="brd bg-white px1">Inner Item 2</div>
          <div class="brd bg-white px1">Inner Item 3</div>
        </div>
      </div>
      <div>.flx-row.flx-end<br>
        <div class="flx-row flx-end brd bg-lightgray mb1">
          <div class="brd bg-white px1">Inner Item 1</div>
          <div class="brd bg-white px1">Inner Item 2</div>
          <div class="brd bg-white px1">Inner Item 3</div>
        </div>
      </div>
      <div class="flx-row flx-evenly">
        <div class="w-1-3 mx1">.flx-row.item-start<br>
          <div class="flx-row flx-evenly item-start brd bg-lightgray mb1 exam1">
            <div class="brd bg-white px1">Inner Item</div>
          </div>
        </div>
        <div class="w-1-3 mx1">.flx-row.item-center<br>
          <div class="flx-row flx-evenly item-center brd bg-lightgray mb1 exam1">
            <div class="brd bg-white px1">Inner Item</div>
          </div>
        </div>
        <div class="w-1-3 mx1">.flx-row.item-end<br>
          <div class="flx-row flx-evenly item-end brd bg-lightgray mb1 exam1">
            <div class="brd bg-white px1">Inner Item</div>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full">
      <pre class="prettyprint"><code>&lt;div class="flx-row flx-start">
  &lt;div>Inner Item 1&lt;/div>
  &lt;div>Inner Item 2&lt;/div>
  &lt;div>Inner Item 3&lt;/div>
&lt;/div>
&lt;div class="flx-row item-start">
  &#x22EE;
&lt;/div>
</code></pre>
    </div>
  </div>
  <h5 class="muted">Case of ".flx-col" <small>(<code>flex-direction: column</code>)</small></h5>
  <div class="flx-col my1">
    <div class="flx-row flx-wrap flx-evenly w-full">
      <div class="w-1-3 pr1 mb1">.flx-col.flx-start<br>
        <div class="flx-col flx-wrap flx-start brd bg-lightgray exam2">
          <div class="brd bg-white px1">Inner Item 1</div>
          <div class="brd bg-white px1">Inner Item 2</div>
          <div class="brd bg-white px1">Inner Item 3</div>
        </div>
      </div>
      <div class="w-1-3 pr1 mb1">.flx-col.flx-center<br>
        <div class="flx-col flx-wrap flx-center brd bg-lightgray exam2">
          <div class="brd bg-white px1">Inner Item 1</div>
          <div class="brd bg-white px1">Inner Item 2</div>
          <div class="brd bg-white px1">Inner Item 3</div>
        </div>
      </div>
      <div class="w-1-3 pr1 mb1">.flx-col.flx-justify<br>
        <div class="flx-col flx-wrap flx-justify brd bg-lightgray exam2">
          <div class="brd bg-white px1">Inner Item 1</div>
          <div class="brd bg-white px1">Inner Item 2</div>
          <div class="brd bg-white px1">Inner Item 3</div>
        </div>
      </div>
      <div class="w-1-3 pr1 mb1">.flx-col.flx-around<br>
        <div class="flx-col flx-wrap flx-around brd bg-lightgray exam2">
          <div class="brd bg-white px1">Inner Item 1</div>
          <div class="brd bg-white px1">Inner Item 2</div>
          <div class="brd bg-white px1">Inner Item 3</div>
        </div>
      </div>
      <div class="w-1-3 pr1 mb1">.flx-col.flx-evenly<br>
        <div class="flx-col flx-wrap flx-evenly brd bg-lightgray exam2">
          <div class="brd bg-white px1">Inner Item 1</div>
          <div class="brd bg-white px1">Inner Item 2</div>
          <div class="brd bg-white px1">Inner Item 3</div>
        </div>
      </div>
      <div class="w-1-3 pr1 mb1">.flx-col.flx-end<br>
        <div class="flx-col flx-wrap flx-end brd bg-lightgray exam2">
          <div class="brd bg-white px1">Inner Item 1</div>
          <div class="brd bg-white px1">Inner Item 2</div>
          <div class="brd bg-white px1">Inner Item 3</div>
        </div>
      </div>
      <div class="w-full">.flx-col.item-start<br>
        <div class="flx-col item-start brd bg-lightgray mb1">
          <div class="brd bg-white px1">Inner Item</div>
        </div>
      </div>
      <div class="w-full">.flx-col.item-center<br>
        <div class="flx-col item-center brd bg-lightgray mb1">
          <div class="brd bg-white px1">Inner Item</div>
        </div>
      </div>
      <div class="w-full">.flx-col.item-end<br>
        <div class="flx-col item-end brd bg-lightgray mb1">
          <div class="brd bg-white px1">Inner Item</div>
        </div>
      </div>
    </div>
    <div class="w-full">
      <pre class="prettyprint"><code>&lt;div class="flx-col flx-start">
  &lt;div>Inner Item 1&lt;/div>
  &lt;div>Inner Item 2&lt;/div>
  &lt;div>Inner Item 3&lt;/div>
&lt;/div>
&lt;div class="flx-col item-start">
  &#x22EE;
&lt;/div>
</code></pre>
    </div>
  </div>
  <h4 class="line-right txt-prim">Text decorations</h4>
  <aside>
    It has several utility classes to decorate text in context.
  </aside>
  <h5 class="muted">Font sizes</h5>
  <div class="flx-col my2">
    <div class="w-full mb1">
      <p>
        The font size can change to <span class="fnt-xl">xlarge (144%)</span>, <span class="fnt-lg">large (120%)</span>, <span class="fnt-sm">small (80%)</span>, <span class="fnt-xs">xsmall (64%)</span> from inherit size on element.
      </p>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;span class="fnt-xl">xLarge (144%)&lt;/span>
&lt;span class="fnt-lg">Large  (120%)&lt;/span>
&lt;span class="fnt-sm">Small  ( 80%)&lt;/span>
&lt;span class="fnt-xs">xSmall ( 64%)&lt;/span>
</code></pre>
    </div>
  </div>
  <h5 class="muted">Line-height</h5>
  <div class="flx-row my2">
    <div class="w-half">
      <p class="lh-1">
        The line-height CSS property sets the amount of space used for lines, such as in text.
      </p>
      <p class="lh-2">
        The ".lh-2" class is same as "line-height: 2". That is the best size for the context that contains the ruby.
      </p>
    </div>
    <div class="w-half">
      <pre class="prettyprint"><code>&lt;p class="lh-1">
  The line-height CSS property...
&lt;/p>
&lt;p class="lh-2">
  The ".lh-2" class is...
&lt;/p>
</code></pre>
    </div>
  </div>
  <h5 class="muted">Text transforms</h5>
  <div class="flx-col my2">
    <div class="w-full mb1">
      <p>
        <span class="upper">By using the "upper" class, there is to uppercase strings.</span><br>
        <span class="lower">By using the "lower" class, there is to LOWERCASE STRINGS.</span><br>
        <span class="capital">By using the "capital" class, there is to capitalize head string.</span>
      </p>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;span class="upper">By using the "upper" class, there is to uppercase strings.&lt;/span>
&lt;span class="lower">By using the "lower" class, there is to LOWERCASE STRINGS.&lt;/span>
&lt;span class="capital">By using the "capital" class, there is to capitalize head string.&lt;/span>
</code></pre>
    </div>
  </div>
  <h4 class="line-right txt-prim">Overflow</h4>
  <aside>If you use those utility classes for overflowing element or text, you should specify width or height to element which is as the container. Such the case it recommends you can use <a href="./extensions.html#element-sizing">the element sizing included in the sloth extension</a>.</aside>
  <h5 class="muted">Block elements</h5>
  <div class="flx-col my2">
    <div class="w-full mb2">
      <div class="of-v w-2-3 brd mb1">The "of-v" or "overflow-v" class, this is styled as "overflow: visible".</div>
      <div class="of-h w-2-3 brd mb1" style="height:2rem">The "of-h" or "overflow-h" class, this is styled as "overflow: hidden".</div>
      <div class="of-s w-2-3 brd mb1" style="height:3rem">The "of-s" or "overflow-s" class, this is styled as "overflow: scroll".</div>
      <div class="of-a w-2-3 brd mb1" style="height:2rem">The "of-a" or "overflow-a" class, this is styled as "overflow: auto".</div>
      <hr class="dotted">
      <div class="of-xv w-2-3 brd mb1">The "of-xv" or "overflow-xv" class, this is styled as "overflow-x: visible".</div>
      <div class="of-xh w-2-3 brd mb1" style="height:2rem">The "of-xh" or "overflow-xh" class, this is styled as "overflow-x: hidden".</div>
      <div class="of-xs w-2-3 brd mb1" style="height:3rem">The "of-xs" or "overflow-xs" class, this is styled as "overflow-x: scroll".</div>
      <div class="of-xa w-2-3 brd mb1" style="height:2rem">The "of-xa" or "overflow-xa" class, this is styled as "overflow-x: auto".</div>
      <hr class="dotted">
      <div class="of-yv w-2-3 brd mb1">The "of-yv" or "overflow-yv" class, this is styled as "overflow-y: visible".</div>
      <div class="of-yh w-2-3 brd mb1" style="height:2rem">The "of-yh" or "overflow-yh" class, this is styled as "overflow-y: hidden".</div>
      <div class="of-ys w-2-3 brd mb1" style="height:3rem">The "of-ys" or "overflow-ys" class, this is styled as "overflow-y: scroll".</div>
      <div class="of-ya w-2-3 brd mb1" style="height:2rem">The "of-ya" or "overflow-ya" class, this is styled as "overflow-y: auto".</div>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;div class="of-v">The "of-v" or "overflow-v" class, this is styled as "overflow: visible".&lt;/div>
&lt;div class="of-h">The "of-h" or "overflow-h" class, this is styled as "overflow: hidden".&lt;/div>
&lt;div class="of-s">The "of-s" or "overflow-s" class, this is styled as "overflow: scroll".&lt;/div>
&lt;div class="of-a">The "of-a" or "overflow-a" class, this is styled as "overflow: auto".&lt;/div>
&mdash;&mdash;
&lt;div class="of-xv">The "of-xv" or "overflow-xv" class, this is styled as "overflow-x: visible".&lt;/div>
&lt;div class="of-xh">The "of-xh" or "overflow-xh" class, this is styled as "overflow-x: hidden".&lt;/div>
&lt;div class="of-xs">The "of-xs" or "overflow-xs" class, this is styled as "overflow-x: scroll".&lt;/div>
&lt;div class="of-xa">The "of-xa" or "overflow-xa" class, this is styled as "overflow-x: auto".&lt;/div>
&mdash;&mdash;
&lt;div class="of-yv">The "of-yv" or "overflow-yv" class, this is styled as "overflow-y: visible".&lt;/div>
&lt;div class="of-yh">The "of-yh" or "overflow-yh" class, this is styled as "overflow-y: hidden".&lt;/div>
&lt;div class="of-ys">The "of-ys" or "overflow-ys" class, this is styled as "overflow-y: scroll".&lt;/div>
&lt;div class="of-ya">The "of-ya" or "overflow-ya" class, this is styled as "overflow-y: auto".&lt;/div>
</code></pre>
    </div>
  </div>
  <h5 class="muted">Text Overflow</h5>
  <div class="flx-col my2">
    <div class="w-full mb2">
      <div class="txt-of-v w-2-3 brd mb1">The "txt-of-v" or "txt-overflow-v" class, this is never styled to overflow text.</div>
      <div class="txt-of-c w-2-3 brd mb1">The "txt-of-c" or "txt-overflow-c" class, this is styled as "text-overflow: clip".</div>
      <div class="txt-of-e w-2-3 brd mb1">The "txt-of-e" or "txt-overflow-e" class, this is styled as "text-overflow: ellipsis".</div>
      <!-- div class="txt-of-s" data-ellipsis="-">The "txt-of-s" or "txt-overflow-s" class, this is styled as "text-overflow: attr(data-ellipsis, '')".</div -->
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;div class="txt-of-v">The "txt-of-v" or "txt-overflow-v" class, this is never styled to overflow text.&lt;/div>
&lt;div class="txt-of-c">The "txt-of-c" or "txt-overflow-c" class, this is styled as "text-overflow: clip".&lt;/div>
&lt;div class="txt-of-e">The "txt-of-e" or "txt-overflow-e" class, this is styled as "text-overflow: ellipsis".&lt;/div>
</code></pre>
    </div>
  </div>
  <h4 class="line-right txt-prim">Note as helper text</h4>
  <aside>An information icon is displayed at the beginning of an element that has a <code>.note</code> class.</aside>
  <div class="flx-col my2">
    <div class="w-full mb2">
      <p class="note">You would prefer to be used this utility class for displaying text of supplementary sentence etc.</p>
    </div>
    <div class="w-full mb1">
      <pre class="prettyprint"><code>&lt;p class="note">You would prefer to be used this utility class ...&lt;/p>
</code></pre>
    </div>
  </div>
</section>
