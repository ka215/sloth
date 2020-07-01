/*!
Sloth CSS lightweight framework
v1.4.2
Last Updated: July 1, 2020 (UTC)
Author: Ka2 - https://ka2.org/
*/
const init = function() {
    // Check whether applied the sloth styles
    if ( ! document.body.classList.contains('sloth') ) {
        return false;
    }

    // Check data-standby attributes
    Array.prototype.forEach.call(document.querySelectorAll('[data-standby]'), (elm) => {
        let standbyEvent = elm.dataset.standby,
            timeoutId;

        if ( 'shown' === standbyEvent ) {
            timeoutId = window.setTimeout( () => { elm.removeAttribute('data-standby'); window.clearTimeout(timeoutId); }, 500 );
        }
    });

    // Apply size of shorthand to element
    Array.prototype.forEach.call(document.querySelectorAll('[data-size]'), (elm) => {
        let sizes = elm.dataset.size.split(','),
            isInline = /^(a|abbr|b|bdi|bdo|big|button|cite|code|data|datalist|del|dfn|em|i|img|input|ins|kbd|label|mark|q|ruby|s|samp|select|small|span|strong|sub|sup|textarea|time|u|tt|var)$/i.test(elm.nodeName);

        sizes.forEach((_v) => {
            let _tmp   = _v.split(':'),
                _prop  = _tmp[0] ? _tmp[0].trim() : null,
                _value = _tmp[1] ? _tmp[1].trim().replace(';', '') : null;

            if ( _prop && _value ) {
                switch(true) {
                    case /^w(|idth)$/i.test(_prop):
                        _prop = 'width';
                        break;
                    case /^h(|eight)$/i.test(_prop):
                        _prop = 'height';
                        break;
                    case /^m(|ax)-?w(|idth)$/i.test(_prop):
                        _prop = 'max-width';
                        break;
                    case /^m(|ax)-?h(|eight)$/i.test(_prop):
                        _prop = 'max-height';
                        break;
                    case /^min-?w(|idth)$/i.test(_prop):
                        _prop = 'min-width';
                        break;
                    case /^min-?h(|eight)$/i.test(_prop):
                        _prop = 'min-height';
                        break;
                }
                switch(true) {
                    case /^\d+.*$/i.test(_value):
                        break;
                    case /^\(.*\)$/i.test(_value):
                        _value = `calc${_value}`;
                        break;
                }
                if ( isInline && ! elm.style.display ) {
                    elm.style.display = 'inline-block';
                }
                elm.style[_prop] = _value;
            }
        });
        if ( sizes.length > 0 ) {
            elm.removeAttribute('data-size');
        }
    });

    // Map data of shorthand to option in select boxes (type 1)
    Array.prototype.forEach.call(document.querySelectorAll('[data-map*="..."]'), (elm) => {
        let vals = elm.dataset.map.split('...');

        for ( let i = parseInt( vals[0], 10 ); i <= parseInt( vals[1], 10 ); i++ ) {
            let opt = document.createElement('option');

            opt.setAttribute('value', i);
            opt.textContent = i;
            elm.parentNode.append( opt );
        }
        if ( vals.length > 0 ) {
            elm.removeAttribute('data-map');
        }
    });

    // Map data of shorthand to option in select boxes (type 2)
    Array.prototype.forEach.call(document.querySelectorAll('[data-map*=","]'), (elm) => {
        let vals = elm.dataset.map.split(',');

        vals.forEach((_v, _i) => {
            let _tmp = _v.split(':'),
                _val = _tmp[1] ? _tmp[1] : _tmp[0] ? _tmp[0] : null,
                _key = _tmp[1] ? _tmp[0] : _val ? _i + 1 : null;

            if ( _key && _val ) {
                let opt = document.createElement('option');

                opt.setAttribute('value', _key);
                opt.textContent = _val;
                elm.parentNode.append( opt );
            }
        });
        if ( vals.length > 0 ) {
            elm.removeAttribute('data-map');
        }
    });

    // Bind the handler of onChange event to dropdown
    Array.prototype.forEach.call(document.getElementsByTagName('select'), (elm) => {
        elm.addEventListener('change', (evt) => {
            if ( evt.target.value === '' ) {
                evt.target.classList.add('txt-fog');
            } else {
                evt.target.classList.remove('txt-fog');
            }
        }, false);
    });

    // Password field with toggling view
    Array.prototype.forEach.call(document.querySelectorAll('.tgl-view span'), (elm) => {
        elm.addEventListener('click', (evt) => {
            let self = evt.target,
                thisClasses = self.classList,
                input = self.offsetParent.children[0];

            if ( thisClasses.contains('active') ) {
                self.classList.remove('active');
                input.setAttribute('type', 'password');
            } else {
                self.classList.add('active');
                input.setAttribute('type', 'text');
            }
        }, false);
    });

    // Optimize the rendered fields for uploading then bind the event handler
    Array.prototype.forEach.call(document.getElementsByClassName('upload'), (elm) => {
        let filename = document.createElement('input'),
            preview  = document.createElement('div'),
            notes    = elm.parentNode.querySelectorAll('.note'),
            parent   = elm.parentNode,
            offset   = 0;

        if ( elm.dataset.uploadable ) {
            return;
        }
        Array.prototype.forEach.call(notes, (note) => {
            note.remove();
        });
        filename.setAttribute('type', 'text');
        filename.classList.add('upload-files');
        filename.setAttribute('placeholder', 'No chosen file');
        filename.setAttribute('data-switch-class', 'sm:hidden');
        filename.setAttribute('readonly', true);
        filename.style.width = 'auto';
        filename.addEventListener('keyup', () => false, false);
        filename.addEventListener('keydown', () => false, false);
        filename.addEventListener('keypress', () => false, false);

        preview.classList.add('preview-image');
        preview.addEventListener('click', (evt) => {
            let self = evt.target;

            if ( self.classList.contains('active') ) {
                let dupNode = self.cloneNode(false);

                dupNode.removeAttribute('class');
                dupNode.classList.add('expand-image');
                showDialog(filename.value, dupNode, null, 1, null, false);
            }
        }, false);

        elm.style.marginBottom = 0;
        elm.parentNode.append( preview );
        elm.parentNode.append( filename );
        Array.prototype.forEach.call(notes, (note) => {
            elm.parentNode.append( note );
        });
        elm.setAttribute('data-uploadable', true);
        Array.prototype.forEach.call(parent.children, (child) => {
            if ( ! child.classList.contains('upload-files') && ! child.classList.contains('note') ) {
                offset += child.clientWidth + (child.style.marginLeft || 0) + (child.style.marginRight || 0);
            }
        });
        filename.style.width = `calc(100% - (${offset}px + 5em))`;
        filename.style.marginRight = 0;

        elm.querySelector('[type=file]').addEventListener('change', (evt) => {
            let self  = evt.target,
                path  = self.value.replace(/\\/g, '/'),
                match = path.lastIndexOf('/'),
                file  = self.files[0],
                reader = new FileReader();

            filename.value = match !== -1 ? path.substring(match + 1) : path;
            reader.onload = function() {
                preview.style.backgroundImage = `url(${reader.result})`;
                preview.classList.add('active');
            };
            if ( file ) {
                reader.readAsDataURL(file);
            } else {
                preview.style.backgroundImage = 'none';
                preview.classList.remove('active');
            }

        }, false);
    });

    // Check whether activate the Sloth Validator
    Array.prototype.forEach.call(document.getElementsByTagName('form'), (elm) => {
        if ( elm.classList.contains('sloth-validation') ) {
            if ( ! elm.hasAttribute('novalidate') ) {
                elm.setAttribute('novalidate', true);
            }
            // Bind the handler to onSubmit event
            elm.addEventListener('submit', (evt) => {
                let self     = evt.target,
                    submits  = self.querySelectorAll('[type=submit]'),
                    callback = self.dataset.callback || undefined;

                evt.preventDefault();
                if ( slothValidator( self ) ) {
                    Array.prototype.forEach.call(submits, (e) => {
                        // For suppressing multiplex submission
                        e.setAttribute('disabled', true);
                    });
                    let response = true;
                    if ( callback ) {
                        if ( ! /\(.*\)$/g.test(callback) && ! callback.endsWith(')') ) {
                            callback += '()';
                        }
                        response = Function.call(this, `return ${callback}`)();
                        if ( response == undefined ) {
                            response = true;
                        }
                    }
                    if ( callback && ! response ) {
                        return false;
                    } else {
                        self.method = self.getAttribute('method') || 'post';
                        self.submit();
                    }
                } else {
                    return false;
                }
            }, false);
            // Bind the handler to the focus-out event on each child fields
            Array.prototype.forEach.call(elm.querySelectorAll('[name]'), (field) => {
                field.addEventListener('blur', (evt) => {
                    let self = evt.target,
                        formData = new FormData( elm );

                    singleFieldValidator( self, formData );
                }, false);
            });
        }
    });

    // Bind the slothNotify dialog
    Array.prototype.forEach.call(document.querySelectorAll('[data-toggle=dialog]'), (elm) => {
        elm.addEventListener('click', (evt) => {
            let self    = evt.target,
                title   = self.dataset.title || null,
                content = self.dataset.content || null,//undefined,
                foot    = self.dataset.foot || null,//true,
                effect  = self.dataset.effect || (document.body.dataset.dialogEffect || 1),
                size    = self.dataset.dialogSize || null,
                reinit  = self.dataset.reinit || true;

            showDialog(title, content, foot, effect, size, reinit);
        }, false);
    });

    // Prevent scrolling of overlay backdrop when shown menu on navigation menu
    Array.prototype.forEach.call(document.querySelectorAll('.navi-menu .toggle input[type=checkbox]'), (elm) => {
        elm.addEventListener('change', (evt) => {
            // Is on menu: evt.target.checked
            fixedBackdrop(evt.target.checked);
        }, false);
    });

    // Prevent bubbling of click event in the container of lists on navigation menu
    Array.prototype.forEach.call(document.querySelectorAll('.navi-menu .toggle .menu'), (menuContainer) => {
        menuContainer.addEventListener('click', (evt) => {
            evt.preventDefault();
        }, false);
    });

    // Bind the sticky footer
    Array.prototype.forEach.call(document.querySelectorAll('.sticky-footer.pullup'), (elm) => {
        if ( elm.querySelectorAll('.toggle-switch').length == 0 ) {
            let toggleSwitch = document.createElement('div');

            toggleSwitch.classList.add('toggle-switch');
            toggleSwitch.innerHTML = '<span></span>';
            toggleSwitch.setAttribute('data-toggle-open', elm.classList.contains('default-show'));
            elm.prepend(toggleSwitch);
        }
        elm.addEventListener('click', (evt) => {
            Array.prototype.forEach.call(elm.querySelectorAll('.toggle-switch'), (tgl) => {
                if ( ! Object.prototype.hasOwnProperty.call(tgl.dataset, 'toggleOpen') ) {
                    tgl.setAttribute('data-toggle-open', false);
                }
                let isOpen    = /^true$/i.test(tgl.dataset.toggleOpen) ? true : false,
                    observer  = new MutationObserver((mutations) => {
                        mutations.forEach((mutation) => {
                            if ( mutation.attributeName === 'data-toggle-open' ) {
                                // Need to delay for behaving the transition time of style
                                window.slothStackTimer.push(setTimeout(() => {
                                    pullupContent();
                                    observer.disconnect();
                                }, 200));
                            }
                        });
                    });

                observer.observe(tgl, { attributes: true, attributeOldValue: true });
                if ( isOpen && evt.target.closest('.pullup-content') ) {
                    //evt.preventDefault()
                } else {
                    tgl.setAttribute('data-toggle-open', !isOpen);
                }
                // Prevent the memory leak due to continue timer by setTimeout
                let loop = window.slothStackTimer.length - 1, i;

                for( i = 0; i < loop; i++ ) {
                    clearTimeout( window.slothStackTimer.shift() );
                }
            })
        }, false);
    });

    // Bind the Table Of Contents
    Array.prototype.forEach.call(document.querySelectorAll('[data-toc]'), (elm) => {
        let selector   = elm.dataset.toc,
            cascading  = elm.dataset.tocCascade || false,
            targetElms = document.querySelectorAll(selector);

        if ( targetElms.length > 0 ) {
//console.log( selector, cascading, targetElms[0] );
            let matches = targetElms[0].querySelectorAll('h1, h2, h3, h4, h5, h6'),
                ul   = document.createElement('ul'),
                list = [],
                lilv = 6;

            Array.prototype.forEach.call(matches, (headline) => {
                let id   = headline.id,
                    hlv  = parseInt( headline.tagName.replace('H', ''), 10 ),
                    li   = document.createElement('li'),
                    a    = document.createElement('a');

                if ( id === '' ) {
                    id = makeId( headline.textContent );
                    headline.id = id;
                    headline.insertAdjacentHTML( 'afterbegin', `<a name="${id}"></a>` );
                }
                lilv = hlv < lilv ? hlv : lilv;
//console.log(headline.tagName, hlv, lilv, headline.textContent, headline.id);
                a.innerHTML = headline.textContent;
                a.href = `#${id}`;
                li.appendChild(a);
                li.setAttribute( 'data-indent', hlv );
                list.push(li);
            });
//console.log( list, lilv );
            list.forEach((li_elm) => {
                let indent = parseInt( li_elm.dataset.indent, 10 ) - lilv;

                if ( cascading && indent > 0 ) {
                    li_elm.classList.add( `idt-${indent}` );
                }
                li_elm.removeAttribute( 'data-indent' );
                ul.appendChild(li_elm);
            });
//console.log( ul );
            ul.classList.add( 'toc' );
            elm.appendChild( ul );

            Array.prototype.forEach.call(elm.querySelectorAll('a[href*="#"]'), (link) => {
                link.addEventListener('click', (evt) => {
                    let href = evt.target.getAttribute( 'href' ),
                        _tmp = href.split('#'),
                        targetId = _tmp[1],
                        target = document.getElementById( targetId );

//console.log(href, target);
                    //location.hash = href;
                    if ( target ) {
                        smoothScroll( target );
                    } else {
                        return false;
                    }
                    //return false;
                }, false);
            });
        }
    });

    // Bind the Follow Color
    Array.prototype.forEach.call(document.querySelectorAll('[data-follow-color]'), (elm) => {
        let input  = elm.querySelector('input'),
            followColor = ( elm ) => {
                let color    = elm.dataset.followColor,
                    classes  = elm.classList,
                    active   = elm.querySelector('input') && elm.querySelector('input').checked ? true : false,
                    followed = false;

                if ( 'inherit' === color ) {
                    classes.forEach( (_val) => {
                        if ( ! followed ) {
                            switch(true) {
                                case /^clr-.*$/i.test(_val):
                                    if ( active ) {
                                        elm.classList.add(_val.replace('clr','txt'));
                                    } else {
                                        elm.classList.remove(_val.replace('clr','txt'));
                                    }
                                    followed = true;
                                    break;
                                case /^muted/i.test(_val):
                                    followed = true;
                                    break;
                                case /^txt-.*$/i.test(_val):
                                default:
                                    break;
                            }
                        }
                    });
                    if ( ! followed ) {
                        if ( active && ! elm.classList.contains('txt-prim') ) {
                            elm.classList.add('txt-prim');
                        } else {
                            elm.classList.remove('txt-prim');
                        }
                    }
                } else
                if ( '' !== color ) {
                    if ( active && elm.style.color !== color ) {
                        elm.style.color = color;
                    } else {
                        elm.style.color = 'unset';
                    }
                }
            };// end: followColor()

        if ( input == undefined ) {
            return;
        }
        input.addEventListener('change', (evt) => {
            if ( 'radio' === evt.target.type && evt.target.name != undefined && evt.target.name != '' ) {
                Array.prototype.forEach.call(document.querySelectorAll(`input[name=${evt.target.name}]`), (radioElm) => {
                    followColor(radioElm.closest('label'));
                });
            } else {
                followColor(evt.target.closest('label'));
            }
        }, false);

        followColor(elm);
    });

    // Binding functions to global scope
    window.showDialog             = showDialog;
    window.strLength              = strLength;
    window.toggleFooter           = toggleFooter;
    window.initializeStickyFooter = initializeStickyFooter;
    //window.fixedBackdrop          = fixedBackdrop;
    //window.smoothScroll           = smoothScroll;

    // Binding resize event
    window.addEventListener( 'resize', resize_throttle, {passive: true}, false );
    // Binding scroll event
    window.addEventListener( 'scroll', scroll_throttle, {passive: true}, false );

    // Initial firing events
    optimizeDropdown();
    adjustNotes();
    adjustColumnsInRow();
    switchElementClass();
    adjustTogglePasswd();
    initializeLazyLoading();
    initializeStickyFooter();
};

