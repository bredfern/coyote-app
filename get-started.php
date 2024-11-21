<?php        
echo <<<END
<div class="holder">
  <button
    hx-get="get-quote.php"
    hx-trigger="click"
    hx-swap="outerHTML"
    class="button is-small is-info"
   >
     Get A Quote
   </button>
</div>
END;
?>
