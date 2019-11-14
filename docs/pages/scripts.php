<?php
$page = get_globals( 'page' );
$isLoadExtension = preg_match( '/^ext(i|s)-.*$/i', $page ) === 1;
?>
<script async src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
<!-- Font Awesome latest -->
<script async src="https://kit.fontawesome.com/ee8bf0ee7e.js"></script>
<?php if ( $isLoadExtension ) : ?>
<script async src="<?= optimize_uri('dist/sloth.extension.min.js') ?>"></script>
<script>
function sample() {
    alert( 'Do something before hiding the dialog.' );
}
</script>
<?php endif; ?>
<!-- Polyfill for window.scrollTo() -->
<script async src="https://cdn.jsdelivr.net/gh/iamdustan/smoothscroll@master/src/smoothscroll.js"></script>
<script defer src="<?= optimize_uri('assets/sloth.docs.js') ?>"></script>
<?php /*
<!-- Sloth Documentations Script -->
<script>
window.addEventListener('load',function(){

    let el1 = document.getElementById('toggle-navi-menu'),
        el2 = document.getElementById('close-navi')

    function toggleNaviMenu( show ) {
      let navi = document.getElementById('demo-navi'),
          tglbtn = document.getElementById('toggle-navi-menu')
      if ( show ) {
        navi.removeAttribute('hidden')
        tglbtn.checked = true
      } else {
        navi.setAttribute('hidden',true)
        tglbtn.checked = false
      }
    }

    el1.addEventListener('change', event => {
      toggleNaviMenu( event.target.checked )
    }, false)
    el2.addEventListener('click', () => {
      toggleNaviMenu( false )
    }, false)

    let paramStr = location.search.substring(1),
        params = paramStr ? paramStr.split('&') : null,
        paramArray = []
    if ( params ) {
      params.forEach( v => {
        let item = v.split('=')
        paramArray[item[0]] = item[1]
      })
      if ( paramArray.navi === '1' ) {
        toggleNaviMenu( true )
      }
    }

    let btn1 = document.getElementById('btn-change-color')
    btn1.addEventListener('click', () => {
        const root = document.documentElement
        let varName = document.getElementById('override-color').value,
            color = document.getElementById('color-code').value
        if ( varName && color ) {
          root.style.setProperty( varName, color )
        }
    })

},false)

function _void( val ) {
    console.log( val );
    return false;
}
</script>
*/ ?>
<?php if ( ENV === 'prod' ) : ?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
window.addEventListener('load',function(){
    /**
     * As below on the global scope
     */
    let ads = document.querySelectorAll('ins.adsbygoogle:not(.adsbygoogle-noablate)'),
        ad_len = ads.length
    for ( let i=0; i<ad_len; i++ ) {
        try {
            (adsbygoogle = window.adsbygoogle || []).push({})
        } catch (e) {
            console.log( e, ads[i] )
        }
    }

},false)
</script>
<?php endif; ?>
