<?php $this->theme->display('partials/user-badge.php'); ?>

<div class="row">
  <div class="span12 album-grid">
    <div class="album-grid-hr"></div>

    <?php if(!empty($albums) ) { ?>
      <ul class="albums"></ul>
      <script> var initData = <?php echo json_encode($albums); ?>;</script>
    <?php } else { ?>
      <?php if($this->user->isAdmin()) { ?>
        <h4>You haven't created any albums, yet.</h4>  
        <p>
          It's easy to get started with albums.
          <ol>
            <li>Click the link above to create a new album.</li>
            <li>Type a name and create the album.</li>
            <li>Head over to your gallery and select the photos you'd like to add.</li>
            <li>Add them to your newly created album.</li>
          </ol>
        </p>
      <?php } else { ?>
        <h4>This user hasn't created any albums, yet.</h4>  
        <p>
          You should give them a nudge to get started!
        </p>
      <?php } ?>
    <?php } ?>
  </div>
</div>
