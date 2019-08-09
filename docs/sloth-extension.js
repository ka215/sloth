var init = function() {
    // Map data of shorthand to option in select boxes
    Array.prototype.forEach.call(document.querySelectorAll('[data-map*="..."]'), function(elm) {
        var vals = elm.dataset.map.split('...');
        
        for ( var i = parseInt( vals[0], 10 ); i <= parseInt( vals[1], 10 ); i++ ) {
            var opt = document.createElement('option');
            
            opt.setAttribute('value', i);
            opt.textContent = i;
            elm.parentNode.append( opt );
        }
    });
    
    // Optimize the rendered select boxes then bind the event handler
    Array.prototype.forEach.call(document.getElementsByTagName('select'), function(elm) {
        var parentClasses = elm.parentNode.classList;
        
        if ( parentClasses.contains('dropdown') ) {
            var optionLengths = [4];
            
            elm.childNodes.forEach(function(item) {
                if ( item.nodeName === 'OPTION' ) {
                    if ( item.textContent ) {
                        optionLengths.push( item.textContent.toString().length );
                    }
                }
            });
            elm.style.width = Math.max.apply( null, optionLengths ) + 0.75 + 'em';
        }
        // Bind the handler to onChange event
        elm.addEventListener('change', function(evt) {
            if ( evt.target.value === '' ) {
                evt.target.classList.add('txt-fog');
            } else {
                evt.target.classList.remove('txt-fog');
            }
        });
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
        });
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
                    alert('validation Ok!');
                    self.method = 'post';
                    self.submit();
                } else {
                    alert('validation error!');
                    return false;
                }
            }, false);
        }
    });
    
};

function slothValidator( form ) {
    console.log( 'Sloth Validator ON!', form );
    var result = true;
    
    return result;
}

if ( document.readyState === 'complete' || ( document.readyState !== 'loading' && ! document.documentElement.doScroll ) ) {
    init();
} else
if ( document.addEventListener ) {
    document.addEventListener( 'DOMContentLoaded', init, false );
} else {
    window.onload = init;
}