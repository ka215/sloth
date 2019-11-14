window.addEventListener('load', function() {
    Array.prototype.forEach.call(document.querySelectorAll('a[href]'), function(elm) {
        if ( elm.getAttribute('href').charAt(0) === '#' ) {
            elm.addEventListener('click', function(evt){
                evt.preventDefault()
                let menuId = evt.target.getAttribute('id')

                if ( menuId && menuId !== 'back-to-head' ) {
                    //console.log( menuId )
                    document.getElementById('current-menu-hash').value = menuId
                    activateMenuItem()
                }
                if ( menuId === 'back-to-head' ) {
                    smoothScroll( document.getElementById( evt.target.getAttribute('href').replace('#', '') ) )
                }
            }, false)
        }
    })

    Array.prototype.forEach.call(document.querySelectorAll('[data-get-page]'), function(elm) {
        elm.addEventListener('click', function(evt){
            let currentPage  = document.getElementById('current-page').value,
                nowMenuHash  = document.getElementById('current-menu-hash').value,
                getPageTmpl  = evt.target.dataset.getPage,
                thisMenuHash = evt.target.getAttribute('id'),
                formData = new FormData(),
                request  = new XMLHttpRequest()

            //console.log(currentPage, nowMenuHash, getPageTmpl, thisMenuHash)
            if ( currentPage !== getPageTmpl && thisMenuHash !== 'back-to-head' ) {
                /*
                formData.append('page', toPage)
                formData.append('body_class', '')
                formData.append('body_atts', [])

                request.open('POST', './index.php', true)
                request.onLoad = function(res) {
                    console.log(res)
                }
                request.send(formData)
                evt.preventDefault()
                */
                execPost({page: getPageTmpl})
            } else {
                smoothScroll( document.getElementById( evt.target.getAttribute('href').replace('#', '') ) )
            }
        }, false);
    })

    // For Components of core styles
    let toggleNaviButton = document.getElementById('toggle-navi-menu')
    if ( toggleNaviButton ) {
        toggleNaviButton.addEventListener('change', function(evt){
            let pageNavi = document.getElementById('docs-navi')

            if ( evt.target.checked ) {
                pageNavi.removeAttribute('hidden')
            } else {
                pageNavi.setAttribute('hidden', true)
            }
        }, false)
    }

    // For Colors of core styles
    let changeColorButton = document.getElementById('btn-change-color')
    if ( changeColorButton ) {
        changeColorButton.addEventListener('click', function(evt){
            let targetVar = document.getElementById('override-color').value,
                newValue  = document.getElementById('color-code').value

            if ( newValue ) {
                if ( /^#?([0-9A-F]{3}){1,2}$/i.test(newValue) ) {
                    newValue = /^#.*$/.test(newValue) ? newValue : '#' + newValue
                }
                document.body.style.setProperty(targetVar, newValue)
            }
            document.activeElement.blur()
        }, false)
    }

    window.addEventListener( 'scroll', toggleFab, {passive: true}, false );

    activateMenuItem()

}, false)

function activateMenuItem() {
    let currentPage = document.getElementById('current-page').value,
        nowMenuHash = document.getElementById('current-menu-hash').value

    Array.prototype.forEach.call(document.querySelectorAll('.menu li'), function(elm) {
        if ( elm.childNodes.item(0).getAttribute('id') === nowMenuHash ) {
            elm.classList.add('active')
        } else {
            elm.classList.remove('active')
        }
    })
    Array.prototype.forEach.call(document.querySelectorAll('.menu ul'), function(elm) {
        let menuCategory = elm.getAttribute('id').replace('navi-menu-', ''),
            showMenu     = false

        switch( true ) {
            case /^(intr|styl)-.*$/.test( currentPage ):
                showMenu = /^(introduction|styles|category|links)$/.test( menuCategory )
                break
            case /^ext(i|s)-.*$/.test( currentPage ):
                showMenu = /^(extensions|features|category|links)$/.test( menuCategory )
                break
            default:
                showMenu = /^(category|links)$/.test( menuCategory )
                break
        }
        if ( ! showMenu ) {
            elm.classList.add('hidden')
        } else {
            elm.classList.remove('hidden')
        }
    })
}

/*
 * Smooth scroll
 */
function smoothScroll( element ) {
    const rectTop   = element.getBoundingClientRect().top
    const offsetTop = window.pageYOffset
    const buffer    = document.getElementById('docs-navi').clientHeight
    let top = rectTop + offsetTop - buffer

    window.scrollTo({
        top,
        behavior: 'smooth'
    })
}

/*
 * Show/hide a fab button
 */
function toggleFab() {
    const offsetTop = window.pageYOffset
    const buffer    = document.getElementById('docs-navi').clientHeight
    let fab = document.getElementById('back-to-head')

    if ( offsetTop > buffer ) {
        fab.classList.add('show')
    } else {
        fab.classList.remove('show')
    }
}

/*
 * Post data via javascript only
 */
function execPost(data, action) {
    let form = document.createElement('form'),
        actionUrl = action !== undefined ? action : './index.php'

    form.setAttribute('action', actionUrl)
    form.setAttribute('method', 'post')
    form.style.display = 'none'
    document.body.appendChild(form)

    if ( data !== undefined ) {
        for (let paramName in data) {
            let input = document.createElement('input')

            input.setAttribute('type', 'hidden')
            input.setAttribute('name', paramName)
            input.setAttribute('value', data[paramName])
            form.appendChild(input)
        }
    }
    form.submit()
}
