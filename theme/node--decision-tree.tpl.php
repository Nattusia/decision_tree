<!--  Do not remove this wrapper -->
<div id = 'ar-wropper'>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ((!$page && !empty($title)) || !empty($title_prefix) || !empty($title_suffix) || $display_submitted): ?>
  <header>

    <?php if ($display_submitted): ?>
    <span class="submitted">
      <?php print $user_picture; ?>
      <?php print $submitted; ?>
    </span>
    <?php endif; ?>
  </header>
  <?php endif; ?>
  <?php
    // Hide comments, tags, and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_tags']);
    print render($content);
  ?>
  <?php
    // Only display the wrapper div if there are tags or links.
    $field_tags = render($content['field_tags']);
    $links = render($content['links']);
    if ($field_tags || $links):
  ?>
   <footer>
     <?php print $field_tags; ?>
     <?php print $links; ?>
  </footer>
  <?php endif; ?>
  <?php print render($content['comments']); ?>
</article>
</div>