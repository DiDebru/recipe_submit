<?php if (empty($results)): ?>
  <a href="/recipe/add"><?php t('Click here to add a recipe!')?></a>
<?php endif; ?>
<?php if ($results): ?>
<h2 class='recipe_submit_title'><?php print $results['recipe_title'] ?></h2>
<ul class="recipe_submit_details">
  <li class="recipe_submit_description"><?php print $results['recipe_description'] ?></li>
  <li class="recipe_submit_ingredients"><?php print $results['recipe_ingredients'] ?></li>
  <li class="recipe_submit_instructions"><?php print $results['recipe_instructions'] ?></li>
</ul>
<em class='recipe_submit_author_name'><?php print t('Author : ')?><?php print $results['author_name'] ?></em><br/>
<em class='recipe_submit_author_email'><?php print t('Author email : ')?><?php print $results['author_email'] ?></em><br/>
<em class="recipe_submit_submitted"><?php print format_date($results['submitted'],'long'); ?></em>
<?php endif; ?>

