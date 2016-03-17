<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 */
  // dpm($fields);
  // dpm($row);
  $profile_url = url('node/' . $row->nid);
?>
<a href="<?php print $profile_url; ?>">
  <img src="/sites/all/themes/red-spider/images/freedom.jpg" alt="">
  <h3><?php print $row->node_title; ?></h3>
  <strong><?php print $row->field_field_position_title['0']['rendered']['#markup']; ?></strong>
</a>