/*
 * Optimize the rendered select boxes
 * @public
 */
const optimizeDropdown = () => {
    Array.prototype.forEach.call(document.getElementsByTagName('select'), (elm) => {
        if ( elm.parentNode.classList.contains('dropdown') ) {
            let optionLengths = [];

            elm.childNodes.forEach((item) => {
                if ( item.nodeName === 'OPTION' ) {
                    if ( item.textContent ) {
                        optionLengths.push( strLength( item.textContent ) );
                    }
                }
            });
            elm.style.width = `calc(${Math.max.apply( null, optionLengths )}px + 3em)`;
            elm.parentNode.style.marginRight = '0.5em';
        }
    });
};

/*
 * Adjust for the items on form having the notes
 * @public
 */
const adjustNotes = () => {
    Array.prototype.forEach.call(document.querySelectorAll('form .note'), (elm) => {
        let rowLabel = elm.parentNode.firstElementChild,
            indent   = null;

        if ( rowLabel.nodeName === 'LABEL' ) {
            indent = rowLabel.clientWidth || null;
        }
        elm.style.width = indent ? `calc(100% - ${indent}px)` : '100%';
        elm.style.marginLeft = indent ? `calc(${indent}px + 1.5em)` : 0;
        elm.style.marginTop = '0.3rem';
    });
};

