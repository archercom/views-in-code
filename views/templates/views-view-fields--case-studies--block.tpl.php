<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 */
  // dpm($fields);
  // dpm($row);
  $case_study_url = url('node/' . $row->nid);
?>
<a href="<?php print $case_study_url; ?>">
  <h3><?php print $row->node_title; ?></h3>
</a>
