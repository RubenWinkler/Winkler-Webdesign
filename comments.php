<?php

if (post_password_required()) {
    return;
}

?>

<section id="comments">

    <div class="container spacer-md-bottom">
        <div class="row">
            <div class="col-12">
                <div class="comments-wrap">

                    <?php

                    comment_form( array(
                        'fields'               => array(
                            'author' => '<div class="comment-form-row"><label class="sr-only" for="author">' . __("Dein Name: *", "winkler_webdesign") . '</label><input class="input-on-light" id="author" type="text" name="author" placeholder="' . __("Dein Name", "winkler_webdesign") . ' *"></div>',
                            'email'  => '<div class="comment-form-row"><label class="sr-only" for="email">' . __("E-Mail: *", "winkler_webdesign") . '</label><input class="input-on-light" id="email" type="email" name="email" placeholder="' . __("Deine E-Mail Adresse", "winkler_webdesign") . ' *"></div>',
                        ),
                        'comment_field'        => '<div class="comment-form-row"><label class="sr-only" for="comment">' . __("Kommentar: *", "winkler_webdesign") . '</label><textarea class="textarea-on-light" rows="5" name="comment" placeholder="' . __("Dein Kommentar", "winkler_webdesign") . ' *"></textarea></div>',
                        "class_submit"      => "btn-typ-2",
                        "label_submit"      => __("Absenden!", "winkler_webdesign"),
                        "title_reply"       => __("<h3>Einen Kommentar verfassen:</h3>", "winkler_webdesign")
                    ));

                    ?>

                    <?php

                    if (have_comments()) {

                    ?>

                    <h2 class="spacer-md-top">#KOMMENTARE</h2>

                    <ol class="comments-list">

                    <?php
                        foreach ($comments as $comment) {
                    ?>
                    <li class="comment">
                        <h4><?php the_author(); ?> <small>&bull; <?php comment_date("l, j. F Y"); ?></small></h4>
                        <div class="comment-body">
                            <?php comment_text(); ?>
                        </div>
                    </li>
                    <?php
                        }
                    ?>
                    </ol>
                    <?php
                    }

                    the_comments_pagination();

                    ?>
                    <!--


                    <li class="comment">
                        <h4>John Smith <small>&bull; Aug 12, 2014</small></h4>
                        <div class="comment-body">
                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. Sed posuere consectetur est at lobortis.</p>

                            <p>Donec sed odio dui. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                        </div>

                        <ol class="children">
                            <li class="comment">
                                <h4>Chris McCooper <small>&bull; Aug 12, 2014</small></h4>
                                <div class="comment-body">
                                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. Sed posuere consectetur est at lobortis.</p>
                                </div>

                                <ol class="children">
                                    <li class="comment">
                                        <h4>Johnny Dee <small>&bull; Aug 12, 2014</small></h4>
                                        <div class="comment-body">
                                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. Sed posuere consectetur est at lobortis.</p>
                                        </div>
                                    </li>
                                </ol>

                            </li>
                        </ol>
                    </li>
                    -->

                </div>
            </div>
        </div>
    </div>
</section>