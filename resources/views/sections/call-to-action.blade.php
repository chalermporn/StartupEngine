<section class="<?php if($section->getStyle() !== null) { echo $section->getStyle(); } ?> aligncenter" id="section-{{ $count }}" style="min-height:auto !important;">
    <!--.wrap.longform (width:72rem=720px) = Better reading experience (90-95 characters per line) -->
    <div class="wrap">
        <h2><?php echo $section->getTitle(); ?></h2>
        <p class="text-intro"<?php echo $section->getSubtitle(); ?>></p>
        <?php echo @markdown($section->getContent()); ?>
        <?php if( $section->getButtonUrl() !== null &&  $section->getButtonText() !== null) { ?>
            <p>
                <a href="<?php echo $section->getButtonUrl(); ?>" class="button ga-track" data-ga-text="<?php echo $section->getButtonText(); ?>" title="<?php echo $section->getButtonText(); ?>">
                    <?php echo $section->getButtonText(); ?>
                </a>
            </p>
        <?php } ?>
        <?php if( $section->getComponents() !== null) { ?>
            <ul class="flexblock plans blink" style="margin-top:30px;">
                <?php foreach($section->getComponents() as $component) { ?>
                    <li style="border-radius:4px !important; box-shadow:0px 10px 30px rgba(0,0,0,0.1) !important;">
                        <h2 style="background:#444;border-radius:4px 4px 0px 0px !important;">{{ $component->getTitle() }}</h2>
                        <div>
                            <span class="price"><sup>$</sup>{{ $component->getPrice() }}<sup>/month</sup></span>
                            <?php echo @markdown($component->getDescription()); ?>
                            <span class="button radius">Buy Now</span>
                        </div>
                    </li>
                    <?php } ?>
            </ul>
        <?php } ?>
    </div>
</section>