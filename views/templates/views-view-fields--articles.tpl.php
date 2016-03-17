<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 */
  // dpm($fields);
  // dpm($row);
  $article_url = url('node/' . $row->nid);
?>
<article>
  <h2><?php print $row->node_title; ?></h2>
  <p><?php print $row->field_body['0']['rendered']['#markup']; ?></p>
  <a href="<?php print $article_url; ?>">Read More</a>
</article>
