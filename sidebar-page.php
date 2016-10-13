<!-- Secondary Column -->
<div class="small-12 medium-4 medium-pull-8 columns">
  <div class="secondary">

    <?php if(  !dynamic_sidebar( 'page ' )  ): ?>
      <!--  automatically output the sidebar if it exists & if not will output message telling them to set it up-->

      <h2 class="module-heading">Sidebar Setup</h2>
      <p>Please add widgets via the admin area!</p>

    <?php endif;  ?>

  </div>
</div>
