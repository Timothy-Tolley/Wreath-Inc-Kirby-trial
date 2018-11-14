<div class="modal-content">
  <img src = '/assets/images/wreath-inc-long-orange.svg' class="login-image" />
  <?php echo $form ?>
</div> 

<script>

(function() {  
  
  $('.message').message();

  $('.form').on('submit', function() {
    $(this).addClass('loading');
  });

  $('.modal-content').center(48);

})();

</script>