/*
 * Adjust for the toggle password field on resize window
 * @public
 */
const adjustTogglePasswd = () => {
    Array.prototype.forEach.call(document.querySelectorAll('.tgl-view'), (elm) => {
        let parentWidth = elm.parentNode.clientWidth,
            tgl_btn     = elm.lastElementChild,
            btnWidth    = tgl_btn.clientWidth + (tgl_btn.style.marginLeft || 0) + (tgl_btn.style.marginRight || 0) + 3;

        elm.firstElementChild.style.maxWidth = `${(parentWidth - btnWidth)}px`;
    });
};

/*
 * Fix the position of backdrop under the overlay filter
 * @public
 * @param {boolean} isFixed
 */
const fixedBackdrop = (isFixed) => {
    Array.prototype.forEach.call(document.querySelectorAll('[data-onmenu-fixed]'), (elm) => {
        let nowY       = window.pageYOffset,
            nowX       = window.pageXOffset,
            targetRect = elm.getBoundingClientRect(),
            targetX    = targetRect.left + nowX,
            targetY    = targetRect.top + nowY,
            enabled    = /^(true|1)$/i.test(elm.dataset.onmenuFixed);
        // console.log(isFixed, nowY, targetRect, targetY, enabled);
        if ( ! enabled ) {
            return;
        }
        if ( isFixed ) {
            elm.classList.add('fixed-backdrop');
            elm.style.top  = `${-1 * nowY}px`;
            elm.style.left = `${-1 * nowX}px`;
        } else {
            elm.classList.remove('fixed-backdrop');
            elm.removeAttribute('style');
            window.scrollTo(-1 * targetX, -1 * targetY);
        }
    });
};

