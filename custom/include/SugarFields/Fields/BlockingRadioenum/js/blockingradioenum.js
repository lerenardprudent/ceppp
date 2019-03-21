$(document).ready(function() {
  checkIfMustBlock();
});

function consent_change(event) {
  $target = $(event.target);
  console.log("Consent change for ", $target.prop('id'));
  checkIfMustBlock($target);
}

function checkIfMustBlock($target) {
  var mustBlock = $('.blocking-radioenum[consentwithdrawn=1]').length > 0;
  if ( !undef($target) ) {
    $consentPanel = $target.closest('.panel');
  } else {
    $consentPanel = $('.blocking-radioenum:first').closest('.panel');
  }
  
  console.log("Checking block status...", mustBlock ? "YES" : "NO");
  setPanels(mustBlock, $consentPanel);
}

function setPanels(block, $consentPanel) {
  $('.panel').each(function() {
    $a = $(this).find('.panel-heading a');
    if ( $(this).is($consentPanel) ) {
      if ( $a.is('.collapsed') && !$a.is('.opened') ) {
        $a.addClass('opened');
        $a.click();
      }
    } else {
      $a.css('background-color', block ? 'red' : '#bfcad3');
    }
  });
}