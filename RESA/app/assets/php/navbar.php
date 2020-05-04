  <?php
    $var_path = "./vars.php";
    if(file_exists($var_path)){
        include_once $var_path;
    }

    if(isset($_SESSION['user'])){
        $usernav = $_SESSION['user'];
    }else{
        $usernav = null;
    }

    if(isset($_SESSION['managed'])){
        $managednav = $_SESSION['managed'];
    }else{
        $managednav = null;
    }

  ?>

  <!-- Sidebar Navigation Left -->
  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="index.html">
        <img src="https://via.placeholder.com/216x62" alt="logo">
      </a>
      <p>Bonjour<?php echo $usernav == null ? "" : ", ".$usernav->first_name." !"; ?></p>
    </div>
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">

    <?php if($managednav != null):?>
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard"> <span><i class="material-icons fs-16">house</i>Vos établissements</span></a>
            <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
                <?php foreach($managednav as $managedvalue): ?>
                    <?php $link = "./etablishment-manager.php?id=".$managedvalue->id; ?>
                    <li><a href=""><?php echo $managedvalue->name; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </li>
    <?php endif; ?>

    

      <li class="menu-item">
        <a href="pages/animation.html"> <span><i class="material-icons fs-16">format_paint</i>Animations</span>
        </a>
      </li>

    </ul>
  </aside>