/*
 * Adjust for items of columns in row
 * @public
 */
const adjustColumnsInRow = () => {
    Array.prototype.forEach.call(document.querySelectorAll('form > .flx-row, form > .inline'), (elm) => {
        let children = Array.prototype.slice.call(elm.children);

        children.forEach((child, i) => {
            if ( child.classList.contains('note') ) {
                children.splice(i, 1);
            }
        });
        if ( children.length == 2 ) {
            let offset  = children[0].clientWidth || null,
                lastElm = children[1];

            if ( lastElm.nodeName === 'DIV' && offset ) {
                lastElm.style.width = `calc(100% - ${offset}px - 2em)`;
                lastElm.style.marginRight = 0;
            }
        } else {
            let reverseChildren = Array.prototype.slice.call(elm.children).reverse(),
                skip = false;

            reverseChildren.forEach((child) => {
                if ( /^(input|select|textarea)$/i.test(child.nodeName) && ! skip ) {
                    child.style.marginRight = 0;
                    skip = true;
                }
            });
        }
    });
};

/*
 * Switch classes according to screen size
 * @public
 */
const switchElementClass = () => {
    Array.prototype.forEach.call(document.querySelectorAll('[data-switch-class]'), (elm) => {
        let _pair    = elm.dataset.switchClass.split(','),
            winWidth = window.innerWidth,
            classes  = [ [], [], [] ],
            switchingClasses = [],
            currentSize = 0;

        if ( _pair.length > 0 ) {
            _pair.forEach((_v) => {
                let _tmp = _v.split(':'),
                    val  = _tmp[1] ? _tmp[1].split(' ') : undefined,
                    key  = val && /^(sm|md|lg)$/i.test(_tmp[0]) ? _tmp[0].toLowerCase() : undefined;

                if ( key && val ) {
                    if ( winWidth < 481 ) { // Small
                        currentSize = 0;
                        if ( key === 'sm' ) {
                            classes[0] = [...val];
                        }
                    } else
                    if ( winWidth > 768 ) { // Large
                        currentSize = 1;
                        if ( key === 'lg' ) {
                            classes[1] = [...val];
                        }
                    } else { // Medium
                        currentSize = 2;
                        if ( key === 'md' ) {
                            classes[2] = [...val];
                        }
                    }
                    switchingClasses = [...switchingClasses, ...val];
                }
            });
            // console.log( winWidth, classes, switchingClasses );
            elm.classList.remove(...switchingClasses);
            if ( classes[currentSize].length > 0 ) {
                elm.classList.add(...classes[currentSize]);
            }
        }
    });
};

/*
 * Fire when resize window
 * @public
 */
const resizeHandler = () => {
    optimizeDropdown();
    adjustNotes();
    adjustColumnsInRow();
    switchElementClass();
    adjustTogglePasswd();
    lazyLoading();
};

/*
 * Common throttle for resizing
 * @public
 */
window.resize_ticking = false;
const resize_throttle = () => {
    if ( !window.resize_ticking ) {
        requestAnimationFrame(() => {
            window.resize_ticking = false;
            // console.log( 'Now resizing! frame:', this );
            resizeHandler();
        });
        window.resize_ticking = true;
    }
};

/*
 * Fire when scroll window or content
 * @public
 */
const scrollHandler = () => {
    lazyLoading();
};

/*
 * Common throttle for scrolling
 * @public
 */
window.scroll_ticking = false;
const scroll_throttle = () => {
    if ( !window.scroll_ticking ) {
        requestAnimationFrame(() => {
            window.scroll_ticking = false;
            // console.log( 'Now scrolling! frame:', this );
            scrollHandler();
        });
        window.scroll_ticking = true;
    }
};

/*
 * Utility function for parsing a string into a JavaScript object type
 * @public
 * @param {string} str
 */
const parseObject = function( str ) {
    let newObj = {},
        _tmp;

    try {
        newObj = JSON.parse(str);
    } catch( e ) {
        _tmp = str.trim().replace(/^(\{|\[)+|(\]|\})+$/g, '').split(',')
        // _tmp = _tmp.map((x) => x.split(/(?<=^[^:]+?):/).map((y) => y.trim())) <- is Chrome only
        _tmp = _tmp.map((fragmentX) => {
            let _matches = fragmentX.match(/^[^:]*:/),
                _retarr  = _matches ? [ _matches[0].replace(':', ''), fragmentX.replace(_matches[0], '') ] : [ fragmentX ];
            return _retarr;
        }).map((fragmentY) => fragmentY || fragmentY.trim());
        _tmp = _tmp.reduce((obj, x, i) => {
            if ( x[0] && x[1] ) {
                let prop  = x[0].trim().replace(/^('|")+|("|')+$/g, ''),
                    value = x[1].trim().replace(/^('|")+|("|')+$/g, '');
                if ( /^callback$/i.test( prop ) ) {
                    obj[prop] = Function.call(this, `return ${value}`)();
                } else {
                    obj[prop] = value;
                }
            } else
            if ( x.length == 1 && x[0] ) {
                let value = x[0].trim().replace(/^('|")+|("|')+$/g, '');
                obj[i] = value;
            } else {
                obj = null;
            }
            return obj;
        }, {});
        newObj = _tmp ? Object.assign(newObj, _tmp) : newObj;
    }
    return newObj;
}

