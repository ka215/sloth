/*!
Sloth CSS lightweight framework
v1.2.1
Last Updated: October 29, 2019 (UTC)
Author: Ka2 - https://ka2.org/
*/
const init = function() {
    // Check whether applied the sloth styles
    if ( ! document.body.classList.contains('sloth') ) {
        return false;
    }

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

    // Add a string length ruler element
    if ( ! document.getElementById('sloth-ruler') ) {
        let ruler = document.createElement('div');

        ruler.setAttribute('id', 'sloth-ruler');

        document.body.append(ruler);
    }

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
                showDialog(filename.value, dupNode);
            }
        }, false);

        elm.style.marginBottom = 0;
        elm.parentNode.append( preview );
        elm.parentNode.append( filename );
        Array.prototype.forEach.call(notes, (note) => {
            elm.parentNode.append( note );
        });
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
                    if ( callback ) {
                        Function.call(this, `return ${callback}`)();
                    }
                    self.method = self.getAttribute('method') || 'post';
                    self.submit();
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
                content = self.dataset.content || undefined,
                foot    = self.dataset.foot || true,
                effect  = self.dataset.effect || (document.body.dataset.dialogEffect || 1);

            showDialog(title, content, foot, effect);
        }, false);
    });

    // Binding functions to global scope
    window.showDialog = showDialog;
    window.strLength = strLength;

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
 * Create new element of dialog for any notifications
 * @public
 * @param {?string} title
 * @param {?string|object} content
 * @param {?boolean|object} foot
 * @param {?string} effect
 */
const generateDialog = function( title, content, foot, effect ) {
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
            parseObject = (str) => {
                let newObj = {},
                    _tmp;

                try {
                    newObj = JSON.parse(str);
                } catch( e ) {
                    _tmp = str.slice(1, -1).split(',');
                    if ( _tmp.length > 0 ) {
                        _tmp.forEach((_v) => {
                            let _prop = _v.match(/^[^:]*:/)[0],
                                _val  = _v.replace(_prop, '');

                            _val = _val.trim();
                            _val = _val.replace(/\\(.)/mg, "$1");
                            _val = /^['"]+.*['"]+$/.test(_val) ? _val.slice(1, -1) : _val;
                            _prop = _prop.replace(':', '').trim();
                            if ( /^callback$/i.test(_prop) ) {
                                newObj[_prop] = Function.call(this, `return ${_val}`)();
                            } else {
                                newObj[_prop] = _val;
                            }
                        });
                    }
                }
                return newObj;
            },
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
                content = content ? (typeof content === 'string' && /^\{+.*\}$/.test(content) ? parseObject(content) : content) : undefined;
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
                            } else {
                                dialogBody.textContent = JSON.stringify(content);
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
                if ( foot ) {
                    let dialogFooter = document.createElement('div'),
                        dialogButton = document.createElement('button'),
                        dialogCallback = function(){ return true },
                        buttonClass = document.body.dataset.dialogButton || undefined;

                    dialogFooter.classList.add('dialog-footer');
                    dialogButton.setAttribute('type', 'button');
                    if ( buttonClass ) {
                        dialogButton.classList.add(...buttonClass.split(' '));
                    }
                    if ( typeof foot === 'string' ) {
                        dialogButton.innerHTML = foot.replace(/\\(.)/mg, "$1");
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
                                dialogButton.innerHTML = foot.label;
                            }
                            if ( Object.prototype.hasOwnProperty.call(foot, 'callback') ) {
                                dialogCallback = foot.callback;
                            }
                        }
                    } else {
                        dialogButton.textContent = 'Close';
                    }
                    dialogButton.addEventListener('click', () => {
                        dialogCallback();
                        dialog.classList.remove('show');
                    }, false);
                    dialogFooter.append(dialogButton);
                    container.append(dialogFooter);
                }
            },
            callback  = (mutationsList, observer) => {
                mutationsList.forEach((mutation) => {
                    let self = mutation.target;

                    switch(mutation.type) {
                        case 'childList':
                            //console.log('mutation.type::childList:', mutation);
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

        //observer.observe(dialog, { attributes: true, attributeOldValue: true, childList: true, subtree: true });
        observer.observe(dialog, { childList: true, subtree: true });

        dialog.classList.add('sloth-notify', effect);
        container.classList.add('dialog-content');
        backdrop.classList.add('dialog-backdrop');
        dialog.append(container);
        document.body.append(dialog);
        document.body.append(backdrop);
        backdrop.addEventListener('click', () => {
            if ( dialog.classList.contains('show') ) {
                dialog.classList.remove('show');
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
 */
const slothNotify = async ( title, content, foot, effect ) => await generateDialog( title, content, foot, effect );

window.slothStackTimer = [];
/*
 * Show dialog as wrapper of slothNotify
 * @public
 * @param {?string} title
 * @param {?string|object} content
 * @param {?boolean|object} foot
 * @param {?string} effect
 */
const showDialog = ( title, content, foot, effect ) => {
    slothNotify(title, content, foot, effect).then((dialog) => setTimeout(() => {
            // Re-init this extension scripts
            document.removeEventListener( 'DOMContentLoaded', init, false );
            init();
            // Delay by transition animation interval
            dialog.classList.add('show');
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
 * @return {number} length
 */
const strLength = (str) => {
    //let ruler  = document.getElementsByClassName('sloth-ruler').item(0),
    let ruler  = document.getElementById('sloth-ruler'),
        length = 0;

    if ( ruler ) {
        ruler.textContent = str.toString();
        length = ruler.clientWidth;
    }
    return length;
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
                    }).catch((err) => {
                        console.error(err);
                    });
                }
            }
        }
    })
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
