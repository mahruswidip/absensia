<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script src="<?php echo base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/php-email-form/validate.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url('assets'); ?>/js/main.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/purecounter/purecounter.js"></script>


<!-- <script src="<?php echo base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/php-email-form/validate.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/venobox/venobox.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/aos/aos.js"></script>
<script src="<?php echo base_url('assets/modules/datatables/datatables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/modules/datatables/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>

<script src="<?php echo base_url('assets'); ?>/js/main.js"></script>

<script type="text/javascript" src="<?php echo base_url("assets/js/custom.js") ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/loadingoverlay.js") ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap-password-toggler.js") ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/loadingoverlay.js") ?>"></script>
<script type="text/javascript" src="<?php echo base_url("plugins/select2/select2.full.min.js") ?>"></script>
<script type="text/javascript" src="<?php echo base_url("plugins/select2/select2-dropdownPosition.js") ?>"></script>
<script type="text/javascript" src="<?php echo base_url("plugins/jquery-validation/jquery.validate.min.js") ?>"></script>
<script src="<?php echo base_url('assets/modules/sweetalert2/sweetalert2.js') ?>"></script>
<script src="<?php echo base_url("plugins/jquery-smartwizard/js/jquery.smartWizard.min.js") ?>"></script>
<script src="https://kit.fontawesome.com/be6f93bda1.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="<?php echo base_url('plugins/daterange/moment.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/daterange/daterangepicker.js') ?>"></script>
<script src="<?php echo base_url('plugins/daterange/scripts.js') ?>"></script>
<script src="<?php echo base_url('plugins/') ?>jquery-mask/dist/jquery.mask.js" type="text/javascript"></script> -->
</body>
<script type="text/javascript">
  $(function() {
    $('.select2').select2({
      width: '100%'
    })
    $('.uang').mask('000.000.000.000.000', {
      reverse: true
    });
  })

  function readURL(input, type) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        if (type == "simpan") {
          $('#tampil_sim').attr('src', e.target.result);
        }
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  function showLoading() {
    document.getElementById("spinner-front").classList.add("show");
    document.getElementById("spinner-back").classList.add("show");
  }

  function hideLoading() {
    document.getElementById("spinner-front").classList.remove("show");
    document.getElementById("spinner-back").classList.remove("show");
  }

  function loading() {
    showLoading();
  }

  function unloading() {
    hideLoading();
  }
</script>

</html>