/* * /
let testarr = [
  null, // => null (object)
  '', // => {} (object)
  'string', // => {0: "string"} (object)
  0, // => 0 (number)
  1, // => 1 (number)
  '0', // => 0 (number)
  '1', // => 1 (number)
  true, // => true (boolean)
  false, // => false (boolean)
  'true', // => true (boolean)
  'false', // => false (boolean)
  "\\:", // => {} (object)
  ':', // => {} (object)
  ',', // => {} (object)
  '\\,', // => {} (object)
  ':,:', // => {} (object)
  'key:value', // => {key: "value"} (object)
  'key1:value1,key2:value2', // => {key1: "value1", key2: "value2"} (object)
  "'key':'value'", // => {key: "value"} (object)
  "key1:'value1',key2:'value2'", // => {key1 "value1", key2: "value2"} (object)
  '[]', // => [] (object Array)
  '[1,2,3]', // => [1,2,3] (object Array)
  "[arr1,arr2,arr3]", // => {0: "arr1", 1: "arr2", 2: "arr3"} (object)
  "['arr1','arr2','arr3']", // => {0: "arr1", 1: "arr2", 2: "arr3"} (object)
  '{}', // => {} (object)
  '{prop:value}', // => {prop: "value"} (object)
  "{'prop':'value'}", // => {prop: "value"} (object)
  '{prop1:value1, prop2:value2}', // => {prop1: "value1", prop2: "value2"} (object)
  'javascript:callback()', // => {javascript: "callback()"} (object)
  'callback()', // => {0: "callback()"} (object)
  //'callback:() => {console.log(this);}', // error
  '{callback:function(){console.log(this)};}}', // => {callback: (function)} (object)
  'http://exam.debug.com/', // => {http: "//exam.debug.com/"} (object)
  'url:ftp://exam.debug.com/ajax.php?param=a1234', // => {ftp: "//exam.debug.com/ajax.php?param=a1234"} (object)
  'https://www.google.com/maps/@?api=1&map_action=map&center=35.6812362,139.7649361', // => {1: "139.7649361", https: "//www.google.com/maps/@?api=1&map_action=map&center=35.6812362"} (object)
  'url:"https://www.google.com/maps/@?api=1&map_action=map&center=35.6812362,139.7649361"', // => {1: "139.7649361", url: "https://www.google.com/maps/@?api=1&map_action=map&center=35.6812362"} (object)
  '{url:https://www.google.com/maps/@?api=1&map_action=map&center=35.6812362%2C139.7649361}', // => {url: "https://www.google.com/maps/@?api=1&map_action=map&center=35.6812362%2C139.7649361"} (object)
  '{url:https://exam.debug.com/test.php,datetime:2019-11-14 00:12:34.567}', // => {url: "https://exam.debug.com/test.php", time: "2019-11-14 00:12:34.567"} (object)
];
testarr.forEach((v) => {
    console.log( `${v} => `, parseObject(v), `(${typeof parseObject(v)})` );
})
/ * */

/*
 * Create new element of dialog for any notifications
 * @public
 * @param {?string} title
 * @param {?string|object} content
 * @param {?boolean|object} foot
 * @param {?string} effect
 * @param {?string} size
 */
const generateDialog = function( title, content, foot, effect, size ) {
    return new Promise((resolve) => {
        let dialogs = document.getElementsByClassName('sloth-notify'),
            backdrops = document.getElementsByClassName('dialog-backdrop');

        if ( dialogs.length > 0 ) {
            Array.prototype.forEach.call(dialogs, (dialog) => {
                dialog.remove();
            });
        }
        if ( backdrops.length > 0 ) {
            Array.prototype.forEach.call(backdrops, (backdrop) => {
                backdrop.remove();
            });
        }

        let dialog    = document.createElement('div'),
            container = document.createElement('div'),
            backdrop  = document.createElement('div'),
            insertTitle = () => {
                title = title ? title.toString() : null;
                if ( title ) {
                    let dialogHeader = document.createElement('h3');

                    dialogHeader.classList.add('dialog-header');
                    dialogHeader.innerHTML = title;
                    container.append(dialogHeader);
                }
            },
            insertContent = () => {
                content = content ? (typeof content === 'string' && /^\{+.*\}$/.test(content) ? parseObject(content) : content) : null;//undefined;
                //content = content ? (typeof content === 'string' ? parseObject(content) : content) : null;
                if ( content ) {
                    let dialogBody = document.createElement('div');

                    dialogBody.classList.add('dialog-body');
                    if ( typeof content === 'string' ) {
                        dialogBody.innerHTML = content.replace(/\\(.)/mg, "$1");
                    } else
                    if ( typeof content === 'object' ) {
                        if ( content instanceof HTMLElement ) {
                            dialogBody.append(content);
                        } else
                        if ( Object.keys(content).length != 0 ) {
                            if ( content.remote && content.url ) {
                                if ( content.loader ) {
                                    dialogBody.innerHTML = content.loader.replace(/\\(.)/mg, "$1");
                                } else {
                                    dialogBody.innerHTML = '<div class="txt-center txt-fog">Now Loading...</div>';
                                }
                                fetch(content.url, {
                                    method: content.remote,
                                    mode: content.mode || 'cors',
                                    headers: {
                                        'X-Requested-With': 'XMLHttpRequest'
                                    }
                                }).then((res) => res.json())
                                .then((response) => {
                                    //console.log('Success:', JSON.stringify(response));
                                    dialogBody.innerHTML = response.content;
                                })
                                .catch((error) => {
                                    console.error('Error:', error);
                                });
                            } else
                            if ( content[0] ) {
                                dialogBody.innerHTML = content[0];
                            } else {
                                // dialogBody.textContent = JSON.stringify(content);
                                dialogBody.innerHTML = Object.values(content).join('');
                            }
                        }
                    } else {
                        dialogBody.textContent = content;
                    }
                    container.append(dialogBody);
                }
            },
            insertFoot = () => {
                foot = foot ? (typeof foot === 'string' && /^\{+.*\}$/.test(foot) ? parseObject(foot) : foot) : true;
                //foot = foot ? (typeof foot === 'string' ? parseObject(foot) : foot) : true;
                let dialogFooter = document.createElement('div'),
                    dialogButton = document.createElement('button'),
                    dialogCallback = function(){ return true },
                    buttonClass = document.body.dataset.dialogButton || undefined,
                    noRender  = false,
                    isOutside = false;

                if ( foot ) {
                    dialogFooter.classList.add('dialog-footer');
                    dialogButton.setAttribute('type', 'button');
                    if ( buttonClass ) {
                        dialogButton.classList.add(...buttonClass.split(' '));
                    }
                    if ( typeof foot === 'string' ) {
                        switch ( true ) {
                            case /^none$/i.test( foot ):
                                noRender = true;
                                break;
                            case /^dismiss-outside$/i.test( foot ):
                                isOutside = true;
                                dialogButton.classList.add(foot);
                                dialogButton.innerHTML = '<span title="Close"></span>';
                                break;
                            default:
                                dialogButton.innerHTML = foot.replace(/\\(.)/mg, "$1");
                                break;
                        }
                    } else
                    if ( typeof foot === 'object' ) {
                        if ( foot instanceof HTMLElement ) {
                            dialogButton = foot;
                        } else
                        if ( Object.keys(foot).length != 0 ) {
                            if ( Object.prototype.hasOwnProperty.call(foot, 'class') ) {
                                dialogButton.removeAttribute('class');
                                dialogButton.classList.add( ...foot.class.split(' ') );
                            }
                            if ( Object.prototype.hasOwnProperty.call(foot, 'label') ) {
                                dialogButton.innerHTML = foot.label.replace(/\\(.)/mg, "$1");
                            }
                            if ( Object.prototype.hasOwnProperty.call(foot, 'callback') ) {
                                dialogCallback = foot.callback;
                            }
                            if ( Object.prototype.hasOwnProperty.call(foot, '0') ) {
                                switch ( true ) {
                                    case /^none$/i.test( foot[0] ):
                                        noRender = true;
                                        break;
                                    case /^dismiss-outside$/i.test( foot[0] ):
                                        isOutside = true;
                                        dialogButton.classList.add(foot[0]);
                                        dialogButton.innerHTML = '<span title="Close"></span>';
                                        break;
                                    default:
                                        dialogButton.innerHTML = foot[0].replace(/\\(.)/mg, "$1");
                                        break;
                                }
                            }
                        }
                    } else {
                        dialogButton.textContent = 'Close';
                    }
                    if ( ! noRender ) {
                        dialogButton.addEventListener('click', () => {
                            dialogCallback();
                            dialog.classList.remove('show');
                            fixedBackdrop(false);
                        }, false);
                        if ( ! isOutside ) {
                            dialogFooter.append(dialogButton);
                            container.append(dialogFooter);
                        } else {
                            container.append(dialogButton);
                        }
                    }
                }
            },
            callback  = (mutationsList, observer) => {
                mutationsList.forEach((mutation) => {
                    //let self = mutation.target;

                    switch(mutation.type) {
                        case 'childList':
                            //console.log('mutation.type::childList:', mutation, self.classList );
                            Array.prototype.forEach.call(mutation.addedNodes, (elm) => {
                                if ( elm.classList.contains('dialog-content') ) {
                                    insertTitle();
                                    insertContent();
                                    insertFoot();
                                    //console.log('Created ".dialog-content" node!');
                                    resolve(dialog);
                                }
                            });
                            break;
                        /*
                        case 'attributes':
                            console.log('mutation.type::attributes:', mutation);
                            if ( mutation.oldValue && self.classList.contains(effect) ) {
                                console.log('mutation.type::attributes:', mutation);
                            }
                            break;
                        */
                    }
                });
                observer.disconnect();
            },
            observer = new MutationObserver(callback);

        // Set class of dialog transition effect
        switch(true) {
            case /^(2|slide-?in-right)$/i.test( effect ):
                effect = 'effect-2';
                break;
            case /^(3|slide-?in-bottom)$/i.test( effect ):
                effect = 'effect-3';
                break;
            case /^(4|sticky-?up)$/i.test( effect ):
                effect = 'effect-4';
                break;
            case /^(5|full-?wide)$/i.test( effect ):
                effect = 'effect-5';
                break;
            default:
                effect = 'effect-1';
                break;
        }

        // Set class of dialog size
        switch(true) {
            case /^(xl|xlarge)$/i.test( size ):
                size = 'size-xl';
                break;
            case /^(lg|large)$/i.test( size ):
                size = 'size-lg';
                break;
            case /^(md|medium)$/i.test( size ):
                size = 'size-md';
                break;
            case /^(sm|small)$/i.test( size ):
                size = 'size-sm';
                break;
            default:
                size = '';
                break;
        }

        //observer.observe(dialog, { attributes: true, attributeOldValue: true, childList: true, subtree: true });
        observer.observe(dialog, { childList: true, subtree: true });

        dialog.classList.add('sloth-notify', effect);
        if ( size !== '' ) {
            dialog.classList.add(size);
        }
        container.classList.add('dialog-content');
        backdrop.classList.add('dialog-backdrop');
        dialog.append(container);
        document.body.append(dialog);
        document.body.append(backdrop);
        backdrop.addEventListener('click', () => {
            if ( dialog.classList.contains('show') ) {
                dialog.classList.remove('show');
                fixedBackdrop(false);
            } else {
                return false;
            }
        }, false);
    });
}

