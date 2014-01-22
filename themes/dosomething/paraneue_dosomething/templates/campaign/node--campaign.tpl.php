<div class="content clearfix <?php print $classes; ?>">
  <h3> Know </h3>
  <?php if (isset($fact_problem)): ?>
  <div>
    <p><?php print $fact_problem['fact']; ?></p>
    <p class="legal">Source: <?php print $fact_problem['source']; ?></p>
  </div>
  <?php endif; ?>

  <?php if (isset($fact_solution)): ?>
  <div>
    <p><?php print $fact_solution['fact']; ?></p>
    <p class="legal">Source: <?php print $fact_solution['source']; ?></p>
  </div>
  <?php endif; ?>

  <?php if (isset($solution_support)): ?>
  <p><?php print $solution_support; ?></p>
  <?php endif; ?>

  <?php if (isset($more_facts)): ?>
  <?php foreach ($more_facts as $fact): ?>
  <div>
    <p><?php print $fact['fact']; ?></p>
    <p class="legal">Source: <?php print $fact['source']; ?></p>
  </div>
  <?php endforeach; ?>
  <?php endif; ?>

  <h3>Pre Steps</h3>
  <?php foreach ($step_pre as $item): ?>
  <h4><?php print $item['header']; ?></h4>
  <p><?php print $item['copy'] ?></p>
  <?php endforeach; ?>

  <h3>Post Steps</h3>
  <?php foreach ($step_post as $item): ?>
  <h4><?php print $item['header']; ?></h4>
  <p><?php print $item['copy'] ?></p>
  <?php endforeach; ?>

  <h3>FAQ</h3>
  <?php foreach ($faq as $item): ?>
  <h4><?php print $item['header']; ?></h4>
  <p><?php print $item['copy'] ?></p>
  <?php endforeach; ?>

  <?php print render($reportback_form); ?>

</div>
