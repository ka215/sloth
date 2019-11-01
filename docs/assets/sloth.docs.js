window.addEventListener('load', function() {
    Array.prototype.forEach.call(document.querySelectorAll('[data-get-page]'), function(elm) {
        elm.addEventListener('click', function(evt){
            let toPage   = evt.target.dataset.getPage,
                pageType = evt.target.closest('.menu').dataset.menuType,
                formData = new FormData(),
                request  = new XMLHttpRequest()

            switch(parseInt(pageType, 10)) {
                case 1:
                    toPage = `core_${toPage}`
                    break
                case 2:
                    toPage = `ext_${toPage}`
                    break
            }
            console.log(toPage, pageType)

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
            execPost({page: toPage})
        }, false);
    })

}, false)
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