/*
 * Dynamically create dialog for notification and show
 * @public
 * @param {?string} title
 * @param {?string|object} content
 * @param {?boolean|object} foot
 * @param {?string} effect
 * @param {?string} size
 */
const slothNotify = async ( title, content, foot, effect, size ) => await generateDialog( title, content, foot, effect, size );

window.slothStackTimer = [];
/*
 * Show dialog as wrapper of slothNotify
 * @public
 * @param {?string} title
 * @param {?string|object} content
 * @param {?boolean|object} foot
 * @param {?string} effect
 * @param {?string} size
 * @param {?boolean} reinit - after shown dialog
 */
const showDialog = ( title, content, foot, effect, size, reinit ) => {
    slothNotify(title, content, foot, effect, size).then((dialog) => setTimeout(() => {
//console.log(dialog);
            // Re-init this extension scripts
            if ( reinit == undefined || reinit === true ) {
                document.removeEventListener( 'DOMContentLoaded', init, false );
                init();
            }
            // Delay by transition animation interval
            dialog.classList.add('show');
            fixedBackdrop(true);
        }, 300)
    ).then((timerId) => {
        // Prevent the memory leak due to continue timer by setTimeout
        window.slothStackTimer.push( timerId );
        let loop = window.slothStackTimer.length - 1, i;
        for( i = 0; i < loop; i++ ) {
            clearTimeout( window.slothStackTimer.shift() );
        }
    });
};

/*
 * Measure the length of the specified string in pixel values
 * @public
 * @param {string} str
 * @param {?boolean} width - defaults to true
 * @param {?string} fs - base font size; defaults to "1rem"
 * @return {number|object} - return number if width is true
 */
const strLength = (str, width=true, fs='1rem') => {
    let size = { width: 0, height: 0 },
        ruler;

    // Add a string length ruler element
    if ( ! document.getElementById('sloth-ruler') ) {
        ruler = document.createElement('span');

        ruler.setAttribute('id', 'sloth-ruler');

        document.body.append(ruler);
    } else {
        ruler = document.getElementById('sloth-ruler');
    }

    ruler.style.fontSize = fs;
    ruler.textContent = str.toString();
    size.width  = ruler.clientWidth;
    size.height = ruler.clientHeight;
    ruler.parentElement.removeChild(ruler);

    return width ? size.width : size;
};

/*
 * The main routine of the sloth form validation when submission
 * @public
 * @param {Object} form - DOM Object of form to validate
 * @return {boolean} result
 */
