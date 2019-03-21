$(document).ready(function() {
  checkIfMustBlock();
});

function consent_change(event) {
  $target = $(event.target);
  console.log("Consent change for ", $target.prop('id'));
  checkIfMustBlock($target);
}

function checkIfMustBlock($target) {
  var consentVals = $('div[type="BlockingRadioenum"]').map(function() {
    var field = $(this).attr('field');
    var selector = '[name="' + field + '"]';
    if ( $(this).is('.edit-view-field') || $(this).is('.inlineEditActive') ) {
      selector += ':checked';
    }
    $inp = $(this).find(selector);
    var consent = true;
    if ( $inp.length ) {
      var value = $inp.attr('value');
      consent = value == "1" || value == "oui";
    }
    return consent;
  }).get();
  var mustBlock = consentVals.filter(function(x) { return !x; }).length > 0;
  console.log("Checking block status...", consentVals, mustBlock ? "YES" : "NO");
  
  if ( typeof($target) !== "undefined" ) {
    $consentPanel = $target.closest('.panel');
  } else {
    $consentPanel = $('.blocking-radioenum:first').closest('.panel');
  }
  
  setPanels(mustBlock, $consentPanel);
}

function setPanels(block, $consentPanel) {
  $('.panel').each(function() {
    $ph = $(this).find('.panel-heading');
    $a = $ph.find('a');
    if ( $(this).is($consentPanel) ) {
      if ( $a.is('.collapsed') && !$a.is('.opened') ) {
        $a.addClass('opened');
        $a.click();
      }
    } else {
      if ( block ) {
        if ( !$ph.hasClass('blocked') ) {
          $a.click();
          $ph.append($('<div class="temp-label">').append($a.text()));
          $ph.addClass('blocked');
        }
      } else { 
        $ph.removeClass('blocked');
        $ph.find(".temp-label").remove();
      }
      /*if ( block ) {
        var clickListenerAdded = false;
        var events = $._data($a[0], "events");
        if ( typeof(events) !== "undefined" && events.hasOwnProperty('click') ) {
          var evt = events['click'][0];
          if ( evt.handler == preventPanelExpansion ) {
            clickListenerAdded = true;
          }
        }
        if ( !clickListenerAdded ) {
          $a.bind('click', preventPanelExpansion);
        }
      } else {
        $a.unbind('click', preventPanelExpansion);
      }*/
    }
  });
}

function preventPanelExpansion(e) {
  e.preventDefault();
  console.log("Preventing expansion of this panel due to consent withdrawal");
  return false;
}