
  <script src="<?= PATHJS; ?>plugins/jquery/dist/jquery.min.js"></script>
  <script src="<?= PATHJS; ?>plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="<?= PATHJS; ?>plugins/chart.js/dist/Chart.min.js"></script>
  <script src="<?= PATHJS; ?>plugins/chart.js/dist/Chart.extension.js"></script>
  <script src="<?= PATHJS; ?>jquery.scrollTo.min.js"></script>

  <script src="<?= PATHJS; ?>jquery-ui.min.js"></script>

  <?php error_reporting(0)?>
  <?php if ($data['page']==('profile'||'touser')&&!'login'){?>
   <script src="<?=PATHJS;?>editprofile.js"></script>
  <?php } ?>
  <?php error_reporting(0)?>
  <?php if ($data['page']=='dashboard'){?>
   <script src="<?=PATHJS;?>dashboard.js"></script>
  <?php } ?>
  <?php error_reporting(0)?>
  <?php if ($data['page']=='admin'){?>
   <script src="<?=PATHJS;?>script.js"></script>
  <?php } ?>
  <?php error_reporting(0)?>
  <?php if ($data['page']=='rank'){?>
   <script src="<?=PATHJS;?>rank.js"></script>
  
  <?php } ?>
  <?php error_reporting(0)?>


  <!--   Argon JS   -->
  <script src="<?= PATHJS; ?>argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>


</body>
</html>