const slothValidator = (form) => {
    let result   = false,
        title    = form.dataset.invalidTitle || 'Incomplete Submissions!',
        messages = {},
        foot     = form.dataset.dialogFooter || true,
        effect   = form.dataset.dialogEffect || 1,
        formData = new FormData(form);

    // console.log( ...formData.entries() );
    Array.prototype.forEach.call(form.querySelectorAll('[name]'), (field) => {
        messages = Object.assign(messages, singleFieldValidator( field, formData ));
    });
    if ( Object.keys(messages).length > 0 ) {
        let list = document.createElement('ul');

        Object.keys(messages).forEach((_v) => {
            let item = document.createElement('li');

            item.innerHTML = `<label>${_v}:</label><span>${messages[_v]}</span>`;
            list.append(item);
        });
        list.classList.add('error-messages');

        showDialog(title, list, foot, effect);
    } else {
        result = true;
    }
    return result;
};

/*
 * The sloth form validation process for individual fields
 * @public
 * @param {Object} field - DOM Object of element to validate
 * @param {Object} formData - FormData Object as Iterator
 * @return {Object} messages
 */
const singleFieldValidator = (field, formData) => {
    let isRequired  = field.hasAttribute('required'),
        fieldName   = field.getAttribute('name'),
        //placeholder = field.hasAttribute('placeholder') ? field.getAttribute('placeholder') : undefined,
        pattern     = field.hasAttribute('pattern') ? field.getAttribute('pattern') : undefined,
        value       = formData.get(fieldName) || '', // field.value || '',
        fieldLabel  = field.dataset.dispname || fieldName, //field.parentNode.firstElementChild.textContent,
        result      = false,
        messages    = {};

    switch (field.nodeName.toLowerCase()) {
        case 'input':
            if ( field.hasAttribute('type') ) {
                switch (field.getAttribute('type')) {
                    case 'file':
                        if ( isRequired ) {
                            if ( value.name !== '' && value.size > 0 ) {
                                // valid Okay
                                result = true;
                            } else {
                                // Not chosen error
                                messages[fieldLabel] = 'Not chosen';
                            }
                        } else {
                            // through
                            result = null;
                        }
                        break;
                    case 'radio':
                    case 'checkbox':
                        if ( isRequired ) {
                            if ( value !== '' ) {
                                // valid Okay
                                result = true;
                            } else {
                                // Not chosen error
                                messages[fieldLabel] = 'Not chosen';
                            }
                        } else {
                            // through
                            result = null;
                        }
                        break;
                    case 'hidden':
                        // through
                        result = null;
                        break;
                    case 'text':
                    case 'email':
                    case 'password':
                    case 'number':
                    default:
                        field.classList.remove('value-ok', 'value-ng');
                        if ( isRequired ) {
                            if ( value !== '' ) {
                                if ( pattern ) {
                                    if ( new RegExp(pattern).test(value) ) {
                                        // valid Okay
                                        result = true;
                                    } else {
                                        // Invalid error
                                        messages[fieldLabel] = 'Invalid value';
                                    }
                                } else {
                                    // valid Okay
                                    result = true;
                                }
                            } else {
                                // Not exists error
                                messages[fieldLabel] = 'Not exists value';
                            }
                        } else
                        if ( pattern ) {
                            if ( value !== '' ) {
                                if ( new RegExp(pattern).test(value) ) {
                                    // valid Okay
                                    result = true;
                                } else {
                                    // Invalid error
                                    messages[fieldLabel] = 'Invalid value';
                                }
                            } else {
                                // through
                                result = null;
                            }
                        } else {
                            // through
                            result = null;
                        }
                        if ( result != null ) {
                            field.classList.add( result ? 'value-ok' : 'value-ng' );
                            if ( field.getAttribute('type') === 'password' && field.parentNode.classList.contains('tgl-view') ) {
                                field.parentNode.style.borderColor = result ? '#00a968' : '#e8383d';
                            }
                        }
                        break;
                }
            }
            break;
        case 'select':
            field.classList.remove('value-ok', 'value-ng');
            if ( isRequired ) {
                if ( value !== '' ) {
                    // valid Okay
                    result = true;
                } else {
                    // Not chosen error
                    messages[fieldLabel] = 'Not chosen';
                }
            } else {
                // through
                result = null;
            }
            if ( result != null ) {
                field.classList.add( result ? 'value-ok' : 'value-ng' );
            }
            break;
        case 'textarea':
            field.classList.remove('value-ok', 'value-ng');
            if ( isRequired ) {
                if ( value !== '' ) {
                    if ( pattern ) {
                        if ( new RegExp(pattern).test(value.replace(/\r?\n/g, '')) ) {
                            // valid Okay
                            result = true;
                        } else {
                            // Invalid error
                            messages[fieldLabel] = 'Invalid value';
                        }
                    } else {
                        // valid Okay
                        result = true;
                    }
                } else {
                    // Not exists error
                    messages[fieldLabel] = 'Not exists value';
                }
            } else
            if ( pattern ) {
                if ( value !== '' ) {
                    if ( new RegExp(pattern).test(value.replace(/\r?\n/g, '')) ) {
                        // valid Okay
                        result = true;
                    } else {
                        // Invalid error
                        messages[fieldLabel] = 'Invalid value';
                    }
                } else {
                    // through
                    result = null;
                }
            } else {
                // through
                result = null;
            }
            if ( result != null ) {
                field.classList.add( result ? 'value-ok' : 'value-ng' );
            }
            break;
    }
    return messages;
};

/*
 * Ready to loading images
 * @public
 */
const initializeLazyLoading = () => {
    let ll_images = 0,
        inner_images = 0,
        toHash = (string, def) => {
            let hash = def || 0,
                len = string.length, i, chr;
            if ( string.length === 0 ) return hash;
            for ( i = 0; i < len; i++ ) {
                chr   = string.charCodeAt(i);
                hash  = ((hash << 5) - hash) + chr;
                hash |= 0;// Convert to 32bit integer
            }
            // return (`0000000${(hash >>> 0)}`.toString(16)).substr(-8);
            return hash.toString(16).replace(/^-/, '');
        },
        wrapSelector;

    Array.prototype.forEach.call(document.querySelectorAll('[data-src]'), (elm) => {
        if ( /^(img)$/i.test( elm.nodeName ) && elm.dataset.src !== 'null' && !elm.getAttribute('src') ) {
            if ( ! /^span$/i.test( elm.parentNode.nodeName ) || ! elm.parentNode.classList.contains('img-wrap') ) {
                let hashId = `llimg-${toHash(elm.outerHTML, ll_images)}`;
                elm.outerHTML = `<span id="${hashId}" class="img-wrap">${elm.outerHTML}</span>`;
                let parentNode = document.getElementById(hashId).closest('.lazy-load, .dialog-body');
                if ( parentNode ) {
                    inner_images++;
                    wrapSelector = parentNode.classList.contains('dialog-body') ? '.dialog-body' : '.lazy-load';
                }
                ll_images++;
            }
        }
    });
    if ( ll_images > 0 ) {
        if ( inner_images == 0 ) {
            lazyLoading();
        } else {
            Array.prototype.forEach.call(document.querySelectorAll(wrapSelector), (elm) => {
                elm.addEventListener('resize', () => { lazyLoading( wrapSelector ) }, false);
                elm.addEventListener('scroll', () => { lazyLoading( wrapSelector ) }, false);
            });
            lazyLoading( wrapSelector );
        }
    }
};

