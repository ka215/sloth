/*!
Sloth CSS lightweight framework
v1.0.3
Last Updated: August 13,2019
Author: Ka2 - https://ka2.org/
*/
var init = function() {
    // Check whether applied the sloth styles
    if ( ! document.body.classList.contains('sloth') ) {
        return false;
    }
    
    // Apply size of shorthand to element
    Array.prototype.forEach.call(document.querySelectorAll('[data-size]'), function(elm) {
        var sizes = elm.dataset.size.split(',');
        
        sizes.forEach(function(_v) {
            var _tmp   = _v.split(':'),
                _prop  = _tmp[0] || null,
                _value = _tmp[1] || null;
            
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
                }
                switch(true) {
                    case /^\d+.*$/i.test(_value):
                        break;
                    case /^\(.*\)$/i.test(_value):
                        _value = 'calc'+ _value;
                        break;
                    default:
                        _value = 'auto';
                        break;
                }
                elm.style[_prop] = _value;
            }
        });
    });
    
    // Map data of shorthand to option in select boxes (type 1)
    Array.prototype.forEach.call(document.querySelectorAll('[data-map*="..."]'), function(elm) {
        var vals = elm.dataset.map.split('...');
        
        for ( var i = parseInt( vals[0], 10 ); i <= parseInt( vals[1], 10 ); i++ ) {
            var opt = document.createElement('option');
            
            opt.setAttribute('value', i);
            opt.textContent = i;
            elm.parentNode.append( opt );
        }
    });
    
    // Map data of shorthand to option in select boxes (type 2)
    Array.prototype.forEach.call(document.querySelectorAll('[data-map*=","]'), function(elm) {
        var vals = elm.dataset.map.split(',');
        
        vals.forEach(function(_v, _i) {
            var _tmp = _v.split(':'),
                _val = _tmp[1] ? _tmp[1] : _tmp[0] ? _tmp[0] : null,
                _key = _tmp[1] ? _tmp[0] : _val ? _i + 1 : null;
            
            if ( _key && _val ) {
                var opt = document.createElement('option');
                
                opt.setAttribute('value', _key);
                opt.textContent = _val;
                elm.parentNode.append( opt );
            }
        });
    });
    
    // Add an element of dialog for any notifications
    if ( ! document.getElementById('sloth-notify') ) {
        var dialog    = document.createElement('div'),
            container = document.createElement('div'),
            backdrop  = document.createElement('div'),
            default_effect = document.body.dataset.dialogEffect || 1;
        
        dialog.classList.add('sloth-notify', 'effect-' + default_effect);
        container.classList.add('dialog-content');
        backdrop.classList.add('dialog-backdrop');
        backdrop.addEventListener('click', function(evt) {
            if ( dialog.classList.contains('show') ) {
                dialog.classList.remove('show');
            } else {
                return false;
            }
        }, false);
        
        dialog.append(container);
        document.body.append(dialog);
        document.body.append(backdrop);
    }
    
    // Add a string length ruler element
    if ( ! document.getElementById('sloth-ruler') ) {
        var ruler = document.createElement('div');
        
        ruler.classList.add('sloth-ruler');
        
        document.body.append(ruler);
    }
    
    // Bind the handler of onChange event to dropdown
    Array.prototype.forEach.call(document.getElementsByTagName('select'), function(elm) {
        elm.addEventListener('change', function(evt) {
            if ( evt.target.value === '' ) {
                evt.target.classList.add('txt-fog');
            } else {
                evt.target.classList.remove('txt-fog');
            }
        }, false);
    });
    
    // Password field with toggling view
    Array.prototype.forEach.call(document.querySelectorAll('.tgl-view span'), function(elm) {
        elm.addEventListener('click', function(evt) {
            var self = evt.target,
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
    Array.prototype.forEach.call(document.getElementsByClassName('upload'), function(elm) {
        var filename = document.createElement('input'),
            preview  = document.createElement('div'),
            notes    = elm.parentNode.querySelectorAll('.note'),
            label    = elm.parentNode.firstElementChild;
        
        Array.prototype.forEach.call(notes, function(note) {
            note.remove();
        });
        filename.setAttribute('type', 'text');
        filename.classList.add('upload-files');
        filename.setAttribute('placeholder', 'No chosen file');
        filename.setAttribute('data-switch-class', 'sm:hidden');
        filename.setAttribute('readonly', true);
        filename.style.width = 'auto';
        filename.addEventListener('keyup', function() { return false; }, false);
        filename.addEventListener('keydown', function() { return false; }, false);
        filename.addEventListener('keypress', function() { return false; }, false);
        
        preview.classList.add('preview-image');
        preview.addEventListener('click', function(evt) {
            var self = evt.target;
            
            if ( self.classList.contains('active') ) {
                var dupNode = self.cloneNode(false);
                
                dupNode.removeAttribute('class');
                dupNode.classList.add('expand-image');
                slothNotify( 'show', filename.value, dupNode );
            }
        }, false);
        
        elm.style.marginBottom = 0;
        elm.parentNode.append( preview );
        elm.parentNode.append( filename );
        Array.prototype.forEach.call(notes, function(note) {
            elm.parentNode.append( note );
        });
        filename.style.width = 'calc(100% - '+ (label.clientWidth + elm.clientWidth + preview.clientWidth) +'px - 6em)';
        filename.style.marginRight = 0;
        
        elm.querySelector('[type=file]').addEventListener('change', function(evt) {
            var self  = evt.target,
                path  = self.value.replace(/\\/g, '/'),
                match = path.lastIndexOf('/'),
                file  = self.files[0],
                reader = new FileReader();
                
            
            //console.log( evt, path, match, file );
            filename.value = match !== -1 ? path.substring(match + 1) : path;
            reader.onload = function() {
                preview.style.backgroundImage = 'url(' + reader.result + ')';
                preview.classList.add('active');
            };
            if ( file ) {
                reader.readAsDataURL(file);
            }
            
        }, false);
    });
    
    // Check whether activate the Sloth Validator
    Array.prototype.forEach.call(document.getElementsByTagName('form'), function(elm) {
        if ( elm.classList.contains('sloth-validation') ) {
            if ( ! elm.hasAttribute('novalidate') ) {
                elm.setAttribute('novalidate', true);
            }
            // Bind the handler to onSubmit event
            elm.addEventListener('submit', function(evt) {
                var self = evt.target,
                    submits = self.querySelectorAll('[type=submit]');
                
                evt.preventDefault();
                if ( slothValidator( self ) ) {
                    Array.prototype.forEach.call(submits, function(e) {
                        // For suppressing multiplex submission
                        e.setAttribute('disabled', true);
                    });
                    self.method = 'post';
                    self.submit();
                } else {
                    return false;
                }
            }, false);
            // 
            Array.prototype.forEach.call(elm.querySelectorAll('[name]'), function(field) {
                field.addEventListener('blur', function(evt) {
                    var self = evt.target,
                        formData = new FormData( elm );
                    
                    singleFieldValidator( self, formData );
                }, false);
            });
        }
    });
    
    optimizeDropdown();
    adjustNotes();
    adjustColumnsInRow();
    switchElementClass();
    
    // Binding resize event
    window.onresize = resizeHandler;
    
};

/*
 * Optimize the rendered select boxes
 * @public
 */
function optimizeDropdown() {
    Array.prototype.forEach.call(document.getElementsByTagName('select'), function(elm) {
        if ( elm.parentNode.classList.contains('dropdown') ) {
            var optionLengths = [];
            
            elm.childNodes.forEach(function(item) {
                if ( item.nodeName === 'OPTION' ) {
                    if ( item.textContent ) {
                        optionLengths.push( strLength( item.textContent ) );
                    }
                }
            });
            elm.style.width = 'calc('+ Math.max.apply( null, optionLengths ) + 'px + 3em)';
            elm.parentNode.style.marginRight = '0.5em';
        }
    });
}
/*
 * Adjust for the items on form having the notes
 * @public
 */
function adjustNotes() {
    Array.prototype.forEach.call(document.querySelectorAll('form .note'), function(elm) {
        var rowLabel = elm.parentNode.firstElementChild,
            indent   = null;
        
        if ( rowLabel.nodeName === 'LABEL' ) {
            indent = rowLabel.clientWidth || null;
        }
        elm.style.width = indent ? 'calc(100% - '+ indent +'px)' : '100%';
        elm.style.marginLeft = indent ? 'calc('+ indent +'px + 1.5em)' : 0;
        elm.style.marginTop = '0.3rem';
    });
}

/*
 * Adjust for items of columns in row
 * @public
 */
function adjustColumnsInRow() {
    Array.prototype.forEach.call(document.querySelectorAll('form > .flx-row, form > .inline'), function(elm) {
        var children = Array.prototype.slice.call(elm.children);
        
        children.forEach(function(child, i) {
            if ( child.classList.contains('note') ) {
                children.splice(i, 1);
            }
        });
        if ( children.length == 2 ) {
            var offset  = children[0].clientWidth || null,
                lastElm = children[1];
            
            if ( lastElm.nodeName === 'DIV' && offset ) {
                lastElm.style.width = 'calc(100% - '+ offset +'px - 2em)';
                lastElm.style.marginRight = 0;
            }
        } else {
            var reverseChildren = Array.prototype.slice.call(elm.children).reverse(),
                skip = false;
            
            reverseChildren.forEach(function(child) {
                if ( /^(input|select|textarea)$/i.test(child.nodeName) && ! skip ) {
                    child.style.marginRight = 0;
                    skip = true;
                }
            });
        }
    });
}

function switchElementClass() {
    Array.prototype.forEach.call(document.querySelectorAll('[data-switch-class]'), function(elm) {
        var _pair = elm.dataset.switchClass.split(',');
        
        if ( _pair.length > 0 ) {
            _pair.forEach(function(_v) {
                var _tmp = _v.split(':'),
                    val  = _tmp[1] ? _tmp[1].split(' ') : undefined,
                    key  = val && /^(sm|md|lg)$/i.test(_tmp[0]) ? _tmp[0].toLowerCase() : undefined;
                
                if ( key && val ) {
                    var width = window.innerWidth,
                        size  = 'md'; // Defaults to Medium
                    
                    if ( width < 576 ) { // Small
                        size = 'sm';
                    } else
                    if ( width >= 768 ) { // Large
                        size = 'lg';
                    }
                    //console.log( key, val, width, size );
                    if ( key === size ) {
                        elm.classList.add(...val);
                    } else {
                        elm.classList.remove(...val);
                    }
                }
            });
        }
    });
}

/*
 * Fire when resize window
 * @public
 */
function resizeHandler() {
    optimizeDropdown();
    adjustNotes();
    adjustColumnsInRow();
    switchElementClass();
}

/*
 * Dynamically create dialog for notification and show; or hide already shown the dialog
 * @public
 * @param {string|number|boolean} state - show or hide
 * @param {?string} title
 * @param {?string|object} content
 * @param {?boolean|object} foot
 * @param {?string} effect
 */
function slothNotify( state, title, content, foot, effect ) {
    var backdrop  = document.getElementsByClassName('dialog-backdrop').item(0),
        dialog    = document.getElementsByClassName('sloth-notify').item(0),
        container = dialog.childNodes.item(0),
        state     = state && /^(show|1|true)$/i.test( state.toString() ) ? 'show' : 'hide',
        title     = title ? title.toString() : null,
        content   = content ? content : undefined,
        foot      = typeof foot !== 'undefined' ? foot : true,
        effect = effect ? effect.toString() : (document.body.dataset.dialogEffect || 1),
        callback = function(mutationsList, observer) {
            mutationsList.forEach(function(mutation) {
                var self = mutation.target;
                switch(mutation.type) {
                    case 'childList':
                        //console.log('mutation.type::childList:', mutation);
                        
                        break;
                    case 'attributes':
                        if ( mutation.oldValue && self.classList.contains(effect) ) {
                            //console.log('mutation.type::attributes:', mutation);
                            if ( state === 'show' ) {
                                self.classList.add(state);
                            } else {
                                self.classList.remove('show');
                            }
                        }
                        break;
                }
            });
            observer.disconnect();
        },
        observer = new MutationObserver(callback);
    
    if ( backdrop && dialog && container ) {
        container.innerHTML = ''; // To empty as initializing the content on the dialog
        observer.observe(dialog, { attributes: true, attributeOldValue: true, childList: true, subtree: true });
        if ( title ) {
            var dialogHeader = document.createElement('h3');
            
            dialogHeader.classList.add('dialog-header');
            dialogHeader.innerHTML = title;
            container.append(dialogHeader);
        }
        if ( content ) {
            var dialogBody = document.createElement('div');
            
            dialogBody.classList.add('dialog-body');
            if ( typeof content === 'string' ) {
                dialogBody.innerHTML = content;
            } else
            if ( typeof content === 'object' ) {
                if ( content instanceof HTMLElement ) {
                    dialogBody.append(content);
                } else
                if ( Object.keys(content).length != 0 ) {
console.log( content );
                    dialogBody.textContent = content;
                }
            } else {
                dialogBody.textContent = content;
            }
            container.append(dialogBody);
        }
        if ( foot ) {
            var dialogFooter = document.createElement('div'),
                dialogButton = document.createElement('button'),
                dialogCallback = function(){ return true };
            
            dialogFooter.classList.add('dialog-footer');
            dialogButton.setAttribute('type', 'button');
            dialogButton.classList.add(document.body.dataset.dialogButton || '');
            if ( typeof foot === 'string' ) {
                dialogButton.innerHTML = foot;
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
            dialogButton.addEventListener('click', function(evt) {
                dialogCallback();
                dialog.classList.remove('show');
            }, false);
            dialogFooter.append(dialogButton);
            container.append(dialogFooter);
        }
        if ( container.childNodes.length == 0 ) {
            return false;
        }
        // Set transition effect
        Array.prototype.forEach.call(dialog.classList, function(e) {
            if ( /^effect-\d+$/i.test(e) ) {
                dialog.classList.remove(e);
            }
        });
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
            default:
                effect = 'effect-1';
                break;
        }
        dialog.classList.add( effect );
    }
}

/*
 * Measure the length of the specified string in pixel values
 * @public
 * @param {string} str
 * @return {number} length
 */
function strLength( str ) {
    var ruler  = document.getElementsByClassName('sloth-ruler').item(0),
        length = 0;
    
    if ( ruler ) {
        ruler.textContent = str.toString();
        length = ruler.clientWidth;
    }
    return length;
}

/*
 * 
 * @public
 * @param {Object} form - DOM Object of form to validate
 * @return {boolean} result
 */
function slothValidator( form ) {
    var result   = false,
        messages = {},
        formData = new FormData(form);
    
console.log( ...formData.entries() );
    Array.prototype.forEach.call(form.querySelectorAll('[name]'), function(field) {
        messages = Object.assign(messages, singleFieldValidator( field, formData ));
    });
    if ( Object.keys(messages).length > 0 ) {
        var list = document.createElement('ul');
        
        Object.keys(messages).forEach(function(_v) {
            var item = document.createElement('li');
            
            item.innerHTML = '<label>'+ _v +':</label><span>'+ messages[_v] +'</span>';
            list.append(item);
        });
        list.classList.add('error-messages');
        
        slothNotify( 1, 'Please confirm incomplete submissions!', list );
    }
    return result;
}

/*
 * 
 * @public
 * @param {Object} field - DOM Object of element to validate
 * @param {Object} formData - FormData Object as Iterator
 * @return {Object} messages
 */
function singleFieldValidator( field, formData ) {
    var isRequired  = field.hasAttribute('required'),
        fieldName   = field.getAttribute('name'),
        placeholder = field.hasAttribute('placeholder') ? field.getAttribute('placeholder') : undefined,
        pattern     = field.hasAttribute('pattern') ? field.getAttribute('pattern') : undefined,
        value       = formData.get(fieldName) || '', // field.value || '',
        fieldLabel  = field.dataset.dispname, //field.parentNode.firstElementChild.textContent,
        result      = false,
        messages    = {};
    
    for (var v of formData.entries()) {
//console.log( v );
    }
    switch (field.nodeName.toLowerCase()) {
        case 'input':
            if ( field.hasAttribute('type') ) {
                switch (field.getAttribute('type')) {
                    case 'text':
                    case 'email':
                    case 'password':
                    case 'number':
//console.log( 'singleFieldValidator::', field, fieldLabel );
//console.log( fieldName, isRequired, placeholder, pattern, value );
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
                    case 'file':
//console.log( fieldName, isRequired, placeholder, pattern, value );
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
//console.log( fieldName, isRequired, placeholder, pattern, value );
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
                    default:
//console.log( fieldName, isRequired, placeholder, pattern );
                        // through
                        result = null;
                        break;
                }
            }
            break;
        case 'select':
//console.log( fieldName, isRequired, placeholder, pattern, value );
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
//console.log( fieldName, isRequired, placeholder, pattern, value );
            field.classList.remove('value-ok', 'value-ng');
            if ( isRequired ) {
                if ( value !== '' ) {
                    if ( pattern ) {
                        if ( new RegExp(pattern, 'm').test(value) ) {
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
                    if ( new RegExp(pattern, 'm').test(value) ) {
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
    if ( ! result && Object.keys(messages).length > 0 ) {
//console.log(result, messages);
        
    }
    return messages;
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