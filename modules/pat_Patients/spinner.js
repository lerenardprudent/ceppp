silentAjax = false;

$(document).on({
    ajaxStart: function() { if ( !silentAjax ) {
      showAjaxSpinner();
    } },
    ajaxStop: function() { showAjaxSpinner(false) }
  });
  
  function showAjaxSpinner(show)
  {
    if ( undef(show) ) {
      show = true;
    }
    
    if ( show ) {
      $('#loading-ajax').show();
    } else {
      $('#loading-ajax').hide();
    }
  }
  
  function undef(x)
  {
    return typeof x === 'undefined';
  }