/*
 * Common loading image
 * @public
 * @param {string} src - source path or uri
 */
const loadImage = (src) => new Promise((resolve, reject) => {
    let img = new Image();
    img.onload = () => resolve(img);
    img.onerror = (err) => reject(err);
    img.src = src;
});

/*
 * The sloth lazy loading images
 * @public
 * @param {?string} selector - Selector of container to apply the lazy loading
 */
const lazyLoading = (selector) => {
    let target = selector ? `${selector} [data-src]` : '[data-src]';

    Array.prototype.forEach.call(document.querySelectorAll(target), async (elm) => {
        if ( /^(img)$/i.test( elm.nodeName ) && elm.dataset.src !== 'null' && !elm.getAttribute('src') ) {
            let imgSrc       = elm.dataset.src || '',
                imgLoaded    = elm.parentNode.dataset.loaded || false,
                elmRect      = elm.getBoundingClientRect(),
                //scrollTop    = document.documentElement.scrollTop || document.body.scrollTop,
                //scrollLeft   = document.documentElement.scrollLeft || document.body.scrollLeft,
                viewHeight   = window.innerHeight,
                viewWidth    = window.innerWidth,
                elmTop       = Math.ceil( elmRect.top ),
                elmBottom    = Math.floor( elmRect.bottom ),
                elmLeft      = Math.ceil( elmRect.left ),
                elmRight     = Math.floor( elmRect.right ),
                bufferMargin = elm.dataset.buffer ? parseInt(elm.dataset.buffer, 10) : 0;

            if ( selector ) {
                let wrapElm = elm.closest(selector);

                //scrollTop  = wrapElm.scrollTop;
                //scrollLeft = wrapElm.scrollLeft;
                viewHeight = wrapElm.clientHeight;
                viewWidth  = wrapElm.clientWidth;
            }
            if ( imgSrc !== '' && ! imgLoaded ) {
                if ( ( (elmTop + bufferMargin >= 0 || elmBottom - bufferMargin >= 0) && (elmTop + bufferMargin <= viewHeight || elmBottom - bufferMargin <= viewHeight) )
                  && ( (elmLeft + bufferMargin >= 0 || elmRight - bufferMargin >= 0) && (elmLeft + bufferMargin <= viewWidth || elmRight - bufferMargin <= viewWidth) ) ) {
                    await loadImage(imgSrc).then((img) => {
                        // console.log( `Loaded image: "${elm.getAttribute('alt')}", RelativeImagePositionV（${elmTop} 〜 ${elmBottom}）, Buffer: ${bufferMargin}, RelativeViewV（0 〜 ${viewHeight}）` );
                        elm.setAttribute( 'src', img.src );
                        elm.removeAttribute( 'data-src' );
                        elm.removeAttribute( 'data-buffer' );
                        elm.removeAttribute( 'data-loadersize' );
                        elm.parentNode.setAttribute( 'data-loaded', true );
                    }).catch((error) => {
                        console.error('Error:', error);
                    });
                }
            }
        }
    })
}

/*
 * Pull-up content on the sticky footer
 */
const pullupContent = () => {
    Array.prototype.forEach.call(document.querySelectorAll('.sticky-footer.pullup'), (elm) => {
        let footerRect = elm.getBoundingClientRect();

        elm.previousElementSibling.style.paddingBottom = `${footerRect.height}px`;
        elm.style.position = 'sticky';
    });
}

/*
 * Toggle collapsible content on the sticky footer
 */
const toggleFooter = () => {
    Array.prototype.forEach.call(document.querySelectorAll('.toggle-switch'), (elm) => {
        let evt = document.createEvent('HTMLEvents');

        evt.initEvent('click', true, true);
        return elm.dispatchEvent(evt);
    });
}

/*
 * Initialize for the sticky footer
 */
const initializeStickyFooter = () => {
    Array.prototype.forEach.call(document.querySelectorAll('.sticky-footer'), (elm) => {
        let parentClasses = elm.parentNode.classList;

        if ( !parentClasses.contains('of-s') && !parentClasses.contains('of-a') && !parentClasses.contains('of-ys') && !parentClasses.contains('of-ya') ) {
            elm.parentNode.style.overflowY = 'auto';
            elm.parentNode.style.height = '100vh';
        }
    });
}

/*
 * Generate unique id as like hash
 */
const makeId = (str) => {
    let hash = str.split('').reduce((a,b) => (((a << 5) - a) + b.charCodeAt(0))|0, 0);
    return `note-${Math.abs(hash)}`;
}

/*
 * Smooth Scroll for Table Of Contents
 */
const smoothScroll = (target) => {
    const divisor    = 8;
    const range      = (divisor / 2) + 1;
    let nowY   = window.pageYOffset,
        offset = 0,
        toY;

    Array.prototype.forEach.call(document.querySelectorAll('.navi-menu'), (elm) => {
        offset += elm.getBoundingClientRect().height;
    });
    const targetRect = target.getBoundingClientRect();
    const targetY    = targetRect.top + nowY - offset;
    const loop = () => {
        toY = nowY + Math.round((targetY - nowY) / divisor);
        window.scrollTo(0, toY);
        nowY = toY;
        if ( document.body.clientHeight - window.innerHeight < toY ) {
            window.scrollTo(0, document.body.clientHeight);
            return;
        }
        if ( toY >= targetY + range || toY <= targetY - range ) {
            window.setTimeout(loop, 10);
        } else {
            window.scrollTo(0, targetY);
        }
    };
    loop();
}

/*
 * Dispatcher
 */
if ( document.readyState === 'complete' || ( document.readyState !== 'loading' && ! document.documentElement.doScroll ) ) {
    init();
} else
if ( document.addEventListener ) {
    document.addEventListener( 'DOMContentLoaded', init, false );
} else {
    window.onload = init;
}
